<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/hebergement.css">
    <link rel="stylesheet" href="css/populaire.css">
    <link rel="stylesheet" href="css/activites.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="image/fontawesome-free-6.5.1-web/css/all.min.css">
    <title>Page d'accueil</title>
</head>
<body>

<header>

<div class="description">
             <div id="logo">
             
             <img src="image/Reservia@3x.png" alt="logo">

            </div>
            <p>
                <h2>Trouvez votre hébergemet pour des vacances de rêves</h2>
            </p>
            <p>
                En plein centre ville ou en pleine nature
            </p>
        </div>
        <div class="nav-list">
            <ul>
                <li><p><a href="#hebergement-goto">Hebergements</a></p></li>
                <li><p><a href="#activite-goto">Activités</a></p></li>
               <li><p><a href="#">S'inscrire</a></p> </li>
            </ul>

</div> 
        <div class="nav-list-2">
            <p><a href="#hebergement-goto">Hebergements</a></p>
            <p><a href="#activite-goto">Activités</a></p>
        </div>
</header>
    
<section class="general-info">
<div class="general-info">
            <p class="search-bar">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="black" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                         <input type="text" id="search" placeholder="Marseille, France">
                        <button id="search-btn">Rechercher</button>
            </p>
            <br>
            <p class="filtres-container">
                      Filtres : 
                      <ul class="filtres">
                 <li><svg class="svg-c" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#0065FC" d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM176 256a112 112 0 1 1 224 0 112 112 0 1 1 -224 0zm76-48c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z"/></svg>Economique</li>
                 <li><svg class="svg-c" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#0065FC" d="M309.6 158.5L332.7 19.8C334.6 8.4 344.5 0 356.1 0c7.5 0 14.5 3.5 19 9.5L392 32h52.1c12.7 0 24.9 5.1 33.9 14.1L496 64h56c13.3 0 24 10.7 24 24v24c0 44.2-35.8 80-80 80H464 448 426.7l-5.1 30.5-112-64zM416 256.1L416 480c0 17.7-14.3 32-32 32H352c-17.7 0-32-14.3-32-32V364.8c-24 12.3-51.2 19.2-80 19.2s-56-6.9-80-19.2V480c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V249.8c-28.8-10.9-51.4-35.3-59.2-66.5L1 167.8c-4.3-17.1 6.1-34.5 23.3-38.8s34.5 6.1 38.8 23.3l3.9 15.5C70.5 182 83.3 192 98 192h30 16H303.8L416 256.1zM464 80a16 16 0 1 0 -32 0 16 16 0 1 0 32 0z"/></svg>Animaux autorisés</li>
                 <li><svg class="svg-c" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#0065FC" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>Romantique</li>
                 <li><svg class="svg-c" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#0065FC" d="M256 64A64 64 0 1 0 128 64a64 64 0 1 0 128 0zM152.9 169.3c-23.7-8.4-44.5-24.3-58.8-45.8L74.6 94.2C64.8 79.5 45 75.6 30.2 85.4s-18.7 29.7-8.9 44.4L40.9 159c18.1 27.1 42.8 48.4 71.1 62.4V480c0 17.7 14.3 32 32 32s32-14.3 32-32V384h32v96c0 17.7 14.3 32 32 32s32-14.3 32-32V221.6c29.1-14.2 54.4-36.2 72.7-64.2l18.2-27.9c9.6-14.8 5.4-34.6-9.4-44.3s-34.6-5.5-44.3 9.4L291 122.4c-21.8 33.4-58.9 53.6-98.8 53.6c-12.6 0-24.9-2-36.6-5.8c-.9-.3-1.8-.7-2.7-.9z"/></svg>Familial</li>
        </ul>
            </p>
            <p class="bottom-note">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="#7a7a7a" d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"/></svg>Plus de 500 logements sont disponibles dans cette ville
            </p>          
        </div>
</section>

