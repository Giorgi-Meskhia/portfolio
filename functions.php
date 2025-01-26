<!-- header function -->
<?php
function getHeader() {
    echo '
    <header>
        <div class="header">
            <div class="nav">
            
                <div class="burger-menu" id="burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            
                <nav id="nav-links">
                    <a href="index.php">Home</a>
                    <a href="aboutme.php">About Me</a>
                    <a href="projects.php">Projects</a>
                    <a href="#" id="contact-link">Contact me</a>
                </nav>
                   
            </div>
        </div>
    </header>
    
    <!-- Contact me -->
    <div id="contact-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Contact Information</h2>
            <p>Gmail: <a href="mailto:giomesxo08@gmail.com">giomesxo08@gmail.com</a></p>
            <p>Phone: <a href="tel:+995 544 44 59 90">+995 544 44 59 90</a></p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/giorgi-meskhia-06525b315/">Giorgi Meskhia</a></p>
        </div>
    </div>

    <script src="script.js"></script>
    ';
}
?>

<!-- footer function -->
<?php
function getFooter() {
    echo '
    <footer>
        <div class="footer">
            <div class="footer-icon">
                <a href="https://www.linkedin.com/in/giorgi-meskhia-06525b315/">
                    <img src="fotoebi/Linkedin.png" alt="LinkedIn Icon">
                </a>
                <a href="https://www.facebook.com/search/top?q=mark%20zuckerberg"> 
                    <img src="fotoebi/fb.png" alt="Facebook Icon">
                </a>
                <a href="https://www.instagram.com/zuck/">
                    <img src="fotoebi/insta.png" alt="Instagram Icon">
                </a>
            </div>
            <div class="text">
                <p>
                    please hire me
                </p>
            </div>
        </div>
    </footer>';
}
?>

<!-- main page function -->
<?php
function getPortfolioPage() {
    echo '
    <main>
        <div class="main">
            <div class="main-text">
                <p>
                    Hi, I am George,
                    Future Web Developer
                </p>
                <h1>
                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                </h1>
                <div class="button">
                    <a href="https://drive.google.com/uc?export=download&id=1ChpjYV_8aKshgn4UF_GYCMHmMUvyIWvP" download="George_Meskhia_Portfolio.pdf">Download Resume</a>
                </div>
            </div>
            <img src="fotoebi/img.1.png" alt="">
        </div>
    </main>
    <div class="work">
        <div class="mywork">
            <div class="gitwork">
                <img src="fotoebi/git.png" alt="">
                <div class="worktext">
                    <a href="https://github.com/Monkas111/Lux-ventus--">My latest group work on Github</a>
                    <h1>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                    </h1>
                </div>
            </div>
            <div class="gitwork">
                <img src="fotoebi/git.png" alt="">
                <div class="worktext">
                    <a href="https://giorgi-meskhia.github.io/Skilwill-Blog/">My latest work on Github</a>
                    <h1>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                    </h1>
                </div>
            </div>
        </div>
    </div>
    ';
}
?>


<!-- projects function -->

<?php
function getProjects($projects) {
    echo '<div class="projects">
        <div class="work-projects">
            <p>My projects</p>
        </div>
    </div>
    <div class="work">
        <div class="myprojects">';
    
    foreach ($projects as $project) {
        echo '<div class="gitwork">
                <img src="' . htmlspecialchars($project['image']) . '" alt="">
                <div class="worktext">
                    <a href="' . htmlspecialchars($project['link']) . '">' . htmlspecialchars($project['title']) . '</a>
                    <h1>' . htmlspecialchars($project['description']) . '</h1>
                </div>
            </div>';
    }
    
    echo '</div>
    </div>';
}
?>

<!-- about me function -->
<?php
function getAboutMe() {
    return '
    <section id="about-me" class="about-me">
        <div class="container">
            <h1>About Me</h1>
            <p>
                Hello! My name is <strong>George Meskhia</strong>, and I’m a passionate web developer with expertise in 
                <a href="https://en.wikipedia.org/wiki/HTML" target="_blank">HTML</a>, 
                <a href="https://en.wikipedia.org/wiki/CSS" target="_blank">CSS</a>, 
                <a href="https://en.wikipedia.org/wiki/PHP" target="_blank">PHP</a>, and 
                <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>. 
                I’m committed to crafting user-friendly, modern, and functional web applications.
            </p>
            <p>
                I enjoy combining clean design with efficient code to deliver seamless user experiences. Currently, I’m expanding my skillset to include new technologies and frameworks to stay ahead in this fast-paced industry.
            </p>
            <p>
                When I’m not coding, you’ll often find me exploring the latest tech trends, learning new tools, or collaborating on exciting projects. I’m always eager to connect with like-minded individuals and take on challenging opportunities.
            </p>
        </div>
    </section>';
}
?>