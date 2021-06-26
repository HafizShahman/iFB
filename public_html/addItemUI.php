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
<meta charset="utf-8">
<title>New Stock - iFoodBank</title>
<link rel="stylesheet" href="css/stock.css">
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
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="menu.php"><img src="image/home.png" alt="homeimg"></a></li>
                    <li class="nav__item"><a href="contact.html">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"><b><?php echo $query_name?></b><a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
    <div id="content"> </div>
    <form action="additem.php" method="post">
        <h2 >Add New Data</h2>
        <p>&nbsp;</p>
        <script src="js/add.js"></script>
        <table class="responstable" id="datatable">
            <tr>
                <th width="70%" class="inputdata">Food Name</th>
                <th width="30%" class="inputdata">Barcode</th>
                
            </tr>
            <tr>
                <td class="inputdata" height="30px" valign="middle">
                    <input type="text" id="foodname" name="foodname" value="" required style="width: 90%">
                </td>
                <td class="inputdata" valign="middle">
                    <input type="text" id="barcode" name="barcode" value="" required style="width: 90%">
                </td>
            </tr>
            <tr>
                <th class="inputdata" valign="middle">Quantity</th>
                <th class="inputdata" valign="middle">Expired date</th>
            </tr>
            <tr>
                <td class="inputdata" valign="middle">
                    <input type="text" id="quan" name="quan" value="" required style="width: 90%">
                </td>
                <td class="inputdata" valign="middle">
                    <input type="date" id="date" name="date" value="" style="width: 90%">
                </td>
            </tr>
            <tr>
                <td align="center" class="inputdata" valign="middle">
                    <input type="submit" name="submit" value="SUBMIT" onClick="submit()" class="butang">
				</td>
				<td align="center" class="inputdata" valign="middle">
					<input type="button" name="submit" value="VIEW STOCK" onClick="stocklist()" class="butang">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>