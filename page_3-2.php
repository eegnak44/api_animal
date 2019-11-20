
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
$query = "UPDATE play_dataTB SET three_to_one = '{$value}' WHERE ID = '{$id}'";

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
                window.location.href = 'http://34.80.159.83/page_3-3.php?id='+id+'&value='+value;
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
    8/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter3. 광장</p>
    <br>
    <p>
        우주선B에는 한 무리의 중산층 가족들이 타고 있었다. 이 곳에서는 질서를 중요시한다. <br>
        정확한 역할분담이 이루어지고 있었다. 미래 행성에서의 삶에 대한 기획 회의 및 우주선 운전, <br>
        적으로 부터 방어의 의무 등은 남성의 몫이었고, 자녀 양육과 교육, 식사 준비, 우주선 청소 등 허드렛일은 모두 여성의 몫이다. <br>
    </p>
    <br>
    <!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
    <!--        이미지영역-->
    <!--        <img src="/img/dog021.gif">-->
    <!---->
    <!--    </div>-->
    <br>
    <br>
    <form action="page_3-3.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">나는 또다시 그런 세상에서 살고 싶지 않다.  </button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">나는 이들이 정해놓은 규칙이 마음에 들지 않지만, <br>다른 우주선보다는 합리적인 것 같아 머물기로 했다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">나는 이들이 정해놓은 질서에 따라 사는 것이 편하고 익숙하다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">나도 가족을 만들어 이들과 동화되어 살아가고 싶다. </button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
