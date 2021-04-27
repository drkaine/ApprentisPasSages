<form action="" method="post">
    {{csrf_field()}}
  
    <div class="Calendrier">
      <div class="CalendrierNav">
          
          <div><button name="flecheAnnee" value="-1">&lt;&lt;</button></div>
          <div><button name="flecheMois"  value="-1">&lt;</button></div>
            
            <div class="SelectionDate">
                <div class="Selectionneur">
                    <select name="selectAnnee">
                        @for($i=0;$i<7;$i++)

                            <option value="{{$calendrier->annee+$i-3}}"
                            @if($i==3)
                                selected
                            @endif
                        >{{$calendrier->annee+$i-3}}</option>
                        @endfor
                    </select>
                    <select name="selectMois">

                        @for($i=0;$i<12;$i++)
                            @php $m=$i-1;@endphp
                            <option value="{{$i+1}}"
                            @if($calendrier->mois-1==$i)
                                selected
                            @endif>{{$calendrier->listeMois[$i]}}</option>
                        @endfor
                    </select>
                </div>
                <button class="Actionneur">Changer</button>
            </div>
            
            <div><button name="flecheMois" value="1">&gt;</button></div>
            <div><button name="flecheAnnee" value="1">&gt;&gt;</button></div>
          
        

        </div>
      <div class="CalendrierBody">
        <div class="Jours">
            @foreach ($calendrier->listeJour as $j)
                <div>{!!($j)!!}</div>
            @endforeach
        </div>
        <div class="Semaines">
    
            @for ($j = 0; $j < 5; $j++)
                     <div>Semaine {{$calendrier->semaine[$j]}} </div>
            @endfor
        
        </div>

        <div class="Date">
         @for ($j = 0; $j < 5; $j++)
                    

                @foreach ($calendrier->listeJour as $k=>$i)

                    <div class="@if($calendrier->dates['verifMois'][$k.$j]==1)calendrierMois
                                @else autreMois
                                @endif
                                @if($k==0)
                                    @php $dateCalen=$calendrier->dates['date'][$k.$j]->modify('+1 year'); @endphp
                                @endif
                                @foreach($programmation as $prog)
                                    @php 
                                            $dateD=strtotime($prog->dateDebut);
                                            $dateF=strtotime($prog->dateFin);
                                            $dateD=date('Y-m-d', $dateD);
                                            $dateF=date('Y-m-d', $dateF);
                                            $dateCalen=$calendrier->dates['date'][$k.$j]->format('Y-m-d');
                                    @endphp    
                                    @if($dateCalen>=$dateD and $dateCalen<=$dateF) calendrierEvent @endif
                                @endforeach">
                        @php
                            echo $calendrier->dates["date"][$k.$j]->format('d'); 
                        @endphp
                        
                    </div>
                @endforeach
            @endfor

          </div>
      </div>
      <button class="CalendrierFooter" name="aujourdhui" value="1">Aujourd'hui</button>
    </div>
</form>