<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Login</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/SignUp.css">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <img class="picSignUp" src="/image/picWelcome.png" alt="Pic Sign Up">
            </div>
            <div class="col">
                <div class="forminput container py-5">
                    <div class="row">
                        <div class="col">
                            <h1 class="JudulSignUp py-5 mt-5"><strong>Login account</strong></h1>

                            <h5>Welcome!</h5><br>
                            <form method="POST" action="{{ route('login.submit') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus/>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password"/>
                                </div> 
                                <br>
                                <button id="login" type="submit" class="register btn">Login</button></br></br>

                                <center>
                                <span>Don't have an account ? </span>
                                <span><a href="SignUp" class="link-succes link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Register</a></span>
                            </form>
                            @if(session('error'))
                                <div id="errorMessage" class="error-message" style="background-color: rgba(255, 0, 0, 0.2); padding: 10px; border-radius: 10px;">
                                    <strong style="color: red;">{{ session('error') }}</strong>
                                    <br>
                                    Please check your email or password again.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
