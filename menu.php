<?php
session_start();
if ( !isset( $_SESSION[ "sess_user" ] ) ) {
    header( "location:index.html" );
} else {
    ?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<div id="bar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li style="float:right"><a class="active" href="#about">About</a></li>
    </ul>
</div>
<center>
    <h1>CREATE REGISTRATION AND LOGIN FORM USING PHP IN XAMPP</h1>
</center>
<h1>Welcome<?=$_SESSION['sess_user'];?>! </h1>
<a href="logout.php">Logout</a>
<p> WE DID IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP IN XAMPP </p>
</body>
</html>
<?php    
}
?>  