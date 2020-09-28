<?php
debug('「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「');
debug('「学習振り返りページ　');
debug('「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「「');

$getagtstudy = getagtstudy($u_id);
$user = getuser($u_id);

$includecategory = '';
$startdate = date('Y-m-d', strtotime($user['create_date']));
$getstudytime = getstudytime($u_id, $startdate, date('Y-m-d'), $includecategory);
$sutdy_period = ((strtotime(date('Y-m-d')) - strtotime($startdate)) / 86400);
$getstudy = getstudy($u_id, date('Y-m-d'), date('Y-m-d'), $includecategory);

$gettime1 = getstudytime($u_id, date('Y-m-d'), date('Y-m-d'), $includecategory);
$gettime2 = array_shift($gettime1);
$todaystudytime = round($gettime2/60,1);
?>
<div class="study_detail">
  <div class="site-width">
    <div class="page-title">
    </div>
    <section class="today_list">
      <div class="table-title">
        <h2><span>本日<span><?php echo date('m/d'); ?></span>の学習履歴　(計<span class="today_time"><?php echo $todaystudytime; ?></span>h)</span>

      </div>
      <table>
        <thead>
          <tr>
            <th class="size_s">日付</th>
            <th class='size_m'>カテゴリ</th>
            <th class="size_s">時間(分)</th>
            <th class="size_l">内容</th>
          </tr>
        </thead>
        <tbody class="alltbody">
          <?php foreach ($getstudy as $key => $val) { ?>
            <tr>
              <td class="size_s"><?php echo $val['study_date']; ?></td>
              <td class='size_m'><?php echo $val['study_category']; ?></td>
              <td class="size_s"><?php echo $val['study_time']; ?></td>
              <td class="size_l"><?php echo $val['study_detail']; ?></td>
              <form method="get">
                    <td class="size_s">
                      <textarea name="study_id" id="study_id"><?php echo $val['id']; ?></textarea>
                      <input class='editbtn' type="submit" value="編集">
                  </form>
            </tr>
          <?php } ?>


        </tbody>

      </table>
    </section>
  </div>
  <div class="total-study">
    <div class="table-title">
      <h2>累計学習時間</h2>
    </div>
    <section class="data-list">
      <div class="data">
        <ul class="data-ul">
          <?php foreach ($getagtstudy as $key => $val) { ?>
            <li class="data_month">
              <div>
                <h1 class="data-title"><?php echo (int)$val['study_month']; ?>月</h1>
                <p class="data-title2">合計学習時間</p>
                <p class="study-time"><span class="sum"><?php echo $val['sum_time']; ?></span>h (平均<span class="avg"><?php echo $val['avg_time']; ?></span>h)</p>
              </div>
            </li>
          <?php } ?>
        </ul>

      </div>
      <div class="data_space">
        <p>学習開始日：<span class="startdate"><?php echo date('Y-m-d', strtotime($user['create_date'])); ?></span></p>
        <p>開始から　：<span><?php echo $sutdy_period; ?></span>日</p>

        <p>総学習時間：<span><?php echo $getstudytime['sum(study_time)']; ?></span>h</p>
        <p>平均　　　：<span><?php echo round(($getstudytime['sum(study_time)'] / $sutdy_period)/60,1); ?>h</p>
      </div>
    </section>
  </div>
</div>
<style>
#study_id{
  display: none;
}
td a{
  font-size: 15px;
}
  .data-list {
    margin-top: -30px;
  }

  .today_list {
    height: 450px;

  }

  .table-title h1 {
    font-size: 40px;

  }

  .total-study {
    background-color: #ddd;
    height: 553px;
    margin: 0 auto;
    width: 980px;
    padding-bottom: 10px;
    padding-top: 10px;

  }
thead{
  display: block;
}
  .study_detail {
    height: 471px;
    background-color: #fff;
  }

  .alltbody {
    overflow-y: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    display: block;
    width: 1080px;
    height: 270px;
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, .5);
  }

  

  .startdate {
    font-size: 21px;
    width: 95px;
    float: right;
    display: block;
    margin: 0px;
    margin-top: -9px;
  }

  .sum {
    font-size: 50px;
  }

  .avg {
    font-size: 30px;
  }

  .table-title {
    text-align: center;
    font-size: 25px;
  }

  td {
    color: #333;
    height: 40px;
    background-color: #DDDDDD;
  }

  .size_s {
    width: 80px;
    text-align: center;
  }

  .size_m {
    width: 130px;
  }

  .size_l {
    width: 700px;
  }

  .data {
    width: 600px;
    margin: 10px;
    float: left;
  }

  .data_space {
    height: 300px;
    width: 300px;
    margin: 10px;
    background-color: #fff;
    float: right;
    margin-top: 56px;
    font-size: 30px;
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, .5);
  }

  .data_space p {
    font-size: 27px;
    margin: 0 auto;
    margin-left: 25px;
    margin-top: 25px;
  }

  .data_space h1 {
    margin-left: 35px;
    margin-top: 22px;
    font-size: 30px;
  }

  .data_month {
    height: 270px;
    width: 300px;
    margin-top: 55px;
    background-color: #fff;
    color: #333;
    display: inline-block;
    margin-top: 30px;
    margin-right: 30px;
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, .5);
  }



  .data-ul {
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    width: 600px;
    padding: 0;
    text-align: center;
    height: 330px;
  }

  .data-title {
    padding: 6px;
    font-size: 35px;
    width: 100px;
    border: 2px solid;
    margin: 0 auto;
    margin-top: 15px;
    margin-bottom: 25px;

  }

  .data-title2 {
    font-size: 30px;
    margin: 0;
  }

  .study-time {
    font-size: 25px;
    margin: 0;
  }
</style>