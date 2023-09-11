<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Bootstrap Example</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-cssgrid">

  <?php include_once "navbar.php"; ?>

  <div class="col-8">

    <div class="grid text-center">
      <div class="g-col-6" style="height: 250%;">1</div>
      <div class="g-col-6">2</div>

      <div class="g-col-3 g-start-7">3</div>
      <div class="g-col-3" style="">4</div>
    </div>

  </div>




  
  <div class="col-4">

    <?php include_once "carousel.php"; ?>

  </div>
  <div class="col-12">
    Footer
  </div>


</body>

</html>