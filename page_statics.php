<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2019-11-14
 * Time: 오후 2:24
 */

$id = $_REQUEST['id'];
$value = $_REQUEST['value'];

$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '6034265';
$mysql_database = 'animal';
$mysql_port = '16612';
$mysql_charset = 'utf8';


$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);

$query2 = "select count(ID) as cnt from play_dataTB";

$result2 = $conn->query($query2) or die($this->_connect->error);

while($row = $result2->fetch_array())
{
    $value1 = $row['cnt'];
}

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
        var result_style = '<?=$res_style;?>';
        var resVal = <?=$resVal;?>;
        var value = '';

        $(".choice_div button").click(function () {
            value = $(this).attr('value');

            if(value){
                window.location.href = 'http://34.80.159.83/main.php';
            }
        });

    });


</script>

<html>
<title>
    반려종 허용 테스트
</title>
<body>

<div id = 'contentsDiv' style = "margin: auto; padding-top: 70px;width:1000px;padding-right: 100px;padding-left: 100px;">

    <div id = 'resName' style="font-weight: bold; font-size: 20px;">
        <p>누적 테스터 의 수 : <?=$row['cnt'];?></p>
    </div>

    <br>
    <form action="main.php" method="get">
        <div class = 'choice_div' style="margin: auto; width:50px;">
            <input type="submit" value="다시하기"><br>
        </div>
    </form>
    <br>
</div>
</body>
</html>
