<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cogent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="tech-banner">
            <div class="container-fluid px-0">
                <video src="Images/tech-banner.mp4" autoplay loop muted></video>
            </div>
        </section>

        <style>
            .departments .nav-link.active {
                background: none;
                border-color: #349e8b;
            }

            .departments .nav-link.active h4 {
                color: #fff !important;
                opacity: 1 !important;
                font-size: 20px !important;
            }

            .departments .nav-link.active #head1 {
                color: #fff !important;
                opacity: 1 !important;
                font-size: 20px !important;
            }

            .departments .nav-item .nav-link {
                transition: font-size 0.3s ease !important;
                /* Adding transition effect */
            }

            .departments .nav-item:not(.active) .nav-link h4 {
                font-size: 16px !important;
                color: white !important;
                opacity: 0.4;
                /* Decrease font size for inactive nav-items */
            }





            #departments {
                background-image: url('assets/img/img1.png');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <style>
            /*--------------------------------------------------------------
# Departments
--------------------------------------------------------------*/

            .departments .nav-tabs {
                border: 0;
            }

            .departments .nav-link {
                border: 0;
                padding: 05px 20px;
                color: #555555;
                border-radius: 0;
                border-left: 5px solid #fff;
                cursor: pointer;
            }

            .departments .nav-link h4 {
                transition: 0.3s;
                color: #FFF;
                font-family: Poppins;
                font-size: 25px;
                font-style: normal;
                font-weight: 600;
                line-height: 33px;
                /* 132% */
            }

            .departments .nav-link p {
                font-size: 14px;
                margin-bottom: 0;
            }







            .departments .tab-pane.active {
                animation: slide-down 0.5s ease-out;
            }

            .departments .tab-pane img {
                max-width: 60%;
                padding: 0 15px 15px 0;
            }

            @media (max-width: 768px) {
                .departments .tab-pane img {
                    float: none;
                    padding: 0 0 15px 0;
                    max-width: 100%;
                }
            }



            .departments .tab-pane p {

                color: #FFF;
                text-shadow: 0px 5.929px 6.226px rgba(0, 0, 0, 0.30);
                font-family: Poppins;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 25px;
                /* 156.25% */

            }

            .departments .tab-pane p:last-child {
                margin-bottom: 0;
            }

            @keyframes slide-down {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        </style>
        <!-- ======= Departments Section ======= -->

        <div class="container py-5">
            <div class="section-title">
                <h2>Let's Execute Your IDEA in to REALTY with Our <br>
                    <span>Technology Development</span>
                </h2>
            </div>
        </div>
        <section id="departments" class="departments py-5">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab_1" data-bs-toggle="tab" data-bs-target="#tab-1"
                                    onclick="changeBackground('img1.png', 'tab_1')">
                                    <h4 id="head1">Web Development</h4>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" id="tab_2" data-bs-target="#tab-2"
                                    onclick="changeBackground('img2.png' , 'tab_2')">
                                    <h4>Application Development</h4>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" id="tab_3" data-bs-target="#tab-3"
                                    onclick="changeBackground('img3.png', 'tab_3')">
                                    <h4>E-Commerce Web Development</h4>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" id="tab_4" data-bs-target="#tab-4"
                                    onclick="changeBackground('img4.png', 'tab_4')">
                                    <h4>UI/UX Design</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-12" id="serviceContent">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="text-center"><img src="assets/img/group1.png" alt="Nursing Care at Home"
                                        class="img-fluid"></div>
                                <p>Our dedicated team of nurses delivers personalized care, medication management, wound
                                    care, and assistance with daily activities, offering peace of mind for you and your
                                    loved ones.<br>Our services not only enhance convenience.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="text-center"><img src="assets/img/group2.png" alt="Nursing Care at Home"
                                        class="img-fluid"></div>
                                <p>Comprehensive lab testing services offering accurate results for informed medical
                                    decisions and proactive health management.<br>Whether it's routine screenings,
                                    specialized diagnostics, or monitoring ongoing conditions.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="text-center"><img src="assets/img/group3.png" alt="Nursing Care at Home"
                                        class="img-fluid"></div>
                                <p>Comprehensive lab testing services offering accurate results for informed medical
                                    decisions and proactive health management.<br>Whether it's routine screenings,
                                    specialized diagnostics, or monitoring ongoing conditions.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="text-center"><img src="assets/img/group4.png" alt="Nursing Care at Home"
                                        class="img-fluid"></div>
                                <p>It helps individuals recover from injuries, manage chronic conditions, and improve
                                    overall physical well-being<br>Experience the benefits of home-based physiotherapy,
                                    empowering you to regain mobility and independence with ease.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Departments Section -->

        <section class="uplift pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2>We are ready to uplift your <br>
                            <span>Brand like many others in the past!</span>
                        </h2>
                    </div>
                    <div class="logos">
                        <div class="logos-slide">
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                            <img src="Images/logo-slide-3.png" />
                            <img src="Images/logo-slide-4.png" />
                            <img src="Images/logo-slide-5.png" />
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                        </div>

                        <div class="logos-slide">
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                            <img src="Images/logo-slide-3.png" />
                            <img src="Images/logo-slide-4.png" />
                            <img src="Images/logo-slide-5.png" />
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                            <img src="Images/logo-slide-3.png" />
                        </div>
                    </div>
                    <div class="logos">
                        <div class="logos-slide">
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                            <img src="Images/logo-slide-3.png" />
                            <img src="Images/logo-slide-4.png" />
                            <img src="Images/logo-slide-5.png" />
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                        </div>

                        <div class="logos-slide">
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                            <img src="Images/logo-slide-3.png" />
                            <img src="Images/logo-slide-4.png" />
                            <img src="Images/logo-slide-5.png" />
                            <img src="Images/logo-slide-1.png" />
                            <img src="Images/logo-slide-2.png" />
                            <img src="Images/logo-slide-3.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="hori d-flex container justify-content-center">
            <hr>
        </div>

        <section class="technology-park py-lg-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-2">
                        <h2>Our Technology Stack</h2>
                    </div>
                    <div
                        class="col-lg-2 col-6 text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="svg-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                                fill="none">
                                <g clip-path="url(#clip0_447_1007)">
                                    <rect x="0.5" y="0.5" width="149" height="149" rx="49.5" stroke="white" />
                                    <path class="on-hover"
                                        d="M114.799 66.3485C115.462 66.3485 116 65.8107 116 65.1473V49.4295C116 48.7661 115.462 48.2283 114.799 48.2283H100.225V35.2012C100.225 34.5378 99.687 34 99.0234 34H50.9766C50.3132 34 49.7754 34.5378 49.7754 35.2012V48.2283H35.2012C34.5378 48.2283 34 48.7661 34 49.4295V65.1473C34 65.8107 34.5378 66.3485 35.2012 66.3485H36.4824V70.3478H35.2012C34.5378 70.3478 34 70.8856 34 71.549V105.444C34 106.107 34.5378 106.645 35.2012 106.645H69.4381V108.92H66.9922C66.3288 108.92 65.791 109.458 65.791 110.121C65.791 110.785 66.3288 111.322 66.9922 111.322H69.4381V113.598H54.1797C53.5163 113.598 52.9785 114.135 52.9785 114.799C52.9785 115.462 53.5163 116 54.1797 116H95.8203C96.4838 116 97.0215 115.462 97.0215 114.799C97.0215 114.135 96.4838 113.598 95.8203 113.598H80.5619V111.322H83.0078C83.6713 111.322 84.209 110.785 84.209 110.121C84.209 109.458 83.6713 108.92 83.0078 108.92H80.5619V106.645H114.799C115.462 106.645 116 106.107 116 105.443V81.8952C116 81.2318 115.462 80.694 114.799 80.694C114.135 80.694 113.598 81.2318 113.598 81.8952V104.242H36.4023V72.7501H37.6836C38.347 72.7501 38.8848 72.2123 38.8848 71.549V65.1473C38.8848 64.484 38.347 63.9462 37.6836 63.9462H36.4023V50.6306H49.7754V53.0296H43.7695C43.1062 53.0296 42.5684 53.5674 42.5684 54.2308V97.2475C42.5684 97.5662 42.695 97.8718 42.9205 98.0971L46.3179 101.492C46.5431 101.717 46.8485 101.844 47.1669 101.844H52.0044C52.6678 101.844 53.2056 101.306 53.2056 100.642C53.2056 99.9791 52.6678 99.4413 52.0044 99.4413H47.6642L44.9707 96.7495V55.4318H49.7754V93.4452C49.7754 94.1086 50.3132 94.6464 50.9766 94.6464H99.0234C99.687 94.6464 100.225 94.1086 100.225 93.4452V68.1014C100.225 67.4381 99.687 66.9003 99.0234 66.9003C98.3599 66.9003 97.8223 67.4381 97.8223 68.1014V92.244H52.1777V46.0053H76.2185C76.882 46.0053 77.4196 45.4675 77.4196 44.8041C77.4196 44.1408 76.882 43.603 76.2185 43.603H52.1777V36.4023H97.8223V43.603H81.7266C81.063 43.603 80.5254 44.1408 80.5254 44.8041C80.5254 45.4675 81.063 46.0053 81.7266 46.0053H97.8223V62.4825C97.8223 63.1459 98.3599 63.6837 99.0234 63.6837C99.687 63.6837 100.225 63.1459 100.225 62.4825V55.4318H105.029V96.7495L102.336 99.4411H57.5861C56.9227 99.4411 56.3849 99.9789 56.3849 100.642C56.3849 101.306 56.9227 101.843 57.5861 101.843H102.833C103.151 101.843 103.457 101.717 103.682 101.492L107.08 98.0969C107.305 97.8716 107.432 97.566 107.432 97.2473V54.2306C107.432 53.5672 106.894 53.0294 106.23 53.0294H100.225V50.6306H113.598V63.9462H112.316C111.653 63.9462 111.115 64.484 111.115 65.1473V71.549C111.115 72.2123 111.653 72.7501 112.316 72.7501H113.598V76.3391C113.598 77.0024 114.135 77.5402 114.799 77.5402C115.462 77.5402 116 77.0024 116 76.3391V71.549C116 70.8856 115.462 70.3478 114.799 70.3478H113.518V66.3485H114.799ZM71.8404 106.645H78.1594V108.92H71.8404V106.645ZM71.8404 111.322H78.1594V113.598H71.8404V111.322Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M64.6122 62.0424H61.4941C60.8308 62.0424 60.293 62.5802 60.293 63.2435V75.7157C60.293 76.3791 60.8308 76.9169 61.4941 76.9169C62.1575 76.9169 62.6953 76.3791 62.6953 75.7157V70.6807H64.6122C66.9939 70.6807 68.9315 68.7431 68.9315 66.3615C68.9315 63.9799 66.9939 62.0424 64.6122 62.0424ZM64.6122 68.2784H62.6953V64.4445H64.6122C65.6693 64.4445 66.5291 65.3044 66.5291 66.3615C66.5291 67.4185 65.6693 68.2784 64.6122 68.2784Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M84.9473 75.7157V70.6807H86.8642C89.2459 70.6807 91.1834 68.7432 91.1834 66.3615C91.1834 63.9798 89.2459 62.0422 86.8642 62.0422H83.7461C83.0826 62.0422 82.5449 62.58 82.5449 63.2434V75.7156C82.5449 76.3789 83.0826 76.9167 83.7461 76.9167C84.4096 76.9167 84.9473 76.3791 84.9473 75.7157ZM84.9473 64.4447H86.8642C87.9212 64.4447 88.7811 65.3046 88.7811 66.3617C88.7811 67.4187 87.9212 68.2786 86.8642 68.2786H84.9473V64.4447Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M72.46 62.0424C71.7964 62.0424 71.2588 62.5802 71.2588 63.2435V75.7157C71.2588 76.3791 71.7964 76.9169 72.46 76.9169C73.1235 76.9169 73.6611 76.3791 73.6611 75.7157V70.6807H77.58V75.7157C77.58 76.3791 78.1176 76.9169 78.7812 76.9169C79.4447 76.9169 79.9823 76.3791 79.9823 75.7157V63.2435C79.9823 62.5802 79.4447 62.0424 78.7812 62.0424C78.1176 62.0424 77.58 62.5802 77.58 63.2435V68.2785H73.6611V63.2435C73.6611 62.5802 73.1233 62.0424 72.46 62.0424Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M59.6055 54.7981H67.4912C68.1546 54.7981 68.6924 54.2603 68.6924 53.5969C68.6924 52.9336 68.1546 52.3958 67.4912 52.3958H59.6055C58.9421 52.3958 58.4043 52.9336 58.4043 53.5969C58.4043 54.2603 58.9419 54.7981 59.6055 54.7981Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M91.6358 52.3958H73.1104C72.4468 52.3958 71.9092 52.9336 71.9092 53.5969C71.9092 54.2603 72.4468 54.7981 73.1104 54.7981H91.6358C92.2993 54.7981 92.837 54.2603 92.837 53.5969C92.837 52.9336 92.2993 52.3958 91.6358 52.3958Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M59.6055 86.5636H67.4912C68.1546 86.5636 68.6924 86.0258 68.6924 85.3624C68.6924 84.6991 68.1546 84.1613 67.4912 84.1613H59.6055C58.9421 84.1613 58.4043 84.6991 58.4043 85.3624C58.4043 86.0258 58.9419 86.5636 59.6055 86.5636Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M73.1104 86.5636H91.6358C92.2993 86.5636 92.837 86.0258 92.837 85.3624C92.837 84.6991 92.2993 84.1613 91.6358 84.1613H73.1104C72.4468 84.1613 71.9092 84.6991 71.9092 85.3624C71.9092 86.0258 72.447 86.5636 73.1104 86.5636Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M54.8496 40.0193C54.8496 40.6829 55.3874 41.2207 56.0508 41.2207C56.7141 41.2207 57.252 40.6829 57.252 40.0193C57.252 39.3558 56.7141 38.818 56.0508 38.818C55.3874 38.818 54.8496 39.3558 54.8496 40.0193Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M59.4941 40.0193C59.4941 40.6829 60.0319 41.2207 60.6953 41.2207C61.3587 41.2207 61.8965 40.6829 61.8965 40.0193C61.8965 39.3558 61.3587 38.818 60.6953 38.818C60.0319 38.818 59.4941 39.3558 59.4941 40.0193Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M64.1387 40.0193C64.1387 40.6829 64.6765 41.2207 65.3398 41.2207C66.0032 41.2207 66.541 40.6829 66.541 40.0193C66.541 39.3558 66.0032 38.818 65.3398 38.818C64.6765 38.818 64.1387 39.3558 64.1387 40.0193Z"
                                        fill="white" />
                                    <rect y="149" width="150" height="1" fill="#D9D9D9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_447_1007">
                                        <rect width="150" height="150" rx="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h4>PHP</h4>
                    </div>
                    <div
                        class="col-lg-2 col-6 text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="svg-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82"
                                fill="none">
                                <path class="on-hover" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M30.8722 1.32722C23.1152 3.43922 16.8482 7.22522 11.4362 13.0712C-0.787837 26.2742 -3.36984 43.3872 4.45116 59.3602C7.78616 66.1712 16.4282 74.5962 23.4962 77.9262C39.4362 85.4362 58.3442 81.7852 70.2802 68.8922C76.5032 62.1712 79.7332 55.7612 81.2032 47.2172C86.0352 19.1252 58.3202 -6.14478 30.8722 1.32722ZM56.9652 5.63022C64.7852 9.28922 69.6742 13.4122 73.7042 19.7452C85.1262 37.6932 79.7902 62.5382 62.0942 73.7992C44.1462 85.2212 19.3012 79.8852 8.04016 62.1892C-3.13584 44.6272 1.66216 20.4642 18.6462 8.77822C29.6862 1.18322 44.8072 -0.0597811 56.9652 5.63022ZM31.8722 6.90422C26.2642 8.62122 19.0302 13.0502 15.5592 16.8922C13.5312 19.1372 11.8722 21.2302 11.8722 21.5452C11.8722 21.8602 14.6392 21.9712 18.0202 21.7922C22.2862 21.5672 24.3012 21.8502 24.6032 22.7172C24.8782 23.5072 24.0872 23.9672 22.4552 23.9672C21.0352 23.9672 19.8722 24.4362 19.8722 25.0082C19.8722 26.0402 31.6672 61.0952 32.1902 61.6182C32.3402 61.7682 34.1222 56.8452 36.1512 50.6792L39.8392 39.4672L37.0842 32.0072C34.9482 26.2252 33.8142 24.4252 32.0412 24.0072C30.7832 23.7102 29.6942 23.0172 29.6202 22.4672C29.5382 21.8582 33.6622 21.4432 40.1792 21.4062C48.3642 21.3592 50.8722 21.6522 50.8722 22.6562C50.8722 23.3772 50.0472 23.9672 49.0392 23.9672C48.0302 23.9672 46.9502 24.2222 46.6382 24.5342C46.3262 24.8462 48.7742 33.1982 52.0782 43.0942C55.3822 52.9902 58.2942 60.8792 58.5482 60.6242C59.4132 59.7602 64.8722 40.6542 64.8722 38.4942C64.8722 37.3132 63.2592 33.0722 61.2872 29.0702C58.1282 22.6582 57.8392 21.4602 58.8582 19.0012C59.4942 17.4652 60.9342 15.7992 62.0582 15.2972C63.9562 14.4502 63.8202 14.1982 60.1542 11.7722C57.9832 10.3352 54.0902 8.44122 51.5042 7.56322C46.6422 5.91322 36.2512 5.56422 31.8722 6.90422ZM71.5502 31.0862C71.2052 34.0462 68.2202 44.0882 64.9172 53.4032C61.6142 62.7182 59.1352 70.5632 59.4082 70.8362C60.4052 71.8332 70.4902 60.3282 72.8812 55.4672C74.9662 51.2302 75.3432 49.0182 75.3562 40.9672C75.3682 34.1132 74.9272 30.6652 73.7752 28.5862L72.1792 25.7052L71.5502 31.0862ZM6.83416 32.0902C6.18316 34.4972 5.85616 39.6172 6.10616 43.4672C6.66416 52.0212 10.7752 60.8402 16.7022 66.1942C20.6822 69.7912 24.8722 72.5142 24.8722 71.5062C24.8722 70.2232 9.64916 29.3782 8.87716 28.5902C8.39316 28.0952 7.50116 29.6232 6.83416 32.0902ZM36.1102 59.7402C31.1712 74.5252 31.1202 74.7992 33.2272 75.3642C38.5922 76.8042 51.8722 75.6312 51.8722 73.7182C51.8722 72.5412 43.1382 48.2662 41.9522 46.1462C41.4062 45.1702 39.4832 49.6452 36.1102 59.7402Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>Wordpress</h4>
                    </div>
                    <div
                        class="col-lg-2 col-6 text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="svg-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="82" viewBox="0 0 80 82"
                                fill="none">
                                <path class="on-hover" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.25 4.68702L0 9.35902V36.461V63.563L16.053 72.739L32.106 81.914L48.053 72.771L64 63.627V54.825V46.023L71.515 41.754L79.03 37.486L78.765 27.566L78.5 17.645L71.165 13.316C67.131 10.934 63.47 8.98602 63.03 8.98602C62.59 8.98602 58.691 11.001 54.365 13.464L46.5 17.942L46 27.049L45.5 36.156L39.25 39.662L33 43.168V26.212V9.25602L25.023 4.62102C20.636 2.07202 16.923 -0.007977 16.773 2.29999e-05C16.623 0.008023 12.788 2.11702 8.25 4.68702ZM23.059 6.23602C26.313 8.02402 28.973 9.71102 28.968 9.98602C28.956 10.758 17.992 16.988 16.67 16.973C16.027 16.967 12.843 15.448 9.595 13.598L3.691 10.235L6.095 8.76402C7.418 7.95502 10.075 6.33202 12 5.15702C13.925 3.98102 15.869 3.01202 16.321 3.00302C16.772 2.99402 19.804 4.44802 23.059 6.23602ZM69.515 15.081C72.532 16.784 75 18.495 75 18.883C75 19.272 72.188 21.082 68.75 22.905L62.5 26.22L56.75 22.892C53.588 21.062 51 19.247 51 18.858C51 17.932 61.126 12.037 62.765 12.008C63.461 11.996 66.498 13.379 69.515 15.081ZM9.41 16.197L15 19.407V36.542C15 56.054 14.343 54.465 24.738 60.103L30.976 63.486L30.988 70.736C30.995 74.723 30.663 77.963 30.25 77.936C29.837 77.908 23.425 74.361 16 70.054L2.5 62.222L2.233 37.604C2.073 22.949 2.34 12.986 2.893 12.986C3.403 12.986 6.336 14.431 9.41 16.197ZM31 28.77V44.555L27.75 46.41C25.962 47.43 23.038 49.139 21.25 50.207L18 52.149V35.807V19.464L23.75 16.249C26.913 14.48 29.837 13.022 30.25 13.009C30.663 12.997 31 20.089 31 28.77ZM60.799 28.408C61.677 29.251 62.002 31.812 61.799 36.29L61.5 42.923L55.25 39.397L49 35.87V28.454V21.038L54.25 24.099C57.138 25.782 60.085 27.722 60.799 28.408ZM76.297 36.029C75.859 36.434 72.912 38.208 69.75 39.971L64 43.177V35.797V28.418L70.25 24.811L76.5 21.204L76.797 28.248C76.96 32.122 76.735 35.624 76.297 36.029ZM54.021 41.578C57.392 43.553 60.004 45.314 59.825 45.49C58.708 46.59 32.881 60.986 32.024 60.986C30.576 60.986 19.995 54.952 20.02 54.141C20.039 53.481 45.9 38.17 47.196 38.05C47.579 38.015 50.651 39.602 54.021 41.578ZM61.794 55.115L61.5 62.245L48 70.077C40.575 74.385 34.143 77.927 33.706 77.948C33.27 77.969 33.045 74.723 33.206 70.736L33.5 63.486L46.994 55.736C54.416 51.473 60.848 47.986 61.288 47.986C61.728 47.986 61.955 51.194 61.794 55.115Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>Laravel</h4>
                    </div>
                    <div
                        class="col-lg-2 col-6 text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="svg-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="82" viewBox="0 0 73 82"
                                fill="none">
                                <path class="on-hover" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.3516 2.34636C24.9746 8.72236 31.9176 18.5174 39.8906 14.3944C45.1506 11.6744 45.1746 4.12036 39.9316 1.40936C35.8796 -0.685643 34.1996 -0.502643 31.3516 2.34636ZM38.6966 5.09136C40.4106 6.80536 40.1786 10.5694 38.3146 11.2844C35.5476 12.3464 33.9966 11.9474 32.8966 9.89136C30.7356 5.85436 35.5096 1.90436 38.6966 5.09136ZM20.2556 9.94236C14.8986 12.5944 11.9676 15.6994 13.7706 16.8134C15.3816 17.8094 26.8966 11.1664 26.8966 9.24136C26.8966 7.36236 25.0816 7.55436 20.2556 9.94236ZM45.8966 9.89136C45.8966 10.9914 46.4836 11.8914 47.2006 11.8914C47.9186 11.8914 50.5876 13.2124 53.1326 14.8264C56.9066 17.2194 57.9646 17.5144 58.8696 16.4234C60.0616 14.9884 57.6516 12.8224 51.1966 9.52536C47.0086 7.38736 45.8966 7.46436 45.8966 9.89136ZM2.35156 19.3464C-0.648443 22.3454 -0.780443 25.7614 1.96956 29.2564C5.38256 33.5964 11.8716 32.7744 14.5126 27.6674C18.5046 19.9474 8.55756 13.1404 2.35156 19.3464ZM59.3516 19.3464C58.0016 20.6964 56.8966 22.9664 56.8966 24.3914C56.8966 27.9104 61.0596 31.8914 64.7406 31.8914C69.2456 31.8914 72.2966 28.8634 72.2966 24.3914C72.2966 17.4104 64.3746 14.3224 59.3516 19.3464ZM10.3316 21.8194C13.5466 25.3714 10.0166 30.0964 5.82456 27.8524C3.40956 26.5604 3.30056 22.3374 5.64656 20.9714C8.05256 19.5704 8.34356 19.6234 10.3316 21.8194ZM67.3256 21.4624C68.1896 22.3274 68.8966 23.6454 68.8966 24.3914C68.8966 25.6844 66.3046 28.8914 65.2596 28.8914C61.3846 28.8914 59.3966 22.8644 62.6466 20.9714C65.0176 19.5904 65.5036 19.6414 67.3256 21.4624ZM19.8966 40.8914V53.9414L36.1466 53.6664L52.3966 53.3914V40.8914V28.3914L36.1466 28.1164L19.8966 27.8414V40.8914ZM50.8966 40.8914V51.8914H36.3966H21.8966V40.8914V29.8914H36.3966H50.8966V40.8914ZM23.8966 32.8914C23.8966 33.5054 28.7496 33.8914 36.4556 33.8914C44.5736 33.8914 48.7956 33.5374 48.3966 32.8914C48.0406 32.3154 42.7196 31.8914 35.8376 31.8914C28.5436 31.8914 23.8966 32.2804 23.8966 32.8914ZM1.89656 40.8914C1.89656 45.2914 2.23356 48.8844 2.64656 48.8764C4.70456 48.8344 5.39656 46.8244 5.39656 40.8914C5.39656 34.9584 4.70456 32.9484 2.64656 32.9064C2.23356 32.8984 1.89656 36.4914 1.89656 40.8914ZM68.1876 33.7114C66.5026 34.7524 66.6346 47.5764 68.3366 48.2304C70.5186 49.0674 70.8966 47.9694 70.8966 40.7834C70.8966 34.0154 70.2836 32.4154 68.1876 33.7114ZM23.8966 41.3914V45.8914H29.3966H34.8966V41.3914V36.8914H29.3966H23.8966V41.3914ZM39.6466 37.6144C41.4346 37.8364 44.3586 37.8364 46.1466 37.6144C47.9346 37.3934 46.4716 37.2114 42.8966 37.2114C39.3216 37.2114 37.8586 37.3934 39.6466 37.6144ZM36.8966 40.8914C36.8966 41.4484 39.5826 41.8914 42.9556 41.8914C46.7406 41.8914 48.7826 41.5164 48.3966 40.8914C48.0566 40.3414 45.3306 39.8914 42.3376 39.8914C39.3446 39.8914 36.8966 40.3414 36.8966 40.8914ZM36.8966 44.8914C36.8966 45.4484 39.5826 45.8914 42.9556 45.8914C46.7406 45.8914 48.7826 45.5164 48.3966 44.8914C48.0566 44.3414 45.3306 43.8914 42.3376 43.8914C39.3446 43.8914 36.8966 44.3414 36.8966 44.8914ZM23.8966 48.8914C23.8966 49.4414 26.3716 49.8914 29.3966 49.8914C32.4216 49.8914 34.8966 49.4414 34.8966 48.8914C34.8966 48.3414 32.4216 47.8914 29.3966 47.8914C26.3716 47.8914 23.8966 48.3414 23.8966 48.8914ZM36.8966 48.8914C36.8966 49.4414 39.3446 49.8914 42.3376 49.8914C45.3306 49.8914 48.0566 49.4414 48.3966 48.8914C48.7826 48.2664 46.7406 47.8914 42.9556 47.8914C39.5826 47.8914 36.8966 48.3344 36.8966 48.8914ZM2.35156 52.3464C-0.648443 55.3454 -0.780443 58.7614 1.96956 62.2564C5.31956 66.5154 11.8686 65.7804 14.4126 60.8604C18.4346 53.0834 8.57356 46.1234 2.35156 52.3464ZM59.3516 52.3464C58.0016 53.6964 56.8966 55.9664 56.8966 57.3914C56.8966 60.9104 61.0596 64.8914 64.7406 64.8914C69.2456 64.8914 72.2966 61.8634 72.2966 57.3914C72.2966 50.4104 64.3746 47.3224 59.3516 52.3464ZM10.8566 55.3434C12.3076 57.0914 11.4136 60.4794 9.28556 61.2954C5.79756 62.6344 1.96056 57.1604 4.56356 54.5584C5.75156 53.3694 9.61956 53.8524 10.8566 55.3434ZM68.3516 55.7504C69.6296 59.7764 66.3936 62.7624 62.8246 60.8524C60.9696 59.8604 60.1836 55.9374 61.5636 54.5584C63.0386 53.0824 67.7686 53.9134 68.3516 55.7504ZM13.9906 65.2774C13.0236 66.4434 13.4216 67.1894 16.1016 69.2344C19.2796 71.6574 24.0076 73.8914 25.9616 73.8914C28.4916 73.8914 26.4066 70.6854 22.6466 68.7954C20.3096 67.6204 17.6736 66.0244 16.7896 65.2494C15.4066 64.0374 15.0176 64.0414 13.9906 65.2774ZM51.6466 67.7114C45.5766 71.3644 43.7706 74.6414 48.4796 73.4604C51.2736 72.7584 58.3706 68.5524 59.3016 67.0454C59.6166 66.5354 59.3166 65.6984 58.6356 65.1844C57.7976 64.5544 55.5346 65.3724 51.6466 67.7114ZM33.2116 66.8984C28.2326 68.9044 27.3086 76.4974 31.6306 79.8974C37.9466 84.8654 46.2296 78.1354 43.2756 70.4364C42.6786 68.8804 37.8496 65.8234 36.1966 65.9544C35.7566 65.9894 34.4136 66.4144 33.2116 66.8984ZM38.8506 71.3364C39.5106 72.1314 39.9026 73.8184 39.7236 75.0864C39.3016 78.0594 35.0666 78.8454 33.2026 76.2954C31.5236 73.9994 31.5586 73.3724 33.4676 71.4624C35.4266 69.5044 37.2936 69.4604 38.8506 71.3364Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>CMS</h4>
                    </div>
                    <div
                        class="col-lg-2 col-6 text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="svg-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="82" viewBox="0 0 72 82"
                                fill="none">
                                <g clip-path="url(#clip0_450_1218)">
                                    <path class="on-hover"
                                        d="M34 0H39L50 7L56 10L72 19V62L64 67L61 68L60 67L59 27L38 15H33L15.5 24C13.3357 25.2367 12 27.5384 12 30.0311V46V66L9 68L0 63V19L27 4L34 0Z"
                                        fill="white" />
                                    <path class="on-hover"
                                        d="M28 26L32 27L33 67H39L40 27L43 26L52 32V74L41 81L34 82L23 76L20 74V31L28 26Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_450_1218">
                                        <rect width="72" height="82" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h4>Magento</h4>
                    </div>
                    <div
                        class="col-lg-2 col-6 text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="svg-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88"
                                fill="none">
                                <path class="on-hover" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M71.7479 67.7887C71.6108 70.7723 70.665 73.8983 68.0163 75.8926C65.3676 77.8869 62.1019 77.9317 59.1967 77.2387C56.2619 76.5387 53.1197 74.9714 49.9846 72.8779C43.6843 68.6709 36.7046 61.8611 30.4058 53.4952C24.1069 45.1293 19.4917 36.5393 17.1901 29.3215C16.0447 25.7299 15.407 22.2769 15.5455 19.2629C15.6826 16.2793 16.6284 13.1533 19.2771 11.159C21.9258 9.16476 25.1915 9.11992 28.0967 9.81288C31.0315 10.5129 34.1737 12.0802 37.3089 14.1737C43.6092 18.3807 50.5888 25.1905 56.8877 33.5564C63.1865 41.9224 67.8017 50.5124 70.1034 57.7301C71.2487 61.3218 71.8864 64.7747 71.7479 67.7887ZM65.8009 72.9502C71.4886 68.6678 66.1807 52.0225 53.9452 35.7718C41.7098 19.5212 27.1802 9.81907 21.4925 14.1015C15.8048 18.3839 21.1128 35.0292 33.3482 51.2798C45.5836 67.5304 60.1132 77.2326 65.8009 72.9502Z"
                                    fill="white" />
                                <path class="on-hover" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.1042 80.5652C38.6354 82.2461 35.5674 83.3658 32.3825 82.444C29.1977 81.5222 27.2019 78.937 26.0126 76.1973C24.8112 73.4296 24.179 69.9757 23.972 66.2115C23.5559 58.6471 24.814 48.9773 27.7254 38.918C30.6368 28.8588 34.7379 20.0118 39.1299 13.839C41.3154 10.7673 43.6947 8.18486 46.1886 6.48677C48.6574 4.80579 51.7254 3.68618 54.9103 4.60794C58.0951 5.52971 60.0909 8.11494 61.2802 10.8547C62.4816 13.6223 63.1138 17.0763 63.3208 20.8405C63.7369 28.4049 62.4788 38.0747 59.5674 48.1339C56.656 58.1932 52.5549 67.0401 48.1629 73.2129C45.9774 76.2847 43.5981 78.8671 41.1042 80.5652ZM33.4065 78.906C40.2455 80.8853 50.3741 66.6498 56.0294 47.1099C61.6847 27.5701 60.7252 10.1253 53.8863 8.14595C47.0473 6.16658 36.9187 20.4022 31.2634 39.942C25.6081 59.4819 26.5676 76.9266 33.4065 78.906Z"
                                    fill="white" />
                                <path class="on-hover" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.521 62.1356C8.74669 61.0293 6.10252 59.1123 5.08524 55.9567C4.06797 52.8011 5.09467 49.7007 6.70053 47.1824C8.32273 44.6385 10.8323 42.1825 13.8368 39.9054C19.8745 35.3295 28.594 30.9638 38.561 27.7508C48.528 24.5377 58.1555 22.9889 65.729 23.177C69.4977 23.2705 72.9692 23.7984 75.7717 24.9159C78.546 26.0222 81.1902 27.9392 82.2075 31.0948C83.2247 34.2504 82.198 37.3508 80.5922 39.8691C78.97 42.4131 76.4604 44.869 73.4559 47.1461C67.4181 51.722 58.6987 56.0877 48.7317 59.3008C38.7647 62.5138 29.1372 64.0626 21.5637 63.8745C17.795 63.781 14.3235 63.2531 11.521 62.1356ZM8.5908 54.8266C10.7752 61.6028 28.241 62.0365 47.6016 55.7952C66.9623 49.5539 80.8863 39.0011 78.7019 32.2249C76.5174 25.4487 59.0517 25.015 39.691 31.2563C20.3304 37.4976 6.40635 48.0504 8.5908 54.8266Z"
                                    fill="white" />
                                <path class="on-hover"
                                    d="M50.6453 43.5258C50.6453 47.1873 47.677 50.1555 44.0155 50.1555C40.354 50.1555 37.3857 47.1873 37.3857 43.5258C37.3857 39.8642 40.354 36.896 44.0155 36.896C47.677 36.896 50.6453 39.8642 50.6453 43.5258Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4>React</h4>
                    </div>
                </div>
            </div>
        </section>

        <div class="hori container d-flex justify-content-center">
            <hr>
        </div>

        <section class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>FAQ's</h2>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. What specific services does your digital marketing agency offer for doctors?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These
                                        classes control the
                                        overall appearance, as well as the showing and hiding via CSS transitions. You
                                        can modify any of
                                        this with custom CSS or overriding our default variables. It's also worth noting
                                        that just about any
                                        HTML can go within the <code>.accordion-body</code>, though the transition does
                                        limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. What specific services does your digital marketing agency offer for doctors?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Healthcare Marketing will allow you to nurture and build long-term connections
                                        and relationships with your patients. Turn your visitors into loyal. Successful
                                        Healthcare Marketing leads to successful patient engagement, and successful
                                        patient engagement leads to a booming practice.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3. What specific services does your digital marketing agency offer for doctors?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Healthcare Marketing Agencies have years of experience in online brand building.
                                        Thus, hiring a healthcare digital marketing agency is an absolute necessity as
                                        it can help you ramp up your online presence, build a successful healthcare
                                        brand, and attract more patients through online & offline mediums.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                        4. What specific services does your digital marketing agency offer for doctors?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the
                                        transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefive" aria-expanded="false"
                                        aria-controls="collapsefive">
                                        5. What specific services does your digital marketing agency offer for doctors?
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the
                                        transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        6. What specific services does your digital marketing agency offer for doctors?
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that
                                        just about any HTML can go within the <code>.accordion-body</code>, though the
                                        transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="check-social py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-center flex-column align-items-center">
                        <h2>Checkout our Social Handles</h2>
                        <div class="d-flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42"
                                fill="none">
                                <g clip-path="url(#clip0_636_3223)">
                                    <path
                                        d="M24.4238 21.1538C24.4238 23.3209 22.6671 25.0776 20.5 25.0776C18.3329 25.0776 16.5762 23.3209 16.5762 21.1538C16.5762 18.9867 18.3329 17.23 20.5 17.23C22.6671 17.23 24.4238 18.9867 24.4238 21.1538Z"
                                        fill="white" />
                                    <path
                                        d="M29.6767 14.2114C29.4881 13.7002 29.1872 13.2376 28.7962 12.8579C28.4164 12.4669 27.9541 12.1659 27.4427 11.9773C27.0279 11.8162 26.4048 11.6245 25.2571 11.5722C24.0156 11.5156 23.6433 11.5034 20.5003 11.5034C17.3569 11.5034 16.9847 11.5153 15.7434 11.5719C14.5958 11.6245 13.9723 11.8162 13.5579 11.9773C13.0464 12.1659 12.5838 12.4669 12.2044 12.8579C11.8134 13.2376 11.5124 13.6999 11.3235 14.2114C11.1624 14.6262 10.9707 15.2496 10.9184 16.3973C10.8618 17.6385 10.8496 18.0107 10.8496 21.1541C10.8496 24.2972 10.8618 24.6694 10.9184 25.9109C10.9707 27.0586 11.1624 27.6817 11.3235 28.0965C11.5124 28.6079 11.813 29.0702 12.2041 29.45C12.5838 29.841 13.0461 30.1419 13.5576 30.3305C13.9723 30.4919 14.5958 30.6837 15.7434 30.7359C16.9847 30.7926 17.3566 30.8044 20.5 30.8044C23.6437 30.8044 24.0159 30.7926 25.2568 30.7359C26.4045 30.6837 27.0279 30.4919 27.4427 30.3305C28.4693 29.9345 29.2807 29.1231 29.6767 28.0965C29.8378 27.6817 30.0296 27.0586 30.0821 25.9109C30.1387 24.6694 30.1506 24.2972 30.1506 21.1541C30.1506 18.0107 30.1387 17.6385 30.0821 16.3973C30.0299 15.2496 29.8381 14.6262 29.6767 14.2114ZM20.5003 27.1984C17.1617 27.1984 14.4553 24.4923 14.4553 21.1538C14.4553 17.8152 17.1617 15.1091 20.5003 15.1091C23.8385 15.1091 26.5449 17.8152 26.5449 21.1538C26.5449 24.4923 23.8385 27.1984 20.5003 27.1984ZM26.7839 16.2828C26.0038 16.2828 25.3713 15.6503 25.3713 14.8701C25.3713 14.09 26.0038 13.4575 26.7839 13.4575C27.564 13.4575 28.1965 14.09 28.1965 14.8701C28.1962 15.6503 27.564 16.2828 26.7839 16.2828Z"
                                        fill="white" />
                                    <path
                                        d="M20.5 0.653809C9.17989 0.653809 0 9.8337 0 21.1538C0 32.4739 9.17989 41.6538 20.5 41.6538C31.8201 41.6538 41 32.4739 41 21.1538C41 9.8337 31.8201 0.653809 20.5 0.653809ZM32.2005 26.007C32.1435 27.2601 31.9443 28.1156 31.6534 28.8645C31.0418 30.4457 29.7919 31.6957 28.2106 32.3072C27.4621 32.5981 26.6063 32.797 25.3535 32.8543C24.0982 32.9115 23.6972 32.9253 20.5003 32.9253C17.3031 32.9253 16.9024 32.9115 15.6468 32.8543C14.394 32.797 13.5382 32.5981 12.7897 32.3072C12.0039 32.0116 11.2926 31.5483 10.7045 30.9493C10.1058 30.3615 9.64253 29.6499 9.34693 28.8645C9.05602 28.1159 8.85677 27.2601 8.79984 26.0073C8.74197 24.7517 8.72852 24.3507 8.72852 21.1538C8.72852 17.9569 8.74197 17.5559 8.79952 16.3006C8.85645 15.0475 9.0554 14.192 9.34631 13.4432C9.64191 12.6577 10.1055 11.9461 10.7045 11.3583C11.2923 10.7593 12.0039 10.296 12.7894 10.0004C13.5382 9.70952 14.3937 9.51057 15.6468 9.45333C16.9021 9.39609 17.3031 9.38232 20.5 9.38232C23.6969 9.38232 24.0979 9.39609 25.3532 9.45364C26.6063 9.51057 27.4618 9.70952 28.2106 10.0001C28.9961 10.2957 29.7077 10.7593 30.2958 11.3583C30.8945 11.9464 31.3581 12.6577 31.6534 13.4432C31.9446 14.192 32.1435 15.0475 32.2008 16.3006C32.258 17.5559 32.2715 17.9569 32.2715 21.1538C32.2715 24.3507 32.258 24.7517 32.2005 26.007Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_636_3223">
                                        <rect width="41" height="41" fill="white" transform="translate(0 0.653809)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42"
                                fill="none">
                                <g clip-path="url(#clip0_636_3227)">
                                    <path
                                        d="M41 21.1538C41 9.83076 31.823 0.653809 20.5 0.653809C9.17695 0.653809 0 9.83076 0 21.1538C0 32.4769 9.17695 41.6538 20.5 41.6538C20.6201 41.6538 20.7402 41.6538 20.8604 41.6458V25.6942H16.4561V20.5612H20.8604V16.7815C20.8604 12.4013 23.535 10.0149 27.4428 10.0149C29.3166 10.0149 30.9262 10.1511 31.3906 10.2151V14.7956H28.7C26.5779 14.7956 26.1615 15.8046 26.1615 17.286V20.5532H31.2465L30.5818 25.6862H26.1615V40.861C34.7299 38.4026 41 30.5149 41 21.1538Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_636_3227">
                                        <rect width="41" height="41" fill="white" transform="translate(0 0.653809)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42"
                                fill="none">
                                <g clip-path="url(#clip0_636_3229)">
                                    <path
                                        d="M20.5 0.653809C9.17989 0.653809 0 9.8337 0 21.1538C0 32.4739 9.17989 41.6538 20.5 41.6538C31.8201 41.6538 41 32.4739 41 21.1538C41 9.8337 31.8201 0.653809 20.5 0.653809ZM14.5429 31.644H9.55025V16.6235H14.5429V31.644ZM12.0468 14.5724H12.0142C10.3388 14.5724 9.25528 13.4191 9.25528 11.9777C9.25528 10.5037 10.372 9.38232 12.0799 9.38232C13.7878 9.38232 14.8389 10.5037 14.8714 11.9777C14.8714 13.4191 13.7878 14.5724 12.0468 14.5724ZM32.5455 31.644H27.5534V23.6084C27.5534 21.5889 26.8306 20.2116 25.0241 20.2116C23.6449 20.2116 22.8235 21.1407 22.4625 22.0375C22.3305 22.3584 22.2983 22.807 22.2983 23.2559V31.644H17.3059C17.3059 31.644 17.3713 18.0326 17.3059 16.6235H22.2983V18.7502C22.9618 17.7267 24.1489 16.2709 26.7977 16.2709C30.0825 16.2709 32.5455 18.4177 32.5455 23.0313V31.644Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_636_3229">
                                        <rect width="41" height="41" fill="white" transform="translate(0 0.653809)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42"
                                fill="none">
                                <g clip-path="url(#clip0_636_3231)">
                                    <path d="M17.9463 24.9945L24.6147 21.1539L17.9463 17.3132V24.9945Z" fill="white" />
                                    <path
                                        d="M20.5 0.653809C9.17989 0.653809 0 9.8337 0 21.1538C0 32.4739 9.17989 41.6538 20.5 41.6538C31.8201 41.6538 41 32.4739 41 21.1538C41 9.8337 31.8201 0.653809 20.5 0.653809ZM33.3094 21.1748C33.3094 21.1748 33.3094 25.3323 32.782 27.337C32.4864 28.4343 31.6212 29.2996 30.5238 29.5949C28.5191 30.1226 20.5 30.1226 20.5 30.1226C20.5 30.1226 12.5019 30.1226 10.4762 29.5739C9.37884 29.2786 8.51362 28.4131 8.21802 27.3158C7.69032 25.3323 7.69032 21.1538 7.69032 21.1538C7.69032 21.1538 7.69032 16.9966 8.21802 14.9919C8.51331 13.8945 9.3998 13.008 10.4762 12.7128C12.4809 12.1851 20.5 12.1851 20.5 12.1851C20.5 12.1851 28.5191 12.1851 30.5238 12.7337C31.6212 13.029 32.4864 13.8945 32.782 14.9919C33.3306 16.9966 33.3094 21.1748 33.3094 21.1748Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_636_3231">
                                        <rect width="41" height="41" fill="white" transform="translate(0 0.653809)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>


    <script>
        function changeBackground(imageName, tabId) {
            var serviceContent = document.getElementById("departments");
            var tabAnchor = document.getElementById(tabId);
            serviceContent.style.backgroundImage = "url('assets/img/" + imageName + "')";

            // Remove 'active' class from all nav-items except the clicked one
            var navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(function (item) {
                if (item.id !== tabId) {
                    item.classList.remove('active');
                }
            });

            // Add 'active' class to the clicked nav-item
            tabAnchor.parentElement.classList.add('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>