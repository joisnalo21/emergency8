<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <form class="card-body p-5 text-center" action="../../config/validar_sesion.php" method="post">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <img src="../../assets/images/logos/Emergencia008logo.png" class="img-fluid mb-4" alt="logo" width="150px">
                     <h2 class="fw-bold mb-2 text-uppercase">Ingreso</h2> 
                     
                    <p class="text-white-50 mb-5">Ingrese su usuario y contraseña</p>
      
                    <div data-mdb-input-init class="form-outline form-white mb-4">
                      <label class="form-label" for="typeEmailX">Usuario</label>
                      <input type="text" id="typeEmailX" class="form-control form-control-lg" name="usuario"/>
                    </div>
      
                    <div data-mdb-input-init class="form-outline form-white mb-4">
                      <label class="form-label" for="typePasswordX">Contraseña</label>
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" name="contraseña"  />
                    </div>
      
      
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" value="ingresar">Login</button>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>