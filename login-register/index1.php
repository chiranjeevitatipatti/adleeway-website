<?php
session_start();  // Start the session to access session variables
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adleeway</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css">
</head>

<body>
    <header class="tm-site-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav" style="display: flex; flex-direction: initial; list-style-type: none;">
                    <li>
                        <h1 class="tm-mt-0 tm-mb-15">
                            <span class="tm-color-primary">AD</span> <span class="tm-color-gray-2">Leeway</span>
                        </h1>
                        <em class="tm-tagline tm-color-light-gray">Advertising and IT Solutions</em>
                    </li>

                    <!-- Dynamic login/logout behavior -->
                    <li class="active" style="">
                        <?php
                        // Check if the user is logged in
                        if (isset($_SESSION['user_name'])) {
                            // If logged in, display the username and link to profile.php
                            echo '<a href="profile.php" style="position: relative; left: 543px;">' . htmlspecialchars($_SESSION['user_name']) . '</a>';
                        } else {
                            // If not logged in, display the sign-in link
                            echo '<a href="login-register/index.php" style="position: relative; left: 543px;">sign-in</a>';
                        }
                        ?>
                    </li>
                    <!-- End of the dynamic PHP code -->

                </ul>
            </nav>
        </div>
    </header>
     <!-- Video banner 400 px height -->
     <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="#intro" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Introduction
                        <i class="fas fa-3x fa-water"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
                        Blog
                        <i class="far fa-3x fa-images"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#testimonials" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Testimonials
                        <i class="far fa-3x fa-smile"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#about" data-effect="mfp-move-from-top" class="tm-nav-link">
                        About
                        <i class="fas fa-3x fa-tint"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#contact" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Contact
                        <i class="far fa-3x fa-comments"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Popup itself -->
        <div id="intro" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-intro-row">
                <img src="img/intro.jpg" alt="Image" class="tm-intro-img">
                <div class="tm-col tm-bg-white tm-intro-pad">
                    <h2 class="tm-color-primary tm-page-title">Introducing Adleeway</h2>
                    <div class="tm-row tm-content-row">
                        <div class="tm-col-6 tm-intro-col-l">
                            <p>
                               
                                <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>
                                AdLeeway Advertising and IT Solutions is the most popular Digital Marketing and IT Solutions company in Hyderabad and Visakhapatnam. Which is established in 2015. An advertising agency with lots of proven knowledge and experience in every corner of Digital Marketing platforms. We create a Leeway for your Ads on every corner of Advertising.</p>
                            <p>
                                You can support our website by contributing
                                <a rel="nofollow" href="" target="_parent">a little via
                                    We create your online identity by creating user-friendly company websites, Static websites, dynamic websites, software products, and Mobile Applications we have an expert team of developers who can build any product. </p>
                            <p class="tm-mb-0">
                                <strong>Credit</strong>  Hiring an individual from a pool of potential candidates is tricky, especially if you’re not experienced at it. We help you find a dedicated team of professionals who are passionate about your business vision and are the right culture fit. We recruit smart. If you’re looking for experienced and goal-oriented manpower consultancy in Hyderabad AdLeeway is one. Start your journey with AdLeeway and have all your recruitment needs taken excellent care of. </p>
                        </div>
                        <div class="tm-col-6">
                            <p>
                                You are not allowed to re-distribute this
                                template as a downloadable ZIP file on
                                any template collection website.
                            </p>
                            <p>
                        Which is established in 2015. An advertising agency with lots of proven knowledge and experience in every corner of Digital Marketing platforms. We create a Leeway for your Ads on every corner of Advertising.
                            </p>
                            <p class="tm-mb-80">
                                AdLeeway Advertising and IT Solutions is the most popular Digital Marketing and IT Solutions company in Hyderabad and Visakhapatnam. Which is established in 2015. An advertising agency with lots of proven knowledge and experience in every corner of Digital Marketing platforms. We create a Leeway for your Ads on every corner of Advertising.
                            </p>
                            <div class="tm-text-center">
                                <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-next">
                                    Next Page
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="gallery" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-gallery-row">
                <div class="tm-gallery">
                    <div class="tm-gallery-container">
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-01.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-01.jpg" alt="Image" />
                            <figcaption>
                                <p>TemplateMo is the best website for free css templates.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-01.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-01.jpg" alt="Image" />
                            <figcaption>
                                <p>TemplateMo is the best free css website templates.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-02.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-02.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-02.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-02.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-03.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-03.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-03.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-04.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-04.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-04.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-05.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-05.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-05.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-06.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-06.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-06.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-07.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-07.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-07.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-08.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>

                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-03.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-04.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-05.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-06.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-07.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-08.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>

                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-08.jpg" alt="Image" />
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>
                            </figcaption>
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-08.jpg" alt="Image" />
                            <figcaption>
                                <p>TemplateMo is the best free website for html css templates.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Gallery navigation and description -->
                <div class="tm-col tm-gallery-right">
                    <h2 class="tm-color-primary tm-mt-35 tm-page-title">Gallery</h2>
                    <div class="tm-gallery-right-inner">
                        <ul class="tm-gallery-links">
                            <li>
                                <a href="#" class="active tm-gallery-link" data-filter="*">
                                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                                    All
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="portrait">
                                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                                    Portraits
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="nature">
                                    <i class="fas fa-leaf tm-gallery-link-icon"></i>
                                    Nature
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="animal">
                                    <i class="fas fa-paw tm-gallery-link-icon"></i>
                                    Animals
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="building">
                                    <i class="far fa-building tm-gallery-link-icon"></i>
                                    Buildings
                                </a>
                            </li>
                        </ul>
                        <p>
                            Different icons are used for
                            different categories. There are 4 or more
                            pages of photos in this gallery. Each
                            thumbnail has a nice hover effect.
                        </p>
                        <p>
                            Proin lacus enim, finibus sed magna a,
                            molestie lacinia est. Maecenas id dolor
                            lorem. Donec sodales ex velit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonials" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-testimonials-inner">
                <h2 class="tm-color-gray tm-testimonial-col tm-page-title"></h2>
                <div class="tm-row tm-testimonial-row">
                    <div class="tm-col tm-testimonial-col">
                        <p>
                            OCEAN vibes is free website template from
                            <a rel="nofollow" href="https://templatemo.com" class="tm-color-primary">TemplateMo</a>
                            website. You are allowed to use
                            it for commercial purpose. You can convert this template as a CMS theme or a custom
                            website builder template.
                        </p>
                        <em class="tm-mb-30 tm-color-light-gray">
                            You may support us by telling your friends
                            about our TemplateMo site. Feel free to
                            contact us if you have anything to ask.
                        </em>
                        <p>
                            You can make a little contribution via
                            <a rel="nofollow" href="http://paypal.me/templatemo"
                                target="_parent"><strong>PayPal</strong></a>
                            or saying about TemplateMo to your friends. Duis egestas lorem eu nisi
                            finibus, sit amet elementum lacus pretium.
                        </p>
                        <p>
                            In tempor felis vitae nulla feugiat aliquam.
                            Vivamus vitae congue mi. Sed maximus velit
                            vestibulum nisl condimentum hendrerit.
                        </p>
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <img src="img/testimonial-01.jpg" alt="Image" class="tm-mb-30">
                        <blockquote>
                            <p>
                                "Suspendisse eu mollis diam, at ullamcorper
                                diam. Ut sit amet arcu metus. Nullam mattis
                                eros eget." by <span class="tm-color-primary">George, Chief Editor</span>
                            </p>
                        </blockquote>
                        <blockquote class="tm-mb-50">
                            <p>
                                "Quisque et lorem accumsan, sollicitudin
                                dolor vel, facilisis eros. Donec aliquet felis in
                                mollis egestas." by <span class="tm-color-primary">Mary, CEO of Web</span>
                            </p>
                        </blockquote>
                        <div class="tm-text-center">
                            <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <p>
                            Duis sapien diam, eleifend eget vehicula sed,
                            convallis sit amet elit. Aenean condimentum
                            vulputate porta.
                        </p>
                        <p>
                            Mauris accumsan erat ante, id sagittis felis
                            gravida vitae. Sed iaculis tincidunt neque, a
                            molestie magna vehicula at.
                        </p>
                        <p>
                            Phasellus ornare magna nec nulla pharetra,
                            nec tristique elit lobortis.
                        </p>
                        <img src="img/testimonial-02.jpg" alt="Image" class="tm-mt-35">
                    </div>
                </div>
            </div>
        </div>

        <div id="about" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-color-primary tm-about-col tm-mb-40 tm-page-title">About Adleeway</h2>
            <div class="tm-row tm-about-row">
                <div class="tm-col tm-about-col tm-about-left">
                    <img src="img/about.jpg" alt="Image" class="tm-mb-30">
                    <p class="tm-mb-40">
                        Suspendisse sit amet pellentesque nunc. Vivamus fringilla
                        tellus finibus lacus blandit, siet amet aliquet augue sagittis.
                        Duis nec auctor felis, nec ornare ex. In non ante ligula.
                    </p>
                    <p class="tm-mb-40">
                        Curabitur non augue dignissim est pulvibar lobortis. Nunc
                        vulputate, mi vel cursus mollis, justo mauris rutrum dui, id
                        egestas ante ligula id nunc. Interdum et malesuada fames
                        ac ante ipsum primis in faucibus.
                    </p>
                </div>
                <div class="tm-col tm-about-col">
                    <p class="tm-mb-40">
                        You are NOT allowed to re-distribute this template ZIP file
                        on any website that <span class="tm-color-primary">collects and reposts</span> free templates
                        from many different websites.
                    </p>
                    <p class="tm-mb-40">
                        Pellentesque vitae ipsum vel risus molestie cursus nec quis
                        lectus. Duis egestas lorem eu nisi finibus, sit amet
                        elementum lacus pretium. In tempor felis vitae nulla feugiat aliquam.
                    </p>
                    <p class="tm-mb-40">
                        If you need a working HTML contact form,
                        please visit our <a rel="nofollow" href="https://templatemo.com/contact"
                            target="_parent">contact page</a>. </p>
                    <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact tm-mb-40">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>

        <div id="contact" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
            
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-contact-col tm-color-primary tm-page-title tm-mb-40">Contact Us</h2>
            <div class="tm-row tm-contact-row">
                <div class="tm-col tm-contact-col">

                    <!-- Do you need a working HTML contact form?
                	Please visit https://templatemo.com/contact page -->

                    <form id="contact-form" action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Full Name"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email"
                                required />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="inquiry">
                                <option value="-">Subject</option>
                                <option value="sales">Sales &amp; Marketing</option>
                                <option value="creative">Creative Design</option>
                                <option value="uiux">UI / UX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message"
                                required=></textarea>
                        </div>

                        <div class="form-group tm-text-right">
                            <button type="submit" class="tm-btn tm-btn-primary">Send it now</button>
                        </div>
                    </form>
                </div>
                <div class="tm-col tm-contact-col tm-contact-col-r">
                    <!-- Map -->
                    <div class="mapouter tm-mb-40">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="520" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>

                    <!-- Address -->
                    <address class="tm-mb-40">
                        6th floor, Western Pearls, Hitech City<br>
                        Rd, Kondapur, Telangana 500084
                    </address>

                    <!-- Links -->
                    <ul class="tm-contact-links">
                        <li>
                            <a href="tel:8074183061">
                                <i class="fas fa-phone tm-contact-link-icon"></i>
                                Tel: 8074183061
                            </a>
                        </li>
                        <li>
                            <a href="admin@chiranjeevi.design">
                                <i class="fas fa-at tm-contact-link-icon"></i>
                                Email: admin@chiranjeevi.design
                            </a>
                        </li>
                        <li>
                            <a href="http://www.adleeway.com/">
                                <i class="fas fa-link tm-contact-link-icon"></i>
                                URL: www.adleeway.com/
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="tm-footer">
        <span>Copyright &copy; 2020 Your Company</span>
        <span>Web Designed by
            <a href="https://templatemo.com" title="free website templates" target="_parent"
                rel="nofollow">Chiru</a></span>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>
