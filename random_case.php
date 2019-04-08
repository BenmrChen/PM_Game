<!DOCTYPE html>
<html>
<head>
  <title>random_case</title>
</head>
<body>

<?php 
  $random_1 = rand(1,3);
  if ($random_1 == '1') {
?>
      <form id="visit" action="random_case_1.php" method="post">
        <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
        <input type="hidden" name="visit" value="<?php echo $_REQUEST['visit']?>">
      </form>
      <script type="text/javascript">document.getElementById("visit").submit()</script>
<?php
      // header("Location: random_case_1.php");
      break; #為啥這裡一定要break? 否則就一定會跑到下面?
  }  
?>

<form id="visit" action="visit_result.php" method="post">
    <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
    <input type="hidden" name="visit" value="<?php echo $_REQUEST['visit']?>">
</form>
<script type="text/javascript">document.getElementById("visit").submit()</script>
</body>
</html>

<!-- 
應該會有兩件事要做
1. 把前一頁(male.php)的東西接下來並傳到下一頁(visit_result.php)
2. 做一個隨機1~3的亂數，若數字是1的話就觸發垃圾發臭事件 -->
<!-- 
$random_case_1 = '辦公室無預警發出惡臭'; 老鼠、垃圾
$random_case_2 = '下雨天有同事穿雨衣進辦室導致滿地溼'; 打掃 找阿姨
$random_case_3 = '潮男同事穿硬底鞋偏偏又是業務，走來走去吵個辦公室如轟天巨響讓大家無法專心工作'; 好心提醒、偷line同期的抱怨 -->