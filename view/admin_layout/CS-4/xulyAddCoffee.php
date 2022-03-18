<?php
$pdo = new PDO('mysql:host=localhost;dbname=coffeeshop', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    // $id=$_POST['id'];
    $cfname = $_POST['name'];
    $images = $_POST['image'];
    $price = $_POST['price'];
    $category = $_POST['type'];
    $st = $_POST['status'];
    $hang = $_POST['brand'];
    $descp = $_POST['description'];
    $createday = $_POST['created_at'];
    $updateday = $_POST['updated_at'];
    // $enday = $_POST['ended_at'];
    // $id =randomstring(8);

        $statement = $pdo->prepare("INSERT INTO `coffees` (`name`, `image`, `price`, `type`, `status`, `brand`,`description`,`created_at`,`updated_at`) VALUES (:cfname,:images,:price,:category,:st,:hang,:descp,:createday,:updateday);");
        // $statement->bindValue(':id', $id,PDO::PARAM_STR);
        $statement->bindValue(':cfname', $cfname,PDO::PARAM_STR);
        $statement->bindValue(':images', $images,PDO::PARAM_INT);
        $statement->bindValue(':price', $price,PDO::PARAM_STR);
        $statement->bindValue(':category', $category,PDO::PARAM_STR);
        $statement->bindValue(':st', $st,PDO::PARAM_STR);
        $statement->bindValue(':hang', $hang,PDO::PARAM_STR);
        $statement->bindValue(':descp', $descp,PDO::PARAM_STR);
        $statement->bindValue(':createday', $createday,PDO::PARAM_STR);
        $statement->bindValue(':updateday', $updateday,PDO::PARAM_STR);

        $statement->execute();
        
        // $statement2= $pdo->prepare("INSERT INTO authors (book_id, author_name) VALUES (:id,:aname)");
        // $statement2->bindValue(':id', $id);
        // $statement2->bindValue(':aname', $auth);

        // $statement2->execute();

        // $statement3= $pdo->prepare("INSERT INTO categories (book_id, category) VALUES (:id,:category)");
        // $statement3->bindValue(':id', $id);
        // $statement3->bindValue(':category', $categ);

        // $statement3->execute();
        header('Location: addcoffee.php');

}
?>