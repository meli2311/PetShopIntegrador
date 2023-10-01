<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <!--Styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{route('register')}}" method="post">
                @csrf
                <h1>Crear Cuenta</h1>
                <span>Ingrese los siguientes datos para registrarse</span>
                <input type="text" name="name" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="password_confirmation" placeholder="Password confirmation" />
                <button type="submit">Registrarse</button>
                <a class="loginBtn loginBtn--facebook" href="{{url('login/facebook')}}">Ingresar con facebook</a>
                <a class="loginBtn loginBtn--google" href="{{url('/login-google')}}">Ingresar con google</a>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('login')}}" method="post">
                @csrf
                <h1>Iniciar Sesion</h1>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Olvido su contraseña?</a>
                <button type="submit">Ingresar</button>
                <a class="loginBtn loginBtn--facebook" href="{{url('login/facebook')}}">Ingresar con facebook</a>
                <a class="loginBtn loginBtn--google" href="{{url('/login-google')}}">Ingresar con google</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido!</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Ingresar</button>
                    
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, PetLovers!</h1>
                    <p>Ingresa tus datos personales y comienza esta maravillosa experiencia.</p>
                    <button class="ghost" id="signUp">Ingresar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>
