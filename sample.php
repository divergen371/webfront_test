<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <style>
      body {
         font-size: 14pt;
         font-weight: plain;
      }

      h1 {
         font-size: 24pt;
         color: white;
         background-color: green;
      }

      table td {
         background-color: #aafaaa;
      }
   </style>
</head>
<?php
$msg = '';
$result = 'お名前は？';
if (isset($_POST['msg'])) {
    $msg = $_POST['msg'];
    $result = "こんにちは、{$msg}さん";
}
?>

<body>
   <h1>Hello!!</h1>
   <p><?php echo htmlspecialchars($result); ?>
   <form action="sample.php" method="post">
      <input type="text" name="msg" value="<?php echo htmlspecialchars($msg); ?>">
      <input type="submit" value="送信">
   </form>
   </p>
</body>

</html>