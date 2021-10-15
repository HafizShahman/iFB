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
        <link rel="stylesheet" href="css/header-8.css" />
    </head>
    <!-- Header Start -->
<header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="site-header__start"> <a href="menu.php" class="brand">iFoodBank</a> </div>
        <div class="site-header__middle">
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button"> menu </button>
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="menu.php"><img src="image/home.png" alt="homeimg"></a></li>
                    <li class="nav__item"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"><b><?php echo $query_name?></b><a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
</html>