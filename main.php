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

            if(index == 1){
                // alert('1');
                window.location.href = 'http://34.80.159.83/page_1-1.php?value='+index;
            } else if(index == 2){
                // alert('2');
                window.location.href = 'http://34.80.159.83/page_1-2.php?value='+index;
            } else if(index == 3){
                // alert('3');
                window.location.href = 'http://34.80.159.83/page_1-3.php?value='+index;
            }
        });

    });

</script>


<html>
<body>
메인페이지 텍스트<br>
메인페이지 텍스트
<br>
<div id = 'imgDiv' style = 'border-top: 1px solid; border-bottom: 1px solid;'>
    이미지영역
    <img src="/dog021.gif">

</div>
<br>
<div id = 'contentsDiv'>

</div>
<form action="page_1-1.php" method="get">
    <div class = 'choice_div'>
        선택지 영역<br>
        <button type="button" name="button" id = 'choiceBtn1' value="1" >선택지11111111111111111</button>
        <button type="button" name="button" id = 'choiceBtn2' value="2" >선택지22222222222222222</button>
        <button type="button" name="button" id = 'choiceBtn3' value="3" >선택지33333333333333333</button><br>
    </div>
</form>
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
