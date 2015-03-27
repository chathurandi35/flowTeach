<html>

<head></head>
<body>
<?php
// define variables and set to empty values
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["your-name"]);
  $email = test_input($_POST["your-email"]);
  $subject = test_input($_POST["your-subject"]);
  $message = test_input($_POST["your-message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $name;
?>

</body>
</html>