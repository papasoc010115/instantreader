<!-- 
    This is the layout for the admin panel of the marketing site

    by: rmhizon
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IR Admin Panel</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- User-defined CSS -->
    <link rel="stylesheet" href="{{ asset('marketing-site/admin-panel/styles.css') }}">
    <!-- JavaScript Bundle with Popper (For Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- What You See is What You Get -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
</head>
<body>
<!-- NAVIGATION -->
<div class="container-fluid navbar-container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <span class="navbar-brand"></span>
            <img
                    src="{{ asset('marketing-site/admin-panel/img/logo.png') }}"
                    alt="logo"
                    class="d-inline-block align-top"
                    width="185"
                />
            </span>

            <!-- toggler (mobile mode) -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#toggleMobileMenu"
                aria-controls="toggleMobileMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto text-center">
                    <li>
                        <a
                            href="/admin/home"
                            class="nav-link px-5"
                            id="home-link"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="/admin/learn-more"
                            class="nav-link px-5"
                            id="learn-more-link"
                            >Learn More</a
                        >
                    </li>
                    <li>
                        <a
                            href="/admin/contact-us"
                            class="nav-link px-5"
                            id="contact-us-link"
                            >Contact Us</a
                        >
                    </li>
                    <li>
                        <a
                            href="/admin/about-us"
                            class="nav-link px-5"
                            id="about-us-link"
                            >About Us</a
                        >
                    </li>
                    <li>
                        <a
                            href="/admin/additional-resources"
                            class="nav-link px-5"
                            id="additional-resources-link"
                            >Additional Resources</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- END OF NAVIGATION -->
    @yield('content')

<script src="{{ asset('marketing-site/admin-panel/script.js') }}"></script>
</body>
</html>