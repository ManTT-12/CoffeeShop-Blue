<?php

class Database extends PDO
{
    private $table = '';
    private $select = [];
    private $join = [];
    private $leftJoin = [];
    private $rightJoin = [];
    private $condition = [];
    private $sort = [];

    public function __construct($connect, $username, $password, $table) 
    {
        parent::__construct($connect, $username, $password);
        $this->table = $table;
    }

    public static function table($table) 
    {
        $host = config("mysql_host"); 
        $port = config("mysql_port");
        $username = config("mysql_username");
        $password = config("mysql_password");
        $database = config("mysql_database");

        $connect = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $database;

        try {
            $database = new Database($connect, $username, $password, $table);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $database;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function raw($sql)
    {
        $host = config("mysql_host"); 
        $port = config("mysql_port");
        $username = config("mysql_username");
        $password = config("mysql_password");
        $database = config("mysql_database");

        $connect = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $database;

        try {
            $database = new Database($connect, $username, $password, null);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $database->query($sql, PDO::FETCH_ASSOC); 
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public function get()
    {
        list($select_str, $join_str, $condition_str, $condition_data, $sort_str) = $this->additional();

        $sql = '
            SELECT ' . 
            $select_str . 
            ' FROM '. 
            $this->table . 
            $join_str .
            $condition_str . 
            $sort_str . 
            ';
        ';

        $stmt = $this->prepare($sql);
        $result = $stmt->execute($condition_data);
        if (!$result) {
            return false;
        }
            
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first()
    {
        list($select_str, $join_str, $condition_str, $condition_data, $sort_str) = $this->additional();
        
        $sql = '
            SELECT ' . 
            $select_str . 
            ' FROM '. 
            $this->table . 
            $condition_str . 
            $sort_str . 
            ' LIMIT 1;
        ';
        $stmt = $this->prepare($sql);
        $result = $stmt->execute($condition_data);
        if (!$result) {
            return false;
        }
            
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function count($countData = 'id')
    {
        list($select_str, $join_str, $condition_str, $condition_data, $sort_str) = $this->additional();
        
        $sql = '
            SELECT COUNT(' . $countData . ') FROM '. 
            $this->table . 
            $condition_str . 
            $sort_str . 
            ';
        ';

        $stmt = $this->prepare($sql);
        $result = $stmt->execute($condition_data);
        if (!$result) {
            return false;
        }
            
        return $stmt->fetch(PDO::FETCH_ASSOC)['COUNT('. $countData . ')'];
    }

    public function select($data)
    {
        $this->select = $data;
        return $this;
    }

    public function insert($data)
    {
        $col_name = '';
        $col_holder = '';

        foreach ($data as $key => $value) {
            $col_name .= $key . ',';
            $col_holder = ':' . $key . ',';
        }

        $col_name = substr($col_name, 0, -1);
        $col_holder = substr($col_holder, 0, -1);

        $sql = 'INSERT INTO ' . $this->table . '(' . $col_name . ') VALUES(' . $col_holder . ');' ;
        $stmt = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindParam(':' . $key, $value);
        }

        return $stmt->execute();
    }

    public function insertId($data)
    {
        $col_name = '';
        $col_holder = '';

        foreach ($data as $key => $value) {
            $col_name .= $key . ',';
            $col_holder = ':' . $key . ',';
        }

        $col_name = substr($col_name, 0, -1);
        $col_holder = substr($col_holder, 0, -1);

        $sql = 'INSERT INTO ' . $this->table . '(' . $col_name . ') VALUES(' . $col_holder . ');';
        $stmt = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindParam(':' . $key, $value);
        }

        $result = $stmt->execute();

        if (!$result) {
            return false;
        }
        return $this->lastInsertId();
    }

    public function update($data)
    {
        list(,, $condition_str, $condition_data,) = $this->additional();

        $update_statement = '';
        
        foreach ($data as $key => $value) {
            $update_statement .= $key . ' = ?, ';
        }

        $update_statement = substr($update_statement, 0, -2);

        $sql = 'UPDATE ' . $this->table . ' SET ' . $update_statement . $condition_str . ';';

        $data = array_merge(array_values($data), $condition_data);
        $stmt = $this->prepare($sql);

        return $stmt->execute($data);
    }

    public function delete()
    {
        list(,, $condition_str, $condition_data,) = $this->additional();

        $sql = 'DELETE FROM ' . $this->table . $condition_str . ';';
        $stmt = $this->prepare($sql);

        return $stmt->execute($condition_data);
    }

    public function join($table2, $data, $operator, $data2)
    {
        $this->join[] = [$table2, $data, $operator, $data2];
        return $this;
    }

    public function where($data)
    {
        $this->condition = $data;
        return $this;
    }

    public function orderBy($data)
    {
        $this->sort = $data;
        return $this;
    }

    private function additional()
    {
        $select_str = '*';
        $join_str = '';
        $condition_str = '';
        $condition_data = [];
        $sort_str = '';

        if (!empty($this->select)) {
            $select_str = implode(',', $this->select);
        }

        if (!empty($this->join)) {
            foreach ($this->join as $j) {
                $join_str .= ' JOIN ' . $j[0] . ' ON ' . $j[1] . ' ' . $j[2] . ' ' . $j[3];
            }
        }

        if (!empty($this->condition)) {
            $condition_str = ' WHERE ';
            
            foreach ($this->condition as $cond) {
                $tmp = $cond[0] . ' ' . $cond[1] . ' ? AND ';
                $condition_data[] = $cond[2];
                $condition_str .= $tmp;
            }
            $condition_str = substr($condition_str, 0, -5);
        }

        if (!empty($this->sort)) {
            $sort_str = ' ORDER BY ';
            foreach ($this->sort as $key => $sr) {
                $tmp = $key . ' ' . $sr . ', ';
                $sort_str .= $tmp;
            }
            $sort_str = substr($sort_str, 0, -2) ;
        }

        return [
            $select_str,
            $join_str, 
            $condition_str, 
            $condition_data, 
            $sort_str
        ];
    }
}