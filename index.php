<html>
<head>
  <title>Document</title>
</head>
<body>

  <h1>
    This is a test website!
  </h1>

<?php
//If your Discord.php file is in another folder you need to change the file path!
include("Discord.php");
$sendembed = New Discord();

//Executes the function
$sendembed->Visitor();
?>

</body>
</html>

