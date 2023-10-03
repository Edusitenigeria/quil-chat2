<?php 
  
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header style='color: purple;'>Quil-Chat! </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address:</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password:</label>
          <input type="password" class="password" name="password" placeholder="Enter your password" required>
          
          <p style="margin-top: 20px;">Show password <input type="radio" onclick= "checkPassword()" style=" width: 30px; height:15px;" class/></p>
          
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat" style='background-color: purple;'>
        </div>
      </form>
      <div class="link">Not have an account? <a href="index.php" style='color: purple;'>Signup now</a></div>
    </section>
    <center><h5 style='margin-bottom: 10px;'>Developed with 💗</h5></center>
  </div>
  <script>
    function checkPassword () {

const passwordField = document.querySelector('.password');

  if(passwordField.type === "password"){
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}
  </script>
  <script src="javascript/login.js"></script>

  <style>
      header {
        animation: fadeIn 2s ease-in;
        opacity: 1;
      }

      @keyframes fadeIn {
        0% {
          opacity: 0;
          transform: scale(0);
        }

        100% {
          opacity: 1;
          transform: scale(1.0);
        }
      }
    </style>

</body>
</html>
