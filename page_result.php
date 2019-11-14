<? include "common.php"?>

<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-11-14
 * Time: 오후 2:24
 */
$id = $_REQUEST['id'];
$value = $_REQUEST['value'];

$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '6034265';
$mysql_database = 'animal';
$mysql_port = '16612';
$mysql_charset = 'utf8';


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
//

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "UPDATE play_dataTB SET five_to_three = '{$value}', finish_date = now() WHERE ID = '{$id}'";

$result = $conn->query($query) or die($this->_connect->error);



$query2 = "SELECT * FROM play_dataTB where ID = '{$id}'";

$result2 = $conn->query($query2) or die($this->_connect->error);


while($row = $result2->fetch_array())
{
    //$id = $row['ID'];
    debug_var($row);
}

echo "result page";

?>