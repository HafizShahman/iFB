// JavaScript Document

function add_row() {
    var foodname = document.getElementById("foodname").value;
    var barcode = document.getElementById("barcode").value;
    var quan = document.getElementById("quan").value;
    var date = document.getElementById("date").value;

    var table = document.getElementById("data_table");
    var table_len = (table.rows.length) - 1;
    var row = table.insertRow(table_len).outerHTML = "<tr id='row" + table_len + "'><td id='foodname" + table_len + "'>" + foodname + "</td><td id='barcode" + table_len + "'>" + barcode + "</td><td id='quan" + table_len + "'>" + quan + "</td><td id='date" + table_len + "'>" + date + "</td><td> <input type='button' value='Delete' class='delete' onclick='delete_row(" + table_len + ")'></td></tr>";


    document.getElementById("foodname").value = "";
    document.getElementById("barcode").value = "";
    document.getElementById("quan").value = "";
    document.getElementById("date").value = "";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}
