<?php
require_once 'ClassSession.php';

// Create a new instance of ClassSession
$classSession = new ClassSession();

$classId = $classSession->getClassId();
$userCount = $classSession->getUserCount();
$namesArray = $classSession->getNamesArray();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to the Class</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }
  .container {
    margin-top: 50px;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Welcome to the Class!</h1>
    <p>Class ID: <?php echo $classId; ?></p>
    <p>Number of Users Joined: <?php echo $userCount; ?></p>
    <?php if(count($namesArray) > 0): ?>
    <p>List of Active Users:</p>
    <ul>
      <?php foreach ($namesArray as $userName): ?>
        <li><?php echo $userName; ?></li>
      <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p>No users currently active.</p>
    <?php endif; ?>
  </div>
</body>
</html>
