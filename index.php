<?php

require "autoload.php";

$feature = new feature();
$allFeature =  $feature->getFeature();

$setting = new settings();
$main_img =  $setting->getSettingByKey("main");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Gmail</title>

    <!-- Styles -->
    <link href="design/front/css/core.min.css" rel="stylesheet">
    <link href="design/front/css/thesaas.min.css" rel="stylesheet">
    <link href="design/front/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="design/front/img/apple-touch-icon.png">
    <link rel="icon" href="design/front/img/favicon.png">
</head>

<body>


<!-- Topbar -->
<nav class="topbar topbar-sticky">
    <div class="container">

        <div class="topbar-left">
            <a class="topbar-brand" href="index.html">
                <img class="logo-default" src="design/front/img/logo.png" alt="logo">
                <img class="logo-inverse" src="design/front/img/logo-light.png" alt="logo">
            </a>
        </div>


        <div class="topbar-right">
            <a class="btn btn-sm btn-danger mr-4" href="page-login.html">Sign in</a>
            <a class="btn btn-sm btn-outline btn-danger hidden-sm-down" href="page-register.html">Sign up</a>

            <button class="drawer-toggler ml-12">&#9776;</button>
        </div>

    </div>
</nav>
<!-- END Topbar -->




<!-- Header -->
<header class="header h-fullscreen p-0 bb-1 overflow-hidden" style="background-image: url(design/front/img/bg-girl.jpg);" data-overlay-light="8">
    <div class="container text-center">

        <div class="row h-full">
            <div class="col-12 col-lg-8 offset-lg-2 align-self-center pt-150">

                <h1 class="display-4">Gmail</h1>
                <br>
                <p class="lead fs-20">The ease & simplicity of Gmail, available across devices</p>

            </div>

            <div class="col-12 align-self-end text-center">
                <img class="shadow-5" src="upload/<?= $main_img['value_setting']; ?>" alt="..." data-aos="fade-up" data-aos-offset="0">
            </div>

        </div>

    </div>
</header>
<!-- END Header -->




