<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Admin panel dashboard, hospital management, responsive admin UI" name="keywords">
    <meta content="Admin dashboard for managing patients and hospital information. Responsive and user-friendly." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap and Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        :root {
            --primary: #009CFF;
            --light: #F3F6F9;
            --dark: #191C24;
        }

        /* Spinner Styles */
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }

        #spinner.show {
            visibility: visible;
            opacity: 1;
        }

        /* Button Styles */
        .btn-square {
            width: 38px;
            height: 38px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50px;
        }

        .btn-lg-square {
            width: 48px;
            height: 48px;
        }

        .btn-primary {
            color: #fff;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            background: var(--light);
            transition: 0.5s;
            z-index: 999;
        }

        .sidebar .navbar-nav .nav-link {
            padding: 7px 20px;
            color: var(--dark);
            border-left: 3px solid var(--light);
            border-radius: 0 30px 30px 0;
        }

        .sidebar .navbar-nav .nav-link.active {
            color: var(--primary);
            background: #fff;
            border-color: var(--primary);
        }

        /* Content Styles */
        .content {
            margin-left: 250px;
            min-height: 100vh;
            background: #fff;
            transition: 0.5s;
        }

        /* Responsive Sidebar */
        @media (max-width: 992px) {
            .sidebar {
                margin-left: -250px;
            }

            .sidebar.open {
                margin-left: 0;
            }

            .content {
                margin-left: 0;
            }
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 45px;
            bottom: 45px;
            z-index: 99;
        }
    </style>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-danger"><i class="fa fa-hashtag me-2"></i>VACCINATION</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                       
                        <span class="text-dark">Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="adminindex.php" class="nav-item nav-link active text-dark"><i class="fa fa-tachometer-alt me-2 text-dark"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Admin</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">All Patient Details</a>
                            <a href="typography.html" class="dropdown-item">Report Covid Test</a>
                            <a href="element.html" class="dropdown-item">List of Vaccine</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Hospital</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Register</a>
                            <a href="signup.php" class="dropdown-item">Login</a>
                            <a href="patient.php" class="dropdown-item">List of Patient Details</a>
                            <a href="covidtest.php" class="dropdown-item">Update Covid Test Result</a>
                        </div>
                    </div>
                    <a href="admindex.php" class="nav-item nav-link active text-dark"><i class="fa-solid fa-arrow-right-from-bracket text-dark"></i>Sign Out</a>
                </div>
            </nav>
        </div>
       
        <!-- Content Area -->
        <div class="content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-dark mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0"><i class="fa fa-bars text-danger"></i></a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2 text-dark"></i><span class="d-none d-lg-inline-flex text-dark">Message</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Footer -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#" class="text-danger">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end text-dark">
                            Designed By <a href="#" class="text-danger">HTML Codex</a>
                            <br>Distributed By <a href="https://themewagon.com" target="_blank" class="text-danger">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
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

    <script>
        $(document).ready(function () {
            // Show spinner on load
            setTimeout(function () {
                $('#spinner').removeClass('show');
            }, 1000);
        });

        // Sidebar Toggler
        $('.sidebar-toggler').on('click', function () {
            $('.sidebar, .content').toggleClass('open');
        });

        // Back to Top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });

        $('.back-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
            return false;
        });
    </script>
</body>

</html>
