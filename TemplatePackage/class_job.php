<?php
    
    class Job {
        
        public function __construct($jobTitle, $jobCompany, $jobStart, $jobEnd, $jobSummary, $jobTools, $jobBullet) {
            $this->jobTitle = $jobTitle;
            $this->jobCompany = $jobCompany;
            $this->jobStart = $jobStart;
            $this->jobEnd = $jobEnd;
            $this->jobSummary = $jobSummary;
            $this->jobTools = $jobTools;
            $this->jobBullet = $jobBullet;
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
            "Software Engineer", 
            "ETrade Financial",
            "July 2012",
            "Present",
            "Main responsibilities include customer service systems.", 
            "MySQL | Oracle | Access | SAP",
            "Developed and implemented new feedback system for users' concers, bugs, and defect tracking regarding use and functionality of new interfaces."
        ),

        new Job(
            "Sytems Programmer", 
            "Intel Corporation",
            "January 2008",
            "July 2012",
            "Focused on remote servers and SSL product analysis.", 
            "Java | Visual Basic | ASP | XML",
            "Deployed and tested Remote Installation Services (RIS)-Server Installs on Windows XP."
        ),

        new Job(
            "Software Engineer", 
            "Microsoft",
            "May 2006",
            "January 2008",
            "Worked on new functionality in the 7.0 release of the Company Dynamic Sourcing Engine.", 
            "C++ | ASP.NET | SQL Server | Tomcat",
            "Developed C++ in Unix and Windows Visual Studio, completing project six months early."
        )
    );

?>