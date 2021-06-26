  <?php      
    $host = "localhost";  
    $user = "shahman";  
    $password = "Hafsha99";  
    $db_name = "ifoodbank";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>