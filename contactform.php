<?php
  session_start();
  $mode = 'input';
  $errmessage = array();
  if( isset($_POST['back']) && $_POST['back'] ){
    // 何もしない
  } else if( isset($_POST['confirm']) && $_POST['confirm'] ){
	  // 確認画面
    $_SESSION['company']	= htmlspecialchars($_POST['company'], ENT_QUOTES);
    if( !$_POST['company'] ) {
        $errmessage[] = "会社名・部署名を入力してください";
    } else if( mb_strlen($_POST['company']) > 100 ){
        $errmessage[] = "会社名・部署名は100文字以内にしてください";
    }
      $_SESSION['fullname']	= htmlspecialchars($_POST['fullname'], ENT_QUOTES);
      $_SESSION['fullname']	= htmlspecialchars($_POST['fullname'], ENT_QUOTES);
    if( !$_POST['fullname'] ) {
      $errmessage[] = "ご担当者名を入力してください";
    } else if( mb_strlen($_POST['fullname']) > 100 ){
      $errmessage[] = "ご担当者名は100文字以内にしてください";
    }
    $_SESSION['fullname']	= htmlspecialchars($_POST['fullname'], ENT_QUOTES);
    
    if( !$_POST['email'] ) {
      $errmessage[] = "メールアドレスを入力してください";
    } else if( mb_strlen($_POST['email']) > 200 ){
      $errmessage[] = "メールアドレスは200文字以内にしてください";
    } else if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
      $errmessage[] = "メールアドレスが不正です";
    }
    $_SESSION['email']	= htmlspecialchars($_POST['email'], ENT_QUOTES);

    if( !$_POST['message'] ){
      $errmessage[] = "お問い合わせ内容を入力してください";
    } else if( mb_strlen($_POST['message']) > 500 ){
      $errmessage[] = "お問い合わせ内容は500文字以内にしてください";
    }
    $_SESSION['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);

    if( $errmessage ){
      $mode = 'input';
    } else {
      $mode = 'confirm';
    }
  } else if( isset($_POST['send']) && $_POST['send'] ){
    // 送信ボタンを押したとき
    $message  = "以下の内容でお問い合わせを受け付けました \r\n\r\n"
              . "company: " . $_SESSION['company'] . "\r\n\r\n"
              . "fullname: " . $_SESSION['fullname'] . "\r\n\r\n"
              . "email: " . $_SESSION['email'] . "\r\n\r\n"
              . "お問い合わせ内容:\r\n"
              . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
    mail($_SESSION['email'],'お問い合わせありがとうございます',$message);
    mail('nspdesign2012@gmail.com','NSP ホームページよりお問い合わせを受け付けました',$message);
    $_SESSION = array();
    $mode = 'send';
  } else {
    $_SESSION['company'] = "";
    $_SESSION['fullname'] = "";
    $_SESSION['email']    = "";
    $_SESSION['message']  = "";
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>お問い合わせフォーム</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/contactform.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <section id="Contact" class="scroll-point">
      <h2><span class="bgextend lrextendTrigger"><span class="bgappearTrigger">Contact</span></span></h2>
    <?php if( $mode == 'input' ){ ?>
      <!-- 入力画面 -->
      <?php
        if( $errmessage ){
          echo '<div class="alert alert-danger" role="alert">';
          echo implode('<br>', $errmessage );
          echo '</div>';
        }
      ?>
      <div class="contactform">
        <form action="./contactform.php" method="post">
          <p class="form_contents">会社名・部署名</p>
          <input type="text"    name="company" value="<?php echo $_SESSION['company'] ?>" class="form-control"><br>
          <p class="form_contents">ご担当者名</p>
          <input type="text"    name="fullname" value="<?php echo $_SESSION['fullname'] ?>" class="form-control"><br>
          <p class="form_contents">メールアドレス</p>
          <input type="email"   name="email"    value="<?php echo $_SESSION['email'] ?>" class="form-control"><br>
          <p class="form_contents">お問い合わせ内容</p>
          <textarea cols="40" rows="8" name="message" class="form-control"><?php echo $_SESSION['message'] ?></textarea><br>
          <div class="C_Btn"><input type="submit" name="confirm" value="確　認" class="button"/></div>
        </form>
      </div>
    <?php } else if( $mode == 'confirm' ){ ?>
      <!-- 確認画面 -->
      <div class="confirm_form">
        <form action="./contactform.php" method="post">
          <p class="confirm_form_contents">会社名・部署名</p>
          <?php echo $_SESSION['company'] ?><br>
          <p class="confirm_form_contents">ご担当者名</p>
          <?php echo $_SESSION['fullname'] ?><br>
          <p class="confirm_form_contents">メールアドレス</p>
          <?php echo $_SESSION['email'] ?><br>
          <p class="confirm_form_contents">お問い合わせ内容</p>
          <?php echo nl2br($_SESSION['message']) ?><br>
          <div class="Btn">
            <input type="submit" name="back" value="戻　る" class="button"/>
            <input type="submit" name="send" value="送　信" class="button"/>
          </div>
        </form>
      </div>
    <?php } else { ?>
      <!-- 完了画面 -->
      <p class="form_conclusion">送信しました。お問い合わせありがとうございました。<br>
      <div class="Btn">
              <a href="./index.php" class="button">トップページへ</a>
      </div>
    <?php } ?>
  </section>
</body>
</html>


