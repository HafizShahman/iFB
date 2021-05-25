<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="js/add.js"></script>
<link rel="stylesheet" href="css/add.css">
<link rel="stylesheet" href="css/reset.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/header-8.css" />
</head>

<body>
<!-- Header Start -->
<header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="site-header__start"> <a href="#" class="brand">iFoodBank</a> </div>
        <div class="site-header__middle">
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button"> menu </button>
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="menu.php">Home</a></li>
                    <li class="nav__item"><a href="contact.htmlonContacthtml">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"> <a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End --> 

<script src="js/header-8.js"></script>
<center>
    <div id="content"> </div>
    <form action="additem.php" method="post">
        <h1>Add New Data</h1>
        <p>&nbsp;</p>
        <table id="data_table">
            <tr>
                <td width="250px" class="inputdata">Food Name</td>
                <td width="100px" class="inputdata">Barcode</td>
                <td width="100px" class="inputdata">Quantity</td>
                <td width="100px" class="inputdata">Expired date</td>
            </tr>
            <tr>
                <td width="250px" class="inputdata"><input type="text" id="foodname" name="foodname" value="" required style="width: 250px"></td>
                <td width="100px" class="inputdata"><input type="text" id="barcode" name="barcode" value="" required></td>
                <td width="100px" class="inputdata"><input type="text" id="quan" name="quan" value="" required></td>
                <td width="100px" class="inputdata"><input type="date" id="date" name="date" value=""></td>
                <td class="inputdata"><input type="button" value="Delete" class="btn delete" onclick="delete_row()"></td>
                <td colspan="5" align="right"><input type="button" class="btn add" onclick="add_row();" value="Add Row"></td>
            </tr>
            <tr>
                <td colspan="6" align="center" class="inputdata"><input type="submit" class="btn" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>