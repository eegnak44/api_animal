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
                window.location.href = 'http://34.80.159.83/page_1-1.php?id='+id;
                // window.location.href = 'http://34.80.159.83/page_1-2.php;
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

<div id = 'contentsDiv' style="margin: auto; padding: 50px; width:1000px;">

    <div id = 'imgDiv'>
        <img src="/img/chapter/firework-chapter1.jpg">
    </div>

    <p>어느날 큰 지진이 일어났다. 쓰나미가 일어나고 집이 무너지기 시작했다. 밖에서 큰 폭발음이 들렸다. <br>
        나는 방공호로 대피했다. 시간이 흐르고 잠잠해 진 후, 밖으로 나온 나는 라디오의 신호를 가까스로 잡을 수 있었다.<br>
        <br>
        “살아남은 자들은 광장으로 모이세요" <br>
        <br>
        도시 외곽에 사는 나는 갈 길이 멀다. 채비를 하고 집 밖으로 나와 광장으로 향했다.
    </p>
    <br>

    <br>
    <br>
    <form action="page_1-1.php" method="get">
        <div class = 'choice_div' style="margin: auto; width:50px;">
            <input type="hidden" name = 'id' value="<?=$id?>">
            <input type="submit" value="버려진 외곽으로 입장"><br>
        </div>
    </form>
    <br>
<!--    <div class = 'moveBtn_div'>-->
<!---->
<!--        <input type="submit" value="뒤로" onclick="goBack()">-->
<!--    </div>-->
</div>

<!--<div class = "testBtn1" value = '1' style="border-left: 1px grey;">선택지1</div>-->
<!--<div class = 'testBtn2'>-->
<!--    <a href="/test_main_page_1.php" class="btn btn-secondary" value="1">선택지1</a>-->
<!--</div>-->
<!--<div>-->
<!--    <ul>-->
<!--        <li>1</li>-->
<!--    </ul>-->
<!--    <ul>-->
<!--        <li>2</li>-->
<!--    </ul>-->
<!--</div>-->
</body>
</html>
