<?php
INCLUDE 'connection.php';
$query = "SELECT * FROM db_report_in";
$result = mysqli_query( $conn, $query );
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li class="nav__item"><a href="menu.php">Home</a></li>
                    <li class="nav__item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"> <a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
<h1> STOCK LIST INTERFACE</h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
    <table class="responstable">
        <tr>
            <th width="10px">No</th>
            <th width="250px">Food Name </th>
            <th width="100px">Barcode </th>
            <th width="100px">Quantity </th>
            <th width="100px">Date Stock In</th>
        </tr>
        <?php
        $bil = 1;
        echo $empty = mysqli_num_rows( $result );

        if ( mysqli_num_rows( $result ) > 0 ) {
            $i = 0;
            while ( $row = mysqli_fetch_array( $result ) ) {
                ?>
        <tr>
            <td><?php echo $bil; ?></td>
            <td><?php echo $row["Food_Name"]; ?></td>
            <td><?php echo $row["Barcode"]; ?></td>
            <td><?php echo $row["Quantity"]; ?></td>
            <td><?php echo $row["DateIn"]; ?></td>
        </tr>
        <?php
        $bil++;
        $i++;
        }
        if ( $empty == 0 ) {
            ?>
        <tr>
            <td colspan="4" align="center">Tiada Rekod</td>
        </tr>
        <?php
        }
        }
        ?>
    </table>
	<input type="button" onClick="window.print()" value="Print The Report"/>
</center>
</body>
</html>