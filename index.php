<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    session_start(); 
    ?>

    <form action="handleforms.php" method="POST">
        <p><input type="text" placeholder="Username" name="username" required></p>
        <p><input type="password" placeholder="Password" name="password" required></p>
        <p><input type="submit" value="Login" id="loginBtn" name="submitBtn"></p>
    </form>

    <form action="logout.php" method="post">
        <button type="submit" id="logoutBtn" name="submitBtn">Logout</button>
    </form>

    <!-- Display error message if someone tries to log in while another user is already logged in -->
    <?php if (isset($_SESSION['error_message'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error_message']; ?></p>
    <?php endif; ?>

    <h2>
        User logged in:
        <?php
        if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
        }
        ?>      
    </h2>

    <h2>
        User password:
        <?php
        if (isset($_SESSION['password'])) {
            echo $_SESSION['password'];
        }
        ?>      
    </h2>
</body>
</html>
