
<!DOCTYPE HTML>

<html>
    <head>
        <title>GISA.LT: Garso ir apšvietimo aparatūra</title>
        <meta name="title" content="GISA.LT: Renginių įgarsinimas ir apšvietimas, įrangos nuoma"/>
        <meta name="description" content="Įgarsiname ir apšviečiame renginius,
              nuomojame įgarsinimo ir apšvietimo įrangą."/>
        <meta name="keywords" content="garso aparatura, apsvietimo aparatura, renginiu apsvietimas, renginiu igarsinimas, 
              garsas, sviesa, aparaturos nuoma, irangos komplektai, gisa, gisa.lt, Garso ir apšvietimo aparatūra"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="landing">
        <div id="page-wrapper">
            <header id="header" class="alt">
                <a alt="gisa.lt" href="index.php" title="gisa.lt"><img alt="logo" src="images/logo.png"></a>
                <nav  id="nav-main">
                    <ul> 
                        <li><a title="paslaugos" href="paslaugos.html">Sprendimai</a></li>
                        <li><a title="apsvietimo aparatura" href="apsvietimas.html">Apšvietimo aparatūra</a></li>
                        <li><a title="garso aparatura"href="garsas.html">Garso aparatūra</a></li>
                        <li><a title="sventes" href="atlikti-darbai.html">Atlikti darbai</a></li>
                        <li> <a title="partneriai" href="#">Musų draugai</a></li>
                        <li><a title="gisa.lt" href="index.php#three" id="cont">Kontaktai</a></li>
                    </ul>
                </nav>
                <div id="nav-trigger">
                    <span>Meniu</span>
                </div>
                <nav id="nav-mobile"></nav>
            </header>
            <section id="banner">
                <div class="inner">
                    <h1>Garso ir apšvietimo aparatūra</h1>
                    <ul class="actions">
                        <li><a title="gisa" href="#" class="button special" id="button">Apsilankykite</a></li>
                    </ul>
                </div>
                <section class="bannerText">
                    <div>
                        <p>Įgarsiname ir apšviečiame renginius, teikiame konsultacijas ir techninį jų aptarnavimą.<br><br>
                            Nuomojame garso ir šviesos įrangą.<br><br>
                            Geriausiomis sąlygomis dirbame su užsakovais, organizatoriais, kultūros centrais visoje Lietuvoje.<br> 
                            Nuolatiniams klientams taikome išimtines kainas.<br><br>
                            Naudojame profesionalius QSC stiprintuvus, RCF, Martin, Community  akustiką.<br> 
                            Apšvietimui siūlome ROBE ir Martin valdomus prožektorius, bei skanerius.<br><br>
                        </p>
                    </div>
                </section>
            </section>
            <section id="two" class="wrapper alt style2">
                <section class="spotlight">
                    <div class="image" ><img alt="rekomenduojami-komplektai" src="images/komplektai.jpeg"/></div>
                    <div class="content">
                        <a title="paslaugos"href="paslaugos.html"><h2>Siūlomi sprendimai</h2></a>
                        <p></p>
                    </div>
                </section>
                <section class="spotlight">
                    <div class="image" ><img alt="apsvietimas" src="images/show.jpg"  /></div><div class="content">
                        <a title="apsvietimo aparatura" href="apsvietimas.html"><h2>Apšvietimo aparatūra</h2></a>
                        <p></p>
                    </div>
                </section>
                <section class="spotlight">
                    <div class="image"><img alt="igarsinimas" src="images/audio.jpg" /></div>
                    <div class="content">
                        <a title="igarsinimo aparatura" href="garsas.html"><h2>Garso aparatūra</h2></a>
                        <p></p>
                    </div>
                </section>
                <section class="spotlight">
                    <div class="image"><img alt="veiveiriu-miesto-svente" src="images/Veiveriu-miesto-svente/Veiveriu-miesto-svente.png" /></div>
                    <div class="content">
                        <a title="sventes" href="atlikti-darbai.html"><h2>Atlikti darbai</h2></a>
                        <p></p>
                    </div>
                </section>
            </section>
            <section id="three" class="wrapper style3 special">
                <div class="inner">
                    <header class="major">
                        <h3>Su mumis galite susisiekti: <br>
                            garsas@gisa.lt<br> 
                            sviesa@gisa.lt<br></h3>
                    </header>
                    <h4>Arba užpildykite šią formą ir mes su Jumis susisieksime</h4><br><br>
                    <div id="form-messages"></div>
                    <?php
                         $number_1 = rand(1, 9);
                         $number_2 = rand(1, 9);
                         $answer = substr(md5($number_1 + $number_2), 5, 10);
                    ?>
                    <form id="ajax-contact" method="post" action="mailer.php">
                        <div class="field">
                            <label for="name">Vardas:</label>
                            <input type="text" id="name" name="name" required>
                            
                        </div>

                        <div class="field">
                            <label for="email">El. paštas:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="field">
                            <label for="message">Žinutė:</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <div class="field">
                            <label for="answer">Įrašykite atsakymą</label>
                            <span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span>
                            <input type="text" id="user_answer" name="user_answer" required></input>
                            <input type="hidden" name="answer" value="<?php echo $answer; ?>" />
                        </div>

                        <div class="field">
                            <button type="submit" id="btn" onmouseover="rem()">Siųsti</button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="cta" class="wrapper style4" style="background-image: none;">
                <div class="inner">
                    <header>
                        <h2 style="text-align: center;">Ačiū, kad apsilankėte</h2>
                    </header>
                </div>
            </section>
            <footer id="footer">
                <ul class="copyright">
                    <li><i class="fa fa-copyright" aria-hidden="true"></i><a title="gisa.lt" href="http://gisa.lt">GISA.LT</a></li>
                </ul>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
                                $(document).ready(function () {
                                    $("#nav-mobile").html($("#nav-main").html());
                                    $("#nav-trigger span").click(function () {
                                        if ($("nav#nav-mobile ul").hasClass("expanded")) {
                                            $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                                            $(this).removeClass("open");
                                        } else {
                                            $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                                            $(this).addClass("open");
                                        }
                                    });
                                });
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-101628721-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>