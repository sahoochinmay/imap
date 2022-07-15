<!-- login code -->
<?php
include './config/config.php';
if (isLoggedin()) {
  header("Location:mailbox.php");
  exit;
}
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  echo $email;
  if($email == "")
  {
    echo '<script>alert("Invalid Id or Password gg");</script>';
  }
  $sql = "Select * from userdetails where id='$email' and password='$pwd'";
  $res = mysqli_query($conn, $sql);
  $n = mysqli_num_rows($res);

  if ($n == 0) {
    echo '<script>alert("Invalid Id or Password");</script>';
  } else {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $row['name'];
    $_SESSION['photo'] = $row['photo'];
    header('Location:mailbox.php');
    exit();
  }
}
?>
<!-- sign up code -->
<?php
if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd1'];
  $sql = "INSERT INTO `userdetails` (`id`, `name`, `phone`, `password`, `photo`) VALUES ('$email', '$name', '$phone', '$pwd','avatars/avatar.png')";
  if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
  } else {
    echo "<script>alert('Registration Failed');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <a href="index.html" id="logo"><img src="assets/images/logomain.png" alt=""></a>
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd" placeholder="Password" />
          </div>
          <input type="submit" name="login" value="Login" class="btn solid" />


        </form>
        <form action="#" method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <input type="number" name="phone" placeholder="phone number" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd1" placeholder="Password" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd2" placeholder="Confirm Password" />
          </div>
          <input type="submit" class="btn" name="signup" value="Sign up" onClick="return validate()" />

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="assets/images/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="assets/images/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });
  </script>
</body>
<?php include './includes/bottomJsLinks.php'; ?>
</html>