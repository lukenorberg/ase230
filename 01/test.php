<?php
// Variables for Resume

// Header
$name = "Luke Norberg";
$my_picture = './assets/images/me.png';
$job = "Software Engineer";
$email = "norbergp2@mymail.nku.edu";
$phone_number = "859 962 9251";
$linkedin = "https://linkedin.com/in/lukenorberg";
$github = "https://github.com/lukenorberg";
$website = "https://lukenorberg.com";

// Body
$summary = "Applied Software Engineering Major at Northern Kentucky University. Motivated professional focused on 
continual education through a career and schooling. Accomplished at interpersonal communication and confident with 
asking for support when needed.";
$work_experience = [
    [
        "job" => "Software Engineer",
        "company" => "Northern Kentucky University",
        "date_of_working" => "May 2023 - July 2023",
        "description" => "Adapted an eye-tracking solution to incorporate data visualization tools for easier diagnosis 
        by medical professionals.",
        "achievements_description" => "",
        "achievements" => [
            "Demonstrated proficiency in developing web applications to deliver innovative machine learning features 
            and ensure optimal user experiences.",
            "Implemented version control using Git to manage codebase and facilitate collaborative development.",
            "Collaborated effectively with researchers from Health Science and Computer Science."
        ],
        "technologies" => [
            "HTML/CSS",
            "PHP",
            "JavaScript",
            "NodeJS",
            "MediaPipe"
        ]
    ],
    [
        "job" => "Customer Service Representative",
        "company" => "Fidelity Investments",
        "date_of_working" => "July 2022 - March 2023",
        "description" => " Provided stellar customer service utilizing empathy, strong problem-solving skills, and clear 
        communication. Clearly and effectively educated participants on the details of their retirement plans.Navigated 
        resources to provide an end result in a timely manner.",
        "achievements" => [
            "Average call quality score of 94.",
            "Created a training OneNote to be used by peers and trainers."
        ],
        "technologies" => [
            "OneNote",
            "Zoom",
            "Proprietary Software"
        ]
    ],
    [
        "job" => "To-go",
        "company" => "Outback Steakhouse",
        "date_of_working" => "November 2020 - July 2022",
        "description" => "Anticipated needs, processed guests orders, and took payment in a hospitable, timely manner. 
        Successfully adapted to various business needs, including contributing to multiple positions. Focused on a 
        customer-first mindset by assisting customers over the phones by answering inquiries, taking orders, and 
        resolving complaints.",
        "achievements" => [
            "Successfully onboarded multiple new employees while creating an inclusive environment."
        ],
        "technologies" => [
            "Proprietary Software"
        ]
    ]
];
$projects = [
    [
        "title" => "Music Search Site",
        "description" => "a Music search site built with React and Tailwind that lets user's navigate their favorite 
        songs, artists, and albums conveniently using a public music API. This music search site is designed to allow a 
        comfortable UI/UX experience for the user.",
        "image" => "",
        "link" => "https://github.com/lukenorberg/PersonalProjects/tree/main/Music%20Search"
    ],
    [
        "title" => "RateYourMusic.com Web Scraper",
        "description" => "Extracted and analyzed music data from RateYourMusic.com using Beautiful Soup and Pandas. 
        Scraped website data to gather information such as scores and genre tags, and used Pandas to organize and 
        categorize the data. The resulting insights were used to gain a deeper understanding of music trends and 
        preferences.",
        "link" => "https://github.com/lukenorberg/PersonalProjects/tree/main/RYM_Web_Scraper"
    ],
    [
        "title" => "Calculator",
        "description" => "Developed a calculator application using HTML, CSS, and JavaScript. Implemented user-friendly 
        interface using HTML and CSS, and programmed the calculator's functions and logic using JavaScript. 
        The application was designed to perform basic mathematical operations and was built with scalability and 
        flexibility in mind.",
        "link" => "https://github.com/lukenorberg/PersonalProjects/tree/main/Calculator"
    ]
];

// Sidebar
$skills = ["React", "Node.js", "JavaScript", "Java", "Python"];
$additional_skills = ["Git", "HTML/CSS", "Tailwind"];
$education = [
    [
        "degree" => "BS in Applied Software Engineering",
        "school_name" => "Northern Kentucky University",
        "year_range" => "2023 - Present"
    ]
];
$awards = [
    [
        "award" => "John Philip Sousa Award",
        "description" => "an award recognizing young musicians for musicality, leadership, and loyalty from school 
        symphonic bands."
    ]
];
$languages = [
    [
        "language" => "English",
        "skill_level" => "Native"
    ]
];
$interests = ["Musical Performance", "Road Trips", "Biblical Scholarship"];
?>