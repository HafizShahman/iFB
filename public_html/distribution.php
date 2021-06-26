<?php

include( 'connection.php' );


if ( !empty( $_POST ) ) {
    if ( !empty( $_POST ) ) {
        $staffname = $_POST[ 'staffname' ];
        $foodname = $_POST[ 'foodname' ];
        $barcode = $_POST[ 'barcode' ];
        $quan = $_POST[ 'quan' ];

        if ( $_POST[ 'barcode' ] != '' ) {
            $query_report_in = "INSERT INTO db_report_out (Staff_Name, Food_Name, Barcode, Quantity, DateOut)
							VALUES ('$staffname', '$foodname', '$barcode', $quan, CURDATE() )";
            mysqli_query( $conn, $query_report_in );

        }
        if ( $_POST[ 'barcode' ] != '' ) {
            $query = "UPDATE db_stock SET Quantity = Quantity - '$quan' WHERE Barcode = '$barcode')";
            mysqli_query( $conn, $query );


        }


        ?>
<script>
	
	alert("Key in Successful ")
	window.location='distributionUI.php'
</script>
<?php
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
