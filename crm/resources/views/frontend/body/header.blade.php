<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
        <div class="container">
            <a class="logo link scroll" href="javascript:void(0)" title="Logo">
                <!--Logo Default-->
                <img alt="logo" class="logo-dark default" src="{{ asset('frontend/assets/agency/img/logo-white.png') }}">
            </a>


            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="agency">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link link scroll active" href="#home">Home</a>
                    <a class="nav-link link scroll" href="#about-us">Learn</a>
                    <a class="nav-link link scroll" href="#contact">Contact Us</a>
                    <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                </div>
            </div>

            <!--Menu Button-->
            <button class="fullnav-toggler link" id="full-menu-1" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

        </div>
    </nav>

    <!--Full menu-->
    <div class="nav-holder alt style-2 alt-font">

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
                        <li><a href="../index-agency.html#home" class="link">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">About Us</span>
                        </a></li>
                        <div>
                            <li><a href="../index-agency.html#about-us" class="link">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Our Founder & CEO</span>
                            </a></li>
                            <li><a href="../index-agency.html#portfolio" class="link">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Testimonials</span>
                            </a></li> 
                        </div>
                        <li><a href="../index-agency.html#clients" class="link">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Additional Resources</span>
                        </a></li>
                    </ul>
                    <span class="full-menu-dot" style="transform: scale(0);"></span>
                </nav>
                <img src="{{ asset('frontend/assets/agency/img/shape-8.png') }}" alt="shape">
            </div>
            <div class="shape-right">
                <div class="full-menu-detail hide-cursor">
                    <img src="{{ asset('frontend/assets/agency/img/default-profile-pic.png') }}" class="profile-pic" />
                    <h6 class="title">Guest</h6>
                    <p>Log In</p>
                    <p>Sign Up</p>
                </div>
                <img src="{{ asset('frontend/assets/agency/img/shape-7.png') }}" alt="shape">
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