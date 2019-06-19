<?php include 'global/nav.php'; ?>

    <div class="jumbotron jumbotron-fluid text-center header">
        <div class="container pt-5 pb-5">
            <h1 class="display-4 aqua fw-700 pb-3">Resio</h1>
            <p class="lead mt-3">A web portfolio and resume template package.</p>
            <p class="lead">Updated from a single file.</p>
            <section>
                <div class="button-container">
                    <a href="docs.php">
                        <button type="button" class="btn btn-aqua btn-lg mt-5">Get Started</button>
                    </a>
                    <a href="tutorial.php">
                        <button type="button" class="btn btn-link btn-lg mt-5 aqua">Take the tutorial &nbsp;
                                <svg height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.53657 8.69699"><path d="
                                    M.18254,8.697a.18149.18149,0,0,1-.12886-.31034L4.09723,4.34126.05369.29954a.18149.18149,
                                    0,0,1,.2559-.2559L4.4838,4.21785a.18149.18149,0,0,1,0,.2559L.30958,8.648A.18149.18149,
                                    0,0,1,.18254,8.697Z
                                " fill="currentColor"></path></svg>
                        </button>
                    </a>
                </div>
            </section>
        </div>
    </div>

    <!-- <img src="images/files.svg" class="hero-svg pt-5"> -->

    <!-- <img src="images/online-site.svg" class="hero-svg pt-5"> -->

    <div class="col-12 col-md-10 offset-md-1 website-demo">
        <div class="website-demo-header text-center">
            Edit just a few variables here:
        </div>

        <div class="justify-content-center mx-auto embedded-code pl-3 pt-5 pb-5" style="width:510px;" id="editorjs">
            <code>
                $contactName = "John Doe";<br>
                $contactTitle = "Job Title";<br>
                $contactLocation = "Location, USA";<br>
                $contactPhone = "888.123.4567";<br>
                $contactEmail = "john.doe@gmail.com";<br>
                $contactWebsite = "johndoe.com";<br>
                $contactGithub = "https://github.com/johndoe";<br>
                $contactGithubHandle = "johndoe";<br>
                $contactLinkedin = "https://www.linkedin.com/in/johndoe/";<br>
                $contactTwitter = "https://twitter.com/johndoe?lang=en";<br>
                $contactCodepen = "https://codepen.io/johndoe/";
            </code>
        </div>

        <div class="website-demo-header text-center">
            To automatically populate your portfolio and resume:
            <p>Edit your online presence and your resume from a single document.</p>
        </div>

        <div class="row">
            <div class="col-xs-12 col-xl-6 pt-5">
                <div class="website-demo-inner">
                    <embed src="http://resio.meaghanbass.io" class="website-demo-inner-embed">
                </div>
            </div>
            <div class="col-xs-12 col-xl-6 pt-5">
                <div class="website-demo-inner">
                    <embed src="demo-resume.pdf" type="application/pdf" class="website-demo-inner-embed">
                </div>
            </div>
        </div>
    </div>

<?php include 'global/footer.php'; ?>