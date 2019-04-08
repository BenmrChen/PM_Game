<!DOCTYPE html>
<html>
<head>
  <title>role_selection</title>
</head>
<body>
  <h1><選角時刻></h1>
  <hr>
  <?php
    echo 'Hi '.$_REQUEST['role_name'].', 你已從平民晉升為實習PM'."<p>".
    "拯救未來全體PM們的肝，這微弱希望就掌握在你手中了!"."<p>";
   ?>
   <p></p>
  <p>請選擇你的初始角色</p>
  <form action="role_confirmation.php" method="post">
    <select name="role_selection">
      <?php  
      $role=['初心者男'=>'型到嫑嫑的', '初心者女'=>'正到嘦嘦的', '初心擺爛王'=>'強運到恏恏的'];
       foreach ($role as $key=>$value) {
         // echo '<option value="'.$character.'">'.$character.'</option>'; 這種寫法也可以(舊)
         echo "<option value='$value'>$key</option>";
         // echo "<option value='$key, 屬性: $value'>$key</option>"; TTN教學版
         // echo <option value="$key$value">$key</option>; 
       }
      ?>
    </select>
    <P><input type="submit" value="GO!">     
  </form>
</body>
</html>
<!
