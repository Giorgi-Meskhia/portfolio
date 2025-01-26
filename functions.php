<!-- header function -->
<?php
function getHeader() {
    echo '
    <header>
        <div class="header">
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="aboutme.php">About Me</a>
                <a href="projects.php">Projects</a>
                <a href="#" id="contact-link">Contact me</a>
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