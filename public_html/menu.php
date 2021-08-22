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
                    <li class="nav__item"><a href="menu.php"><img src="image/home.png" alt="homeimg"></a></li>
                    <li class="nav__item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"><b><?php echo $query_name?></b><a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
<center>
    </br>
    </br>
    <table >
        <tr>
            <td class="tbox">
                <div class="box-cell box1" href="addItemUI.php" class="aligncenter">
                <img src="image/update1.png" alt="update"> <a href="addItemUI.php"  class="butang">Record Stock</a>
                </div>
            </td>
            <td> </td>
            <td class="tbox">
                <div class="box-cell box2" href="stockUI.php" class="aligncenter">
                <img src="image/inventory1.png" alt="inventory" width="150px"> <a href="stockUI.php"  class="butang">View Stock</a>
                </div>
            </td>
            <td> </td>
            <td class="tbox">
                <div class="box-cell box3" href="distributionUI.php" class="aligncenter">
                <img src="image/distributed.png" alt="distribution" width="150px"> <a href="distributionUI.php"  class="butang">Distribution</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tbox" colspan="2">
                <div class="box-cell box2" href="reportlist.php" class="aligncenter">
                <img src="image/rwport_2-removebg-preview.png" alt="inventory" width="150px" href="reportlist.php"> <a href="reportInUI.php"  class="butang">Report In</a>
                </div>
            </td>
            <td></td>
            <td></td>
            <td class="tbox" colspan="2">
                <div class="box-cell box2" href="reportlist.php" class="aligncenter">
                <img src="image/rwport_2-removebg-preview.png" alt="inventory" width="150px" href="reportlist.php"> <a href="reportOutUI.php"  class="butang">Report Out</a>
                </div>
            <td></td>
        </tr>
    </table>
</center>
</body>
</html>