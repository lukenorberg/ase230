<?php
// Variables for Resume

// Header
$name = 'Luke Norberg';
$my_picture = './assets/images/me.png';
$job = 'Software Engineer';
$email = 'norbergp2@mymail.nku.edu';
$phone_number = '859-962-9251';
$linkedin = 'https://www.linkedin.com/in/luke-norberg-b74635250/';
$github = 'https://github.com/lukenorberg';
$website = 'https://www.nku.edu/';

// Body
$summary = 'Applied Software Engineering Major at Northern Kentucky University. Motivated professional focused on 
continual education through a career and schooling. Accomplished at interpersonal communication and confident with 
asking for support when needed.';
$work_experience = [
    [
        'job' => 'Software Engineer',
        'company' => 'Northern Kentucky University',
        'date_of_working' => 'May 2023 - July 2023',
        'description' => 'Adapted an eye-tracking solution to incorporate data visualization tools for easier diagnosis 
        by medical professionals.',
        'achievements_description' => '',
        'achievements' => [
            'Demonstrated proficiency in developing web applications to deliver innovative machine learning features 
            and ensure optimal user experiences.',
            'Implemented version control using Git to manage codebase and facilitate collaborative development.',
            'Collaborated effectively with researchers from Health Science and Computer Science.'
        ],
        'technologies' => [
            'HTML/CSS',
            'PHP',
            'JavaScript',
            'NodeJS',
            'MediaPipe'
        ]
    ],
    [
        'job' => 'Customer Service Representative',
        'company' => 'Fidelity Investments',
        'date_of_working' => 'July 2022 - March 2023',
        'description' => ' Provided stellar customer service utilizing empathy, strong problem-solving skills, and clear 
        communication. Clearly and effectively educated participants on the details of their retirement plans.Navigated 
        resources to provide an end result in a timely manner.',
        'achievements' => [
            'Average call quality score of 94.',
            'Created a training OneNote to be used by peers and trainers.'
        ],
        'technologies' => [
            'OneNote',
            'Zoom',
            'Proprietary Software'
        ]
    ],
    [
        'job' => 'To-go',
        'company' => 'Outback Steakhouse',
        'date_of_working' => 'November 2020 - July 2022',
        'description' => 'Anticipated needs, processed guests orders, and took payment in a hospitable, timely manner. 
        Successfully adapted to various business needs, including contributing to multiple positions. Focused on a 
        customer-first mindset by assisting customers over the phones by answering inquiries, taking orders, and 
        resolving complaints.',
        'achievements' => [
            'Successfully onboarded multiple new employees while creating an inclusive environment.'
        ],
        'technologies' => [
            'Proprietary Software'
        ]
    ]
];
$projects = [
    [
        'title' => 'Music Search Site',
        'description' => 'a Music search site built with React and Tailwind that lets user\'s navigate their favorite 
        songs, artists, and albums conveniently using a public music API. This music search site is designed to allow a 
        comfortable UI/UX experience for the user.',
        'image' => './assets/images/search_Music.png',
        'link' => 'https://github.com/lukenorberg/PersonalProjects/tree/main/Music%20Search'
    ],
    [
        'title' => 'RateYourMusic.com Web Scraper',
        'description' => 'Extracted and analyzed music data from RateYourMusic.com using Beautiful Soup and Pandas. 
        Scraped website data to gather information such as scores and genre tags, and used Pandas to organize and 
        categorize the data. The resulting insights were used to gain a deeper understanding of music trends and 
        preferences.',
        'image' => './assets/images/Rate_Your_Music_Logo.jpg',
        'link' => 'https://github.com/lukenorberg/PersonalProjects/tree/main/RYM_Web_Scraper'
    ],
    [
        'title' => 'Calculator',
        'description' => 'Developed a calculator application using HTML, CSS, and JavaScript. Implemented user-friendly 
        interface using HTML and CSS, and programmed the calculator\'s functions and logic using JavaScript. 
        The application was designed to perform basic mathematical operations and was built with scalability and 
        flexibility in mind.',
        'image' => './assets/images/calculator.png',
        'link' => 'https://github.com/lukenorberg/PersonalProjects/tree/main/Calculator'
    ]
];

