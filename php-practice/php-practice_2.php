// Q1 tic-tac問題
<?php

echo '1から100までのカウントを開始します' . "\n" . "\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
    } elseif ($i % 4 === 0) {
        echo 'tic' . "\n";
    } else {
        echo $i . "\n";
    }
}

// 別解
// <?php

// echo '1から100までのカウントを開始します' . "\n" . "\n";

// for ($i = 1; $i <= 100; $i++) {
//     switch ($i) {
//         case ($i % 4 === 0 && $i % 5 === 0);
//             echo 'tic-tac' . "\n";
//             break;
//         case($i % 5 === 0) ;
//             echo 'tac' . "\n";
//             break;
//         case ($i % 4 === 0) ;
//             echo 'tic' . "\n";
//             break;
//         default;
//             echo $i .  "\n";
//             break;
//     }
//     }

// Q2 多次元連想配列

//問題1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo ($personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。');

//問題2

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

$i = 1;
foreach ($personalInfos as $title) {
  echo $i . '番目の' . $title['name'] . 'のメールアドレスは' . $title['mail'] . 'で、電話番号は' . $title['tel'] . 'です' . "\n";
$i++;
}

//問題3

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];


$ageList = [
    25,
    30,
    18
];

foreach ($personalInfos as $key => $value ) {
  $personalInfos[$key]['age'] = $ageList[$key];
}

var_dump($personalInfos);

// Q3 オブジェクト-1

//問題1
<?php

class Student
{
    private $studentId;
    private $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}
$sato = new Student(310, '佐藤');

$sato->attend();

// Q4 オブジェクト-2

<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($yamada)
    {
        echo $this->studentName . 'は' . $yamada . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス

//問題1

<?php

date_default_timezone_set('Asia/Tokyo');

$time = new DateTime();
$time->modify('-1 month');
echo $time->format('Y-m-d');

//問題2

<?php
date_default_timezone_set('Asia/Tokyo');
$time = new DateTime();
$oldtime = new DateTime('1992-04-25');
$diff = $time->diff($oldtime);
echo $diff->format('あの日から%a日経過しました。');

?>