<html>
  <head>
    <script
      src="https://kit.fontawesome.com/641b2e7215.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div>
      <div id="board-accueil" style="overflow: hidden">
        <a href="https://www.epsi.fr/campus/campus-de-lille/" target="_blank"
          ><img
            src="img/epsi-logo.jpeg"
            id="logo-epsi"
            alt="Epsi logo"
            title="Epsi logo"
        /></a>
        <img
          src="img/pingoin.png"
          style="position: absolute; left: 60%; top: 30%;"
          width="150px"
          height="auto"
          id="pingouin"
        />
        <h2>Adrien Jeanjean</h2>
        <h3>Développer informatique</h3>
        <a href="#presentation"
          ><img
            src="img/shift.svg"
            id="flecheAccueil"
            title="slide vers A propos"
        /></a>
      </div>

      <div id="presentation">
        <div id="sphere"></div>
        <div class="board-left-black">
          <h2>A propos</h2>
        </div>
        <div class="board-right">
          <div id="board-in-right">
            <p>
              Je suis étudiant en informatique à l'école Epsi de Lille, et futur
              diplômé d'un titre de bachelor en informatique (BAC +3).
            </p>
            <p>
              Ce portfolio a pour but de présenter les différents projets sur
              lesquels j'ai travaillé ces derniers temps aussi bien dans le
              cadre scolaire et associatif que personnel. <br />Vous pouvez
              également visualiser mon CV et le télécharger. <br />Si vous avez
              une question, ou si vous avez simplement besoin d'un
              renseignement, vous pouvez me contacter en cliquant ici :
              <a href="#contacts">Contact</a>.
            </p>
          </div>
        </div>
        <div class="board-right" id="second" style="border-radius:10%">
          <img
            src="img/imgProfil.jpg"
            style="height: 100%; width: 100%;border-radius:10%"
          />
        </div>
        <a href="#competence"
          ><img
            src="img/shift.svg"
            id="flechePropos"
            title="slide vers compétence"
        /></a>
      </div>

      <div id="competence">
        <div id="second-left-board" class="board-left-black">
          <h2>Compétences</h2>
        </div>
        <div class="board-competence">
          <div id="board-competence">
            <div class="bar-container" title="php">
              <img src="img/php.png" />
              <div class="bar"><div id="php-bar-pourcentage"></div></div>
            </div>
            <div class="bar-container" title="sql">
              <img src="img/sql.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 77%;"></div>
              </div>
            </div>
            <div class="bar-container" title="javascript">
              <img src="img/js.webp" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 82%;"></div>
              </div>
            </div>
            <div class="bar-container" title="html">
              <img src="img/html5.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 94%;"></div>
              </div>
            </div>
            <div class="bar-container" title="css">
              <img src="img/css.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 88%;"></div>
              </div>
            </div>
            <div class="bar-container" title="symfony">
              <img src="img/symfony.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 65%;"></div>
              </div>
            </div>
            <div class="bar-container" title="C#">
              <img src="img/csharp.svg" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 62%;"></div>
              </div>
            </div>
            <div class="bar-container" title="java">
              <img src="img/java.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 75%;"></div>
              </div>
            </div>
            <div class="bar-container" title="python">
              <img src="img/python.webp" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 89%;"></div>
              </div>
            </div>
            <div class="bar-container" title="C++">
              <img src="img/cplusplus.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 72%;"></div>
              </div>
            </div>
            <div class="bar-container" title="linux">
              <img src="img/linux.svg.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 88%;"></div>
              </div>
            </div>
            <div class="bar-container" title="Vim">
              <img src="img/vim.png" />
              <div class="bar">
                <div id="php-bar-pourcentage" style="width: 72%;"></div>
              </div>
            </div>
          </div>
          <a href="#justificatif"
            ><img
              src="img/shift.svg"
              id="flecheCompetence"
              title="slide vers justificatif de compétence"
          /></a>
        </div>
      </div>

      <div id="justificatif">
        <div id="third-left-board" class="board-left-black">
          <h2>Justificatif compétence</h2>
        </div>
        <div id="third-board-right" class="board-right">
          <div class="slide" id="slide1">
            <button class="btn-justificatif" id="a111">
              A1.1.1 , Analyse du cahier des charges d'un service à produire
            </button>
            <button class="btn-justificatif" id="a112">
              A1.1.2 , Étude de l'impact de l'intégration d'un service sur le
              système informatique
            </button>
            <button class="btn-justificatif" id="a113">
              A1.1.3 , Étude des exigences liées à la qualité attendue d'un
              service
            </button>
            <button class="btn-justificatif" id="a121">
              A1.2.1 , Élaboration et présentation d'un dossier de choix de
              solution technique
            </button>
            <button class="btn-justificatif" id="a122">
              A1.2.2 , Rédaction des spécifications techniques de la solution
              retenue
            </button>
            <button class="btn-justificatif" id="a123">
              A1.2.3 , Évaluation des risques liés à l'utilisation d'un service
            </button>
            <button class="btn-justificatif" id="a124">
              A1.2.4 , Détermination des tests nécessaires à la validation d'un
              service
            </button>
            <button class="btn-justificatif" id="a125">
              A1.2.5 , Définition des niveaux d'habilitation associés à un
              service
            </button>
            <button class="btn-justificatif" id="a131">
              A1.3.1 , Test d'intégration et d'acceptation d'un service
            </button>
            <button class="btn-justificatif" id="a132">
              A1.3.2 , Définition des éléments nécessaires à la continuité d'un
              service
            </button>
            <button class="btn-justificatif" id="a133">
              A1.3.3 , Accompagnement de la mise en place d'un nouveau service
            </button>
            <button class="btn-justificatif" id="a134">
              A1.3.4 , Déploiement d'un service
            </button>
            <button class="btn-justificatif" id="a141">
              A1.4.1 , Participation à un projet
            </button>
            <button class="btn-justificatif" id="a142">
              A1.4.2 , Évaluation des indicateurs de suivi d'un projet et
              justification des écarts
            </button>
            <button class="btn-justificatif" id="a143">
              A1.4.3 , Gestion des ressources
            </button>
          </div>
          <div class="slide" id="slide2">
            <button class="btn-justificatif" id="a211">
              A2.1.1 , Accompagnement des utilisateurs dans la prise en main
              d'un service
            </button>
            <button class="btn-justificatif" id="a212">
              A2.1.2 , Évaluation et maintien de la qualité d'un service
            </button>
            <button class="btn-justificatif" id="a221">
              A2.2.1 , Suivi et résolution d'incidents
            </button>
            <button class="btn-justificatif" id="a222">
              A2.2.2 , Suivi et réponse à des demandes d'assistance
            </button>
            <button class="btn-justificatif" id="a231">
              A2.3.1 , Identification, qualification et évaluation d'un problème
            </button>
            <button class="btn-justificatif" id="a232">
              A2.3.2 , Proposition d'amélioration d'un service
            </button>
            <button class="btn-justificatif" id="a321">
              A3.2.1 , Installation et configuration d'éléments d'infrastructure
            </button>
          </div>

          <div class="slide" id="slide3">
            <button class="btn-justificatif" id="a411">
              A4.1.1 , Proposition d'une solution applicative
            </button>
            <button class="btn-justificatif" id="a412">
              A4.1.2 , Conception ou adaptation de l'interface utilisateur d'une
              solution applicative
            </button>
            <button class="btn-justificatif" id="a413">
              A4.1.3 , Conception ou adaptation d'une base de données
            </button>
            <button class="btn-justificatif" id="a414">
              A4.1.4 , Définition des caractéristiques d'une solution
              applicative
            </button>
            <button class="btn-justificatif" id="a416">
              A4.1.6 , Gestion d'environnements de développement et de test
            </button>
            <button class="btn-justificatif" id="a417">
              A4.1.7 , Développement, utilisation ou adaptation de composants
              logiciels
            </button>
            <button class="btn-justificatif" id="a418">
              A4.1.8 , Réalisation des tests nécessaires à la validation
              d'éléments adaptés ou développés
            </button>
            <button class="btn-justificatif" id="a419">
              A4.1.9 , Rédaction d'une documentation technique
            </button>
            <button class="btn-justificatif" id="a4110">
              A4.1.10 , Rédaction d'une documentation d'utilisation
            </button>
            <button class="btn-justificatif" id="a421">
              A4.2.1 , Analyse et correction d'un dysfonctionnement, d'un
              problème de qualité de …
            </button>
            <button class="btn-justificatif" id="a423">
              A4.2.3 , Réalisation des tests nécessaires à la mise en production
              d'éléments mis à jour
            </button>
            <button class="btn-justificatif" id="a424">
              A4.2.4 , Mise à jour d'une documentation technique
            </button>
          </div>
          <div class="slide" id="slide4">
            <button class="btn-justificatif" id="a511">
              A5.1.1 , Mise en place d'une gestion de configuration
            </button>
            <button class="btn-justificatif" id="a513">
              A5.1.3 , Suivi d'une configuration et de ses éléments
            </button>
            <button class="btn-justificatif" id="a522">
              A5.2.2 , Veille technologique
            </button>
            <button class="btn-justificatif" id="a523">
              A5.2.3 , Repérage des compléments de formation ou d'auto-formation
              ...
            </button>
            <button class="btn-justificatif" id="a524">
              A5.2.4 , Étude d˜une technologie, d'un composant, d'un outil ou
              d'une méthode
            </button>
          </div>
        </div>

        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h1 id="modal-title"></h1>
            <h2 id="modal-h2">Situation où la compétence à était validé :</h2>
            <ul id="content"></ul>
            <p id="modal-justificatif"></p>
          </div>
        </div>
        <?php

