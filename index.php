<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Hugo de Heus</h1>
            <nav>
                <button id="hamburger"></button>
                <ul id="menu" class="verborgen">
                    <li><a href="#geleerd"><b>Wat heb ik geleerd?</b></a></li>
                    <li><a href="#opdracht">Opdrachten</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#footer">Footer</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <section>
            <a id="geleerd"></a>
            <figure>
                <img src="img/pfp.jpg" alt="">
                <figcaption><b>Hugo de Heus</b></figcaption>
            </figure>
            <h3>
                WAT HEB IK GELEERD DEZE PERIODE?
            </h3>

            <p>
                Bij WEB heb ik nieuwe dingen geleerd zoals een hamburger menu maken.<br>
                Nu kan ik een hamburger menu in de website zetten zodat je alleen een knop hoeft te
                klikken en dan pas zie je de nav bar.
                Wat ik ook heb geleerd is een design namaken. De programma die ik heb gebruikt voor de metingen van de
                elementen is Photoshop.
                <br><br>
                Met CMS heb ik geleerd om een thema en een plugin te maken.<br>
                Een thema maken was eerst een beetje moeilijk voor mij, maar later na wat uitleg wist ik hoe het moest.
                Het zelfde verhaal met de plugin. Voor de plugin heb ik 2 dingen geleerd. Hoe je een widget moet maken
                en hoe je een plugin schrijft met PHP.
            </p>
            <h3>
                WAT HEB IK GELEERD DIT SCHOOLJAAR?
            </h3>
            <p>
                Van WEB heb ik van veel dingen geleerd dit jaar. <br>
                Ik ben van templates maken naar een full webshop gegaan. Ook heb ik veel trucjes geleerd dit jaar zoals
                :hover en :first-of-type. Dit jaar ging over de basic CSS dingen. Zoals width en height. Maar het ging
                ook over responsiveness. Ik heb vooral geleerd dat ik veel beter met procenten kan werken dan met pixels
                als ik iets responsive wil maken.
                <br><br>
                Bij CMS heb ik geleerd hoe makkelijk en snel je een website kan maken zonder te coderen. Maar later bij
                CMS heb ik geleerd hoe je thema moet maken en hoe je een plugin kan maken.

            </p>
            <div class="clear"></div>
        </section>
        <section>
            <a id="opdracht"></a>
            <div class="red"></div>
            <h2>
                OPDRACHTEN VAN PERIODE 4
            </h2>

            <a href="task/opdracht1/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 1</h3>
                        <p>Hamburger menu</p>
                    </figcaption>

                </figure>
            </a>

            <a href="task/opdracht2/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 2</h3>
                        <p>Responsive VS Adaptive</p>
                    </figcaption>

                </figure>
            </a>

            <a href="task/opdracht3/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 3</h3>
                        <p>Responsive Kolommen</p>
                    </figcaption>

                </figure>
            </a>

            <a href="task/opdracht4/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 4</h3>
                        <p>PSD naar HTML/CSS</p>
                    </figcaption>

                </figure>
            </a>
            <div class="clear"></div>

        </section>
        <section>
            <a id="contact"></a>
            <div class="red"></div>
            <h2>
                CONTACT
            </h2>
            <form  action="contact.php" method="POST">
                <input type="text" placeholder="Naam" name="name" required>
                <input type="email" placeholder="E-mailadres" name="email" required>
                <input type="text" placeholder="Onderwerp" name="subject" required>
                <br>
                <textarea placeholder="Bericht" name="message" required></textarea>
                <input type="submit" name="submit" value="Verstuur bericht naar jos@glu.nl">
            </form>
        </section>
        <footer>
            <a id="footer"></a>
            <b>&copy; 13-06-2021 - Hugo de Heus</b>
        </footer>
    </div>
    <script src="code.js"></script>
</body>

</html>