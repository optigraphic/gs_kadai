<?php
session_start();
//1.  DB接続します
include "funcs.php";
chkSsid();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>ROUTE216専用「生きる」チケット申し込みフォーム</title>
</head>
<body>

<div class="body">
        
    <header>
    <div class="head_title_L">
        <p class="stage_title">舞台『生きる』ROUTE216チケット優先予約応募フォーム</p>
        <div class="red text-center">※予約受付は<span class="bold">2018年10月1日9：00〜2018年10月10日23：59</span>です。<br>
        ※<span class="bold">受付期間外の応募はすべて無効となります。</span>ご注意ください。</div>
        <div class="red font-l text-center bold">【今回の募集は抽選ではありません。慌てずにお間違えの無いようご入力ください。】</div>
    </div>
    <!-- <div class="head_title_R">
        <img src="img/footlogo.png" alt="生きるロゴ" class="logo">
    </div> -->
    </header>

<div class="form_outer">
    <div class="form">
<!-- **************会員情報入力form************** -->
        <form method="POST" action="ikiru_confirm.php" id="userform">
            <fieldset>
                <div class="title-outer"><div class="block-red"></div><h2 class="block-title">会員情報入力</h2></div> 
                <table  class="pdd1020 font-m">
                 <tr class="pdd1020"><td class="tb-left pdd1020">ROUTE216会員番号</td><td class="tb-right font-m pdd1020"><input type="text" name="idnum" required pattern="^[0-9A-Za-z]+$" id="idnum" class="input-s font-m" value= "<?=$_SESSION["idnum"]?>"　required><span class="font-s">※半角入力</span></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">氏名</td><td class="tb-right font-m pdd1020"><input type="text" name="name" id="name" class="input-m font-m" value= "<?=$_SESSION["name"]?>" required></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">E-Mail</td><td class="tb-right font-m pdd1020"><input type="email" name="email" id="email" class="input-m font-m" required pattern="^[0-9A-Za-z._%+-]+@[0-9a-z.-]+\.[a-z]{2,3}$"><span id="chkNg" class="red font-s"></span><span class="font-s">※半角入力</span></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">E-Mail（確認）</td><td class="tb-right font-m pdd1020"><input type="email" name="mialChk" id="mailChk" class="input-m font-m" required pattern="^[0-9A-Za-z._%+-]+@[0-9a-z.-]+\.[a-z]{2,3}$"><span class="font-s">※確認のため再入力をお願いします</span></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">電話番号</td><td class="tb-right font-m pdd1020"><input type="text" name="tel" class="input-s font-m" required pattern="^[0-9]+$" id="tel" ><span class="font-s">※半角入力　ハイフン(-)なし</span></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">郵便番号</td><td class="tb-right font-m pdd1020"><input type="text" name="zip" class="input-s font-m" required pattern="^[0-9]+$" id="zip" ><span class="font-s">※半角入力　ハイフン(-)なし</span></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">送付先住所1</td><td class="tb-right font-m pdd1020"><input type="text" name="add1" class="input-l font-m" id="add1" placeholder="都道府県／市区町村" value= "<?=$_SESSION["add1"]?>" required></td></tr>
                 <tr class="pdd1020"><td class="tb-left pdd1020">送付先住所2</td><td class="tb-right font-m pdd1020"><input type="text" name="add2" class="input-l font-m" id="add2" placeholder="番地／建物名" value= "<?=$_SESSION["add2"]?>" required></td></tr>
                </table>
                <div class="red text-right">※すべてご入力ください</div>
                <div class="title-outer"><div class="block-red"></div><h2 class="block-title">希望公演入力</h2></div>
                <div class="red font-m">※半角英数でご希望の枚数をご入力ください</div>

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
                   <!--13--><td class="text-center ichi"><input type="text" name="13_1230" size="3" maxlength="1" pattern="^[1-9]+$" id="13_1230" class="text-center font-s bold cnt"></td>
                   <!--14--><td class="text-center ichi"><input type="text" name="14_1230" size="3" maxlength="1" pattern="^[1-9]+$" id="14_1500" class="text-center font-s bold cnt"></td>
                   <!--16--><td class="text-center"></td>
                   <!--17--><td class="text-center"></td>
                   <!--18--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">13:30</td>
                   <!--07--><td class="text-center"></td>
                   <!--08--><td class="text-center"></td>
                   <!--09--><td class="text-center"></td>
                   <!--11--><td class="text-center kaga"><input type="text" name="11_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="11_1330" class="text-center font-s bold cnt"></td>
                   <!--12--><td class="text-center kaga"><input type="text" name="12_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="12_1330" class="text-center font-s bold cnt"></td>
                   <!--13--><td class="text-center"></td>
                   <!--14--><td class="text-center"></td>
                   <!--16--><td class="text-center ichi"><input type="text" name="16_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="16_1330" class="text-center font-s bold cnt"></td>
                   <!--17--><td class="text-center ichi"><input type="text" name="17_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="17_1330" class="text-center font-s bold cnt"></td>
                   <!--18--><td class="text-center kaga"><input type="text" name="18_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="18_1330" class="text-center font-s bold cnt"></td>
                        </tr>
                        <tr>
                            <td class="text-center">15:00</td>
                   <!--07--><td class="text-center"></td>
                   <!--08--><td class="text-center ichi"><input type="text" name="08_1500" size="3" maxlength="1" pattern="^[1-9]+$" id="08_1500" class="text-center font-s bold cnt"></td>
                   <!--09--><td class="text-center kaga"><input type="text" name="09_1500" size="3" maxlength="1" pattern="^[1-9]+$" id="09_1500" class="text-center font-s bold cnt"></td>
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
                   <!--13--><td class="text-center kaga"><input type="text" name="13_1730" size="3" maxlength="1" pattern="^[1-9]+$" id="13_1730" class="text-center font-s bold cnt"></td>
                   <!--14--><td class="text-center"></td>
                   <!--16--><td class="text-center"></td>
                   <!--17--><td class="text-center"></td>
                   <!--18--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">18:30</td>
                   <!--07--><td class="text-center pre"><input type="text" name="07_1830" size="3" maxlength="1" pattern="^[1-9]+$" id="07_1230" class="text-center font-s bold cnt"></td>
                   <!--08--><td class="text-center"></td>
                   <!--09--><td class="text-center"></td>
                   <!--11--><td class="text-center ichi"><input type="text" name="11_1830" size="3" maxlength="1" pattern="^[1-9]+$" id="11_1830" class="text-center font-s bold cnt"></td>
                   <!--12--><td class="text-center"></td>
                   <!--13--><td class="text-center"></td>
                   <!--14--><td class="text-center"></td>
                   <!--16--><td class="text-center kaga"><input type="text" name="16_1830" size="3" maxlength="1" pattern="^[1-9]+$" id="16_1830" class="text-center font-s bold cnt"></td>
                   <!--17--><td class="text-center"></td>
                   <!--18--><td class="text-center ichi"><input type="text" name="18_1830" size="3" maxlength="1" pattern="^[1-9]+$" id="18_1830" class="text-center font-s bold cnt"></td>
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
                   <!--20--><td class="text-center ichi"><input type="text" name="20_1230" size="3" maxlength="1" pattern="^[1-9]+$" id="20_1230" class="text-center font-s bold cnt"></td>
                   <!--21--><td class="text-center ichi"><input type="text" name="21_1230" size="3" maxlength="1" pattern="^[1-9]+$" id="21_1230" class="text-center font-s bold cnt"></td>
                   <!--23--><td class="text-center"></td>
                   <!--24--><td class="text-center"></td>
                   <!--25--><td class="text-center"></td>
                   <!--26--><td class="text-center"></td>
                   <!--27--><td class="text-center kaga"><input type="text" name="27_1230" size="3" maxlength="1" pattern="^[1-9]+$" id="27_1230" class="text-center font-s bold cnt"></td>
                   <!--28--><td class="text-center kaga"><input type="text" name="28_1230" size="3" maxlength="1" pattern="^[1-9]+$" id="28_1230" class="text-center font-s bold cnt"></td>
                        </tr>
                        <tr>
                            <td class="text-center">13:30</td>
                   <!--19--><td class="text-center kaga"><input type="text" name="19_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="19_1330" class="text-center font-s bold cnt"></td>
                   <!--20--><td class="text-center"></td>
                   <!--21--><td class="text-center"></td>
                   <!--23--><td class="text-center kaga"><input type="text" name="23_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="23_1330" class="text-center font-s bold cnt"></td>
                   <!--24--><td class="text-center kaga"><input type="text" name="24_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="24_1330" class="text-center font-s bold cnt"></td>
                   <!--25--><td class="text-center ichi"><input type="text" name="25_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="25_1330" class="text-center font-s bold cnt"></td>
                   <!--26--><td class="text-center ichi"><input type="text" name="26_1330" size="3" maxlength="1" pattern="^[1-9]+$" id="26_1330" class="text-center font-s bold cnt"></td>
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
                   <!--20--><td class="text-center kaga"><input type="text" name="20_1730" size="3" maxlength="1" pattern="^[1-9]+$" id="20_1730" class="text-center font-s bold cnt"></td>
                   <!--21--><td class="text-center"></td>
                   <!--23--><td class="text-center"></td>
                   <!--24--><td class="text-center"></td>
                   <!--25--><td class="text-center"></td>
                   <!--26--><td class="text-center"></td>
                   <!--27--><td class="text-center ichi"><input type="text" name="27_1730" size="3" maxlength="1" pattern="^[1-9]+$" id="27_1730" class="text-center font-s bold cnt"></td>
                   <!--28--><td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">18:30</td>
                   <!--19--><td class="text-center"></td>
                   <!--20--><td class="text-center"></td>
                   <!--21--><td class="text-center"></td>
                   <!--23--><td class="text-center ichi"><input type="text" name="23_1830" size="3" maxlength="1" pattern="^[1-9]+$" id="23_1830" class="text-center font-s bold cnt"></td>
                   <!--24--><td class="text-center"></td>
                   <!--25--><td class="text-center kaga"><input type="text" name="25_1830" size="3" maxlength="1" pattern="^[1-9]+$" id="25_1830" class="text-center font-s bold cnt"></td>
                   <!--26--><td class="text-center"></td>
                   <!--27--><td class="text-center"></td>
                   <!--28--><td class="text-center"></td>
                        </tr>
                    </table>
                    <input type="hidden" name="ttlcnt" id="ttlcnt_hidden" class="ttlcnt" val="">
                    <input type="hidden" name="ttlchrg" id="ttlchrg_hidden" class="ttlchrg" val="">
                        <div class="flex cast bold">
                                <div class="pre pdd0510">プレビュー公演（市村正親）</div>
                                <div class="ichi pdd0510">市村正親</div>
                                <div class="kaga pdd0510">鹿賀丈史</div>
                        </div>
                        <div class="flex ttl">
                                <div class="ttlcnt-outer text-center bold"><p id="ttlcnt"></p></div><div>枚 x ¥10000 = ¥</div><div class="ttlchrg-outer text-center bold"><p id="ttlchrg"></p></div>
                        </div>
                </div>
                <div class="btn"><input type="submit" value="確認画面へ" class="input-s font-l"></div>
            </fieldset>
        </form>
    </div>
