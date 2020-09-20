<?php
require('function.php');
debug('「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「');
debug('「マイページ　');
debug('「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「');
debugLogStart();
$_SESSION['file'] =  basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>

.contents_butan{
    float: right;
    width: 436px;

}
.contents_butan p{
    margin: 0;
}
.contents_butan a{
    display: block;
    height: 81px;
    padding-top: 32px;
    font-size: 32px;
    text-decoration: none;
    text-align: center;
    color: #333;
}
.contents1{
border: 1px solid #333;
width: 300px;
margin-bottom: 42px;
margin-top: 15px;
background-color: #F0FFFF;
}


.contents2{
border: 1px solid #333;
width: 300px;
background-color: #F0FFFF;
}


.memo_space{
height: 200px;
width: 350px;
margin-left: 83px;
}
.memo_space h1{
margin: 0;
}

</style>
<body>
<?php
require('header.php');
require('auth.php');

?>
<main>
<div class="site-width">
<section class="contents_butan">
<div class="contents1">
          <a href="FillOut.php">
            <p>学習を記録する</p>
          </a>
        </div>
        <div class="contents2">
          <a href="ReadBack.php">
            <p>学習を振り返る</p>
          </a>
        </div>
</section>
<section　class='memo'>
<div class="memo_space">
<h1>メモ</h1>
<textarea name="memo" id="" cols="50" rows="12"></textarea>

</div>
</section>
</div>
<?php
require('StudyDetail.php');
?>

</main>
</body>
</html>
    