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
    <div class="site-width">
      <div class="page-title">
      </div>
      <section>
        <div class="table-title">
          <h2>【<span>○/○</span>の学習履歴】<span>○</span>h</h2>
        </div>
        <form action="">
          <h1>◉検索する</h1>
          <div class='keyword-box'>
            <div class="from">
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
                <option value="0">○月</option>
              </select>
            </div>
            <span class='while'>~</span>
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
              <option value="0">○月</option>
            </select>
            <select class="category-list" name="day" id="">
              <option value="0">カテゴリで絞る</option>
              <option value="0">○○</option>
            </select>

          </div>
          <input type="submit" value="検索">
        </form>
        <table>
          <thead>
            <tr>
              <th class="size_s">日付</th>
              <th class='size_m'>カテゴリ</th>
              <th class="size_s">時間(分)</th>
              <th class="size_l">内容</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="size_s">○/○</td>
              <td class='size_m'>テストテストテスト</td>
              <td class="size_s">テスト</td>
              <td class="size_l">テストテストテストテストテストテストテストテストテスト</td>
              <td class="size_s"><a href="Edit_study.php">編集する</a></td>
            </tr>
        
            <tr>
              <td class="size_s">○/○</td>
              <td class='size_m'>テストテストテスト</td>
              <td class="size_s">テスト</td>
              <td class="size_l">テストテストテストテストテストテストテストテストテスト</td>
              <td class="size_s"><a href="Edit_study.php">編集する</a></td>
            </tr>
          </tbody>
        </table>
      </section>
      <a class="i_jump" href="index.php">HOMEへ戻る</a>
    </div>
    <style>
    .edit{
   float:right;


    }

      main {
        background-color: #ddd;
        height: 900px;
      }

      .table-title {
        text-align: center;
        padding-bottom: 20px;
        font-size: 25px;
      }

      td {
        background-color: #fff;
        height: 40px;
      }

      .size_s {
        width: 80px;
        text-align: center;
      }

      .size_m {
        width: 170px;
      }

      .size_l {
        width: 700px;
      }

      form {
        margin: 0 auto;
        padding: 15px;
        width: 700px;
        height: 80px;
        border: 5px solid rgb(0, 0, 0, 0);
        display: block;
        color: aliceblue;
        margin-top: 20px;
        margin-bottom: 20px;
        background: #333;
      }

      select {
        width: 144px;
        padding-left: 6px;
        float: left;
        margin: 0;
        height: 35px;
        font-size: 14px;
        border: 1px solid #eee;
        margin-right: 15px;
      }

      .while {
        display: block;
        float: left;
        margin-right: 13px;
        margin-top: -9px;
        font-size: 31px;
      }

      .year-list,
      .month-list,
      .day-list {
        width: 40px;
      }

      form h1 {
        font-size: 16px;
        margin: 0 ;
        margin-bottom: 10px;
     display: block;
     width: 90px;
      }

      .to {
        float: right;
      }
     .category-list{
       margin-left: 23px;
     }
     input[type="submit"] {
      height: 35px;
      margin-left: 14px;
      width: 84px;
    border: none;
    background: #FF773E;
    color: white;
    font-size: 14px;
    cursor: pointer;
    
    }
    .keyword-box{
      margin-left:31px;
    }

    </style>
  </main>