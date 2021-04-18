<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <main>
        <?php if($action != 'register' && !isset($_SESSION['userid'])) { ?>
            <a href=".?action=register">Register</a>
        <?php } else if($action != 'register' && $action != 'logout' && isset($_SESSION['userid'])) { ?>
            <p>Hello <?php echo $_SESSION['userid']; ?>(<a href=".?action=logout">logout</a>) </p>
        <?php } ?>
        <header>
            <h1>Zippy Used Autos</h1>
        </header>