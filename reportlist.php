<?php
include 'connection.php';
include 'session.php';

$sessionname = $_SESSION[ 'sessionname' ];

$query_session = "SELECT * from db_user WHERE Email='$sessionname'";
$result_session = mysqli_query( $conn, $query_session );
while ( $row_session = mysqli_fetch_assoc( $result_session ) ) {
    $query_name = $row_session[ 'Name' ];
    $status = $row_session[ 'Status' ];
}

?>
<!doctype html>
<html>
<head>
<title>Welcome To iFoodBank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/menu.css"/>
<link rel="stylesheet" href="css/reset.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/header-8.css" />
<link rel="icon" href="image/logo.png">
</head>

<body>
<!-- Header Start -->
<header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="site-header__start"> <a href="menu.php" class="brand">iFoodBank</a> </div>
        <div class="site-header__middle">
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button"> menu </button>
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="menu.php">Home</a></li>
                    <li class="nav__item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"><b><?php echo $query_name?></b><a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
	</br><br>

<center>
    <table>
        <tr>
            <td class="tbox">
                <div class="box-cell box1" href="addItemUI.php"> <img src="image/update1.png" alt="update">
                    <button href="addItemUI.php">
                    <a href="addItemUI.php" class="btnmenu">Record Stock</a>
                    </button>
                </div>
            </td>
            <td> </td>
            <td class="tbox">
                <div class="box-cell box3" href="distributionUI.php"> <img src="image/distributed.png" alt="distribution">
                    <button href="distributionUI.php">
                    <a href="distributionUI.php" class="btnmenu">Distribution</a>
                    </button>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tbox">
                <div class="box-cell box2" href="stockUI.php"> <img src="image/inventory1.png" alt="inventory">
                    <button href="stockUI.php">
                    <a href="stockUI.php" class="btnmenu">View Stock</a>
                    </button>
                </div>
            </td>
            <td></td>
            <td class="tbox">
                <div class="box-cell box2" href="reportlist.php"> <img src="image/inventory1.png" alt="inventory">
                    <button href="reportlist.php">
                    <a href="reportlist.php" class="btnmenu">Report</a>
                    </button>
                </div>
            </td>
        </tr>
    </table>
</center>
</body>
</html>
s