<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{url('css/login.css')}}" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  </head>
  <body onload="zoom()">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Entrar</h2>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input placeholder="e-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input placeholder="Senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            @error('password')
            <span class="social-text" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
            @error('email')
                <span class="social-text" role="alert">
                    <p>{{ $message }}</p>
                </span>
            @enderror


            <input type="submit" value="Login" class="btn solid"  >


            <p class="social-text">Ou faça login com plataformas sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <h2 class="title">Faça seu cadastro</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome Completo" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="cpf"  class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" type="text" placeholder="CPF" onkeypress="$(this).mask('000.000.000-00');" />
            </div>

            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input id="phone"  class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" type="text" type="tel" placeholder="Telefone" onkeypress="$(this).mask('(00) 0000-00009')" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input placeholder="Senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input placeholder="Confirme sua Senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            @error('name')
            <span class="social-text" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
            @error('email')
            <span class="social-text" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
            @error('cpf')
            <span class="social-text" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
            @error('phone')
            <span class="social-text" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
            @error('password')
            <span class="social-text" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror


            <input type="submit" class="btn" value="Inscrever-se" />
            <p class="social-text">Ou faça login com plataformas sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo aqui?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Inscrever-se
            </button>
          </div>
          <img src="img/logo.svg" class="image" alt=""/>

        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Já possui uma conta?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="{{url('js/login.js')}}"></script>
  </body>
</html>