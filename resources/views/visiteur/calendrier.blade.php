<form action="" method="post">
    <div class="Calendrier">
      <div class="CalendrierNav">
            <a></a>
            <select name="selectAnnee">
                @for($i=0;$i<7;$i++)
                    
                    <option value="annee$i"
                    @if($i==3)
                        selected
                    @endif
                >{{$calendrier->annee+$i-3}}</option>
                @endfor
            </select>
            <select name="selectMois">
                @for($i=0;$i<12;$i++)
                    <option value="mois{{$i}}"
                    @if($calendrier->mois-1==$i)
                        selected
                    @endif>{{$calendrier->listeMois[$i]}}</option>
                @endfor
            </select>
            <a></a>
  
        </div>
      <div class="CalendrierBody">
        <div class="Jours">
            @foreach ($calendrier->listeJour as $j)
                <div>{!!($j)!!}</div>
            @endforeach
        </div>
        <div class="Semaines">
    
            @for ($j = 0; $j < 5; $j++)
                     <div>{{$calendrier->semaine[$j]}} </div>
            @endfor
        
        </div>

        <div class="Date">
         @for ($j = 0; $j < 5; $j++)
                    

                @foreach ($calendrier->listeJour as $k=>$i)

                    <div class="@if($calendrier->dates['verifMois'][$k.$j]==1)
                                    calendrierMois
                                @else
                                    
                                    autreMois
                                @endif    
                    ">
                        @php
                            echo $calendrier->dates["date"][$k.$j]->format('d'); 
                        @endphp
                        
                    </div>
                @endforeach
            @endfor

          </div>
      </div>
    </div>
</form>