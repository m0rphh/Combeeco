<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jquery.multilevelpushmenu.css">
  <link rel="stylesheet" href="css/bootstrap-slider.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <title>Combeeco</title>
</head>

<body>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script> -->





  <!-- <div id="pushobj"> -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
  <img src="img/logo-white.svg" alt="">
<h5 class="modal-title" id="exampleModalLabel">Wie können wir Ihnen helfen? Treten Sie mit uns in Kontakt
</h5>
        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="img/close.png" alt="">
        </a>
      </div>
      <div class="modal-body">
        <form action="">
          <input type="text" placeholder="Vorname*">
          <input type="text" placeholder="Nachname*">
          <div style="width: 100%; height: 1px; clear: both;"></div>
          <input type="text" placeholder="Email*">
          <input type="text" placeholder="Telefonnumer">
          <label for="textarea">Nachricht</label>
          <textarea name="" id="textarea" cols="5" rows="5"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <a type="button" class="button" data-dismiss="modal">SENDEN</a>
        <a type="button" class="button close-modal-button" data-dismiss="modal">CLOSE</a>

      </div>
    </div>
  </div>
</div>
  <div class="hero">
    <!-- TOP MENU -->
    <?php include("inc/top-menu.php"); ?>
    <!-- TOP MENU -->
    <div class="slider">
      <div class="slide slide1">
        <div class="holder">
          <h1>Wir schwärmen für
            <span> Immobilien</span>
          </h1>
          <div class="frames frame-1">
            <img src="img/atraktivezinsen.svg" alt="">
            <p>Attraktive Zinsen</p>
          </div>
          <div class="frames frame-2">
            <img src="img/kleineinvest.svg" alt="">
            <p>Attraktive Zinsen</p>
          </div>
          <div class="frames frame-3">
            <img src="img/kurzeleifzeit.svg" alt="">
            <p>Attraktive Zinsen</p>
          </div>
          <a href="#" class="hero-cta"  data-toggle="modal" data-target="#exampleModal">Jetzt informieren</a>
        </div>
      </div>
      <div class="slide slide2">
        <div class="holder">
          <h1>Wir schwärmen für
            <span> Immobilien</span>
          </h1>
          <!-- <div class="frames frame-1">
            <img src="img/atraktivezinsen.svg" alt="">
            <p>Attraktive Zinsen</p>
          </div>
          <div class="frames frame-2">
            <img src="img/kleineinvest.svg" alt="">
            <p>Attraktive Zinsen</p>
          </div>
          <div class="frames frame-3">
            <img src="img/kurzeleifzeit.svg" alt="">
            <p>Attraktive Zinsen</p>
          </div> -->
          <a href="#" class="hero-cta" data-toggle="modal" data-target="#exampleModal">Jetzt informieren</a>
        </div>
      </div>
    </div>

  </div>
  <!-- HERO END -->

  <!-- PART 2 -->
  <div class="part-2">
    <div class="container">
      <div id="triangle-up">
        <img class="logo" src="img/comeeco_logo.svg" alt="">
      </div>
      <h2 class="section-title">Willkommen bei combeeco</h2>
      <div class="flex-holder">
        <div class="icon-holder">
          <div class="items first">
            <div class="text-holder">
              <h3>Transparent</h3>
              <p>Einfache klare Strukturen. Keine versteckten Gebühren. Transparente Darstellung und mit wenigen Klicks zum
                Ziel.
              </p>
            </div>
          </div>
          <div class="items second">
            <div class="text-holder">
              <h3>Geprüft</h3>
              <p>Mit Sicherheit in erfolgs-versprechende Projekte investieren. Alle Investments werden sorgfältig ausgewählt
                und geprüft.</p>
            </div>
          </div>
          <div class="items third">
            <div class="text-holder">
              <h3> Renditestark</h3>
              <p>Attraktive und renditestarke Verzinsung bei kurzer Laufzeit und das schon mit kleinen Investments ab 500 Euro.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- <a href="" class="cta-gray no-margin-bottom">Lesen Sie mehr</a> -->
    </div>
    <!-- container -->
    <div id="triangle-down"></div>
  </div>
  <div class="part-3">
    <div id="triangle-down"></div>
    <div class="container">
      <h2 class="section-title no-margin-bottom">Jetzt investieren!</h2>
      <p class="section-subtitle">Aktuelle Projekte</p>

      <div class="project-slider">
        <!-- <div class="slide"> -->
          <div class="single-project project-1">
            <div class="header">
              <div class="left">
                <h3>Neubau
                  <span>Selbstbestimmtes Wohnen im Alter </span>
                </h3>
                <p>
                  <i class="fa fa-map-marker"></i> Berlin-Lichtenberg</p>
              </div>

            </div>
            <div class="body">
              <div class="ribbon">
                <img class="" src="img/projects/ribbon-blue.png" />
                <p class="ribbon-text">Bereits
                  <br> zurückgezahlt
                </p>
              </div>
              <div class="project-info">
                <div class="left-side">
                  <p>„Selbstbestimmtes
                    <br> Wohnen im Alter“
                  </p>
                </div>
                <div class="right-side">
                  <p>Investiert:
                    <span>
                      215.000 €
                    </span>
                  </p>
                </div>
                <hr class="line">
              </div>
            </div>
          </div>
          <!-- </div>
          <div class="slide"> -->
          <div class="single-project project-2">
            <div class="header">
              <div class="left">
                <h3>umbao
                  <span>Erweiterung Selbstbestimmtes Wohnen im Alter </span>
                </h3>
                <p>
                  <i class="fa fa-map-marker"></i> Berlin-Marzahn</p>
              </div>

            </div>
            <div class="body">
              <div class="ribbon">
                <p class="ribbon-text">Bereits
                  <br> zurückgezahlt
                </p>
                <img class="" src="img/projects/ribbon-blue.png" />
              </div>
              <div class="project-info">
                <div class="left-side">
                  <p>Erweiterung „Selbstbestimmtes
                    <br> Wohnen im Alter“
                  </p>
                </div>
                <div class="right-side">
                  <p>Investiert:
                    <span>
                      305.000 €
                    </span>
                  </p>
                </div>
                <hr class="line">
              </div>
            </div>
          </div>
        <!-- </div>
        <div class="slide"> -->
          <div class="single-project project-3">
            <div class="header">
              <div class="left">
                <h3>Revitalisierung
                  <span>Bürohaus im Chemnitz-Park </span>
                </h3>
                <p>
                  <i class="fa fa-map-marker"></i> Chemnitz-Röhrsdorf</p>
              </div>

            </div>
            <div class="body">
               <div class="ribbon">
                <p class="ribbon-text">Bereits
                  <br> zurückgezahlt
                </p>
                <img class="" src="img/projects/ribbon-blue.png" />
              </div>
              <div class="project-info">
                <div class="left-side">
                  <p>Bürohaus im Chemnitz-Park
                  </p>
                </div>
                <div class="right-side">
                  <p>Investiert:
                    <span>
                      640.000 €
                    </span>
                  </p>
                </div>
                <hr class="line">
              </div>
            </div>
          </div>
          <!-- </div>
          <div class="slide"> -->
          <div class="single-project project-4">
            <div class="header">
              <div class="left">
                <h3>Projektentwicklung
                  <span>Villa Grünwald </span>
                </h3>
                <p>
                  <i class="fa fa-map-marker"></i> Magdeburg Neustadt</p>
              </div>

            </div>
            <div class="body">
               <div class="ribbon">
                <p class="ribbon-text">Bereits
                  <br> zurückgezahlt
                </p>
                <img class="" src="img/projects/ribbon-blue.png" />
              </div>
              <div class="project-info">
                <div class="left-side">
                  <p>Villa Grünwald
                  </p>
                </div>
                <div class="right-side">
                  <p>Investiert:
                    <span>
                      957.000 €
                    </span>
                  </p>
                </div>
                <hr class="line">
              </div>
            </div>
          </div>
        <!-- </div>
        <div class="slide"> -->
          <div class="single-project project-5">
            <div class="header">
              <div class="left">
                <h3>Projektentwicklung
                  <span>Hotel und Wohnbauareal für über 1.000 Wohnungen </span>
                </h3>
                <p>
                  <i class="fa fa-map-marker"></i> Berlin-Grünau</p>
              </div>

            </div>
            <div class="body">
               <div class="ribbon">
                <p class="ribbon-text">Bereits
                  <br> zurückgezahlt
                </p>
                <img class="" src="img/projects/ribbon-blue.png" />
              </div>
              <div class="project-info">
                <div class="left-side">
                  <p>Hotel und Wohnbauareal<br>für über 1.000 Wohnungen
                  </p>
                </div>
                <div class="right-side">
                  <p>Investiert:
                    <span>
                      1.250.000 €
                    </span>
                  </p>
                </div>
                <hr class="line">
              </div>
            </div>
          </div>
          <!-- </div>
          <div class="slide"> -->
          <div class="single-project project-6">
            <div class="header">
              <div class="left">
                <h3>Projektentwicklung
                  <span>Einfamilienhäuser Köpenicker Straße
 </span>
                </h3>
                <p>
                  <i class="fa fa-map-marker"></i> Berlin-Kaulsdorf</p>
              </div>

            </div>
            <div class="body">
               <div class="ribbon">
                <p class="ribbon-text">Bereits
                  <br> zurückgezahlt
                </p>
                <img class="" src="img/projects/ribbon-blue.png" />
              </div>
              <div class="project-info">
                <div class="left-side">
                  <p>Einfamilienhäuser<br>
