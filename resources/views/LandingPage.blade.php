<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>LandingPage</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/LandingPage.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light px-5">
            <img class="navbar-brand" src="/image/brand.png" alt="Brand Image">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="SignUp">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login">Login</a>
                    </li>
                </ul>
            </div>
    </nav>

    <main>

        <img class="pic1LP" src="/image/pic1LP.png" alt="Pic1 Landing Page">

        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/image/picChildLP1.png" alt="picChild1 Landing Page" style="max-width: 110px;"> <br>
                    <a style="color:#6C7E46;">Access a variety of healthy recipes. Easily create nutritious and delicious meals at home</a>
                </div>
                <div class="col">
                    <img src="/image/picChildLP2.png" alt="picChild2 Landing Page" style="max-width: 110px; height: auto;"> <br>
                    <a style="color:#6C7E46;">Monitor your caloric intake quickly and accurately. Achieve your health goals more effectively</a>
                </div>
                <div class="col">
                    <img src="/image/picChildLP3.png" alt="picChild3 Landing Page" style="max-width: 90px; height: auto;"> <br>
                    <a style="color:#6C7E46;">Create a healthy menu according to your preferences. Choose your favorite ingredients and adjust their nutritional proportions with ease.</a>
                </div>
            </div>
        </div>
        

    </main>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('.navbar-toggler').click(function(){
                $('.navbar-collapse').toggleClass('show');
            });
        });
    </script>
</body>
</html>
