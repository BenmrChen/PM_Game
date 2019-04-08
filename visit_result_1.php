
<?php require 'variables.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1><繞了一圈差點累癱></h1>
  <hr>
  在拜碼頭的關卡裡，你的選擇是「<?php echo $_REQUEST['visit'];  ?>」。<br>
  雖然耗盡心力，但認識新同仁還是好棒棒。<br>
  <p>
  <?php
    if (isset($_REQUEST['smelly'])) {
        if (($_REQUEST['role_selection'] == '型到嫑嫑的') && ($_REQUEST['visit'] == '公司巡迴自介') && ($_REQUEST['smelly'] == '循線追查')) {
        $power_visit_result_1 = $power_original_male - ($power_weighting_male*$power_minus_visit_all) - ($power_weighting_male*$power_minus_smelly_mouse);
        $ability_visit_result_1 = $ability_original_male + ($ability_weighting_male*$ability_plus_visit_all);
        $reputation_visit_result_1 = $reputation_original_all + ($reputation_weighting_male*$reputation_plus_visit_all) + ($reputation_weighting_male*$reputation_plus_smelly_mouse);  
        echo '你的體力剩下: '.$power_visit_result_1.'點;<br>';
        echo '你的PM技能點數為: '.$ability_visit_result_1.'點;<br>';
        echo '你的知名度為: '.$reputation_visit_result_1.'點<p>';;
        ?>
        經過一週的努力，你的努力究竟是否有回報呢?<p>
        <form action="final_1.php">
          <input type="hidden" name="power_visit_result_1" value="<?php echo $power_visit_result_1; ?>">
          <input type="hidden" name="ability_visit_result_1" value="<?php echo $ability_visit_result_1; ?>">
          <input type="hidden" name="reputation_visit_result_1" value="<?php echo $reputation_visit_result_1?>">
          <input type="submit" value="點我看成果發表">
        </form>
        <?php
        }; 
    } else {
        if (($_REQUEST['role_selection'] == '型到嫑嫑的') && ($_REQUEST['visit'] == '公司巡迴自介')) {
          $power_visit_result_1 = $power_original_male - ($power_weighting_male*$power_minus_visit_all);
          $ability_visit_result_1 = $ability_original_male + ($ability_weighting_male*$ability_plus_visit_all);
          $reputation_visit_result_1 = $reputation_original_all + ($reputation_weighting_male*$reputation_plus_visit_all);
          echo '你的體力剩下: '.$power_visit_result_1.'點;<br>';
          echo '你的PM技能點數為: '.$ability_visit_result_1.'點;<br>';
          echo '你的知名度為: '.$reputation_visit_result_1.'點;<p>';
          ?>
          經過一週的努力，你的努力究竟是否有回報呢?<p>
          <form action="final_1.php">
            <input type="hidden" name="power_visit_result_1" value="<?php echo $power_visit_result_1; ?>">
            <input type="hidden" name="ability_visit_result_1" value="<?php echo $ability_visit_result_1 ?>">
            <input type="hidden" name="reputation_visit_result_1" value="<?php echo $reputation_visit_result_1 ?>">
            <input type="submit" value="點我看成果發表">
        </form>
        <?php
        };
      };

    // $original_power = 100;
    // $all_visit = 30;
    // $power_after_visit = $original_power-$all_visit;
    // $original_reputation = 0;
    // $all_visit_plus_reputation = 60;
    // $sum_reputation_after_visit = $original_reputation + $all_visit_plus_reputation;
    switch ($_REQUEST['role_selection']) {
      case 'male':
        switch ($_REQUEST['visit']) {
          case '公司巡迴自介':
            if (isset($_REQUEST['smelly'])) {
              switch ($_REQUEST['smelly']) {
                case '循線追查':
                  echo '你的體力剩下: '.($power_original_male - $power_minus_visit_all).'點<p>';
                  echo '你的知名度為: '.($reputation_original_all + $reputation_plus_visit_all).'點<p>';
                  break;
                
                default:
                  # code...
                  break;
              }
            }
            break;
          
          default:
            # code...
            break;
        }
        break;
      
      default:
        # code...
        break;
    }

    // echo '你的體力剩下: '.($power_original_male - $power_minus_visit_all).'點<p>';
    // echo '你的知名度為: '.($reputation_original_all + $reputation_plus_visit_all).'點<p>';
  ?>
</body>
</html>
