<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
class Calendrier extends Model
{
    

   public $listeJour=array();
    
   public $listeMois=array();
    
    public $mois;
    
    public $annee;
    
    public $dates=array();
    
    public $semaine=array();
    
 
    public $flecheMois;
    
    public $flecheAnnee;

    function __construct($annee=null,$mois=null,$flecheMois=0,$flecheAnnee=0,$aujourdhui=NULL)
    {
        if($mois ==null)
        {
           $mois=intval(date('m'));
        }
        
        if($annee ==null)
        {
           $annee=intval(date('Y'));
        }
        
        if($flecheMois ==null)
        {
           $flecheMois=0;
        }
        
        if($flecheAnnee ==null)
        {
           $flecheAnnee=0;
        }
        
        if($aujourdhui ==null)
        {
           $aujourdhui=0;
        }
        
        $this->mois=$mois;
        
        $this->annee=$annee;
        
        
        
        $this->flecheMois=$flecheMois;
        
        $this->flecheAnnee=$flecheAnnee;
        
        if($this->flecheAnnee!=0 or $this->flecheMois!=0)
            {
                $ma=$this->changeDate();
                $this->mois=$ma[0];
                $this->annee=$ma[1];
                
            }
        
        if($aujourdhui==1)
        {
            $this->mois=intval(date('m'));
            $this->annee=intval(date('Y'));
        }
        
        $this->listeJour=array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
        
        $this->dates=$this->dates();
        
        $this->semaine=$this->semaine();
        
        $this->listeMois=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        
    }
    
    function getPremierJour()
    {
        return new \DateTime("$this->annee-$this->mois-01");
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
            
            for ($k=0;$k <7 ; $k++)
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
    
    function changeDate()
    {
        $change=array();
        $m=$this->mois+$this->flecheMois;
        $a=$this->annee+$this->flecheAnnee;
        if($m>12)
        {
            $m=1;
            $a++;
        }
        else if($m<1)
            {
                $m=12;
                $a--;
            }
        return $change=array($m,$a);
    }
    
    
    
    
    
}
