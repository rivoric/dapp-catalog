<?php
session_start();
$error = '';
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user OR $pass) {
    # something passed in
    if ($user == 'dummy' && $pass == 'L3tM3In!') {
        $_SESSION['uguid'] = '123';
        header('location: index.php', true, 303);
        exit();
    } else {
        $error = <<<ERRMSG
<p>The details you entered are incorrect. Please try again.</p>
ERRMSG;
    }
}
require('header.php');
echo $error;
?>
<form method="POST" action="login.php">
<p>Enter your username:
  <input type="text" name="username"/>
</p>
<p>Enter your password:
  <input type="password" name="password"/>
</p>
<p>
  <input type="submit">
</p>
</form>
<?php
  require('footer.php');
?>