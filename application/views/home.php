

<?php var_dump($this->_ci_cached_vars); ?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="images/logo3.png">

        <title><?php echo $genaral[0]; ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- Animate -->
        <link href="<?php echo base_url() ?>css/animate.css" rel="stylesheet">

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/magnific-popup.css">

        <!-- Icon-font -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/ionicons.min.css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url() ?>js/html5shiv.js"></script>
          <script src="<?php echo base_url() ?>js/respond.min.js"></script>
        <![endif]-->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-64308715-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>

    <body>
        <!-- Pre-loader -->
        <div class="preloader">
            <div class="status">&nbsp;</div>
        </div>



        <div class="navbar navbar-custom sticky" role="navigation">
            <div class="container">
                <!-- Navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="ion-navicon"></i>
                    </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="#">
                        <i class=""><img src="<?php echo base_url() ?>images/logo3.png" width="50px"></i>
                        <span>Nuwan</span>
                    </a>
                </div>
                <!-- end navbar-header -->

                <!-- menu -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>

                        <li>
                            <a href="#works">Works</a>
                        </li>
                        <li>
                            <a href="#team">Team</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>

                    </ul>
                </div>
                <!--/Menu -->
            </div>
            <!-- end container -->
        </div>
        <div class="clearfix"></div>




        <!-- HOME -->
        <section class="home bg-img" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="home-wrapper">
                            <h1 class="animated fadeInDown wow" data-wow-delay=".1s"><?php echo $genaral[0]->content; ?></h1>
                            <h4 class="animated fadeInDown wow" data-wow-delay=".2s"><?php echo $genaral[1]->content; ?></h4>
                            <a href="#" class="btn btn-custom btn-rnd animated fadeInDown wow" data-wow-delay=".4s">Browse gallary</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->





        <!-- FEATURES-1 -->
        <section class="section" id="services">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="text-uppercase font-bold"><?php echo $genaral[3]->content; ?></h3>
                        <div class="title-hr"></div>

                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <p class="sub-title"><?php echo $genaral[4]->content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wedo">
                <div class="text-center container">
                    <div class="row">

                        <div class="col-sm-4 wow fadeInLeft animated">
                            <div class="services-box">



                                <div>
                                    <ul class="tick-bullet">
                                        <li>House demolish</li>
                                        <li>interier design</li>
                                        <li>House repair & maintance</li>
                                        <li>wood  works</li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 wow fadeInUp animated">
                            <div class="services-box">



                                <div>
                                    <ul class="tick-bullet">
                                        <li>Electrical Installation</li>
                                        <li>Walls & Floor Tilling</li>
                                        <li>Drainage Works</li>
                                        <li>wood  works</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 wow fadeInRight animated">
                            <div class="services-box">


                                <div>
                                    <ul class="tick-bullet">
                                        <li>Preparing BOQ</li>
                                        <li>interier design</li>
                                        <li>House repair & maintance</li>
                                        <li>wood  works</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- END FEATURES-1 -->


        <!-- SCREENSHOTS -->
        <section class="section" id="works">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="text-uppercase font-bold zoomIn animated wow">Latest Works</h3>
                        <div class="title-hr"></div>

                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <p class="sub-title zoomIn animated wow" data-wow-delay=".2s"><?php echo $genaral[5]->content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <a href="images/shots/enhanced/m4.jpg" class="thumb preview-thumb image-popup" title="Screenshot-1">
                            <img src="<?php echo base_url() ?>images/shots/enhanced/m5.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/shots/enhanced/m2.jpg" class="thumb preview-thumb image-popup" title="Screenshot-2">
                            <img src="<?php echo base_url() ?>images/shots/enhanced/m2.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/shots/enhanced/m3.jpg" class="thumb preview-thumb image-popup" title="Screenshot-3">
                            <img src="<?php echo base_url() ?>images/shots/enhanced/m3.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-4">
                        <a href="images/shots/enhanced/m7.jpg" class="thumb preview-thumb image-popup" title="Screenshot-4">
                            <img src="<?php echo base_url() ?>images/shots/enhanced/m7.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/shots/enhanced/m5.jpg" class="thumb preview-thumb image-popup" title="Screenshot-5">
                            <img src="<?php echo base_url() ?>images/shots/enhanced/m5.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="images/shots/enhanced/m6.jpg" class="thumb preview-thumb image-popup" title="Screenshot-6">
                            <img src="<?php echo base_url() ?>images/shots/enhanced/m6.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="text-center gal-loadmore">
                <button class="btn btn-mstyle ">Load more</button>
            </div>
        </section>
        <!-- END SCREENSHOTS -->


        <!-- TESTIMONIALS -->

        <section class="section bg-dark footer-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="zoomIn animated wow" data-wow-delay=".1s">
                            <img src="<?php echo base_url() ?>images/quote-icon.png" alt="quote">
                            <blockquote>To achieve the status of a recognized and reputed building contractor, thereby contributing to the advancement of the industry and also participate in the development of the country.</blockquote>
                            <div class="clientblock">
                                <img src="<?php echo base_url() ?>images/testi-1.jpg" alt="." class="img-circle">
                                <p><strong>Shashika jayashekara</strong>
                                    <br> CEO &amp; Founder of nuwan construction limited</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--END TESTIMONIALS -->


        <!-- FOOTER -->
        <footer class="section bg-gray footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h5>NUWAN</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Features</a>
                            </li>
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5>Social</h5>
                        <ul class="list-unstyled">
                            <?php
                            foreach($social as $media){
                               echo "<li><a href='$media->link'>".$media->name."</a></li>";
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5>Support</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Help & Support</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5>Contact</h5>
                        <address>
                            <?php echo $contact["address1"] ?><br>
                            <?php echo $contact["address2"] ?><br>
                            <abbr title="Phone">P:</abbr> <?php echo $contact["phone1"] ?> <br/>
                            E: <a href="mailto:<?php echo $contact["email"] ?>"><?php echo $contact["email"] ?></a>
                        </address>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-alt">
                            <p class="pull-right">2015 © Nuwan</p>
                            <p class="logo"> <i class=""><img src="<?php echo base_url() ?>images/logo3.png" width="40px"></i>Nuwan Construction</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- END FOOTER -->




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>js/jquery.js"></script>
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <!-- Jquery easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
        <script src="<?php echo base_url() ?>js/wow.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script src="<?php echo base_url() ?>js/waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>js/jquery.counterup.min.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="<?php echo base_url() ?>js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>



    </body>

</html>