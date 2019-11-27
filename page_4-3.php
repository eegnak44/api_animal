
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
$query = "UPDATE play_dataTB SET four_to_two = '{$value}' WHERE ID = '{$id}'";

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
                window.location.href = 'http://34.80.159.83/page_5.php?id='+id+'&value='+value;
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
    12/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter4. 우주선</p>
    <br>
    <p>
        바퀴벌레는 왕성한 번식력으로 우주선 지하세계를 장악했다. <br>
        지구를 떠난 지 오래된 인류에게 식량이 다 떨어졌다. <br>
        이 단백질 덩어리 곤충을 식량으로 채택하여야만 살 수 있다.<br>
    </p>
    <br>
    <!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
    <!--        이미지영역-->
    <!--        <img src="/img/dog021.gif">-->
    <!---->
    <!--    </div>-->
    <br>
    <br>
    <form action="page_5.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">바퀴벌레는 더러우므로 먹을 수 없다. <br>바퀴벌레를 격리하고 살충제를 뿌린다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">징그럽긴 하지만 음식으로 만들어 간헐적으로 먹을 수 있다고 생각한다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">바퀴벌레도 생명이다. <br>그들을 먹을 수는 없지만 자유롭게 번식하고 살 수 있게 그냥 둔다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">그들이 살기 좋은 환경을 만든 후, <br>본격적으로 바퀴벌레를 사육하며 미래 식량을 위한 요리법들을 개발한다.</button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
