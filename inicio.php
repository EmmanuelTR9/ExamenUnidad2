<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="bootstrap/js/jquery.min2.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min2.js"></script>
    <!--FireBase-->
    <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-firestore.js"></script>
    <title>Unidad 2 - AdminBD Inicio de Sesion FireBase</title>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    
</head>
<body>    <body background="img/fondo.jpg"></body>

<div class="container" style="margin-top:80px">
<!-- fixed-top boloquea la barra al top para que no se desplase con el scroll -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<!-- Brand logo de la barra -->
<a class="navbar-brand" href="index.php">Examen Unidad 2</a>

<!-- Toggler/collapsibe Button boton tipo menu-->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Navbar links se agrega un div para activar la clase collapse -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index">Inicio</a>
</li>
</ul>
</div>
</nav>
<div class="jumbotron text-center bg-info">
<div class="container">
        <h2>FORMULARIO DE REGISTRO</h2>
        <p>
            <input type="text" id="curp" placeholder="Introduzca su Curp" class="form-control"/>
        </p>
        <p>
            <input type="text" id="nombre" placeholder="Introduzca su Nombre" class="form-control"/>
        </p>
        <p>
            <input type="text" id="apellidos" placeholder="Introduzca sus Apellidos" class="form-control"/>
        </p>
        <p>
            <input type="text" id="edad" placeholder="Introduzca su Edad" class="form-control"/>
        </p>
        <p>
            <input type="text" id="domicilio" placeholder="Introduzca su domicilio" class="form-control"/>
        </p>
        <p>
            <input type="text" id="municipio" placeholder="Introduzca su Municipio" class="form-control"/>
        </p>
        <button class="btn btn-primary" onclick="agregar()" id="boton">Agregar</button>

        <table class="table my-3">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Curp</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Edad</th>
              <th scope="col">Domicilio</th>
              <th scope="col">Municipio</th>
              <th scope="col">Eliminar</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody id="tabla">
          </tbody>
        </table>
        </div>


        <!--Script Para Inicializara FIREBASE-->
        <script src="app2.js"></script>
        </div>
        </div>

</body>
</html>