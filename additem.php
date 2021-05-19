<?php
include( 'connection.php' );
$sql = "INSERT INTO db_stock (Food_Name, Barcode, Quantity, Date)
VALUES ('$foodname', '$barcode', '$quan', '$date')";

if ( $conn->query( $sql ) === TRUE ) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>