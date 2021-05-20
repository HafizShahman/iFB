<!doctype html>
<html>
<head>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script src="js/navbar.js"></script>
</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li style="float:right">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()"> <img src="image/user.png"> <i class="fa fa-caret-down"></i> </button>
                <div class="dropdown-content" id="myDropdown"> <a href="logout.php">Logout</a> </div>
            </div>
        </li>
    </ul>
</div>
<?php
include('connection.php'); 
$result = mysqli_query( $conn, "SELECT * FROM db_stock" );
?>
<?php
if ( mysqli_num_rows( $result ) > 0 ) {
    ?>
<table>
    <th> 
        <td width="150">Food Name</td>
        <td width="50">Barcode</td>
        <td width="50">Quantity</td>
        <td width="70">Expired Date</td>
        </th>
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