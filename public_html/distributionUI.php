<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Distribution - iFoodBank</title>
<script src="js/dist.js"></script>
<link rel="stylesheet" href="css/stock.css">
<link rel="stylesheet" href="css/reset.min.css" />
<link rel="stylesheet" href="css/style.css" />

<link rel="icon" href="image/logo.png">
</head>

<body>
<?php include ("head.php"); ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script src="js/header-8.js"></script>
<center>
    <div id="content"> </div>
    <form action="distribution.php" method="post">
        <h1>Distribution</h1>
        <p>&nbsp;</p>
        <table class="responstable" id="data_table">
            <tr>
				<th width="30%" class="inputdata">Staff Name</th>
                <th width="25%" class="inputdata">Food Name</th>
                <th width="15%" class="inputdata">Barcode</th>
                <th width="15%" class="inputdata">Quantity</th>
                <th width="10%" class="inputdata"></th>
            </tr>
            <tr>
				<td class="inputdata" height="30px">
                    <input class="form_field" type="text" id="staffname" name="staffname" value="" required style="width: 90%" placeholder="">
                </td>
                <td class="inputdata" height="30px">
                    <input class="form_field" type="text" id="foodname" name="foodname" value="" required style="width: 90%" placeholder="Food Name">
                </td>
                <td class="inputdata">
                    <input type="text" id="barcode" name="barcode" value="" required style="width: 90%">
                </td>
                <td class="inputdata">
                    <input type="text" id="quan" name="quan" value="" required style="width: 90%">
                </td>
                <td colspan="5" align="right">
                    <input type="button" class="butang add" onclick="add_row();" value="Add Row">
                </td>
            </tr>
            <tr>
                <td colspan="6" align="center" class="inputdata">
                    <input type="submit" class="butang" name="submit" value="SUBMIT" onClick="submit">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>