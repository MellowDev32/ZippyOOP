<?php include('header.php') ?>
<h3>Thank you for signing out, <?php echo $_SESSION['userid']; ?></h3>
<?php 
    unset($_SESSION['uerid']);
    session_destroy();
    
    $name = session_name();
    $expire = strtotime('-1 year');
    $params = session_get_cookie_params();
    $path = $params['path'];
    $domain = $params['domain'];
    $secure = $params['secure'];
    $httponly = $params['httponly'];
    setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
?>
<p><a href=".">View Vehicles</a></p>
<?php include('footer.php') ?>