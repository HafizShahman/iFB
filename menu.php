<!doctype html>
<html>
<head>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script src="js/navbar.js"></script>
</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li style="float:right">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">
                  <img src="image/user.png" width="25px">
                <i class="fa fa-caret-down"></i> </button>
                <div class="dropdown-content" id="myDropdown"> <a href="logout.php">Logout</a> </div>
            </div>
        </li>
    </ul>
</div>
<center>
			<div>
			<div class="container">
				<div class="box">
					<div class="box-row">
						<!--left box-->
						<div class="box-cell box1">
							<img src="image/update1.png" alt="update">
							<button>Record Stock</button>
						</div>
						<!--center box-->
						<div class="box-cell box2">
							<img src="image/inventory1.png" alt="inventory">
							<button>View Stock</button>
						</div>
						<!--right box-->
						<div class="box-cell box3">
							<img src="image/distributed.png" alt="distribution"><button  >Distribution</button>
						</div>
					</div>
				</div>
			</div>
			</div> 
		</center>
</body>
</html>