Köpenicker Straße
                  </p>
                </div>
                <div class="right-side">
                  <p>Investiert:
                    <span>
                      650.000 €
                    </span>
                  </p>
                </div>
                <hr class="line">
              </div>
            </div>
          </div>
        </div>



      </div>
      <!-- project-slider -->
    </div>
    <!-- container -->
  </div>
  <!-- part3 -->
  <!-- part4 -->
  <?php include("inc/newsletter.php"); ?>

  <div class="part-5 ">
    <div id="bottomLine"></div>
    <div class="container">
      <h2 class="section-title">Warum combeeco?</h2>
      <div>
        <img class="combeeco-logo" src="img/comeeco_logo.svg" alt="">
      </div>
      <div class="holder">
        <div class="item">
          <h4>Beste Expertise</h4>
          <p>Erfolgreiche Kombination aus über 20-jähriger Erfahrung als Immobilieninvestor, Projektentwickler, sowie im Vertrieb
            von Immobilien.
          </p>
          <div class="shape">
            <img src="img/besteexpertise_2.svg" alt="">
          </div>
        </div>
        <div class="item">
          <h4>Schwarmidee</h4>
          <p>combeeco ermöglicht es Anlegern schon ab 500 EUR an Projektfinanzierungen teilzuhaben und ein diversifiziertes
            Portfolio mit attraktiver Rendite aufzubauen.</p>
          <div class="shape">
            <img src="img/besteexpertise.svg" alt="">
          </div>
        </div>
        <div class="item">
          <h4>Solide Co-Investment´s</h4>
          <p>Wir bieten nur Projekte auf combeeco an, von denen wir so überzeugt sind, dass wir selbst investieren.
          </p>
          <div class="shape">
            <img src="img/besteexpertise_2.svg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div id="triangle-down"></div>
  </div>
  <div class="part-601">
    <div class="container">
      <h2 class="section-title">Investieren in nur 3 Schritten</h2>
      <div class="holder">
        <div class="shape">
          <img src="img/konto.svg" alt="">
          <div class="hidden">
            <h4>Online investieren</h4>
            <p>Sie wählen den passenden Anlagebetrag und investieren: Effizient, einfach, direkt.</p>
          </div>
        </div>
        <div class="line"></div>
        <div class="shape">
          <img src="img/portfolio.svg" alt="">
          <div class="hidden">
            <h4>
              Portfolio einsehen</h4>
            <p>Je nach Rendite-Risiko-Profil können Sie das für Sie passende Investment auswählen.</p>
          </div>
        </div>
        <div class="line"></div>
        <div class="shape">
          <img src="img/investieren.svg" alt="">
          <div class="hidden">
            <h4>Online investieren</h4>
            <p>Sie wählen den passenden Anlagebetrag und investieren: Effizient, einfach, direkt.</p>
          </div>
        </div>
      </div>
      <div class="holder-2">
        <div>
          <h4>
            Konto anlegen</h4>
          <p>Mit wenigen Klicks schaffen Sie die Basis, um auf combeeco investieren zu können.</p>
        </div>
        <div>
          <h4>
            Portfolio einsehen</h4>
          <p>Je nach Rendite-Risiko-Profil können Sie das für Sie passende Investment auswählen.</p>
        </div>
        <div>
          <h4>Online investieren</h4>
          <p>Sie wählen den passenden Anlagebetrag und investieren: Effizient, einfach, direkt.</p>
        </div>
      </div>
      <a href="funktionert.php" class="cta-gray">So funktioniert’s</a>
    </div>
    <div id="triangle-down"></div>
  </div>

  <div class="part-6">
    <div id="bottomLine2"></div>
    <div class="container">
      <h2 class="dark-section-title">Crowdfunding für Immobilien auf einen Blick</h2>
      <h3>Was ist Crowdinvesting?</h3>
      <p>Crowdinvesting ist eine Anlageform, bei der eine Vielzahl von Anlegern ein Projekt (Unternehmensgründung, Immobilien-
        oder Energieprojekt) mitfinanzieren. Anders als beim Crowdfunding, welches die Finanzierung einer Idee oder eines
        gemeinnützigen Projektes verfolgt, steht beim Crowdinvesting der Renditegedanke im Vordergrund. Dabei bietet es oftmals
        Investmentmöglichkeiten in Anlageformen (bspw. Finanzierung von Risikokapital für Unternehmen oder die Mitfinanzierung
        von Bauprojekten), die einzelnen Privatanlegern in der Regel nicht zugänglich wären. Online-Plattformen wie zinsbaustein.de
        agieren hierbei als Vermittler, wählen Projekte aus und ermöglichen es Anlegern, sich selbst zu informieren und zu
        vergleichen.
      </p>
      <h3>Warum Crowdfunding für Kleinanleger geeignet ist?</h3>
      <p>Bisher konnten Kleinanleger mit kleinen Summen nur in offene Immobilienfonds oder Immobilienaktien investieren. Bei
        den Fonds sind die Gebühren sehr hoch und die Performance war in vielen Fällen nicht zufriedenstellend. Viele Investoren
        haben einiges an Geld verloren.</p>
      <p>Immobilienaktien unterliegen starken Schwankungen an der Börse, was trotz positiver Entwicklung am Immobilienmarkt
        zu negativen Renditen führen kann. Ein weiterer Nachteil: Sowohl bei Fonds als auch bei Aktien können die Kleinanleger
        nicht bestimmen, in welche Objekte ihr Geld fließt.</p>
      <p>Anders beim Crowdfunding: Hier entscheidet der Investor selbst, in welche Immobilien er investieren möchte. Dabei ist
        er Darlehensgeber mit einem festen Zinssatz zwischen 3% und 7% - je nach Risiko des einzelnen Projekts. Außerdem
        bekommt er zu jedem Zeitpunkt in Echtzeit die neuesten Informationen zum Projekt. Bisher wurden Anleger auch bei
        indirekten Immobilienanlagen immer mit Gebühren belastet. Bei den offenen Immobilienfonds gibt es einen Ausgabeaufschlag
        und eine Managementfee, beim Kauf von Immobilienaktien gibt es Ordergebühren und bei geschlossenen Immobilienfonds
        fallen oft sehr hohe Weichkosten an, um den teuren Vertrieb zu finanzieren.</p>
    </div>
    <div id="triangle-down"></div>
  </div>
  <div class="part-7">
    <div class="container">
      <h2 class="section-title">Jetzt Registrieren</h2>
      <h3 class="section-subtitle">Kostenlos und unverbindlich. Investieren Sie in Ihr Projekt.</h3>
      <form action="">
        <input type="text" placeholder="E-mail Adresse">
        <button type="submit" class="cta-gray">regitrieren</button>
      </form>
      <div class="link-holder">
        <a href="#">Bereits registriert?</a>
        <a href="#">Hier anmelden</a>
      </div>
      <p>RISIKOHINWEIS: Wir weisen Sie ausdrücklich darauf hin, dass die Zeichnung von Vermögensanlagen und Wertpapieren ein
        hohes Verlustrisiko für Ihr eingesetztes Kapital bis zum Totalverlust birgt. Setzen Sie daher nur solche finanzielle
        Mittel ein, deren teilweisen oder vollständigen Verlust Sie sich leisten können. Die über iFunded.de zur Zeichnung
        angebotenen Vermögensanlagen und Wertpapiere sind nicht für alle Investoren geeignet. Stellen Sie daher unbedingt
        sicher, dass Sie die mit der Zeichnung von Vermögensanlagen und Wertpapieren verbundenen Risiken vollständig verstanden
        haben und lassen Sie sich bei Bedarf von einer unabhängigen und sachkundigen Person oder Institution beraten, bevor
        Sie zeichnen. Weitere Informationen zu den Risiken einer Vermögensanlage bzw. eines Wertpapiers entnehmen Sie bitte
        dem jeweiligen Vermögensanlagen-Informationsblatt bzw. Wertpapierprospekt.
      </p>
    </div>
    <div id="triangle-down"></div>
  </div>

  <div class="funkt-part-6">
    <div id="triangle-down"></div>
    <div class="container">
      <p>
        RISIKOHINWEIS: Wir weisen Sie ausdrücklich darauf hin, dass die Zeichnung von Vermögensanlagen und Wertpapieren ein hohes
        Verlustrisiko für Ihr eingesetztes Kapital bis zum Totalverlust birgt. Setzen Sie daher nur solche finanzielle Mittel
        ein, deren teilweisen oder vollständigen Verlust Sie sich leisten können. Die über iFunded.de zur Zeichnung angebotenen
        Vermögensanlagen und Wertpapiere sind nicht für alle Investoren geeignet. Stellen Sie daher unbedingt sicher, dass
        Sie die mit der Zeichnung von Vermögensanlagen und Wertpapieren verbundenen Risiken vollständig verstanden haben
        und lassen Sie sich bei Bedarf von einer unabhängigen und sachkundigen Person oder Institution beraten, bevor Sie
        zeichnen. Weitere Informationen zu den Risiken einer Vermögensanlage bzw. eines Wertpapiers entnehmen Sie bitte dem
        jeweiligen Vermögensanlagen-Informationsblatt bzw. Wertpapierprospekt.
      </p>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include("inc/footer.php"); ?>
  <!-- FOOTER -->


  <div id="menu-holder">
    <?php include("inc/menu-contact.php"); ?>
  </div>
  <div id="menu-holder2">
    <?php include("inc/mobile-menu.php"); ?>

  </div>



  <script src="js/scripts.js"></script>
  <script src="js/jquery.multilevelpushmenu.js" charset="utf-8"></script>
  <script src="js/parallax.min.js"></script>
  <!-- <script src="js/bootstrap-slider.min.js" charset="utf-8"></script> -->
  <script src="js/jquery.bxslider.js"></script>
  <script src="js/scrollreveal.js"></script>
  <!-- <script src="js/svg-animation.js"></script> -->
  <script type="text/javascript" src="http://oss.maxcdn.com/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function () {


