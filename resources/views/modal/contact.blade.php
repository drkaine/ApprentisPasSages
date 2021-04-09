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
        <section class="contact-section" >
          <h1 id="send-message">Envoyez nous un message, nous y répondrons le plus vite possible.</h1>
          <div class="ctc-zone">
            <div class="contact-form">
              <div>
                <form id="formulaire" method="POST">
                  <!-- csrf_field()-->       
                  <label for="fname">Nom *</label>

                  <input type="text" id="fname" name="name" placeholder="Votre nom *">

                  <label for="email">Email *</label>

                  <input type="email" id="email" name="email" placeholder="Votre email *">

                  <label for="phone">Numérot de téléphone</label>

                  <input type="tel" name="phone" id="phone" placeholder="Votre téléphone">

                  <label for="message">Sujet du message *</label>

                  <input type="text" name="subject" id="message" placeholder="Sujet du message *">

                  <label for="ctc-message">Votre message *</label>

                  <textarea id="subject" name="message" placeholder="Votre message.." style="height:100%; width:100%"></textarea><br>

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
              </div>

              <div class="email-adresse">
                <div id="icon">
                  <i class="fas fa-envelope" style="font-size:30px;color:#41046f;"></i>
                </div>

                <div id="mail-adress">
                  <a href="mailto:contact@apprentispassages.com" target="_blank"><h4>contact@apprentispassages.com</h4></a>
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