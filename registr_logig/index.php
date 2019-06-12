<?php include 'UserValidator.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="logIn">
    <form action="index.php" method="post">
    <input type="text" name="login" value="">
    <input type="password" name="pass" value=""> 
    <input type="submit" value="START">
    </form>
    <?php echo $userStatus;?>
    <?php echo $user;?>
    
    </div>
</body>
</html>
