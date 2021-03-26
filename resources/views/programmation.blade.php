 <div clas="Programme"><h1>
     {{$cProg->nom}}
     {{$cProg->date_debut}}
     
     
     
    </h1>
     <br>
     @foreach($action as $act)
     
     @if($act->id==$cProg->id)
     {{$act->nom}}
     Big Chungus
    @endif
    @endforeach
</div> 
        