function get_rss_feed_as_html($feed_url, $max_item_cnt = 10, $show_date = true, $show_description = true, $max_words = 0, $cache_timeout = 7200, $cache_prefix = "/tmp/rss2html-")
{
    $result = "";
    // get feeds and parse items
    $rss = new DOMDocument();
    $cache_file = $cache_prefix . md5($feed_url);
    // load from file or load content
    if ($cache_timeout > 0 &&
        is_file($cache_file) &&
        (filemtime($cache_file) + $cache_timeout > time())) {
            $rss->load($cache_file);
    } else {
        $rss->load($feed_url);
        if ($cache_timeout > 0) {
            $rss->save($cache_file);
        }
    }
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'content' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
        );
        $content = $node->getElementsByTagName('encoded'); // <content:encoded>
        if ($content->length > 0) {
            $item['content'] = $content->item(0)->nodeValue;
        }
        array_push($feed, $item);
    }
    // real good count
    if ($max_item_cnt > count($feed)) {
        $max_item_cnt = count($feed);
    }
    $result .= '<ul class="feed-lists">';
    for ($x=0;$x<$max_item_cnt;$x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $result .= '<li class="feed-item">';
        $result .= '<div class="feed-title"><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong></div>';
        if ($show_date) {
            $date = date('l F d, Y', strtotime($feed[$x]['date']));
            $result .= '<small class="feed-date"><em>Posted on '.$date.'</em></small>';
        }
        if ($show_description) {
            $description = $feed[$x]['desc'];
            $content = $feed[$x]['content'];
            // find the img
            $has_image = preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
            // no html tags
            $description = strip_tags(preg_replace('/(<(script|style)\b[^>]*>).*?(<\/\2>)/s', "$1$3", $description), '');
            // whether cut by number of words
            if ($max_words > 0) {
                $arr = explode(' ', $description);
                if ($max_words < count($arr)) {
                    $description = '';
                    $w_cnt = 0;
                    foreach($arr as $w) {
                        $description .= $w . ' ';
                        $w_cnt = $w_cnt + 1;
                        if ($w_cnt == $max_words) {
                            break;
                        }
                    }
                    $description .= " ...";
                }
            }
            // add img if it exists
            if ($has_image == 1) {
                $description = '<img class="feed-item-image" src="' . $image['src'] . '" />' . $description;
            }
            $result .= '<div class="feed-description">' . $description;
            $result .= ' <a href="'.$link.'" title="'.$title.'">Continue Reading &raquo;</a>'.'</div>';
        }
        $result .= '</li>';
    }
    $result .= '</ul>';
    return $result;
}

