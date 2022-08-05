<!-- 
    This is the layout for the admin panel of the marketing site.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- WYSIWYG by tinyMCE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                            href="{{ route('marketing-admin.home') }}"
                            class="nav-link px-5"
                            id="home-link"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="learn-more-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Learn More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contact-us-link">
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.learn-more.reading-programs') }}">Reading Programs</a></li>
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.learn-more.reading-assessment') }}">Online Reading Assessment</a></li>                            
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.learn-more.kids-club') }}">Instant Reader Kids Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.learn-more.faq') }}">FAQs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contact-us-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contact-us-link">
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.contact-us.consultation') }}">Book FREE Online Consultation</a></li>
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.contact-us.career') }}">Start a Career with Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="about-us-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="about-us-link">
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.about-us.founder') }}">Our Founder and Developer</a></li>
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.about-us.testimonials') }}">Testimonials</a></li>
                        </ul>
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
<script src="{{ asset('marketing-site/admin-panel/js/script.js') }}"></script>
<script src="{{ asset('marketing-site/admin-panel/js/form-script.js') }}"></script>
</body>
</html>