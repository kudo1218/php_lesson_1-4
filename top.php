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
      $choice = ['グー','チョキ','パー'];
      $key = array_rand($choice);
      $enemyResult = $choice[$key];
      switch($enemyResult) {
        case ($enemyResult === $result):
          $message = 'あいこ';
          break;
        case 'グー':
          $message = ($result === 'チョキ') ? 'あなたの敗北です。。。' : 'あなたの勝利です！';
          break;
        case 'チョキ':
          $message = ($result === 'パー') ? 'あなたの敗北です。。。' : 'あなたの勝利です！';
          break;
        case 'パー':
          $message = ($result === 'グー') ? 'あなたの敗北です。。。' : 'あなたの勝利です！';
          break;
      }
      echo '自分：' . $result . '<br>';
      echo '相手：' . $enemyResult . '<br>';
      echo $message;
    }
    if(!empty($_GET[result])) {
      battle();
    }
  ?>
  </body>
</html>
