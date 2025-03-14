<style>
    header {
        margin-top: 1%;
        padding: 1rem;
        background-color: #333333;
        position: relative;
    }

    h2 {
        margin-bottom: 1rem;
    }

    .menu-icon {
        font-size: 30px;
        cursor: pointer;
        position: absolute;
        top: 1rem;
        right: 1rem;
        transition: color 0.3s;
    }

    .menu-icon:hover {
        color: #007bff;
    }

    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
    }

    .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
    }

    .overlay ul {
        list-style-type: none;
    }

    .overlay a {
        padding: 0.8rem;
        text-decoration: none;
        font-size: 1.5rem;
        color: #f1f1f1;
        display: block;
        transition: 0.3s;
    }

    .overlay a:hover, .overlay a:focus {
        color: #007bff;
    }

    .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
    }

    .announcement {
        text-align: center;
        margin-top: 0.5%;
    }

    .timer {
        font-size: 1.2rem;
        font-weight: bold;
        background-color: #f8f9fa;
        color: darkred;
        padding: 0.5rem;
        border-radius: 4px;
        display: inline-block;
        margin-right: 50px;
    }

    @media screen and (max-height: 450px) {
        .overlay a {
            font-size: 20px;
        }
        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
    }
</style>

<header>
    <h2>Jayden</h2>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <ul>
                <li><a href="home.php" onclick="closeNav()" id="home-link">Home</a></li>
                <li><a href="about_me.php" onclick="closeNav()" id="about-link">About</a></li>
                <li><a href="projects.php" onclick="closeNav()" id="projects-link">Future Projects</a></li>
                <li><a href="interview.php" onclick="closeNav()" id="interview-link">Interview</a></li>
                <li><a href="contact.php" onclick="closeNav()" id="contact-link">Contact</a></li>
            </ul>
        </div>
    </div>
    <span class="menu-icon" onclick="openNav()" aria-label="Open menu">&#9776;</span>

    <div class="announcement">
        <p id="timer" class="timer"></p>
    </div>
</header>


<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }

    document.addEventListener('DOMContentLoaded', function() {
        const currentPage = window.location.pathname.split('/').pop();

        if (currentPage === 'home.php' || currentPage === '' || currentPage === 'index.php') {
            document.getElementById('home-link').classList.add('active');
        } else if (currentPage === 'about_me.php') {
            document.getElementById('about-link').classList.add('active');
        } else if (currentPage === 'future_projects.php') {
            document.getElementById('projects-link').classList.add('active');
        } else if (currentPage === 'interview.php') {
            document.getElementById('interview-link').classList.add('active');
        } else if (currentPage === 'contact.php') {
            document.getElementById('contact-link').classList.add('active');
        }

        let countDownDate = new Date("Jan 1, 2026 00:01:00").getTime();
        let x = setInterval(function() {
            let now = new Date().getTime();
            let distance = countDownDate - now;

            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("timer").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "gelukkig nieuwjaar!";
            }
        }, 1000);

        const modeToggle = document.getElementById('mode-toggle');
        if (modeToggle) {
            modeToggle.addEventListener('click', function() {
                document.body.classList.toggle('light-mode');
                document.body.classList.toggle('dark-mode');

                if (document.body.classList.contains('light-mode')) {
                    localStorage.setItem('mode', 'light');
                    modeToggle.textContent = 'Switch to Dark Mode';
                } else {
                    localStorage.setItem('mode', 'dark');
                    modeToggle.textContent = 'Switch to Light Mode';
                }
            });

            const savedMode = localStorage.getItem('mode');
            if (savedMode === 'light') {
                document.body.classList.add('light-mode');
                document.body.classList.remove('dark-mode');
                modeToggle.textContent = 'Switch to Dark Mode';
            } else {
                document.body.classList.add('dark-mode');
                document.body.classList.remove('light-mode');
                modeToggle.textContent = 'Switch to Light Mode';
            }
        }

        const cookiePopup = document.querySelector('.cookie-popup');
        if (cookiePopup) {
            if (!localStorage.getItem('cookiesAccepted')) {
                cookiePopup.style.display = 'flex';
            }

            const acceptBtn = document.querySelector('.cookie-btn[data-action="accept"]');
            if (acceptBtn) {
                acceptBtn.addEventListener('click', function() {
                    localStorage.setItem('cookiesAccepted', 'true');
                    cookiePopup.style.display = 'none';
                });
            }

            const declineBtn = document.querySelector('.cookie-btn[data-action="decline"]');
            if (declineBtn) {
                declineBtn.addEventListener('click', function() {
                    cookiePopup.style.display = 'none';
                });
            }
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.getElementById('myNav').style.width === '100%') {
            closeNav();
        }
    });
</script>