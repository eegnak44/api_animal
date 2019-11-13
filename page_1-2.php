<?// include "DB/mysqli_CONN.php" ?>
<?php

$id = $_REQUEST['id'];
$value = $_REQUEST['value'];

var_dump($_REQUEST);
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
$query = "UPDATE play_dataTB SET one_to_one = '{$value}' WHERE ID = '{$id}'";

$result = $conn->query($query) or die($this->_connect->error);

///**
// * Created by PhpStorm.
// * User: chris
// * Date: 2019-10-29
// * Time: 오후 2:23
// */
////echo "main";
//var_dump($_REQUEST['value']);
//var_dump($_SERVER["REMOTE_ADDR"]);
//
//$query = 'select \'complete\' as col from dual ';
//
////4. 쿼리 실행
//$result = $connect->query($query) or die($this->_connect->error);
//

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
        var btnVal = '';
        var index = '';
        $(".testBtn2").click(function(){
            var index = $(this).attr('value');
            console.log(index);
            $("#contentsDiv").text('1');
        });

        $(".choice_div button").click(function () {
            index = $(this).attr('value');
            // console.log(index);

            // if(index == 1){
            //     // alert('1');
            //     window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
            // } else if(index == 2){
            //     // alert('2');
            //     window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
            // } else if(index == 3){
            //     // alert('3');
            //     window.location.href = 'http://34.80.159.83/page_1-3.php?value='+index;
            // }
            if(index){
                window.location.href = 'http://34.80.159.83/page_1-3.php?value='+index;
            }
        });

    });

    function goBack() {
        window.history.back();
    }

</script>


<html>
<title>
    반려종 허용 테스트
</title>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">

    <p>나는 급히 이 지역을 벗어나기 위해 빠른 걸음으로 걸었다. <br>
        그런데, 길거리에서 까만 고양이를 발견한다. <br>
        살펴보니 고양이는 임신한 상태였고, 몇 일 내로 아기를 낳을 것 같았다.
    </p>
    <br>

    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>
        이미지영역
        <img src="/img/dog021.gif">

    </div>
    <br>
    <br>
    <form action="page_1-3.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">나는 고양이가 너무 싫었다. 고양이에게 돌을 던져 쫓아냈다.</button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">고양이는 귀여웠지만, 새끼를 낳고 나면 뒷처리가 귀찮을 것 같으니 조용히 갈 길을 갔다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">고양이에게 담요와 음식을 나누어 주고 나는 곧 광장으로 향했다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">나는 그 고양이가 아기를 낳고 그 아기들이 건강하게 클 때까지 보살피며 버려진 외곽 지역에 머물렀다.</button><br>
            <!--            <input type="radio" name ="value" value="1">개가 병이 옮을 수 있으니, 격리하거나 안락사 시킨다.</input><br>-->
            <!--            <input type="radio" name ="value" value="2">측은하긴 하지만, 개에게 까지 도움을 줄 여유가 없다.</input><br>-->
            <!--            <input type="radio" name ="value" value="3">음식을 나누어주고 치료해준 후 떠난다.</input><br>-->
            <!--            <input type="radio" name ="value" value="4">떠돌이 개를 다독여 함께 여행을 시작한다.</input><br>-->
            <p></p>

        </div>

    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
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
