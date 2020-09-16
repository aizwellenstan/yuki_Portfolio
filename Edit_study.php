<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>学習記録ページ</title>
</head>

<body>

  <?php
  require('header.php');
  ?>

  <main>

    <div class="site-width2">
      <div class="page-title">
        <h1 class="page-title">学習履歴を編集する</h1>
      </div>
      <form action="" method="">
        <section class="date">
          <div class="selectbox">     
          <h1>日付を選択</h1>
            <select class="year-list" name="year" id="">
              <option value="0">年</option>
              <option value="0">○年</option>
            </select>
            <select class="month-list" name="month">
              <option value="0">月</option>
              <option value="0">○月</option>
            </select>
            <select class="day-list" name="day" id="">
              <option value="0">日</option>
              <option value="0">○日</option>
            </select>
          </div>
        </section>
        <section class="time">
          <div class="selectbox">
            <h1>時間を選択</h1>
            <select name="time-list">
              <option value="0">選択してください</option>
              <option value="15">15分</option>
              <option value="15">30分</option>
            </select>
          </div>
        </section>

        <section class="category">
          <div class="selectbox">
            <h1>カテゴリを選択</h1>

            <select name="category-list">
              <option value="0">選択してください</option>
              <option value="１">うんち</option>
            </select>
          </div>
        </section>

        <section class="detail">
          　　　<h1>内容を記入</h1>
          <textarea name="study-detail" id="" cols="40" rows="8" placeholder="内容"></textarea>
        </section>
        <div class='btn-container'>
          <input type="submit" value="再登録">
        </div>
      </form>

    </div>

    <a class="i_jump" href="ReadBack.php">確認ページへ戻る</a>
  </main>
</body>
<style>
  main {
    background-color: #ddd;
    height: 1400px;
  }

  form {
    margin: 0 auto;
    padding: 5px;
    width: 400px;
    border: 5px solid rgb(0, 0, 0, 0);
    display: block;
    height: 550px;
  }


  textarea[name="study-detail"] {
    font-size: 16px;
    margin: 10px 1px;
  }

  .detail {
    position: absolute;
    top: 611px;
  }

  select {
    display: block;
    box-sizing: border-box;
    margin: 10px 1px;
    padding: 5px;
    width: 380px;
    height: 60px;
    font-size: 18px;
  }

  h1 {
    font-size: 16px;
    display: block;
    margin-bottom: 0px;
    letter-spacing: 3px;
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
    position: absolute;
    top:910px;
  }

  .page-title {
    margin-bottom: 50px;

    text-align: center;
    font-size: 35px;
    font-weight: bold;
    letter-spacing: 5px;
  }

  .site-width2 {
    margin: 0 auto;
    width: 980px;
 
    padding-top: 10px;
    padding-bottom: 110px;
  }

  .add_Category a {
    font-size: 13px;
    color: #333;
  }

  .year-list,
  .month-list,
  .day-list {
    width: 117px;
    margin-right: 10px;
    float: left;
  }
</style>