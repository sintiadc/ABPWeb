<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MealMate - User Profile</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tautan ke jQuery (diperlukan oleh Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tautan ke Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/Profile.css">
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
                    <a class="nav-link" href="Home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Recipes">RECIPES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="UploadRecipe">CREATE YOUR RECIPE</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="Calories">CALORIES</a>
                    </li>
                <!-- Baru Ditambahin -->
                <li class="nav-item active">
                    <!-- Dropdown dengan ikon profil -->
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/image/picProfil.png" alt="Profile Icon"> <!-- Ganti picProfil.png dengan gambar ikon profil Anda -->
                            <span id="profileText">Hi, {{ Auth::user()->username }}<span id="usernamePlaceholder"></span></span>
                        </a>
                        <div class="dropdown-content" aria-labelledby="navbarDropdown">
                            <!-- Isi dropdown menu dengan gambar ikon -->
                            <a class="dropdown-item" href="My Account">
                                <img src="/image/picMyAcc.png" alt="My Account Icon"> My Account
                            </a>
                            <a class="dropdown-item" href="MyRecipe">
                                <img src="/image/picMyRecipe.png" alt="MyRecipe"> My Recipe
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
                                    <i class="fas fa-window-close"></i> Cancel
                                </button>
                                <button type="button" class="btn btn-logout shadow-lg waves-effect" onclick="logout()">
                                    <i class="fas fa-sign-out-alt"></i> Yes, Logout!
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

    <!-- Section direktori-->
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="directory-text">Home / My Account / General</span>
            </div>
        </div>
    </div>
    <!-- End Section direktori-->

    <!-- Section Profile -->
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding-bottom: 3%; font-size: 25px;">
                <strong>Personal Data</strong>
            </div>
            <div class="col-3">
                <div class="profile-details">
                    <a class="active" href="Profil">
                        <img src="/image/profile.png" alt="profile" width="30" height="30">
                        General</a>
                    <a href="EditProfile">
                        <img src="/image/seting.png" alt="profile" width="30" height="30">
                        Edit Profile</a>
                    <a href="MyRecipe">
                        <img src="/image/recipe-book.png" alt="profile" width="30" height="30">
                        My Recipe</a>
                </div>
            </div>
            <div class="col-md-6" style="padding-left: 2%; display: flexbox;">
                <div class="col">
                    <img src="/image/profile2.png" alt="profile" width="80" height="80">
                </div> <br>
                <div class="col">
                    <div class="input">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-with-icon">
                            <span id="email" class="form-control input-custom">email@example.com</span>
                        </div>
                    </div> <br>
                    <div class="input">
                        <label for="full name" class="form-label">Name</label>
                        <div class="input-with-icon">
                            <span id="name" class="form-control input-custom">John Doe</span>
                        </div>
                    </div> <br>
                    <div class="input">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-with-icon">
                            <span id="username" class="form-control input-custom">johndoe123</span>
                        </div>
                    </div> <br>
                    <div class="input">
                        <label for="umur" class="form-label">Umur</label>
                        <div class="input-with-icon">
                            <span id="umur" class="form-control input-custom">30</span>
                        </div>
                    </div> <br>
                    <div class="input">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <div class="input-with-icon">
                            <span id="jenis_kelamin" class="form-control input-custom">Laki-laki</span>
                        </div>
                    </div> <br>
                    <div class="input">
                        <label for="berat_badan" class="form-label">Berat Badan</label>
                        <div class="input-with-icon">
                            <span id="berat_badan" class="form-control input-custom">70 kg</span>
                        </div>
                    </div> <br>
                    <div class="input">
                        <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                        <div class="input-with-icon">
                            <span id="tinggi_badan" class="form-control input-custom">180 cm</span>
                        </div>
                    </div> <br>
                </div>
            </div>

        </div>

    </div>
    <!-- End Section Profile -->


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
                <div class="col-md-4 col-sm-4 col-xs-4" style="color: white;">
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


</body>

</html>