$('#exampleModal').on('show.bs.modal', function (event) {

});

      window.sr = ScrollReveal();

      $('.slider').bxSlider({
        onSliderLoad: function () {
          //HERO SLIDER ANIMATION
          sr.reveal('.slide h1', {
            duration: 1000,
            delay: 1500,
            origin: 'left',
            reset: true,

          }, 1000);
          sr.reveal('.hero-cta', {
            duration: 1000,
            delay: 1800,
            origin: 'bottom',
            reset: true
          }, 1000);
          sr.reveal('.slide .frame-1', {
            duration: 1000,
            origin: 'right',
            reset: true,
            distance: '300px',
            scale: 1
          }, 300);
          sr.reveal('.slide .frame-3', {
            duration: 1000,
            delay: 800,
            origin: 'right',
            reset: true,
            distance: '300px',
            scale: 1
          }, 300);
          sr.reveal('.slide .frame-2', {
            duration: 1000,
            delay: 400,
            origin: 'right',
            reset: true,
            distance: '300px',
            scale: 1,
          }, 300);
        },
        easing: 'ease-in-out',
        auto: true,
        touchEnabled: true,
        pause: 6000
      });


      $('.project-slider').bxSlider({
        auto: true,
        // moveSlides: 2,
        slideMargin: 10,
        infiniteLoop: true,
        easing: null,
        // adaptiveHeight: true,
        touchEnabled: true
        // pagerCustom: '.project-slider'
      });

      // sr.reveal('.part-2 .logo', {
      //   duration: 1000,
      //   delay: 2000,
      //   origin: 'bottom',
      // }, 500);




      sr.reveal('.part-5 .holder .item', {
        duration: 1000,
        viewFactor: 0.9,
        scale: 0.8,
        distance: '100px',
      }, 300);
      // PART-2

      sr.reveal('.part-2 .items.first', {
        duration: 1000,
        viewFactor: 0.9,
        origin: 'left',
        distance: '100px'
      }, 300);
      sr.reveal('.part-2 .items.second', {
        duration: 1000,
        viewFactor: 0.9,
        origin: 'bottom',
        distance: '100px',
        // delay: 300
      }, 300);
      sr.reveal('.part-2 .items.third', {
        duration: 1000,
        viewFactor: 0.9,
        origin: 'right',
        distance: '100px',
        // delay: 300
      }, 300);



      sr.reveal('.part-601 .holder .shape', {
        duration: 800,
        distance: '100px',
        origin: 'top'

      }, 500);
      sr.reveal('.part-601 .holder .line', {
        duration: 1000,
        distance: '100px',
        origin: 'bottom'

      }, 500);



      // PARALLAX EFFECT
      $('.part-5').parallax({
        imageSrc: 'img/bg4.jpg'
      });
      $('.part-6').parallax({
        imageSrc: 'img/bg5.jpg'
      });

    });
  </script>
</body>

</html>