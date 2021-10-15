  <?php      
    $host = "localhost";  
    $user = "Caman";  
    $password = "Apishcaman99";  
    $db_name = "ifoodbank";  
      
    $conn = new mysqli($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>