function output_rss_feed($feed_url, $max_item_cnt = 10, $show_date = true, $show_description = true, $max_words = 0)
{
    echo get_rss_feed_as_html($feed_url, $max_item_cnt, $show_date, $show_description, $max_words);
}

?>
        <a href="#veille"
          ><img
            src="img/shift.svg"
            id="flecheJustificatif"
            title="slide vers veille"
        /></a>
      </div>
      <div id="veille">
        <div id="fourth-left-board" class="board-left-black">
          <h2>Veille technologique</h2>
        </div>
        <img src="img/linux.svg.png" id="linux-veille-logo" />
        <img src="img/technology-logo.png" id="techno-veille-logo" />
        <img src="img/IA-logo.png" id="IA-veille-logo" />
        <img src="img/cyber-logo.png" id="cyber-veille-logo" />
        <div id="articles">
          <div id="techno">
            <h2>Technology</h2>
        <?php output_rss_feed('https://news.google.com/rss/headlines/section/topic/TECHNOLOGY?hl=fr&gl=BE&ceid=BE:fr', 20, true, true, 20);?>
          </div>
          <div id="linux">
            <h2>Linux</h2>
        <?php output_rss_feed('https://news.google.com/rss/search?q=linux&ceid=US:en&hl=en-US&gl=US', 20, true, true, 20);?>
          </div>
          <div id="IA">
            <h2>Intelligence artificielles</h2>
        <?php output_rss_feed('https://news.google.com/rss/search?q=artificial%20intelligence&ceid=US:en&hl=en-US&gl=US', 20, true, true, 20);?>
          </div>
          <div id="cybersecurite">
            <h2>Cybersécurité</h2>
        <?php output_rss_feed('https://news.google.com/rss/search?q=cybersecurity&ceid=US:en&hl=en-US&gl=US', 20, true, true, 20);?>
          </div>
      </div>
<a href="contact"><img
            src="img/shift.svg"
            id="flecheVeille"
            title="slide vers contact"
        /></a>
    </div>
    <div id="contact">
        <div id="five-left-board" class="board-left-black">
          <h2>Contact</h2>
        </div>
    
    </div>

      <div id="navbar">
        <img src="img/shift.svg" id="navFleche" />
          <li><a href="#presentation">A propos</a></li>
          <li><a href="#competence">Compétences</a></li>
          <li><a href="#justificatif">Justificatif</a></li>
          <li><a href="#veille">Veille</a></li>
          <li><a href="#contact">Contact</a></li>
      </div>
