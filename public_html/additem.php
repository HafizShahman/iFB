<?php

include( 'connection.php' );


if ( !empty( $_POST ) ) {

    if ( !empty( $_POST ) ) {
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
							VALUES ('$foodname', '$barcode', $quan, CURDATE() )";
            mysqli_query( $conn, $query_report_in );

        }
        ?>
<script>
	
	alert("Key in Successful ")
	window.location='addItemUI.php'
</script>
<?php
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
