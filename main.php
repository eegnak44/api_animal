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
<p>나는 얼마나 관용(寬容)적인 사람일까? <br>
    이 테스트는 가까운 미래를 배경으로 펼쳐지는 이야기를 따라 진행되며, <br>
    응답 후 당신의 반려 허용 단계에 대하여 진단한다. 당신은 주인공이 되어 주어진 상황 속에서 인간과 비인간, <br>
    사물과 관념적 대상과 어떻게 관계를 맺고 반려하며 살아갈 수 있는지 선택한다.  <br>
    반려의 의미를 찾기 위한 모험을 떠날 준비가 되었다면 시작 버튼을 클릭한다.<br>
</p>
<br>
<p>
    “우리들은 본질적으로 반려종이다. 우리는 상대방을 서로의 살 속에 만들어 낸다. <br>
    구체적인 차이에 있어서 서로에게 현저하게 타자인 우리들은 서로의 살 속에 사랑이라 불리는 고약한 발달성의 감염을 나타낸다. <br>
    이 사랑은 역사적인 일탈이고, 자연문화적인 유산이다.” <br>
</p>

<p>
    도나 해러웨이 "<반려종선언>" 중에서…
</p>
<div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>
    이미지영역
    <img src="/img/dog021.gif">

</div>
<br>
<div id = 'contentsDiv'>

</div>
<form action="page_1-1.php" method="get">
    <div class = 'choice_div'>
        <input type="submit" value="시작"><br>
    </div>
</form>

</body>
</html>
