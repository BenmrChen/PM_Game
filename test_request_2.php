<form id="test_1" action="test_request_3.php" action="post">
  <input type="hidden" name="test_1" value="<?php echo $_REQUEST['test_1']?>">

</form>
<?php 
  echo $_REQUEST['test_1'];
  echo $_REQUEST['test_2'];
  die();
?>
<script type="text/javascript">document.getElementById("test_1").submit()</script>