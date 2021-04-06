

<!-- footer -->
<footer class="footer">

      </ul>
        <ul class="partenaires">
                @foreach ($partenaires as $photo)
                    @foreach ($photo as $p)
                        <li><img  src="{{asset("storage/images/$p->chemin")}}"  width = "100" height="100" class="part">

                    </li>
                    @endforeach
                @endforeach
                </ul>
            <ul  class="copyright">
                <li>Tous droits réservés : Les Apprentis Pas Sages © 2021  </li>
                <li><a href="" class="plan">   Plan du site</a></li>
           </ul>
          </ul>
      </ul>
    </div>
  </footer>
</div>

</html>
