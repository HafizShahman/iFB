<!doctype html>
<html>
<head>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/reset.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/header-8.css" />
<link rel="stylesheet" href="css/menu.css"/>
</head>
<body>
<!-- Header Start --> 
<script src="js/header-8.js"></script> 
<script src="js/navbar.js"></script>
<header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="site-header__start"> <a href="#" class="brand">Brand</a></div>
        <div class="site-header__middle">
            <nav class="nav"> 
				<a href="home">Home</a> 
				<a href="news">News</a>
                <div class="dropdown">
                    <a class="dropbtn">Dropdown <i class="fa fa-caret-down"></i> </a>
                    <div class="dropdown-content"> 
						<a href="addItemUI.php">New Item</a> 
						<a href="stockUI">Stock</a> 
						<a href="distribution.php">Distribution</a> 
					</div>
                </div>
            </nav>
        </div>
        <div class="site-header__end"> <a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
<center>
    <div>
        <div class="container">
            <div class="box">
                <div class="box-row"> 
                    <!--left box-->
					<div class="box-cell box1"> <img src="image/update1.png" alt="update">
                        <button><a href="addItemUI.php" class="btnmenu">Record Stock</a></button>
                    </div>
                    <!--center box-->
                    <div class="box-cell box2" href="stock.php"> <img src="image/inventory1.png" alt="inventory">
                        <button><a href="stockUI.php" class="btnmenu">View Stock</a>
                    </div>
                    <!--right box-->
                    <div class="box-cell box3"> <img src="image/distributed.png" alt="distribution">
                        <button><a href="distributionUI.php" class="btnmenu">Distribution</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
