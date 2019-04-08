<form id="test_1" action="test_request_2.php" method="post">
  <input type="hidden" name="test_1" value="爽">
  <input type="hidden" name="test_2" value="超爽">
  <!-- <input type="submit" value="check"> -->
  <?php 
    // header("Location: test_request_2.php");
  ?>
  <script type="text/javascript">document.getElementById("test_1").submit()</script>
</form>

<form id="test_2" action="test_request_2.php" method="post">
  <input type="hidden" name="test_2" value="超爽">
  <!-- <input type="submit" value="check"> -->
  <?php 
    // header("Location: test_request_2.php");
  ?>
  <script type="text/javascript">document.getElementById("test_2").submit()</script>
</form>

<!-- 
JS的auto submit好像只能用一次... 所以若要傳兩個值的 要把要傳的值放在同一個FORM裡面 但如果是要傳兩個值到分別兩個不一樣的地方...?-->