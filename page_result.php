<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-11-14
 * Time: 오후 2:24
 */

function isDevDebug()
{

    $dev_ip = array("211.52.72.51",
        "211.52.72.56",
        "211.52.72.59" );

    return true;//in_array( $_SERVER["REMOTE_ADDR"], $dev_ip);
}
function debug_var($var = '')
{

    if(isDevDebug())
    {
        echo _before();
        if (is_array($var))
        {
            print_r($var);
        }
        elseif (is_object($var))
        {
            print_r($var);
        }
        else
        {
            echo $var;
        }
        echo _after();
    }
}

function _before()
{
    $before = '<div style="position:relative; z-index:999999; padding:10px 20px 10px 20px; background-color:#fbe6f2; border:1px solid #d893a1; color: #000; font-size: 12px;" class="Debug">'."\n";
    $before .= '<h5 style="font-family:verdana,sans-serif; font-weight:bold; font-size:18px; margin:0px 0px 10px 0px;">Debug Helper Output</h5>'."\n";
    $before .= '<xmp style="font-weight: bold;">'."\n";
    return $before;
}

function _after()
{
    $after = '</xmp>'."\n";
    $after .= '<h5 style="font-family:verdana,sans-serif; font-weight:bold; font-size:18px; margin:0px 0px 10px 0px;">END</h5>'."\n";
    $after .= '</div>'."\n";
    return $after;
}

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


$value1 = '';
$value2 = '';
$value3 = '';
$query2 = "SELECT five_to_one, five_to_two, five_to_three from play_dataTB where ID = '{$id}'";

$result2 = $conn->query($query2) or die($this->_connect->error);

while($row = $result2->fetch_array())
{
    //$id = $row['ID'];
    $value1 = $row['five_to_one'];
    $value2 = $row['five_to_two'];
    $value3 = $row['five_to_three'];
}

function getGrade($value1, $value2, $value3){
    $result = '';
    $val1_score = '';
    $val2_score = '';
    $val3_score = '';
    $tmpResult = '';

    for($i = 1; $i < 4; $i++){
        if(${'value'.$i} == '1'){
            ${'val'.$i.'_score'} = 0;
        } else if(${'value'.$i} == '2'){
            ${'val'.$i.'_score'} = 1;
        } else if(${'value'.$i} == '3'){
            ${'val'.$i.'_score'} = 4;
        } else if(${'value'.$i} == '4'){
            ${'val'.$i.'_score'} = 5;
        }
    }
    $tmpResult = (($val1_score + $val2_score) + $val3_score);

    if($tmpResult <= 3){
        $result = 'A';
    } else if($tmpResult <= 11){
        $result = 'B';
    } else {
        $result = 'C';
    }

    return $result;
}

$getGradeVal = getGrade($value1, $value2, $value3);


$query3 = "UPDATE play_dataTB SET chapter_five = '{$getGradeVal}' where ID = '{$id}'";

$result3 = $conn->query($query3) or die($this->_connect->error);



$resultQuery = "SELECT * from play_dataTB where ID = '{$id}'";
$res = $conn->query($resultQuery) or die($this->_connect->error);



////debug_var($row);
//
while($row = $res->fetch_array())
{
//    debug_var($row);
    $resObj = $row;
}
//
//echo "result page";


$gradeArr = Array(5);
$gradeArr[0] = $resObj['chapter_one'];
$gradeArr[1] = $resObj['chapter_two'];
$gradeArr[2] = $resObj['chapter_three'];
$gradeArr[3] = $resObj['chapter_four'];
$gradeArr[4] = $resObj['chapter_five'];


$gradeACnt = 0;
$gradeBCnt = 0;
$gradeCCnt = 0;
$res_style = '';
if($_SERVER["REMOTE_ADDR"] == '211.52.72.56'){
    $resultStyle = ['고독한 여행자','버려진 외곽의 수호자','소외받은 이들의 동반자','광장의 경청자','작은방의 생태학자','용감한 사이보그','평범한 일반인','이상적 반려인'];

    for($i = 0; $i < sizeof($gradeArr); $i++){
        if($gradeArr[$i] == 'A'){
            $gradeACnt++;
        } else if($gradeArr[$i] == 'B'){
            $gradeBCnt++;
        } else if($gradeArr[$i] == 'C'){
            $gradeCCnt++;
        }
    }

    if($gradeArr[0] == 'C'){
        $res_style = $resultStyle[1];
    } else if($gradeArr[1] == 'C'){
        $res_style = $resultStyle[2];
    } else if($gradeArr[2] == 'C'){
        $res_style = $resultStyle[3];
    } else if($gradeArr[3] == 'C'){
        $res_style = $resultStyle[4];
    } else if($gradeArr[4] == 'C'){
        $res_style = $resultStyle[5];
    } else if($gradeArr[0] == 'C' && $gradeArr[1] == 'C' && $gradeArr[2] == 'C' && $gradeArr[2] == 'C' && $gradeArr[3] == 'C' && $gradeArr[4] == 'C'){
        $res_style = $resultStyle[7];
    }



    echo $res_style;

}


//for($i = 0; $i < 24; $i++){
//    debug_var($resObj[$i]);

//}

?>