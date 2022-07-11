<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
        <div class="container">
            <a class="logo link scroll" href="javascript:void(0)" title="Logo">
                <!--Logo Default-->
                <img alt="logo" class="logo-dark default" src="agency/img/logo-white.png">
            </a>


            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="agency">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link link scroll active" href="#home">Home</a>
                    <a class="nav-link link scroll" href="#about-us">About Us</a>
                    <a class="nav-link link scroll" href="#portfolio">Our Work</a>
                    <a class="nav-link link scroll" href="#clients">Clients</a>
                    <a class="nav-link link scroll" href="#blog">Our Blog</a>
                    <a class="nav-link link scroll" href="#contact">Contact Us</a>
                    <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                </div>
                <a class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white ml-3" data-animation-duration="500" data-fancybox data-src="#animatedModal"
                   href="javascript:void(0);">Get A Quote
                    <div class="btn-hvr-setting">
                        <ul class="btn-hvr-setting-inner">
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                        </ul>
                    </div>
                </a>
            </div>

            <!--Menu Button-->
            <button class="fullnav-toggler link" id="full-menu-1" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <!--Slider Social-->
            <div class="slider-social">
                <ul class="list-unstyled">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            aria-hidden="true" class="fab fa-instagram"></i></a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            aria-hidden="true" class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Full menu-->
    <div class="nav-holder main style-2 alt-font">

        <!--Menu Button-->
        <button class="fullnav-close link" type="button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <div class="container">
            <div class="shape-left">
                <nav class="navbar full-menu-navigation left">
                    <ul class="list-unstyled">
                        <li><a class="link scroll" href="#home">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Home</span>
                        </a></li>
                        <li><a class="link scroll" href="#about-us">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">About</span>
                        </a></li>
                        <li><a class="link scroll" href="#portfolio">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Work</span>
                        </a></li>
                        <li><a class="link scroll" href="#clients">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Clients</span>
                        </a></li>
                        <li><a class="link scroll" href="#blog">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Blog</span>
                        </a></li>
                        <li><a class="link scroll" href="#contact">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Contact</span>
                        </a></li>
                    </ul>
                    <span class="full-menu-dot" style="transform: scale(0);"></span>
                </nav>
                <img alt="shape" src="agency/img/shape-8.png">
            </div>
            <div class="shape-right">
                <div class="full-menu-detail hide-cursor">
                    <h6 class="title">Press Contact</h6>
                    <p><i class="fas fa-user-alt"></i>David Warrior</p>
                    <p><i class="fas fa-mobile-alt"></i>+97 53 49 24 78 36</p>
                    <p><i class="fas fa-envelope"></i>contact@megaone.com</p>
                </div>
                <img alt="shape" src="agency/img/shape-7.png">
            </div>
        </div>
    </div>

    <!--Get Quote Model Popup-->
    <div class="animated-modal hidden quote-content" id="animatedModal">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <span class="sub-title">We are megaone company</span>
            <h2 class="title mt-2">Lets start your <span class="alt-color js-rotating">project, website</span></h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form" id="modal-contact-form-data">
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>

                <!--Left Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="quoteName" placeholder="Name" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_contact" name="userPhone" placeholder="Contact #" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_type" name="projectType" placeholder="Project type" required=""
                               type="text">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_email" name="userEmail" placeholder="Email" required=""
                               type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_address" name="userAddress" placeholder="City / Country"
                               required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_budget" name="quoteBudget" placeholder="Budget" required=""
                               type="text">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="quote_message"
                                  name="userMessage" placeholder="Please explain your project in detail."></textarea>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">

                    <div class="form-check">
                        <label class="checkbox-lable">Contact by phone ins preffered
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <a class="btn btn-large btn-rounded btn-blue btn-hvr-pink modal_contact_btn" href="javascript:void(0);"
                       id="quote_submit_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>Send Message</b>
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>

            </div>
        </form>
    </div>

</header>