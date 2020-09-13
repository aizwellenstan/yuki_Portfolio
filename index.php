<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    margin: 0;
    background-color: #ddd;
}
.site-width {
    margin: 0 auto;
    width: 980px;
    padding-bottom: 70px;
}

</style>
<?php
require('header.php');
?>
<body>
<div class="site-width">
<section class="contents_butan">
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
</section>
<section　class='memo'>
<div class="memo_space">
<h1>メモ</h1>
</div>
</section>
</div>
<?php
require('StudyDetail.php');
?>
</body>
</html>
    