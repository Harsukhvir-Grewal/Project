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
<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <h1>Hello, <?= session()->get('firstname') ?></h1>
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
    <a href="destination">
    <button type="button" class="btn btn-dark mt-2 btn-lg">Get Started!</button>
    </a>
  </div>
</body>
</html>
