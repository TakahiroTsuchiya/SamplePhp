<?php
// echo "Hello World.";

if isset($_POST["comment"]) {
  $comment = $_POST[‘comment’];
  echo $comment;
}
?>
<!DOCTYPE html>
<html lang = “ja”>
<head>
  <meta charset = “UFT-8”>
  <title>Sample</title>
</head>
<body>
  <h1>Post Request</h1>
  <form action = “index.php” method = “post”>
    <input type = “text” name =“comment/“><br/>
    <input type = “submit” value =“send“>
  </form>
</body>
</html>