<!-- Main container -->
<main class="main-content">




    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Features
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section bb-1">
        <div class="container">
            <header class="section-header">
                <small><strong>Features</strong></small>
                <h2>All In One</h2>
                <hr>
                <p class="lead">New customizable tabs put you back in control so that you can see what’s new at a glance and decide which emails you want to read and when.</p>
            </header>



            <div class="row gap-y">

                <div class="col-12 offset-md-2 col-md-8 mb-30 overflow-hidden">
                    <img class="shadow-4" src="design/front/img/demo/gmail/feature.jpg" alt="..." data-aos="fade-up" data-aos-duration="2000">
                </div>


                <?php foreach ($allFeature as $feature): ?>
                <?php if ($feature['status'] == 1): ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="flexbox gap-items-4">
                        <div>
                            <i class="<?= $feature['icon']; ?>"></i>
                        </div>

                        <div>
                            <h5><?= $feature['title']; ?></h5>
                            <p><?= $feature['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>


                <div class="col-12 text-center">
                    <br><br>
                    <a class="btn btn-lg btn-primary" href="page-feature.html">See more Features</a>
                </div>

            </div>

        </div>
    </section>








    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | A better compose
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section p-0 bb-1 hidden-sm-down">
        <div class="container-wide">
            <div class="row no-gap">

                <div class="col-12 col-md-6 bg-img" style="background-image: url(design/front/img/demo/gmail/compose.jpg)"></div>


                <div class="col-12 offset-md-1 col-md-4 py-90">
                    <p><small>Tips</small></p>
                    <h5>A better compose</h5>
                    <p>Interactively productize worldwide potentialities before long-term high-impact initiatives. Completely disintermediate excellent leadership skills with client-centric content.</p>
                </div>


                <div class="col-12 offset-md-1 col-md-4 py-90">
                    <p><small>Collaborate</small></p>
                    <h5>View attachments instantly</h5>
                    <p>Interactively productize worldwide potentialities before long-term high-impact initiatives. Completely disintermediate excellent leadership skills with client-centric content.</p>
                </div>


                <div class="col-12 col-md-6 offset-md-1 bg-img" style="background-image: url(design/front/img/demo/gmail/attachment.jpg)"></div>


            </div>
        </div>
    </section>







    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Get Started
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section bg-grey bb-1">
        <div class="container">
            <header class="section-header">
                <small><strong>Gmail</strong></small>
                <h2 class="fs-45 hidden-sm-down">Get Custom Email</h2>
                <h2 class="fs-25 hidden-md-up">Get Custom Email</h2>
                <hr>
                <p class="lead">Use the Gmail you love - for business. Get custom email @yourcompany.com including calendar, docs, video meetings, and more with access from your phone or tablet.</p>
            </header>

            <p class="text-center">
                <a class="btn btn-xl btn-danger w-250" href="#">Get Started</a><br>
            </p>
        </div>
    </section>







    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | FAQ
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section">
        <div class="container">
            <header class="section-header">
                <small>FAQ</small>
                <h2>Frequently Asked Questions</h2>
                <hr>
                <p class="lead">Got a question? We've got answers. If you have some other questions, see our support center.</p>
            </header>



            <div class="row gap-y">


                <div class="col-12 col-lg-6">
                    <h5>What payment services do you support?</h5>
                    <p>We accept all major credit cards.</p>
                </div>


                <div class="col-12 col-lg-6">
                    <h5>Can I cancel my subscription?</h5>
                    <p>You can cancel your subscription at any time. Cancelling your plan comes into effect the following month.</p>
                </div>


                <div class="col-12 col-lg-6">
                    <h5>Is this a secure site for purchases?</h5>
                    <p>Absolutely! We work with <a href="https://stripe.com/" target="_blank">Stripe</a> which guarantees your safety and security. All site communication and data transfer are secured and encrypted.</p>
                </div>


                <div class="col-12 col-lg-6">
                    <h5>Can I update my card details?</h5>
                    <p>Yes. Go to the billing section of your dashboard and update your payment information.</p>
                </div>


                <div class="col-12 col-lg-6">
                    <h5>How long are your contracts?</h5>
                    <p>Currently, we only offer monthly subscription. You can upgrade, downgrade, or cancel your monthly account at any time with no further obligation. Yearly subscription with generous discount will become available soon.</p>
                    <p class="d-none">We offer both monthly and annual plans. Annual plans receive a 10% discount. You can upgrade, downgrade, or cancel your monthly account at any time with no further obligation.</p>
                </div>


                <div class="col-12 col-lg-6">
                    <h5>Why do you ask for several permissions in login?</h5>
                    <p>Envato API requires us to ask for these permissions to have the ability to get your details, items, purchased items, etc. on your behalf. We take privacy extremely seriously, and will never send messages, or access your data for anything other than our stated purposes.</p>
                </div>


                <div class="col-12 col-lg-6">
                    <h5>Are you affiliated with Envato?</h5>
                    <p>No, we are not affliated or supported by Envato.</p>
                </div>



                <div class="col-12 col-lg-6">
                    <h5>Can I get refund?</h5>
                    <p>Unfortunately, not at this time! Please try our free plan for a while to make sure Helpato is what you want.</p>
                </div>


            </div>



        </div>
    </section>




</main>
<!-- END Main container -->






<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-3">
                <p class="text-center text-lg-left">
                    <a href="index.html"><img src="design/front/img/logo.png" alt="logo"></a>
                </p>
            </div>

            <div class="col-12 col-lg-6">
                <ul class="nav nav-primary nav-hero">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="block-feature.html">Features</a>
                    </li>
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link" href="page-pricing.html">Pricing</a>
                    </li>
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link" href="page-contact.html">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-lg-3">
                <div class="social text-center text-lg-right">
                    <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
                    <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->



<!-- Drawer -->
<div class="drawer">
    <div class="drawer-content">
        <ul class="nav nav-primary nav-hero flex-column">
            <li class="nav-item">
                <a class="nav-link" href="page-how-it-works.html">How it works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-pricing.html">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-demo.html">Request Demo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-jobs.html">Careers</a>
            </li>
        </ul>

        <br>

        <ul class="nav nav-primary flex-column">
            <li class="nav-item">
                <a class="nav-link" href="page-about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-faq.html">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-privacy.html">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-contact.html">Contact</a>
            </li>
        </ul>

        <hr>

        <div class="social social-boxed social-rounded text-center">
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
        </div>

        <br>

        <div class="row">
            <div class="col-6">
                <a class="btn btn-sm btn-block btn-primary" href="page-login.html">Login</a>
            </div>

            <div class="col-6">
                <a class="btn btn-sm btn-block btn-primary" href="page-register.html">register</a>
            </div>
        </div>

    </div>

    <button class="drawer-close"></button>
    <div class="drawer-backdrop"></div>
</div>
<!-- END Drawer -->


<!-- Scripts -->
<script src="design/front/js/core.min.js"></script>
<script src="design/front/js/thesaas.min.js"></script>
<script src="design/front/js/script.js"></script>

</body>
</html>

