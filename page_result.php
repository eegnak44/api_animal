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
$resultStyle = ['고독한 여행자','버려진 외곽의 수호자','소외당한 이들의 동반자','광장의 경청자','작은방의 생태학자','용감한 사이보그','평범한 일반인','이상적 반려인'];

$resultDesc = ['나의 안전을 위해서라면 외로움 따위는 잊은 지 오래입니다. 고독한 여행자에게 반려란 성가신 짐일 뿐입니다.'
    , '당신은 버려진 외곽에서 선행을 통해 꺼져가는 생명들을 구하였습니다.당신에게 반려란 보살핌일 수 있겠습니다.'
    , '당신에게 모든 사람들은 동등한 존재입니다. 당신은 사회에서 소외당한 이들과 함께 기꺼이 동행할 수 있는 따뜻한 마음의 반려로서의 요건을 갖추었습니다.'
    , '당신은 다양한 이들의 삶을 존중하고 그들의 이야기를 경청합니다. 행동하는 실천가로 더 나은 세상을 만들어가고자 오늘도 움직이고 있군요.'
    , '모든 생명에는 존재 이유가 있습니다. 작은 미물의 생명조차도 소중히 여기며 종의 상호의존에 대하여 진지하게 고민하는 당신은 생태학자적 성향을 가졌습니다. '
    , '모험심이 강하고 적응력이 뛰어난 당신. 미래사회에서 누구보다 편견 없이 열린 생각으로 종의 경계를 넘어선 사랑을 꿈꿀 수도 있겠습니다.'
    , '당신에게 선택은 너무 어려워서 평범한 길을 포기할 수 없습니다. 그러나, 이 테스트를 통해 조금이라도 반려의 의미에 대한 도전을 받으셨다면, 앞으로 당신에게 어떤 미래가 펼쳐질지 궁금합니다.'
    , '모든 종은 당신과 반려 관계를 맺을 수 있습니다. 어떤 다양성이든 허용할 수 있으며, 어디에서든 인기 있는 당신은 다른 이의 특수성에 의한 불편함은 감수할 준비가 되었습니다.'];
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

while($row = $res->fetch_array())
{
    $resObj = $row;
}

$gradeArr = Array(5);
$gradeArr[0] = $resObj['chapter_one'];
$gradeArr[1] = $resObj['chapter_two'];
$gradeArr[2] = $resObj['chapter_three'];
$gradeArr[3] = $resObj['chapter_four'];
$gradeArr[4] = $resObj['chapter_five'];

if($gradeArr[0] == 'C'){
    $tmpQuery1 = "select one_to_one, one_to_two, one_to_three from play_dataTB where chapter_one = '{$resObj['chapter_one']}' and ID = '{$id}'";
    $res1 = $conn->query($tmpQuery1) or die($this->_connect->error);
    while($row1 = $res->fetch_array())
    {
        $resObj1 = $row1;
        debug_var($resObj1);
    }
//    $tmpObj1 = countFourFunc($resObj1);
}
if($gradeArr[1] == 'C'){
    $tmpQuery2 = "select two_to_one, two_to_two, two_to_three from play_dataTB where chapter_two = '{$resObj['chapter_two']}' and ID = '{$id}'";
    $res2 = $conn->query($tmpQuery2) or die($this->_connect->error);
    while($row2 = $res2->fetch_array())
    {
        $resObj2 = $row2;
    }
//    $tmpObj2 = countFourFunc($resObj2);
}
if($gradeArr[2] == 'C'){
    $tmpQuery3 = "select three_to_one, three_to_two, three_to_three from play_dataTB where chapter_three = '{$resObj['chapter_three']}' and ID = '{$id}'";
    $res3 = $conn->query($tmpQuery3) or die($this->_connect->error);
    while($row3 = $res->fetch_array())
    {
        $resObj3 = $row3;
    }
//    $tmpObj3 = countFourFunc($resObj3);
}
if($gradeArr[3] == 'C'){
    $tmpQuery4 = "select four_to_one, four_to_two, four_to_three from play_dataTB where chapter_four = '{$resObj['chapter_four']}' and ID = '{$id}'";
    $res4 = $conn->query($tmpQuery4) or die($this->_connect->error);
    while($row4 = $res4->fetch_array())
    {
        $resObj4 = $row4;
    }
//    $tmpObj4 = countFourFunc($resObj4);
}
if($gradeArr[4] == 'C'){
    $tmpQuery5 = "select five_to_one, five_to_two, five_to_three from play_dataTB where chapter_five = '{$resObj['chapter_five']}' and ID = '{$id}'";
    $res5 = $conn->query($tmpQuery5) or die($this->_connect->error);
    while($row5 = $res5->fetch_array())
    {
        $resObj5 = $row5;
    }
//    $tmpObj5 = countFourFunc($resObj5);
}
//debug_var($resObj1);
//debug_var($resObj2);
//debug_var($resObj3);
//debug_var($resObj4);
//debug_var($resObj5);
//
//
//
//while($row1 = $res->fetch_array())
//{
//    $resObj1 = $row1;
//}
//
//debug_var($resObj1);
//debug_var($resObj2);
//debug_var($resObj3);
//debug_var($resObj4);
//debug_var($resObj5);
//
//for($i = 0; $i < 3; $i++){
//    $tmpObj1[$i] = $resObj1[$i]
//}


