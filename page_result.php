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
$value = $_REQUEST['value'];

$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '6034265';
$mysql_database = 'animal';
$mysql_port = '16612';
$mysql_charset = 'utf8';


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
//
$resultStyle = ['고독한 여행자','버려진 외곽의 수호자','소외받은 이들의 동반자','광장의 경청자','작은방의 생태학자','용감한 사이보그','평범한 일반인','이상적 반려인'];
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
    $resVal = 2;
} else if($gradeArr[1] == 'C'){
    $res_style = $resultStyle[2];
    $resVal = 3;
} else if($gradeArr[2] == 'C'){
    $res_style = $resultStyle[3];
    $resVal = 4;
} else if($gradeArr[3] == 'C'){
    $res_style = $resultStyle[4];
    $resVal = 5;
} else if($gradeArr[4] == 'C'){
    $res_style = $resultStyle[5];
    $resVal = 6;
}


if($gradeArr[0] == 'C' && $gradeArr[1] == 'C' && $gradeArr[2] == 'C' && $gradeArr[2] == 'C' && $gradeArr[3] == 'C' && $gradeArr[4] == 'C'){
    $res_style = $resultStyle[7];
    $resVal = 8;
}

if($_SERVER["REMOTE_ADDR"] == '211.52.72.56'){
    $num = array_count_values($gradeArr);
    foreach ($num as $key => $value_){
//        echo $key." = ". $value_.'<br>';
        if($key !== 'C'){
            if(($key == 'A' && $value <= 5) || ($key == 'B' && $value >= 3)){
                $res_style = $resultStyle[6];
                $resVal = 7;
            } else {
                $res_style = $resultStyle[0];
                $resVal = 1;
            }
        }
    }
}

echo $res_style;



$query3 = "UPDATE play_dataTB SET result_style = '{$res_style}' where ID = '{$id}'";

$result3 = $conn->query($query3) or die($this->_connect->error);


//for($i = 0; $i < 24; $i++){
//    debug_var($resObj[$i]);

//}

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
        var id = <?=$id;?>;
        var result_style = '<?=$res_style;?>';
        var resVal = <?=$resVal;?>;
        var value = '';

        $(".choice_div button").click(function () {
            value = $(this).attr('value');

            if(value){
                window.location.href = 'http://34.80.159.83/page_5-3.php?id='+id+'&value='+value;
            }
        });
        
        // function getResultImg(resVal) {
        //     var result = '';
        //     if(resVal == '이상적 반려인'){
        //         result = '<img src="/img/result/ed8.jpg">'
        //     }
        //     return result;
        // }
    });


</script>

<html>
<title>
    반려종 허용 테스트
</title>
<body>

<div id = 'contentsDiv' style = "margin: auto; padding-top: 70px;width:1000px;padding-right: 100px;padding-left: 100px;">
    <?php
        if($res_style !== ''){?>
            <div id = 'imgDiv'>
                <img src="/img/result/ed<?=$resVal;?>.jpg">
            </div>
        <?}
    ?>

    <p>어느 날 큰 지진이 일어났다. 쓰나미가 일어나고 집이 무너지기 시작했다. 밖에서 큰 폭발음이 들렸다.<br>
        나는 방공호로 대피했다. <br>
        시간이 흐르고 잠잠해진 후, 밖으로 나온 나는 라디오의 신호를 가까스로 잡을 수 있었다.<br>
        <br>
        “살아남은 자들은 광장으로 모이세요"<br>
        <br>
        도시 외곽에 사는 나는 갈 길이 멀다. 나는 채비하고 집 밖으로 나왔다.<br>
    </p>
    <br>
<!--    <form action="page_1-1.php" method="get">-->
<!--        <div class = 'choice_div' style="margin: auto; width:50px;">-->
<!--            <input type="hidden" name = 'id' value="--><?//=$id?><!--">-->
<!--            <input type="submit" value="버려진 외곽으로 입장"><br>-->
<!--        </div>-->
<!--    </form>-->
    <br>
    <!--    <div class = 'moveBtn_div'>-->
    <!---->
    <!--        <input type="submit" value="뒤로" onclick="goBack()">-->
    <!--    </div>-->
</div>

<!--<div class = "testBtn1" value = '1' style="border-left: 1px grey;">선택지1</div>-->
<!--<div class = 'testBtn2'>-->
<!--    <a href="/test_main_page_1.php" class="btn btn-secondary" value="1">선택지1</a>-->
<!--</div>-->
<!--<div>-->
<!--    <ul>-->
<!--        <li>1</li>-->
<!--    </ul>-->
<!--    <ul>-->
<!--        <li>2</li>-->
<!--    </ul>-->
<!--</div>-->
</body>
</html>

