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
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- WYSIWYG by tinyMCE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Moment for converting time -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.js"></script>
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
                    <li class="px-5">
                        <a
                            href="{{ route('marketing-admin.home') }}"
                            class="nav-link px-5"
                            id="home-link"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item dropdown px-5">
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
                    <li class="nav-item dropdown px-5">
                        <a class="nav-link dropdown-toggle" href="#" id="contact-us-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contact-us-link">
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.contact-us.consultation') }}">Book FREE Online Consultation</a></li>
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.contact-us.career') }}">Start a Career with Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-5">
                        <a class="nav-link dropdown-toggle" href="#" id="about-us-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="about-us-link">
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.about-us.founder') }}">Our Founder and Developer</a></li>
                            <li><a class="dropdown-item" href="{{ route('marketing-admin.about-us.testimonials') }}">Testimonials</a></li>
                        </ul>
                    </li>
                    <li class="px-5">
                        <a
                            href="/admin/additional-resources"
                            class="nav-link"
                            id="additional-resources-link"
                            >Additional Resources</a
                        >
                    </li>
                    <li class="nav-item dropdown px-5">
                        <div class="horizontal-flexbox-container" id="account-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <button class="nav-link dropdown-toggle btn btn-secondary account-btn" href="#">
                                <span class="account-text">Account</span>
                            </button>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="account-link">
                            <li><span class="dropdown-item">{{Auth::user()->name}}</span></li>

                            @if (Auth::user()->getAdminType() === 'superuser')
                            <li>
                                <div class="dropdown-item account-dropdown-form">
                                    <a class="btn btn-link" href="{{ route('marketing-admin.user.add') }}">Add User</a>
                                </div>
                            </li>
                            @endif

                            <li>
                                <div class="dropdown-item account-dropdown-form">
                                    <a class="btn btn-link" href="{{ route('marketing-admin.logs') }}">View Logs</a>
                                </div>
                            </li>

                            <li>
                                <form method="POST" class="dropdown-item account-dropdown-form" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="btn btn-link"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        Log Out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- END OF NAVIGATION -->
    @yield('content')
<script src="{{ asset('marketing-site/admin-panel/js/script.js') }}"></script>
<script src="{{ asset('marketing-site/admin-panel/js/form-script.js') }}"></script>
@yield('otherScript')
</body>
</html>