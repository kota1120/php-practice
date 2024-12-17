<?php
// Q1 変数と文字列

<?php
$name = '原城';
echo ('私の名前は「' . $name . '」です。');

// Q2 四則演算

<?php
$num = 5 * 4;
echo $num . "\n";

echo ($num / 2);

// Q3 日付操作

<?php

date_default_timezone_set('Asia/Tokyo');

echo ('現在時刻は、' . date("Y") . '年' . date("m") . '月' . date("d") . '日 ' . date("H") . '時' . date("i") . '分' . date("s") . '秒です。');

// $format = '現在時刻は、%d年%d月%d日%d時%d分%d秒です。';
// echo sprintf($format, date("Y"), date("m"), date("d"), date("H"), date("i"), date("s"));

?>

// Q4 条件分岐-1 if文

<?php

$device = 'windows' ;

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

<?php

$age = 20;
echo ($age >= 18 ? '成人です。' : '未成年です。');

// Q6 配列

<?php

$prefectures = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県'];

echo ($prefectures[2] . 'と' . $prefectures[3] . 'は関東地方の都道府県です。');

// Q7 連想配列-1

<?php

$cities =['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市' ];

foreach($cities as $city) {
    echo ($city."\n");
}

// echo ($cities['東京都']."\n");

// Q8 連想配列-2

<?php




// $pref = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市' ];
// $target = '埼玉県';

// if ($pref[$target] === 'さいたま市') {
//     echo $target . 'の県庁所在地は、' . $pref[$target] . 'です。' ;
// };

// Q9 連想配列-3

<?php

$cities = [
    // '東京都' => [
    //     'city' => '新宿区',
    //     'region' => '関東'
    // ]
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '富山県' => '富山市',
    '石川県' => '金沢市'
];

foreach ($cities as $prefecture => $city) {
    // Q8
    // if ($prefecture === '埼玉県') {
    //     echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
    // }

    if ($city === '金沢市' || $city === '富山市') {
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    }  else {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
    }
}

// Q10 関数-1

<?php

function hello($name)
{
    return $name . 'さん、こんにちは。' . "\n";
}

echo hello('佐藤');
echo hello('田中');

// Q11 関数-2

<?php

$price = 1000;
function calcTaxInPrice($price)
{
    return $price * 1.1;
}

echo ($price . 'の商品の税込み価格は' . calcTaxInPrice($price) . '円です。');

// Q12 関数とif文

<?php

function distinguishNum($number)
{
    if ($number % 2 === 0) {
        return $number . 'は偶数です。' . "\n" ;
    }
    return $number . 'は奇数です。';
}

echo distinguishNum(12);
echo distinguishNum(21);

// Q13 関数とswitch文

<?php

function evaluateGrade($point)
{
    switch ($point) {
        case 'A':
        case 'B':
            echo '合格です。' . "\n";
            break;

        case 'C':
            echo '合格ですが追加課題があります。' . "\n";
            break;

        case 'D':
            echo '不合格です。' . "\n";
            break;

        default:
            echo '判定不明です。講師に問い合わせてください。' . "\n";
            break;
    }
}

evaluateGrade('A');
evaluateGrade('a');

?>