<?php
    $title = 'User Login'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    //If data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }

    }
?>
<link rel="stylesheet" href="./css/style.css">
<div class="login">
  <h1>Login</h1>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
    <p><input type="password" name="password" value="" placeholder="Password"></p>
    <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>
    </p>
    <p class="submit"><input type="submit" name="commit" value="Login"></p>
  </form>
</div>

<div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div>
<?php include_once 'includes/footer.php'?>

<script>
    const navbar=document.querySelector('.navbar')
    navbar.classList.remove('bg-primary')
    navbar.classList.add('login-nav')
</script>