function countFourFunc($arr){
    $tmpFourCountVal = 0;
    $result = '';
    for($i = 0; $i < 3; $i++){
        if($arr[$i] == '4'){
            $tmpFourCountVal++;
        }
    }
    $result = $tmpFourCountVal;
    return $result;
}

$varTmpTmp = countFourFunc($resObj1);
debug_var($varTmpTmp);
debug_var($resObj1);

//debug_var($tmpObj1);
//debug_var($tmpObj2);
//debug_var($tmpObj3);
//debug_var($tmpObj4);
//debug_var($tmpObj5);

$gradeACnt = 0;
$gradeBCnt = 0;
$gradeCCnt = 0;
$res_style = '';

//debugging echo
for($i = 0;$i < sizeof($gradeArr); $i++){
    echo ($i+1)."챕터의 값 = ".$gradeArr[$i]."<br>";
}

foreach ($gradeArr as $key => $value){
    if($value == 'C'){
        $tmpVal = $gradeArr[$key];
//        echo ($key+1)."챕터 is C<br>";
//        ${'chapterVal'.$key} = $key+1;
    }

//    echo $key."=".$value."<br>";
}


function getResultGrade($value1, $value2, $value3, $value4, $value5, $arr, $resObj1, $resObj2, $resObj3, $resObj4, $resObj5){
    $result = '';
    $res_style = '';
    $resVal = 0;
    $gradeACnt = 0;
    $gradeBCnt = 0;
    $gradeCCnt = 0;
    $resultStyle = ['고독한 여행자','버려진 외곽의 수호자','소외당한 이들의 동반자','광장의 경청자','작은방의 생태학자','용감한 사이보그','평범한 일반인','이상적 반려인'];
//    $rdResultStyle = ['버려진 외곽의 수호자','소외당한 이들의 동반자','광장의 경청자','작은방의 생태학자','용감한 사이보그'];
    $rdResultStyle = ['2','3','4','5','6']; //[1,2,3,4,5]
//    $tmpResultArr = ['0','0','0','0','0'];
    $rdArr = Array(5);
    $j = 0;

    for($i = 0; $i < sizeof($arr); $i++){ // A,B,C 갯수 카운트 C 가 두개일 때는 랜덤 결과를 출력 하기 위해 rdArr 에 저장
        if($arr[$i] == 'A'){
            $gradeACnt++;
        } else if($arr[$i] == 'B'){
            $gradeBCnt++;
        } else if($arr[$i] == 'C'){
//            ${'tmpObj'.($i+1)} = countFourFunc(${'resObj'.($i+1)});
            $tmpObj[$i+1] = countFourFunc(${'resObj'.($i+1)});
//            $tmpObj_[$arr[$i]] = countFourFunc(${'resObj'.($i+1)});
//            $tmpResultArr[$i] = '1';
            $gradeCCnt++;
            $rdArr[$j] = $rdResultStyle[$i];
//            debug_var($rdResultStyle[$i]);
            $j++;
        }
    }

//    debug_var($gradeCCnt);
//    debug_var($rdArr);
//    debug_var($tmpObj1);
//    debug_var($tmpObj2);
//    debug_var($tmpObj3);
//    debug_var($tmpObj4);
//    debug_var($tmpObj5);

//    $tmpObj1 = countFourFunc($resObj1);
//    $tmpObj2 = countFourFunc($resObj2);
//    $tmpObj3 = countFourFunc($resObj3);
//    $tmpObj4 = countFourFunc($resObj4);
//    $tmpObj5 = countFourFunc($resObj5);

    if($gradeCCnt == 5){
//        debug_var($gradeCCnt);
        if($value1 == 'C' && $value2 == 'C' && $value3 == 'C' && $value4 == 'C' && $value5 == 'C'){ // all C
            $res_style = $resultStyle[7];
            $resVal = 8;
        }
    } else if ($gradeCCnt < 5) { //C 결과 가 5개 이하일 때

//        for ($i=0; $i<5; $i++){
//            if($tmpObj[$i+1] > 0){ // 4의 개수가 1개 이상인 tmpObj값


//                if($tmpObj[$i+1] > $tmpObj[$i+2]){
//                    $resVal = $i+1;
//                    debug_var($resVal);
//                }
//                debug_var($tmpObj[$i+1]);
//                $tmpChapter = $i+1;
//                for($j = 0; $j<5; $j++){
//                    if($tmpObj[$tmpChapter] > $tmpObj[$j]){
////                    debug_var($i+1)
//                      echo $tmpChapter;
//                    }
//               }
//                sort($tmpObj);
//                debug_var($tmpObj);
//                rsort($tmpObj);
//                debug_var($tmpObj);

//            }
//            if (${'tmpObj'.($i+1)} > 0){
//                debug_var(${'tmpObj'.($i+1)});
//            }
//        }

//        for($j = 0; $j < sizeof($rdArr); $j++){
//        for($i = 0; $i < sizeof($rdArr); $i++){
//            if($rdArr[$i-1] !== ''){
//            debug_var($rdArr[$i]); // 3
//            $j = $rdArr[$i] - 1; // j = chapter no
//            debug_var($j); // 2
//            ${'tmpObj'.$j} = countFourFunc(${'resObj'.$j});
//            $tmpObj[$j] = countFourFunc(${'resObj'.$j});
//            }
//            debug_var(${'tmpObj'.$j}); // j chapter 의 4의 갯수

            /*
                Array
                (
                    [2] => 3
                    [5] => 2
                )
             */
//        }


//        debug_var($tmpObj1);
//        debug_var($tmpObj2);
//        debug_var($tmpObj3);
//        debug_var($tmpObj4);
//        debug_var($tmpObj5);
//        for($j=0; $j<sizeof($rdArr); $j++){
//            if(${'tmpObj'.$j} == 3){
//
//            } else if (${'tmpObj'.$j} == 2){
//
//            } else {
//
//            }
//
//        }

//        }

//        $tmpVal$rdArr[$j]-1;
        // C 의 4갯수가 동일 할때 랜덤
        // C 의 4갯수가 높은것으로 resVal




        $outRes = array_rand($rdArr);

        $resVal = $rdArr[$outRes];

    } else if($gradeCCnt == 1){

        if($value1 == 'C'){ //chapter 1
            $res_style = $resultStyle[1];
            $resVal = 2;
        }
        if($value2 == 'C' && $value1 !== 'C'){ //chapter 2
            $res_style = $resultStyle[2];
            $resVal = 3;
        }
        if($value3 == 'C' && $value1 !== 'C' && $value2 !== 'C'){ // chapter 3
            $res_style = $resultStyle[3];
            $resVal = 4;
        }
        if($value4 = 'C' && $value1 !== 'C' && $value2 !== 'C' && $value3 !== 'C'){ // chapter 4
            $res_style = $resultStyle[4];
            $resVal = 5;
        }
        if($value5 = 'C' && $value1 !== 'C' && $value2 !== 'C' && $value3 !== 'C' && $value4 !== 'C'){ //chapter 5
            $res_style = $resultStyle[5];
            $resVal = 6;
        }

    } else if ($gradeCCnt == 0){ // C 가 하나도 없을 때
        $num = array_count_values($arr);
        foreach ($num as $key => $value_){
//        echo $key." = ". $value_.'<br>';
            if($key == 'C' && $value_ == 0){
                if(($key == 'A' && $value_ <= 5) || ($key == 'B' && $value_ >= 3)){
                    $res_style = $resultStyle[6];
                    $resVal = 7;
                } else {
                    $res_style = $resultStyle[0];
                    $resVal = 1;
                }
            }
        }
    }

    $result = $resVal;

    return $result;
}


