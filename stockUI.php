<?php
include 'connection.php';
$query = "SELECT * FROM db_stock";
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

<link rel="icon" href="image/logo.png">
</head>
<?php

include 'session.php';
$sessionname = $_SESSION[ 'sessionname' ];
$query_session = "SELECT * from db_user WHERE Email='$sessionname'";
$result_session = mysqli_query( $conn, $query_session );
while ( $row_session = mysqli_fetch_assoc( $result_session ) ) {
    $query_name = $row_session[ 'Name' ];
    $status = $row_session[ 'Status' ];
}

?>
<body>
<?php include ("head.html"); ?>
<h1> STOCK LIST INTERFACE</h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
	<a href="addItemUI.php" type="button" class="butang">Add New Item</a><br>
<br>

<center>
    <table class="responstable">
        <tr>
            <th width="10px">No</th>
            <th width="250px">Food Name </th>
            <th width="100px">Barcode </th>
            <th width="100px">Quantity </th>
            <th width="100px">Expired date </th>
        </tr>
        <?php
        $bil = 1;
        $empty = mysqli_num_rows( $result );

        if ( mysqli_num_rows( $result ) > 0 ) {
            $i = 0;
            if ( $empty == 0 ) {
                ?><br>

        <tr>
            <td colspan="4" align="center">No Record Found</td>
        </tr>
        <?php
        } else {
            while ( $row = mysqli_fetch_array( $result ) ) {
                ?>
        <tr>
            <td><?php echo $bil; ?></td>
            <td><?php echo $row["Food_Name"]; ?></td>
            <td><?php echo $row["Barcode"]; ?></td>
            <td><?php echo $row["Quantity"]; ?></td>
            <td><?php echo $row["Date"]; ?></td>
        </tr>
        <?php
        $bil++;
        $i++;
        }
        }
        }
        ?>
    </table>
    <input type="button" onClick="window.print()" value="Print The Report" class="butang"/>
</center>
</body>
</html>
<script>
	function stockbtn(){
		window.location='addItemUI.php';
	}
</script>