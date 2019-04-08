<?php require'variables.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>random_case_1</title>
</head>
<body>
<h1><居居 出問題勒!></h1>
<hr>
<p>辦公室無預警發出惡臭，試問單兵該如何處置?</p>
<form action="visit_result.php" method="post">
  <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
  <input type="hidden" name="visit" value="<?php echo $_REQUEST['visit']?>">
  &nbsp&nbsp<input type="radio" name="smelly" value="循線追查" checked>循線追查臭味的來源<br>
  &nbsp&nbsp<input type="radio" name="smelly" value="詢問同事">問問週邊的同事可能的臭味來源<br>
  <p>
  <input type="submit" value="GO!">
</form>

</body>
</html>