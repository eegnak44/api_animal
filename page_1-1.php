<?php

$id = $_REQUEST['id'];
//
//$mysql_hostname = 'localhost';
//$mysql_username = 'root';
//$mysql_password = '6034265';
//$mysql_database = 'animal';
//$mysql_port = '16612';
//$mysql_charset = 'utf8';
//
////
//////1. DB 연결
//$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
//
//
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
//$ip = $_SERVER["REMOTE_ADDR"];
//
//
//$query = "insert into play_dataTB (IP) values('{$ip}')";
//
////4. 쿼리 실행
//$result = $connect->query($query) or die($this->_connect->error);

/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-10-29
 * Time: 오후 2:23
 */
//echo "main";
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
        var id = <?=$id;?>;
        $(".choice_div button").click(function () {
            value = $(this).attr('value');

            if(value){
                window.location.href = 'http://34.80.159.83/page_1-2.php?id='+id+'&value='+value;
                // window.location.href = 'http://34.80.159.83/page_1-2.php;
            }
        });

    });

    function goBack() {
        window.history.back();
    }

    function goHome() {
        window.location.href = 'http://34.80.159.83/main.php';
    }

</script>


<html>
<title>
    반려종 허용 테스트
</title>
<header style="margin: auto; width: 100px; font-size: 20px; font-weight: bold;">
    1/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter1. 버려진 외곽</p>
    <br>
    <p>
        지진이 일어나고 오염 물질이 땅 위를 뒤덮기 시작하자 사람들은 자신이 키우던 개들을 두고 떠나갔다.<br>
        이 외곽지역에 남은 사람은 없고 위에 병들고 배고픈 개들만이 떠돌고 있을 뿐이었다.
    </p>
<!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
<!--        이미지영역-->
<!--        <img src="/img/dog021.gif">-->
<!---->
<!--    </div>-->
    <br>
    <br>
    <form action="page_1-2.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">개가 병이 옮을 수 있으니, 격리하거나 안락사 시킨다.</button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">측은하긴 하지만, 개에게 까지 도움을 줄 여유가 없다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">음식을 나누어주고 치료해준 후 떠난다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">떠돌이 개를 다독여 함께 여행을 시작한다.</button><br>
<!--            <input type="hidden" name = 'id' value="--><?//=$id?><!--">-->
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
