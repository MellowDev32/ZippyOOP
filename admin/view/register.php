<?php include 'view/header.php';
     if(!empty($errors)){ 
        foreach ($errors as $error) : ?>
<p><?= $error ?></p>
<?php endforeach;
    } ?>
<form action="." method="post">
    <input type="hidden" name="action" value="register">
    <div>
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="text" name="password" required>
        <br>
        <label>Confirm Password:</label>
        <input type="text" name="confirm_password" required>
        <br>
        <input type="submit" value="Register" class="button blue">
        <br>
    </div>
    
</form>

<?php include 'view/footer.php'; ?>