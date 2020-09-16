<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ホーム</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
  <div>
    <div class="first_header">
      <h1>学習日誌くん</h1>
    </div>
    </div>
</header>
<main>
  <div class="site-width">


    <!-- Main -->
    <section>

      <div class="form-container">

        <form action="" method="" class="login-form">
          <h2 class="title">新規登録</h2>
         
          <label class="name">
            アカウント名
            <input type="text" name="email" value="">
          </label>
          <label class="maill">
            メールアドレス
            <input type="text" name="email" value="">
          </label>
          <label class="pass">
            パスワード
            <input type="password" name="pass" value="">
          </label>
          <label class="pass_r">
            パスワード再入力
            <input type="password" name="pass" value="">
          </label>
            <input type="submit" class="btn btn-mid" value="新規登録！">
        </form>
      </div>
    </section>
    <a class="i_jump" href="TopPage.php">トップページへ戻る</a>
</main>

<style>
  main {
    background-color: #ddd;
    height: 1200px;
  }

  form {
    margin: 0 auto;
    padding: 15px;
    width: 400px;
    border: 5px solid rgb(0, 0, 0, 0);
    display: block;
  }

  input[type="text"],
  input[type="password"] {
    display: block;
    box-sizing: border-box;
    margin: 10px 1px;
    padding: 5px;
    width: 380px;
    height: 60px;
    font-size: 18px;
  }

  input[type="submit"] {
    margin: 15px 125px;
    padding: 15px 30px;
    width: 150px;
    border: none;
    background: #FF773E;
    color: white;
    font-size: 14px;
    cursor: pointer;
  }

  h2 {
    display: block;
    font-size: 45px;
    font-weight: bold;
    letter-spacing: 3px;
    margin: 0;
  }

.title {
    margin-bottom: 40px;
    text-align: center;
}
</style>