<?php include "header.php" ?>

<style>
  body {
    background-color: green !important; 
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
   <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      
    </ul>
  </div>
</nav>

<h2 class="text-center mt-3">Alumni Information System</h2>
<hr>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card text-center">
        <div class="card-header">
          <h3 class="card-title">Login</h3>
        </div>
        <div class="card-body">
          <a href="login.php"><img src="images/v.jpg" alt="login image" width="55%" height="90%"></a>
          <p class="card-text text-muted">Never share your password with anyone.</p>
          <a href="login.php" class="btn btn-primary">Sign In</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center">
        <div class="card-header">
          <h3 class="card-title">Register</h3>
        </div>
        <div class="card-body">
          <a href="login.php"><img src="images/ll.jpg" alt="register image" width="54%" height="54%"></a>
          <p class="card-text text-muted">Always use different password for different site.</p>
          <a href="register.php" class="btn btn-success">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>