-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-02-21 01:51:05
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `82`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `an_order`
--

CREATE TABLE `an_order` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `delivery_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `total_fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `an_order`
--

INSERT INTO `an_order` (`order_id`, `user_id`, `delivery_id`, `date`, `total_fee`) VALUES
(15, 'test01', 16, '2022-01-31', 3992),
(16, 'test01', 17, '2022-01-31', 833),
(17, 'test01', 18, '2022-01-31', 220),
(18, 'test01', 19, '2022-02-01', 16340);

-- --------------------------------------------------------

--
-- テーブルの構造 `brack_list`
--

CREATE TABLE `brack_list` (
  `user_id` varchar(255) NOT NULL,
  `sin_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `category`
--

INSERT INTO `category` (`category_id`, `emp_id`, `name`, `registration_date`, `delete_flag`) VALUES
(1, 0, 'ラーメン', '2022-01-12', 0),
(2, 0, 'サイドメニュー', '2022-01-13', 0),
(3, 0, 'おすすめ商品', '2022-01-12', 0),
(4, 0, '健康食品', '2022-01-12', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `contents` varchar(1020) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `mail`, `subject`, `contents`) VALUES
(1, 'asda', 'test01@test.ac.jp', 'asd', 'ああああああああ');

-- --------------------------------------------------------

--
-- テーブルの構造 `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_furigana` varchar(255) DEFAULT NULL,
  `postal_code` char(7) NOT NULL,
  `prefectures` varchar(4) DEFAULT NULL,
  `address01` varchar(255) DEFAULT NULL,
  `address02` varchar(255) DEFAULT NULL,
  `address03` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `user_id`, `name`, `name_furigana`, `postal_code`, `prefectures`, `address01`, `address02`, `address03`) VALUES
(16, 'test01', '谷原 二郎', 'タニハラ ジロウ', '6128416', '京都府', '京都市伏見区竹田流池町', '121-3', ''),
(17, 'test01', '谷原 二郎', 'タニハラ ジロウ', '6128416', '京都府', '京都市伏見区竹田流池町', '121-3', ''),
(18, 'test01', '谷原 二郎', 'タニハラ ジロウ', '6128416', '京都府', '京都市伏見区竹田流池町', '121-3', ''),
(19, 'test01', '谷原 二郎', 'タニハラ ジロウ', '6128416', '京都府', '京都市伏見区竹田流池町', '121-3', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_furigana` varchar(255) DEFAULT NULL,
  `first_furigana` varchar(255) DEFAULT NULL,
  `emp_authority` tinyint(1) DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `employee`
--

INSERT INTO `employee` (`emp_id`, `password`, `last_name`, `first_name`, `last_furigana`, `first_furigana`, `emp_authority`, `delete_flag`) VALUES
(0, '$2y$10$AmkFJhA6cZqUHiPhuYDAcuzT4tfehlI7MSh85F0mZVFf.tGAtwUpO', '谷原', '一郎', 'タニハラ', 'イチロウ', 2, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `mail_certification`
--

CREATE TABLE `mail_certification` (
  `certification_id` int(11) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `urltoken` varchar(255) DEFAULT NULL,
  `request_time` date DEFAULT NULL,
  `certification_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `line_code` smallint(6) NOT NULL DEFAULT 1,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total_fee` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `line_code`, `product_id`, `quantity`, `price`, `total_fee`, `order_date`) VALUES
(15, 1, 50, 3, 220, 660, '2022-02-03 09:00:00'),
(15, 2, 15, 4, 833, 3332, '2022-02-03 09:00:00'),
(16, 1, 15, 1, 833, 833, '2022-02-03 09:00:00'),
(17, 1, 50, 1, 220, 220, '2022-02-03 09:00:00'),
(18, 1, 16, 20, 817, 16340, '2022-02-04 10:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` varchar(510) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_flag` tinyint(1) DEFAULT NULL,
  `quality_period` smallint(3) DEFAULT NULL,
  `business_code` int(11) DEFAULT 456128416,
  `checkdigit` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `evaluation` char(1) DEFAULT '1',
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`product_id`, `emp_id`, `name`, `detail`, `price`, `sale_flag`, `quality_period`, `business_code`, `checkdigit`, `registration_date`, `evaluation`, `delete_flag`) VALUES
(1, 0, '札幌ラーメン', '濃厚な味噌の旨みを活かしたベースとなるスープとそれに絡み合う太い縮れ麺が最高です。トッピングは、タマネギやキャベツの炒め物、チャーシューやネギ、メンマといった定番メニューの他に、バターやコーンものっていて野菜の旨みとともに口の中に広がります。', 893, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(2, 0, '旭川ラーメン', '北海道のラーメンとしては、札幌の味噌、函館の塩と並び、醤油ベースが定番として知られる旭川ラーメンがあります。スープにラードを入れているのが特徴で、スープが冷めにくくなり、熱々のまま食べることができます。', 870, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(3, 0, '函館ラーメン', '函館ラーメンは、札幌ラーメンや旭川ラーメンと並ぶ人気の北海道ご当地ラーメンです。あっさりした塩味の透明なスープが特徴で、具材はチャーシュー、メンマ、長ネギ、ホウレンソウなどが入っていて、昔懐かしいとてもシンプルなラーメンです。', 710, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(4, 0, '青森味噌カレー牛乳ラーメン', '青森県青森市のB級グルメで、味噌ラーメンのスープに牛乳とカレー粉を入れたラーメンです。具は、チャーシューやワカメ、もやし、バター、メンマなどを使います。', 810, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(5, 0, '十文字ラーメン', 'さっぱりとした醤油ベースのスープで煮干や鰹節などを出汁に使った和風の味で、細目の縮れ麺が持つ独特の食感が特徴です。クセの無いあっさりした味わいで胃もたれの心配もなく、小食の方にもおすすめのラーメンです。', 877, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(6, 0, '酒田ラーメン', '豚骨や鶏がら、そして煮干と昆布で出汁をとり、自家製麺を使用するのが特徴です。具は、チャーシューやメンマ、ネギなどのシンプルなものが基本であり、透き通った醤油スープです。また、ワンタンが入った人気なラーメンです。', 910, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(7, 0, '仙台ラーメン', '辛味噌を使用したものが人気で、お好みで辛さを調節できる味噌が別に蓮華に盛られてきます。自分流の辛さを楽しむのも醍醐味です。', 873, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(8, 0, '喜多方ラーメン', '日本三大ラーメンの一つとしても有名な喜多方ラーメン！スープのベースは濃厚がたまらない醤油魚介系スープを使用しており、麺は熟成多加水麺の太麺なのが特徴です。', 903, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(9, 0, '白河ラーメン', '白河ラーメンは、コシの強い手打ち麺と、しょうゆ味のスープが特徴です。味わい深いスープには、ちぢれ麺がよく絡みます800。', 829, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(10, 0, '八王子ラーメン', 'スープのベースは醤油味になっており、中細の中華麺との組み合わせが抜群です。また、スープの上に刻んだ玉ネギをトッピングしているのが特徴です。', 819, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(11, 0, '横浜家系ラーメン', '神奈川県横浜市の「吉村家」を元祖とするラーメンが「横浜家系ラーメン」です。その基本的な特徴は、豚骨醤油の濃厚なスープに太い麺、ほうれん草と海苔とチャーシューというトッピングです。。', 805, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(12, 0, 'サンマーメン', 'サンマーメンは、神奈川のご当地ラーメンです。もちろん秋刀魚は入っていません。やや細めの麺に、塩またはしょうゆ味のスープです。もやし、豚肉の細切り、キャベツ、きくらげなどを炒めて作った、アツアツのあんがのっています。', 844, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(13, 0, '竹岡式ラーメン', '千葉県内房周辺で盛んに作られているご当地ラーメンです。竹岡（式）ラーメンはスープを独自の方法で作るのが特徴の、濃いお肉の旨みが効いた醤油ダレです。', 897, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(14, 0, '勝浦タンタンメン', '担々麺といえば一般的にはゴマベースですが、千葉県勝浦市の勝浦タンタンメンは醤油ベースでラー油がたっぷり入っているのが特徴で、辛さのあとに感じられるタマネギの甘さが絶妙です。醤油ベースなので後味がさっぱりとしていて、暑い夏でもペロリと食べられます。', 800, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(15, 0, 'スタミナラーメン', '言わずと知れた茨城のご当地ラーメン。冷水でキュッとしめた麺に、野菜たっぷりのとろとろアツアツの餡をかけたクセになる味わいの一品です。\r\n', 833, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(16, 0, '水戸藩ラーメン', '水戸藩らーめんは茨城県水戸市で親しまれているご当地ラーメンです。麺にレンコン粉を練りこみ、ニラ、らっきょう、ネギ、にんにく、ショウガという薬味を添えるのがルール。お土産用の生麺タイプのインスタントラーメンも販売されており、県外に住む方でも楽しめます。', 817, 0, 2, 0, 456789123, '2021-12-16', '6', NULL),
(17, 0, '佐野ラーメン', '栃木県佐野市名物の代表格と言えば、やはり佐野ラーメンです。麺は青竹うち平麺でコシがあります。また、スープはあっさりとした透き通った醤油で鶏ガラや豚骨ベースのものもあり、好みで選べるのも嬉しい一品です。', 888, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(18, 0, '高崎ラーメン', '群馬県高崎市には美味しくて有名なラーメンが沢山あります。トンコツ100%の濃厚スープやまろやかな鶏ベースの白湯スープなど1度食べたらくせになる味わいのものばかりです。スープの味はしっかりしていますが、その一方で野菜の味をしっかり感じられ、麺との相性も抜群です。', 834, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(19, 0, '藤岡ラーメン', '鶏ガラベースの醤油味のスープと、コシの強い縮れ麺が特徴のご当地ラーメン。', 870, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(20, 0, '燕三条系ラーメン', '新潟県の中央部を中心に食べられているラーメンです。うどんのような太麺と、魚介系の出汁が効いた濃い目のしょうゆ味のスープで構成されています。更に、スープが見えないぐらいの大量の背油がトッピングされているのも特徴の1つです。また薬味にはねぎではなく、玉ねぎが使用されいることも多くあります。', 865, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(21, 0, '富山ブラックラーメン', '富山ブラックラーメンを始めて食べる人は、真っ黒なスープに驚かされます。もともと労働者向けに作られていたラーメンのため、味も濃いめのガッツリ系です。最近では一般向けに食べやすくアレンジされているブラックラーメンもあります。', 903, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(22, 0, '台湾ラーメン', '台湾ラーメンというネーミングですが台湾にこのようなラーメンはなく、名古屋発祥のご当地グルメです。醤油ベースのスープで、豚ひき肉・ニラ・もやし・長ネギなどを唐辛子で炒めた具にはニンニクがふんだんに使われています。', 800, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(23, 0, '飛騨高山ラーメン', '岐阜県高山市で主に食べられている、地元では「中華そば」と呼ばれるご当地醤油ラーメンです。特徴はなんといってもスープの作り方。スープとたれを一緒に寸胴で煮込む製法は飛騨高山ラーメンのみ。醤油味と極細縮れ麺好きにはたまらないラーメンです。', 811, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(24, 0, '亀山ラーメン', '三重県産のニシノカオリという小麦粉で作った麺を使用し、具材は三重県内でとれたキノコ三種を用い、そしてスープは三重県産の牛骨からとったスープに味噌をオリジナルブレンドしたも使用したラーメンです。', 800, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(25, 0, '赤穂塩ラーメン', '地産地消をコンセプトに鶏の旨みを凝縮したコクのあるあっさりヘルシーな塩ラーメンです。女性には嬉しいコラーゲンたっぷり！赤穂塩ネギを使っています。', 857, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(26, 0, '京都ラーメン', '京都府や滋賀県などを中心に広まっている京都ラーメンですが、そのうまさの秘訣は、九条ネギから出る甘さからきています。典型的なスープは濃厚な醤油がベースになっていますが、店舗によっては、背油が入っていたり、トンコツがベースだったりとバリエーションも豊富です。\r\n\r\n', 800, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(27, 0, '天理ラーメン', '豚骨と鶏ガラがベースとなっているダシに醤油ダレを加え、豚肉や白菜にニラなど炒めた野菜がたっぷり入っているのが特徴です。やや辛めのこってりラーメンは、濃厚な旨みと麺との絡みがやみつきになります。。', 794, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(28, 0, '和歌山ラーメン', 'スープは大きく分けて醤油系、豚骨醤油系で、和歌山ラーメンの麺はストレートの細麺で、具材はメンマ、ネギ、チャーシュー、かまぼことシンプルなものです。', 919, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(29, 0, '岡山ラーメン　', '岡山のラーメンの特徴は、鳥ガラのあっさり醤油ベースのスープと豚骨スープの二種類です。スープにはネギとかまぼこがよくあうという岡山ラーメン、すっきりとした後味が胃にやさしいラーメンです。', 896, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(30, 0, '笠岡ラーメン', '岡山県笠岡市のご当地ラーメンである「笠岡ラーメン」は、チャーシューが鶏肉でできているのが特徴です。一般的なチャーシューは豚肉ですが、その代わり「かしわチャシュー」と呼ばれる鶏肉のチャーシューをのせており、鶏がら醤油をベースにしたスープでいただきます。もともと、養鶏や製麺業が盛んだったために、このようなラーメン文化が生まれたと言われています。', 864, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(31, 0, '尾道ラーメン', '広島県尾道市のご当地ラーメンとして広く知られています。定番の中華そばですが、スープは鶏ガラから取られており、タレはシンプルな醤油になっています。麺は、スープとよく合う平打ちの麺で、その歯ごたえがたまりません。', 800, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(32, 0, '広島ラーメン', '同じ広島県内には「尾道ラーメン」「福山ラーメン」と濁りのないスープの有名なラーメンがあります。広島ラーメンは、広島市内と周辺地域限定、豚骨、鶏ガラ、野菜などを濁るまで煮出して醤油味のタレを加え濁ったスープが特徴です。また、具材も煮豚のチャーシュー、ネギ、茹でモヤシ、シナチクの4種が基本になっています。', 791, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(33, 0, '鳥取牛骨ラーメン', '鳥取中西部で昔から愛されてきた、その名の通り牛骨からダシをとったスープが特徴のご当地ラーメンです。基本は醤油味で、中太のちぢれ麺に、トッピングはチャーシュー、メンマ、もやし、ネギなどシンプルな具材が多いです。ナルトのかわりにかまぼこを使うこともあり、黄金色に透き通った牛独特のとろけるような甘味の広がるスープが、コシのあるちぢれ麺によく絡みます。あっさりした中に深いコクと旨みが感じられる一杯です。', 800, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(34, 0, '徳島ラーメン', '徳島ラーメンには、それぞれ系統があり、茶系をベースにして黄系、白系の3つがあります。いずれも醤油味がベースになっており、たまり醤油や薄口など使用する醤油の味により、違いがあります。基本的には、甘みが強く上に生卵がのせられているのが特徴です。', 860, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(35, 0, '鍋焼きラーメン', '鍋焼きラーメンは、高知県須崎市のご当地ラーメンです。須崎市内には行列の出来る鍋焼きラーメン屋さんもあり、賑わいを見せています。土鍋に入って提供され、外見は鍋焼きうどんのようですが、蓋を開けると鶏ガラを使った醤油味のスープにコシのある細めんがからむ正真正銘のラーメンです。竹輪やねぎ、卵といったシンプルな具材がのっていて、ホッと落ち着くことができる味です。', 800, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(36, 0, '博多ラーメン', '豚骨ラーメン発祥の地でもある福岡県のラーメンと言えば、博多ラーメンを外すことはできません。基本は、豚骨をベースにしたスープにごく細麺です。お好みで紅ショウガとゴマをトッピングするのが主流です。', 881, 0, 2, 0, 456789123, '2021-12-16', '1', NULL),
(37, 0, '久留米ラーメン', '豚骨スープとストレートの細麺がベースのラーメンは、豚骨ラーメンの元祖といわれています。久留米ラーメンは、麺はストレートの固め、博多ラーメンよりやや太めです。また、博多ラーメンの豚骨スープより煮込んでいて、濃厚で匂いも強いスープが特徴です。', 910, 0, 2, 0, 456789123, '2021-12-16', '2', NULL),
(38, 0, '長浜ラーメン', '福岡県でも有名なラーメンの一つ・博多ラーメンと同じく豚骨がベースになっている細麺の長浜ラーメンは、博多ラーメンのスープよりも濃厚なのが特徴です。豚骨の旨みであるコラーゲンが溶け出してきており、まさにとろみが強いのがおいしさの秘訣です。', 800, 0, 2, 0, 456789123, '2021-12-16', '3', NULL),
(39, 0, '玉名ラーメン', '熊本県玉名で味わえるという、濃厚な豚骨スープのラーメンです。ほんのり甘みのあるスープで福岡ラーメンとはまた違った味わいです。麺は中細ストレート麺で、トッピングの焦がしにんにくも特徴です。', 864, 0, 2, 0, 456789123, '2021-12-16', '4', NULL),
(40, 0, '宮崎ラーメン', '宮崎ラーメンは、比較的あっさりした白濁豚骨スープが特徴です。麺は柔らかな太麺で、スープによくなじみます。ラーメンを注文するとすぐにお冷と付け出しのたくあんが運ばれてきます。細目のもやしをたくさん入れる店も数多くあります。', 791, 0, 2, 0, 456789123, '2021-12-16', '5', NULL),
(41, 0, 'レモンラーメン', '豚骨ベースのスープとさっぱりとした柑橘系レモンが「意外に」合うことから一度味わうと病みつきになる人も多い。スープにレモン果汁をしっかり染み渡らせるもよし、途中レモンを取り上げてほんのり香るスープを楽しむもよし。疲れた身体を癒してくれる優しい味', 875, 0, 2, 0, 456789123, '2021-12-21', '1', NULL),
(42, 0, 'メンマ', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 108, 0, 5, 0, 456789123, '2021-12-22', '2', NULL),
(43, 0, '九条ネギ', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 54, 0, 5, 0, 456789123, '2021-12-22', '3', NULL),
(44, 0, '白ネギ', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 150, 0, 5, 0, 456789123, '2021-12-22', '4', NULL),
(45, 0, '半熟味付け卵', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 110, 0, 2, 0, 456789123, '2021-12-22', '5', NULL),
(46, 0, 'のり', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 110, 0, 10, 0, 456789123, '2021-12-22', '1', NULL),
(47, 0, '野菜', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 110, 0, 2, 0, 456789123, '2021-12-22', '2', NULL),
(48, 0, 'コーン', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 110, 0, 2, 0, 456789123, '2021-12-22', '3', NULL),
(49, 0, 'もやし', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 110, 0, 2, 0, 456789123, '2021-12-22', '4', NULL),
(50, 0, 'チャーシュー', '素材にも創業以来、半世紀にわたり常に良いものを求め続けています。素材一品一品の品質もさることながら、それ以上にスープとの相性を重要と考えております。\r\nいくら良い素材であっても、一杯のラーメンが仕上がった時、素材とスープのバランスが取れていないとまとまりのない味になってしまいます。\r\nスープと素材それぞれの味のバランスが混然一体となってこそ、はじめて美味しいラーメンと言えるのです。', 220, 0, 2, 0, 456789123, '2021-12-22', '5', NULL),
(51, 0, '唐揚げ', NULL, 450, 0, 2, 0, 456789123, '2021-12-23', '1', NULL),
(52, 0, '餃子', NULL, 280, 0, 2, 0, 456789123, '2021-12-23', '2', NULL),
(53, 0, 'チャーハン', NULL, 500, 0, 2, 0, 456789123, '2021-12-23', '3', NULL),
(54, 0, 'ご飯', NULL, 200, 0, 2, 0, 456789123, '2021-12-23', '4', NULL),
(55, 0, 'キムチ', NULL, 180, 0, 2, 0, 456789123, '2021-12-23', '5', NULL),
(59, 0, '杏仁豆腐', NULL, 100, 0, 3, 0, 456789123, '2022-01-13', '4', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `product_category`
--

CREATE TABLE `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(59, 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `product_image`
--

CREATE TABLE `product_image` (
  `product_id` int(11) NOT NULL,
  `line_code` smallint(6) NOT NULL DEFAULT 1,
  `img` varchar(510) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product_image`
--

INSERT INTO `product_image` (`product_id`, `line_code`, `img`) VALUES
(1, 1, '../img/ramen_sapporo.png'),
(2, 2, '../img/ramen_asahikawa.png'),
(3, 3, '../img/ramen_hakodate.png'),
(4, 4, '../img/ramen_aomorimiso.png'),
(5, 5, '../img/ramen_jumonzi.png'),
(6, 6, '../img/ramen_sakata.png'),
(7, 7, '../img/ramen_sendai.png'),
(8, 8, '../img/ramen_kitakata.png'),
(9, 9, '../img/ramen_sirakawa.png'),
(10, 10, '../img/ramen_hatiouzi.png'),
(11, 11, '../img/ramen_yokozuna.png'),
(12, 12, '../img/ramen_sanma.png'),
(13, 13, '../img/ramen_takeokasiki.png'),
(14, 14, '../img/ramen_katuura.png'),
(15, 15, '../img/ramen_sutamina.png'),
(16, 16, '../img/ramen_mito.png'),
(17, 17, '../img/ramen_sano.png'),
(18, 18, '../img/ramen_takazaki.png'),
(19, 19, '../img/ramen_huzioka.png'),
(20, 20, '../img/ramen_tubame.png'),
(21, 21, '../img/ramen_toyama.png'),
(22, 22, '../img/ramen_taiwan.png'),
(23, 23, '../img/ramen_hida.png'),
(24, 24, '../img/ramen_kameyama.png'),
(25, 25, '../img/ramen_sekiho.png'),
(26, 26, '../img/ramen_kyoto.png'),
(27, 27, '../img/ramen_tenri.png'),
(28, 28, '../img/ramen_wakayama.png'),
(29, 29, '../img/ramen_okayama.png'),
(30, 30, '../img/ramen_kasaoka.png'),
(31, 31, '../img/ramen_omiti.png'),
(32, 32, '../img/ramen_hirosima.png'),
(33, 33, '../img/ramen_tottori.png'),
(34, 34, '../img/ramen_tokusima.png'),
(35, 35, '../img/ramen_nabeyaki.png'),
(36, 36, '../img/ramen_hakata.png'),
(37, 37, '../img/ramen_kuryuumai.png'),
(38, 38, '../img/ramen_nagahama.png'),
(39, 39, '../img/ramen_tamana.png'),
(40, 40, '../img/ramen_miyazaki.png'),
(41, 41, '../img/ramen_remon.png'),
(42, 42, '../img/sab_menma.png'),
(43, 43, '../img/sab_negi.png'),
(44, 44, '../img/sab_sironegi.png'),
(45, 45, '../img/sab_tamago.png'),
(46, 46, '../img/sab_nori.png'),
(47, 47, '../img/sab_yasai.png'),
(48, 48, '../img/sab_ko-n.png'),
(49, 49, '../img/sab_moyasi.png'),
(50, 50, '../img/sab_tya-syu-.png'),
(51, 52, '../img/sab_karaage.png'),
(52, 53, '../img/sab_gyouza.png'),
(53, 54, '../img/sab_tya-han.png'),
(54, 57, '../img/sab_gohan.png'),
(55, 58, '../img/sab_kimuti.png'),
(59, 62, '../img/sab_anin.png');

-- --------------------------------------------------------

--
-- テーブルの構造 `stock`
--

CREATE TABLE `stock` (
  `product_id` int(11) NOT NULL,
  `made_date` date NOT NULL,
  `stock_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_furigana` varchar(255) DEFAULT NULL,
  `first_furigana` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` tinyint(2) DEFAULT NULL,
  `postal_code` char(7) DEFAULT NULL,
  `prefectures` varchar(4) DEFAULT NULL,
  `address01` varchar(255) DEFAULT NULL,
  `address02` varchar(255) DEFAULT NULL,
  `address03` varchar(255) DEFAULT NULL,
  `tel` char(11) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `paid_menber_flag` tinyint(1) DEFAULT NULL,
  `brack_flag` tinyint(1) DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user_id`, `password`, `last_name`, `first_name`, `last_furigana`, `first_furigana`, `birthday`, `gender`, `postal_code`, `prefectures`, `address01`, `address02`, `address03`, `tel`, `mail`, `paid_menber_flag`, `brack_flag`, `delete_flag`) VALUES
('test01', '$2y$10$y5tTdnkzh9I4W2BOAgSBpuvHsQeCK8y./XtcV4X/pOnqgmMLEjSBi', '谷原', '二郎', 'タニハラ', 'ジロウ', '1991-01-25', 0, '6128416', '京都府', '京都市伏見区竹田流池町', '121-3', '', '0756424451', 'aaa@aaaa.jp', NULL, NULL, NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `an_order`
--
ALTER TABLE `an_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_an_order_0` (`user_id`),
  ADD KEY `FK_an_order_1` (`delivery_id`);

--
-- テーブルのインデックス `brack_list`
--
ALTER TABLE `brack_list`
  ADD PRIMARY KEY (`user_id`);

--
-- テーブルのインデックス `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `FK_category_0` (`emp_id`);

--
-- テーブルのインデックス `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- テーブルのインデックス `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `FK_delivery_0` (`user_id`);

--
-- テーブルのインデックス `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- テーブルのインデックス `mail_certification`
--
ALTER TABLE `mail_certification`
  ADD PRIMARY KEY (`certification_id`);

--
-- テーブルのインデックス `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`line_code`),
  ADD KEY `FK_order_detail_1` (`product_id`),
  ADD KEY `line_code` (`line_code`);

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_product_0` (`emp_id`);

--
-- テーブルのインデックス `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `FK_product_category_1` (`category_id`);

--
-- テーブルのインデックス `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_id`,`line_code`),
  ADD KEY `FK_product_image_0` (`product_id`);

--
-- テーブルのインデックス `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`product_id`,`made_date`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `an_order`
--
ALTER TABLE `an_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- テーブルの AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- テーブルの AUTO_INCREMENT `mail_certification`
--
ALTER TABLE `mail_certification`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `an_order`
--
ALTER TABLE `an_order`
  ADD CONSTRAINT `FK_an_order_0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `FK_an_order_1` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`delivery_id`);

--
-- テーブルの制約 `brack_list`
--
ALTER TABLE `brack_list`
  ADD CONSTRAINT `FK_brack_list_0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- テーブルの制約 `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_category_0` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- テーブルの制約 `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `FK_delivery_0` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- テーブルの制約 `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_0` FOREIGN KEY (`order_id`) REFERENCES `an_order` (`order_id`),
  ADD CONSTRAINT `FK_order_detail_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- テーブルの制約 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_0` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- テーブルの制約 `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `FK_product_category_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `FK_product_category_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- テーブルの制約 `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_product_image_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- テーブルの制約 `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_stock_0` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
