<?php

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
$query = "UPDATE play_dataTB SET one_to_one = '{$value}' WHERE ID = '{$id}'";

$result = $conn->query($query) or die($this->_connect->error);

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
                window.location.href = 'http://34.80.159.83/page_1-3.php?id='+id+'&value='+value;
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
<header style="margin: auto; width: 100px; font-size: 20px; font-weight: bold;">
    2/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter1. 버려진 외곽</p>
    <br>
    <p>나는 급히 이 지역을 벗어나기 위해 빠른 걸음으로 걸었다. <br>
        그런데, 길거리에서 까만 고양이를 발견한다. <br>
        살펴보니 고양이는 임신한 상태였고, 며칠 내로 아기를 낳을 것 같았다.
    </p>
    <br>
<!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
<!--        이미지영역-->
<!--        <img src="/img/dog021.gif">-->
<!---->
<!--    </div>-->
    <br>
    <br>
    <form action="page_1-3.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">나는 고양이가 너무 싫었다. 고양이에게 돌을 던져 쫓아냈다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">고양이는 귀여웠지만, 새끼를 낳고 나면 뒤처리가 귀찮을 것 같으니 조용히 갈 길을 갔다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">고양이에게 담요와 음식을 나누어 주고 나는 곧 광장으로 향했다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">나는 그 고양이가 아기를 낳고 그 아기들이 건강하게 클 때까지 보살피며 버려진 외곽 지역에 머물렀다.</button><br>

            <p></p>

        </div>

    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
