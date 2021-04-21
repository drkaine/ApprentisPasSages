<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
class Calendrier extends Model
{
    

   public $listeJour=array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
    
   public $listeMois=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
    
    public $mois;
    
    public $annee;
    
    public $dates=array();
    
    public $semaine=array();
    
 
    

    function __construct($annee=null,$mois=null)
    {
        if($mois ==null)
        {
           $mois=intval(date('m'));
        }
        
        if($annee ==null)
        {
           $annee=intval(date('Y')); 
        }
        
        $mois=$mois%12;
        
        $this->mois=$mois;
        $this->annee=$annee;
        
        $this->dates=$this->dates();
        
        $this->semaine=$this->semaine();
        
        $this->listeJour=array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
        
        $this->listeMois=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
    }
    
    function getPremierJour()
    {
        return new \DateTime("$this->annee-$this->mois-01");
    }

    
        
    
   function getSemaine(){
    $commence= $this->getPremierJour();
    $fini= $commence->modify('+1 month -1 day');
    $semaine=intval($fini->format('W'))-intval($commence->format('W')) +1;
    
    if($semaine < 0)
    {
        $semaine=intval($fini->format('W'));
    }
    
    return $semaine;
   }

function  verifMois($request)
    {
       return $this->getPremierJour()->format('Y-m')===$request->format('Y-m');
    }


    function dates()
    {
        
        $dates=array("date"=>array(),"verifMois"=>array());
        for ($j = 0; $j < 5; $j++)
        {
            
            foreach ($this->listeJour as $k=>$i)
            {
                $dates["date"][$k.$j]=$this->getPremierJour()->modify('last Monday')->modify("+".($k + $j * 7). "days");
                
                $dates["verifMois"][$k.$j]=$this->verifMois($dates["date"][$k.$j]);
                    
                        
            }
            
                
           
        }
            return $dates;
    }
    function semaine()
    {
        $this->dates();
        for ($j = 0; $j < 5; $j++)
        {
            $semaine[$j]=$this->dates["date"]["0".$j]->modify('last Year')->format('W');
        }
        return $semaine;
    }
    
    
    
    
    
    
    
    
}
