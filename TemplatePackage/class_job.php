<?php
    
    class Job {
        
        public function __construct($jobTitle, $jobCompany, $jobStart, $jobEnd, $jobSummary, $jobBullet, $jobTools) {
            $this->jobTitle = $jobTitle;
            $this->jobCompany = $jobCompany;
            $this->jobStart = $jobStart;
            $this->jobEnd = $jobEnd;
            $this->jobSummary = $jobSummary;
            $this->jobBullet = $jobBullet;
            $this->jobTools = $jobTools;
        }

        public function displayJobWord() {
            echo '
            <p class=MsoNoSpacing style="line-height:115%;tab-stops:right 7.5in">
                <strong>
                    <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">'
                         . $this->jobTitle . '&ndash;' . $this->jobCompany .  
                    '<span style="mso-tab-count:1">   </span></span>
                </strong>
                <strong>
                    <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;font-weight:normal;mso-bidi-font-weight:bold">'
                         . $this->jobStart . '&ndash;' . $this->jobEnd . 
                    '</span>
                </strong>
                <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif">
                    <o:p></o:p>
                </span>
            </p>
    
            <p class=MsoNoSpacing style="margin-left:.5in;text-indent:-.25in;line-height:115%;mso-list:l1 level1 lfo2">
                <![if !supportLists]>
                    <span style="font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol">
                        <span style="mso-list:Ignore">
                            &bull;
                            <span style="font:7.0pt, Times New Roman;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                        </span>
                    </span>
                <![endif]>
                <span style="font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif">'
                     . $this->jobBullet . 
                    '<o:p></o:p>
                </span>
            </p>
    
            <p class=MsoNoSpacing style="margin-left:.5in;text-indent:-.25in;line-height:115%;mso-list:l1 level1 lfo2">
                <![if !supportLists]>
                    <span style="font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol">
                        <span style="mso-list:Ignore">
                            &bull;
                            <span style="font:7.0pt, Times New Roman;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                        </span>
                    </span>
                <![endif]>
                <span style="font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif">'
                     . $this->jobBullet . 
                    '<o:p></o:p>
                </span>
            </p>
    
            <p class=MsoNoSpacing style="line-height:115%;tab-stops:right 7.5in">
                <strong>
                    <span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">
                        <o:p>&nbsp;</o:p>
                    </span>
                </strong>
            </p>
            ';
        }



        public function displayJobWord2() {
            echo '
			<p class=MsoNoSpacing><span style="font-size:9.0pt;font-family:Source Sans Pro,sans-serif">'
				 . $this->jobSummary . 
			        '<span class=Emphasis-SmallChar>&nbsp;('
				        . $this->jobTools . 
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
    
    $jobs = array(
        new Job(
            "Job Title 1", 
            "ABC Company",
            "May 2000",
            "August 2010",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue magna, fermentum vitae malesuada congue, pellentesque vitae velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean id magna nec leo mattis elementum.", 
            "Bullet point one",
            ""
        ),

        new Job(
            "Job Title 2", 
            "ABC Company 2",
            "May 2000",
            "August 2010",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue magna, fermentum vitae malesuada congue, pellentesque vitae velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean id magna nec leo mattis elementum.", 
            "Bullet point one",
            "Tools | Tools | Tools | Tools"
        ),

        new Job(
            "Job Title 3", 
            "ABC Company 3",
            "May 2000",
            "August 2010",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue magna, fermentum vitae malesuada congue, pellentesque vitae velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean id magna nec leo mattis elementum.", 
            "Bullet point one",
            "Tools | Tools | Tools | Tools"
        )
    );

?>