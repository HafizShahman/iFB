  <?php      
    $host = "localhost";  
    $user = "id17014125_root";  
    $password = "Apishcaman99.";  
    $db_name = "id17014125_ifoodbank";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>