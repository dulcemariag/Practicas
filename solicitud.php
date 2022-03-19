<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
</head>
<body>
<div class="card card border-secondary">
<div class=card-head>SOLICITUD</div>
      <div class="card-body text-secondary">
      <p class="card-text">
<div class="mb-3">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" name= "direccion" id="dir"aria-describedby="direccion" required>
  </div>
  <div class="mb-3">
    <label for="fecha" class="form-label">Selecciona tu fecha de nacimiento</label>
    <input type="date" class="form-control" name= "fecha" id="fech"aria-describedby="fecha" required>
  </div>
  <div class="mb-3">
  <div class="btn-group">
  <button class="btn btn-secondary btn-lg" type="button">
    Servicio
  </button>
  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Más Servicios</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Herrero</a></li>
    <li><a class="dropdown-item" href="#">Carpintero</a></li>
    <li><a class="dropdown-item" href="#">Plomero</a></li>
  </ul>
</div>
</div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name= "nombre" id="nombre"aria-describedby="Nombre" required>
  </div>
  <div class="mb-3">
    <label for="horario" class="form-label">Horario</label>
    <input type="time" class="form-control" name= "hora" id="hora"aria-describedby="Nombre" required>
  </div>
  <button type="submit" class="btn btn-secondary">Registrar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</p>
</body>
</html>