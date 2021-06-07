<?php
include 'connection.php';
$query = "SELECT * FROM db_report_in";
$result = mysqli_query( $conn, $query );

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
                    <li class="nav__item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"><b><?php echo $query_name?></b><a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End --> 
</br>
<br>
<center>
    <select class="">
        <option value="Select" name="select">SELECT</option>
        <option value="Year" name="year">Year</option>
        <option value="January" name="1">January</option>
        <option value="February" name="2">February</option>
        <option value="March" name="3">March</option>
        <option value="April" name="4">April</option>
        <option value="May" name="5">May</option>
        <option value="June" name="6">June</option>
        <option value="July" name="7">July</option>
        <option value="August" name="8">August</option>
        <option value="September" name="9">September</option>
        <option value="October" name="10">October</option>
        <option value="November" name="11">November</option>
        <option value="December" name="12">December</option>
    </select>
	<button onClick="search()" class="btn">SEARCH</button>
    <table class="responstable">
        <tr>
            <th width="10px">No</th>
            <th width="250px">Food Name </th>
            <th width="100px">Barcode </th>
            <th width="100px">Quantity </th>
            <th width="100px">Expired Date </th>
            <th width="100px">Record Date In </th>
        </tr>
        <?php
        $bil = 1;
        echo "<br><br><br> Total In List : ";
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
            <td><?php echo $row["ExpDate"]; ?></td>
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
    <button type="button" onClick="window.print()" class="btn" >Print The Report</button>
</center>
</body>
</html>
