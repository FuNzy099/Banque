<?php
// Création de la classe compte
class Compte {
    private $libelle;
    private $soldeInitial;
    Private $devise;
    private $titulaire;

    public function __construct(Titulaire $titulaire, $libelle, $soldeInitial = 0, $devise){
        $this -> libelle = $libelle;
        $this -> soldeInitial = $soldeInitial;
        $this -> devise = $devise;
        $this -> titulaire = $titulaire;
        $this -> titulaire -> addCompte($this);
    }

    public function getLibelle(){
        return $this -> libelle;
    }

    public function getSoldeInitial(){
        return $this -> soldeInitial;
    }

    public function getDevise(){
        return $this -> devise;
    }

    public function crediter($somme){
        $this -> soldeInitial += $somme;
        return "Créditer de ".$somme." € <br>
        Votre nouveau solde est de ".$this -> soldeInitial." € <br>";
    }

    public function debiter($somme){
        $this -> soldeInitial -= $somme;
        return "Débiter de ".$somme." € <br>
        Votre nouveau solde est de ".$this -> soldeInitial." € <br>";
    }

    public function virement($compteCible, $somme){
        $this -> debiter($somme);
        $compteCible -> crediter($somme);
    }

    public function __toString(){
        return $this -> getLibelle()." ".$this -> getSoldeInitial()." ".$this -> getDevise()." <br>";
    }
}

?>