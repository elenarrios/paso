<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
<form action="index2.php" method="GET" >
  <div class="mb-3">
    <label for="exampleInputEmail1" name="mesa" class="form-label">Numero de mesa</label>
    <input type="number"name="mesa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="contrseña" class="form-label">Password</label>
    <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
