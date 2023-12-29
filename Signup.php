<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DispatchGuy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Place an Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Request Quote</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashboard
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Signup.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <div class="container">
       <form method="post" action="signup-process.php">
	     <div class="mb-3">
             <label class="form-label">First name</label>
             <input class="form-control" name="fname">
         </div>
         <div class="mb-3">
              <label class="form-label">Last name</label>
              <input class="form-control" name="lname">
         </div>    
		 <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
         </div>
		 <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
         </div>
		 <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="password-confirm">
         </div>
		 <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit</button>
         </div>
	   </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>