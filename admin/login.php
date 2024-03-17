<?php

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <!-- Favicons -->
    <link href="../asset/image/logo_atas.png" rel="icon">

    <style>
        .form-signin {
            max-width: 330px;
            padding: 1rem;
            margin-top: 80px !important;
        }

        </style>

</head>

<?php
    if(isset($_GET['register'])){
        if($_GET['register'] == 'success'){
            echo "sukses daftar";
        }
    }
?>

  <body style="background-color:#EAF6F6">
    <div class="container p-5">
        <div class="row mt-5 mb-5 rounded-end-2" style="background-color:#54BAB9" >
            <div class="col-lg-6 col-md-12" style="background-color:#9ED2C6">
                <main class="form-signin w-100 m-auto text-center">
                    <form action="login_proses.php" method="POST">
                    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

                    <div class="form-floating">
                        <input type="email" name="ipEmail" class="form-control focus-ring" id="floatingInput" placeholder="name@example.com" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" name="ipPw" class="form-control focus-ring" id="floatingPassword" placeholder="Password" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-success w-50 py-2 mt-3 rounded" type="submit">Sign in</button>
                    
                    </form>
                    
                    
                    <p class="mt-4 mb-3 text-body-secondary">&copy; 2024 Darisantri.com</p>
                </main>
            </div>

            <div class="col-lg-6 col-md-12 position-relative rounded" >
                <div class="m-auto align-middle text-center">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img src="../asset/image/logo_dsBesar.png"  alt="Logo Darisantri.com" width="350px">
                        <p style="color:white; margin-top:5px;">"Melukis Kisah, Menggapai Barokah"</p>
                </div>
                    
                </div>
            </div>
        </div>
    </div>


    
        



        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- <script> mengetes jquery apakah sudah siap digunakan dalam program ini
        $(document).ready(function(){
            alert('redi');
        });
    </script> -->

    <script>
        $(document).ready(function(){

            $("#registPw2").blur(function(){
                var pw1 = $("#registPw").val();
                var pw2 = $("#registPw2").val();

                if(pw1 != pw2){
                    $("#registPw").val("");
                    $("#alertPw").html("Password Gaboleh Sama BosZszZzz");
                }else{
                    $("#alertPw").html("");
                }
            });
        });

    </script>






</body>
</html>