
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
                window.location.href = 'http://34.80.159.83/page_3-2.php?id='+id+'&value='+value;
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
    7/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter3. 광장</p>
    <br>
    <p>
        우주선 A는 각 분야의 전문가들, 소위 엘리트들이 타고 있었다. <br>
        부유한 그들의 우주선은 매우 안락하고 세련되었다. <br>
        그러나 이들과 대화하다 보니 나와 정치적 견해가 다르다는 것을 알 수 있었다. <br>
        그들과 나는 심각한 정치 토론을 하기 시작했고, 말이 통하지 않자 서로 언성을 높이기도 했다. <br>
    </p>
    <br>
    <!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
    <!--        이미지영역-->
    <!--        <img src="/img/dog021.gif">-->
    <!---->
    <!--    </div>-->
    <br>
    <br>
    <form action="page_3-2.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">정치 견해가 다른 사람들과는 하루도 함께 할 수 없다. </button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">이 곳엔 다른 곳보다도 시설이 좋기 때문에, <br>불만이 있더라도 그냥 조용히 이 우주선에 탈 것이다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">이 곳엔 다른 곳보다도 지적인 사람들이 모여있으므로, 이들이 말하는 것이 옳을지도 모른다. <br>나는 이들과 함께하기 위해 나는 정치적 입장도 바꿀 수 있다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">나는 이들과 토론을 통해 정치적 견해를 좁히고, <br>함께 잘 살아갈 자신이 있다.</button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
