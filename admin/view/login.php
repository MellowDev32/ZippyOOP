<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>

<body>
    <main>
        <header>
            <h1>Zippy Admin</h1>
        </header>

<?php if($login_message){ ?>
<p><?= $login_message ?></p>
<?php } ?>

<form action="." method="post">
    <input type="hidden" name="action" value="login">
    <div>
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="text" name="password" required>
        <br>
        <input type="submit" value="Login" class="button blue">
        <br>
    </div>
</form>

</main>
</body>

</html>