<section class="hebergement-populaire">

    <section class="hebergement">
        <span id="hebergement-goto">Hebergements à Marseille</span>
                <div class="container">
                    <a href="back/display.php?source=image-icons/hebergements/3_medium/annie-spratt-Eg1qcIitAuA-unsplash.jpg"><img src="image/hebergements/3_medium/annie-spratt-Eg1qcIitAuA-unsplash.jpg" alt=""></a>
                    <p class="notes">
                        <span class="nom">Aubèrge La Cannebière</span> <br>
                        Nuit à partir de 45£ <br>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                
                </div>
                <div class="container">
                    <a href="back/display.php?source=image/hebergements/3_medium/aw-creative-VGs8z60yT2c-unsplash.jpg" ><img src="image/hebergements/3_medium/aw-creative-VGs8z60yT2c-unsplash.jpg" alt=""></a>
                    <p class="notes">
                    
                         <span class="nom">Hôtel du port</span><br>
                        Nuit à partir de 38£ <br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                    </p>
                </div>

                <div class="container">
                    <a href="back/display.php?source=image/hebergements/3_medium/emile-guillemot-Bj_rcSC5XfE-unsplash.jpg"><img src="image/hebergements/3_medium/emile-guillemot-Bj_rcSC5XfE-unsplash.jpg" alt=""></a>
                    <p class="notes">
                    
                    <span class="nom">Hôtel Les Mouettes</span> <br>
                         Nuit à partir de 45£ <br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </p>
                </div>

                <div class="container">
                   <a href="back/display.php?source=image/hebergements/3_medium/febrian-zakaria-M6S1WvfW68A-unsplash.jpg"> <img src="image/hebergements/3_medium/febrian-zakaria-M6S1WvfW68A-unsplash.jpg" alt=""></a>
                    <p class="notes">
                    
                    <span class="nom">Hôtel de la Mer</span> <br>
                        Nuit à partir de 39£ <br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </p>
                </div>

                <div class="container">
                   <a href="back/display.php?source=image/hebergements/3_medium/febrian-zakaria-sjvU0THccQA-unsplash.jpg"> <img src="image/hebergements/3_medium/febrian-zakaria-sjvU0THccQA-unsplash.jpg" alt=""></a>
                    <p class="notes">
                    
                        <span class="nom">Aubèrge Le Panier</span><br>
                        Nuit à partir de 50£ <br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </p>
                </div>

                <div class="container">
                   <a href="back/display.php?source=image/hebergements/3_medium/fred-kleber-gTbaxaVLvsg-unsplash.jpg"> <img src="image/hebergements/3_medium/fred-kleber-gTbaxaVLvsg-unsplash.jpg" alt=""></a>
                    <p class="notes">
                    
                        <span class="nom">Hôtel Chez Amina</span> <br>
                        Nuit à partir de 32£ <br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </p>
                </div>
                <div class="more"><strong>Afficher plus </strong> <i class ="fas fa-arrow-down"></i></div>       

            </section>

           
            <section class="populaire">
            <p id="populaires-goto" style="width : 100%"><strong>Les plus populaires <i style="color: black" class="fas fa-chart-line"></i></strong></p>

            <div class="container">
                  <a href="back/display.php?source=image/hebergements/2_large/marcus-loke-WQJvWU_HZFo-unsplash.jpg">  <img src="image/hebergements/2_large/marcus-loke-WQJvWU_HZFo-unsplash.jpg" alt=""></a>
                    <p class="notes">
                        <span class="nom">Hôtel le Soleil du matin </span><br> Nuit à partir de 128£<br><br><br><br><br><br><br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                </div>

                <div class="container">
                  <a href="back/display.php?source=image/hebergements/2_large/nicate-lee-kT-ZyaiwBe0-unsplash.jpg">  <img src="image/hebergements/2_large/nicate-lee-kT-ZyaiwBe0-unsplash.jpg" alt=""></a>
                    <p class="notes">
                        <span class="nom">Au coeur de l'eau Chambre d'hôtes</span><br> Nuit à partir de 108£<br><br><br><br><br><br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </p>
                </div>

                <div class="container">
                  <a href="back/display.php?source=image/hebergements/2_large/reisetopia-B8WIgxA_PFU-unsplash.jpg">  <img src="image/hebergements/2_large/reisetopia-B8WIgxA_PFU-unsplash.jpg" alt=""></a>
                    <p class="notes">
                        <span class="nom">Hôtel Tout Bleu Tout Blanc</span>
                        <br>Nuit à partir de 68£<br><br><br><br><br><br><br>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> </p>
                </div>

            </section>
    </section>

</section>

        <section class="activites">
             <span id="activite-goto">Activités à Marseille</span>

             <div class="simple">
                <div class="container">
                    <img src="image/activites/3_medium/florian-wehde-xW9e8gdotxI-unsplash.jpg" alt="photo">
                    <p class="notes">
                        Vieux Port
                    </p>
                </div>
                
            </div>
            <div class="double">
                <div class="container">
                    <img src="image/activites/3_medium/kevin-hikari-rV_Qd1l-VXg-unsplash.jpg" alt="photo">
                    <p class="notes">
                        Fort de Pomesgues
                    </p>
                </div>
                <div class="container">
                    <img src="image/activites/3_medium/kilyan-sockalingum-NR8-cBCN3aI-unsplash.jpg" alt="photo">
                    <p class="notes">
                        Île de Frioul
                    </p>
                </div>
            </div>

            <div class="simple">
                <div class="container">
                    
                    <img src="image/activites/3_medium/paul-hermann-QFTrLdQIRhI-unsplash.jpg" alt="photo">
                    <p class="notes">
                        Parc National des Calanques
                    </p>
                </div>
            </div>

            <div class="double">
                 <div class="container">
                    <img src="image/activites/3_medium/lena-paulin-wH2-EJoDcV0-unsplash.jpg" alt="photo">
                    <p class="notes">
                        Notre Dame de la Garde
                    </p>
                </div>
                <div class="container">
                <img src="image/activites/3_medium/reno-laithienne-QUgJhdY5Fyk-unsplash.jpg" alt="photo">
                <p class="notes">
                        Parc Longchamp
                    </p>
                </div>
            </div>

            </section>

        </section>


        <footer>
        <div class="about">
            <h4>A propos</h4><br>
            <ul>
                <li>Fonctionnement du site</li>
                <li>Condition générale de vente</li>
                <li>Données et confidentialités </li>
            </ul>
        </div>
        <div class="nos-hebergements">
            <h4>Nos hebergements</h4><br>
            <ul>
                <li>Charte qualité</li>
                <li>Soumettre votre hôtel</li>
            </ul>
        </div>
        <div class="assistance">
            <h4>Assistance</h4><br>
            <ul>
                <li>Centre d'aide</li>
                <li>Nous contacter</li>
            </ul>
        </div>
    </footer>


</body>
</html>