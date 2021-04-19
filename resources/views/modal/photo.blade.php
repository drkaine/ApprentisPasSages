<div class="carroussel">
  {{-- <div id="gauche">
    <h1><button onclick="gauche()" class="fas fa-arrow-left"></h1>
      <script>
        function gauche() 
        {
          document.getElementById(myModal{{$compte - 1}});
        }
        </script>
  </div> --}}
  <div class="modal-p">
    <img src="{{ asset("storage/images/$p->chemin")}}" alt = "" class="modal-photo">
  </div>
  {{-- <div class="droite">
    <h1><button onclick="droite()" class="fas fa-arrow-right"></h1>
    <script>
      function droite() 
      {
        document.getElementById(myModal{{$compte + 1}});
      }
      </script>
  </div> --}}
</div>