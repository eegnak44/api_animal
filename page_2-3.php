
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
$query = "UPDATE play_dataTB SET two_to_two = '{$value}' WHERE ID = '{$id}'";

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
                window.location.href = 'http://34.80.159.83/page_3.php?id='+id+'&value='+value;
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
    6/15
</header>
<body>

<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 30px;">chapter2. 무너진 경계</p>
    <br>
    <p>
        세 번째 경계에는 나와 다른 종교를 믿는 이들이 모여있었다. <br>
        예언의 말씀에 따라 경계 지역으로 이주한 이들의 도덕심은 다른 이들보다 높았다. <br>
        하지만 간혹 어떤 이들은 종교에 지나치게 심취하여 신의 말씀과 경전은 목숨보다 소중히 여겼으며, <br>
        다른 종교에 대하여 적대적인 태도를 보였다. <br>
    </p>
    <br>
<!---->
<!--    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
<!--        이미지영역-->
<!--        <img src="/img/dog021.gif">-->
<!---->
<!--    </div>-->
    <br>
    <br>
    <form action="page_3.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" style="text-align: left">이들이 자신의 종교 말씀에 따라 살아갈 수 있도록 관여하지 않고 떠난다. </button><br><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" style="text-align: left">정보는 줄 수 있지만, <br>종교에 대해 이들의 심기를 건드리지 않도록 조심한다. </button><br><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" style="text-align: left">종교가 무엇이든, 누군가 위험에 빠져 있다면 <br>그로부터 이들을 구하고 함께 해야 한다고 생각한다.</button><br><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" style="text-align: left">열린 마음으로 이들과 동행하면서,<br> 종교에 대해 존중하며 귀를 기울여보고, 필요하다면 믿을 수도 있을 것 같다. </button><br>
        </div>
    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
</div>

</body>
</html>
