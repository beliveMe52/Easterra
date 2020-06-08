<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



    <div class="container">
     <div class="py-5 text-center">
       <!-- <img class="d-block mx-auto mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
       <h2>Авторизация</h2>


     </div>

     <div class="row">

       <div class="col-md-12 order-md-1">
         <!-- <h4 class="mb-3"></h4> -->
         <form class="needs-validation" method="get" action="/admin">
           @csrf
           <div class="row">
  <div class="col-md-6 mb-3">
    <label for="firstName">First name</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="" value="" required>
    <div class="invalid-feedback">
      Valid first name is required.
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="lastName">Last name</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="" value="" required>
    <div class="invalid-feedback">
      Valid last name is required.
    </div>
  </div>
</div>















           <hr class="mb-4">
           <button class="btn btn-primary btn-lg btn-block" type="submit">Go</button>
         </form>
       </div>
     </div>

     <footer class="my-5 pt-5 text-muted text-center text-small">
       <p class="mb-1">&copy; 2020 @SilvanAbuse</p>
       <!-- <ul class="list-inline">
         <li class="list-inline-item"><a href="#">Privacy</a></li>
         <li class="list-inline-item"><a href="#">Terms</a></li>
         <li class="list-inline-item"><a href="#">Support</a></li>
       </ul> -->
     </footer>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
           <script src="form-validation.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