</div>
  </body>
  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("#flecheAccueil, #flechePropos, #flecheCompetence, #flecheJustificatif, #flecheVeille").on(
        "click",
        function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            let hash = this;
            $hash = $(hash);

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
              {
                scrollTop: $hash.offset().top + 116,
              },
              800,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        }
      );
    let on = false;
    $("#navFleche").on("click",
    function (event){
      if (on == false){
       $("#navbar").animate({height: '40px'});
       $("#navFleche").css('transform', 'scale(1,1)');
       $("#navbar li").css('display', 'none');
      on = true;
      }
      else {
       $("#navbar").animate({height: '250px'});
       $("#navFleche").css('transform', 'scale(1,-1)');
       $("#navbar li").css('display', 'block');
      on = false;
      }
    }
)
    });
    let modal = document.getElementById("myModal");

    let btn1 = document.getElementById("a111");

    btn1.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn1.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("stage - Ascométal");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "Durant mon stage chez Ascométal, mon maître de stage m’a expliqué le résultat qu’il attendait avec des explications oral et des notes. <br>L’application que je devais développé devait respecter certaine contraintes :<br><br><li>Sur la page d’accueil, un slider de statistique devait être implémenté</li><li>Chaque étapes de l’entreprise devait être représenté par une page</li><li>Implémenté pour chaque machine de l’entreprise quatre graphiques représentant l’état de la machine</li><li>Implémenté un algorithme qui générés un pdf en fonction des différentes données que l’utilisateur à coché</li><li>Implémenté un système de recherche pour trouver une commande que l’entreprise c’est chargé dans le passé ou qui est en cours de traitement</li><li>Implémenté un système qui affiche un tableau de bord pour chaque machine et générées chaque jour</li>";
      modal.style.display = "block";
    };
    // Get the button that opens the modal
    let btn2 = document.getElementById("a112");

    // When the user clicks on the button, open the modal
    btn2.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn2.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("stage - Ascométal");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "Il s'agit d’étudier les conséquences que vont avoir la mise en place d'un nouveau service sur le système d'information. <br> Il faut donc se demander si l'on à fait évoluer le système d'information ou si on à intégré un nouveau service. <br><br> - Intégration d'un serveur web <br> - mise en place de requête FTP qui publié chaque jour de nouvelle information dans la base de donnée <br> - ajout de nouvelle table dans une base de donnée existante";
      modal.style.display = "block";
    };

    let btn3 = document.getElementById("a113");

    btn3.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn3.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "L’application doit être faite en langage web, elle doit pouvoir être accessible à partir d’un navigateur web. Elle doit pouvoir enregistrer un nouvel utilisateur. L’application doit avoir un système qui gère les rendez-vous pris par l’utilisateur et un système pour valider ces rendez-vous. <br>Les solutions pour répondre aux exigences : <br>- Gestion de la connexion en fonction du type d’utilisateur : espace « patient » et espace  « secrétaire ».  <br>- Intégration des prises de rendez-vous <br>- Gestion de l’état des rendez-vous <br><h2> Exigence de sécurité </h2> <br><br>L’application doit pouvoir enregistrer le mot de passe des utilisateurs de façon sécurisée.Elle doit pouvoir vérifier que le bon utilisateur est connecté à son espace. <br>Solution pour répondre aux exigences : <br> <br>- Cryptage des données (Hachage)<br>- Filtrage des entées par un test de connection <br>";
      let newImg = document.createElement("img");

      newImg.id = "modal-image";
      newImg.src= "img/motDePassHasher.png";
      document.getElementById("modal-justificatif").after(newImg);
      modal.style.display = "block";
    };

    let btn5 = document.getElementById("a121");

    btn5.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn5.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "<h3>Recensement des solutions technique </h3> <br> <br> <br><img src=\"img/xampp.svg.png\" width=\"200px\" height=\"50px\"/> SGBDR avec PhpMyAdmin, administration de la base de donnée, tests et développement. <br> <br> <img src=\"img/bootstrap.png\" width=\"70px\" height=\"50px\" /> Framework CSS : Intégration rapide d’un responsive design et interface graphique <br> <br><img src=\"img/symfony.png\" width=\"70px\" height=\"50px\" /> Développement du codeServeur et client <br><br> <img src=\"img/gut.png\" width=\"70px\" height=\"50px\" /> un logiciel de gestion de versions décentralisé <br> <br><img src=\"img/vim.png\" width=\"70px\" height=\"50px\" />IDE, Environnement";
      modal.style.display = "block";
    };

    let btn6 = document.getElementById("a122");

    btn6.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn6.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "- <b>Xampp</b> est la base du développement de l’application web. Il est en mesure de lancer des sites web dynamiques qu’il soit connecté à internet ou en local. Il possède un serveur Apache permettant de transférer des fichiers en ligne. Il possède PhpMyAdmin, SGBDR fonctionnant sur le langage MySql. <br> <br>- <b>Bootstrap</b> est un framework CSS open source développé par twitter.Il permet une intégration rapide d’un responsive design s’adaptant à tous types d’écrans. <br><br>- <b>Symfony</b> est un framework open source permettant le développement d’application web.<br><br>- <b>Git</b> est une plateforme en ligne permettant de partager et d’héberger ces projets, plutôt orientée projets informatiques.<br><br>- <b>Vim</b> est un éditeur de textes configurable. Il a été configuré pour fonctionner comme un IDE classique.<br><br>";
      modal.style.display = "block";
    };

    let btn7 = document.getElementById("a123");

    btn7.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn7.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "<h3>Recensement des risques : </h3> <br><br><ul><li>Extraction de donnée de la base de donnée</li><li>Modification de la base de donnée</li><li>Usurpation d’identité</li><li>Arrêt de la l’accès à se service</li><li>Perte de données</li></ul><br>";
      modal.style.display = "block";
    };

    let btn8 = document.getElementById("a124");

    btn8.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn8.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "<ul><li>Vérifier si les données correspondent aux valeurs réels</li><li>Vérifier si le carrousel déroule les statistiques attendue </li></ul><img src=\"img/accueilAsco.png\" width=\"900px\" height=\"400px\" /> <br> <br><li>Vérifier que les données coché sont bien générer avec un pdf </li><img src=\"img/selectionAsco.png\"width=\"900px\" height=\"400px\"  /><br> <br><img src=\"img/pdfAsco.png\"width=\"900px\" height=\"400px\"  /><br> <br><li>Vérifier que le système de recherche fonctionne correctement</li><img src=\"img/rechercheAsco.png\"width=\"900px\" height=\"400px\" />";
      modal.style.display = "block";
    };

    let btn9 = document.getElementById("a125");

    btn9.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn9.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "Les utilisateurs de l’application se distingue en deux catégorie :<li>Patient</li><li>Secrétaire</li>Les patients peuvent insérer/annuler la demande de nouveaux rendez-vous ou consulter leurs rendez-vous.<br>Les secrétaire peuvent valider/refuser les demandes de rendez-vous<br><br>Ici les variables de sessions qui sont attribué soit à un patient soit un secrétaire.<br><img src=\"img/screenshotSecretaireConnexion.png\" /><br><br><pre id=\'vimCodeElement\'><span class=\"Identifier\">session_start</span><span class=\"Special\">()</span>;<br><span class=\"Statement\">$</span><span class=\"Identifier\">_SESSION</span><span class=\"Special\">[</span><span class=\"Constant\">\'email\'</span><span class=\"Special\">]</span> <span class=\"Statement\">=</span> <span class=\"Statement\">$</span><span class=\"Identifier\">email</span>;<br><span class=\"Statement\">$</span><span class=\"Identifier\">_SESSION</span><span class=\"Special\">[</span><span class=\"Constant\">\'type_user\'</span><span class=\"Special\">]</span> <span class=\"Statement\">=</span> <span class=\"Constant\">&quot;patient&quot;</span>;<br><span class=\"Statement\">$</span><span class=\"Identifier\">_SESSION</span><span class=\"Special\">[</span><span class=\"Constant\">\'name\'</span><span class=\"Special\">]</span> <span class=\"Statement\">=</span> <span class=\"Statement\">$</span><span class=\"Identifier\">connexion</span><span class=\"Special\">[</span><span class=\"Constant\">0</span><span class=\"Special\">][</span><span class=\"Constant\">\'nom\'</span><span class=\"Special\">]</span>;<br><span class=\"Statement\">$</span><span class=\"Identifier\">_SESSION</span><span class=\"Special\">[</span><span class=\"Constant\">\'id_patient\'</span><span class=\"Special\">]</span> <span class=\"Statement\">=</span> <span class=\"Statement\">$</span><span class=\"Identifier\">connexion</span><span class=\"Special\">[</span><span class=\"Constant\">0</span><span class=\"Special\">][</span><span class=\"Constant\">\'id\'</span><span class=\"Special\">]</span>;<br></pre>";
      modal.style.display = "block";
    };

    let btn10 = document.getElementById("a131");

    btn10.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn10.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      " Durant mon stage à Ascométal j'ai publié l'application web sur le serveur de l'entreprise.<br>  Le service à donc était vérifié par l’administration de l’entreprise et des retours sont vite revenue, des modifications ont était appliqué en fonction des appréciations. <br>Une réunion c’est faîte où mon application web fut présenté au dirigeant de l’usine et l’application à était approuvé. Le service à était accepté.";
      modal.style.display = "block";
    };

    let btn11 = document.getElementById("a132");

    btn11.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn11.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Sauvegarde des fichiers, dossier et du code pour suivre l'évolution des ajouts des fonctionnalités:<br<br>><img src=\"img/githubScreen.png\" width=\"80%\" height=\"auto\" /> ";
      modal.style.display = "block";
    };

    let btn12 = document.getElementById("a133");

    btn12.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn12.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Explication de l’interface utilisateur par une documentation utilisateur : <br><br> <iframe src=\"img/DocumentationUtilisateur.pdf\" width=\"800\" height=\"600\" align=\"middle\"></iframe>";
      modal.style.display = "block";
    };

    let btn13 = document.getElementById("a134");

    btn13.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn13.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
       let newDiv2 = document.createElement("li");
      // et lui donne un peu de contenu
       let newContent2 = document.createTextNode("Acométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv2.appendChild(newContent2);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("content").appendChild(newDiv2);
      document.getElementById("modal-justificatif").innerHTML =
      "Ascométal - <br><br>Le déploiement de l’application web réalisé en entreprise c’est faîte par SSH.Après j’ai configuré le server web sur le server dédié avec xampp.<br><br>Projet hopital – transversale<br><br>Le déploiement de l’application c’est fait sur un server de production. Les données ont était envoyé par un protocol SSH et le server c’est réalisé grace à xampp.";
      modal.style.display = "block";
    };

    let btn14 = document.getElementById("a141");

    btn14.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn14.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "J’ai utilisé l’application Discord pour communiqué avec mon groupe, nous nous sommes répartie les tâches sur cette application. <br><img src=\"img/screenRepartitionDesTaches.png\" />";
      modal.style.display = "block";
    };

    let btn15 = document.getElementById("a142");

    btn15.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn15.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Nous avons réalisé un trello pour suivre l'évolution du projet <br> <br> <img src=\"img/trello.png\" />";
      modal.style.display = "block";
    };

    let btn16 = document.getElementById("a143");

    btn16.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn16.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "<li>Resources humaines: Un developpeur stagiaire à temps plein.</li><li>Resources matérielles: ordinateur de bureau, ainsi que de mon ordinateur portable</li><li>Resources logicielles: système d'exploitation debian, IDE vscode.</li>";
      modal.style.display = "block";
    };

    let btn17 = document.getElementById("a211");

    btn17.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn17.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Explication de l’interface utilisateur par une documentation utilisateur : <br><br> <iframe src=\"img/DocumentationUtilisateur.pdf\" width=\"800\" height=\"600\" align=\"middle\"></iframe>";
      modal.style.display = "block";
    };

    let btn18 = document.getElementById("a212");

    btn18.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn18.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Parmi les données nécessaire à l’application pour fonctionner, il y a une donnée particulièrement sensible :<br><li>Le mot de pass</li><br>Le mot de passe garantie l’impossibilité d’une intrusion, et permet d’éviter l’accès aux espaces comptable et administrateur de l’application.<br>Pour Garantir la confidentialité et l’intégrité de ces données, j’ai eu recours à un algorithme de chiffrement basé sur la norme SHA1<br><img src=\"img/motDePassHasher.png\" />";
      modal.style.display = "block";
    };

    let btn19 = document.getElementById("a221");

    btn19.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn19.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Dans le cadre de mon stage, lors de l’implémentation d’un slider de statistique sur la page d’accueil des erreurs se sont produite. Pour créer un graphique de statistique j’utilisais une library javascript qui n’était pas compatible avec la library bootstrap. J’ai finalement décidé d’utiliser une autre library javascript pour afficher les statistiques. <br> <img src=\"img/accueilAsco.png\" />";
      modal.style.display = "block";
    };

    let btn20 = document.getElementById("a222");

    btn20.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn20.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "La démarche technique pour établir une aide construtive à mes camarades de formation en difficulté :<br><li>indiquer les point qui posent problèmes</li><li>expliquer d'où vient l'erreur</li><li>fournir les sources informationnelles neccessaire et laisser les collègues acquérir par eux-même les compétences</li><br><img src=\"img/ego.png\" />";
      modal.style.display = "block";
    };

    let btn22 = document.getElementById("a231");

    btn22.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn22.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Un des problèmes que j’ai rencontré était de mettre en service l’application web sur un server de production.<br>Le problème était que la navigation de l’application ne fonctionnais pas, j’ai donc cherché à comprendre.<br>La cause du problème avait avoir avec le fichier .htaccess, il comportait des erreurs. J’ai donc dût le modifier pour que la navigation puisse se faire comme voulut.<br>Les conséquences de se problème est que l’application pouvait seulement affiché la page d’accueil.<br> <img src=\"img/htaccess.png\" /> ";
      modal.style.display = "block";
    };

    let btn23 = document.getElementById("a232");

    btn23.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn23.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Durant mon stage, j’ai proposé d’améliorer un service. Des pages de l’application affiché seulement les informations lié au commandes de l’entreprise. <br>Presque chaque page affiché plus de 100 commandes et donc c’était compliqué de s’y retrouver, j’ai donc proposé de faire un système où l’utilisateur coché les commandes qu’il était intéressé. Après les commandes coché était rendu sur un pdf où il avait le choix pour enregistré les commandes ou bien les imprimés.<br> <img src=\"img/selectionAsco.png\"  /> <br><img src=\"img/pdfAsco.png\" />";
      modal.style.display = "block";
    };

    let btn24 = document.getElementById("a321");

    btn24.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn24.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("OpenVpn - installation");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Le but du projet était de créer un server openVPN et de connecter un client openVPN sur se server.<br>Pour faire cela j’ai installé sur une machine, le système d’exploitation pfsense qui à fait office de modem.<br><img src=\"img/pfsense.png\" /> <br>Puis j’ai installé le server openVPN sur un server de type debian. <br><img src=\"img/openVPNClient.png\" /> <br>Enfin j’ai installé le client openVPN sur ma machine personnel.";
      modal.style.display = "block";
    };

    let btn26 = document.getElementById("a411");

    btn26.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn26.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - application mobile");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Composant logiciel nécessaire à la conceptions de la solution: <br> <img src=\"img/studio-logo.png\" /> Android Studio <br> <img src=\"img/java-icon.jpg\" /> Java Android <br><br> <img src=\"img/android-covidManager.png\" /> <li>Module main activity -> Ecrand de connexion</li> <li>Module loadingScreenActivity -> Ecrand de chargement</li><li>Module formAddAndModifySlot -> Ecrand où l'utilisateur peut ajouté un crénaud de rendez-vous ou en modié un ancien</li><li>Module DetailsVaccine -> Ecrand où les détailles des vaccins sont énuméré</li>";
      modal.style.display = "block";
    };

    let btn27 = document.getElementById("a412");

    btn27.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn27.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - application mobile");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Android Studio nous fournit un module de conception graphique pour maquetter l'application<br> <img src=\"img/layoutStudio.png\" />";
      modal.style.display = "block";
    };

    let btn28 = document.getElementById("a413");

    btn28.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn28.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Shéma de la base de donnée : <br> <img src=\"img/mcd.png\" />";
      modal.style.display = "block";
    };

    let btn29 = document.getElementById("a414");

    btn29.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn29.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "<li><b>HTML</b> : Ce langage est utilisé pour créer des pages web</li><li><b>CSS</b>: Est un langage informatique utilisé sur l’internet pour mettre en forme les fichiers HTML (couleur,taille etc…)</li><li><b>php </b>:Utilisé pour produire des pages Web dynamiques via un serveur HTTP</b></li><li><b>Javascript</b>: Permet de rendre le site dynamique .</li><li><b>Symfony</b>: est un framework permettant de manipuler les langage html, css, php avec plus de aisance</li><li><b>Mysql</b>:pour stocker et manipuler les données.</li>";
      modal.style.display = "block";
    };

    let btn31 = document.getElementById("a416");

    btn31.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn31.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "J’ai installé symfony sous Linux, j’ai exécuté des commandes pour pouvoir l’installer : <br><li>Installer les extensions php : Ctype, iconv, JSON, PCRE, Session, SimpleXML et Tokenizer</li><li>Installer composer : </li><br><img src=\"img/composerInstall.png\" /><br><li>Création d’un nouveau projet symfony:</li><br><img src=\"img/symfonyCreatePage.png\" /> <br><li>Lancer un server symfony :</li><br><img src=\"img/serverSymfony.png\" /><br>";
      modal.style.display = "block";
    };

    let btn32 = document.getElementById("a417");

    btn32.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn32.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "J’ai implémenté cette arborescence de modules. <br>Chaque controller correspondent à un template, ils créer ainsi un composant logiciel.<br><img src=\"img/arborescenceProjetHopital.png\" />";
      modal.style.display = "block";
    };

    let btn33 = document.getElementById("a418");

    btn33.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn33.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
        "<ul><li>Vérifier si les données correspondent aux valeurs réels</li><li>Vérifier si le carrousel déroule les statistiques attendue </li></ul><img src=\"img/accueilAsco.png\" width=\"900px\" height=\"400px\" /> <br> <br><li>Vérifier que les données coché sont bien générer avec un pdf </li><img src=\"img/selectionAsco.png\"width=\"900px\" height=\"400px\"  /><br> <br><img src=\"img/pdfAsco.png\"width=\"900px\" height=\"400px\"  /><br> <br><li>Vérifier que le système de recherche fonctionne correctement</li><img src=\"img/rechercheAsco.png\"width=\"900px\" height=\"400px\" />";
      modal.style.display = "block";
    };

    let btn34 = document.getElementById("a419");

    btn34.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn34.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "documentation technique: <br><br> <iframe src=\"img/DocumentationTechnique.pdf\" width=\"800\" height=\"600\" align=\"middle\"></iframe>";
      modal.style.display = "block";
    };

    let btn35 = document.getElementById("a4110");

    btn35.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn35.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Explication de l’interface utilisateur par une documentation utilisateur : <br><br> <iframe src=\"img/DocumentationUtilisateur.pdf\" width=\"800\" height=\"600\" align=\"middle\"></iframe>";
      modal.style.display = "block";
    };

    let btn36 = document.getElementById("a421");

    btn36.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn36.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Dans le cadre de mon stage, lors de l’implémentation d’un slider de statistique sur la page d’accueil des erreurs se sont produite. Pour créer un graphique de statistique j’utilisais une library javascript qui n’était pas compatible avec la library bootstrap. J’ai finalement décidé d’utiliser une autre library javascript pour afficher les statistiques. <br> <img src=\"img/accueilAsco.png\" />";
      modal.style.display = "block";
    };

    let btn38 = document.getElementById("a423");

    btn38.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn38.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Dans le cadre de mon stage, l’application web à était publié sur le server de production. Après cela on m’a demandé de travailler sur de nouveaux élément ou bien de modifier d’ancien. J’ai du par exemple ajouter de nouvelle statistique pour une page qui affiché le nombre de commande qu’elle avait en cours ou bien qu’elle aura.Avant de publié les modifications j’ai vérifier si les nouvelle statistique afficher les données réel de l’entreprise. J’ai pu remarquer que se n’était pas le cas, j’ai donc compris où était mon erreur et ré-vérifié après avoir implémenté les modifications.<br>  <img src=\"img/AscoTonnageOf.png\"  />";
      modal.style.display = "block";
    };

    let btn39 = document.getElementById("a424");

    btn39.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn39.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "J'ai réalisé une première documentation technique pour la modifier après avoir ajouté de nouvelle fonctionnalité. <img src=\"img/documentationTechniquev1.png\"  /> <br> La nouvelle documentation technique est la suivante : <br> <iframe src=\"img/DocumentationTechnique.pdf\" width=\"800\" height=\"600\" align=\"middle\"></iframe>";
      modal.style.display = "block";
    };

    let btn40 = document.getElementById("a511");

    btn40.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn40.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Ascométal - stage");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Durant mon stage, j'ai lister et écrire les caractéristiques techniques (ip d'hôte, user, password) afin de me connecter sur le server de production en protocol sécurisée SSH. <br> <img src=\"img/configuration.png\" />";
      modal.style.display = "block";
    };

    let btn42 = document.getElementById("a513");

    btn42.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn42.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Projet transversale - développement d'une application");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Dans la prise en charge des composants indépendants de notre projet.Un logiciel de gestion de version « Git » permet de revenir sur des modifications antérieures.<br>Sur l’image ci-dessous, certains fichiers ont évolués au fur et à mesure du développent : <br> <img src=\"img/githubEvolution.png\" />";
      modal.style.display = "block";
    };

