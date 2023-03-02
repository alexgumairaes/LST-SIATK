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

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

  <title>{{ $title }}</title>
</head>
<body>

  <nav class="navbar navbar-dark bg-dark" id="nav-login">
    <div class="container">
      <a class="navbar-brand" href="#">
        Sistem Informasi Aset Tanah dan Kendaraan
      </a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-6 text-center">
        <form class="box" method="post" action="/index">
          @csrf
          <div class="" id="form">
            <h4 style="font-weight: bold">Welcome</h4>
            <div class="row" style="margin-top: 16px">
                <div class="col-12 my-auto">
                  <label id="label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="example@mail.com" name="username" required autofocus value="{{old('username')}}">
                </div>
            </div>
            <div class="row" style="margin-top: 16px">
              <div class="col-12 my-auto">
                <label id="label">Password</label>
                <input type="password" class="form-control @error('username') is-invalid @enderror" id="password" placeholder="password" name="password" required value="{{old('username')}}">
                <div class="group">
                  {{-- <span id="icon" class="fa iconify-inline m-auto" data-icon="mdi:eye-off-outline" style="font-size: 24px"></span> --}}
                  <i id="icon" class="fa fa-eye-slash"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 19px">
            <div class="col-lg-12 my-auto">
              <button id="login-btn" type="submit" class="btn btn-lg btn-block" title="Login">Login</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-6 text-center">
        <div class="row">
          <div class="col">
            <img src="{{ asset('img/ilustrasi.png') }}" alt="" id="ilustration">
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script>
    var input = document.getElementById('password'),
        icon = document.getElementById('icon');
    
        icon.onclick = function () {
    
          if(input.className == 'form-control') {
            input.setAttribute('type', 'text');
            icon.className = 'fa fa-eye';
            input.className = 'form-active';
    
          } else {
            input.setAttribute('type', 'password');
            icon.className = 'fa fa-eye-slash';
            input.className = 'form-control';
          }
    
        }
  </script>
</body>
</html>