$resGrade = getResultGrade($gradeArr[0],$gradeArr[1],$gradeArr[2],$gradeArr[3],$gradeArr[4],$gradeArr, $resObj1, $resObj2, $resObj3, $resObj4, $resObj5);
//debug_var($resGrade);


$res_style = $resultStyle[$resGrade-1];

$query3 = "UPDATE play_dataTB SET result_style = '{$res_style}' where ID = '{$id}'";

$result3 = $conn->query($query3) or die($this->_connect->error);


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
        var value = '';

        $(".choice_div button").click(function () {
            value = $(this).attr('value');

            if(value){
                window.location.href = 'http://34.80.159.83/page_statics.php?id='+id;
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
            <p>결과 : <?=$resultStyle[$resGrade-1];?></p>
<!--            <p>결과 : --><?//=$resGrade;?><!--</p>-->
        </div>
        <div id = 'resDesc'>
            <p><?=$resultDesc[$resGrade-1];?></p>
<!--            <p>--><?//=$resGrade;?><!--</p>-->
        </div>
        <div id = 'imgDiv'>
            <img src="/img/result/ed<?=$resGrade;?>.jpg">
        </div>

    <br>
    <form action="page_statics.php" method="get">
        <div class = 'choice_div' style="margin: auto; width:50px;">
            <input type="hidden" name = 'id' value="<?=$id?>">
            <input type="submit" value="통계"><br>
        </div>
    </form>
    <br>
</div>
</body>
</html>

