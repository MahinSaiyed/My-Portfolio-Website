<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Saiyed Portfolio</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="quary.css">

</head>

<body>

    <nav>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="nav-left" id="navbar-links">
            <a href="animatedText">Home</a>
            <a href="#">About</a>
            <a href="#">Projects</a>
            <a href="contact">Contact</a>
        </div>

        <div class="nav-right">
            _Mr__.Saiyed
        </div>
    </nav>
    <!-- navbar's code finish -->

    <div class="header">
        <div class="header-left">
            <div class="animated-text" id="animatedText">
                <div class="animated-text">
                    <span>I am WordPress Devloper</span>
                    <span>I am Freelanser</span>
                </div>

            </div>
            <p class="short-desc">
                Self-taught web developer skilled in PHP, MySQL, and WordPress. <br>
                Currently pursuing BCA with a strong aim to become a top WordPress expert.
            </p>

            <button class="header-button">Hire Me</button>
        </div>

        <div class="header-right">
            <img src="photos/profile-image.png" alt="Mr. Saiyed">
        </div>
    </div>

    <!-- "Stats Section" -->

    <section class="stats-section">
        <div class="stat-box">
            <h2>132+</h2>
            <p>Successful Projects</p>
        </div>
        <div class="stat-box">
            <h2>340K</h2>
            <p>Happy Clients</p>
        </div>
        <div class="stat-box">
            <h2>190+</h2>
            <p>Team Members</p>
        </div>
        <div class="stat-box">
            <h2>50+</h2>
            <p>Winning Awards</p>
        </div>
    </section>


    <!-- about section  -->
    <div class="about-section">
        <section class="contact-form">
            <form id="whatsapp-form" ;method="POST">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                <textarea name="message" id="massage" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit" name="submit">Send Message</button>
            </form>
        </section>

        <section class="contact-icons" id="contact">
            <a href="mailto:mahinsaiyed41@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://github.com/MahinSaiyed" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.fiverr.com/sellers/mahinsaiyed731/edit" target="_blank"><i class="fas fa-briefcase"></i></a>
            <a href="https://www.instagram.com/_mr__.saiyed?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
        </section>
    </div>

    <script src="testing port/main.js"></script>
</body>

</html>