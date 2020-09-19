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
  require('auth.php');
  ?>

  <main>
  
    <div class="site-width2">
    <div class="page-title">
<h1 class="page-title">カテゴリを編集する</h1>
</div>
<form action="">
        <section class="category">
          <div class="selectbox">
            <h1>編集したいカテゴリ、または新規作成を選択</span></h1>
            <select name="category-list">
              <option value="0">選択してください</option>
              <option value="0">新規作成</option>
              <option value="１">うんち</option>
            </select>
          </div>
        </section>

        <div class='btn-container'>
          <input type="submit" value="次へ">
        </div>
      </form>

    </div>
  
 <a class="i_jump" href="FillOut.php">記録ページへ戻る</a>
  </main>
</body>
<style>
main{
  background-color: #ddd;
  height: 900px;
  }
  form {
    margin: 0 auto;
    padding: 5px;
    width: 400px;
    border: 5px solid rgb(0, 0, 0, 0);
    display: block;
    height:250px;
  }

  .i_jump {
    display: block;
    margin: 0 auto;
    padding: 10px;
    width: 130px;
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
    top: 440px;}

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