
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
                window.location.href = 'http://34.80.159.83/page_2-2.php?id='+id+'&value='+value;
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
    4/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter2. 무너진 경계</p>
    <br>
    <p>
        첫번째 움막에는 얼마전 한국으로 귀화한 북한 사람들이 살고 있었다.
    </p>
    <br>
<!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
<!--        이미지영역-->
<!--        <img src="/img/dog021.gif">-->
<!---->
<!--    </div>-->
    <br>
    <br>
    <form action="page_2-2.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">과거의 적은 지금도 적. <br>이들에게 소식을 전해주지 않을 것이다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">이들에 대해 적대적인 감정이 남아있긴 하지만, <br>간단한 정보는 전달할 수 있다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">과거는 과거일 뿐. <br>과거사에 대해 반성을 했음을 확인한 후 동행하길 제안한다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">인류 생존을 위해 동행하는데, 국가 간의 역사적 이해관계는 상관없다. <br>이들의 내면과 태도가 더 중요하다.</button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
