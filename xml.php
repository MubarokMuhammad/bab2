<?php
header("Content-type:text/xml");
$conn = mysql_connect("127.0.0.1", "root", "");
mysql_select_db("employee", $conn);
$result = mysql_query("SELECT LastName,FirstName FROM employees ORDER BY LastName,FirstName", $conn);
$i = 0;
echo '<data_mahasiswa>';
while ($i < mysql_num_rows($result))
{
    $field = mysql_fetch_row($result);
    echo "<nama>$field[1] $field[0] </nama>\r\n";
    $i++;
}
echo '</data_mahasiswa>';
mysql_close();
?>