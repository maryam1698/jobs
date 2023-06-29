<!DOCTYPE html>
<!--
Template Name: JB desks
Version: 1.0.0
Author:

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from paradigm-shift.ir/Jbdesks/main_pages/job_listing_list_left_filter.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2019 10:49:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>job listing list</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="JB desks,job portal,job" />
    <meta name="keywords" content="JB desks,job portal,job" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/dropify.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <div class="jb_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="cursor"></div>
    <!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <a href="#0" class="cd-close">بستن</a>
        <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="جستجو...">
                </form>
            </li>
            <li class="has-children">
                <a href="#">صفحه اصلی</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">مشاغل</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                    <li><a href="job_listing_grid_left_filter.php">آگهی شغلی گرید </a></li>
                    <li><a href="job_listing_list_left_filter.php">آگهی شغلی لیست</a></li>
                    <li><a href="job_single.php">شغل تنها</a></li>
                </ul>
            </li>
            <!-- .has-children -->
            <li class="has-children">
                <a href="#">صفحات</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                    <li><a href="about_us.php">درباره ما</a></li>
                    <li><a href="companies.php">شرکت ها</a></li>
                    <li><a href="company_single.php">شرکت تنها</a></li>
                    <li><a href="error_page.php">صفحه ارور</a></li>
                    <li><a href="login.php">ورود</a></li>
                    <li><a href="pricing_table.php">جدول قیمت گذاری</a></li>
                    <li><a href="sign_up.php">ثبت نام</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">داشبورد</a>
                <ul class="cd-secondary-dropdown is-hidden">
                    <li class="go-back"><a href="#0">منو</a>
                    </li>
                    <li class="has-children"> <a href="#">داوطلب</a>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">منو</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_applied_job.php">شغل تاییده شده </a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_dashboard.php">داشبورد</a>
                            </li>
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                            mysqli_query($connection, "SET CHARACTER SET 'utf8'");
                            mysqli_query($connection, "SET SESSION collation_connection ='utf8_unicode_ci'");

                            if (mysqli_connect_errno()) {
                                exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());
                            }

                            //Checking is user existing in the database or not
                            $email = $_SESSION['email'];
                            $query = "SELECT * FROM `users` WHERE email='$email' ";
                            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                            $type_user = mysqli_fetch_assoc($result);
                            ?>
                            <li>
                                <a href="<?= $type_user['permission'] === "0" ? './../dashboard/candidate_edit_profile.php' : './../dashboard/comp_employer_edit_profile.php ' ?> "> ویرایش پروفایل</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_favourite_job.php">شغل موردعلاقه</a>
                            </li>
                            <li>
                                <a href="../dashboard/candidate_resume.php"> رزومه</a>
                            </li>
                            <li>
                                <a href="../dashboard/message.php"> پیام</a>
                            </li>
                            <li>
                                <a href="../dashboard/pricing_plans.php">برنامه های قیمت گذاری</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                    <!-- .has-children -->
                    <li class="has-children"> <a href="#">شرکت</a>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">منو</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_applications.php"> برنامه ها </a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_company_page.php">صفحه شرکت</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_employer_dashboard.php"> داشبورد</a>
                            </li>
                            <li>
                                <a href="<?= $type_user['permission'] === "0" ? './../dashboard/candidate_edit_profile.php' : './../dashboard/comp_employer_edit_profile.php ' ?> "> ویرایش پروفایل</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_employer_manage_jobs.php"> مدیریت مشاغل</a>
                            </li>
                            <li>
                                <a href="../dashboard/comp_post_new_job.php"> ارسال شغل جدید</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                </ul>
                <!-- .cd-secondary-dropdown -->
            </li>
            <li><a href="contact_us.php">تماس با ما </a></li>
            <li><a href="login.php">ورود</a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper jb_cover">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <p>3SOOTJOBS</p>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="menu_btn_box header_btn jb_cover">
                <ul>
                    <li>
                        <a href="sign_up.php"><i class="flaticon-man-user"></i> ثبت نام</a>
                    </li>
                    <li>
                        <a href="login.php"> <i class="flaticon-login"></i> ورود</a>
                    </li>
                </ul>
            </div>

            <div class="jb_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">صفحه اصلی</a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="index.php"><i class="fas fa-square"></i>صفحه 1 </a>
                                </li>


                            </ul>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">لیست فرصت های شغلی</a>
                            <ul class="navi_2_dropdown">
                                <!-- <li class="parent">
                                    <a href="job_listing_grid_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی گرید </a>
                                </li>-->
                                <li class="parent">
                                    <a href="job_listing_list_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                                </li>
                                <li class="parent">
                                </li>

                                <li class="parent">
                                    </span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>

                                        </li>
                                        <li>
                                            <a href="job_listing_list_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                                        </li>
                                        <li>
                                            <a href="job_single.php"> <i class="fas fa-square"></i>شغل تنها</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-mega gc_main_navigation kv_sub_menu">
                            <a href="#" class="gc_main_navigation"> داوطلبین</a>

                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                </li>
                                <li class="parent">
                                </li>
                                <li class="parent">
                                </li>
                                <li class="parent">
                                </li>
                                <li class="parent">
                                </li>
                                <li class="parent">
                                </li>
                                <li class="parent">
                                </li>

                            </ul>
                        </li>
                        </li>

                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">داشبورد</a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="#"><i class="fas fa-square"></i>داوطلب<span><i class="fas fa-chevron-right"></i>
                                        </span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>
                                            <a href="../dashboard/candidate_applied_job.php"> <i class="fas fa-square"></i>شغل تاییده شده </a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/candidate_dashboard.php"> <i class="fas fa-square"></i> داشبورد</a>
                                        </li>
                                        <li>
                                            <a href="<?= $type_user['permission'] === "0" ? './../dashboard/candidate_edit_profile.php' : './../dashboard/comp_employer_edit_profile.php ' ?> "> ویرایش پروفایل</a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/candidate_resume.php"> <i class="fas fa-square"></i>رزومه</a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/message.php"> <i class="fas fa-square"></i>پیام</a>
                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#"><i class="fas fa-square"></i>شرکت<span><i class="fas fa-chevron-right"></i>
                                        </span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>
                                            <a href="../dashboard/comp_applications.php"> <i class="fas fa-square"></i>برنامه ها </a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/comp_company_page.php"> <i class="fas fa-square"></i> صفحه شرکت</a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/comp_employer_dashboard.php"> <i class="fas fa-square"></i>داشبورد</a>
                                        </li>
                                        <li>
                                            <a href="<?= $type_user['permission'] === "0" ? './../dashboard/candidate_edit_profile.php' : './../dashboard/comp_employer_edit_profile.php ' ?> "> ویرایش پروفایل</a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/comp_employer_manage_jobs.php"> <i class="fas fa-square"></i>مدیریت مشاغل</a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/comp_post_new_job.php"> <i class="fas fa-square"></i>ارسال شغل جدید</a>
                                        </li>
                                        <li>
                                            <a href="../dashboard/message.php"> <i class="fas fa-square"></i>پیام</a>
                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- mainmenu end -->
                <div class="jb_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary-dark">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="برای جستجو تایپ کنید ...">
                            <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>ثبت نام</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> خانه </a>&nbsp; / &nbsp; </li>
                                <li>ثبت نام</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- sign up wrapper start -->
    <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover">
                        <div class="login_banner_wrapper">
                            <div class="header_btn search_btn facebook_wrap jb_cover">
                            </div>
                            <div class="header_btn search_btn google_wrap jb_cover">

                            </div>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>یا</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper signup_wrapper">
                            <form action="" method="post">
                                <h2>ثبت نام</h2>
                                <div class="form-group icon_form comments_form">

                                    <input type="text" class="form-control require" name="full_name" placeholder="نام کامل*">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="form-group icon_form comments_form">

                                    <input type="text" class="form-control require" name="email" placeholder="آدرس ایمیل*">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="form-group icon_form comments_form">

                                    <input type="password" name="password" class="form-control " placeholder="رمزعبور *">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="login_remember_box">
                                    <label class="control control--checkbox">مرا به خاطر بسپار
                                        <input type="checkbox">
                                        <span class="control__indicator"></span>
                                    </label>
                                    <a href="#" class="forget_password">
                                        فراموشی رمزعبور
                                    </a>
                                </div>
                                <div class="header_btn search_btn login_btn jb_cover">

                                    <button type="submit" name="register">ثبت نام</button>
                                </div>
                                <div class="dont_have_account jb_cover">
                                    <p>حساب کاربری ندارید؟ <a href="login.php">ورود</a></p>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['register'])) {
                                $full_name = $_POST['full_name'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                if (empty($username)) {
                                    echo "<div style='width:100%;text-align:center;margin-top:10px;'><span style='color:red;'>
                                    	نام  نمیتواند خالی باشد
                                    	</span></div><br>";
                                }
                                if (empty($password)) {
                                    echo "<div style='width:100%;text-align:center;margin-top:10px;'><span style='color:red;'>
                                    	کلمه عبور  نمیتواند خالی باشد
                                    	</span></div><br>";
                                }

                                if (empty($email)) {
                                    echo "<div style='width:100%;text-align:center;margin-top:10px;'><span style='color:red;'>
                                    	 ایمیل  نمیتواند خالی باشد
                                    	</span></div><br>";
                                }

                                if (!empty($full_name) && !empty($email) && !empty($password)) {
                                    $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                                    mysqli_query($connection, "SET CHARACTER SET 'utf8'");
                                    mysqli_query($connection, "SET SESSION collation_connection ='utf8_unicode_ci'");

                                    if (mysqli_connect_errno()) {
                                        exit("خطايی    رخ داده است :" . mysqli_connect_error());
                                    }
                                    $queryE = "SELECT * FROM `users` WHERE email='$email'";
                                    $resultE = mysqli_query($connection, $queryE);
                                    // $rows = mysqli_num_rows($result);
                                    $row_email = mysqli_fetch_assoc($resultE);
                                    if ($row_email['email'] === $email) {
                                        echo "<div style='width:100%;text-align:center;margin-top:10px;'><span style='color:red;'>
                                    	 ایمیل  تکراری  میباشد
                                    	</span></div><br>";
                                        return false;
                                    }

                                    $sql = "INSERT INTO users " .
                                        "(full_name,email, password) " . "VALUES " .
                                        "('$full_name','$email','$password')";

                                    if ($connection->query($sql)) {
                                        echo "<div class='errors'><span class='' style='color:green;font-weight:bold'> ثبت نام شما با موفقیت انجام شد</span><br></div>";
                            ?>
                                        <script>
                                            location.href = "login.php";
                                        </script>

                            <?php

                                    }

                                    if ($connection->errno) {
                                        echo "<div class='errors'><span class='error'>خطایی رخ داده است !!!   </span><br></div>";
                                    }
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up wrapper end -->

    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> به دنبال یک شغل</h2>
                            <p>سطح بعدی شما دارایی های شرکت توسعه محصول سطح بعدی شما محصول </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <a href="#">تایید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer jb_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">
                        <ul class="footer_first_contact">
                            <li><i class="flaticon-location-pointer"></i>
                                <p>ناجی آباد، شقایق 4، فرعی سوم، پلاک 13
                                    <br> استان اصفهان، شهرستان کاشان، ایران.
                                </p>
                            </li>
                            <li><i class="flaticon-telephone"></i>
                                <p>09962092639
                                    <br> 09368582572
                                </p>
                            </li>
                            <li><i class="flaticon-envelope"></i><a href="#">melikahelali2570@gmail.com </a>
                            </li>

                        </ul>

                        <ul class="icon_list_news jb_cover">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>ویژگی ها</h5>
                        <ul class="nav-widget">
                            <!-- <li><a href="#"><i class="fa fa-square"></i>مدیریت کار و صورتحساب
</a></li> -->

                            <li><a href="#"><i class="fa fa-square"></i>لیست های شغلی
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>جستجوی شغل
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>ثبت نام و احراز هویت کاربر
                                </a></li>

                            <li><a href="#"><i class="fa fa-square"></i>اعلان های ایمیل
                                </a></li>

                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop gradient-color">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>

    </div>
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    <div class="footer jb_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">

                        <div id="chat-circle" class="btn btn-raised">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <div class="chat-box">
                            <div class="chat-box-header">
                                باکس چت
                                <span class="chat-box-toggle"><i class="fas fa-times"></i></span>
                            </div>
                            <div class="chat-box-body">
                                <div class="chat-box-overlay">
                                </div>
                                <div class="chat-logs">

                                </div>
                                <!--chat-log -->
                            </div>
                            <div class="chat-input">
                                <form>
                                    <input type="text" id="chat-input" placeholder="ارسال یک پیام..." />
                                    <button type="submit" class="chat-submit" id="chat-submit"><i class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- chat box Wrapper end -->
                        <!--custom js files-->
                        <script src="js/jquery-3.3.1.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/modernizr.js"></script>
                        <script src="js/jquery.menu-aim.js"></script>
                        <script src="js/plugin.js"></script>
                        <script src="js/owl.carousel.js"></script>
                        <script src="js/jquery.countTo.js"></script>
                        <script src="js/jquery-ui.js"></script>
                        <script src="js/dropify.min.js"></script>
                        <script src="js/jquery.magnific-popup.js"></script>
                        <script src="js/jquery.inview.min.js"></script>
                        <script src="js/jquery.nice-select.min.js"></script>
                        <script src="js/imagesloaded.pkgd.min.js"></script>
                        <script src="js/isotope.pkgd.min.js"></script>
                        <script src="js/custom.js"></script>
                        <!-- custom js-->
</body>


<!-- Mirrored from paradigm-shift.ir/Jbdesks/main_pages/sign_up.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2019 10:49:15 GMT -->

</html>