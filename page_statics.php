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

$list1 = Array();
$list2 = Array();
$list3 = Array();
$resultName = '';

while($row1 = $result->fetch_array()) {
    $list1[0] = $row1[0];
    $list2[0] = $row1[1];
    $list3[0] = $row1[2];
    $list1[1] = $row1[3];
    $list2[1] = $row1[4];
    $list3[1] = $row1[5];
    $list1[2] = $row1[6];
    $list2[2] = $row1[7];
    $list3[2] = $row1[8];
    $list1[3] = $row1[9];
    $list2[3] = $row1[10];
    $list3[3] = $row1[11];
    $list1[4] = $row1[12];
    $list2[4] = $row1[13];
    $list3[4] = $row1[14];
    $resultName = $row1[15];
//    debug_var($row1);
}



//$replaceArrayList1 = array_replace($list1,$replaceArr);
//debug_var($replaceArrayList1);


$replaceArr = ["격리제거", "혐오공존", "긍정공존","반려"];
$targetArray = ['1','2','3','4'];

$replaceArrayList1 = str_replace($targetArray, $replaceArr,$list1);
$replaceArrayList2 = str_replace($targetArray, $replaceArr,$list2);
$replaceArrayList3 = str_replace($targetArray, $replaceArr,$list3);
//$replaceArrayList4 = str_replace($targetArray, $replaceArr,$list4);
//$replaceArrayList5 = str_replace($targetArray, $replaceArr,$list5);

//debug_var($replaceArrayList1);
//debug_var($replaceArrayList2);
//debug_var($replaceArrayList3);


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

$tmpQueryCol1 = ['one_to_one', 'one_to_two', 'one_to_three','two_to_one', 'two_to_two'];
$tmpQueryCol2 = ['two_to_three','three_to_one', 'three_to_two', 'three_to_three','four_to_one'];
$tmpQueryCol3 = ['four_to_two', 'four_to_three','five_to_one', 'five_to_two', 'five_to_three'];

//for($i = 0; $i<5; $i++){
//    ${'query_'.$i} = "select count({$tmpQueryCol1[$i]}) as cnt from play_dataTB where one_to_one = '{$list1[$i]}'";
//    ${'result_'.$i} = $conn->query(${'query_'.$i}) or die($this->_connect->error);
//    while(${'row_'.$i} = ${'result'.$i}->fetch_array()){
//        ${'res_'.$i} = ${'row_'.$i}['cnt'];
//        debug_var(${'row_'.$i}['cnt']);
//    }
//}

$res1 = Array();
$res2 = Array();
$res3 = Array();


// 결과 시작
$query_1 = "select count({$tmpQueryCol1[0]}) as cnt from play_dataTB where one_to_one = '{$list1[0]}'";
$result_1 = $conn->query($query_1) or die($this->_connect->error);
while($row_1 = $result_1->fetch_array()){
    $res1[0] = $row_1['cnt'];
}
$query_2 = "select count({$tmpQueryCol1[1]}) as cnt from play_dataTB where one_to_two = '{$list2[0]}'";
$result_2 = $conn->query($query_2) or die($this->_connect->error);
while($row_2 = $result_2->fetch_array()){
    $res1[1] = $row_2['cnt'];
}
$query_3 = "select count({$tmpQueryCol1[2]}) as cnt from play_dataTB where one_to_three = '{$list3[0]}'";
$result_3 = $conn->query($query_1) or die($this->_connect->error);
while($row_3 = $result_3->fetch_array()){
    $res1[2] = $row_3['cnt'];
}

$query_4 = "select count({$tmpQueryCol1[3]}) as cnt from play_dataTB where two_to_one = '{$list1[1]}'";
$result_4 = $conn->query($query_4) or die($this->_connect->error);
while($row_4 = $result_4->fetch_array()){
    $res1[3] = $row_4['cnt'];
}
$query_5 = "select count({$tmpQueryCol1[4]}) as cnt from play_dataTB where two_to_two = '{$list2[1]}'";
$result_5 = $conn->query($query_5) or die($this->_connect->error);
while($row_5 = $result_5->fetch_array()){
    $res1[4] = $row_5['cnt'];
}
$query_6 = "select count({$tmpQueryCol2[0]}) as cnt from play_dataTB where two_to_three = '{$list3[1]}'";
$result_6 = $conn->query($query_6) or die($this->_connect->error);
while($row_6 = $result_6->fetch_array()){
    $res2[0] = $row_6['cnt'];
}

