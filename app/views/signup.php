<html>

<head>
    <meta charset = "UTF-8">
    <title>Sign Up</title>
    <meta name = "description" content = "Sign Up - screen">
    <meta name = "author" content = "Ignacio Esaú Nevarez Zúñiga">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel = "stylesheet" href = "../../public/css/styles.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div id = "container-signup">
        <div id = "title">
            <i class = "material-icons">lock</i> Sign Up
        </div>

        <form>
            <div class = "input">
                <div class = "input-addon">
                    <i class = "material-icons">email</i>
                </div>
                <input id = "email" placeholder = "Email" type = "email" required class = "validate" autocomplete = "off">
            </div>

            <span class="invalid-feedback"></span>

            <div class = "input">
                <div class = "input-addon">
                    <i class = "material-icons">face</i>
                </div>
                <input id = "username" placeholder = "Username" type = "text" required class = "validate" autocomplete = "off"> 
            </div>

            <span class="invalid-feedback"></span>

            <div class = "input">
                <div class = "input-addon">
                    <i class = "material-icons">vpn_key</i>
                </div>
                <input id = "password" placeholder = "Password" type = "password" required class = "validate" autocomplete = "off">
            </div>

            <span class="invalid-feedback"></span>

            <div>
                <input type = "submit" value = "Sign Up" />
            </div>
        </form>

        <div class = "login">
            Do you already have an account?
            <a href = "#"><button id = "login-link">Log In</button></a>
        </div>
    </div>
</body>

</html>