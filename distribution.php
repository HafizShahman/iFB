<?php

include( 'connection.php' );

date_default_timezone_set( 'Asia/Kuala_Lumpur' ); // change according timezone
$currentTime = date( 'Y-m-d', strtotime( '+24 hours' ) );

echo "<pre>";
print_r($_POST);

//$query1 = "INSERT INTO db_stock (Food_Name, Barcode, Quantity, Date)";











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
