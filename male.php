<!DOCTYPE html>
<html>
<head>
  <title>male</title>
</head>
<body>

  <h1><第一天></h1> <!-- 這裡的h1忘了加/讓所有的字都變超大 冏 --> 
  <hr>
  <p>您選擇的初始角色為「初心者男」，他型到嫑嫑的外表令全天下都為他雀躍</p>
  <p>身為實習生，到公司的第一件事當然是拜拜碼頭。</p>
  <p>以下有三個選項，還是職場菜鳥的你，要怎麼去拜碼頭呢?</p>
  <form action="random_case.php" method="post">
    <input type="hidden" name="role_selection" value="<?php echo $_REQUEST['role_selection']?>">
    <p>&nbsp&nbsp<input type="radio" name="visit" value="公司巡迴自介" checked>帶著自己的狗牌，走遍全公司逢人便自介，以最高效率讓同事們知道你是誰。</p>
    <p>&nbsp&nbsp<input disabled="" type="radio" name="visit" value="先了解">先了解會跟自己互動的部門有哪些，稍微study一下他們在做什麼，以較精緻的方式讓大家認識你。</p>
    <p>&nbsp&nbsp<input type="radio" name="visit" value="問氛圍">問一下主管公司的氛圍如何，若不太適合主動出擊的話，就暫且先不行動，預備好自己在專業的地位以利未來共事順暢。</p>
    <p><input type="submit" value="GO!"></p>
  </form>

</body>
</html>