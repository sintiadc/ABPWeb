<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/DetailRecipe.css">

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
                    <li class="nav-item active">
                        <a class="nav-link" href="UploadRecipe">CREATE YOUR RECIPE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Calories">CALORIES</a>
                    </li>
                    <!-- Baru Ditambahin -->
                    <li class="nav-item">
                        <!-- Dropdown dengan ikon profil -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/image/picProfil.png" alt="Profile Icon"> <!-- Ganti picProfil.png dengan gambar ikon profil Anda -->
                                <span id="profileText">Hi, {{ Auth::user()->username }}<span id="usernamePlaceholder"></span></span>
                            </a>
                            <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                <!-- Isi dropdown menu dengan gambar ikon -->
                                <a class="dropdown-item" href="Profil">
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


    <!-- Section direktori-->
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="directory-text">Home / Recipes / Detail Recipe</span>
            </div>
        </div>
    </div>
    <!-- End Section direktori-->

    <!-- Section Detail Recipe-->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="imgRecipe">
                    <img src="/image/cardRecipes1.png" alt=""> 
                </div>
                <div class="recipe-details">
                    <p class="recipe-name">Chicken Salad</p>
                    <p class="recipe-type">Vegan</p>
                    <p class="recipe-type">Breakfast</p>
                    <p class="recipe-serving">3-4 Porsi</p>
                    <p class="recipe-time">1 hour 30 minute</p>
                    <p class="recipe-author">Sintia Dwi | 23 April 2024</p>
                    <button type="button" class="like btn" id="likeButton" onclick="handleLike()">
                        <i class="fas fa-thumbs-up"></i>
                        <span class="like-count" id="likeCount">0 Likes</span>
                    </button>
                    
                </div>
            </div> 
            <div class="col-8">
                <div class="recipe-info-detail">
                    <h3><strong class="Ingridients">Ingredients</strong></h3>
                    <div class="recipe-box">
                            <li>2 Boneless, skinless chicken breasts</li>
                            <li>Salt and pepper to taste</li>
                            <li>1 Tablespoon olive oil</li>
                            <li>4 Cups mixed salad greens</li>
                            <li>1 Cup cherry tomatoes, halved</li>
                            <li>1 Cucumber, sliced</li>
                            <li>1/4 Cup red onion, thinly sliced</li>
                            <li>1/2 Cup shredded carrots</li>
                            <li>1/4 Cup sliced almonds (optional)</li>
                            <li>1/4 Cup dried cranberries (optional)</li> </br>
                        <p>For the dressing:</p>
                            <li>1/4 cup plain Greek yogurt</li>
                            <li>2 tablespoons mayonnaise</li>
                            <li>1 tablespoon lemon juice</li>
                            <li>1 teaspoon Dijon mustard</li>
                            <li>1 clove garlic, minced</li>
                            <li>Salt and pepper to taste</li>
                    </div> </br>
                    <h3><strong>Instructions</strong></h3>
                    <ol class="instructions-box"> </br>
                        <li>Season the chicken breasts with salt and pepper on both sides.</li>
                        <li>Heat olive oil in a skillet over medium-high heat. Add the chicken breasts and cook until golden brown and cooked through, about 6-7 minutes per side. Remove from heat and let cool slightly.</li>
                        <li>Once cooled, dice the chicken into bite-sized pieces.</li>
                        <li>In a large bowl, combine the mixed salad greens, cherry tomatoes, cucumber, red onion, shredded carrots, sliced almonds, and dried cranberries (if using).</li>
                        <li>In a separate small bowl, whisk together the Greek yogurt, mayonnaise, lemon juice, Dijon mustard, minced garlic, salt, and pepper to make the dressing.</li>
                        <li>Pour the dressing over the salad ingredients and toss until everything is evenly coated.</li>
                        <li>Add the diced chicken to the salad and gently toss to combine.</li>
                        <li>Serve immediately, or refrigerate for up to 2 hours before serving for flavors to meld.</li>
                        <li>Enjoy your delicious Chicken Salad!</li></br>
                    </ol>
                </div> </br>
                <button type="button" class="btn btn-done">Done</button>
            </div>
        </div>
    </div>
    <!-- End Section Detail Recipe-->

    <!--Section Script count like-->
    <script>
    function handleLike() {
        var button = document.getElementById("likeButton");
        button.classList.toggle("active");
        
        // Mengubah teks tombol dan warna berdasarkan status tombol
        if (button.classList.contains("active")) {
            button.style.backgroundColor = "#48AA33"; // Tombol menjadi hijau saat aktif
            button.style.borderColor = "#48AA33";
        } else {
            button.style.backgroundColor = "#a8ada7"; // Tombol menjadi warna asal saat tidak aktif
            button.style.borderColor = "#bebfc0";
        }
        
        // Mengatur jumlah like
        var likeCount = document.getElementById("likeCount");
        var count = parseInt(likeCount.innerText);
        count = button.classList.contains("active") ? count + 1 : count - 1;
        likeCount.innerText = count + " Likes";
    }
    </script>
    <!--End Section Script count like-->

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