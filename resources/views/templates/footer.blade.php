<!-- footer -->
  <footer class="footer">
    <ul class="partenaires">
      @foreach ($partenaires as $photo)
        @foreach ($photo as $p)
          @if ($p->deleted_at == null)
            <li>
              <img  src="{{asset("storage/images/$p->chemin")}}" class="part">
            </li>
          @endif
        @endforeach
      @endforeach
    </ul>

    <ul  class="copyright">
        <li>Tous droits réservés : Les Apprentis Pas Sages © 2021  </li>
        <li>
          <a href="" class="plan">   Plan du site</a>
        </li>
    </ul>
    </footer>
</html>