$query_7 = "select count({$tmpQueryCol2[1]}) as cnt from play_dataTB where three_to_one = '{$list1[2]}'";
$result_7 = $conn->query($query_7) or die($this->_connect->error);
while($row_7 = $result_7->fetch_array()){
    $res2[1] = $row_7['cnt'];
}
$query_8 = "select count({$tmpQueryCol2[2]}) as cnt from play_dataTB where three_to_two = '{$list2[2]}'";
$result_8 = $conn->query($query_8) or die($this->_connect->error);
while($row_8 = $result_8->fetch_array()){
    $res2[2] = $row_8['cnt'];
}
$query_9 = "select count({$tmpQueryCol2[3]}) as cnt from play_dataTB where three_to_three = '{$list3[2]}'";
$result_9 = $conn->query($query_9) or die($this->_connect->error);
while($row_9 = $result_9->fetch_array()){
    $res2[3] = $row_9['cnt'];
}


$query_10 = "select count({$tmpQueryCol2[4]}) as cnt from play_dataTB where four_to_one = '{$list1[3]}'";
$result_10 = $conn->query($query_10) or die($this->_connect->error);
while($row_10 = $result_10->fetch_array()){
    $res2[4] = $row_10['cnt'];
}
$query_11 = "select count({$tmpQueryCol3[0]}) as cnt from play_dataTB where four_to_two = '{$list2[3]}'";
$result_11 = $conn->query($query_11) or die($this->_connect->error);
while($row_11 = $result_11->fetch_array()){
    $res3[0] = $row_11['cnt'];
}
$query_12 = "select count({$tmpQueryCol3[1]}) as cnt from play_dataTB where four_to_three = '{$list3[3]}'";
$result_12 = $conn->query($query_12) or die($this->_connect->error);
while($row_12 = $result_12->fetch_array()){
    $res3[1] = $row_12['cnt'];
}

$query_13 = "select count({$tmpQueryCol3[2]}) as cnt from play_dataTB where five_to_one = '{$list1[4]}'";
$result_13 = $conn->query($query_13) or die($this->_connect->error);
while($row_13 = $result_13->fetch_array()){
    $res3[2] = $row_13['cnt'];
}
$query_14 = "select count({$tmpQueryCol3[3]}) as cnt from play_dataTB where five_to_two = '{$list2[4]}'";
$result_14 = $conn->query($query_14) or die($this->_connect->error);
while($row_14 = $result_14->fetch_array()){
    $res3[3] = $row_14['cnt'];
}
$query_15 = "select count({$tmpQueryCol3[4]}) as cnt from play_dataTB where five_to_three = '{$list3[4]}'";
$result_15 = $conn->query($query_15) or die($this->_connect->error);
while($row_15 = $result_15->fetch_array()){
    $res3[4] = $row_15['cnt'];
}



$stageResNameKr1 = ["병든<br>떠돌이개", "다른 역사", "다른 정치관","초파리","고도의 지능과<br>감정을<br>지닌 로봇"];
$stageResNameKr2 = ["새끼를 밴<br>길고양이", "다른 민족","전통주의","거미","유전자<br>변형<br>괴생명체"];
$stageResNameKr3 = ["방사능<br>피폭자","다른 종교","진보주의","바퀴벌레","과학기술과<br>특이바이러스를<br>가진 외계인"];

//$stageResNameKr1 = ["병든<br>떠돌이개","새끼를<br>밴<br>길고양이","방사능<br>피폭자"];
//$stageResNameKr2 = ["다른 역사","다른 민족","다른 종교"];
//$stageResNameKr3 = ["다른 정치관","전통주의","진보주의"];
//$stageResNameKr4 = ["초파리","거미","바퀴벌레"];
//$stageResNameKr5 = ["고도의<br>지능과<br>감정을<br>지닌 로봇","유전자<br>변형<br>괴생명체","과학기술과<br> 특이<br>바이러스를<br>가진 외계인"];

