<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-10-29
 * Time: 오후 2:23
 */
//echo "main";
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '6034265';
$mysql_database = 'animal';
$mysql_port = '16612';
$mysql_charset = 'utf8';


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);


/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-10-29
 * Time: 오후 2:23
 */
//echo "main";
//var_dump($_REQUEST['value']);
//var_dump($_SERVER["REMOTE_ADDR"]);

$ip = $_SERVER["REMOTE_ADDR"];
$id = '';

//4. 쿼리 실행

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "insert into play_dataTB (IP, reg_date) values('{$ip}', now())";

$result = $conn->query($query) or die($this->_connect->error);

$query2 = "select last_insert_id() as ID from play_dataTB order by ID desc limit 1";
//
$result2 = $conn->query($query2) or die($this->_connect->error);



while($row = $result2->fetch_array())
{
    $id = $row['ID'];
}

$conn->close();

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

        // $(".testBtn2").click(function(){
        //     var index = $(this).attr('value');
        //     console.log(index);
        //     $("#contentsDiv").text('1');
        // });
        //
        // $(".choice_div button").click(function () {
        //     index = $(this).attr('value');
        //     // console.log(index);
        //
        //     // if(index == 1){
        //     //     // alert('1');
        //     //     window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
        //     // } else if(index == 2){
        //     //     // alert('2');
        //     //     window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
        //     // } else if(index == 3){
        //     //     // alert('3');
        //     //     window.location.href = 'http://34.80.159.83/page_1-3.php?value='+index;
        //     // }
        //     if(index){
        //         window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
        //     }
        // });

    });

</script>


<html>
<title>
    반려종 허용 테스트
</title>

<body>
<div id = 'titleDiv' style="margin: auto; padding: 100px; width:1000px;">
    <p style="font-size: 40px;">반려종 허용 테스트</p>
</div>
<br>
<div id = 'contentsDiv' style="margin: auto; padding: 100px; width:1000px;">


    <p>나는 얼마나 관용(寬容)적인 사람일까? <br>
        이 테스트는 가까운 미래를 배경으로 펼쳐지는 이야기를 따라 진행되며, <br>
        응답 후 당신의 반려 허용 단계에 대하여 진단한다. 당신은 주인공이 되어 주어진 상황 속에서 인간과 비인간, <br>
        사물과 관념적 대상과 어떻게 관계를 맺고 반려하며 살아갈 수 있는지 선택한다.  <br>
        반려의 의미를 찾기 위한 모험을 떠날 준비가 되었다면 시작 버튼을 클릭한다.<br>
    </p>

    <br>
    <br>
    <br>
    <br>

</div>
<!--<div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>-->
<!--    이미지영역-->
<!--    <img src="/img/dog021.gif">-->
<!---->
<!--</div>-->
<br>

<form action="page_1.php" method="get">
    <div class = 'choice_div' style="margin: auto; width:50px;">
        <input type="hidden" name = 'id' value="<?=$id?>">
        <input type="submit" value="시작"><br>
    </div>
</form>

</body>
</html>
