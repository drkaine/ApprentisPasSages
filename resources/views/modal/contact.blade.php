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
            <section class="contact-global">
              <div class="contact-form">
                <div>
                  <form id="formulaire" method="POST">
                    <!-- csrf_field()-->       
                    <label for="fname">Nom *</label>

                    <input type="text" id="fname" name="name" placeholder="Votre nom *" required>

                    <label for="email">Email *</label>

                    <input type="email" id="email" name="email" placeholder="Votre email *" required>

                    <label for="phone">Numéros de téléphone</label>

                    <input type="tel" name="phone" id="phone" placeholder="Votre téléphone">

                    <label for="message">Sujet du message *</label>

                    <input type="text" name="subject" id="message" placeholder="Sujet du message *" required>

                    <label for="ctc-message">Votre message *</label>

                    <textarea id="subject" name="message" placeholder="Votre message.." style="height:100%; width:100%" required></textarea><br>

                    <div class="btn-form-contact">
                      <input type="submit" value="Envoyer votre message" class = "bouton-contact">
                    </div>

                    <input type="hidden" name="contactCacher" value="1">
                  </form>
                </div>
                <article class = "coord">
                  <h1 class = 'titre-coord'>Nos coordonnées</h1>
                  <div id="info-adress">
                    <h4>Apprentis Pas Sages</h4>
                    <h5>Chalet les Carlines</h5>
                    <h5>Quartier les blancons</h5>
                    <h5>06450 Belvédère</h5>
                  </div><br/><br>
                  <a href="mailto:contact@apprentispassages.com" target="_blank" class="mail"><h4>contact@apprentispassages.com</h4></a>
                </article>
              </div>

              <div class="contact-info">
                <div class="info-general">
                  <div id="icon">
                    <i class="fas fa-phone-alt" style="font-size:30px;color:#41046f;"></i>
                  </div>

                  <div class="inf-gen-pers">
                    <div id="info-pers">
                      <div>
                        <h4>Général:</h4>
                        <div>
                          <a href="tel:+33652251766">+33 (0)6.52.25.17.66</a>
                        </div><br></br>
                      </div>
                      <div>
                        @foreach($teams as $membr)
                          @php
                            $increment=0;
                            $valide=0;
                          @endphp
                          @foreach($membreStatut as $mstatut)
                            
                            @if($mstatut->membre_id == $membr->id AND ($mstatut->statut_id ==1 OR $mstatut->statut_id ==5 OR $mstatut->statut_id ==6 OR $mstatut->statut_id ==7))
                    
                              @php
                                $valide=1;
                              @endphp
                            @endif
                          @endforeach
                          @if($valide==1)
                            <div>
                              @foreach($statu as $stat)
                                @foreach($membreStatut as $mstatut)
                                  @if($stat->id==$mstatut->statut_id AND $membr->id==$mstatut->membre_id)
                                    @php
                                        $increment++;
                                    @endphp
                                    @if($increment>1),&nbsp;
                                    @endif{!! $stat->nom!!}
                                  @endif
                                @endforeach
                              @endforeach
                              &nbsp;:<br>
                              {!!($membr->prenom)!!}&nbsp;{!!($membr->nom)!!}
                            </div>
                            <div>
                              <a href="tel:{!!($membr->telephone)!!}">{!!($membr->telephone)!!}</a>
                            </div>
                            <br>
                            <br>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>   