<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wedding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="bg">
  <nav class="navbar navbar-expand-sm bgnav">
    <div class="container-fluid">
      <ul class="navbar-nav  me-auto">
        <li class="nav-item">
          <a class="navbar-brand "><img src ="https://www.freepnglogos.com/uploads/wedding/bride-and-groom-wedding-png-transparent-image-10.png" height="35"></a>
        </li>
        <li class="nav-item">
         <a class="navbar-brand lgname" href="project"> Home </a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand lgname" href="destination"> Destination</a>
         </li>
         <li class="nav-item">
          <a class="navbar-brand lgname" href="about"> About Us </a>
         </li>
      </ul>
        <ul class="navbar-nav ">
		<a href="login">
          <li class="nav-item me-4">
            <button type="button  "  class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signin">LOG IN</button>
          </li></a>
		  <a href="register">
          <li class="nav-item">
            <button type="button " class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signup">REGISTER</button>
          </li></a>
        </ul>
        
    </div>
</nav>
<div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">SIGN IN </h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">Enter Your Username/Email:</label>
            <input type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Enter Your Password:</label>
            <input type="password" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn w-100 ">LOG IN</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">SIGN UP</h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">Enter Your Username/Email:</label>
            <input type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Enter Your Password:</label>
            <input type="password" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Confirm Password:</label>
            <input type="password" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn w-100 ">REGISTER</button>
      </div>
    </div>
  </div>
</div>
<div class="container ab">
  <div class="row">
    <div class="col-sm-5">
      <h3>Designer Events Inc</h3>
      <p>We are a Ludhiana-based boutique wedding planner and décor designer.
         We plan your wedding in collaboration with you, from the initial concept to the wedding execution. 
         We choreograph your vision and make it a reality.
         We also attend to the smallest details and ensure that the family is stress-free on the big day.
      </p>
    </div>
  <div>
    <a href="login">
    <button type="button" class="btn btn-dark mt-2 btn-lg">Get Started!</button>
    </a>
  </div>
</body>
</html>
