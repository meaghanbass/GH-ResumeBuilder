<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php include 'contact_variables.php'; ?>
<?php include 'class_project.php'; ?>
<?php include 'class_job.php'; ?>

<title><?php echo $contactName; ?> | <?php echo $contactTitle; ?></title>

</head>
<body>

    <!-- Site Wrapper -->
    <div class="container">

        <!-- Page 1 Contact -->
        <div class="row align-items-center page" id="home">
            <div class="col align-self-center text-center">
                <div class="row justify-content-center nav fixed-top pt-4 pb-3 bg-white">
                    <a href="#home" class="mr-3">Home</a>
                    <a href="#about" class="ml-3 mr-3">About Me</a>
                    <a href="#portfolio" class="ml-3 mr-3">Portfolio</a>
                    <a href="resume.php" target="_blank" class="ml-3 mr-3">Resume</a>
                    <a href="#contact" class="ml-3">Contact</a>
                </div>
                    <!-- Navbar Shadow -->
                    <script>
                        var $document = $(document),
                            $element = $('.nav'),
                            className = 'nav-shadow';

                            $document.scroll(function() {
                            if ($document.scrollTop() >= 200) {
                                // Change 50 to the value you require
                                // for the event to trigger
                                $element.addClass(className);
                            } else {
                                $element.removeClass(className);
                            }
                            });
                    </script>

                <h1><?php echo $contactName; ?></h1>
                <h4><?php echo $contactTitle; ?></h4>
                <div class="row justify-content-center social-links">
                    <a href=<?php echo $contactGithub; ?> target="_blank" title="Github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href=<?php echo $contactLinkedin; ?> target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href=<?php echo $contactTwitter; ?> target="_blank" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href=<?php echo $contactCodepen; ?> target="_blank" title="Codepen">
                        <i class="fab fa-codepen"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Page 2 About Me -->
        <div class="row align-items-center page" id="about">
            <div class="col align-self-center text-center">
                
                <h3 class="pb-5">About Me</h3>
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                    <p><?php echo $aboutMe; ?></p>
                </div>
            </div>
        </div>



        <!-- Page 3 Portfolio -->
        <div class="row justify-content-center pt-5" id="portfolio">
            <div class="col-12 text-center pb-5 pt-5">
                <h3>Portfolio</h3>
            </div>

            <!-- Projects -->
            <?php
                foreach ($projects as $project) {
                    $project->displayProjectCard();
                };
            ?>


        </div>

        <!-- Page 4 Contact -->
        <div class="row align-items-center page" id="contact">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="col align-self-center text-center">
                    <h3 class="pb-5">Contact</h3>
                </div>
            <?php include 'contact.php'; ?>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer text-center pt-5">
            <h6>&copy; <?php echo date("Y"); ?> - <?php echo $contactName; ?></h6>
        </div>
    </div>
    <!-- End Site Wrapper -->




</body>
</html>