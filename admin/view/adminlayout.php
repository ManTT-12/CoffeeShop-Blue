<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Dashboard</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"> Coffee Shop</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-users"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard-list"></span>
                    <span>Projects</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-shopping-bag"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-user-circle"></span>
                    <span>Accounts</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard"></span>
                    <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>

            <div class="user-wrapper">
                <div>
                    <h4>Tuan Tieu</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script type="text/javascript">
        let buttons = document.querySelectorAll('.sidebar-menu li a');
        buttons.forEach(a => {
            a.addEventListener('click', function () {
                buttons.forEach(btn =>btn.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>