<?php session_start();
if (!isset($_SESSION['email'])) {
?>
    <script>
        location.href = "./../main_pages/login.php";
    </script>
<?php

}
?>
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
                <?php if (!isset($_SESSION['email'])) { ?>
                    <ul>
                        <li>
                            <a href="sign_up.php"><i class="flaticon-man-user"></i> ثبت نام</a>
                        </li>
                        <li>
                            <a href="login.php"> <i class="flaticon-login"></i> ورود</a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul>
                        <li>
                            <a href="#" style="width: 200px;"><i class="flaticon-man-user"><?= isset($_SESSION['email']) ? $_SESSION['email'] : ""; ?></i> </a>
                        </li>
                        <li>
                            <a href="logout.php" style="width: 200px;"><i>خروج</i> </a>
                        </li>

                    </ul>

                <?php } ?>
            </div>

            <div class="jb_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">
                        <li class="has-mega gc_main_navigation"><a href="index.php" class="gc_main_navigation">صفحه اصلی</a>
                        </li>
                        <li><a href="job_listing_list_left_filter.php" class="gc_main_navigation">لیست فرصت های شغلی</a></li>
                        <ul class="navi_2_dropdown">
                            <!-- <li class="parent">
                                    <a href="job_listing_grid_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی گرید </a>
                                </li>-->
                            <li class="parent">
                                <a href="job_listing_list_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                            </li>
                            <li class="parent">
                                <a href="job_single.php"> <i class="fas fa-square"></i>شغل تنها</a>
                            </li>
                        </ul>
                        </li>
                        <li class="has-mega gc_main_navigation kv_sub_menu">
                            <a href="#" class="gc_main_navigation"> داوطلبین</a>
                            <!-- mega menu start -->
                            <ul class="kv_mega_menu">

                                <li class="kv_mega_menu_width">
                                    <div class="container">

                                        <div class="jn_menu_partion_div">

                                            <div class="candidate_width">
                                                <div class="jen_tabs_conent_list jb_cover">
                                                    <h1>مهارت های شغلی</h1>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>HTML5 & CSS3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>وردپرس</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>طراحی UI/UX</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>فتوشاپ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>سئو(SEO)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>بوت استرپ</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="candidate_width">
                                                <div class="jen_tabs_conent_list jb_cover">
                                                    <h1>دسته بندی ها</h1>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>طراحی گرافیک</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>برنامه نویس موبایل</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>تولید محتوا</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>پشتیبانی و امور مشتریان</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>آموزش</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>موسیقی و صدا</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="candidate_width">
                                                <div class="jen_tabs_conent_list   jb_cover">
                                                    <h1>موقعیت شغل</h1>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>تهران</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>اصفهان</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>مشهد</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>تبریز</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>کرج</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>اهواز</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="candidate_width">
                                                <div class="jen_tabs_conent_list   jb_cover">
                                                    <div class="open_jobs_wrapper">
                                                        <div class="open_jobs_wrapper_1 jb_cover">

                                                            <div class="open_job_text">
                                                            </div>
                                                        </div>
                                                        <div class="open_jobs_wrapper_1 jb_cover">

                                                            <div class="open_job_text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
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
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>آگهی شغلی</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> صفحه اصلی</a>&nbsp; / &nbsp; </li>
                                <li>آگهی شغلی</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>مشاغل بر اساس دسته بندی</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1" name="cb">
                                <label for="c1">طراح گرافیک<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c2" name="cb">
                                <label for="c2">
                                    مشاغل مهندسی <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c3" name="cb">
                                <label for="c3">مشاغل اصلی <span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c4" name="cb">
                                <label for="c4">مشاغل حقوقی <span> (457)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c5" name="cb">
                                <label for="c5">مشاغل آی تی <span> (254)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c6" name="cb">
                                <label for="c6">مشاغل پرکاربرد <span> (1054)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c7" name="cb">
                                <label for="c7">مشاغل دولتی <span> (1284)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>مشاغل بر اساس موقعیت</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c01" name="cb">
                                <label for="c01">مشاغل در عسلویه
                                    <span> (24)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c02" name="cb">
                                <label for="c02">
                                    مشاغل در مشهد
                                    <span> (1242)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c03" name="cb">
                                <label for="c03">مشاغل در اصفهان
                                    <span>(458)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c04" name="cb">
                                <label for="c04">مشاغل در تبریز
                                    <span> (1047)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c05" name="cb">
                                <label for="c05">مشاغل در تهران<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c06" name="cb">
                                <label for="c06">مشاغل در کرج<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c07" name="cb">
                                <label for="c07">مشاغل در قزوین<span> (124)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>مهارت های شما</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c11" name="cb">
                                <label for="c11">جاوااسکریپت
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c12" name="cb">
                                <label for="c12">
                                    HTML5
                                    <span> (42)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c13" name="cb">
                                <label for="c13">CSS
                                    <span>(158)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c14" name="cb">
                                <label for="c14">بازاریابی
                                    <span> (47)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c15" name="cb">
                                <label for="c15">طراحی وب <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c16" name="cb">
                                <label for="c16">پی اچ پی<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c17" name="cb">
                                <label for="c17">رسانه های اجتماعی<span> (124)</span> </label>
                            </p>

                            <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>حقوق</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <div class="widget price-range">
                                <ul>
                                    <li class="range">
                                        <div id="range-price" class="range-box"></div>

                                        <input type="text" id="price" class="price-box" readonly />
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <h4>دریافت بهترین کارهای مرتبط در ایمیل شما. اضافه کردن رزومه حالا!</h4>
                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">افزودن رزومه</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">
                            <div class="list-grid">
                                <ul class="nav nav-tabs">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#grid"> <i class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                                    </li> -->
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#list"><i class="flaticon-list"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div id="list" class="tab-pane active">
                            <div class="row">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                                mysqli_query($connection, "SET CHARACTER SET 'utf8'");
                                mysqli_query($connection, "SET SESSION collation_connection ='utf8_unicode_ci'");

                                if (mysqli_connect_errno()) {
                                    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());
                                }

                                //Checking is user existing in the database or not
                                $query = "SELECT * FROM `jobs` where cat_type='tech'";
                                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

                                $jobs = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                // var_dump($jobs);die();

                                ?>
                                <?php foreach ($jobs as $job) { ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/logo/<?= $job['logo'] ?>" alt="post_img" />
                                                        <br> <span> <?= $job['company'] ?></span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#"> <?= $job['name'] ?> </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; <?= $job['law'] ?></li>
                                                            <li>
                                                                <i class="flaticon-location-pointer"></i>&nbsp; <?= $job['location'] ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="Developer_job_single1.php"> <?= $job['type'] === '0' ? 'نیمه وقت' : 'پاره وقت' ?></a>
                                                            </li>

                                                            <li><a onclick="editButtonClicked(<?= $job['id'] ?>)" href="?job_id=<?= $job['id'] ?>" id="passingID" class="passingID" data-id="<?= $job['id'] ?>" data-toggle="modal" data-target="#myModal">پاسخ</a></li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="modal fade apply_job_popup" id="myModal" role="dialog">
                                    <?php
                                    $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                                    mysqli_query($connection, "SET CHARACTER SET 'utf8'");
                                    mysqli_query($connection, "SET SESSION collation_connection ='utf8_unicode_ci'");

                                    if (mysqli_connect_errno()) {
                                        exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());
                                    }

                                    //Checking is user existing in the database or not
                                    $emailU = $_SESSION['email'];
                                    $queryU = "SELECT * FROM `users` where email = '$emailU'";
                                    $resultU = mysqli_query($connection, $queryU) or die(mysqli_error($connection));

                                    $user = mysqli_fetch_assoc($resultU);
                                    // var_dump($jobs);die();

                                    ?>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="apply_job jb_cover">
                                                        <h1>درخواست برای این کار :</h1>


                                                        <div class="search_alert_box jb_cover">

                                                            <form data-job-id="<?= $job['id'] ?>" method="post" enctype="multipart/form-data">
                                                                <div class="apply_job_form">

                                                                    <input type="text" readonly value="<?= $user['full_name'] ?>">
                                                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                                </div>
                                                                <div class="apply_job_form">

                                                                    <input type="text" readonly value="<?= $user['email'] ?>">
                                                                </div>
                                                                <div class="apply_job_form">
                                                                    <textarea class="form-control" name="message"></textarea>
                                                                </div>
                                                                <script>
                                                                    function editButtonClicked(data) {

                                                                        let idkl = document.getElementById("idkl");
                                                                        idkl.value = data;
                                                                    }
                                                                </script>
                                                                <input type="hidden" name="job_id" id="idkl" value="">
                                                                <div class="resume_optional jb_cover">
                                                                    <p>رزومه (اختیاری)</p>
                                                                    <div class="width_50">
                                                                        <input name="resume" type="file" id="input-file-now-custom-3" class="dropify" data-height="90" /><span class="post_photo">انتخاب رزومه </span>
                                                                    </div>

                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف
                                                                        فقط (5 مگابایت)</p>
                                                                </div>
                                                                <div class="apply_job_form mt-4">
                                                                    <button type="submit" name="upload" class="btn btn-danger">ارسال درخواست
                                                                    </button>
                                                                </div>

                                                                <?php

                                                                if (isset($_POST['upload'])) {

                                                                    $target_dir = "images/resume/";

                                                                    $target_file = $target_dir . basename($_FILES["resume"]["name"]);
                                                                    $uploadOk = 1;
                                                                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                                                                    $check = getimagesize($_FILES["resume"]["tmp_name"]);
                                                                    if ($check !== false) {
                                                                        //  echo "پرونده انتخابی یک تصویر از نوع - " . $check["mime"] . " است  <br />";
                                                                        $uploadOk = 1;
                                                                    } else {
                                                                        echo "پرونده انتخاب شده یک تصویر نیست  <br />";
                                                                        $uploadOk = 0;
                                                                    }

                                                                    if (file_exists($target_file)) {
                                                                        $target_file = $target_dir . rand(100000000, 10000000000) . basename($_FILES["resume"]["name"]);

                                                                        // echo "پرونده ای با همین نام در سرویس دهنده میزبان وجود دارد  <br />";
                                                                        $uploadOk = 1;
                                                                    }

                                                                    if ($_FILES["resume"]["size"] > (500 * 1024)) {
                                                                        echo "اندازه پرونده انتخابی بیشتر از 500 کیلوبایت است  <br />";
                                                                        $uploadOk = 0;
                                                                    }

                                                                    if (
                                                                        $imageFileType != "jpg" &&
                                                                        $imageFileType != "pdf" && $imageFileType != "png" && $imageFileType !=
                                                                        "jpeg" && $imageFileType != "gif"
                                                                    ) {
                                                                        echo "فقط پسوندهای JPG, JPEG, PNG & GIF برای پرونده مجاز هستند  <br />";
                                                                        $uploadOk = 0;
                                                                    }

                                                                    // die($_FILES["pro_image"]["tmp_name"]);

                                                                    if ($uploadOk == 0) {
                                                                        // echo "پرونده انتخاب شده به سرویس دهنده میزبان ارسال نشد <br />";
                                                                    } else {
                                                                        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
                                                                            // echo "پرونده " . basename($_FILES["avatar"]["name"]) .
                                                                            //     " با موفقیت به سرویس دهنده میزبان انتقال یافت  <br />";
                                                                        } else {
                                                                            // echo "خطا در ارسال پرونده به سرویس دهنده میزبان رخ داده است <br />";
                                                                        }
                                                                    }

                                                                    if ($uploadOk == 1) {
                                                                        $user_id = $_POST['user_id'];
                                                                        $message = $_POST['message'];
                                                                        $job_id = $_POST['job_id'];
                                                                        $resume = $_FILES['resume']['name'];

                                                                        $connection = mysqli_connect("localhost", "root", "", "jobdesk");

                                                                        $query = "INSERT INTO job_user (
                                                                                            user_id,message,job_id,resume) VALUES ('$user_id','$message','$job_id','$resume')";

                                                                        if (mysqli_query($connection, $query) === true) {

                                                                            echo ("<p style='color:green;'><b>درخواست شما  با موفقیت ارسال شد</b></p>");
                                                                ?>
                                                                            <script>
                                                                                location.href = "Technology_job_listing.php";
                                                                            </script>
                                                                <?php

                                                                        } else {
                                                                            echo ("<p style='color:red;'><b>خطا در ثبت درخواست</b></p>");
                                                                        }
                                                                    } else {
                                                                        echo ("<p style='color:red;'><b>خطا در ثبت درخواست</b></p>");
                                                                    }

                                                                    mysqli_close($connection);
                                                                }

                                                                ?>
                                                            </form>

                                                        </div>
                                                        <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                            <a href="#">درخواست کنید</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog_pagination_section jb_cover">
                                    <ul>
                                        <li>
                                            <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                        </li>
                                        <li><a href="#">1</a>
                                        </li>
                                        <li class="third_pagger"><a href="#">2</a>
                                        </li>
                                        <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                        </li>
                                        <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                        </li>
                                        <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                        </li>

                                        <li>
                                            <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                        <div class="job_filter_category_sidebar jb_cover">
                            <div class="job_filter_sidebar_heading jb_cover">
                                <h1>مشاغل بر اساس طبقه بندی</h1>
                            </div>

                            <div class="category_jobbox jb_cover">
                                <p class="job_field">
                                    <input type="checkbox" id="c1111" name="cb">
                                    <label for="c1111">طراح گرافیک<span> (155)</span></label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c22" name="cb">
                                    <label for="c22">
                                        مشاغل مهندسی <span> (514)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c33" name="cb">
                                    <label for="c33">مشاغل اصلی <span> (554)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c44" name="cb">
                                    <label for="c44">مشاغل حقوقی <span> (457)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c55" name="cb">
                                    <label for="c55">مشاغل آی تی <span> (254)</span> </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c66" name="cb">
                                    <label for="c66">مشاغل پرکاربرد <span> (1054)</span> </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c77" name="cb">
                                    <label for="c77">مشاغل دولتی <span> (1284)</span> </label>
                                </p>
                                <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                            </div>

                        </div>
                        <div class="job_filter_category_sidebar jb_cover">
                            <div class="job_filter_sidebar_heading jb_cover">
                                <h1>مشاغل بر اساس موقعیت</h1>
                            </div>

                            <div class="category_jobbox jb_cover">
                                <p class="job_field">
                                    <input type="checkbox" id="c011" name="cb">
                                    <label for="c011">مشاغل در دهلی
                                        <span> (24)</span></label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c021" name="cb">
                                    <label for="c021">
                                        مشاغل در بمبئی
                                        <span> (1242)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c031" name="cb">
                                    <label for="c031">مشاغل در چنای
                                        <span>(458)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c041" name="cb">
                                    <label for="c041">مشاغل در دبی
                                        <span> (1047)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c051" name="cb">
                                    <label for="c051">مشاغل در نپال <span> (124)</span> </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c061" name="cb">
                                    <label for="c061">مشاغل در پونه <span> (124)</span> </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c071" name="cb">
                                    <label for="c071">مشاغل در بنگلور <span> (124)</span> </label>
                                </p>
                                <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                            </div>
                        </div>
                        <div class="job_filter_category_sidebar jb_cover">
                            <div class="job_filter_sidebar_heading jb_cover">
                                <h1>مهارت های شما</h1>
                            </div>

                            <div class="category_jobbox jb_cover">
                                <p class="job_field">
                                    <input type="checkbox" id="c111" name="cb">
                                    <label for="c111">جاوااسکریپت
                                        <span> (124)</span></label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c121" name="cb">
                                    <label for="c121">
                                        HTML5
                                        <span> (42)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c131" name="cb">
                                    <label for="c131">CSS
                                        <span>(158)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c141" name="cb">
                                    <label for="c141">بازاریابی
                                        <span> (47)</span>
                                    </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c151" name="cb">
                                    <label for="c151">طراحی وب <span> (124)</span> </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c161" name="cb">
                                    <label for="c161">پی اچ پی<span> (124)</span> </label>
                                </p>
                                <p class="job_field">
                                    <input type="checkbox" id="c171" name="cb">
                                    <label for="c171">رسانه های اجتماعی<span> (124)</span> </label>
                                </p>

                                <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                            </div>
                        </div>
                        <div class="job_filter_category_sidebar jb_cover">
                            <div class="job_filter_sidebar_heading jb_cover">
                                <h1>حقوق</h1>
                            </div>

                            <div class="category_jobbox jb_cover">
                                <div class="widget price-range">
                                    <ul>
                                        <li class="range">
                                            <div id="responsive_range_price" class="range-box"></div>

                                            <input type="text" id="responsive_price" class="price-box" readonly />
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="jp_add_resume_wrapper jb_cover">
                            <div class="jp_add_resume_img_overlay"></div>
                            <div class="jp_add_resume_cont">
                                <h4>دریافت بهترین کارهای مرتبط در ایمیل شما. اضافه کردن رزومه حالا!</h4>
                                <div class="width_50">
                                    <input type="file" id="input-file-now-custom-203" class="dropify" data-height="90" /><span class="post_photo">افزودن رزومه</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--job listing filter  wrapper end-->
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
        <!-- news app wrapper end-->
        <!-- footer Wrapper Start -->
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

                                <li><a href="#"><i class="fa fa-square"></i> امنیت</a></li>

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

        <!-- footer Wrapper End -->
        <!-- chat box Wrapper start -->
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
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/dropify.min.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- custom js-->
        <script>
        </script>
</body>

</html>