//$stageResNameKr2 = ["이슬람<br>난민", "정치<br>견해가<br>다른 사람","안티<br>페미니스트",'페미니스트','초파리'];
//$stageResNameKr3 = ['거미','바퀴벌레','고도의<br>지능과<br>감정을<br>지닌 로봇','유전자<br>변형<br>괴생명체','과학기술과<br> 특이<br>바이러스를<br>가진 외계인'];
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
<link rel="shortcut icon" href="/common/templates/alamo/images/icon/favicon.ico">
<title>
    반려종 허용 테스트
</title>
<body>

<div id = 'StaticsContentsDiv' style = "margin: auto; padding-top: 70px;width:1000px;">

    <div id = 'resName' style="font-weight: bold; font-size: 20px;">
        <p style="font-size: 30px; font-weight: bold;"><?=$resultName;?></p>
        <br>
        <p>누적 테스터의 수 : <?=$value1;?>명</p>
        <p>나와 같은 선택을 한 테스터의 수 : <?=$resultNameCheck-1;?>명</p>
    </div>

        <div id = 'resCheck' style="width: 1000px;">
            <?
            for($i=0;$i<5;$i++){?>
                <div style="float: left; width: 200px;"><?=$stageResNameKr1[$i]?><p style="font-weight: bold;"><?=$replaceArrayList1[$i]?><br><?=$res1[$i];?>명</p></div>
            <?}?>
        </div>
        <br>
        <div id = 'resCheck' style="width: 1000px; float: left;">
            <?
            for($i=0;$i<5;$i++){?>
                <div style="float: left; width: 200px;"><?=$stageResNameKr2[$i]?><p style="font-weight: bold"><?=$replaceArrayList2[$i]?><br><?=$res2[$i];?>명</p></div>
            <?}?>
        </div>
        <br>
        <div id = 'resCheck' style="width: 1000px;">
            <?
            for($i=0;$i<5;$i++){?>
                <div style="float: left; width: 200px;"><?=$stageResNameKr3[$i]?><p style="font-weight: bold"><?=$replaceArrayList3[$i]?><br><?=$res3[$i];?>명</p></div>
            <?}?>
        </div>
    <br>
    <form action="main.php" method="get">
        <div class = 'choice_div' style="margin: auto; width:250px;">
            <input type="submit" value="다시하기"><br>
        </div>
    </form>
</div>
<div id = 'creditDiv' style="width: 1000px; margin: auto; padding-left:70px;">
    <?$creditArr = ['기획/스토리','이미지','프로그래밍', '프로젝트명'];
        $creditArr1 = ['안가영','김미래','김인환, 홍강의','개념프로젝트'];
    ?>

<!--    <div style="width:655px; float: left;">기획/스토리 : 안가영&nbsp; &nbsp; &nbsp; 이미지 : 김미래&nbsp; &nbsp; &nbsp; 프로그래밍 : 김인환, 홍강의   &nbsp;&nbsp;&nbsp;프로젝트명 : 개념프로젝트</div>-->
    <div style="width:732px; float: left;">
        <?for($i=0;$i<4;$i++){?>
            <font style="font-weight: bold;"><?=$creditArr[$i];?></font>&nbsp; : &nbsp;<font><?=$creditArr1[$i];?>&nbsp; &nbsp;</font>
        <?}?></div>
    <div style="float: left;"><img src="img/logo/gaenyeom_logo.png" style="width:90px;"></div>
    <div style="margin: auto; width: 500px;">
    <?
    for($i=1;$i<5;$i++){?>
        <div style="float: left; margin: auto;"><img src="img/logo/logo_<?=$i;?>.png" style="width: 91px; margin: 0px;"></div>
        <div style="width: 30px; height: 1px; float: left;"></div>
    <?}
    ?>
    </div>
    <br>
    <div style="width: 500px; margin: auto; padding: 100px;">이 게임은 테스트 버전입니다.</div>
</div>
</body>
</html>
