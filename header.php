<?php
require('function.php');

debugLogStart();

if(!empty($_SESSION['user_id'])){
  $u_id = $_SESSION['user_id'];
  
 }

?>
<style>
  img {
    height: 10px;
    width: 10px;
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
    padding: 1px 0px;
    width: 150px;
  }

  .stauts-user span {
    float: left;
  }

  .stauts-user p {
    margin: 0;
    float: left;
    margin-left: 10px;
  }

  .logout {
    float: right;
    display: block;
    background-color: #555;
    width: 100px;
  }

  .logout a {
    color: #fff;
    margin-left: 10px;
  }

  .stauts {
    list-style: none;
    width: 55%;
    margin: 0 auto;
    height: 34px;
    margin-top: 10px;
  }
</style>
<header>
  <div>
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
  <ul class="stauts">
    <li class="stauts-user">
      <span><img src="img/user_icon.jpeg" alt=""></span>
      <p><?php echo getusername($u_id); ?></p>
    </li>
    <li class="logout">
      <a href="logout.php">ログアウト</a>
    </li>
  </ul>
</header>