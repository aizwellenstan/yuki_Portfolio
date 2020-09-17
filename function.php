<?php
ini_set('log_errors','on');
ini_set('error_log','php.log');

$debug_flg = true;

function debug($str){
    global $debug_flg;
    if(!empty($debug_flg)){
        error_log('デバッグ：'.$str);
    }
}

session_save_path("/var/tmp/");
//ガーベージコレクションが削除するセッションの有効期限を設定（30日以上経っているものに対してだけ１００分の１の確率で削除）
ini_set('session.gc_maxlifetime', 60*60*24*30);
//ブラウザを閉じても削除されないようにクッキー自体の有効期限を延ばす
ini_set('session.cookie_lifetime ', 60*60*24*30);
//セッションを使う
session_start();
//現在のセッションIDを新しく生成したものと置き換える（なりすましのセキュリティ対策）
session_regenerate_id();

function debugLogStart(){
  debug('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 画面表示処理開始');
  debug('セッションID：'.session_id());
  debug('セッション変数の中身：'.print_r($_SESSION,true));
  debug('現在日時タイムスタンプ：'.time());
  if(!empty($_SESSION['login_date']) && !empty($_SESSION['login_limit'])){
      debug( 'ログイン期限日時タイムスタンプ：'.( $_SESSION['login_date'] + $_SESSION['login_limit'] ) );
  }
}

define('MSG01','入力必須です');
define('','');
define('','');

$err_msg = array();

function vaildRequired(){
if(){
  global $err_msg;
  $err_msg[$key] = MSG01;
}}

email形式チェック
email重複チェック
同値チェック
最小文字数チェック（６文字）
最大文字数チェック（２５６文字）
半角チェック
半角英数字チェック
固定長チェック（８文字）
パスワードチェック　{
  半角英数字チェック
  最小文字数チェック（６文字）
  最大文字数チェック（２５６文字）
}
selectboxチェック{

}
エラーメッセージ表示

DBへの接続
?>