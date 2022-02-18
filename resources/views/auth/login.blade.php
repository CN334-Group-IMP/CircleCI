<DOCTYPE! html>
    <html>
        <head>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <style>
                body {
                font-family: 'Nunito', sans-serif;
                background-image: url("https://i.pinimg.com/564x/81/2b/d5/812bd598d26f2d4d2a9f3191f95432c7.jpg");
            }
                .emailtext {
                    font-size:35px;
                    color:white;
                    
            }
                .Chad {
                    width: 300px;
                    border: 10px solid #A59378;
                    padding: 55px;
                    margin: auto;
                    margin-top: 60;
                    background-color: #EDDBBF;
                    border-radius:10px;
                }
                .emailbox{
                    width: 300px;
                    height: 40px;
                    border-radius:10px;
                    border:white;
                    
                    
                }

                .passbox{
                    width: 300px;
                    height: 40px;
                    background-color:white;
                    border-radius:10px;
                    border:white;
                }
                .passtext{
                    font-size:35px;
                    color:white;   
                }
                .login_bt{
                    margin-left:100px;
                    margin-top:20px;
                    background-color: #a5815f;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                }
                .rememb{
                    color:#a5815f;
                }
                .forgot_bt{
                    color:#EE22B2;
                }
                .logo{
                    width: 250px;
                    height: 250px;
                    margin-left:825px;
                }
            </style>
        </head>
        
        <img src="https://cdn.discordapp.com/attachments/932300434666835998/932307007258632202/chick.png" class="logo">
        
   

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="Chad">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="emailtext">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <br>  
                <x-jet-input id="email" class="emailbox block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="passtext">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <br>
                <x-jet-input id="password" class="passbox block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="rememb flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="forgot_bt underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br>
                
                <x-jet-button class="login_bt">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </div>    
        </form>
    