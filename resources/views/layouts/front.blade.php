
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="2.1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="https://shreethemes.in/techwind/landing/assets/images/favicon.ico">

        <!-- Css -->
        @vite(['resources/css/libs/tobii/css/tobii.min.css', 'resources/css/libs/tobii/css/tobii.min.css'])
        @vite(['resources/css/libs/tiny-slider/tiny-slider.css', 'resources/css/libs/tiny-slider/tiny-slider.css'])
        <!-- Main Css -->
        @vite(['resources/css/libs/@iconscout/unicons/css/line.css', 'resources/css/libs/@iconscout/unicons/css/line.css'])
        @vite(['resources/css/libs/@mdi/font/css/materialdesignicons.min.css', 'resources/css/libs/@mdi/font/css/materialdesignicons.min.css'])
        @vite(['resources/css/tailwind.min.css', 'resources/css/tailwind.min.css'])

    </head>

    <body class="text-base text-black font-nunito dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
         <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader End -->


        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="/">
                    <span class="inline-block dark:hidden">
                        <img src="{{ asset('images/logo-dark.png') }}" class="l-dark" height="24" alt="">
                        <img src="{{ asset('images/logo-light.png') }}" class="l-light" height="24" alt="">
                    </span>
                    <img src="{{ asset('images/logo-light.png') }}" height="24" class="hidden dark:inline-block" alt="">
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <!--Login button Start-->
                <ul class="mb-0 list-none buy-button">
                    <li class="inline mb-0">
                        <a href="">
                            <span class="login-btn-primary"><span class="inline-flex items-center justify-center text-base tracking-wide text-center text-indigo-600 align-middle duration-500 border rounded-full h-9 w-9 bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 hover:text-white"><i data-feather="settings" class="w-4 h-4"></i></span></span>
                            <span class="login-btn-light"><span class="inline-flex items-center justify-center text-base tracking-wide text-center align-middle duration-500 border rounded-full h-9 w-9 bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="settings" class="w-4 h-4"></i></span></span>
                        </a>
                    </li>

                    <li class="inline mb-0 ps-1">
                        <a href="https://1.envato.market/techwind" target="_blank">
                            <div class="login-btn-primary"><span class="inline-flex items-center justify-center text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-full h-9 w-9 hover:bg-indigo-700 hover:border-indigo-700"><i data-feather="shopping-cart" class="w-4 h-4"></i></span></div>
                            <div class="login-btn-light"><span class="inline-flex items-center justify-center text-base tracking-wide text-center align-middle duration-500 border rounded-full h-9 w-9 bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="shopping-cart" class="w-4 h-4"></i></span></div>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="justify-end navigation-menu nav-light">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Landings</a><span class="menu-arrow"></span>

                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html" class="sub-menu-item">Saas <span class="bg-emerald-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Animation</span></a></li>
                                        <li><a href="index-classic-saas.html" class="sub-menu-item">Classic Saas </a></li>
                                        <li><a href="index-modern-saas.html" class="sub-menu-item">Modern Saas </a></li>
                                        <li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
                                        <li><a href="index-classic-app.html" class="sub-menu-item">Classic App </a></li>
                                        <li><a href="index-ai.html" class="sub-menu-item">AI Tools </a></li>
                                        <li><a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a></li>
                                        <li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
                                        <li><a href="index-seo.html" class="sub-menu-item">SEO Agency </a></li>
                                        <li><a href="index-software.html" class="sub-menu-item">Software </a></li>
                                        <li><a href="index-payment.html" class="sub-menu-item">Payments</a></li>
                                        <li><a href="index-charity.html" class="sub-menu-item">Charity </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-it-solution.html" class="sub-menu-item">IT Solution</a></li>
                                        <li><a href="index-it-solution-two.html" class="sub-menu-item">It Solution Two </a></li>
                                        <li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
                                        <li><a href="index-restaurent.html" class="sub-menu-item">Restaurent</a></li>
                                        <li><a href="index-hosting.html" class="sub-menu-item">Hosting</a></li>
                                        <li><a href="index-nft.html" class="sub-menu-item">NFT Marketplace <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                        <li><a href="index-hotel.html" class="sub-menu-item">Hotel & Resort</a></li>
                                        <li><a href="index-travel.html" class="sub-menu-item">Travels </a></li>
                                        <li><a href="index-cafe.html" class="sub-menu-item">Cafe <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-gym.html" class="sub-menu-item">Gym <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-yoga.html" class="sub-menu-item">Yoga </a></li>
                                        <li><a href="index-spa.html" class="sub-menu-item">Spa & Salon </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-job.html" class="sub-menu-item">Job <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                        <li><a href="index-startup.html" class="sub-menu-item">Startup</a></li>
                                        <li><a href="index-business.html" class="sub-menu-item">Business</a></li>
                                        <li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
                                        <li><a href="index-corporate-two.html" class="sub-menu-item">Corporate Two </a></li>
                                        <li><a href="index-real-estate.html" class="sub-menu-item">Real Estate <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                        <li><a href="index-consulting.html" class="sub-menu-item">Consulting </a></li>
                                        <li><a href="index-insurance.html" class="sub-menu-item">Insurance </a></li>
                                        <li><a href="index-construction.html" class="sub-menu-item">Construction </a></li>
                                        <li><a href="index-law.html" class="sub-menu-item">Law Firm </a></li>
                                        <li><a href="index-video.html" class="sub-menu-item">Video </a></li>
                                        <li><a href="index-christmas.html" class="sub-menu-item">Christmas <span class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
                                        <li><a href="index-portfolio.html" class="sub-menu-item">Portfolio <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                        <li><a href="index-photography.html" class="sub-menu-item">Photography <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
                                        <li><a href="index-coworking.html" class="sub-menu-item">Co-Woriking</a></li>
                                        <li><a href="index-classic-business.html" class="sub-menu-item">Classic Business <span class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                        <li><a href="index-course.html" class="sub-menu-item">Online Courses </a></li>
                                        <li><a href="index-event.html" class="sub-menu-item">Event / Conference </a></li>
                                        <li><a href="index-podcast.html" class="sub-menu-item">Podcasts </a></li>
                                        <li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
                                        <li><a href="index-phone-number.html" class="sub-menu-item">Phone Number</a></li>
                                        <li><a href="index-forums.html" class="sub-menu-item">Forums </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                       <li><a href="index-shop.html" class="sub-menu-item">Shop / eCommerce <span class="bg-red-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Full</span></a></li>
                                        <li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency  <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-landing-one.html" class="sub-menu-item">Landing One</a></li>
                                        <li><a href="index-landing-two.html" class="sub-menu-item">Landing Two</a></li>
                                        <li><a href="index-landing-three.html" class="sub-menu-item">Landing Three</a></li>
                                        <li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
                                        <li><a href="index-service.html" class="sub-menu-item">Service Provider</a></li>
                                        <li><a href="index-food-blog.html" class="sub-menu-item">Food Blog </a></li>
                                        <li><a href="index-blog.html" class="sub-menu-item">Blog </a></li>
                                        <li><a href="index-furniture.html" class="sub-menu-item">Furniture </a></li>
                                        <li><a href="index-landing-five.html" class="sub-menu-item">Landing Five <span class="bg-green-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Onepage</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                        <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                        <li><a href="page-testimonial.html" class="sub-menu-item">Testimonial </a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                        <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                        <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                        <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                        <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                        <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                        <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                        <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                        <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                        <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                        <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Creator  </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="nft-creators.html" class="sub-menu-item"> Creators</a></li>
                                                <li><a href="nft-creator-profile.html" class="sub-menu-item"> Creator Profile </a></li>
                                                <li><a href="nft-creator-profile-edit.html" class="sub-menu-item"> Profile Edit </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                        <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                        <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                                    </ul>
                                </li>
                                <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe </a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> eCommerce </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                                        <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                                        <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                                        <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                        <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                                        <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="photography-about.html" class="sub-menu-item">About Us</a></li>
                                        <li><a href="photography-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                        <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                        <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                        <li><a href="page-job-post.html" class="sub-menu-item">Job Post </a></li>
                                        <li><a href="page-job-career.html" class="sub-menu-item">Job Career </a></li>
                                        <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                        <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate Detail</a></li>
                                        <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                        <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="forums-topic.html" class="sub-menu-item">Forum Topic</a></li>
                                        <li><a href="forums-comments.html" class="sub-menu-item">Forum Comments</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog Posts </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="blog-standard-post.html" class="sub-menu-item">Standard Post</a></li>
                                                <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a></li>
                                                <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a></li>
                                                <li><a href="blog-youtube-post.html" class="sub-menu-item">Youtube Post</a></li>
                                                <li><a href="blog-vimeo-post.html" class="sub-menu-item">Vimeo Post</a></li>
                                                <li><a href="blog-audio-post.html" class="sub-menu-item">Audio Post</a></li>
                                                <li><a href="blog-blockquote-post.html" class="sub-menu-item">Blockquote</a></li>
                                                <li><a href="blog-left-sidebar-post.html" class="sub-menu-item">Left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                        <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                        <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                        <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                        <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                        <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Modern Portfolio</li>
                                        <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Classic Portfolio</li>
                                        <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Creative Portfolio</li>
                                        <li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Masonry Portfolio</li>
                                        <li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Portfolio Detail</li>
                                        <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                        <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                        <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                        <li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="ui-components.html" class="sub-menu-item">Components </a></li>
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li>

                        <li><a href="contact-one.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative md:h-screen md:py-0 py-36 items-center overflow-hidden bg-indigo-600 bg-[url('../../https://shreethemes.in/techwind/landing/assets/images/bg3.png')] bg-center bg-no-repeat bg-cover">
            <div class="container relative">
                <div class="grid grid-cols-1 mt-10 text-center md:mt-36">
                    <h4 class="mb-5 text-4xl font-bold leading-normal text-white lg:leading-normal lg:text-5xl">Integrated Techwind <span class="text-orange-500">Software <br> & Saas</span> Plateform </h4>
                    <p class="max-w-xl mx-auto text-lg text-white/70">Launch your campaign and benefit from our expertise
                        on designing and managing conversion centered Tailwind CSS v3.x html page.</p>

                    <div class="mt-6 mb-3 subcribe-form">
                        <form class="relative max-w-xl mx-auto">
                            <input type="email" id="subcribe" name="email" class="form-input border-0 py-4 pe-40 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800" placeholder="Your Email Address :">
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-orange-500 hover:bg-orange-600 border-orange-500 hover:border-orange-600 text-white rounded-full">Try it for free <i class="uil uil-arrow-right"></i></button>
                        </form><!--end form-->
                    </div>

                    <span class="font-medium text-slate-400">Looking for help? <a href="" class="text-orange-500">Get in touch with us</a></span>

                    <div class="mt-8 overflow-hidden">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/saas/home.png" alt="">
                    </div>

                    <div class="overflow-hidden after:content-[''] after:absolute after:h-14 after:w-14 after:bg-white/20 after:-top-[40px] after:start-[30%] after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>

                    <div class="overflow-hidden after:content-[''] after:absolute after:h-10 after:w-10 after:bg-white/20 after:top-[30%] after:end-[20%] after:rounded-full after:animate-ping"></div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
                <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Partners -->
        <section class="py-6 border-t border-b border-gray-100 dark:border-gray-700">
            <div class="container relative">
                <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                    <div class="py-4 mx-auto">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/amazon.svg" class="h-6" alt="">
                    </div>

                    <div class="py-4 mx-auto">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/google.svg" class="h-6" alt="">
                    </div>

                    <div class="py-4 mx-auto">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/lenovo.svg" class="h-6" alt="">
                    </div>

                    <div class="py-4 mx-auto">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/paypal.svg" class="h-6" alt="">
                    </div>

                    <div class="py-4 mx-auto">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/shopify.svg" class="h-6" alt="">
                    </div>

                    <div class="py-4 mx-auto">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/spotify.svg" class="h-6" alt="">
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section>
        <!-- Partners -->

        <!-- Start -->
        <section class="relative py-16 overflow-hidden md:py-24">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">How It Works?</h3>

                    <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <!-- Content -->
                    <div class="relative p-6 overflow-hidden text-center duration-500 group hover:bg-white dark:hover:bg-slate-900 hover:shadow dark:hover:shadow-gray-800 rounded-xl h-fit">
                        <div class="relative -m-3 overflow-hidden text-transparent">
                            <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute flex items-center justify-center mx-auto text-3xl text-indigo-600 align-middle duration-500 top-2/4 -translate-y-2/4 start-0 end-0 dark:text-white rounded-xl">
                                <i class="uil uil-airplay"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="" class="text-xl font-medium duration-500 ease-in-out hover:text-indigo-600">UX / UI Design</a>
                            <p class="mt-3 duration-500 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="relative p-6 overflow-hidden text-center duration-500 group hover:bg-white dark:hover:bg-slate-900 hover:shadow dark:hover:shadow-gray-800 rounded-xl h-fit md:mt-16">
                        <div class="relative -m-3 overflow-hidden text-transparent">
                            <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute flex items-center justify-center mx-auto text-3xl text-indigo-600 align-middle duration-500 top-2/4 -translate-y-2/4 start-0 end-0 dark:text-white rounded-xl">
                                <i class="uil uil-shutter"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="" class="text-xl font-medium duration-500 ease-in-out hover:text-indigo-600">IOS App Designer</a>
                            <p class="mt-3 duration-500 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="relative p-6 overflow-hidden text-center duration-500 group hover:bg-white dark:hover:bg-slate-900 hover:shadow dark:hover:shadow-gray-800 rounded-xl h-fit">
                        <div class="relative -m-3 overflow-hidden text-transparent">
                            <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute flex items-center justify-center mx-auto text-3xl text-indigo-600 align-middle duration-500 top-2/4 -translate-y-2/4 start-0 end-0 dark:text-white rounded-xl">
                                <i class="uil uil-cog"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="" class="text-xl font-medium duration-500 ease-in-out hover:text-indigo-600">Web Security</a>
                            <p class="mt-3 duration-500 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="relative p-6 overflow-hidden text-center duration-500 group hover:bg-white dark:hover:bg-slate-900 hover:shadow dark:hover:shadow-gray-800 rounded-xl h-fit md:mt-16">
                        <div class="relative -m-3 overflow-hidden text-transparent">
                            <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 dark:fill-white/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute flex items-center justify-center mx-auto text-3xl text-indigo-600 align-middle duration-500 top-2/4 -translate-y-2/4 start-0 end-0 dark:text-white rounded-xl">
                                <i class="uil uil-comment"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="" class="text-xl font-medium duration-500 ease-in-out hover:text-indigo-600">24/7 Support</a>
                            <p class="mt-3 duration-500 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <img src="https://shreethemes.in/techwind/landing/assets/images/shape-image.png" alt="">

                    <div class="lg:ms-8">
                        <h4 class="mb-4 text-2xl font-medium leading-normal">Great Product Analytics <br> With Real Problem</h4>
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="mt-4 list-none text-slate-400">
                            <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-4">
                            <a href="page-aboutus.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="align-middle uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div class="relative order-1 md:order-2">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/saas/classic03.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                        <div class="overflow-hidden absolute lg:h-[400px] h-[320px] lg:w-[400px] w-[320px] bg-indigo-600/5 bottom-0 end-0 rotate-45 -z-1 rounded-3xl"></div>
                    </div>

                    <div class="order-2 lg:me-8 md:order-1">
                        <h4 class="mb-4 text-2xl font-medium leading-normal">Get Notified About Importent Email</h4>
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="mt-4 list-none text-slate-400">
                            <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-4">
                            <a href="page-aboutus.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="align-middle uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="relative">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/saas/classic02.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                        <div class="overflow-hidden absolute lg:h-[400px] h-[320px] lg:w-[400px] w-[320px] bg-indigo-600/5 bottom-0 start-0 rotate-45 -z-1 rounded-3xl"></div>
                    </div>

                    <div class="lg:ms-8">
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="relative flex items-center p-6 overflow-hidden duration-500 rounded-md shadow group dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                <span class="text-5xl font-semibold text-indigo-600 duration-500 group-hover:text-white">
                                    <i class="uil uil-swatchbook"></i>
                                </span>
                                <div class="flex-1 ms-3">
                                    <h5 class="text-xl font-semibold duration-500 group-hover:text-white">Enhance Security</h5>
                                    <p class="mt-2 duration-500 text-slate-400 group-hover:text-white/50">There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                                <div class="absolute start-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] duration-500">
                                    <i class="uil uil-swatchbook"></i>
                                </div>
                            </div>

                            <div class="relative flex items-center p-6 overflow-hidden duration-500 rounded-md shadow group dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                <span class="text-5xl font-semibold text-indigo-600 duration-500 group-hover:text-white">
                                    <i class="uil uil-tachometer-fast-alt"></i>
                                </span>
                                <div class="flex-1 ms-3">
                                    <h5 class="text-xl font-semibold duration-500 group-hover:text-white">High Performance</h5>
                                    <p class="mt-2 duration-500 text-slate-400 group-hover:text-white/50">There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                                <div class="absolute start-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] duration-500">
                                    <i class="uil uil-tachometer-fast-alt"></i>
                                </div>
                            </div>

                            <div class="relative flex items-center p-6 overflow-hidden duration-500 rounded-md shadow group dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                <span class="text-5xl font-semibold text-indigo-600 duration-500 group-hover:text-white">
                                    <i class="uil uil-user-check"></i>
                                </span>
                                <div class="flex-1 ms-3">
                                    <h5 class="text-xl font-semibold duration-500 group-hover:text-white">Unbeatable Support</h5>
                                    <p class="mt-2 duration-500 text-slate-400 group-hover:text-white/50">There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                                <div class="absolute start-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] duration-500">
                                    <i class="uil uil-user-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 text-2xl font-semibold leading-normal text-black md:text-3xl md:leading-normal dark:text-white">What Our Client Say ?</h3>

                    <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="relative flex justify-center mt-16">
                    <div class="relative w-full lg:w-1/3 md:w-1/2">
                        <div class="absolute -top-20 md:-start-24 -start-0">
                            <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                        </div>

                        <div class="absolute bottom-28 md:-end-24 -end-0">
                            <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                        </div>

                        <div class="tiny-single-item">
                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-lg italic text-slate-400"> " Techwind made the processes so easy. Techwind instantly increased the amount of interest and ultimately saved us over $10,000. " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium text-orange-500 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/01.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-800" alt="">
                                        <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                        <span class="text-sm text-slate-400">Manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-lg italic text-slate-400"> " I highly recommend Techwind as the new way to sell your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could spend to sell your home. " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium text-orange-500 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/02.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-800" alt="">
                                        <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                        <span class="text-sm text-slate-400">Manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-lg italic text-slate-400"> " My favorite part about selling my home myself was that we got to meet and get to know the people personally. This made it so much more enjoyable! " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium text-orange-500 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/03.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-800" alt="">
                                        <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                        <span class="text-sm text-slate-400">Manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-lg italic text-slate-400"> " Great experience all around! Easy to use and efficient. " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium text-orange-500 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/04.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-800" alt="">
                                        <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                        <span class="text-sm text-slate-400">Manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-lg italic text-slate-400"> " Techwind made selling my home easy and stress free. They went above and beyond what is expected. " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium text-orange-500 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/05.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-800" alt="">
                                        <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                        <span class="text-sm text-slate-400">Manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tiny-slide">
                                <div class="text-center">
                                    <p class="text-lg italic text-slate-400"> " Techwind is fair priced, quick to respond, and easy to use. I highly recommend their services! " </p>

                                    <div class="mt-5 text-center">
                                        <ul class="mb-2 text-xl font-medium text-orange-500 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <img src="https://shreethemes.in/techwind/landing/assets/images/client/06.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-800" alt="">
                                        <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                        <span class="text-sm text-slate-400">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Pricing Plans</h3>

                    <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px] items-center">
                    <div class="p-6">
                        <div class="pb-8">
                            <h3 class="mb-6 text-xl font-medium dark:text-white">Free</h3>
                            <div class="mb-6 dark:text-white/50">
                                <span class="relative text-xl h6 -top-5">$</span>
                                <span class="text-5xl font-medium h6 dark:text-white">00</span>
                                <span class="inline-block ml-1 h6">/ month</span>
                            </div>
                            <p class="mb-6 text-slate-400">Free features for your business.</p>
                            <a href="" class="inline-block w-full px-5 py-2 text-base font-semibold tracking-wide text-center text-indigo-600 align-middle duration-500 border rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 hover:text-white">Redeem Now</a>
                        </div>
                        <div class="border-b border-slate-200 dark:border-slate-200/5"></div>
                        <ul class="self-start pt-8">
                            <li class="flex items-center mb-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>Complete documentation</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>Working materials in Figma</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>100GB cloud storage</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>500 team members</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>Free Support</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6 bg-indigo-600 rounded-md shadow bg-gradient-to-t">
                        <div class="pb-8">
                            <h3 class="mb-6 text-xl font-medium text-white">Business</h3>
                            <div class="mb-6 text-white/50">
                                <span class="relative text-xl h6 -top-5">$</span>
                                <span class="text-5xl font-bold text-white h6">10</span>
                                <span class="inline-block ml-1 h6">/ month</span>
                            </div>
                            <p class="mb-6 text-white">Basic features for up to 10 users.</p>
                            <a href="" class="inline-block w-full px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-orange-500 border border-orange-500 rounded-md hover:bg-orange-600 hover:border-orange-600">Started Now</a>
                        </div>
                        <div class="border-b border-slate-200/10"></div>
                        <ul class="self-start pt-8">
                            <li class="flex items-center mb-1 text-white/80">
                                <i class="mr-2 text-xl text-orange-500 uil uil-check-circle"></i>
                                <span>Complete documentation</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="mr-2 text-xl text-orange-500 uil uil-check-circle"></i>
                                <span>Working materials in Figma</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="mr-2 text-xl text-orange-500 uil uil-check-circle"></i>
                                <span>100GB cloud storage</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="mr-2 text-xl text-orange-500 uil uil-check-circle"></i>
                                <span>500 team members</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="mr-2 text-xl text-orange-500 uil uil-check-circle"></i>
                                <span>Free Support</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <div class="pb-8">
                            <h3 class="mb-6 text-xl font-medium dark:text-white">Corporate</h3>
                            <div class="mb-6 dark:text-white/50">
                                <span class="relative text-xl h6 -top-5">$</span>
                                <span class="text-5xl font-medium h6 dark:text-white">49</span>
                                <span class="inline-block ml-1 h6">/ month</span>
                            </div>
                            <p class="mb-6 text-slate-400">Corporate features for up to 100 users.</p>
                            <a href="" class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">Signup Now</a>
                        </div>
                        <div class="border-b border-slate-200 dark:border-slate-200/5"></div>
                        <ul class="self-start pt-8">
                            <li class="flex items-center mb-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>Complete documentation</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>Working materials in Figma</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>100GB cloud storage</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>500 team members</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="mr-2 text-xl text-indigo-600 uil uil-check-circle"></i>
                                <span>Free Support</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Frequently Asked Questions</h3>

                    <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div id="accordion-collapse" data-accordion="collapse" class="grid md:grid-cols-2 grid-cols-1 mt-8 md:gap-[30px]">
                    <div>
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-1">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                    <span>Do I need a designer to use Techwind ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-3">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-4">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800 md:mt-0">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-5">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-6">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                                    <span>Do I need a designer to use Techwind ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-7">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-7" aria-expanded="false" aria-controls="accordion-collapse-body-7">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-8">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-start" data-accordion-target="#accordion-collapse-body-8" aria-expanded="false" aria-controls="accordion-collapse-body-8">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24 z-2">
                <div class="grid items-center grid-cols-1 md:grid-cols-12">
                    <div class="lg:col-span-5 md:col-span-6">
                        <img src="https://shreethemes.in/techwind/landing/assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                        <h4 class="my-4 text-2xl font-medium leading-normal md:text-3xl lg:leading-normal">Available for your <br> Smartphones</h4>
                        <p class="max-w-xl mb-0 text-slate-400">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        <div class="my-5">
                            <a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/app/app.png" class="inline-block m-1" alt=""></a>

                            <a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/app/playstore.png" class="inline-block m-1" alt=""></a>
                        </div>

                        <div class="inline-block">
                            <div class="flex items-center pt-4 border-t border-gray-100 dark:border-gray-700">
                                <i data-feather="smartphone" class="w-10 h-10 text-indigo-600 me-2"></i>
                                <div class="content">
                                    <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end gird-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="relative text-gray-200 footer bg-dark-footer dark:text-gray-200">
            <div class="container relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="{{ asset('/images/logo-light.png')}}" alt="SipleCare.cloud logo">
                                    </a>
                                    <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <ul class="mt-6 list-none">
                                        <li class="inline"><a href="https://1.envato.market/techwind" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-shopping-cart" title="Buy Now"></i></a></li>
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-dribbble" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-facebook-f" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-instagram" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-twitter" title="twitter"></i></a></li>
                                        <li class="inline"><a href="mailto:support@shreethemes.in" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-envelope" title="email"></i></a></li>
                                        <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="align-middle uil uil-file" title="customization"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->

                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                    <ul class="mt-6 list-none footer-list">
                                        <li><a href="page-aboutus.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> About us</a></li>
                                        <li class="mt-[10px]"><a href="page-services.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Services</a></li>
                                        <li class="mt-[10px]"><a href="page-team.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Team</a></li>
                                        <li class="mt-[10px]"><a href="page-pricing.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Pricing</a></li>
                                        <li class="mt-[10px]"><a href="portfolio-creative-four.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Project</a></li>
                                        <li class="mt-[10px]"><a href="blog.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Blog</a></li>
                                        <li class="mt-[10px]"><a href="auth-login.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                                    <ul class="mt-6 list-none footer-list">
                                        <li><a href="page-terms.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                        <li class="mt-[10px]"><a href="page-privacy.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                                        <li class="mt-[10px]"><a href="documentation.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Documentation</a></li>
                                        <li class="mt-[10px]"><a href="changelog.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Changelog</a></li>
                                        <li class="mt-[10px]"><a href="widget.html" class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i class="uil uil-angle-right-b"></i> Widget</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                    <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="my-3">
                                                <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                <div class="relative mt-2 form-icon">
                                                    <i data-feather="mail" class="absolute w-4 h-4 top-3 start-4"></i>
                                                    <input type="email" class="w-full h-10 px-3 py-2 text-gray-100 bg-gray-800 border-0 rounded form-input ps-12 focus:shadow-none focus:ring-0 placeholder:text-gray-200" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>

                                            <button type="submit" id="submitsubscribe" name="send" class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">Subscribe</button>
                                        </div>
                                    </form>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end col-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container relative text-center">
                    <div class="grid items-center md:grid-cols-2">
                        <div class="text-center md:text-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> SimpleCare.cloud <br />  Developed with <i class="text-red-600 mdi mdi-heart"></i> @ <a href="https://www.bytetech.health" target="_blank" class="text-reset">ByteTech Health | ByteTech Labs LLC.</a>.</p>
                        </div>

                        <ul class="mt-6 text-center list-none md:text-end md:mt-0">
                            <li class="inline"><a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/payments/american-ex.png" class="inline max-h-6" title="American Express" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/payments/discover.png" class="inline max-h-6" title="Discover" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/payments/master-card.png" class="inline max-h-6" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/payments/paypal.png" class="inline max-h-6" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href=""><img src="https://shreethemes.in/techwind/landing/assets/images/payments/visa.png" class="inline max-h-6" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->



        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="fixed z-10 hidden text-lg leading-9 text-center text-white bg-indigo-600 rounded-full back-to-top bottom-5 end-5 h-9 w-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="absolute opacity-0 checkbox" id="chk" />
                <label class="flex items-center justify-between h-8 p-1 rounded-full shadow cursor-pointer label bg-slate-900 dark:bg-white dark:shadow-gray-800 w-14" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPT -->

        @vite(['resources/js/libs/tobii/js/tobii.min.js', 'resources/js/libs/tobii/js/tobii.min.js'])
        @vite(['resources/js/libs/tiny-slider/min/tiny-slider.js', 'resources/js/libs/tiny-slider/min/tiny-slider.js'])
        @vite(['resources/js/libs/feather-icons/feather.min.js', 'resources/js/libs/feather-icons/feather.min.js'])
        @vite(['resources/js/plugins.init.js'])
        @vite(['resources/js/front-app.js', 'resources/js/front-app.js'])
        <!-- JAVASCRIPTS -->
    </body>
</html>
