<?php
$int = 56;
$float = 1.176;
$string = "Hello World";
$boolean = false;
$null = null;
$array = ["Pomme", "Poire", "Orange"];
$associativeArray = [
    "Valeur 1" => "Raisin",
    "Valeur 2" => "Ananas"
];

$prenom = "Fatima";
$nom = "Amara";
$dateDeNaissance = "20-01-1990";

$eleve = [
    "prenom" => "Fatima",
    "nom" => "Amara"
];

$eleve2 = [
    "prenom" => "Liudmyla",
    "name" => "Vykliuk"
];
/* Entrer les informations de cette façon  augmente le risque de faire des erreurs, ici par exemple le premier élève à une clé nom tandis que l'autre à une clé name
Pour éviter ces erreurs nous allons donc créer des classes
*/

class Personne{
    public string $nom;
    public string $prenom;
    
    function __construct(string $nom, string $prenom) {
        //echo "<p>J'ai créé une personne !</p>";
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    function direBonjour()
    {
        echo "<p>Bonjour, je m'appelle " . $this->nom . " " . $this->prenom . ".</p>";
    }
}

class Eleve extends Personne{
    public string $dateDeNaissance;
    // Création d'une propriété statique qui sera commune à tous mes élèves
    public static int $nombre = 0;

    function __construct(string $nom, string $prenom, string $dateDeNaissance) {
        parent::__construct($nom, $prenom);

        //echo "<p>J'ai créé un élève !</p>";
        $this->dateDeNaissance = $dateDeNaissance;
        self::$nombre++;
    }   
}

class Professeur extends Personne{
    public string $matiere;
    public string $email;

    function __construct(string $nom, string $prenom, string $matiere, string $email) {
        parent::__construct($nom, $prenom);

        //echo "<p>J'ai créé un prof !</p>";
        $this->matiere = $matiere;
        $this->email = $email;
    }   
    function direBonjour()
    {
        echo "<p>Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . ". Je suis votre professeur de " . $this->matiere . ".</p>";
    }
}

$personne1 = new Personne("Valtat", "Amandine");

$professeur1 = new Professeur("Butin", "Patrick", "Musique", "patrick.butin@conservatoire-maurepas.fr");

$eleve = new Eleve("Toto", "Patate", "1995-10-02");
$eleve2 = new Eleve("Tatie", "Potato", "1985-11-03");
$eleve3 = new Eleve("Mommy", "Batata","1983-06-01");

$professeur1->direBonjour();
$personne1->direBonjour();
$eleve->direBonjour();
$eleve2->direBonjour();
$eleve3->direBonjour();

echo "<p>Voici le nombre total d'élèves : " . Eleve::$nombre . "</p>";


/*$eleve = new Eleve;
$eleve->nom = "Toto";
$eleve->prenom = "Patate";
$eleve->dateDeNaissance = "1995-10-02";
*/

/*
class Formation{
    public string $organisme;
    public string $intitule;
    public int $dureeEnMois;
    public string $langage;
    public string $framework;
    public string $dateDeDebut;
    public int $placesDisponibles;

    function __construct(string $organisme, string $intitule, int $dureeEnMois, string $langage, string $framework, string $dateDeDebut, int $placesDisponibles)
    {
        $this->organisme = $organisme;
        $this->intitule = $intitule;
        $this->dureeEnMois = $dureeEnMois;
        $this->langage = $langage;
        $this->framework = $framework;
        $this->dateDeDebut = $dateDeDebut;
        $this->placesDisponibles = $placesDisponibles;
    }
    function infosFormations(){
        echo "<h3>" . $this->organisme . "</h2><p><ul><li>Intitulé/Description : " . $this->intitule ."</li><li>Durée de la formation : ". $this->dureeEnMois ." mois</li><li>Langages enseignés : " . $this->langage .  "</li><li>Frameworks enseignés : " . $this->framework . "</li><li>Date de début : " . $this->dateDeDebut . "</li><li>Places disponibles : " . $this->placesDisponibles . "</li></ul></p><br>";
    }
}

$formation1 = new Formation("La Manu", "POEC PHP", 3, "PHP/HTML/CSS/JavaScript/SQL", "Symfony", "16 novembre 2022", 14);

$formation2 = new Formation("42", "Cursus unique jusqu'au 1er cercle puis spécialisation", 36, "C", "NC", "Piscine de février le 01/02/2020 pour la rentrée d'avril", 110 );

$formation1->infosFormations();
$formation2->infosFormations();
*/

//TODO: Créer classe promo, désigner un professeur principal, accéder aux infos du prof principal et aux élèves de la classe
?>