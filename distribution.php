<?php

include( 'connection.php' );

date_default_timezone_set( 'Asia/Kuala_Lumpur' ); // change according timezone
$currentTime = date( 'Y-m-d', strtotime( '+24 hours' ) );

echo "<pre>";
print_r( $_POST );

if ( $barcode = $_POST[ 'barcode' ] != '' ) {
    for ( $i = 0; $i < $barcode; $i++){
		$query1 = "UPDATE db_stock SET Quantity = Quantity - " . $_POST[ "quan" ][ $i ] . "WHERE Barcode =" . $_POST[ "barcode" ][ $i ] . ";";
	}
        echo $finalquery = mysqli_query($conn, $query1);
}


/**if ( !empty( $_POST ) ) {
    $foodname = $_POST[ 'foodname' ];
    $barcode = $_POST[ 'barcode' ];
    $quan = $_POST[ 'quan' ];
    $date = $_POST[ 'date' ];


    if ( $_POST[ 'barcode' ] != '' ) {
        $query = "INSERT INTO db_stock (Food_Name, Barcode, Quantity, Date)
				VALUES ('$foodname', $barcode, $quan, '$date')";
        mysqli_query( $conn, $query );


    }

    if ( $_POST[ 'barcode' ] != '' ) {
        $query_report_in = "INSERT INTO db_report_in (Food_Name, Barcode, Quantity, DateIn)
							VALUES ('$foodname', '$barcode', $quan, $currentTime )";
        mysqli_query( $conn, $query_report_in );

    }
    ?>
<script>
	
	alert("Key in Successful ")
	window.location='stockUI.php'
</script>
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
**/
$conn->close();

?>
