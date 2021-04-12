<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Apprentis Pas Sages</title>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}

    <!--    CKEDITOR !-->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet"> --}}

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
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"/>
  </head>

  
  <header class="header">

    <nav>
      <ul>
        <li class="logo">
          <img class="logo-fox" src="{{asset('storage/images/fox_logo.png')}}" alt="logo"/>
        </li>

        <li class="logo">
          <img class="logo-apprentis" src="{{asset('storage/images/apprentis_pas_sages_banniere.png')}}" alt="logo"/>
        </li>
        
        <li class="btn">
          <span class="fas fa-bars"></span>
        </li>
      
        <div class="items">
          <li>
            <a href="{{route('Accueil-Admin')}}" >Accueil</a>
          </li>

          <li>
            <a href="{{route('Association-Admin')}}">Qui sommes Nous?</a>
          </li>
          
          <li>
            <a href="{{route('Galerie-Admin')}}">Galerie photo</a>
          </li>
          
          <li>
            <a href="{{route('coupDeCoeur-Admin')}}">Coups de coeur</a>
          </li>

          <li>
            <a data-toggle="modal" data-target="#ContactModal" href="">Contact</a>
          </li>

          @include("modal/contact")

          <li>
            <a href="prestations" class="dropdown-toogle" data-toggle="dropdown" aria-expanded="true">Prestations</a>
            <ul class="dropdown-menu">
              @foreach ($catalogues as $catalogue)
                <li>
                  <a href="{{route('TemplateController.prestationsAdmin', ['prestation'=>$catalogue->nom])}}">{{ $catalogue->nom}}</a>
                </li></br>
              @endforeach

              <li>
                <a href="{{route('TemplateController.allPrestationsAdmin')}}">Tout les catalogues</a>
              </li>
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

  @include("templates/foot")