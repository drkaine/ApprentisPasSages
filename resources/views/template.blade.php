<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apprentis Pas Sages</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <!--Bootstrap + JQ-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Rubik|Vidaloka&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Handlee&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Give+You+Glory&display=swap" rel="stylesheet">





<!--JQCloud-->

<link rel="stylesheet" href="/js/jQCloud/dist/jqcloud.min.css">

    <!--Base-->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
<link href="{{ asset('css/accueil.css')}}" rel="stylesheet">
    <link href="{{ asset('css/about.css')}}" rel="stylesheet">
<link href="{{ asset('css/contact.css')}}" rel="stylesheet">
    <link href="{{ asset('css/formation.css')}}" rel="stylesheet">
<link href="{{ asset('css/galerie.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  </head>




    <section class="home-container">
      <header class="header">

        <nav>
          <ul>
            <li class="logo">
                <img
                  class="logo-fox"
                  src="{{asset("images/fox_logo.png")}}"  alt="logo"/>
              </li>
            <li class="logo">
              <img
                class="logo-apprentis"
                src="{{asset("images/apprentis_pas_sages_banniere.png")}}"  alt="logo"/>
            </li>
            <li class="btn"><span class="fas fa-bars"></span></li>
            <div class="items">
              <li><a href="/" >Accueil</a></li>
              <li><a href="/association">Qui sommes Nous?</a></li>
              <li><a href="/galerie">Galerie photo</a></li>
              <li><a href="/coup-coeur">Coups de coeur</a></li>




              <li><a data-toggle="modal" data-target="#ContactModal" href="">Contact</a></li>


              <!-- Modal -->
              <div id="ContactModal" class="modal fade" role="dialog">
                <div class="contactMod modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Contacter</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">







                    <!-- galerie -->
                    <section class="contact-section" >
                       <h1 id="send-message">Envoyez nous un message, nous y répondrons le plus vite possible.</h1>
                      <div class="ctc-zone">

                        <div class="contact-form">

                          <div>
                          <form id="formulaire" method="POST" action=""  >
                              @csrf
                              <label for="fname">Nom *</label>

                              <input type="text" id="fname" name="name" placeholder="Votre nom *">

                              <label for="email">Email *</label>

                              <input type="email" id="email" name="email" placeholder="Votre email *">

                              <label for="phone">Numérot de téléphone</label>

                              <input type="tel" name="phone" id="phone" placeholder="Votre téléphone">

                              <label for="message">Sujet du message *</label>

                              <input type="text" name="subject" id="message" placeholder="Sujet du message *">

                              <label for="ctc-message">Votre message *</label>

                              <textarea id="subject" name="message" placeholder="Votre message.." style="height:100%; width:100%"></textarea>
                              <br>
                              <div class="btn-form-contact">
                                <input type="submit" value="Envoyer votre message">

                               </div>
                              <input type="hidden" name="contactCacher" value="1">
                            </form>
                          </div>

                        </div>
                        <div class="contact-info">
                          <h1>Nos coordonnées</h1>

                          <div class="adresse">
                            <div id="icon">
                              <i class="fas fa-map-marked-alt" style="font-size:30px;color:#41046f;"></i>
                            </div>
                            <div id="info-adress"><h4>Apprentis Pas Sages</h4>
                                  <h5>Chalet les Carlines</h5>
                                  <h5>Quartier les blancons</h5>
                                  <h5>06450 Belvédère</h5>
                            </div>

                            <div>
                            </div>

                          </div>

                          <div class="email-adresse">
                              <div id="icon">
                                  <i class="fas fa-envelope" style="font-size:30px;color:#41046f;"></i>
                              </div>
                              <div id="mail-adress">
                                <a href="mailto:contact@apprentispassages.com" target="_blank"><h4>contact@apprentispassages.com</h4></a>
                              </div>

                              <div>
                              </div>

                          </div>

                          <div class="info-general">
                              <div id="icon">
                                <i class="fas fa-phone-alt" style="font-size:30px;color:#41046f;"></i>
                              </div>
                              <div class="inf-gen-pers">
                                <div id="info-pers">

                                  <div>
                                    <div>Général:</div>
                                    <div>+33 (0)6.52.25.17.66</div>
                                  </div>

                                  <div>
                                      <div>Presidente: <br>
                                        Laetitia DICKA DICKA</div>
                                      <div>06.59.88.45.45</div>
                                  </div>

                                  <div>
                                    <div>Trésorier, Coordinateur/trice : <br>
                                      Rémi LANNEY RICCI</div>
                                    <div>06.20.82.70.88</div>
                                  </div>

                                  <div>
                                    <div>Secrétaire : <br>
                                      Claire Michelet</div>
                                    <div>06.22.34.33.85</div>
                                  </div>

                                  <div>
                                    <div>Secrétaire : <br>
                                    Bouzidi Gharoual</div>
                                    <div>06.28.33.58.56</div>
                                  </div>

                                  <div>
                                    <div>Coordinateur/trice :
                                    <br>
                                      Samantha LANNEY RICCI</div>
                                    <div>06.52.25.17.66</div>
                                  </div>
                                </div>
                              </div>

                              <div>

                              </div>
                          </div>
                        </div>
                      </div>
                    </section>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>

                </div>
                           </div>

              <li><a href="prestations" class="dropdown-toogle" data-toggle="dropdown" aria-expanded="true">Prestations</a>
            <ul class="dropdown-menu">
                @foreach ($catalogues as $catalogue)
                        <li><a href="prestation">{{ $catalogue->nom}}</a></li>
                @endforeach
            </ul>
            </li>
            </div>
            <li class="search-icon">
              <input type="search" placeholder="Search" />
              <label class="icon">
                <span class="fas fa-search"></span>
              </label>
            </li>
          </ul>
        </nav>

          <script>
          $("nav ul li.btn span").click(function () {
            $("nav ul div.items").toggleClass("show");
            $("nav ul li.btn span").toggleClass("show");
          });
          </script>
      </header>
      <!-- fin header -->

      @yield("content")


    <!-- footer -->
      <footer class="footer">



        <div class="contact">
            <img class="img-logo" src="images/apprentis_pas_sages_banniere.png"  alt="">
 <!--<form class="btn-contact" action="">
            <button class="btn-contact-us" data-toggle="modal" data-target="#ContactModal">est</button>
        </form>-->
                <a class="btn-contact-us"       data-toggle="modal" data-target="#ContactModal">Contactez-nous</a>

          <ul  class="social-media-links">
            <li>
              <!-- twitter -->
              <a href="https://twitter.com/intent/tweet?text=blabla&url=http%3A%2F%2Fwww.apprentispassages.com">
                <svg
                  class="glow"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 30 30"
                >
                  <path
                    class="st0"
                    d="M9.5 27.1c11.2 0 17.4-9.3 17.4-17.4 0-0.3 0-0.5 0-0.8 1.2-0.9 2.2-1.9 3-3.2 -1.1 0.5-2.3 0.8-3.5 1 1.3-0.8 2.2-2 2.7-3.4 -1.2 0.7-2.5 1.2-3.9 1.5 -1.1-1.2-2.7-1.9-4.5-1.9 -3.4 0-6.1 2.7-6.1 6.1 0 0.5 0.1 0.9 0.2 1.4C9.7 10.1 5.2 7.7 2.2 4 1.7 4.9 1.4 6 1.4 7.1c0 2.1 1.1 4 2.7 5.1 -1 0-1.9-0.3-2.8-0.8 0 0 0 0.1 0 0.1 0 3 2.1 5.4 4.9 6 -0.5 0.1-1.1 0.2-1.6 0.2 -0.4 0-0.8 0-1.1-0.1 0.8 2.4 3 4.2 5.7 4.2 -2.1 1.6-4.7 2.6-7.6 2.6 -0.5 0-1 0-1.5-0.1C2.8 26.1 6 27.1 9.5 27.1"
                  />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                  <path
                    class="st0"
                    d="M9.5 27.1c11.2 0 17.4-9.3 17.4-17.4 0-0.3 0-0.5 0-0.8 1.2-0.9 2.2-1.9 3-3.2 -1.1 0.5-2.3 0.8-3.5 1 1.3-0.8 2.2-2 2.7-3.4 -1.2 0.7-2.5 1.2-3.9 1.5 -1.1-1.2-2.7-1.9-4.5-1.9 -3.4 0-6.1 2.7-6.1 6.1 0 0.5 0.1 0.9 0.2 1.4C9.7 10.1 5.2 7.7 2.2 4 1.7 4.9 1.4 6 1.4 7.1c0 2.1 1.1 4 2.7 5.1 -1 0-1.9-0.3-2.8-0.8 0 0 0 0.1 0 0.1 0 3 2.1 5.4 4.9 6 -0.5 0.1-1.1 0.2-1.6 0.2 -0.4 0-0.8 0-1.1-0.1 0.8 2.4 3 4.2 5.7 4.2 -2.1 1.6-4.7 2.6-7.6 2.6 -0.5 0-1 0-1.5-0.1C2.8 26.1 6 27.1 9.5 27.1"
                  />
                </svg>
              </a>
            </li>
            <li>
              <!-- facebook -->
              <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.apprentispassages.com">
                <svg
                  class="glow"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 30 30"
                >
                  <path
                    class="st0"
                    d="M28.3 0.1H1.7c-0.9 0-1.6 0.7-1.6 1.6v26.5c0 0.9 0.7 1.6 1.6 1.6H16V18.4h-3.9v-4.5H16v-3.3c0-3.9 2.4-5.9 5.8-5.9 1.6 0 3.1 0.1 3.5 0.2v4l-2.4 0c-1.9 0-2.2 0.9-2.2 2.2v2.9h4.5l-0.6 4.5h-3.9v11.5h7.6c0.9 0 1.6-0.7 1.6-1.6V1.7C29.9 0.8 29.2 0.1 28.3 0.1z"
                  />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                  <path
                    class="st0"
                    d="M28.3 0.1H1.7c-0.9 0-1.6 0.7-1.6 1.6v26.5c0 0.9 0.7 1.6 1.6 1.6H16V18.4h-3.9v-4.5H16v-3.3c0-3.9 2.4-5.9 5.8-5.9 1.6 0 3.1 0.1 3.5 0.2v4l-2.4 0c-1.9 0-2.2 0.9-2.2 2.2v2.9h4.5l-0.6 4.5h-3.9v11.5h7.6c0.9 0 1.6-0.7 1.6-1.6V1.7C29.9 0.8 29.2 0.1 28.3 0.1z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <!-- google+ -->
              <a href="https://plus.google.com/up/?continue=https://plus.google.com/share?url%3Dhttp://www.apprentispassages.com">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-plus" class="svg-inline--fa fa-google-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256,8C119.1,8,8,119.1,8,256S119.1,504,256,504,504,392.9,504,256,392.9,8,256,8ZM185.3,380a124,124,0,0,1,0-248c31.3,0,60.1,11,83,32.3l-33.6,32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9,0-77.2,35.5-77.2,78.1S142.3,334,185.3,334c32.6,0,64.9-19.1,70.1-53.3H185.3V238.1H302.2a109.2,109.2,0,0,1,1.9,20.7c0,70.8-47.5,121.2-118.8,121.2ZM415.5,273.8v35.5H380V273.8H344.5V238.3H380V202.8h35.5v35.5h35.2v35.5Z"></path></svg>
              </a>
            </li>
            <li>
              <!-- linkedin -->
              <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwww.apprentispassages.com&summary=blabla">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" class="svg-inline--fa fa-linkedin fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
              </a>
            </li>
        </div>
          </ul>
            <ul class="partenaires">
                @foreach ($partenaires as $photo)
                    @foreach ($photo as $p)
                        <li><img  src="{{asset("images/$p->chemin")}}"  width = "100" height="100" class="part">

                    </li>
                    @endforeach
                @endforeach
                </ul>
                <ul  class="copyright">
                    <li>Tous droits réservés : Les Apprentis Pas Sages © 2021  </li>
                    <li><a href="accueil" class="plan">   Plan du site</a></li>
               </ul>
              </ul>
          </ul>
        </div>
      </footer>
    </div>

</html>
