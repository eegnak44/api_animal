
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
$query = "UPDATE play_dataTB SET one_to_three = '{$value}' WHERE ID = '{$id}'";

$result = $conn->query($query) or die($this->_connect->error);

$query2 = "SELECT one_to_one, one_to_two, one_to_three from play_dataTB where ID = '{$id}'";

$result2 = $conn->query($query2) or die($this->_connect->error);

while($row = $result2->fetch_array())
{
    //$id = $row['ID'];
//    echo $row['one_to_one'];
//    echo $row['one_to_two'];
//    echo $row['one_to_three'];
}

function getGrade($value1, $value2, $value3){
    $result = '';
    $val1_score = '';
    $val2_score = '';
    $val3_score = '';

//
//    if($value1 == 1) {
//        $val1_score = 0;
//    } else if($value2 == 2){
//        $val1_score = 1;
//    } else if($value3 == 3){
//        $val1_score = 4;
//    } else {
//        $val1_score = 5;
//    }
    for($i = 1; $i < 4; $i++){
        if(${'value'.$i} == '1'){
            ${'val'.$i.'_score'} = 0;
        } else if(${'value'.$i} == '2'){
            ${'val'.$i.'_score'} = 1;
        } else if(${'value'.$i} == '3'){
            ${'val'.$i.'_score'} = 4;
        } else {
            ${'val'.$i.'_score'} = 5;
        }
        echo $val1_score.'<br>';
        echo $val2_score.'<br>';
        echo $val3_score.'<br>';
        ${'tmpResult'.$i} = ($val1_score + $val2_score + $val3_score);
    }
    echo $tmpResult1.'<br>';
    echo $tmpResult2.'<br>';
    echo $tmpResult3.'<br>';

//    $tmpResult = ($val1_score + $val2_score + $val3_score);//1,2,4
//    echo $tmpResult;
////
//    if($tmpResult <= 3){
//        $result = 'A';
//    } else if($tmpResult <= 11){
//        $result = 'B';
//    } else {
//        $result = 'C';
//    }
//
//    return $result;
}

var_dump(getGrade($row['one_to_one'], $row['one_to_two'], $row['one_to_three']));



//$query3 = "UPDATE play_dataTB SET chapter_one = '{$grade}' where ID = '{$id}'";

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

<div id = 'contentsDiv' style = "margin: auto; padding-top: 100px;width:1000px;padding-right: 100px;padding-left: 100px;">
    <div id = 'imgDiv'>
        <img src="/img/chapter/firework-chapter2.jpg">
    </div>
    <p>
        외곽 지역에서 너무 많은 시간을 소비하고 온 것 같다. <br>
        나는 바쁜 걸음을 재촉하며 광장으로 나아갔다.<br>
        그러나 도시의 진입로에는 한 무리의 사람들이 움막을 짓고 살아가고 있었다. <br>
        “광장으로 오라"는 라디오 소리를 듣지 못한 모양이다. <br>
        시간이 얼마 남지 않았지만, 나는 이들에게 광장으로 함께 가자고 제안하고자 한다.
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
