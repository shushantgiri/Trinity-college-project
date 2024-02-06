<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">     
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
    <form id="signupForm" action="signup.php" method="post">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="txt" id="signupUsername" placeholder="User name" required="">
        <input type="email" name="email" id="signupEmail" placeholder="Email" required="">
        <input type="password" name="pswd" id="signupPassword" placeholder="Password" required="">
        <button type="submit" name="signup">Sign up</button>
    </form>
</div>

<div class="login">
    <form id="loginForm" action="login.php" method="post">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" id="loginEmail" placeholder="Email" required="">
        <input type="password" name="pswd" id="loginPassword" placeholder="Password" required="">
        <span id="passwordToggle" class="password-toggle" title="Toggle Password">&#128065;</span>
        <button type="submit" name="login">Login</button>
        <?php if (!empty($loginError)) { ?>
            <p style="color: red;"><?php echo $loginError; ?></p>
        <?php } ?>
    </form>
</div>
</div>

    <script>
          document.addEventListener('DOMContentLoaded', function () {
            var passwordInput = document.getElementById('loginPassword');
            var passwordToggle = document.getElementById('passwordToggle');
    
            // Toggle password visibility
            passwordToggle.addEventListener('click', function () {
              if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
              } else {
                passwordInput.type = 'password';
              }
            });
          });
          document.addEventListener('DOMContentLoaded', function () {
            // Automatically check the checkbox on page load
            document.getElementById('chk').checked = true;
        });
    </script>
</body>
</html>
