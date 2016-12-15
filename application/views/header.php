<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <title><?php echo $title . "- Nazipur High School"; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="College Education Responsive Template">
        <meta name="author" content="Esmet">
        <meta charset="UTF-8">

        <link href='http://fonts.googleapis.com/css?family=Ropa+Sans|Raleway|Play|Hind+Siliguri:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

        <!-- CSS Bootstrap & Custom -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" media="screen">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/ico/favicon.ico">

        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>js/code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>js/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>js/breakingNews.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
            </div>
        <![endif]-->
    </head>
    <body>

        <!-- This one in here is responsive menu for tablet and mobiles -->
        <div class="responsive-navigation visible-sm visible-xs">
            <a href="#" class="menu-toggle-btn">
                <i class="fa fa-bars"></i>
            </a>
            <div class="responsive_menu">
                <ul class="main_menu">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="#">Notice</a>
                        <ul>
                            <li><a href="events-grid.html">Events Grid</a></li>
                            <li><a href="events-list.html">Events List</a></li>
                            <li><a href="event-single.html">Event Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Courses</a>
                        <ul>
                            <li><a href="courses.html">Course List</a></li>
                            <li><a href="course-single.html">Course Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog Entries</a>
                        <ul>
                            <li><a href="blog.html">Blog Grid</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-disqus.html">Blog Disqus</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="archives.html">Archives</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="gallery.html">Our Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul> <!-- /.main_menu -->
                <ul class="social_icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul> <!-- /.social_icons -->
            </div> <!-- /.responsive_menu -->
        </div> <!-- /responsive_navigation -->


        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 header-right">
                        <a href="index.html" title="Universe" rel="home">
                            <img class="logo_img" src="<?php echo base_url(); ?>images/logo.png" alt="Universe">
                        </a>
                    </div> <!-- /.header-left -->

                    <div class="col-md-8 header-center">
                        <div class="logo">
                            <a href="index.html" title="Universe" rel="home">
                                <h1 class="school_name ">Chak Moiram Model High School</h1>
                            </a>
                            <p style="color:#D3D3D3;font-size: 17px;">Patnitala, Naogaon</p>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-2 header-left">
                        <ul class="small-links">
                            <li><a href="<?php echo base_url('admin/admin-login'); ?>">Login</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <p><i class="fa fa-phone"></i> +01 2334 853</p>
                    </div> <!-- /.header-right -->
                </div>
            </div> <!-- /.container -->

            <div class="nav-bar-main" role="navigation">
                <div class="container">
                    <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                            <?php foreach ($pages->result() as $value) { ?>
                                <li class="<?php echo $this->uri->segment(1) == $value->uri_segment ? 'active' : '' ?>"><a href="<?php echo base_url($value->uri_segment); ?>"><?php echo $value->page_name; ?></a>

                                    <?php
                                    if ($value->has_sub_page) {

                                        $subPages = $this->db->query("select * from subpages where page_id = '$value->id'")->result();
                                        ?>
                                        <ul class="sub-menu">
                                            <?php foreach ($subPages as $value2) { ?>
                                                <li><a href="<?php echo base_url('sub-pages/'.$value2->uri_segment); ?>"><?php echo $value2->sub_page_name; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>

                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                        </ul> <!-- /.social-icons -->
                    </nav> <!-- /.main-navigation -->
                </div> <!-- /.container -->
            </div> <!-- /.nav-bar-main -->

        </header> <!-- /.site-header -->

        <!-- NEWS STICKY -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-content-inner news_ticker">
                        <div class="breakingNews" id="bn2">
                            <div class="bn-title"><h2>BREAKING NEWS</h2><span></span></div>
                            <ul>
                                <li><a href="#"> রাজশাহীতে এখন প্রচন্ড তাপদাহ.....তাই শিক্ষার্থীদের জন্য খুলে দেয়া হয়েছে রাজশাহী বিশ্ববিদ্যালয় সুইমিং পুল।</a>
                                </li>
                                <li><a href="#">পলাশ ফুলের ক্যাম্পাস এখন রাজশাহী বিশ্ববিদ্যালয় </a>
                                </li>

                                <li><a href="#"> রাজশাহীবিশ্ববিদ্যালয়ের (রাবি) শিক্ষার্থীদের পরিবহন সুবিধা বৃদ্ধির জন্য আরো একটি নতুন বাস চালু করা হয়েছে</a>
                                </li>
                                <li><a href="#"> শিক্ষক হত্যার প্রতিবাদ ও বিচার দাবিতে আজ রাজশাহী বিশ্ববিদ্যালয়ের শিক্ষার্থীরা কফিন মিছিল করে।  </a>
                                </li>
                                <li><a href="#"> I want to develope students jeal,grit and mental courage.</a>
                                </li>

                            </ul>
                            <div class="bn-navi">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">