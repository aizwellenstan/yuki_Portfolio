<?php
require('function.php');
debug('「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「');
debug('「学習振り返りページ　');
debug('「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「');
debugLogStart();
$_SESSION['file'] =  basename(__FILE__);
$u_id = $_SESSION['user_id'];

$_SESSION['study_category'] = $study_category;


$serchyear = (!empty($_GET['year'])) ? $_GET['year'] : '';
$serchyear2 = (!empty($_GET['year2'])) ? $_GET['year2'] : '';
$serchmonth = (!empty($_GET['month'])) ? $_GET['month'] : '';
$serchmonth2 = (!empty($_GET['month2'])) ? $_GET['month2'] : '';
$serchday = (!empty($_GET['day'])) ? $_GET['day'] : '';
$serchday2 = (!empty($_GET['day2'])) ? $_GET['day2'] : '';
$serchcategory = (!empty($_GET['category'])) ? $_GET['category'] : '';

$_SESSION['$serchyear'] = $serchyear;
$_SESSION['$serchyear2'] = $serchyear2;
$_SESSION['$serchmonth'] = $serchmonth;
$_SESSION['$serchmonth2'] = $serchmonth2;
$_SESSION['$serchday'] = $serchday;
$_SESSION['$serchday2'] = $serchday2;

$from_date = (!empty($_GET['year'])) ? $serchyear . '-' . $serchmonth . '-' . $serchday:'2010-01-01';
$to_date = (!empty($_GET['year2'])) ? $serchyear2 . '-' . $serchmonth2 . '-' . $serchday:date('Y-m-d');

$getstudy = getstudy($u_id, $from_date, $to_date);
debug('$getstudy' . print_r($getstudy, true));

$getcategory = getcategory();

$t_name = "'" . '2020-' . $serchmonth . '-' . $serchday . "'";
debug('$t_name' . print_r($t_name, true));

function getstudytime($u_id)
{

  try {
    $dbh = dbConnect();
    $sql = 'select sum(study_time) from study_detail WHERE user_id= :u_id ';
    $data = array('u_id' => $u_id);
    $stmt = queryPost($dbh, $sql, $data);

    if ($stmt) {
      return $stmt->fetch();
    } else {
      return false;
    }
  } catch (Exception $e) {
    error_log('エラー発生:' . $e->getMessage());
  }
}
$getstudytime = getstudytime($u_id);
debug('getstudytime:' . print_r($getstudytime, true));