let articleTrans = "<h2>Le transhumanisme </h2> <br><br>     Le Transhumanisme est un domaine qui allie technologie et biologie, ce qui n’est pas sans poser des problèmes éthiques.<br>      Tout d’abord, l’apport du transhumanisme pour l’humanité est indéniable. En effet, toute la logistique autour du remplacement d’un membre ou d’un organe par la médecine relève déjà un peu du transhumanisme. Prenons l’exemple du roman de Maïlys de Kérangal Réparer les vivants, où le cœur d’un jeune homme en état de mort cérébrale est transplanté dans le corps d’une femme mûre grâce à tout un arsenal technologique et numérique très sophistiqué. Mais c’est lorsque le membre ou l’organe remplacé est directement créé par l’homme et la technique que nous sommes vraiment dans le transhumanisme. Par exemple, les champions para-olympiques sont parfois dotés de jambes artificielles qui les rendent très compétitifs autant, voire même plus, que ceux dotés de jambes réelles. Le pacemaker relève également de ce domaine. C’est dire combien le transhumanisme peut améliorer la qualité de vie de l’homme.<br>     Néanmoins, comme la plupart des grandes avancées scientifiques, le transhumanisme pose la question de ses limites éthiques. Ainsi, certains milliardaires envisagent, grâce à des nano-robots, d’améliorer leurs capacités physiques et intellectuelles, voire d’allonger leur espérance de vie, creusant de façon plus violente encore l’écart entre les nantis de la planète et les non-nantis. Autre exemple : certains informaticiens chevronnés envisagent de télécharger le cerveau d’un humain dans un super ordinateur, comme cela a été réalisé pour une souris. Si ce projet se réalise, des questions cruciales se posent : l’ordinateur est-il un homme ? A-t-il des droits civiques comme un homme ? Le casser, est-ce un crime ? Ne pas le casser, cela équivaut-il à avoir créé un être immortel ? Allons plus loin : imaginons que ce projet se réalise : pourquoi ne pas copier-coller ce cerveau pour faire des clones ? Pourquoi ne pas supprimer des paramètres de ce même cerveau pour fabriquer une chimère ? En sorte que les savants d’aujourd’hui ne sont pas loin de celui de Marie Shelley, sur le point d’assister à la naissance du monstre qu’ils ont eux-mêmes créés.";

    let btn47 = document.getElementById("a522");

    btn47.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn47.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Porte folio");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "J’ai utilisé google news et feedly pour faire ma recherche d’information, ma veille technologique est mise à jours automatiquement sur mon portefolio avec un flux RSS. <br> <img src=\"img/googleNews.png\" /> <br> <h2>Cybersécurité</h2><br> <br>   La cybersécurité est un domaine qui consiste à protéger les systèmes informatiques d’une éventuelle menace extérieure. Or, ce domaine est en constante évolution. En effet, plus le monde se numérise et plus le monde doit se protéger contre les techniques de piratage, en constante évolution elles aussi.<br>     L’une des techniques de piratage les plus connues est le phishing, qui consiste pour le pirate à usurper l’identité d’une organisation dans le but d’obtenir des informations confidentielles. Cette technique prend souvent la forme d’un email affichant le label d’une organisation connue qui invite le praticien à suivre un lien qui lui pille ses codes confidentiels.<br>     Une autre technique très répandue est le ransomware qui bloque l’ordinateur de la victime pour lui demander une rançon. Par exemple, l’ordinateur se bloque, affichant un texte invitant le praticien à verser une certaine somme en suivant un lien en sorte de débloquer le système, ce qui arrive rarement : on perd son argent et son accès.<br>     Une troisième technique de piratage consiste à créer un faux réseau wifi qui va collecter les données confidentielles de la victime. Par exemple, vous vous connectez dans un lieu public (Mac Do ou autre) pour faire une transaction financière. Or, un pirate a installé un faux wifi, en plus de celui du lieu. Vous vous êtes connecté à celui-là et le pirate vous pille toutes vos données.<br>     Ces techniques de piratage sont utilisées et constamment perfectionnées pour échapper à la censure par des hackers qu’on appelle « Black Hat ». Ce sont des pirates informatiques qui mènent des actions malveillantes pour leur intérêt personnel ou pour celui d’une organisation criminelle. Il existe également les « Grey Hats » qui sont des hackers prétendument justiciers : comme Robin des Bois, ils s’insinuent dans des comptes privés pour faire justice. Par exemple, le fondateur de Wikileaks a prouvé, en s’infiltrant de façon illégale dans des comptes secrets,  que la CIA pouvait nous espionner à travers le monde. Il existe, enfin, les « White Hats », qui sont des hackers légaux. Ils sont payés par les entreprises elles-mêmes pour détecter les failles de sécurité de leur système afin de prévenir une attaque de pirates. <br> " + articleTrans;
      modal.style.display = "block";
    };

    let btn48 = document.getElementById("a523");

    btn48.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn48.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Stage - Ascométal");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "Durant mon stage, j’ai dû me former sur des concepts de javascript afin de rendre l’application plus dynamique. <br>De plus j’ai étendu mes connaissances au niveau des library javascript, j’ai lu des documentations pour savoir laquelle était la plus enclin pour le projet. <br>J’ai appris à utiliser linux sur mon temps libre, dans le but d’augmenter ma productivité.Dans le même but pour augmenter ma productivité j’ai appris à utiliser l’éditeur de texte VIM. <br><h2>Voici les plateformes où je me suis auto-formé</h2><br> <img src=\"img/w3school.png\" /> W3school <br> <img src=\"img/canvasJs.png\" /> CanvasJs <br> <img src=\"img/bootstapModal.png\" /> Bootstrap <br> <img src=\"img/vimScreen.png\" /> VIM";
      modal.style.display = "block";
    };

    let btn49 = document.getElementById("a524");

    btn49.onclick = function () {
      document.getElementById("modal-title").innerHTML = btn49.innerHTML;
      let newDiv = document.createElement("li");
      // et lui donne un peu de contenu
      let newContent = document.createTextNode("Stage - Ascométal");
      // ajoute le nœud texte au nouveau div créé
      newDiv.appendChild(newContent);
      document.getElementById("content").appendChild(newDiv);
      document.getElementById("modal-justificatif").innerHTML =
      "L’étude de l’outil Tmux durant mon stage m’a beaucoup apporté. <br>J’ai appris par moi même comment utiliser le terminal de façon plus productive, efficace.Grâce à cette outil, j’ai appris comment gérer différentes session, à enregistrer une session et à faire du live coding avec un partenaire. <br> <img src=\"img/tmux.png\" /> ";

      modal.style.display = "block";
    };

    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
      deleteContent();
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
        deleteContent();
      }
    };
    function deleteContent() {
      document.getElementById("content").innerHTML = "";
      document.getElementById("modal-justificatif").innerHTML = "";
      if(typeof(document.getElementById("modal-image")) != 'undefined' && document.getElementById("modal-image") != null){
      document.getElementById("modal-image").remove();
    }
    }
jQuery(document.links) .filter(function() { return this.hostname != window.location.hostname; }) .attr('target', '_blank');

  </script>
</html>
