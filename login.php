<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="card card border-secondary">
  <div class=card-header text=success>LOGIN</div>
      <div class="card-body text-success">
      <p class="card-text">
<form>
  <div class="mb-3">
    <label for="Usuariio" class="form-label">Usuario</label>
    <input type="text" class="form-control" name= "nombre" id="nombre"aria-describedby="Nombre" required>
  </div>
  <div class="mb-3">
    <label for="contra" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="pass" required>
  </div>
  <button type="submit" class="btn btn-success" onclick=validar();>Ingresar</button>
    <script>
        function validar(){
            campo1=document.getelementbyid(usuario).values();
            campo2=document.getelementbyid(pass).values();
                if(campo1==" " && campo2==" "){
                    alert("Los campos no pueden estar vacios");
                }
                else{
                    return=false;
                }
        }
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </script>
</body>
</html>