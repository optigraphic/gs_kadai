<?php
session_start();
//＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊DB接続＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
include "funcs.php";
chkSsid();
$pdo = db_con();

$_SESSION['idnum'] = $_POST["idnum"];
$_SESSION['name'] = $_POST["name"];
$_SESSION['email'] = $_POST["email"];
$_SESSION['tel'] = $_POST["tel"];
$_SESSION['zip'] = $_POST["zip"];
$_SESSION['add1'] = $_POST["add1"];
$_SESSION['add2'] = $_POST["add2"];
$_SESSION['13_1230'] = $_POST["13_1230"];
$_SESSION['14_1230'] = $_POST["14_1230"];
$_SESSION['11_1330'] = $_POST["11_1330"];
$_SESSION['12_1330'] = $_POST["12_1330"];
$_SESSION['16_1330'] = $_POST["16_1330"];
$_SESSION['17_1330'] = $_POST["17_1330"];
$_SESSION['18_1330'] = $_POST["18_1330"];
$_SESSION['08_1500'] = $_POST["08_1500"];
$_SESSION['09_1500'] = $_POST["09_1500"];
$_SESSION['13_1730'] = $_POST["13_1730"];
$_SESSION['07_1830'] = $_POST["07_1830"];
$_SESSION['11_1830'] = $_POST["11_1830"];
$_SESSION['16_1830'] = $_POST["16_1830"];
$_SESSION['18_1830'] = $_POST["18_1830"];
$_SESSION['20_1230'] = $_POST["20_1230"];
$_SESSION['21_1230'] = $_POST["21_1230"];
$_SESSION['27_1230'] = $_POST["27_1230"];
$_SESSION['28_1230'] = $_POST["28_1230"];
$_SESSION['19_1330'] = $_POST["19_1330"];
$_SESSION['23_1330'] = $_POST["23_1330"];
$_SESSION['24_1330'] = $_POST["24_1330"];
$_SESSION['25_1330'] = $_POST["25_1330"];
$_SESSION['26_1330'] = $_POST["26_1330"];
$_SESSION['20_1730'] = $_POST["20_1730"];
$_SESSION['27_1730'] = $_POST["27_1730"];
$_SESSION['23_1830'] = $_POST["23_1830"];
$_SESSION['25_1830'] = $_POST["25_1830"];
$_SESSION['ttlcnt'] = $_POST["ttlcnt"];
$_SESSION['ttlchrg'] = $_POST["ttlchrg"];

// $arr = array_filter($_SESSION);
// var_dump($arr);
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROUTE216専用「生きる」チケット申し込み確認</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    

<div class="body">
        
<header>
<div class="head_title_L">
    <p class="stage_title">舞台『生きる』ROUTE216チケット優先予約応募【確認】</p>
    <div class="red text-center"><span class="bold">以下の通りに受付いたします。</span></div>
    <div class="red text-center"><span class="bold">よろしければ申し込みボタンを押してください。</span></div>
<!-- <div class="head_title_R">
    <img src="img/footlogo.png" alt="生きるロゴ" class="logo">
</div> -->
</header>
    
<div class="form_outer_com">
    <div class="form">
<!-- **************会員情報入力form************** -->
        <form method="POST"  action="ikiru_insert.php">
            <fieldset>
                <div class="title-outer"><div class="block-red"></div><h2 class="block-title">会員情報【確認】</h2></div> 
                <table  class="pdd1020 font-m">
                    <tr class="pdd1020"><td class="tb-left pdd1020">ROUTE216会員番号</td><td class="tb-right font-m pdd1020 bold"> <?= $_SESSION['idnum'] ?> </td></tr>
                    <tr class="pdd1020"><td class="tb-left pdd1020">氏名</td><td class="tb-right font-m pdd1020 bold"> <?= $_SESSION['name'] ?> </td></tr>
                    <tr class="pdd1020"><td class="tb-left pdd1020">E-Mail</td><td class="tb-right font-m pdd1020 bold"> <?= $_SESSION['email'] ?> </td></tr>
                    <tr class="pdd1020"><td class="tb-left pdd1020">電話番号</td><td class="tb-right font-m pdd1020"> <?= $_SESSION['tel'] ?> </td></tr>
                    <tr class="pdd1020"><td class="tb-left pdd1020">郵便番号</td><td class="tb-right font-m pdd1020 bold"> <?= $_SESSION['zip']?> </td></tr>
                    <tr class="pdd1020"><td class="tb-left pdd1020">送付先住所1</td><td class="tb-right font-m pdd1020 bold"> <?= $_SESSION['add1'] ?> </td></tr>
                    <tr class="pdd1020"><td class="tb-left pdd1020">送付先住所2</td><td class="tb-right font-m pdd1020 bold"> <?= $_SESSION['add2']?> </td></tr>
                </table>
                <div class="title-outer"><div class="block-red"></div><h2 class="block-title">希望公演【確認】</h2></div>
                <div class="red font-m">※半角英数でご希望の枚数をご入力ください</div>
                <div class="red font-m">※抽選ではありません。慌てずにお間違えの無いようご入力ください。</div>

