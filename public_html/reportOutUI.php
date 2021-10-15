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

<link rel="icon" href="image/logo.png">
</head>

<body>
<?php include ("head.php"); ?>
</br>
<br>
<center>
    <h1>Report Data Out</h1>
    <br>
    <table class="responstable">
        <tr>
            <th width="10px">No</th>
			<th width="250px">Staff Name </th>
            <th width="250px">Food Name </th>
            <th width="100px">Barcode </th>
            <th width="90px">Quantity </th>
            <th width="120px">Record Date Out </th>
        </tr>
        <?php
        $bil = 1;
        

        if ( mysqli_num_rows( $result ) > 0 ) {
            $i = 0;
            while ( $row = mysqli_fetch_array( $result ) ) {
                ?>
        <tr>
            <td><?php echo $bil; ?></td>
            <td><?php echo $row["Staff_Name"]; ?></td>
            <td><?php echo $row["Food_Name"]; ?></td>
            <td><?php echo $row["Barcode"]; ?></td>
            <td><?php echo $row["Quantity"]; ?></td>
            <td><?php echo $row["DateOut"]; ?></td>
        </tr>
        <?php
        $bil++;
        $i++;
        }
        }
        ?>
    </table>
    <button type="button" onClick="window.print()"  class="butang">Print The Report</button>
</center>
</body>
</html>
