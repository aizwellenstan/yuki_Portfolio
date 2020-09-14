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
<h1 class="page-title">学習を記録する</h1>
</div>
      <form action="" method="">
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
            <h1>カテゴリを選択　<span class="add_Category"><a href="Edit_Category.php">カテゴリの追加はこちら</a></span></h1>

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
          <input type="submit" value="登録">
        </div>
      </form>

    </div>
    <?php
require('StudyDetail_use.php');
?>
 <a id=i_jump href="index.php">HOMEへ戻る</a>
  </main>
</body>
<style>
main{
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

  #i_jump {
    display: block;
    margin: 0 auto;
    padding: 10px;
    width: 110px;
  }

  textarea[name="study-detail"] {
    font-size: 16px;
  }

  .detail {
    position: absolute;
    top: 464px;
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
    margin-bottom: 10px;
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
    top: 740px;}

    .page-title{
      margin-bottom: 10px;

      text-align: center;
      font-size: 35px;
      font-weight: bold;
      letter-spacing: 5px;
    }
    
    .site-width2 {
  margin: 0 auto;
  width: 980px;
  padding-bottom: 10px;
  padding-top: 10px;
}
.add_Category a{
  font-size: 13px;
  color: #333;
}
</style>