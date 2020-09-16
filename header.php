<style>
  img {
    height: 10px;
    width: 10px;
  }

  .first_header {
    width: 100%;
    height: 52px;
    font-family: "メイリオ", Meiryo, sans-serif;
  }

  .first_header h1 {
    font-size: 24px;
    padding: 7px 40px;
    margin: 0 50px;
  }

  .second_header {
    width: 100%;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    height: 70px;

    margin: 0px;
  }

  .contents {
    height: 70px;
    float: left;
    text-align: center;
    border-left: 1px solid #ddd;
  }

  #contents-last {
    border-right: 1px solid #ddd;
  }

  .contents p {
    margin: 23px 0;
  }

  .top-nav {
    height: 70px;
    width: 605px;
    margin: 0 auto;

  }

  .top-nav a {
    text-decoration: none;
    color: #333;
    display: block;
    height: 70px;
    width: 150px;
  }

  header {
    margin: 0;
    background-color: #fff;
  }

  .stauts-user {
    width: 805px;
    margin: 0 auto;
    margin-top: 9px;
    height: 35px;
  }

  .stauts-user p {
    padding-left: 10px;
   margin: 10px;
  }

  .stauts-user span {
    float: left;
  }

  
</style>
<header>
  <div >
    <div class="first_header">
      <h1>学習日誌くん</h1>
    </div>
    <div class="second_header">
      <nav class="top-nav">
        <div class="contents">
          <a href="index.php">
            <p>HOME</p>
          </a>
        </div>
        <div class="contents">
          <a href="FillOut.php">
            <p>学習を記録する</p>
          </a>
        </div>
        <div class="contents">
          <a href="ReadBack.php">
            <p>学習を振り返る</p>
          </a>
        </div>
        <div class="contents" id="contents-last">
          <a href="">
            <p>その他設定</p>
          </a>
        </div>

    </div>
    </nav>
  </div>

  <div class="stauts-user">
    <span><img src="img/user_icon.jpeg" alt=""></span>
    <p>ユーザー名（仮</p>
  </div>
  <div stauts-logout>
    <a title="ログアウト" href="TopPage.php"></a>
  </div>
</header>
