<link rel="stylesheet" href="<?= base_url(); ?>css/styles.css" >
<!-- <titles>Home Page</title> -->
</head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Kier Joseph Ortiz</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url();?>assets/img/profile.jpg"/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <br> <br>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= site_url('MainController/view')?>">Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Kier Joseph
                        <span class="text-primary">Ortiz</span>
                    </h1>
                    <div class="subheading mb-5">
                        9500 Brookfield Street, Waldorf MD. 20603
                        <a href="mailto:kierortiz0417@yahoo.com">kierortiz0417@yahoo.com</a>
                    </div>
                    <p class="lead mb-5">I am a student from Our Lady of Fatima University - Antipolo Campus, pursuing Bachelor of Science in Information Technology. </p>

                </div>
            </section>
            <hr class="m-0" />
           
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Our Lady of Fatima University - Antipolo</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Information Technology</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2017 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">La Salle College - Antipolo</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div class="subheading mb-3">Hotel and Restaurant Management</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2007 - 2011</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-less"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            HTML
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            CSS
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            PHP
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            PC Hardware Troubleshooting
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a student, I enjoy most of my time exploring steam. I am an avid MOBA player but my time has passed.</p>
                    <p class="mb-0">I am also a married person so I spend most of my free time with my wife and where ever she wants to go.</p>
                </div>
            </section>
            <hr class="m-0" />
        </div>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>