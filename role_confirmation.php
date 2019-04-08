<!DOCTYPE html>
<html>
<head>
  <title>role_confirmation</title>
</head>
<body>

  <?php 
    switch ($_REQUEST['role_selection']) {
      case '型到嫑嫑的':
  ?>
        <form id="role_selection" action="male.php" method="post"> <!-- 晚一點也要把female/bug都傳過去 -->
          <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
        </form>
        
  <?php    
        break;
      case "":
        # code...
        break;
      case "":
        # code...
        break;
    }
    // echo '您選擇的初始角色為: '.$_REQUEST['role_selection'];
  ?>
  <script type="text/javascript">document.getElementById("role_selection").submit()</script>
</body>
</html>