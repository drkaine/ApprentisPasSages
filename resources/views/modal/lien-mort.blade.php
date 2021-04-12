<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Signaler un lien mort !</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <div class="modal-body">
    <form   action="">
      <select  size=1 >
        <option selected disabled>Veuillez choisir le lien mort !</option>
        @foreach ($cdc as $c)
          <option value="{{ $c->id }}" >{{ $c->nom }}</option>
        @endforeach
      </select><br />

      <div class="btn-form-contact">
        <input type="submit" value="Envoyer">
      </div>
    </form>
  </div>
  
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>