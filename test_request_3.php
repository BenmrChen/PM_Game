<form action="test_request_4.php" action="post">
  <input type="hidden" name="test_1" value="<?php echo $_REQUEST['test_1']?>">

</form>
<?php 
  echo $_REQUEST['test_1'];
?>