?>
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
    <div class="site-width">
      <div class="page-title">
      </div>
      <section>
        <div class="table-title">
          <h1>学習の振り返り</h2>
        </div>
        <div>
          <div class="search-msg">
            【<?php if ($t_name != "'" . "2020--" . "'") {
                echo $t_name;
              } else {
                echo '全ての学習時間を表示中';
              } ?>
            <?php if ($t_name != "'" . "2020--" . "'") {
              echo 'の検索結果';
            }  ?>】
          </div>
          <h2><?php echo $getstudytime['sum(study_time)']; ?></span>h</h2>
        </div>
        <form method="get">
          <h1>◉検索する</h1>
          <div class='keyword-box'>
            <div class="from">
              <select class="year-list" name="year" id="">
                <option value="select">【年】</option>
                <?php for ($i = date('Y'); $i >= 2010; $i--) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i . '年'; ?></option><?php } ?>
                <?php if (!empty($_SESSION['$serchyear'])) { ?>
                  <option value="<?php echo $_SESSION['$serchyear'] ?>" <?php if (!empty($_SESSION['$serchyear'])) echo 'selected'; ?>>
                    <?php echo $_SESSION['$serchyear'] ?></option>
                <?php } ?>

              </select>
              <select class="month-list" name="month">
                <option value="select">【月】</option>
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i . '月'; ?></option><?php } ?>
                  <?php if (!empty($_SESSION['$serchmonth'])) { ?>
                  <option value="<?php echo $_SESSION['$serchmonth'] ?>" <?php if (!empty($_SESSION['$serchmonth'])) echo 'selected'; ?>>
                    <?php echo $_SESSION['$serchmonth'] ?></option>
                <?php } ?>
              </select>



              <select class="day-list" name="day" id="">
                <option value="select">【日】</option>
                <?php for ($i = 1; $i <= 31; $i++) { ?>
                  <option value="<?php echo $i ?>"><?php echo $i . '日' ?></option><?php } ?>
                  <?php if (!empty($_SESSION['$serchday'])) { ?>
                  <option value="<?php echo $_SESSION['$serchday'] ?>" <?php if (!empty($_SESSION['$serchday'])) echo 'selected'; ?>>
                    <?php echo $_SESSION['$serchday'] ?></option>
                <?php } ?>
              </select>
            </div>
            <span class='while'>~</span>
            <select class="year-list" name="year2" id="">
              <option value="select">【年】</option>
              <?php for ($i = date('Y'); $i >= 2010; $i--) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i . '年'; ?></option><?php } ?>
                <?php if (!empty($_SESSION['$serchyear2'])) { ?>
                  <option value="<?php echo $_SESSION['$serchyear2'] ?>" <?php if (!empty($_SESSION['$serchyear2'])) echo 'selected'; ?>>
                    <?php echo $_SESSION['$serchyear2'] ?></option>
                <?php } ?>
            </select>
            <select class="month-list" name="month2">
              <option value="select">【月】</option>
              <?php for ($i = 1; $i <= 12; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i . '月'; ?></option><?php } ?>
                <?php if (!empty($_SESSION['$serchmonth2'])) { ?>
                  <option value="<?php echo $_SESSION['$serchmonth2'] ?>" <?php if (!empty($_SESSION['$serchmonth2'])) echo 'selected'; ?>>
                    <?php echo $_SESSION['$serchmonth2'] ?></option>
                <?php } ?>
            </select>
            <select class="day-list" name="day2" id="">
              <option value="select">【日】</option>
              <?php for ($i = 1; $i <= 31; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i . '日' ?></option><?php } ?>
                <?php if (!empty($_SESSION['$serchday2'])) { ?>
                  <option value="<?php echo $_SESSION['$serchday2'] ?>" <?php if (!empty($_SESSION['$serchday2'])) echo 'selected'; ?>>
                    <?php echo $_SESSION['$serchday2'] ?></option>
                <?php } ?>
            </select>
            <select class="category-list" name="category" id="">
              <option value="0">カテゴリで絞る</option>
              <?php
              foreach ($getcategory as $key => $val) { ?>
                <option value="<?php echo $val['category_name'] ?>">
                  <?php echo $val['category_name'] ?>
                </option><?php  } ?>
              <?php if (!empty($_SESSION['study_category'])) { ?>
                <option value="<?php echo $_SESSION['study_category'] ?>" <?php if (!empty($_SESSION['study_category'])) echo 'selected'; ?>><?php echo $_SESSION['study_category'] ?></option>
              <?php } ?>
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
            <?php foreach ($getstudy as $key => $val) { ?>
              <tr>
                <td class="size_s"><?php echo $val['study_date']; ?></td>
                <td class='size_m'><?php echo $val['study_category']; ?></td>
                <td class="size_s"><?php echo $val['study_time']; ?></td>
                <td class="size_l"><?php echo $val['study_detail']; ?></td>
                <td class="size_s"><a href="Edit_study.php">編集する</a></td>
              </tr>
            <?php } ?>


          </tbody>
        </table>
      </section>
      <a class="i_jump" href="index.php">HOMEへ戻る</a>
    </div>
    <style>
      .edit {
        float: right;


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
        margin: 0;
        margin-bottom: 10px;
        display: block;
        width: 90px;
      }

      .to {
        float: right;
      }

      .category-list {
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

      .keyword-box {
        margin-left: 31px;
      }
    </style>
  </main>