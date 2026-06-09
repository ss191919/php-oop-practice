<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>

<body>
    <?php
    // ユーザークラス定義
    class User
    {
        public $name;
        public $age;

        //コンストラクタ追加
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        //自己紹介表示(introduce)
        public function introduce()
        {
            echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
        }

        //成人判定メソッド追加
        public function isAdult()
        {
            return $this->age >= 18;
        }
    }

    echo "<h2>ユーザー管理プログラム</h2>";

    //ユーザー作成
    $user1 = new User("田中太郎", 25);
    $user2 = new User("佐藤花子", 17);
    $user3 = new User("鈴木一郎", 30);

    echo "<h3>自己紹介</h3>";
    //各ユーザーの自己紹介を呼び戻す
    $user1->introduce();
    $user2->introduce();
    $user3->introduce();

    echo "<h3>成人判定</h3>";
    //成人判定
    if ($user1->isAdult()) {
        echo "{$user1->name}さんは成人です。<br>";
    } else {
        echo "{$user1->name}さんは未成年です。<br>";
    }
    if ($user2->isAdult()) {
        echo "{$user2->name}さんは成人です。<br>";
    } else {
        echo "{$user2->name}さんは未成年です。<br>";
    }
    if ($user3->isAdult()) {
        echo "{$user3->name}さんは成人です。<br>";
    } else {
        echo "{$user3->name}さんは未成年です。<br>";
    }
    ?>
</body>

</html>