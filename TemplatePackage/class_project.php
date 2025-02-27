<?php
    
    class Project {
        
        public function __construct($projectTitle, $projectSummary, $projectTools, $projectLinkResume, $projectLinkGithub, $projectLinkDirect) {
            $this->projectTitle = $projectTitle;
            $this->projectSummary = $projectSummary;
            $this->projectTools = $projectTools;
            $this->projectLinkResume = $projectLinkResume;
            $this->projectLinkGithub = $projectLinkGithub;
            $this->projectLinkDirect = $projectLinkDirect;
        }

        public function displayProjectCard() {
            echo '<div class="card mt-4 col-12 col-md-10" >
                    <div class="card-body">
                        <h5 class="card-title">' . $this->projectTitle . '</h5>
                        <p class="card-text">' . $this->projectSummary . '</p>
                        <p class="tools">' . $this->projectTools . '</p>
                        <a href="' . $this->projectLinkGithub . '" target="_blank" class="card-link git-link"><i class="fab fa-github"></i></a>
                        <a href="' . $this->projectLinkDirect . '" target="_blank" class="card-link direct-link"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>';
        }

        public function displayProjectWord() {
            echo '
            <p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height: 115%">
                <strong>
                    <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif; mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">'
				         . $this->projectTitle .  
                    '</span>
                </strong>
                <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial; mso-bidi-theme-font:minor-bidi; font-weight:normal;mso-bidi-font-weight:bold">
                    &nbsp;|
                </span>
                <strong>
                    <i style="mso-bidi-font-style:normal">
			            <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;color:#7F7F7F;mso-themecolor:text1;mso-themetint:128;font-weight:normal;mso-bidi-font-weight:bold">'
				             . $this->projectLinkGithub . 
                        '</span>
                    </i>
                </strong>
                <strong>
                    <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">
                        <o:p></o:p>
                    </span>
                </strong>
            </p>

			<p class=MsoNoSpacing><span style="font-size:9.0pt;font-family:Source Sans Pro,sans-serif">'
				 . $this->projectSummary . 
			        '<span class=Emphasis-SmallChar>&nbsp;('
				        . $this->projectTools . 
                    ')</span>
                    </span>
                    <span style="font-family:Source Sans Pro,sans-serif">
                        <o:p></o:p>
                    </span>
            </p>
            <p class=MsoNoSpacing><span style="font-family:Source Sans Pro,sans-serif"><o:p>&nbsp;</o:p></span></p>
            ';
        }

    };
?>

<?php
    
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
            "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean vitae dignissim neque, at mattis odio.", 
            "Tools | Tools | Tools | Tools", 
            "www.projectsite.com", 
            "www.projectsite.com", 
            "www.projectsite.com"
        )
        );

?>