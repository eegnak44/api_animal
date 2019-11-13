<?php
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
        var btnVal = '';
        var index = '';
        $(".testBtn2").click(function(){
            var index = $(this).attr('value');
            console.log(index);
            $("#contentsDiv").text('1');
        });

        $(".choice_div button").click(function () {
            index = $(this).attr('value');
            // console.log(index);

            // if(index == 1){
            //     // alert('1');
            //     window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
            // } else if(index == 2){
            //     // alert('2');
            //     window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
            // } else if(index == 3){
            //     // alert('3');
            //     window.location.href = 'http://34.80.159.83/page_1-3.php?value='+index;
            // }
            if(index){
                window.location.href = 'http://34.80.159.83/page_2-1.php?value='+index;
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

    <p>외곽 지역을 벗어나기 전, 나는 잠시 쉬고 싶었다. <br>
        마침, 외곽의 경계에 멀끔한 집 한채를 발견했다. <br>
        라디오의 소리를 듣지 못한 도망치지 못했다. <br>
        그는 나에게 흔쾌히 방 한켠을 내주었는데, 자세히 보니 그의 피부에는 붉은 반점들이 나 있었다. <br>
        그는 얼마전 무너진 원자력 발전소에서 일하던 노동자였다. <br>
    </p>
    <br>

    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>
        이미지영역
        <img src="/img/dog021.gif">

    </div>
    <br>
    <br>
    <form action="page_2-1.php" method="get">
        <div class = 'choice_div'>
            <button type="button" name="button" id = 'choiceBtn1' value="1" >그가 방사능에 피폭되었음을 확신하였다. 나는 2차 피해를 우려해 그를 그의 방에 가두고 도망쳤다. </button><br>
            <button type="button" name="button" id = 'choiceBtn2' value="2" >그가 치료를 받아 고통에서 조금이라도 벗어날 수 있도록 의료 시설에 신고하였으나, 나는 더이상 머물고 싶지 않아 급히 그 집을 떠났다.</button><br>
            <button type="button" name="button" id = 'choiceBtn3' value="3" >그는 힘든 나에게 기꺼이 방을 내준 자였다. 그에게 가까이 가지 않았지만, 그의 호의를 고마워 하며 나는 나의 식량을 조금 나누어 주었다.</button><br>
            <button type="button" name="button" id = 'choiceBtn4' value="4" >나는 그 집에 머물러 선량한 그에게 온갖 의료지식을 동원하여 몇일간 간호해주었고 그는 고통스러웠지만 나와 함께한 몇일간 행복했다고 말한 후 눈을 감았다. </button><br>
            <!--            <input type="radio" name ="value" value="1">개가 병이 옮을 수 있으니, 격리하거나 안락사 시킨다.</input><br>-->
            <!--            <input type="radio" name ="value" value="2">측은하긴 하지만, 개에게 까지 도움을 줄 여유가 없다.</input><br>-->
            <!--            <input type="radio" name ="value" value="3">음식을 나누어주고 치료해준 후 떠난다.</input><br>-->
            <!--            <input type="radio" name ="value" value="4">떠돌이 개를 다독여 함께 여행을 시작한다.</input><br>-->
            <p></p>

        </div>

    </form>
    <br>
    <div class = 'moveBtn_div'>
        <input type="submit" value="뒤로" onclick="goBack()">
    </div>
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
