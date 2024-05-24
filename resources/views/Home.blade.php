<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Login</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tautan ke jQuery (diperlukan oleh Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tautan ke Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/Home.css">
    

</head>
<body>   
    <!-- Section Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light px-5">
            <img class="navbar-brand" src="/image/brand.png" alt="Brand Image">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="Home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Recipes">RECIPES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="UploadRecipe">CREATE YOUR RECIPE</a>
                    </li>
                    <!-- Baru Ditambahin -->
                    <li class="nav-item">
                        <!-- Dropdown dengan ikon profil -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/image/picProfil.png" alt="Profile Icon"> <!-- Ganti picProfil.png dengan gambar ikon profil Anda -->
                                <span id="profileText">Hi, {{ Auth::user()->name }}<span id="usernamePlaceholder"></span></span>
                            </a>
                            <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                <!-- Isi dropdown menu dengan gambar ikon -->
                                <a class="dropdown-item" href="Profil">
                                    <img src="/image/picMyAcc.png" alt="My Account Icon"> My Account
                                </a>
                                <a class="dropdown-item" href="MyRecipe">
                                    <img src="/image/picMyRecipe.png" alt="My Recipe Icon"> My Recipe
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <img src="/image/picLogOut.png" alt="Log Out Icon"> Log Out
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Modal Logout Start -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-gray-200">
                                    <img src="/image/picLogout2.png" alt="Log Out 2 Icon">
                                    <h5 class="modal-title text-xm font-weight-bold" id="logoutModalLabel">LOGOUT!</h5>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to logout? </br>
                                    Once you logout you need to login again. Are you Ok?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-cancle shadow-lg waves-effect" data-bs-dismiss="modal">
                                        <i class="fas"></i> Cancel
                                    </button>
                                    <button type="button" class="btn btn-logout shadow-lg waves-effect" onclick="logout()">
                                        <i class="fas"></i> Yes, Logout!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Logout End -->

                    <script>

                        function logout() {
                            window.location.href = "/logout";
                        }
                    </script>

                    <!-- Section Script profil -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Mendapatkan nama pengguna dari data yang telah disimpan saat registrasi
                            var username = localStorage.getItem("username"); // Anda harus mengatur "username" setelah proses registrasi
                        
                            // Memperbarui teks nama pengguna di profil jika nama pengguna tersedia
                            if (username) {
                                var usernamePlaceholder = document.getElementById("usernamePlaceholder");
                                usernamePlaceholder.textContent = username;
                            }
                        });
                    </script>
                    <!-- End Section Script profil -->
                </ul>
            </div>
                        
        
    </nav>
    <!-- End Section Navbar -->

    <!-- Section Opening-->
    <div class="main-section justify-content-center">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 tagline py-5 col-sm-12">
                    <h1><strong>Discover Your <br> Health Secret  with <br>MealMate!</strong></h1><br>
                    <p>
                        Calculate your calorie consumption quickly and accurately, and find recipes that suit you! Start Your Journey Towards a Better Healthy Life with MealMate Now!
                    </p>
                </div>
                <div class="Pic1Home d-flex flex-column align-items-end col-md-6 py-5 col-sm-12 ">
                    <img src="/image/Pic1Home.png" class="img-fluid"/>
                    <button id="Explore Menu"  class="register btn mt-3  ">Explore Menu</button>
                </div>
            </div>
        </div>
    </div><br>
    <!-- End Section Opening-->

    <!-- Section Our Services-->
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h2><strong>Our Services</strong></h2>

                <div class="contentOS container">
                    <div class="row">
                        <div class="col">
                            <img src="/image/picChildLP1.png" alt="picChild1 Landing Page" style="max-width: 110px; margin-bottom: 1rem;"> <br>
                            <a class="desOS" style="color:black;">Access a variety of healthy recipes. Easily create nutritious and delicious meals at home</a>
                        </div>
                        <div class="col">
                            <img src="/image/picChildLP2.png" alt="picChild2 Landing Page" style="max-width: 110px; height: auto; margin-bottom: 1rem;"> <br>
                            <a class="desOS" style="color:black;">Monitor your caloric intake quickly and accurately. Achieve your health goals more effectively</a>
                        </div>
                        <div class="col">
                            <img src="/image/picChildLP3.png" alt="picChild3 Landing Page" style="max-width: 90px; height: auto; margin-bottom: 2rem;"> <br>
                            <a class="desOS" style="color:black; margin-top:-1rem;">Create a healthy menu according to your preferences. Choose your favorite ingredients and adjust their nutritional proportions with ease.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <!--End Section Our Services-->

    <!-- Section Popular Food-->
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h2><strong>Popular Food</strong></h2><br>
                <p>We provide various food recipes with high taste with ratings to see popular food recipes. To see food recipes, go to the "Recipes" menu.</p>

                <div class="contentOS container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict1.png" alt="PFPict1" style="max-width: 90px; height: auto; margin-bottom: -1rem;"> <br>
                                <a  style="margin-bottom: 1rem;">Klean Bowl</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict2.png" alt="PFPict2" style="max-width: 90px; height: auto; margin-bottom: -1rem;"> <br>
                                <a style="margin-bottom: 1rem;">Capcay Vegetable</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict3.png" alt="PFPict3" style="max-width: 90px; height: auto;  margin-bottom: -1rem;"> <br>
                                <a style="margin-bottom: 1rem;">Veg Platter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contentOS container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict1.png" alt="PFPict1" style="max-width: 90px; height: auto; margin-bottom: -1rem;"> <br>
                                <a  style="margin-bottom: 1rem;">Klean Bowl</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict2.png" alt="PFPict2" style="max-width: 90px; height: auto; margin-bottom: -1rem;"> <br>
                                <a style="margin-bottom: 1rem;">Capcay Vegetable</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict3.png" alt="PFPict3" style="max-width: 90px; height: auto;  margin-bottom: -1rem;"> <br>
                                <a style="margin-bottom: 1rem;">Veg Platter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contentOS container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict1.png" alt="PFPict1" style="max-width: 90px; height: auto; margin-bottom: -1rem;"> <br>
                                <a  style="margin-bottom: 2rem;">Klean Bowl</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict2.png" alt="PFPict2" style="max-width: 90px; height: auto; margin-bottom: -1rem;"> <br>
                                <a style="margin-bottom: 2rem;">Capcay Vegetable</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/image/PFPict3.png" alt="PFPict3" style="max-width: 90px; height: auto;  margin-bottom: -1rem;"> <br>
                                <a style="margin-bottom: 2rem;">Veg Platter</a>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
    <!--End Section Popular Food-->

    <!-- Section Footer-->
    <footer>
        <div class="container-fluid mt-5" style="background-color: #6C7E46; padding: 20px;">
                <div class="row mb-4">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="footer-text">
                            <div class="brandFooter">
                                <img src="/image/logoFooter.png" alt="Brand" style="width: 40%;">
                            </div>
                                <div class="captionfooter mt-3">
                                    <p class="card-text" style="margin: 0; line-height: 1.2; color: white;">Unlock a World of Wellness: </p>
                                    <p class="card-text" style="margin: 0; line-height: 1.2; color: white;">Explore Our Bounty of Nutritious Recipes,</p>
                                    <p class="card-text" style="margin: 0; line-height: 1.2; color: white;">Crafting Health and Flavor in Every Bite</p>
                                </div>
                            <div class="social mt-2 mb-3"> 
                                <i class="fa fa-instagram fa-lg"></i> 
                                <i class="fa fa-twitter fa-lg"></i> 
                                <i class="fa fa-linkedin-square fa-lg"></i> 
                                <i class="fa fa-facebook"></i> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4"></div>
                    
                    <div class="Feature col-md-2 col-sm-2 col-xs-2 mt-4">
                        <h5 class="heading">Feature</h5>
                        <ul class="card-text">
                            <li>Recipes</li>
                            <li>Create Your Recipe</li>
                        </ul>
                    </div>
                    <div class="Company col-md-2 col-sm-2 col-xs-2 mt-4">
                        <h5 class="heading">Company</h5>
                        <ul class="card-text">
                            <li>About Us</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>

                <div class="divider mb-4"> </div>
                
                <div class="row" style="font-size:10px; margin-left: 30px;">
                    <div class="col-md-4 col-sm-4 col-xs-4"  style="color: white;">
                        <div class="pull-left">
                            <p><i class="fa fa-copyright"></i> 2024 thezpdesign</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4"></div>

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="pull-right mr-4 d-flex policy" style="color: white;">
                            <div>Terms of Use</div>
                            <div>Privacy Policy</div>
                            <div>Cookie Policy</div>
                        </div>
                    </div>
                </div>
        </div>            
    </footer>
    <!-- End Section Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function logoutAndRedirect() {
            // Lakukan logout di sini
            // Anda bisa menghapus token autentikasi atau melakukan proses logout sesuai kebutuhan Anda
            
            // Setelah logout, arahkan pengguna ke halaman login
            window.location.href = '/login'; // Redirect ke URL logout
        }
    </script>
</body>
</html>