</div>
</div>


<!-- **************ここからjs************ -->
<script type="text/javascript">

$(function(){
	setInterval(function(){
        var total_sum = 0;
        $("#tkt_ttl_t .cnt").each(function(){
            var get_textbox_value = $(this).val();
            if ($.isNumeric(get_textbox_value)) {
                total_sum += parseFloat(get_textbox_value);
                }                  
        });
        //  console.log(total_sum);
        $("#ttlcnt").html(total_sum);
        $("#ttlcnt_hidden").val(total_sum);
        var ttlchrg = 10000 * total_sum;
        $("#ttlchrg").html(ttlchrg);
        $("#ttlchrg_hidden").val(ttlchrg);
	},500);
});


// $("#tkt_ttl_t").on("input", ".cnt", function(){
//     var total_sum = 0;
//     $("#tkt_ttl_t .cnt").each(function(){
//         var get_textbox_value = $(this).val();
//         if ($.isNumeric(get_textbox_value)) {
//               total_sum += parseFloat(get_textbox_value);
//               }                  
//      });
//     //  console.log(total_sum);
//      $("#ttlcnt").html(total_sum);
//      $("#ttlcnt_hidden").val(total_sum);
//      var ttlchrg = 10000 * total_sum;
//      $("#ttlchrg").html(ttlchrg);
//      $("#ttlchrg_hidden").val(ttlchrg);
    
// });

$("#mailChk").on("change scroll",function(){
    const mail_ori = $("#email").val();
    const mail_sub = $("#mailChk").val();
    // console.log(mail_ori);
    // console.log(mail_sub);
    if(mail_ori != mail_sub){
        $("#chkNg").html("メールアドレスが一致しません");
    }else{
        $("#chkNg").html("");
    }
});

</script>




</body>
</html>