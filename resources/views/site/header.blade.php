<header class="main-header">
    <!-- Top bar -->
    <div class="top-bar theme-bg">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="left-content">
                    <div class="language-switcher">
                        <div class="languages">
                            <span class="current" title="{{app()->getLocale()}}">{{app()->getLocale()}}</span>
                            <span class="hover">{{app()->getLocale()}}</span>
                            <ul>
                                <li><a href="lang/en">English</a></li>
                                <li><a href="lang/kiny">Kinyarwanda</a></li>
                                <li><a href="lang/fr">French</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="text"> <a href="#" class="donate-box-btn"></a></div>
                </div>
                <div class="right-content">
                    <ul class="contact-info">
                        <li><span class="flaticon-mail"></span><a href="info@caritasdikabgayi.org">info@caritasdikabgayi.org</a></li>
                        <li><span class="flaticon-phone"></span><a href="tel:+250 788 842 380">+250 788 842 380</a></li>
                    </ul>
                    <ul class="social-icon-one">
                        <li><a target="__blank" href="https://web.facebook.com/caritasdiocesaine.kabgayi"><span class="fa fa-facebook"></span></a></li>
                        <li><a target="__blank" href="https://twitter.com/KabgayiCaritas"><span class="fa fa-twitter"></span></a></li>
                        <li><a target="__blank" href="" onclick="return alert('skype username: CARITAS DIOCESAINE KABGAYI');"><span class="fa fa-skype"></span></a></li>
                        <li><a target="__blank" href="https://youtube.com/channel/UC2r10Jdk1biNpCLeQSiyxHQ"><span class="fa fa-youtube-play"></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="logo-column">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php?home=1"><img src="images/logoca.jpg" alt="" title=""></a></div>
                    </div>
                </div>
                <div class="right-column">
                    <div class="option-wrapper">
                        <div class="nav-outer">

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-xl navbar-dark">

                                <div class="collapse navbar-collapse">
                                    <?php if (isset($_GET['home'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown current"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak?dept=2">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }elseif (isset($_GET['dept'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown current"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }elseif (isset($_GET['team'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }elseif (isset($_GET['projects'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown current"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }elseif (isset($_GET['location'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown current"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }elseif (isset($_GET['Committee'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown current"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>

                                    <?php }elseif (isset($_GET['publication'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li class="current"><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }elseif (isset($_GET['news'])) {
                                    ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Publication</a></li>
                                        <li class="dropdown current"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php }else{ ?>
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php?home=1">Home</a>
                                            <ul>
                                                <li><a href="about.php?home=1">About Us</a></li>
                                                <li><a href="Structure.php?home=1">Our Structure</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="">Departments</a>
                                            <ul>
                                                <li><a href="department_news?dept=1">Health Department</a></li>

                                                <li><a href="department_news?dept=2">Development Department</a>
                                                    <ul>
                                                        <li><a href="cefopak.php?dept=1">CEFOPPAK</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="department_news?dept=3">Social & Charitable works Department</a>
                                                    <ul>
                                                        <li><a href="#">Emergencies</a></li>
                                                        <li><a href="#">Welcoming-listening and orientation services</a></li>
                                                        <li><a href="#">FODISICA</a></li>
                                                    </ul>

                                                </li>
                                                <li><a href="department_news?dept=4">Diocese’s commission for peace and justice</a></li>

                                                <li><a href="department_news?dept=5">Administration Department</a>
                                                    <ul>
                                                        <li><a href="#">Countabilite</a></li>
                                                        <li><a href="#">Administrative assistance+ central secretariat</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team?team=1">View Health Department’s team</a></li>
                                                <li><a href="team?team=2">View Development Department Team</a></li>
                                                <li><a href="team?team=3">View social & charitable works’ department team</a></li>
                                                <li><a href="team?team=4">View Diocese’s commission for peace and justice team</a></li>
                                                <li><a href="team?team=5">View administration department team</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="#">Procurement Aspects</a></li>
                                                <li><a href="#">Projects Cycle</a></li>
                                                <li><a href="#">Project PortFolio</a></li>
                                                <li><a href="#">projects’ operation documents</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Location</a>
                                            <ul>
                                                <li><a href="address.php?location=1">Addresses</a></li>
                                                <li><a href="contact.php?location=1">Contact</a></li>
                                            </ul>

                                        </li>
                                        <li class="dropdown"><a href="#">Committee</a>
                                            <ul>
                                                <li><a href="#">About Committee</a></li>
                                                <li><a href="#">Members</a></li>
                                                <li><a href="#">From Parishes</a></li>
                                                <li><a href="#">Decision & Recommendations</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="#">Publication</a></li>
                                        <li class="dropdown"><a href="#">Other</a>
                                            <ul>
                                                <li><a href="faq?news=1">FAQs</a></li>
                                                <li><a href="news?news=1">Other news</a></li>
                                                <li><a href="ubutumwa?news=1">Important Messages</a></li>
                                                <li><a href="what-we-do?news=1">What we do?</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <?php } ?>







                                </div>
                            </nav><!-- Main Menu End-->
                        </div>
                        <!--Search Box-->
                        <!-- <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="http://steelthemes.com/demo/html/Goodsoul_html/blog.php">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->



                        <div class="link-btn">
                            <a href="" style="border-radius:4px; padding:10px; background:red;color:white;" class="donate-box-btn">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <div class="sticky-header">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="logo-column">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php?home=1"><img src="images/logoca.jpg" alt="" title=""></a></div>
                    </div>
                </div>
                <div class="menu-column">
                    <div class="nav-outer">

                        <div class="nav-inner">

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-xl navbar-dark">

                                <div class="collapse navbar-collapse">
                                    <ul class="navigation">
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu style-one">
        <div class="menu-box">
            <div class="logo"><a href="index.php?home=1"><img src="images/logoca.jpg" alt=""></a></div>
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-xl navbar-dark">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="flaticon-menu"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navigation">

                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->
            <!--Search Box-->
            <div class="search-box-outer">
                <div class="dropdown">
                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                        <li class="panel-outer">
                            <div class="form-container">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
