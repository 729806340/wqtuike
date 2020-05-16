<?php /*a:1:{s:63:"C:\PHPstudy\PHPTutorial\WWW\tp5\app\index\view\index\index.html";i:1587025647;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <?php foreach($cheng as $v): ?>
   <div style="height: 50px;width: 100px"><?php echo htmlentities($v); ?></div>
   <?php endforeach; ?>
</body>
</html>