<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>RecyCalli</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/style.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/responsive.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/jquery.mCustomScrollbar.min.css'); }}>


    
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section" style="background-repeat: no-repeat">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="/"><img src={{ URL::asset('images/logo.png'); }}></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about">Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services">Boutique</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact">Contact</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="index">Accueil</a></li>
                     <li><a href="about">Qui sommes-nous ?</a></li>
                     <li><a href="services">Boutique</a></li>
                     <li><a href="blog">Blog</a></li>
                     <li><a href="partners">Points de collecte</li>
                     <li><a href="contact">Contact</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">RecyCalli</h1>
                        <p class="banner_text">Créer l'événemment, sauver la planète.</p>
                        <div class="read_bt"><a href="about">Nous découvrir</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">L'Upcycling</h1>
                        <p class="banner_text">De la tendance à la nécessité, découvrez tout sur l'Upcycling.</p>
                        <div class="read_bt"><a href="blog">Notre blog</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Réservez vos vêtements</h1>
                        <p class="banner_text">Une grande variété des vêtements déjà réservables pour notre prochain vide-dressing.</p>
                        <div class="read_bt"><a href="services">Réserver maintenant</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- ici devrait se trouver le compte à rebours, ce qui fait le lien en tre les deux parties, dessus et dessous, LucasG 09/01-->
      {{-- compteur section start --}}
      <div class='compteur-section'>
         <div class="compteur-title">Compte à rebours avant notre prochain événement :</div>
         <table class="compteur-table">
            <tbody>
               <tr>
                  <td id="days" class="compteur-numbers"></td>
                  <td id="hours" class="compteur-numbers"></td>
                  <td id="minutes" class="compteur-numbers"></td>
                  <td id="secondes" class="compteur-numbers"></td>
               </tr>      
                  <script type="text/javascript">
                  var days=document.getElementById("days");
                  var hours=document.getElementById("hours");
                  var minutes=document.getElementById("minutes");
                  var secondes=document.getElementById("secondes");
                  function Rebour() {
                     var date1 = new Date();
                     var date2 = new Date ("Mar 3, 2023 11:00:00");
                     var sec = (date2 - date1) / 1000;
                     var n = 24 * 3600;
                     if (sec > 0) {
                        j = Math.floor (sec / n);
                        h = Math.floor ((sec - (j * n)) / 3600);
                        mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
                        sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
                        days.innerHTML = j;
                        hours.innerHTML = h;
                        minutes.innerHTML = mn;
                        secondes.innerHTML = sec;
                        window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
                     }
                     tRebour=setTimeout ("Rebour();", 1000);
                  }
                  Rebour();
                  </script>
               <tr>
                  <td><span class="compteur-name-numbers">jours</span></td>
                  <td><span class="compteur-name-numbers">heures</span></td>
                  <td><span class="compteur-name-numbers">minutes</span></td>
                  <td><span class="compteur-name-numbers">secondes</span></td>
               </tr>
            </tbody>
         </table>
      </div>
      {{-- compteur section end --}}
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">En attendant le prochain vide-dressing...</h1>
            <p class="services_text">Découvrez tout ce que nous avons de mieux à offrir !</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/img-1.png" class="services_img"></div>
                     <p class="services_text">Réservez vos vêtements dès maintenant</p>
                     <div class="btn_main"><a href="services">Réservation</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-2.png" class="services_img"></div>
                     <p class="services_text">Renseignez-vous sur l'actualité de l'upcycling et bien plus !</p>
                     <div class="btn_main active"><a href="blog">Blog</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-3.png" class="services_img"></div>
                     <p class="services_text">Liste des dépôts pour vos articles</p>
                     <div class="btn_main"><a href="partners">Points de collecte</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <!-- cette section ci-desosus fait compltement redite avec la page du même nom (about), elle me semble assez inutile - LucasG, 09/01 -->
      <!-- <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">Voir notre vidéo</h1>
            <p class="blog_text">Découvrez en un rapide coup d'œil notre événement, ses participants et bien d'autres choses</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Nos partenaires</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Un espace associatif et collaboratif situé à Bordeaux Maritime au 28 rue Pierre Baour. Utilisé pour des ateliers d'artiste, d'artisans, comme un espace de co-working ou comme bar, les Berges de la Lune ont eu l'immense amabilité de laisser RecyCalli s'installer dans leurs locaux.
                              </p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/bergeslune.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Les Berges de la lune</h4>
                                 <p class="customer_text">Lieu</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                     <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Un espace associatif et collaboratif situé à Bordeaux Maritime au 28 rue Pierre Baour. Utilisé pour des ateliers d'artiste, d'artisans, comme un espace de co-working ou comme bar, les Berges de la Lune ont eu l'immense amabilité de laisser RecyCalli s'installer dans leurs locaux.
                              </p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/bergeslune.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Les Berges de la lune</h4>
                                 <p class="customer_text">Lieu</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                     <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Un espace associatif et collaboratif situé à Bordeaux Maritime au 28 rue Pierre Baour. Utilisé pour des ateliers d'artiste, d'artisans, comme un espace de co-working ou comme bar, les Berges de la Lune ont eu l'immense amabilité de laisser RecyCalli s'installer dans leurs locaux.
                              </p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/bergeslune.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Les Berges de la lune</h4>
                                 <p class="customer_text">Lieu</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Pourquoi venir à Recycalli ?</h1>
            <p class="choose_text">Car Recycalli est un événement visant à faire découvrir l'upcycling à une plus grande audience. À travers nos participants et le lieu chaleureux à notre disposition, nous voulons renforcer ce côté humain pour les novices.</p>
            <div class="read_bt_1"><a href="about">Read More</a></div>

         </div>
      </div>
      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_btn_main">
               <input type="text" class="mail_text" placeholder="Entrez votre mail" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
            <div class="location_main">
               <div class="call_text"><img src="images/mail-icon.png"></div>
               <div class="call_text"><a href="#">recycalli@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>