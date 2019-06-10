<?php
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

        public function displayProjectCard() {
            echo '<div class="card mt-4 w-75" >
                    <div class="card-body">
                        <h5 class="card-title">' . $this->projectTitle . '</h5>
                        <p class="card-text">' . $this->projectSummary . '</p>
                        <p class="tools">' . $this->projectTools . '</p>
                        <a href="' . $this->projectLinkGithub . '" target="_blank" class="card-link git-link"><i class="fab fa-github"></i></a>
                        <a href="' . $this->projectLinkDirect . '" target="_blank" class="card-link direct-link"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>';
        }

    };
?>

<?php
    // Projects
    $projects = array(
        new Project(
            "Project Title 1", 
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue magna, fermentum vitae malesuada congue, pellentesque vitae velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean id magna nec leo mattis elementum.", 
            "Tools | Tools | Tools | Tools", 
            "https://google.com", 
            "https://google.com", 
            "https://google.com"
        ),

        new Project(
            "Project Title 2", 
            "Phasellus lobortis leo ac ornare venenatis. Suspendisse nec feugiat orci. Sed mollis euismod est, nec efficitur urna bibendum consectetur. Sed tincidunt nulla eu orci convallis, vel placerat ipsum finibus.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        ),

        new Project(
            "Project Title 3", 
            "Morbi sit amet lectus tempor, iaculis enim nec, auctor lectus. Aenean scelerisque felis et ipsum dignissim congue quis et dui. Cras eleifend ut elit vitae fermentum. Nunc interdum ac ex sit amet tincidunt. Proin mattis massa eu volutpat vulputate. Vivamus quis pharetra odio, vehicula consequat leo.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        ),

        new Project(
            "Project Title 4", 
            "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean vitae dignissim neque, at mattis odio.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        )
        );

        

?>