<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/SignUp.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tautan ke jQuery (diperlukan oleh Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tautan ke Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/Home.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <img class="picSignUp" src="/image/picWelcome.png" alt="Pic Sign Up">
            </div>
            <div class="col">
                <div class="container  py-4">
                    <div class="row">
                        <div class="col">
                            <h1 class="JudulSignUp py-5"><strong>Create your account</strong></h1>

                            <h5>Welcome!</h5><br>
                            <form method="post" action="{{ route('register.submit') }}"> <!-- Tentukan action untuk mengirimkan data ke controller -->
                                @csrf
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="name" type="name" class="form-control" name="name" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <label for="UserName">User Name</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="username" type="username" class="form-control" name="username" placeholder="User Name" />
                                </div>
                                <div class="form-group">
                                    <label for="Umur">Age</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="umur" type="umur" class="form-control" name="umur" placeholder="Age" />
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Gender</label>
                                    <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                        <option value="" selected disabled>Choose Your Gender</option>
                                        <option value="Laki-laki">Male</option>
                                        <option value="Perempuan">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="BeratBadan">Body Weight</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="beratbadan" type="beratbadan" class="form-control" name="berat_badan" placeholder="Body Weight" />
                                </div>
                                <div class="form-group">
                                    <label for="TinggiBadan">Body Height</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="tinggibadan" type="tinggibadan" class="form-control" name="tinggi_badan" placeholder="Body Height" />
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Confrim Password">Confirm Password</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
                                </div> <br>
                                <button id="Register" type="submit" class="register btn">Register</button></br></br>

                                <center>
                                    <span>Already have an account ? </span>
                                    <span><a href="Login" class="link-succes link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a></span>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registration Successful!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your registration was successful. Click OK to proceed to login.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="okButton">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });

        $('#okButton').click(function() {
            window.location.href = "{{ route('login') }}";
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>