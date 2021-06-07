<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Distribution - iFoodBank</title>
<script src="js/add.js"></script>
<link rel="stylesheet" href="css/stock.css">
<link rel="stylesheet" href="css/reset.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/header-8.css" />
<link rel="icon" href="image/logo.png">
</head>

<body>
<!-- Header Start -->
<header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="site-header__start"> <a href="menu.php" class="brand">iFoodBank</a> </div>
        <div class="site-header__middle">
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button"> menu </button>
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="menu.php">Home</a></li>
                    <li class="nav__item"><a href="contact.html">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="site-header__end"> <a href="logout.php">Logout</a> </div>
    </div>
</header>
<!-- Header End -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<script src="js/header-8.js"></script>
<center>
    <div id="content"> </div>
    <form action="distribution.php" method="post">
        <h1>Add New Data</h1>
        <p>&nbsp;</p>
        <table class="responstable" id="data_table">
            <tr>
				<th width="40%" class="inputdata">Staff Name</th>
                <th width="40%" class="inputdata">Food Name</th>
                <th width="30%" class="inputdata">Barcode</th>
                <th width="15%" class="inputdata">Quantity</th>
                <th width="25%" class="inputdata">Expired date</th>
                <th colspan="2" width="10%" class="inputdata"></th>
            </tr>
            <tr>
				<td class="inputdata" height="30px">
                    <input class="form_field" type="text" id="staffname[]" name="staffname[]" value="" required style="width: 90%" placeholder="..">
                </td>
                <td class="inputdata" height="30px">
                    <input class="form_field" type="text" id="foodname[]" name="foodname[]" value="" required style="width: 90%" placeholder="Food Name">
                </td>
                <td class="inputdata">
                    <input type="text" id="barcode[]" name="barcode[]" value="" required style="width: 90%">
                </td>
                <td class="inputdata">
                    <input type="text" id="quan[]" name="quan[]" value="" required style="width: 90%">
                </td>
                <td class="inputdata">
                    <input type="date" id="date[]" name="date[]" value="" style="width: 90%">
                </td>
                <td colspan="4" align="right">
                    <input type="button" class="btn add" onclick="add_row();" value="Add Row">
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center" class="inputdata">
                    <input type="submit" class="btn" name="submit" value="SUBMIT" onClick="submit">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>