// Sidebar
$skills = ['React', 'Node.js', 'JavaScript', 'Java', 'Python'];
$additional_skills = ['Git', 'HTML/CSS', 'Tailwind'];
$education = [
    [
        'degree' => 'BS in Applied Software Engineering',
        'school_name' => 'Northern Kentucky University',
        'year_range' => '2023 - Present'
    ]
];
$awards = [
    [
        'award' => 'John Philip Sousa Award',
        'description' => 'an award recognizing young musicians for musicality, leadership, and loyalty from school 
        symphonic bands.'
    ]
];
$languages = [
    [
        'language' => 'English',
        'skill_level' => 'Native'
    ]
];
$interests = ['Musical Performance', 'Road Trips', 'Biblical Scholarship'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$name?>'s Resume</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$name?>'s resume">
    <meta name="author" content="<?=$name?>">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
<article class="resume-wrapper text-center position-relative">
    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="row">
                <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                    <img class="picture" src="<?=$my_picture?>" alt="">
                </div><!--//col-->
                <div class="col">
                    <div class="row p-4 justify-content-center justify-content-md-between">
                        <div class="primary-info col-auto">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$name?></h1>
                            <div class="title mb-3"><?=$job?></div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a class="text-link" href="mailto:<?=$email?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$email?></a></li>
                                <li><a class="text-link" href="tel:<?=$phone_number?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$phone_number?></a></li>
                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info col-auto mt-2">
                            <ul class="resume-social list-unstyled">
                                <li class="mb-3"><a class="text-link" href="<?=$linkedin?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$linkedin?></a></li>
                                <li class="mb-3"><a class="text-link" href="<?=$github?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$github?></a></li>
                                <li><a class="text-link" href="<?=$website?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$website?></a></li>
                            </ul>
                        </div><!--//secondary-info-->
                    </div><!--//row-->

                </div><!--//col-->
            </div><!--//row-->
        </header>
        <div class="resume-body p-5">
            <section class="resume-section summary-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
                <div class="resume-section-content">
                    <p class="mb-0"><?=$summary?></p>
                </div>
            </section><!--//summary-section-->
            <div class="row">
                <div class="col-lg-9">
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">
                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1"><?=$work_experience[0]['job']?></h3>
                                            <div class="resume-company-name ms-auto"><?=$work_experience[0]['company']?></div>
                                        </div><!--//row-->
                                        <div class="resume-position-time"><?=$work_experience[0]['date_of_working']?></div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p><?=$work_experience[0]['description']?></p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <ul>
                                            <li><?=$work_experience[0]['achievements'][0]?></li>
                                            <li><?=$work_experience[0]['achievements'][1]?></li>
                                        </ul>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[0]['technologies'][0]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[0]['technologies'][1]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[0]['technologies'][2]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[0]['technologies'][3]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[0]['technologies'][4]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"></span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->

                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1"><?=$work_experience[1]['job']?></h3>
                                            <div class="resume-company-name ms-auto"><?=$work_experience[1]['company']?></div>
                                        </div><!--//row-->
                                        <div class="resume-position-time"><?=$work_experience[1]['date_of_working']?></div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p><?=$work_experience[1]['description']?></p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
                                        <ul>
                                            <li><?=$work_experience[1]['achievements'][0]?></li>
                                            <li><?=$work_experience[1]['achievements'][1]?></li>
                                        </ul>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[1]['technologies'][0]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[1]['technologies'][1]?></span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[1]['technologies'][2]?></span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->

                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1"><?=$work_experience[2]['job']?></h3>
                                            <div class="resume-company-name ms-auto"><?=$work_experience[2]['company']?></div>
                                        </div><!--//row-->
                                        <div class="resume-position-time"><?=$work_experience[2]['date_of_working']?></div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p><?=$work_experience[2]['description']?></p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <ul>
                                            <li><?=$work_experience[2]['achievements'][0]?></li>
                                        </ul>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?=$work_experience[2]['technologies'][0]?></span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->



                            </div><!--//resume-timeline-->






                        </div>
                    </section><!--//projects-section-->
                </div>
                <div class="col-lg-3">
                    <section class="resume-section skills-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?=$skills[0]?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?=$skills[1]?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?=$skills[2]?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>

                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?=$skills[3]?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?=$skills[4]?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="badge badge-light"><?=$additional_skills[0]?></span></li>
                                    <li class="list-inline-item"><span class="badge badge-light"><?=$additional_skills[1]?></span></li>
                                    <li class="list-inline-item"><span class="badge badge-light"><?=$additional_skills[2]?></span></li>
                                </ul>
                            </div><!--//resume-skill-item-->
                        </div><!--resume-section-content-->
                    </section><!--//skills-section-->
                    <section class="resume-section education-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <div class="resume-degree font-weight-bold"><?=$education[0]['degree']?></div>
                                    <div class="resume-degree-org"><?=$education[0]['school_name']?></div>
                                    <div class="resume-degree-time"><?=$education[0]['year_range']?></div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//education-section-->
                    <section class="resume-section reference-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-awards-list">
                                <li class="mb-2 ps-4 position-relative">
                                    <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                    <div class="resume-award-name"><?=$awards[0]["award"]?></div>
                                    <div class="resume-award-desc"><?=$awards[0]["description"]?></div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->
                    <section class="resume-section language-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-lang-list">
                                <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?=$languages[0]['language']?></span> <small class="text-muted font-weight-normal">(<?=$languages[0]['skill_level']?>)</small></li>
                            </ul>
                        </div>
                    </section><!--//language-section-->
                    <section class="resume-section interests-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-1"><?=$interests[0]?></li>
                                <li class="mb-1"><?=$interests[1]?></li>
                                <li class="mb-1"><?=$interests[2]?></li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->

                </div>
            </div><!--//row-->
            <section class="resume-section experience-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?=$projects[0]['image']?>" alt="Project 1" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?=$projects[0]['title']?></h5>
                                <p class="card-text"><?=$projects[0]['description']?></p>
                                <a class="btn btn-outline-primary" href="<?=$projects[0]['link']?>">Go to link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?=$projects[1]['image']?>" alt="Project 2" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?=$projects[1]['title']?></h5>
                                <p class="card-text"><?=$projects[1]['description']?></p>
                                <a class="btn btn-outline-primary" href="<?=$projects[1]['link']?>">Go to link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?=$projects[2]['image']?>" alt="Project 3" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?=$projects[2]['title']?></h5>
                                <p class="card-text"><?=$projects[2]['description']?></p>
                                <a class="btn btn-outline-primary" href="<?=$projects[2]['link']?>">Go to link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--//projects-section-->
        </div><!--//resume-body-->


    </div>
</article>


<footer class="footer text-center pt-2 pb-5">
    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
    <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?=$name?></small>
</footer>



</body>
</html>

