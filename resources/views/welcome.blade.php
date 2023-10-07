<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petshop</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- STYLE --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
    
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  

</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
             {{-- <form method="POST" action="{{ route('register') }}">
              @csrf
      
              <!-- Name -->
              <div>
                  <x-input-label for="name" :value="__('Name')" />
                  <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                      autofocus autocomplete="name" />
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
      
              <!-- Email Address -->
              <div class="mt-4">
                  <x-input-label for="email" :value="__('Email')" />
                  <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                      required autocomplete="username" />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
      
              <!-- Password -->
              <div class="mt-4">
                  <x-input-label for="password" :value="__('Password')" />
      
                  <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                      autocomplete="new-password" />
      
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
      
              <!-- Confirm Password -->
              <div class="mt-4">
                  <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
      
                  <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                      name="password_confirmation" required autocomplete="new-password" />
      
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
      
              <div class="flex items-center justify-end mt-4">
                  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                      href="{{ route('login') }}">
                      {{ __('Already registered?') }}
                  </a>
      
                  <x-primary-button class="ml-4">
                      {{ __('Register') }}
                  </x-primary-button>
              </div>
            </form>  --}}
            
             <form  method="post" action="{{ route('register') }}">
                @csrf
                <h1>Crear Cuenta</h1>
                <span>Ingrese los siguientes datos para registrarse</span>
                <input placeholder="nombres"  x-input-label for="name" :value="__('Name')" x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name"  x-input-error :messages="$errors->get('name')" class="mt-2"/>
                <input placeholder="email" x-input-label for="email" :value="__('Email')" x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username"  x-input-error :messages="$errors->get('email')" class="mt-2"/>
                <input placeholder="contraseña" x-input-label for="password" :value="__('Password')" x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" x-input-error :messages="$errors->get('password')" class="mt-2"/>
                <input placeholder="confirmar contraseña" x-input-label for="password_confirmation" :value="__('Confirm Password')" x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                <button type="submit" x-primary-button class="ml-4">{{ __('Register') }}</button>
                <a class="loginBtn loginBtn--facebook" href="">Ingresar con facebook</a>
                <a class="loginBtn loginBtn--google" href="/google-auth/redirect">Ingresar con google</a>
            </form> 
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h1>Iniciar Sesion</h1>
                <input placeholder="Email" x-input-label for="email" :value="__('Email')"  x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" x-input-error :messages="$errors->get('email')" class="mt-2" />
                <input placeholder="Password" x-input-label for="password" :value="__('Password')" x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" x-input-error :messages="$errors->get('password')" class="mt-2"/>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
                </a>
                <button type="submit" x-primary-button class="ml-3">{{ __('Log in') }}</button>
                <a class="loginBtn loginBtn--facebook" href="">Ingresar con facebook</a>
                <a class="loginBtn loginBtn--google" href="/google-auth/redirect">Ingresar con google</a>
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