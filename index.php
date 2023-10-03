<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header style="position: relative;">Welcome To <h4 style='color: purple;'>Quil-Chat!</h4> <img src="quil-chat.jpg" style="height: 56px; width: 46px; position: absolute; right: 0; top:0; margin-top: 10px;"></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label>Confirm Password</label>
          <input type="password" name="password" placeholder="Confirm password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Get Ready to Chat" style='background-color: purple;'>
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php" style='color: purple;'>Login now</a></div>
    </section>
    <center><h5 style='margin-bottom: 10px;'>Developed with 💗</h5></center>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>


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
