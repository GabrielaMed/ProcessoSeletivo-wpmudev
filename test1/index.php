<?php
include ('checkLogin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Blog</title>
</head>

<body>
  <header>
    <div class="login">
      <form method="post">
        <input type="submit" class="btn-login" name="loggedin" value="LOGIN"></input>
      </form>
    </div>
  </header>

  <?php
  if (isset($_POST['loggedin'])) {
    $loggedin = true;
  }
  else{
    $loggedin = false;
  }
  ?>

  <section class="posts">
    <div class="post-card">
      <div class="name-id">
        <h1>Patrik&#160;</h1>
        <h2><?php echo checkLogin($loggedin);?></h2>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, nisi. Aspernatur maxime, veritatis voluptatibus accusantium labore impedit totam harum exercitationem, odit eos iste pariatur est aut cum ullam, provident dolor?</p>
    </div>
    <div class="post-card">
      <div class="name-id">
        <h1>Esther&#160;</h1>
        <h2><?php echo checkLogin($loggedin);?></h2>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, nisi. Aspernatur maxime, veritatis voluptatibus accusantium labore impedit totam harum exercitationem, odit eos iste pariatur est aut cum ullam, provident dolor?</p>
    </div>
    <div class="post-card">
      <div class="name-id">
        <h1>Debora&#160;</h1>
        <h2><?php echo checkLogin($loggedin);?></h2>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, nisi. Aspernatur maxime, veritatis voluptatibus accusantium labore impedit totam harum exercitationem, odit eos iste pariatur est aut cum ullam, provident dolor?</p>
    </div>
  </section>
</body>

</html>