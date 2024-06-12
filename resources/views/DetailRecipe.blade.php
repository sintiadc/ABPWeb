<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>DetailRecipe</title>
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
                        <a class="nav-link" href="/Home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Recipes">RECIPES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/UploadRecipe">CREATE YOUR RECIPE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Calories">CALORIES</a>
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
                                <a class="dropdown-item" href="/Profil">
                                    <img src="/image/picMyAcc.png" alt="My Account Icon"> My Account
                                </a>
                                <a class="dropdown-item" href="/MyRecipe">
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
            <a href="/Home">Home</a> / <a href="/Recipes">Recipes</a> / <a href="">Detial Recipe</a> 
            </div>
        </div>
    </div>
    <!-- End Section direktori-->

    <!-- Section Detail Recipe-->
    <div class="container" id="recipe-detail-container">
        <div class="row">
            <div class="col-4">
                <div class="imgRecipe">
                    <center>
                    <img src="" alt="Recipe Image" id="recipe-image"> 
                    </center>
                </div>
                <div class="recipe-details">
                    <p class="recipe-name" id="recipe-name"></p>
                    <p class="recipe-serving" id="recipe-serving"></p>
                    <p class="recipe-time" id="recipe-time"></p>
                    <button type="button" class="like btn" id="likeButton" onclick="handleLike()">
                        <i class="fas fa-thumbs-up"></i>
                        <span class="like-count" id="likeCount">0 Likes</span>
                    </button>
                    <a href="#" class="bookmark-link" id="bookmarkLink">
                        <i class="fas fa-bookmark"></i>
                    </a>
                </div>
            </div> 
            <div class="col-8">
                <div class="recipe-info-detail">
                    <h3><strong class="Ingredients">Ingredients</strong></h3>
                    <div class="recipe-box"><p class="recipe-ingredients" id="recipe-ingredients"></p></div><br>
                    <h3><strong>Instructions</strong></h3>
                    <div class="recipe-box"><p class="recipe-instructions" id="recipe-instructions"></p></div><br>
                    <button type="button" class="btn btn-done">Done</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Replace with the actual recipe ID you want to fetch
            // Dapatkan path URL saat ini
            const currentUrl = window.location.pathname;

            // Pisahkan path URL menjadi array
            const urlParts = currentUrl.split('/');

            // Ambil nilai id dari path URL
            const recipeId = urlParts[urlParts.length - 1];

            $.ajax({
                url: `/resep/get-recipe/${recipeId}`,
                method: 'GET',
                success: function(data) {
                    $('#recipe-image').attr('src', data.picture);
                    $('#recipe-name').text(data.name);
                    $('#recipe-serving').text(`Servings: ${data.servings}`);
                    $('#recipe-time').text(`Prep Time: ${data.prep_time}`);
                    $('#recipe-author').text(`Author: ${data.author} | ${new Date(data.created_at).toLocaleDateString()}`);

                    $('#recipe-ingredients').html(`${data.ingredients}`);
                    $('#recipe-instructions').html(`${data.detail_resep}`);
                    $('#likeCount').text(`${data.like} Likes`);
                },
                error: function(error) {
                    console.log("Error fetching recipe:", error);
                }
            });

            $('#bookmarkLink').click(function(e) {
                e.preventDefault();
                    const userId = 1; // Replace with actual user ID

                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/v1/myresep/addBookmark/',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            user_id: userId,
                            resep_id: recipeId
                        }),
                        success: function(response) {
                            alert(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error:", error);
                            alert('Failed to bookmark the recipe.');
                        }
                    });
            });
        });

        function handleLike() {
            // Handle like functionality here
        }
    </script>

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