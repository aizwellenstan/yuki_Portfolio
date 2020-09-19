<?php
//================================
// ログイン認証・自動ログアウト
//================================
// ログインしている場合
$login_date = $_SESSION['login_date'];
$login_limit = $_SESSION['login_limit'];
$time = time();

debug('$login_date：' . print_r($login_date, true));
debug('$login_limit：' . print_r($login_limit, true));
debug('$time：' . print_r($time, true));

if (!empty($_SESSION['login_date'])) {
  debug('ログイン済みユーザーです。');


  // 現在日時が最終ログイン日時＋有効期限を超えていた場合
  if (($_SESSION['login_date'] + $_SESSION['login_limit']) < time()) {
    debug('ログイン有効期限オーバーです。');

    // セッションを削除（ログアウトする）
    session_destroy();
    // ログインページへ
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
