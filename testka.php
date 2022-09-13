<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<?php
$objConnect = mssql_connect("LAPTOP-5R93J9J2", "sa", "123456") ;
$objDB = mssql_select_db("test");
$data = mssql_query(" SELECT * FROM test")
or die(mssql_error());


echo "<table width=60% border=1 cellpadding=3>";
echo "<tr><td>รหัส</td><td> ชื่อ</td></tr>";
while($info = mssql_fetch_array( $data ))
{
  
  $name = iconv("tis-620", "utf-8", $info['Name'] );
  
  echo "<tr><td>".$info['ID'] . "</td>";
  echo "<td>".$name. "</td>";
 
    
}

?>
</html>