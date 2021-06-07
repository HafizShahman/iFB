<?php

include( 'connection.php' );

date_default_timezone_set( 'Asia/Kuala_Lumpur' ); // change according timezone
$currentTime = date( 'Y-m-d', strtotime( '+24 hours' ) );

if ( !empty( $_POST ) ) {

    if ( $barcode = $_POST[ 'barcode' ] != '' ) {
        $que = "INSERT INTO db_stock (Food_Name, Barcode, Quantity, Date)
				VALUES ";
        for ( $i = 0; $i < $barcode; $i++ ) {
            $que .= "('" . $_POST[ "foodname" ][ $i ] . "', '" . $_POST[ "barcode" ][ $i ] . "','" . $_POST[ "quan" ][ $i ] . "','" . $_POST[ "date" ][ $i ] . "',)";

        }
		$finalQuery = rtrim($que, ',');
        echo $insertstock = mysqli_query( $conn, $finalQuery );


    }

    if ( $barcode = $_POST[ 'barcode' ] != '' ) {
        $que1 = "INSERT INTO db_report_in (Food_Name, Barcode, Quantity, DateIN)
				VALUES ";
        for ( $i = 0; $i < $barcode; $i++ ) {
            $que1 .= "('" . $_POST[ "foodname" ][ $i ] . "', '" . $_POST[ "barcode" ][ $i ] . "','" . $_POST[ "quan" ][ $i ] . "','" . $currentTime . "',)";

        }
		$finalQuery1 = rtrim($que1, ',');
        echo $insertreport = mysqli_query( $conn, $finalQuery1 );
       

    }



        ?>
<script>
	
	alert("Key in Successful ")
	//window.location='stockUI.php'
</script>
<?php
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
