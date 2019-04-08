<!DOCTYPE html>
<html>
<head>
  <title>final_1</title>
</head>
<body>
  <h1><成果發表></h1>
  <hr>
  經過一週的努力，在諸多長官及同仁的觀察評價下，你的結果是: <br>
  <p>
  <?php  
  $final_result =  $_REQUEST['power_visit_result_1'] + $_REQUEST['ability_visit_result_1'] + $_REQUEST['reputation_visit_result_1'];
  if ($final_result > 130) {
    echo '「<strong>Excellent</strong>! 你整個超乎預期，公司迫不及待想請你來上班!」';
  } elseif ($final_result >60 && $final_result <=130) {
     echo '「Good! 你合格了，約個時間上工吧。」';
  } elseif ($final_result <= 60) {
    echo '「Failed! 謝謝你的付出，你可以先回家了，若我們有進一步消息會再通知您。」';
  };
  ?>
</body>
</html>