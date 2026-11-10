
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Justin | Personal Portfolio</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">

            <a class="navbar-brand" href="#home">Justin.</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- HOME SECTION -->
    <section id="home" class="hero">
        <div class="container text-center">

            <p class="hero-subtitle">WELCOME TO MY PORTFOLIO</p>

            <h1>Hello, I'm Justin!</h1>

            <h3>Future Software Developer</h3>

            <p class="hero-description">
                I am passionate about technology, programming,
                and building creative digital experiences.
            </p>

            <a href="#projects" class="btn btn-primary">
                Explore My Projects
            </a>

        </div>
    </section>


    <!-- ABOUT SECTION -->
    <section id="about" class="container section-padding">

        <h2 class="section-title text-center">About Me</h2>

        <div class="about-content mx-auto text-center">

            <p>
                Hello! My name is Justin. I am a student who enjoys
                learning about technology and software development.
                I am interested in web development, programming,
                and database management.
            </p>

            <p>
                I created this portfolio to present my skills,
                demonstrate my projects, and document my journey
                as I continue learning and growing in technology.
            </p>

        </div>
    </section>


    <!-- SKILLS SECTION -->
    <section id="skills" class="section-padding">

        <div class="container">

            <h2 class="section-title text-center">My Skills</h2>

            <p class="section-description text-center">
                Technologies and tools I am learning.
            </p>

            <div class="row g-3 justify-content-center">

                <div class="col-6 col-md-4">
                    <div class="skill-card">HTML</div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="skill-card">CSS</div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="skill-card">Bootstrap</div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="skill-card">JavaScript</div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="skill-card">Java</div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="skill-card">SQL</div>
                </div>

            </div>
        </div>
    </section>


    <!-- PROJECTS SECTION -->
    <section id="projects" class="container section-padding">

        <h2 class="section-title text-center">My Projects</h2>

        <p class="section-description text-center">
            A selection of projects from my learning journey.
        </p>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="project-card">

                    <div class="project-number">PROJECT 01</div>

                    <h4>Personal Portfolio Website</h4>

                    <p>
                        A personal website designed to introduce me,
                        showcase my skills, and display my work.
                    </p>

                    <div class="project-tags">
                        HTML · CSS · Bootstrap · JavaScript
                    </div>

                </div>
            </div>


            <div class="col-md-6">
                <div class="project-card">

                    <div class="project-number">PROJECT 02</div>

                    <h4>Student Database Project</h4>

                    <p>
                        A learning project focused on organizing
                        information and understanding database
                        management.
                    </p>

                    <div class="project-tags">
                        SQL · Database Concepts
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- CONTACT SECTION -->
    
    <section id="contact" class="section-padding">
    <div class="container">
        <h2 class="section-title text-center">Contact Me</h2>

        <div class="contact-card mx-auto" style="max-width: 600px;">
            <p class="text-center">
                Have a question? Send me a message!
            </p>

            <form action="save_message.php" method="POST">

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Your Name
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                        Your Email
                    </label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">
                        Your Message
                    </label>
                    <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        rows="5"
                        required
                    ></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Send Message
                </button>

            </form>
        </div>
    </div>
</section>

    

    


    <!-- FOOTER -->
    <footer class="text-center">

        <p>
            &copy; <span id="year"></span> Justin.
            All rights reserved.
        </p>

        <p class="footer-note">
            Designed and built with HTML, CSS, Bootstrap and JavaScript.
        </p>

    </footer>


    <!-- BOOTSTRAP JAVASCRIPT -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- CUSTOM JAVASCRIPT -->
    <script src="js/script.js"></script>

</body>
</html>
