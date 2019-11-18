<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
$value1 = '';

$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '6034265';
$mysql_database = 'animal';
$mysql_port = '16612';
$mysql_charset = 'utf8';


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);

$query2 = "select count(ID) as cnt from play_dataTB";

$result2 = $conn->query($query2) or die($this->_connect->error);

while($row = $result2->fetch_array())
{
    $value1 = $row['cnt'];
}

$query = "select one_to_one, one_to_two, one_to_three
	  ,two_to_one, two_to_two, two_to_three
      ,three_to_one, three_to_two, three_to_three
      ,four_to_one, four_to_two, four_to_three
      ,five_to_one, five_to_two, five_to_three
      ,result_style
from play_dataTB
where ID = '{$id}'";

$result = $conn->query($query) or die($this->_connect->error);


while($row1 = $result->fetch_array()) {
    $resultName = $row1[15];
}

$resultNameCheck = 0;

$query3 = "SELECT count(result_style) as cnt from play_dataTB WHERE result_style = '{$resultName}'";
//echo $query3;

$result3 = $conn->query($query3) or die($this->_connect->error);

while($row2 = $result3->fetch_array()){
    $resultNameCheck = $row2['cnt'];
//    debug_var($row2);
}
//debug_var($resultNameCheck);
//debug_var($row2);

//$num = array_count_values($gradeArr);
//foreach ($num as $key => $value_){
//        echo $key." = ". $value_.'<br>';

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/main.css">


<script>

    $(document).ready(function(){
        var value = '';

        $(".choice_div button").click(function () {
            value = $(this).attr('value');

            if(value){
                window.location.href = 'http://34.80.159.83/main.php';
            }
        });

    });


</script>

<html>
<title>
    반려종 허용 테스트
</title>
<body>

<div id = 'contentsDiv' style = "margin: auto; padding-top: 70px;width:1000px;padding-right: 100px;padding-left: 100px;">

    <div id = 'resName' style="font-weight: bold; font-size: 20px;">
        <p>누적 테스터 의 수 : <?=$value1;?>명</p>
        <p>나와 같은 선택을 한 테스터의 수 : <?=$resultNameCheck-1;?>명</p>
    </div>

    <br>
    <form action="main.php" method="get">
        <div class = 'choice_div' style="margin: auto; width:50px;">
            <input type="submit" value="다시하기"><br>
        </div>
    </form>
    <br>
</div>
</body>
</html>
