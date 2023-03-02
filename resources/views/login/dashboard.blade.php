<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.style.css') }}" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&family=Poppins:wght@400;700&family=Quicksand:wght@700&display=swap" rel="stylesheet">

  <title>{{ $title }}</title>
</head>
<body>
  <div class="container">
    <div class="row" id="dashboard-versi">
      <div class="col-12">
        <p>Login</p>
      </div>
      <div class="row">
        <div class="col-4">
          <a href="/login-1">
            <button class="btn btn-primary">
              Versi 1
            </button>
          </a>
        </div>
        <div class="col-4">
          <a href="/login-2">
            <button class="btn btn-primary">
              Versi 2
            </button>
          </a>
        </div>
        <div class="col-4">
          <a href="/login-3">
            <button class="btn btn-primary">
              Versi 3
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>