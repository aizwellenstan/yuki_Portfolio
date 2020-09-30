<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ホーム</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


  <header>

  </header>
  <main>
    <section class="contents_butan">
      <div class="contents">
        <h1>学習日誌くん</h1>
        <p>学習の記録をしていくことで<br>学習の分析、進捗の管理をお手伝いするWebアプリ</p>
      </div>
      <div class="contents1">
        <a href="login.php">
          <p>ログイン</p>
        </a>
      </div>
      <div class="contents2">
        <a href="signup.php">
          <p>新規登録</p>
        </a>
      </div>
    </section>
    <section class='Overview1'>
    
    </section>
  </main>
</body>

</html>
<style>
  .contents1,
  .contents2 {
    margin: 0 auto;
    width: 180px;
    margin: 10px;
  }

  .contents {
    padding-top: 150px;
    width: 600px;
    margin: 0 auto;
  }

  h1 {
    font-size: 80px;
    margin-bottom: 20px;
  }

  .contents p {
    font-size: 25px;
   
  }

  a {
    display: block;
    text-decoration: none;
    border-radius: 15px;
    height: 40px;
    width: 180px;
    background-color: #fff;
    color: #4696e5;
    font-size: 20px;

  }

  .contents1 p,
  .contents2 p {
    margin: 0px;
    text-align: center;
    padding: 4px;
  }

  .contents2 {
    float: left;
  }

  .contents1 {
    float: left;
    margin-left: 100px;
  }

  section {
    width: 800px;
    margin: 0 auto;
  }
</style>