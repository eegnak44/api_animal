
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
                window.location.href = 'http://34.80.159.83/page_4-2.php?id='+id+'&value='+value;
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
    <p style="font-size: 30px;">chapter5. 행성 7H</p>
    <br>
    <p>
        우주선 안에는 음식물 쓰레기가 쌓여가고 그 주변으로 초파리가 날아 다닌다. <br>
        초파리는 음식물 쓰레기 안에 알을 낳고 번식하여 개체수가 늘어났다.<br>
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
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">귀찮은 초파리. 모든 초파리를 제거할 수 있도록 벌레약을 개발하여 잡는다. </button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">굳이 모두 잡으려고 하지 않고, 초파리가 내 앞에서 귀찮게 할 때만 잡는다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">초파리들도 살고자 이 우주선까지 살아돌아왔는데, 죽일 필요까진 없는 것 같다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">빠른 시간 진화하는 이들의 유전적 특성들을 분석하여 우주선이 이동하는 동안 진화에 대한 연구를 진행한다. </button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
