
<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <script src="/libs/jquery-3.4.0.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.min.js"></script>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="index.php?r=login/do_login" method="post">
      <img class="mb-4" src="/images/peppa.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="userId" type="text" id="inputEmail" class="form-control" placeholder="学号或者工号" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>
</body>
</html>
