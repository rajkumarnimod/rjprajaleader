<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once 'styles.php'; ?>
</head>

<body>

    <?php include_once 'navbar.php'; ?>

    <main>
        <section class="login_sec">
            <div class="login-container">
                <div class="login-header">
                    <h1>Create an Account</h1>
                </div>
                <form class="login-form" id="loginForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required placeholder="Enter your name" minlength="2" />
                        <span class="error-message" id="passwordError"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="tel" name="tel" required placeholder="Enter your phone no." />
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder="Enter your email" />
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" required placeholder="Enter your password" minlength="6" />
                        <span class="error-message" id="passwordError"></span>
                    </div>
                    <button type="submit" class="login-button">Sign Up</button>
                </form>
                <div class="additional-options">
                    <span>Already have an account? </span>
                    <a href="login.php">Login</a>
                </div>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php'; ?>

    <?php include_once 'scripts.php'; ?>


</body>

</html>