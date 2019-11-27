
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
$query = "UPDATE play_dataTB SET five_to_two = '{$value}' WHERE ID = '{$id}'";

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
                window.location.href = 'http://34.80.159.83/page_result.php?id='+id+'&value='+value;
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
    15/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter5. 행성 7H</p>
    <br>
    <p>
        행성7H에서 원시적인 생활을 하기 시작한 인류에게 지능이 높아 보이는 외계인들이 찾아왔다. <br>
        이들은 고도의 과학기술을 가지고 우리의 주거지를 발전 시켜 편리하고 안락한 미래를 약속했다. <br>
        그러나 이들에게 치명적인 바이러스가 있어 면역이 없는 인류는 바이러스가 옮을 경우 며칠 내로 죽고 만다.
    </p>
    <br>
    <br>
    <br>
    <form action="page_result.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">외계인과 절대 소통하지 않는다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">과학기술이 없는 불편함을 참지 못하기 때문에, <br>외계인의 제안을 바로 받아들인다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">제적으로 불리한 조건이더라도, 외계인과 중개인을 두고 교류한다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">외계인과 교류하기 전, 그들과 충분한 대화를 통해 목적을 파악하고 <br>인류에게 백신을 제공할 때까지 시간을 번다.</button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
