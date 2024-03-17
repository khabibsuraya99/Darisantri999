<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Darisantri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="../asset/image/logo_atas.png" rel="icon">  
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script>
        var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
        };


        $(document).ready(function(){
            var halaman = getUrlParameter('halaman');

            if(halaman=="berita"){
                $("#isicontent").load("berita.php", function(){
                    hapus_berita();
                    edit_berita();
                });
            }else if(halaman=="setadmin"){
                $("#isicontent").load("set_admin.php", function(){
                });
            }else if(halaman=="cr"){
                $("#isicontent").load("set_lp.php", function(){
                    edit_carrousel();
                });
            }else if(halaman=="karya"){
                $("#isicontent").load("karya_santri.php", function(){
                    hapus_review();
                    hapus_cerpen();
                    hapus_puisi();
                    edit_review();
                    edit_puisi();
                    edit_cerpen();
                });
            }else{
                $("#isicontent").load("home.php");
            }

            //klik menu side bar
            $("#MenuHome").click(function(){
                $("#isicontent").load("home.php");
            });
            
            $("#MenuAdmin").click(function(){
                $("#isicontent").load("set_admin.php",function(){
                });
            });


            $("#MenuLp").click(function(){
                $("#isicontent").load("set_lp.php",function(){
                    edit_carrousel();
                });
            });

            $("#MenuBerita").click(function(){
                $("#isicontent").load("berita.php", function() {
                    hapus_berita();
                    edit_berita();
                });
            });

            $("#MenuKarya").click(function(){
                $("#isicontent").load("karya_santri.php", function() {
                    hapus_review();
                    hapus_cerpen();
                    hapus_puisi();
                    edit_review();
                    edit_puisi();
                    edit_cerpen();
                });
            });
        });

        //fungsi berita ===============
        function hapus_berita(){
            $(".btnHps").click(function(){
                var idhps = this.title;
                window.location.href="berita_hapus.php?id="+idhps;
            });
        }

        function edit_berita(){
            $(".btnEdit").click(function(){
                var idedit = this.title;
                $("#isicontent").load("berita_edit.php?id="+idedit);
            });
        }

        //fungsi hapus karya santri ==========
        function hapus_review(){
            $(".btnHpsReview").click(function(){
                var idhps = this.title;
                window.location.href="hapus_review.php?id="+idhps;
            });
        }

        function hapus_cerpen(){
            $(".btnHpsCerpen").click(function(){
                var idhps = this.title;
                window.location.href="hapus_cerpen.php?id="+idhps;
            });
        }
        function hapus_puisi(){
            $(".btnHpsPuisi").click(function(){
                var idhps = this.title;
                window.location.href="hapus_puisi.php?id="+idhps;
            });
        }

        //edit karya
        function edit_review(){
            $(".btnEditReview").click(function(){
                var idedit = this.title;
                $("#isicontent").load("edit_review.php?id="+idedit);
            });
        }
        function edit_cerpen(){
            $(".btnEditCerpen").click(function(){
                var idedit = this.title;
                $("#isicontent").load("edit_cerpen.php?id="+idedit);
            });
        }

        

        function edit_puisi(){
            $(".btnEditPuisi").click(function(){
                var idedit = this.title;
                $("#isicontent").load("edit_puisi.php?id="+idedit);
            });
        }

        //edit carrousel
        function edit_carrousel(){
            $(".btnEditCr").click(function(){
                var idedit = this.title;
                $("#isicontent").load("set_cr.php?id="+idedit);
            });
        }

        


        </script>

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"><i class="fa fa-hashtag me-2"></i>Admin Area</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../asset/image/logo_atas.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['username']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../index.php" target="blank" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Menu Utama User</a>
                    <a href="#" class="nav-link" id="MenuBerita" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Berita</a>
                    <a href="#" class="nav-link" id="MenuKarya" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Karya Santri</a>
                
                    <a href="#" id="MenuLp" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Set Landing Page</a>
                    <a href="#" id="MenuAdmin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Set Admin</a>
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>    -->
                    

                </div>
            </nav>
            <div class="container-fluid fixed-botton">
                <div class="bg-light rounded-top ">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">2024 Darisantri.com</a>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0" width="100%">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item">
                        <a href="logout.php" class="nav-link" >
                            <span class="d-none d-lg-inline-flex hover" style="--bs-link-hover-color-rgb: 15, 135, 84;">Log Out</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="conatiner-fluid text-center">
                <div class="row">
                    <div id='isicontent' class="col-sm-12 col-md-12 col-lg-12 ">
                        isi konten muncul diisni ...!!!
                    </div>
                </div>
            </div>



            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>