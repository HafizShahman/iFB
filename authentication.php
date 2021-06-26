
<?php
include( 'connection.php' );
$username = $_REQUEST[ 'user' ];
$password = $_REQUEST[ 'pass' ];
$sql = "select * from db_user where Email = '$username' and Password = '$password'";
$result = mysqli_query( $conn, $sql );
$empty = mysqli_num_rows( $result );
while ( $row = mysqli_fetch_assoc( $result ) ) {
    $status = $row[ 'Status' ];
}
if ( $empty == 0 ) {
    ?>
<script>alert('Sorry. Username or Password is wrong!!')
window.location='index.html'	
</script>
<?php
} else if ( $status == "Admin" ) {
    session_start();
    $_SESSION[ 'sessionname' ] = "$username";
    header( "Location: menu.php" );
} else {
    header( "Location: menu.php" );
}
$conn->close();
?>