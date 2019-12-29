<html>

<head>
<meta charset="UTF-8">
<title><?php echo $data['title']?></title>
<meta name="description" content="Welcome - Screen">
<meta name="author" content="Ignacio Esaú Nevarez Zúñiga">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="/gallery/public/css/styles.css?version=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

</body>
    <div id="container-navbar">
        <div id="container-left">
            <label id="nav-name" href="#"><?php echo $data['username']?></label>
        </div>
        <div id="container-right">
            <a id="nav-link" href="<?php echo $data['logoutAction']?>">
                <?php echo $data['logoutLink']?>
            </a>
        </div>
    </div>

    <div id="container-dashboard">
        <h1><?php echo $data['welcomeMessage']?></h1>
        <label><?php echo $data['infoMessage']?></label>
    </div>
</html>