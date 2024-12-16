<?php
// Q1 変数と文字列

<?php
$name = '原城';
echo ('私の名前は「' . $name . '」です。');

// Q2 四則演算

<?php
$num = 5 * 4;
echo $num."\n";

echo ($num / 2);

// Q3 日付操作

<?php

date_default_timezone_set('Asia/Tokyo');

echo ('現在時刻は、'. date("Y") . '年' . date("m") . '月' . date("d") . '日 ' . date("H") . '時' . date("i") . '分' . date("s") . '秒です。');
?>

// Q4 条件分岐-1 if文

<?php

<?php

$device = 'windows' ;
$OS = ['windows', 'mac', 'Linux'];
if ($device === $OS[0]) {
    echo '使用OSは、' . $device . 'です。';
} else {
    if ($device === $OS[1]) {
        echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}
}

/*$device = 'windows' ;
$OS = ($device === 'windows' ? '使用OSは、widowsです。':
      ($device === 'mac' ? '使用OSは、macです。':'どちらでもありません。'));
    echo $OS ;*/
// Q5 条件分岐-2 三項演算子

<?php

$age = 20;
$judge = ($age >= 18 ? '成人です。':'未成年です。');
echo $judge;

// Q6 配列

<?php

$pref = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県', ];

echo ($pref[2] . 'と' . $pref[3] . 'は関東地方の都道府県です。');

// Q7 連想配列-1

<?php

$pref =['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市' ];
echo ($pref['東京都']."\n");
echo ($pref['神奈川県']."\n");
echo ($pref['千葉県']."\n");
echo ($pref['埼玉県']."\n");
echo ($pref['栃木県']."\n");
echo ($pref['群馬県']."\n");
echo ($pref['茨城県']."\n");

// Q8 連想配列-2

<?php

$pref = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市' ];
$target = '埼玉県';

if ($pref[$target] === 'さいたま市') {
    echo $target . 'の県庁所在地は、' . $pref[$target] . 'です。' ;
};

// Q9 連想配列-3

<?php

$pref = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '富山県' => '富山市', '石川県' => '金沢市'];

foreach ($pref as $target => $city) {
    if ($city === '金沢市' || $city === '富山市') {
        echo $target . 'は関東地方ではありません。'."\n";
}   else {
        echo $target . 'の県庁所在地は、' . $city . 'です。'."\n";
}
}

// Q10 関数-1

<?php

function hello($name)
{
    return $name . 'さん、こんにちは。'."\n";
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

$taxInPrice = calcTaxInPrice($price);
echo ($price . 'の商品の税込み価格は' . $taxInPrice . '円です。');

// Q12 関数とif文

<?php

function distinguishNum($Number)
{
    if ($Number % 2 === 0) {
        return $Number . 'は偶数です。' . "\n" ;
} else {
    return  $Number . 'は奇数です。';
}
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