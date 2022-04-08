<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Millenium</title>

   

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/dist/css/headers.css" rel="stylesheet">
<link rel="stylesheet" href="assets/dist/css/sweetalert2.min.css" id="theme-styles">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/form-validation.css" rel="stylesheet">
  </head>
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="assets/brand/people-g5c6f0c29c_640.png" alt="" width="72" height="57">
      <h2>Millenium</h2>
      <p class="lead">Prueba de insercción de registros mediante AJAX y PHP.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Registros Creados</span>
        </h4>
        <div class="table-responsive" id="divtable1">
        </div>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Formulario de Registro</h4>
        <form id="myForm" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre" value="" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido" value="" required>
            </div>
          <button class="w-100 btn btn-primary btn-lg" type="button" id="BtnGuardar">Guardar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; <?php echo date('Y');?> Millenium</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="mailto:maicolrueda@gmail.com">maicolrueda@gmail.com</a></li>
      <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=+573217898286&text=Maicol">Whatsapp</a></li>
    </ul>
  </footer>
</div>

    <script src="assets/dist/js/jquery.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/jquery.dataTables.min.js"></script>
    <script src="assets/dist/js/sweetalert2@11.js"></script>
    <script src="assets/dist/js/validate.min.js"></script>
    <script src="assets/dist/js/consultas.js"></script>
  </body>
</html>


