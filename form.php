<?php
    session_start();
    $mode = 'input';
    if ( isset($_POST['back']) && $_POST['back']) {
        // 何もしない
    } else if ( isset($_POST['confirm']) && $_POST['confirm']) {
        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['email']    = $_POST['email'];
        $_SESSION['message']  = $_POST['message'];
        $mode = 'confirm';
    } else if ( isset($_POST['send']) && $_POST['send']) {
        $message  = "お問い合わせを受け付けました \r\n"
                . "名前: " . $_SESSION['fullname'] . "\r\n"
                . "email: " . $_SESSION['email'] . "\r\n"
                . "お問い合わせ内容:\r\n"
                . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
        mail($_SESSION['email'],'お問い合わせありがとうございます',$message);
        mail('nspdesign2012@gmail.com','お問い合わせを受け付けました',$message);
        $_SESSION = array();
        $mode = 'send';
    } else {
        $_SESSION['fullname'] = "";
        $_SESSION['email']    = "";
        $_SESSION['message']  = "";
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <?php if ( $mode == 'input' ){ ?>
        <!-- 入力画面 -->
        <div class="form">
            <form action="./form.php" method="POST">

            <p class="form_contents">名前</p>
            <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>"><br>

            <p class="form_contents">E-mail</p>
            <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>"><br>

            <p class="form_contents">お問い合わせ内容</p>
            <textarea name="message" id="" cols="30" rows="10"><?php echo $_SESSION['message'] ?></textarea>

            <div class="btn">
                <input type="submit" name="confirm" value="確認">
            </div>
            </form>
        </div>
    <?php } else if ( $mode == 'confirm' ){ ?>
        <!-- 確認画面 -->
        <div class="form">
            <form action="./form.php" method="POST">
            <p class="form_contents">名前</p>
            <?php echo $_SESSION['fullname'] ?><br>

            <p class="form_contents">Eメール</p>
            <?php echo $_SESSION['email'] ?><br>

            <p class="form_contents">お問い合わせ内容</p><br>
            <?php echo nl2br($_SESSION['message']) ?><br>

            <div class="btn">
                <input type="submit" name="back" value="戻る"/>
                <input type="submit" name="send" value="送信"/>
            </div>
            </form>
        </div>
    <?php } else { ?>
        <!-- 完了画面 -->
        送信完了しました。お問い合わせありがとうございました。<br>
        <div class="btn">
            <a href="./index.php">トップページへ</a>
        </div>
    <?php } ?>
</body>
</html>