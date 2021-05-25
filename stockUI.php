<?php
INCLUDE_ONCE 'connection.php';
$result = mysqli_query( $conn, "SELECT * FROM db_stock" );
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
<h1> STOCK LIST INTERFACE</h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
if ( mysqli_num_rows( $result ) > 0 ) {
    ?>
<table class="responstable">
    <tr>
        <th width="250px">Food Name
            </td>
        <th width="100px">Barcode
            </td>
        <th width="100px">Quantity
            </td>
        <th width="100px">Expired date
            </td>
    </tr>
    <?php
    $i = 0;
    while ( $row = mysqli_fetch_array( $result ) ) {
        ?>
    <tr>
        <td><?php echo $row["Food_Name"]; ?></td>
        <td><?php echo $row["Barcode"]; ?></td>
        <td><?php echo $row["Quantity"]; ?></td>
        <td><?php echo $row["Date"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
<?php
} else {
    echo "No result found";
}
?>
</body>
</html>