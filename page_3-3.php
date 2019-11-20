
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
$query = "UPDATE play_dataTB SET three_to_two = '{$value}' WHERE ID = '{$id}'";

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
                window.location.href = 'http://34.80.159.83/page_4.php?id='+id+'&value='+value;
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
    9/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter3. 광장</p>
    <br>
    <p>
        우주선C에는 다양한 이들이 타고 있었다. 페미니스트 여성, 퀴어, 예술가, 노숙자, 동물 등..<br>
        이 곳에서 권력을 가진 자는 아무도 없다. 매우 민주적으로 의사를 결정하고 자신의 능력에 따라 동등하게 일을 분담했다. <br>
        하지만 시설은 그리 좋지 않았다. <br>
    </p>
    <br>
    <!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
    <!--        이미지영역-->
    <!--        <img src="/img/dog021.gif">-->
    <!---->
    <!--    </div>-->
    <br>
    <br>
    <form action="page_4.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">나는 이들과 절대 함께하지 않을 것이다.</button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">이런 분위기는 마음에 들지 않지만, <br>여기서 지내다 보면 언젠가 내가 이들을 다스리는 권력자가 될 수 있을 것 같다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">시설이 좋지 않더라도, 마음이 맞는 사람들과 함께라면 잘 살아갈 수 있을 것이다. <br>이들이 만든 나름의 규칙에 순응하며 살아간다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">우주선C의 세상에 적극적으로 개입하여 함께 오래 살아남을 방법을 민주적으로 모색한다.</button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
