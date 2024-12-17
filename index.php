<?php
require_once __DIR__ . '/src/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . '/components/head.php' ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon"
        href="https://eios.kmept.ru/pluginfile.php/1/theme_opentechnology/settings_1016_main_favicon/1726063174/K.ico" />
</head>
<style>
    body {
        background-image: url(comands/comanda1/images/welcome_kmept_bg.gif);
    }

    .login-container {
        background-color: #123456;
    }

    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body */
    body {
        font-family: "Arial", sans-serif;
        background-color: #121212;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Container */
    .login-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
        background-color: #000000;
        border-radius: 20px;
        width: 90%;
        max-width: 400px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }

    /* logo section varwin */
    .varwin {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 1000;
    }

    .varwin img {
        width: 100px;
        height: auto;
    }

    /* Logo Section */
    .logo-section {
        text-align: center;
        margin-bottom: 1.5rem;
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .logo-section .logo {
        max-width: 350px;
        margin-bottom: 1rem;
    }

    .logo-section h1 {
        font-size: 1.2rem;
        color: #6a5acd;
    }

    /* Form Section */
    .form-section {
        width: 100%;
    }

    .form-section h2 {
        text-align: center;
        margin-bottom: 1rem;
        font-size: 1.4rem;
        color: #ffffff;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .login-form label {
        font-size: 0.9rem;
        color: #dcdcdc;
    }

    .login-form input {
        padding: 0.8rem;
        font-size: 0.9rem;
        border: 1px solid #6a5acd;
        border-radius: 4px;
        background-color: #121212;
        color: #ffffff;
    }

    .login-form input::placeholder {
        color: #a9a9a9;
    }

    .login-btn {
        padding: 0.8rem;
        font-size: 1rem;
        color: #ffffff;
        background-color: #6a5acd;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3;
        text-align: center;
    }

    .login-btn:hover {
        background-color: #4b3ab2;
        text-align: center;
    }

    .forgot-link {
        text-align: center;
        font-size: 0.9rem;
        color: #6a5acd;
        text-decoration: none;
        margin-top: 1rem;
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    /* Support Section */
    .support {
        margin-top: 1.5rem;
        font-size: 0.8rem;
        text-align: center;
    }

    .support a {
        color: #6a5acd;
        text-decoration: none;
    }

    .support a:hover {
        text-decoration: underline;
    }
</style>
<div class="varwin">
    <img src="comands/comanda1/images/varwin.png" alt="KMЭПТ" class="logo" />
</div>

<body>
    <form class="login-form" action="src/actions/login.php" method="post">
        <h2>Вход</h2>

        <?php if (hasMessage('error')): ?>
            <div class="notice error"><?php echo getMessage('error') ?></div>
        <?php endif; ?>

        <label for="email">
            Почта
            <input
                type="text"
                id="email"
                name="email"
                placeholder="kmeptxvarwin@gmail.com"
                value="<?php echo old('email') ?>"
                <?php echo validationErrorAttr('email'); ?>>
            <?php if (hasValidationError('email')): ?>
                <small><?php echo validationErrorMessage('email'); ?></small>
            <?php endif; ?>
        </label>

        <label for="password">
            Пароль
            <input
                type="password"
                id="password"
                name="password"
                placeholder="******">
        </label>

        <button
            type="submit"
            id="submit">Продолжить</button>
    </form>

    <p>У меня еще нет <a href="/register.php">аккаунта</a></p>
    <!-- Support -->
    <div class="support">
        <p>
            Техническая поддержка:
            <a href="mailto:">kmeptxvarwin@gmail.com</a>
        </p>
    </div>
    <?php include_once __DIR__ . '/components/scripts.php' ?>
</body>

</html>