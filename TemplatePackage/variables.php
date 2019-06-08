<?php

// Contact Variables
    $contactName = "John Doe";
    $contactTitle = "Job Title";
    $contactLocation = "Location, USA";
    $contactPhone = "888.123.4567";
    $contactEmail = "john.doe@gmail.com";
    $contactWebsite = "johndoe.com";
    $contactGithub = "https://github.com/johndoe";
    $contactGithubHandle = "johndoe";
    $contactLinkedin = "https://www.linkedin.com/in/johndoe/";
    $contactTwitter = "https://twitter.com/johndoe?lang=en";
    $contactCodepen = "https://codepen.io/johndoe/";

// About Variables
    $aboutMe = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ligula orci, euismod a finibus ac, blandit ultricies risus. Etiam hendrerit, purus ac venenatis rutrum, augue libero tristique nibh, vel rhoncus lorem massa ut neque. Nulla egestas mattis suscipit. Pellentesque mattis, elit finibus lobortis malesuada, purus elit dignissim velit, et finibus nisl enim eu urna. Ut sodales nibh sed turpis tempor sagittis id vel arcu. Cras eu porta enim, ut accumsan eros. Fusce ut vestibulum mi.";

    $resumeSummary = "";

// Project Class Construct
    class Project {
        // Constructor
        public function __construct($projectTitle, $projectSummary, $projectTools, $projectLinkResume, $projectLinkGithub, $projectLinkDirect) {
            $this->projectTitle = $projectTitle;
            $this->projectSummary = $projectSummary;
            $this->projectTools = $projectTools;
            $this->projectLinkResume = $projectLinkResume;
            $this->projectLinkGithub = $projectLinkGithub;
            $this->projectLinkDirect = $projectLinkDirect;
        }

        public function displayProject() {
            echo '<h5 class="card-title">' . $this->projectTitle . '</h5>
                <p class="card-text">' . $this->projectSummary . '</p>
                <p class="tools">' . $this->projectTools . '</p>
                <a href="' . $this->projectLinkGithub . '" target="_blank" class="card-link git-link"><i class="fab fa-github"></i></a>
                <a href="' . $this->projectLinkDirect . '" target="_blank" class="card-link direct-link"><i class="fas fa-external-link-alt"></i></a>';
        }
    };

    // Projects
        $project1 = new Project(
            "Project Title", 
            "This is where you'll write a description of your project and related features.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        );

        $project2 = new Project(
            "Project Title", 
            "This is where you'll write a description of your project and related features.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        );

        $project3 = new Project(
            "Project Title", 
            "This is where you'll write a description of your project and related features.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        );

        $project4 = new Project(
            "Project Title", 
            "This is where you'll write a description of your project and related features.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        );

// // Work Experience Construct
//     class Job {
//         // Constructor
//         public function __construct($jobTitle, $jobCompany, $jobSummary, $jobBullet1) {
//             $this->jobTitle = $jobTitle;
//             $this->jobCompany = $jobCompany;
//             $this->jobSummary = $jobSummary;
//             $this->jobBullet1 = $jobBullet1;
//         }

//         public function displayJob() {
//             echo '<h5 class="card-title">' . $this->jobTitle . '</h5>
//                 <p class="card-text">' . $this->jobCompany . '</p>
//                 <p class="tools">' . $this->jobSummary . '</p>
//                 <a href="' . $this->jobBullet1 . '" target="_blank" class="card-link git-link"><i class="fab fa-github"></i></a>
//                 <a href="#" target="_blank" class="card-link direct-link"><i class="fas fa-external-link-alt"></i></a>';
//         }
//     };

//     // Projects
//     $job1 = new Job(
//         "Job One Title", 
//         "ABC Corporation",
//         "This is where you write a summary of the company or what you did in your position.", 
//         "Lorem ipsum dolar sit amet.", 
//     );

?>