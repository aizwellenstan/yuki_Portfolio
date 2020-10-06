<?php

$login_date  = (!empty($_SESSION['login_date'])) ? $_SESSION['login_date'] : '';
$login_limit = (!empty($_SESSION['login_limit'])) ? $_SESSION['login_limit'] : '';
$time = time();

if (!empty($_SESSION['login_date'])) {
  debug('ログイン済みユーザーです。');


  if (($_SESSION['login_date'] + $_SESSION['login_limit']) < time()) {
    debug('ログイン有効期限オーバーです。');

    session_destroy();

    header("Location:login.php");
  } else {

    debug('ログイン有効期限以内です。');
    $_SESSION['login_date'] = time();

    
    if (basename($_SERVER['PHP_SELF']) === 'login.php') {
      debug(' TOPへ遷移します。');
      header("Location:index.php"); //マイページへ
    }
  }
} else {
  debug('未ログインユーザーです。');
  if (basename($_SERVER['PHP_SELF']) !== 'login.php') {
    header("Location:login.php"); //ログインページへ
  }
}
?>
