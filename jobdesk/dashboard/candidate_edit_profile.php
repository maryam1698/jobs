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


<!-- Mirrored from paradigm-shift.ir/Jbdesks/dashboard/candidate_edit_profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2019 10:49:09 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Edit Candidate Profile</title>
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
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <div class="">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="cursor"></div>
    <!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="index.php"> <span><img src="images/logo.png" alt="img"></span></a></h2>
        <a href="#0" class="cd-close">بستن</a>
        <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="جستجو...">
                </form>
            </li>
            <li class="has-children">
                <a href="#">خانه</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                    <li><a href="../main_pages/index.php">خانه 1</a></li>
                    <li><a href="../main_pages/index_II.php">خانه 2</a></li>
                    <li><a href="../main_pages/index_III.php">خانه 3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#">مشاغل</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                    <li><a href="../main_pages/job_listing_grid_left_filter.php">آگهی شغلی گرید </a></li>
                    <li><a href="../main_pages/job_listing_list_left_filter.php">آگهی شغلی لیست</a></li>
                    <li><a href="../main_pages/job_single.php">شغل تنها</a></li>
                </ul>
            </li>
            <!-- .has-children -->
            <li class="has-children">
                <a href="#">صفحات</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                    <li><a href="../main_pages/about_us.php">درباره ما</a></li>
                    <li><a href="../main_pages/companies.php">شرکت ها</a></li>
                    <li><a href="../main_pages/company_single.php">شرکت تنها</a></li>
                    <li><a href="../main_pages/error_page.php">صفحه ارور</a></li>
                    <li><a href="../main_pages/login.php">ورود</a></li>
                    <li><a href="../main_pages/pricing_table.php">جدول قیمت گذاری</a></li>
                    <li><a href="../main_pages/sign_up.php">ثبت نام</a></li>
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
                                <a href="candidate_applied_job.php">شغل تاییده شده </a>
                            </li>
                            <li>
                                <a href="candidate_dashboard.php">داشبورد</a>
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
                                <a href="<?= $type_user['permission'] === "0" ? './dashboard/candidate_edit_profile.php' : './dashboard/comp_employer_edit_profile.php' ?> "> ویرایش پروفایل</a>
                            </li>
                            <li>
                                <a href="candidate_favourite_job.php">شغل موردعلاقه</a>
                            </li>
                            <li>
                                <a href="candidate_resume.php"> رزومه</a>
                            </li>
                            <li>
                                <a href="message.php"> پیام</a>
                            </li>
                            <li>
                                <a href="pricing_plans.php">برنامه های قیمت گذاری</a>
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
                                <a href="comp_applications.php"> برنامه ها </a>
                            </li>
                            <li>
                                <a href="comp_company_page.php">صفحه شرکت</a>
                            </li>
                            <li>
                                <a href="comp_employer_dashboard.php"> داشبورد</a>
                            </li>
                            <li>
                                <a href="<?= $type_user['permission'] === "0" ? './dashboard/candidate_edit_profile.php' : './dashboard/comp_employer_edit_profile.php' ?> "> ویرایش پروفایل</a>
                            </li>
                            <li>
                                <a href="comp_employer_manage_jobs.php"> مدیریت مشاغل</a>
                            </li>
                            <li>
                                <a href="comp_post_new_job.php"> ارسال شغل جدید</a>
                            </li>
                            <li>
                                <a href="message.php">پیام</a>
                            </li>
                            <li>
                                <a href="pricing_plans.php">برنامه های قیمت گذاری</a>
                            </li>
                        </ul>
                        <!-- .cd-secondary-dropdown -->
                    </li>
                </ul>
                <!-- .cd-secondary-dropdown -->
            </li>
            <li class="has-children">
                <a href="#">وبلاگ</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">منو</a></li>
                    <li><a href="../main_pages/blog_single.php">وبلاگ تنها</a></li>
                    <li><a href="../main_pages/blog_category_right_sidebar.php">دسته بندی وبلاگ</a></li>
                </ul>
            </li>
            <li><a href="../main_pages/contact_us.php">تماس با ما </a></li>
            <li><a href="../main_pages/login.php">ورود</a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper jb_cover">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="../main_pages/index.php">
                    <p>3SOOTJOBS</p>
                </a>
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
            <div class="menu_btn_box jb_cover">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                $emailP = $_SESSION['email'];
                $queryP = "SELECT * FROM `users` WHERE email='$emailP'";
                $resultP = mysqli_query($connection, $queryP) or die(mysqli_error($connection));
                $info = mysqli_fetch_assoc($resultP);
                ?>
                <div class="jb_profile_box">
                    <div class="nice-select" tabindex="0"> <span class="current">

                            <img src="images/<?= $info['avatar'] ?>" alt="img">
                            <div class="luca_profile_wrapper">
                                <h1><a href="#">3sootjabs </a></h1>
                                <p><a href="#"><?= $info['email'] ?></a></p>
                            </div>
                        </span>
                        <ul class="list">
                            <li><a href="#"><i class="fas fa-user-edit"></i>حساب</a>
                            </li>
                            <li><a href="#"><i class="fas fa-cog"></i>تنظیمات</a>
                            </li>
                            <li><a href="#"><i class="fas fa-sign-in-alt"></i>خروج</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="jb_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">صفحه اصلی</a>

                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="../main_pages/index.php"><i class="fas fa-square"></i>صفحه 1 </a>
                                </li>
                                <li class="parent">

                                </li>
                                <li class="parent">

                                </li>

                            </ul>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">لیست فرصت های شغلی</a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">

                                </li>
                                <li class="parent">
                                    <a href="../main_pages/job_listing_list_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                                </li>
                                <li class="parent">
                                    <a href="../main_pages/job_single.php"> <i class="fas fa-square"></i>شغل تنها</a>
                                </li>

                                <li class="parent">

                                    </span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>
                                            <a href="../main_pages/job_listing_grid_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی گرید </a>
                                        </li>
                                        <li>
                                            <a href="../main_pages/job_listing_list_left_filter.php"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                                        </li>
                                        <li>
                                            <a href="../main_pages/job_single.php"> <i class="fas fa-square"></i>شغل تنها</a>
                                        </li>
                                    </ul>
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
                                                            <a href="#"><i class="fas fa-square"></i>جاوااسکریپت</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>فتوشاپ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>طراح</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>ساخت و ساز</a>
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
                                                            <a href="#"><i class="fas fa-square"></i>مشاغل مهندسی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>مشاغل اصلی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>مشاغل پر کاربرد</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>مشاغل دولتی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>شرکت فناوری اطلاعات</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="candidate_width">
                                                <div class="jen_tabs_conent_list   jb_cover">
                                                    <h1>موقعیت شغل</h1>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>هند</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>امریکا</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>ژاپن</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>دبی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>افریقای جنوبی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-square"></i>چین</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="candidate_width">
                                                <div class="jen_tabs_conent_list   jb_cover">
                                                    <h1>مشاغل باز</h1>
                                                    <div class="open_jobs_wrapper">
                                                        <div class="open_jobs_wrapper_1 jb_cover">
                                                            <img src="images/job1.jpg" alt="img">
                                                            <div class="open_job_text">
                                                                <h3><a href="#">برخی از طراحان آن را تحمل کردند</a></h3>
                                                                <p>5 ساعت پیش</p>

                                                            </div>
                                                        </div>
                                                        <div class="open_jobs_wrapper_1 jb_cover">
                                                            <img src="images/job1.jpg" alt="img">
                                                            <div class="open_job_text">
                                                                <h3><a href="#">برخی از طراحان آن را تحمل کردند</a></h3>
                                                                <p>12 ساعت پیش</p>

                                                            </div>
                                                        </div>
                                                        <div class="view_all_job jb_cover"><a href="#">مشاهده همه مشاغل</a></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </li>

                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="../main_pages/about_us.php"> <i class="fas fa-square"></i>درباره ما</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/companies.php"> <i class="fas fa-square"></i>شرکت ها</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/company_single.php"> <i class="fas fa-square"></i>شرکت تنها</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/error_page.php"><i class="fas fa-square"></i>صفحه ارور</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/login.php"><i class="fas fa-square"></i>ورود</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/pricing_table.php"><i class="fas fa-square"></i>جدول قیمت گذاری</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/sign_up.php"><i class="fas fa-square"></i>ثبت نام</a>
                            </li>

                        </ul>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation active_class">داشبورد</a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="#"><i class="fas fa-square"></i>داوطلب<span><i class="fas fa-chevron-right"></i>
                                        </span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>
                                            <a href="candidate_applied_job.php"> <i class="fas fa-square"></i>شغل تاییده شده </a>
                                        </li>
                                        <li>
                                            <a href="candidate_dashboard.php"> <i class="fas fa-square"></i> داشبورد</a>
                                        </li>
                                        <li>
                                            <a href="<?= $type_user['permission'] === "0" ? './dashboard/candidate_edit_profile.php' : './dashboard/comp_employer_edit_profile.php' ?> "> ویرایش پروفایل</a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a href="candidate_resume.php"> <i class="fas fa-square"></i>رزومه</a>
                                        </li>
                                        <li>

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
                                            <a href="comp_applications.php"> <i class="fas fa-square"></i>برنامه ها </a>
                                        </li>
                                        <li>
                                            <a href="comp_company_page.php"> <i class="fas fa-square"></i> صفحه شرکت</a>
                                        </li>
                                        <li>
                                            <a href="comp_employer_dashboard.php"> <i class="fas fa-square"></i>داشبورد</a>
                                        </li>
                                        <li>
                                            <a href="<?= $type_user['permission'] === "0" ? './dashboard/candidate_edit_profile.php' : './dashboard/comp_employer_edit_profile.php' ?> "> ویرایش پروفایل</a>
                                        </li>
                                        <li>
                                            <a href="comp_employer_manage_jobs.php"> <i class="fas fa-square"></i>مدیریت مشاغل</a>
                                        </li>
                                        <li>
                                            <a href="comp_post_new_job.php"> <i class="fas fa-square"></i>ارسال شغل جدید</a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="../main_pages/blog_single.php"> <i class="fas fa-square"></i>وبلاگ تنها</a>
                            </li>
                            <li class="parent">
                                <a href="../main_pages/blog_category_right_sidebar.php"> <i class="fas fa-square"></i>دسته بندی وبلاگ</a>
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
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>ویرایش پروفایل داوطلب</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> خانه </a>&nbsp; / &nbsp; </li>
                                <li>پروفایل داوطلب</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="emp_dashboard_sidebar jb_cover">
                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                        $emailP = $_SESSION['email'];
                        $queryP = "SELECT * FROM `users` WHERE email='$emailP'";
                        $resultP = mysqli_query($connection, $queryP) or die(mysqli_error($connection));
                        $info = mysqli_fetch_assoc($resultP);
                        ?>
                        <img src="images/<?= $info['avatar'] ?>" class="img-responsive" alt="post_img" />
                        <div class="emp_web_profile candidate_web_profile jb_cover">

                            <h4> </h4>
                            <p></p>
                            <div class="skills jb_cover">
                                <div class="skill-item jb_cover">
                                    <h6>پروفایل<span>70%</span></h6>
                                    <div class="skills-progress"><span data-value="70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="emp_follow_link jb_cover">
                            <ul class="feedlist">
                                <li><a href="candidate_dashboard.php"><i class="fas fa-tachometer-alt"></i> داشبورد </a></li>
                                <li>
                                    <a href="<?= $type_user['permission'] === "0" ? './dashboard/candidate_edit_profile.php' : './dashboard/comp_employer_edit_profile.php' ?> "> ویرایش پروفایل</a>
                                </li>
                                <li><a href="candidate_resume.php"><i class="fas fa-file"></i>رزومه </a></li>
                                <li><a href="candidate_favourite_job.php"><i class="fas fa-heart"></i>موردعلاقه</a></li>
                                <li><a href="candidate_applied_job.php"><i class="fas fa-check-square"></i>شغل درخواستی</a></li>


                            </ul>
                            <ul class="feedlist logout_link jb_cover">
                                <li><a href="#"><i class="fas fa-power-off"></i> خروج </a></li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-trash-alt"></i>حذف پروفایل
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="modal fade delete_popup" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="delett_cntn jb_cover">
                                            <h1><i class="fas fa-trash-alt"></i> حذف حساب</h1>
                                            <p>شما مطمئن هستید! شما میخواهید پروفایل خود را حذف کنید.
                                                <br> نمی تواند برگردانده شود!
                                            </p>

                                            <div class="delete_jb_form">

                                                <input type="password" name="password" placeholder="رمز عبور را وارد کنید">
                                            </div>
                                            <div class="header_btn search_btn applt_pop_btn">

                                                <a href="#">ذخیره به روزرسانی</a>

                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" class="" data-dismiss="modal">لغو</a>
                                            </div>
                                            <div class="login_remember_box jb_cover">
                                                <label class="control control--checkbox">شما شرایط و ضوابط <a href="#">و حریم خصوصی </a> ما را <a href="#">میپذیرید</a>
                                                    <input type="checkbox">
                                                    <span class="control__indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <?php
                                            $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                                            $emailP = $_SESSION['email'];
                                            $queryP = "SELECT * FROM `users` WHERE email='$emailP'";
                                            $resultP = mysqli_query($connection, $queryP) or die(mysqli_error($connection));
                                            $info = mysqli_fetch_assoc($resultP);
                                            ?>
                                            <div class="jp_job_post_side_img">
                                                <img src="images/<?= $info['avatar'] ?>" width="100px" alt="post_img">

                                            </div>
                                            <div class="jp_job_post_right_cont edit_profile_wrapper">
                                                <h4>JPEG یا PNG در اندازه 500x500px تصویر بند انگشتی</h4>

                                                <div class="width_50">
                                                    <input name="avatar" type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">مرور تصویر</span>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>

                            <div class="browse_img_banner jb_cover">

                                <div class="row">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>نام کاربری</label>
                                                <input value="<?= $info['full_name'] ?>" type="text" name="full_name" placeholder="نام کاربری ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>ایمیل</label>
                                                <input value="<?= $info['email'] ?>" type="email" readonly name="email" placeholder="1379maryam925.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>تلفن</label>
                                                <input value="<?= isset($info['phone']) ? $info['phone'] : '' ?>" type="text" name="phone" placeholder="+98 9098085819">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>وب سایت</label>
                                                <input value="<?= isset($info['website']) ? $info['website'] : '' ?>" type="text" name="website" placeholder="www.webstrot.com">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>شرح شغل</label>
                                                <input value="<?= isset($info['about_job']) ? $info['about_job'] : '' ?>" name="about_job">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>آدرس</label>
                                                <input value="<?= isset($info['address']) ? $info['address'] : '' ?>" type="text" name="address" placeholder="خیابان فرضی یکم">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>کشور</label>
                                                <input value="<?= isset($info['country']) ? $info['country'] : '' ?>" type="text" name="country" placeholder="ایران">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>ناحیه</label>
                                                <input value="<?= isset($info['area']) ? $info['area'] : '' ?> " name="area">



                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>شهر</label>
                                                <input value="<?= isset($info['city']) ? $info['city'] : '' ?>" type="text" name="city" placeholder="ملارد">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>کد پستی</label>
                                                <input value="<?= isset($info['pastal_code']) ? $info['pastal_code'] : '' ?> " name="pastal_code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-edit">
                                        <button name="edit" class="btn  btn-block btn-danger">ویرایش</button>
                                    </div>
                                    <?php
                                    if (isset($_POST['edit'])) {
                                        $target_dir = "images/";
                                        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
                                        $uploadOk = 1;
                                        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                                        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
                                        if ($check !== false) {
                                            //  echo "پرونده انتخابی یک تصویر از نوع - " . $check["mime"] . " است  <br />";
                                            $uploadOk = 1;
                                        } else {
                                            echo "پرونده انتخاب شده یک تصویر نیست  <br />";
                                            $uploadOk = 0;
                                        }

                                        if (file_exists($target_file)) {
                                            $target_file = $target_dir . rand(100000000, 10000000000) . basename($_FILES["avatar"]["name"]);

                                            // echo "پرونده ای با همین نام در سرویس دهنده میزبان وجود دارد  <br />";
                                            $uploadOk = 1;
                                        }

                                        if ($_FILES["avatar"]["size"] > (500 * 1024)) {
                                            echo "اندازه پرونده انتخابی بیشتر از 500 کیلوبایت است  <br />";
                                            $uploadOk = 0;
                                        }

                                        if (
                                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !=
                                            "jpeg" && $imageFileType != "gif"
                                        ) {
                                            echo "فقط پسوندهای JPG, JPEG, PNG & GIF برای پرونده مجاز هستند  <br />";
                                            $uploadOk = 0;
                                        }

                                        // die($_FILES["pro_image"]["tmp_name"]);

                                        if ($uploadOk == 0) {
                                            // echo "پرونده انتخاب شده به سرویس دهنده میزبان ارسال نشد <br />";
                                        } else {
                                            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                                                // echo "پرونده " . basename($_FILES["avatar"]["name"]) .
                                                //     " با موفقیت به سرویس دهنده میزبان انتقال یافت  <br />";
                                            } else {
                                                // echo "خطا در ارسال پرونده به سرویس دهنده میزبان رخ داده است <br />";
                                            }
                                        }

                                        if ($uploadOk == 1) {
                                            $full_name = $_POST['full_name'];
                                            $email = $_POST['email'];
                                            $phone = $_POST['phone'];
                                            $website = $_POST['website'];
                                            $about_job = $_POST['about_job'];
                                            $address = $_POST['address'];
                                            $country = $_POST['country'];
                                            $area = $_POST['area'];
                                            $city = $_POST['city'];
                                            $pastal_code = $_POST['pastal_code'];
                                            $avatar = $_FILES['avatar']['name'];
                                            $connection = mysqli_connect("localhost", "root", "", "jobdesk");
                                            $id = $info['id'];
                                            $query = "UPDATE  users SET
    full_name='$full_name',email='$email',avatar='$avatar',phone='$phone',website='$website',about_job='$about_job',address='$address',country='$country',area='$area',city='$city',pastal_code='$pastal_code'
      WHERE id='$id' ";

                                            if (mysqli_query($connection, $query) === true) {

                                                echo ("<p style='color:green;'><b>ویرایش با موفقیت انجام شد</b></p>");
                                    ?>
                                                <script>
                                                    location.href = "./../main_pages/Developer_job_listing.php";
                                                </script>
                                    <?php

                                            } else {
                                                echo ("<p style='color:red;'><b>خطا در ثبت مشخصات</b></p>");
                                            }
                                        } else {
                                            echo ("<p style='color:red;'><b>خطا در ثبت مشخصات</b></p>");
                                        }

                                        mysqli_close($connection);
                                    }

                                    ?>
                                    </form>




                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> شبکه های اجتماعی</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>گوگل</label>
                                                        <input type="email" name="email" placeholder="https://google.com/webstrot">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>فیسبوک</label>
                                                        <input type="email" name="email" placeholder="https://www.facebook.com/webstrot">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>توییتر</label>
                                                        <input type="email" name="email" placeholder="https://www.twitter.com/webstrot">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>لینکداین</label>
                                                        <input type="email" name="email" placeholder="https://www.linkedin.com/webstrot">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="header_btn search_btn jb_cover">

                                                        <a href="#">افزودن بیشتر</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> رمز عبور و امنیت</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>ایمیل تأیید</label>
                                                        <input type="email" name="email" placeholder="webstrot@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>رمزعبور فعلی</label>
                                                        <input type="password" name="password" placeholder="*************">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>رمز عبور جدید</label>
                                                        <input type="password" name="password" placeholder="*************">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label> تکرار رمزعبور جدید</label>
                                                        <input type="password" name="password" placeholder="*************">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="login_remember_box jb_cover">
                                        <label class="control control--checkbox">دو مرحله تأیید را از طریق ایمیل فعال کنید
                                            <input type="checkbox">
                                            <span class="control__indicator"></span>
                                        </label>
                                        <div class="header_btn search_btn jb_cover">

                                            <a href="#">ذخیره تغییرات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--employee dashboard wrapper end-->
    <!-- newsletter wrapper start -->
    <div class="jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> به دنبال یک شغل</h2>

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
    <!-- newsletter wrapper end -->
    <!-- footer Wrapper Start -->
    <div class="footer jb_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">
                        <<<<<<< HEAD=======<p>3SOOTJOBS</p>
                            <br>
                            >>>>>>> 9efb3dda4f5f576516723fa153cc3bb4ac36245d
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
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                            </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>ویژگی ها</h5>
                        <ul class="nav-widget">
                            <li><a href="#"><i class="fa fa-square"></i>مدیریت کار و صورتحساب
                                </a></li>

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
    <script src="js/dropify.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- custom js-->
</body>


<!-- Mirrored from paradigm-shift.ir/Jbdesks/dashboard/candidate_edit_profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2019 10:49:09 GMT -->

</html>