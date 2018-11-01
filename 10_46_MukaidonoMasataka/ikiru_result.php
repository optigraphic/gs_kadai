<?php
session_start();
//1.  DB接続します
include "funcs.php";
chkSsid();
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_route_ikiru");
$status = $stmt->execute();

$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
    sqlError($stmt);
    // データをループで取って来い
}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view.="<tr class='tktr'><td>".$result["idnum"]."</td><td>".$result["name"]."</td><td>".$result["email"]."</td><td>".$result["tel"]."</td><td>".$result["zip"]."</td><td>".$result["add1"]."</td><td>".$result["add2"]."</td>";
    $view.="<td> </td><td> </td><td class='text-center'>".$result["ttlcnt"]."</td><td>".$result["ttlchrg"]."</td><td>".$result["datetime"]."</td></tr><tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";
if($result["07_1830"]!=="0"){ 
    $view.="<td>07日18:30</td><td class='text-center'>".$result["07_1830"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["08_1500"]!=="0"){ 
    $view.="<td>08日15:00</td><td class='text-center'>".$result["08_1500"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["09_1500"]!=="0"){ 
    $view.="<td>09日15:00</td><td class='text-center'>".$result["09_1500"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["11_1330"]!=="0"){ 
    $view.="<td>11日13:30</td><td class='text-center'>".$result["11_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["11_1830"]!=="0"){ 
    $view.="<td>11日18:30</td><td class='text-center'>".$result["11_1830"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["12_1330"]!=="0"){ 
    $view.="<td>12日13:30</td><td class='text-center'>".$result["12_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["13_1230"]!=="0"){ 
    $view.="<td>13日12:30</td><td class='text-center'>".$result["13_1230"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["13_1730"]!=="0"){ 
    $view.="<td>13日17:30</td><td class='text-center'>".$result["13_1730"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["14_1230"]!=="0"){ 
    $view.="<td>14日12:30</td><td class='text-center'>".$result["14_1230"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["16_1330"]!=="0"){ 
    $view.="<td>16日13:30</td><td class='text-center'>".$result["16_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["16_1830"]!=="0"){ 
    $view.="<td>16日18:30</td><td class='text-center'>".$result["16_1830"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["17_1330"]!=="0"){ 
    $view.="<td>17日13:30</td><td class='text-center'>".$result["17_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["18_1330"]!=="0"){ 
    $view.="<td>18日13:30</td><td class='text-center'>".$result["18_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["18_1830"]!=="0"){ 
    $view.="<td>18日18:30</td><td class='text-center'>".$result["18_1830"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["19_1330"]!=="0"){ 
    $view.="<td>19日13:30</td><td class='text-center'>".$result["19_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["20_1230"]!=="0"){ 
    $view.="<td>20日12:30</td><td class='text-center'>".$result["20_1230"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["20_1730"]!=="0"){ 
    $view.="<td>20日17:30</td><td class='text-center'>".$result["20_1730"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["21_1230"]!=="0"){ 
    $view.="<td>21日12:30</td><td class='text-center'>".$result["21_1230"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["23_1330"]!=="0"){ 
    $view.="<td>23日13:30</td><td class='text-center'>".$result["23_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["23_1830"]!=="0"){ 
    $view.="<td>23日18:30</td><td class='text-center'>".$result["23_1830"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["24_1330"]!=="0"){ 
    $view.="<td>24日13:30</td><td class='text-center'>".$result["24_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["25_1330"]!=="0"){ 
    $view.="<td>25日13:30</td><td class='text-center'>".$result["25_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["25_1830"]!=="0"){ 
    $view.="<td>25日18:30</td><td class='text-center'>".$result["25_1830"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["26_1330"]!=="0"){ 
    $view.="<td>26日13:30</td><td class='text-center'>".$result["26_1330"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["27_1230"]!=="0"){ 
    $view.="<td>27日12:30</td><td class='text-center'>".$result["27_1230"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["27_1730"]!=="0"){ 
    $view.="<td>27日17:30</td><td class='text-center'>".$result["27_1730"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}
if($result["28_1230"]!=="0"){ 
    $view.="<td>28日12:30</td><td class='text-center'>".$result["28_1230"]."</td><td> </td><td> </td></tr> <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";}

    
  



    // $result["ttlcnt"]
    // $result["ttlchrg"]

    }
}
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
    <title>ROUTE216専用「生きる」チケット申し込み状況</title>
</head>

<body>
<div class="body">
        
    <header>
        <div class="head_title_L">
            <p class="stage_title">舞台『生きる』ROUTE216チケット優先予約者リスト</p>
        </div>
    </header>

<div class="result_outer">
    <div class="form">
<!-- **************チケット予約状況表示************** -->
                <div class="title-outer"><div class="block-red"></div><h2 class="block-title">予約者リスト</h2></div> 
                <table  class="pdd1020 font-m bgbk" id="table_re">
                <tr class="pdd1020">
                    <th class="tb-left pdd1020">会員番号</th>
                    <th class="tb-left pdd1020">　　氏名　　</th>
                    <th class="tb-left pdd1020">　　E-Mail　　</th>
                    <th class="tb-left pdd1020">　　電話番号　　</th>
                    <th class="tb-left pdd1020">　郵便番号　</th>
                    <th class="tb-left pdd1020">　　送付先住所1　　</th>
                    <th class="tb-left pdd1020">　　送付先住所2　　</th>
                    <th class="tb-left pdd1020">　公演日　</th>
                    <th class="tb-left pdd1020">枚数</th>
                    <th class="tb-left pdd1020">合計枚数</th>
                    <th class="tb-left pdd1020">　合計金額　</th>
                    <th class="tb-left pdd1020">　　申し込み日時　　</th>
                </tr>
                <!-- <tr>
                    <td>$result["idnum"]</td>
                    <td>$result["name"]</td>
                    <td>$result["email"]</td>
                    <td>$result["tel"]</td>
                    <td>$result["zip"]</td>
                    <td>$result["add1"]</td>
                    <td>$result["add2"]</td>
                    <td>公演日</td>
                    <td>$result["131230"]</td>
                </tr> -->
                <?=$view?>
                </table>

    </div>
</div>
</div>

</body>
</html>