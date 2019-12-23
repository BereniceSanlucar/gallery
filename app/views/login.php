<html>

<head>
<meta charset="UTF-8">
<title>Login</title>
<meta name="description" content="Login - Screen">
<meta name="author" content="Berenice Mendoza Sanlúcar">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="../../public/css/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons">lock</i> Login
        </div>

        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" autocomplete="off">
            </div>

            <span class="invalid-feedback"></span>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" autocomplete="off">
            </div>

            <span class="invalid-feedback"></span>

            <div>
                <input type="submit" value="Log In">
            </div>
        </form>

        <div class="signup">
            Don't have an account yet?
            <a href="#">
                <button id="signup-link">Sign Up</button>
            </a>
        </div>
    </div>
</body>

</html>