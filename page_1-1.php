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
                window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
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

    <p>어느날 큰 지진이 일어났다. 쓰나미가 일어나고 집이 무너지기 시작했다. 밖에서 큰 폭발음이 들렸다. <br>
        나는 방공호로 대피했다. 시간이 흐르고 잠잠해 진 후, 밖으로 나온 나는 라디오의 신호를 가까스로 잡을 수 있었다.<br>
        “살아남은 자들은 광장으로 모이세요" 도시 외곽에 사는 나는 갈 길이 멀다. 채비를 하고 집 밖으로 나와 광장으로 향했다.
    </p>
    <br>
    <p>
        지진이 일어나고 오염 물질이 땅 위를 뒤덮기 시작하자 사람들은 자신이 키우던 개들을 두고 떠나갔다.<br>
        이 외곽지역에 남은 사람은 없고 위에 병들고 배고픈 개들만이 떠돌고 있을 뿐이었다.
    </p>
    <div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>
        이미지영역
        <img src="/img/dog021.gif">

    </div>
    <br>
    <br>
    <form action="page_1-2.php" method="get">
        <div class = 'choice_div'>
                    <button type="button" name="button" id = 'choiceBtn1' value="1" >개가 병이 옮을 수 있으니, 격리하거나 안락사 시킨다.</button><br>
                    <button type="button" name="button" id = 'choiceBtn2' value="2" >측은하긴 하지만, 개에게 까지 도움을 줄 여유가 없다.</button><br>
                    <button type="button" name="button" id = 'choiceBtn3' value="3" >음식을 나누어주고 치료해준 후 떠난다.</button><br>
                    <button type="button" name="button" id = 'choiceBtn4' value="4" >떠돌이 개를 다독여 함께 여행을 시작한다.</button><br>
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
