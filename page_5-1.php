
<?php

$id = $_REQUEST['id'];
//$value = $_REQUEST['value'];
//
//$mysql_hostname = 'localhost';
//$mysql_username = 'root';
//$mysql_password = '6034265';
//$mysql_database = 'animal';
//$mysql_port = '16612';
//$mysql_charset = 'utf8';
//
//
//$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
////
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//$query = "UPDATE play_dataTB SET one_to_three = '{$value}' WHERE ID = '{$id}'";
//
//$result = $conn->query($query) or die($this->_connect->error);


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
                window.location.href = 'http://34.80.159.83/page_5-2.php?id='+id+'&value='+value;
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
    13/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter5. 행성 7H</p>
    <br>
    <p>
        인류가 우주선을 타고오는 동안 함께 온 인공지능 로봇은 나날이 발전하여 인간의 지능을 뛰어넘었다. <br>
        어느날 로봇은 나의 통제권에서 벗어나 나를 관찰하기 시작한다.
    </p>
    <br>
    <!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
    <!--        이미지영역-->
    <!--        <img src="/img/dog021.gif">-->
    <!---->
    <!--    </div>-->
    <br>
    <br>
    <form action="page_5-2.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">로봇을 부숴버린다.</button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">로봇이 혐오스럽지만, 인류의 역사를 담은 로봇의 데이터는 소중하기 때문에 <br>적당한 거리를 유지하며 지낸다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">로봇의 지성에 감탄하며, 그에게 더욱 더 의지한다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">로봇을 나와 동등한 인격체로서 대하며, <br>로봇과 대화를 나누어 친구로 지내고자 노력한다.</button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
