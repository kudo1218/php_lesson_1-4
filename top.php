<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>課題1-4</title>
</head>
<body>
  <form method="get">
    <select name="result">
      <option value="グー">グー</option>
      <option value="チョキ">チョキ</option>
      <option value="パー">パー</option>
    </select>
    <br>
    <input type="submit" value="じゃんけん！">
  </form>
  <?php
    function battle() {
      $result = $_GET[result];
      $enemy = rand(1,3);
      switch($enemy) {
        case 1:
          $enemyResult = "グー";
          break;
        case 2:
          $enemyResult = "チョキ";
          break;
        case 3:
          $enemyResult = "パー";
          break;
      }
      if($result == $enemyResult) {
        $message = "あいこ";
      }else if($result == "グー" && $enemyResult == "パー") {
        $message = "あなたの敗北です。。。";
      }else if($result == "チョキ" && $enemyResult == "グー") {
        $message = "あなたの敗北です。。。";
      }else if($result == "パー" && $enemyResult == "チョキ") {
        $message = "あなたの敗北です。。。";
      }else if($result == "グー" && $enemyResult == "チョキ") {
        $message = "あなたの勝利です！";
      }else if($result == "チョキ" && $enemyResult == "パー") {
        $message = "あなたの勝利です！";
      }else if($result == "パー" && $enemyResult == "グー") {
        $message = "あなたの勝利です！";
      }
      echo '自分：' . $result . '<br>';
      echo '相手：' . $enemyResult . '<br>';
      echo $message;
    }
    if(!empty(result)) {
      battle();
    }
  ?>
  </body>
</html>
