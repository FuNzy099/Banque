<?php
// Création de la classe titulaire
class Titulaire {
    private $nom;
    private $prenom;
    private $dateDeNaissance;
    private $ville;
    private $listeCompte = [];
    private $nbCompte;

// Méthode magique (__contruct)
    public function __construct ($nom, $prenom, $dateDeNaissance, $ville, $nbCompte){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> dateDeNaissance =  $dateDeNaissance;
        $this -> ville = $ville;
        $this -> listeCompte = [];
        $this -> nbCompte = $nbCompte;
    }

    public function getNom(){
        return $this -> nom;
    }

    public function getPrenom(){
        return $this -> prenom;
    }

    public function getDateDeNaissance(){
        return $this -> dateDeNaissance;
    }

    public function getVille(){
        return $this -> ville;
    }

    public function getNbCompte(){
        return $this -> nbCompte;
    }

    // Fonction pour calculer l'age du titulaire 
    public function getAge(){
        $dateActuel = new DateTime();
        $date2 = new DateTime($this ->dateDeNaissance);
        $age = $dateActuel -> diff($date2);
        return $age -> format(" %y Ans");
    }

    // Enssemble de fonction pour afficher les comptes du titulaire
    // Permet d'initialiser la méthode liste compte
    public function setListeCompte($listeCompte){
        $this -> listeCompte = $listeCompte;
    }

    // Permet de récuperer liste compte en format tableau
    public function getListeCompte(){
        $this -> listeCompte = [];
    }

    // Permet d'ajouter une ligne dans le tableau pour chaque compte
    public function addCompte(Compte $listeCompte){
        $this -> listeCompte[] = $listeCompte;
    }

    // Permet d'afficher les informations du titulaire et ces comptes à l'aide d'un __toString
    public function afficherCompte(){
        $result="Nom : ". $this -> getNom()." <br>
                Prenom : ".$this -> getPrenom()." <br> 
                Date de naissance : ".$this -> getDateDeNaissance()." <br>
                Age : ".$this -> getAge(). " <br>
                Ville : ".$this -> getVille()." <br>
                Nombre de compte : ".$this -> getNbCompte(). "<br>
                ************************ <br>";

        foreach ($this -> listeCompte as $val){
            $result .= $val;   // .= Permet de concaténer la valeur (titulaire. = compte)
        }
        return $result;        // Le return $result en dehors de la boucle foreach ! Si il est à l'interieur il affichera uniquement la 1er valeur du tableau
    }

    public function __toString(){
        return $this -> afficherCompte();
    }
}


?>