<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login2.style.css') }}" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&family=Poppins:wght@400;700&family=Quicksand:wght@700&display=swap" rel="stylesheet">

  <title>{{ $title }}</title>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-6 text-center left">
        <form class="box" method="post" action="/index">
          @csrf
          <h4 style="font-weight: bold; margin-bottom: 18px">Welcome</h4>
          <div class="card card-body" id="form">
            <div class="row" style="margin-top: 16px">
                <div class="col-12 my-auto">
                  <label id="label">Username</label>
                  <input type="text" class="line @error('username') is-invalid @enderror" id="username" placeholder="example@mail.com" name="username" required value="{{old('username')}}">
                </div>
            </div>
            <div class="row" style="margin-top: 16px">
              <div class="col-12 my-auto">
                <label id="label">Password</label>
                <input type="password" class="line @error('username') is-invalid @enderror" id="username" placeholder="password" name="username" required value="{{old('username')}}">
              </div>
            </div>
            <div class="row" style="margin-top: 19px">
              <div class="col-lg-12 my-auto">
                <button id="login-btn" type="submit" class="btn btn-lg btn-block" title="Login">Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-6 text-center right">
      </div>
    </div>
  </div>

  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>