<!-- **************チケット入力form************** -->
                <div class="bold font-m"></div>
                    <table id="tkt_ttl_t" class="ticket_tbl">
                        <tr>
                            <th class="month">10月</th>
                    <!--07--><th class="day">7/日</th>
                    <!--08--><th class="day">8/月<span class="redday">祝</span></th>
                    <!--09--><th class="day">9/火</th>
                    <!--11--><th class="day">11/木</th>
                    <!--12--><th class="day">12/金</th>
                    <!--13--><th class="day">13/土</th>
                    <!--14--><th class="day">14/日</th>
                    <!--16--><th class="day">16/火</th>
                    <!--17--><th class="day">17/水</th>
                    <!--18--><th class="day">18/木</th>
                        </tr>
                        <tr>
                            <td class="text-center">12:30</td>
                    <!--07--><td class="text-center"></td>
                    <!--08--><td class="text-center"></td>
                    <!--09--><td class="text-center"></td>
                    <!--11--><td class="text-center"></td>
                    <!--12--><td class="text-center"></td>
                    <!--13--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['13_1230'] ?> </td>
                    <!--14--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['14_1230'] ?> </td>
                    <!--16--><td class="text-center"></td>
                    <!--17--><td class="text-center"></td>
                    <!--18--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">13:30</td>
                    <!--07--><td class="text-center"></td>
                    <!--08--><td class="text-center"></td>
                    <!--09--><td class="text-center"></td>
                    <!--11--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['11_1330'] ?> </td>
                    <!--12--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['12_1330'] ?> </td>
                    <!--13--><td class="text-center"></td>
                    <!--14--><td class="text-center"></td>
                    <!--16--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['16_1330'] ?> </td>
                    <!--17--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['17_1330'] ?> </td>
                    <!--18--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['18_1330'] ?> </td>
                        </tr>
                        <tr>
                            <td class="text-center">15:00</td>
                    <!--07--><td class="text-center"></td>
                    <!--08--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['08_1500'] ?> </td>
                    <!--09--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['09_1500'] ?> </td>
                    <!--11--><td class="text-center"></td>
                    <!--12--><td class="text-center"></td>
                    <!--13--><td class="text-center"></td>
                    <!--14--><td class="text-center"></td>
                    <!--16--><td class="text-center"></td>
                    <!--17--><td class="text-center"></td>
                    <!--18--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">17:30</td>
                    <!--07--><td class="text-center"></td>
                    <!--08--><td class="text-center"></td>
                    <!--09--><td class="text-center"></td>
                    <!--11--><td class="text-center"></td>
                    <!--12--><td class="text-center"></td>
                    <!--13--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['13_1730'] ?> </td>
                    <!--14--><td class="text-center"></td>
                    <!--16--><td class="text-center"></td>
                    <!--17--><td class="text-center"></td>
                    <!--18--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">18:30</td>
                    <!--07--><td class="text-center pre font-m bold cnt"> <?= $_SESSION['07_1830'] ?> </td>
                    <!--08--><td class="text-center"></td>
                    <!--09--><td class="text-center"></td>
                    <!--11--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['11_1830'] ?> </td>
                    <!--12--><td class="text-center"></td>
                    <!--13--><td class="text-center"></td>
                    <!--14--><td class="text-center"></td>
                    <!--16--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['16_1830'] ?> </td>
                    <!--17--><td class="text-center"></td>
                    <!--18--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['18_1830'] ?> </td>
                        </tr>
                    <!-- </table>
                    
                    <table id="tkt_ttl_b" class="tbbtm ticket_tbl"> -->
                        <tr>
                            <th class="month">10月</th>
                    <!--19--><th class="day">19/金</th>
                    <!--20--><th class="day">20/土</th>
                    <!--21--><th class="day">21/日</th>
                    <!--23--><th class="day">23/火</th>
                    <!--24--><th class="day">24/水</th>
                    <!--25--><th class="day">25/木</th>
                    <!--26--><th class="day">26/金</th>
                    <!--27--><th class="day">27/土</th>
                    <!--28--><th class="day">28/日</th>
                        </tr>
                        <tr>
                            <td class="text-center">12:30</td>
                    <!--19--><td class="text-center"></td>
                    <!--20--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['20_1230'] ?> </td>
                    <!--21--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['21_1230'] ?> </td>
                    <!--23--><td class="text-center"></td>
                    <!--24--><td class="text-center"></td>
                    <!--25--><td class="text-center"></td>
                    <!--26--><td class="text-center"></td>
                    <!--27--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['27_1230'] ?> </td>
                    <!--28--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['28_1230'] ?> </td>
                        </tr>
                        <tr>
                            <td class="text-center">13:30</td>
                    <!--19--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['19_1330'] ?> </td>
                    <!--20--><td class="text-center"></td>
                    <!--21--><td class="text-center"></td>
                    <!--23--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['23_1330'] ?> </td>
                    <!--24--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['24_1330'] ?> </td>
                    <!--25--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['25_1330'] ?> </td>
                    <!--26--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['26_1330'] ?> </td>
                    <!--27--><td class="text-center"></td>
                    <!--28--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">15:00</td>
                    <!--19--><td class="text-center"></td>
                    <!--20--><td class="text-center"></td>
                    <!--21--><td class="text-center"></td>
                    <!--23--><td class="text-center"></td>
                    <!--24--><td class="text-center"></td>
                    <!--25--><td class="text-center"></td>
                    <!--26--><td class="text-center"></td>
                    <!--27--><td class="text-center"></td>
                    <!--28--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">17:30</td>
                    <!--19--><td class="text-center"></td>
                    <!--20--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['20_1730'] ?> </td>
                    <!--21--><td class="text-center"></td>
                    <!--23--><td class="text-center"></td>
                    <!--24--><td class="text-center"></td>
                    <!--25--><td class="text-center"></td>
                    <!--26--><td class="text-center"></td>
                    <!--27--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['27_1730'] ?> </td>
                    <!--28--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">18:30</td>
                    <!--19--><td class="text-center"></td>
                    <!--20--><td class="text-center"></td>
                    <!--21--><td class="text-center"></td>
                    <!--23--><td class="text-center ichi font-m bold cnt"> <?= $_SESSION['23_1830'] ?> </td>
                    <!--24--><td class="text-center"></td>
                    <!--25--><td class="text-center kaga font-m bold cnt"> <?= $_SESSION['25_1830'] ?> </td>
                    <!--26--><td class="text-center"></td>
                    <!--27--><td class="text-center"></td>
                    <!--28--><td class="text-center"></td>
                        </tr>
                    </table>
                    <input type="hidden" name="ttlcnt" id="ttlcnt_hidden">
                    <input type="hidden" name="ttlchrg" id="ttlchrg_hidden">
                        <div class="flex cast bold">
                                <div class="pre pdd0510">プレビュー公演（市村正親）</div>
                                <div class="ichi pdd0510">市村正親</div>
                                <div class="kaga pdd0510">鹿賀丈史</div>
                        </div>
                        <div class="flex ttl">
                        合計：<div class="ttlcnt-outer text-center bold"><p> <?= $_SESSION['ttlcnt'] ?> </p></div><div>枚 x ¥10000 = ¥</div><div class="ttlchrg-outer text-center bold"><p id="ttlchrg"> <?= $_SESSION['ttlchrg'] ?> </p></div>
                        </div>
                </div>
                    <div class="btn"><input type="button" value="内容を修正する" onclick="history.back(-1)"></div>
                    <div class="btn"><input type="submit" value="申し込み" name="submit" id="submit" class="input-s font-l"></button></div>
                    <div class="red text-center"><span class="bold">※ボタンが押されるまで確定しません</span></div>
            </fieldset>
        </form>
    </div>
</div>
</div>



</body>
</html>