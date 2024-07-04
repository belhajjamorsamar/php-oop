<?php 

class Vehicule {
    //attribut
    public $marque ;
    private $__volumeCarburant;
    protected $__estReparer;
    //Function*

    public function __construct(){
        $this->__volumeCarburant=20;
    
    }

   

    public function setVolumeCarburant($val){
        $this->__volumeCarburant = $val;
    }

    public function demarrer()
    {
        if($this->_ControleVolumeCarburant()){
            echo ' le Vehicule démarre';
            return true ;
           
        }
        echo " la reservoire est vide...." ;}

    public function getVolumeCarburant()
    {
        return $this->__volumeCarburant;
    }

    public function _ControleVolumeCarburant(){
        return ( $this->__volumeCarburant>0);
    }
    public function __destruct(){
        $this->__volumeCarburant=0;
    }


}
 
class Voiture extends Vehicule{
    
}

//Decalartion du class

/*$monPremierVoiture= new Vehicule();
$monPremierVoiture->marque="mercedes";
echo ($monPremierVoiture->marque);
$monPremierVoiture->setVolumeCarburant(30);
$valueVolume=$monPremierVoiture->getVolumeCarburant();
echo $valueVolume;
$monPremierVoiture->demarrer();*/
$mondeuxiemeVoiture=new Vehicule;
echo $mondeuxiemeVoiture->getVolumeCarburant();
//echo $mondeuxiemeVoiture->__volumeCarburant;
