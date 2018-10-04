-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 10 月 04 日 15:22
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `writer` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `publishedDate` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comme` text COLLATE utf8_unicode_ci NOT NULL,
  `isbn` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `writer`, `publisher`, `publishedDate`, `url`, `comme`, `isbn`, `datetime`, `thumbnail`) VALUES
(10, '祖父江慎+コズフィッシュ', '祖父江慎', 'パイインターナショナル', '2016-04', 'http://books.google.co.jp/books?id=e9i-DAEACAAJ&dq=isbn:9784756247858&hl=&source=gbs_api', 'コズフィッシュ設立以前、祖父江慎の学生時代から現在までの明細データ付き。全ブックリスト1980~2016、伝説の幻本!', '9784756247858', '2018-09-27 17:00:17', 'http://books.google.com/books/content?id=e9i-DAEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(11, 'カラーイメージチャート', '南雲治嘉', 'グラフィック社', '2016-01-25', 'http://books.google.co.jp/books?id=kROmDAEACAAJ&dq=isbn:9784766128826&hl=&source=gbs_api', '世界標準となってきた「カラーイメージチャート」によって、グローバルで的確に伝わる配色ができます。3~4色の配色サンプル、Web画面に見立てた面分割の配色サンプル、文字やアイコンの配色サンプルと、豊富なスタイルを紹介。CMYKおよびRGBの表示があり、スムーズな色指定ができます。配色の基本的な手法と、イメージ別の配色のコツを解説。配色のスキルアップは確実です。配色作業の効率化を図り、デザインワークの省力化に貢献します。', '9784766128826', '2018-09-27 17:11:55', 'http://books.google.com/books/content?id=kROmDAEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(12, '大相撲殺人事件', '小森健太朗', '文藝春秋', '2008-11', 'http://books.google.co.jp/books?id=DjglNwAACAAJ&dq=isbn:9784167753283&hl=&source=gbs_api', 'ひょんなことから相撲部屋に入門したアメリカの青年マークは、将来有望な力士としてデビュー。しかし、彼を待っていたのは角界に吹き荒れる殺戮の嵐だった!立合いの瞬間、爆死する力士、頭のない前頭、密室状態の土俵で殺された行司...本格ミステリと相撲、その伝統と格式が奇跡的に融合した伝説の奇書。', '9784167753283', '2018-09-27 17:14:29', 'http://books.google.com/books/content?id=DjglNwAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(13, 'Blue', '諏訪敦', '青幻舎', '2017-10-17', 'http://books.google.co.jp/books?id=UYBaswEACAAJ&dq=isbn:9784861526466&hl=&source=gbs_api', '「どうせなにも見えない」から6年、“見るという視覚の拡張"を堪能する初の本格画集。図版約70点・自作解題付', '9784861526466', '2018-09-27 17:34:48', 'http://books.google.com/books/content?id=UYBaswEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(15, '定番フォントガイドブック', 'タイポグラフィ編集部', 'グラフィック社', '2017-08', 'http://books.google.co.jp/books?id=kbBsswEACAAJ&dq=isbn:9784766130867&hl=&source=gbs_api', '和文・欧文の定番フォント和欧混植のフォントなど約700書体を収録。', '9784766130867', '2018-09-27 17:36:22', 'http://books.google.com/books/content?id=kbBsswEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(16, 'グラフィックデザイナーたちの“理論”', 'ヘレン・アームストロング', 'ビー・エヌ・エヌ新社', '2017-07', 'http://books.google.co.jp/books?id=4NE6tAEACAAJ&dq=isbn:9784802510608&hl=&source=gbs_api', '20世紀の伝説的デザイナーたちは、当時の社会と自らの実践の狭間で何を見出そうとしたのか?作者性、普遍性、社会的責任...精選されたテキストから紐解くアンソロジー。', '9784802510608', '2018-09-27 17:36:59', 'http://books.google.com/books/content?id=4NE6tAEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(17, 'マンボウのひみつ', '澤井悦郎', '岩波書店', '2017-08', 'http://books.google.co.jp/books?id=UgmGtAEACAAJ&dq=isbn:9784005008599&hl=&source=gbs_api', '人気者なのに謎すぎる魚・マンボウ。なんであんな形なの?夜光る、すぐ死ぬ、おぼれる人を助けた、3億個産卵して生き残るのは2匹...伝説の真相は?古い文献探しから先端技術での生態調査、料理やサブカルまで、マンボウのひみつを解き明かそうと挑んだ若き研究者が、悲喜こもごもの研究ワールドへご招待!(カラー頁多数)', '9784005008599', '2018-09-27 17:38:03', 'http://books.google.com/books/content?id=UgmGtAEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(18, 'ジーニアス英和辞典', '南出康世', '大修館書店', '2014-12-25', 'http://books.google.co.jp/books?id=La3HrQEACAAJ&dq=isbn:9784469041804&hl=&source=gbs_api', '収録語句数は約10万5000。学習英和辞典としては最大規模。根幹部分である語義・用例を、よりわかりやすくなるよう見直し。「語法」欄を全面見直し。より新しい情報、よりわかりやすい記述に。コロケーション(連語)をより重視。「コロケーション+」蘭を新設。巻末にコラーイラストページのPicture Dictionaryを新設。新語・新語義を多数(約1000語句)収録。英語のいまが見える。前置詞のイメージが概念図や「意味ネットワーク」でつかみやすく。類語比較欄を増強。類語の違いを用例とともにわかりやすく解説。', '9784469041804', '2018-09-27 17:39:35', 'http://books.google.com/books/content?id=La3HrQEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(19, '申し訳ない、御社をつぶしたのは私です。', 'カレンフェラン', '大和書房', '2018-06-15', 'http://books.google.co.jp/books?id=oIpLuAEACAAJ&dq=isbn:9784479307099&hl=&source=gbs_api', 'マッキンゼー、デロイト...超一流コンサルが持ち込んだ理論もチャートも改革も、じつは何の意味もなかった!?コンサル業界の驚くべき仕事の実態を、表から裏まで徹底的に暴露した全米騒然のベストセラー問題作、待望の文庫化!効果をちっとも感じない「経営改革」に呆れている人、必読!', '9784479307099', '2018-09-27 22:40:30', 'http://books.google.com/books/content?id=oIpLuAEACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(20, 'Build the Future', '西澤丞', '太田出版', '2010-04', 'http://books.google.co.jp/books?id=T14KSQAACAAJ&dq=isbn:9784778312121&hl=&source=gbs_api', '日本の先端技術の現場を圧倒的スケールで撮り下ろした立ち入り禁止の奥の世界。', '9784778312121', '2018-09-27 22:44:36', 'http://books.google.com/books/content?id=T14KSQAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(21, '最後の秘境東京藝大', '二宮敦人', '新潮社', '2016-09', 'http://books.google.co.jp/books?id=i8YcvgAACAAJ&dq=isbn:9784103502913&hl=&source=gbs_api', '入試倍率は東大の3倍!「芸術界の東大」は本能と才能あふれる「芸術家の卵」たちの最後の楽園だった。型破りな日常に迫る驚嘆ルポ。', '9784103502913', '2018-09-27 22:45:50', 'http://books.google.com/books/content?id=i8YcvgAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(22, 'あかるい物撮り', 'ゆかい', 'ビー・エヌ・エヌ新社', '2016-09', 'http://books.google.co.jp/books?id=JpBIvgAACAAJ&dq=isbn:9784802510226&hl=&source=gbs_api', '雑貨、洋服、料理ほか、どんなテーマや対象も、あかるくてたのしくて、よく伝わる写真にするアイデアと技術。', '9784802510226', '2018-09-27 22:53:13', 'http://books.google.com/books/content?id=JpBIvgAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(88, 'いま世界の哲学者が考えていること', '岡本裕一朗', 'ダイヤモンド社', '2016-09', 'http://books.google.co.jp/books?id=WTpavgAACAAJ&dq=isbn:9784478067024&hl=&source=gbs_api', 'いつまでも「哲学=人生論」と思っているのは日本人だけ!人工知能、遺伝子工学、格差社会、テロの脅威、フィンテック、宗教対立、環境破壊...「世界最高の知の巨人たち」が現代のとけない課題に答えをだす。', '9784478067024', '2018-10-01 15:21:49', 'http://books.google.com/books/content?id=WTpavgAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api'),
(94, 'いちばんやさしいPHPの教本 第2版 人気講師が教える実践Webプログラミング', '柏岡秀男,池田友子', '（株）インプレス', '2017-05-25', 'https://play.google.com/store/books/details?id=goMkDwAAQBAJ&source=gbs_api', '講義+実習のワークショップ形式で、 データベースを組み合わせた実践的なプログラムを作りながら基礎を学べる なぜそうするのかを知りたい、 仕組みがしりたい、 応用できる基礎を身に付けたい、 そんな読者のさまざまな要望に応える新しい教本です。 本書で学ぶ豊富なサンプルプログラムのコードはサポートページから ダウンロードできるので安心です。 勘違いしやすい箇所は講師がフォロー。 ワークショップ感覚で読み進められます。 発行：インプレス', '9784295001249', '2018-10-02 00:35:15', 'http://books.google.com/books/content?id=goMkDwAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
