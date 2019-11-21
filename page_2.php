
<?php

$id = $_REQUEST['id'];
$value = $_REQUEST['value'];
$value1 = '';
$value2 = '';
$value3 = '';


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
$query = "UPDATE play_dataTB SET one_to_three = '{$value}' WHERE ID = '{$id}'";

$result = $conn->query($query) or die($this->_connect->error);

$query2 = "SELECT one_to_one, one_to_two, one_to_three from play_dataTB where ID = '{$id}'";

$result2 = $conn->query($query2) or die($this->_connect->error);

while($row = $result2->fetch_array())
{
    //$id = $row['ID'];
    $value1 = $row['one_to_one'];
    $value2 = $row['one_to_two'];
    $value3 = $row['one_to_three'];
}

function getGrade($value1, $value2, $value3){
    $result = '';
    $val1_score = '';
    $val2_score = '';
    $val3_score = '';
    $tmpResult = '';

    for($i = 1; $i < 4; $i++){
        if(${'value'.$i} == '1'){
            ${'val'.$i.'_score'} = 0;
        } else if(${'value'.$i} == '2'){
            ${'val'.$i.'_score'} = 1;
        } else if(${'value'.$i} == '3'){
            ${'val'.$i.'_score'} = 4;
        } else if(${'value'.$i} == '4'){
            ${'val'.$i.'_score'} = 5;
        }
    }
    $tmpResult = (($val1_score + $val2_score) + $val3_score);

    if($tmpResult <= 3){
        $result = 'A';
    } else if($tmpResult <= 11){
        $result = 'B';
    } else {
        $result = 'C';
    }

    return $result;
}

$getGradeVal = getGrade($value1, $value2, $value3);


$query3 = "UPDATE play_dataTB SET chapter_one = '{$getGradeVal}' where ID = '{$id}'";

$result3 = $conn->query($query3) or die($this->_connect->error);



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
                window.location.href = 'http://34.80.159.83/page_2-1.php?id='+id+'&value='+value;
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

<div id = 'contentsDiv' style = "margin: auto; padding-top: 50px;width:1000px;padding-right: 100px;padding-left: 100px;">
    <div id = 'imgDiv'>
        <img src="/img/chapter/firework-chapter2.jpg">
    </div>
    <p>
        외곽 지역에서 너무 많은 시간을 소비하고 온 것 같다. <br>
        나는 바쁜 걸음을 재촉하여 광장으로 나아갔다. 그러나 도시의 진입로에는 집을 잃은 사람들이 난민촌을 이루어서 모여있었다. <br>
        나는 이국적이고 낯선 외양과 어눌한 말투의 이들이 이민자들이라는 것을 금방 알 수 있었다. <br>
        그래서 라디오 소리를 듣지 못해서 이곳에 머물러 있는 걸까? 시간이 얼마 남지 않았다. <br>
        <br>
        나는 이들에게 광장으로 함께 가자고 제안할 수 있을까? <br>
    </p>
    <br>

    <form action="page_2-1.php" method="get">
        <div class = 'choice_div' style="margin: auto; width:50px;">
            <input type="hidden" name = 'id' value="<?=$id?>">
            <input type="submit" value="무너진 경계로 입장"><br>
        </div>
    </form>
    <br>
</div>

</body>
</html>
