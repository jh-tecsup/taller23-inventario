<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <!-- Custom styles for this template -->
    <link href="/signin.css" rel="stylesheet" />
</head>
<body class="text-center">
<main class="form-signin">
  <form method="post" action="/autenticar/login">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <div class="form-floating">
        <input type="email" class="form-control" name="email" value="admin@mail.com" placeholder="name@example.com" />
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="clave" placeholder="Contraseña" />
        <label for="floatingPassword">Contraseña</label>
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Recuérdame
        </label>
    </div>
    <button type="submit" class="w-100 btn btn-lg btn-primary">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">CodiGO &copy; Tecsup</p>
  </form>
</main>
</body>