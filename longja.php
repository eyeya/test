<?php
include("includes/config.inc.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    </head>


    <?php

$objDB = mssql_select_db("test");
$data = mssql_query("SELECT * FROM testka");

?>

<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center">
        <th>รหัส</th>
        <th>ชื่อ</th>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $name = iconv("tis-620", "utf-8", $info['Name']);
    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $name; ?></td>
           
        </tr>
    <?php } ?>
</table>


</html>