<?php require'variables.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>visit_result</title>
</head>
<body>
  
<?php
if (isset($_REQUEST['smelly'])) {
   switch ($_REQUEST['smelly']) {
       case '循線追查':
           ?>
           <h1>不經一番寒徹骨，焉得梅花撲鼻香</h1>
           <hr>
           在經過不斷的追查後，你在半夜發現了天花板的深處有數隻老鼠在呻吟<br>
           呼喚保全大哥後才知道原來是有老鼠死了數天了，導致辦公室散出滾滾惡臭<br>
           在群策群力下，終於把牠清理乾淨，贏得了辦公室的滿堂彩!<br>
           <p>
           辛苦惹! 解決了突如其來的鼠災，該也是繼續完成拜碼頭任務的時候了...
           <form action="visit_result_1.php" method="post">
                 <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
                 <input type="hidden" name="visit" value="<?php echo $_REQUEST['visit']?>">
                 <input type="hidden" name="smelly" value="<?php echo $_REQUEST['smelly']?>">
                 <input type="submit" value="Go!">
           </form>
           <?php
           break;
       
       case '詢問同事':
           # code...
           break;
   };
 } else {
      switch ($_REQUEST['visit']) {
        case '公司巡迴自介':
            ?>
            <form id="visit" action="visit_result_1.php" method="post">
                 <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
                 <input type="hidden" name="visit" value="<?php echo $_REQUEST['visit']?>">
            </form>
            <script type="text/javascript">document.getElementById("visit").submit()</script>
            <?php  
          break;
        case "":
          # code...
          break;
        case "":
          # code...
          break;
      }
   }
?>
</body>
</html>

