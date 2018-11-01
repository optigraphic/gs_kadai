
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
    

        <div class="gnavi">
            <ul class="white">
                <li class="white"><a href="ikiru_form.php">申し込みフォーム</a></li>
                <li class="white"><a href="ikiru_regu.php">申し込みについて</a></li>
            </ul>
        </div>
             <div class="pageDisplay">
             </div>
</body>

<script>



$(function(){
	//ページを表示させる箇所の設定
	var $content = $('.pageDisplay');
	//ボタンをクリックした時の処理
	$(document).on('click', '.gnavi a', function(event) {
		event.preventDefault();
		//.gnavi aのhrefにあるリンク先を保存
		var link = $(this).attr("href");
		//リンク先が今と同じであれば遷移しない
		if(link == lastpage){
			return false;
		}else{
			$content.fadeOut(600, function() {
				getPage(link);
			});
			//今のリンク先を保存
			lastpage = link;
		}
		
	});
	//初期設定
	getPage("ikiru_form.php");
	var lastpage = "ikiru_form.php";
 
	//ページを取得してくる
    function getPage(elm){
    	$.ajax({
            type: 'GET',
            url: elm,
            dataType: 'html',
            success: function(data){
                $content.html(data).fadeIn(100);
            },
            error:function() {
                       alert('問題がありました。');
                   }
    	});
    }
});

    

</script>

</html>