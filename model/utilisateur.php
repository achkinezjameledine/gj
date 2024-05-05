<?php
class User
{
    private $id = null;
    private $firstName = null;
    private $lastName = null;
    private $email = null;
    private $role = null;
    private $dateEmbauche = null; // Pour les administrateurs
    private $niveauAcces = null; // Pour les administrateurs
    private $numeroEtudiant = null; // Pour les étudiants
    private $niveauEtude = null; // Pour les étudiants
    private $specialisation = null; // Pour les étudiants
    private $pays = null;
    private $birthdate = null;
    private $telephone = null;
    private $age = null;
    private $gender = null;
    private $pw = null;

    // Getters and setters...


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    public function getNiveauAcces()
    {
        return $this->niveauAcces;
    }

    public function setNiveauAcces($niveauAcces)
    {
        $this->niveauAcces = $niveauAcces;
    }

    public function getNumeroEtudiant()
    {
        return $this->numeroEtudiant;
    }

    public function setNumeroEtudiant($numeroEtudiant)
    {
        $this->numeroEtudiant = $numeroEtudiant;
    }

    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    public function setNiveauEtude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;
    }

    public function getSpecialisation()
    {
        return $this->specialisation;
    }

    public function setSpecialisation($specialisation)
    {
        $this->specialisation = $specialisation;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getPw()
    {
        return $this->pw;
    }

    public function setPw($pw)
    {
        $this->pw = $pw;
    }
    public function __construct($firstName, $lastName, $email, $role, $pays, $birthdate, $telephone, $age, $gender, $pw)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->role = $role;
        $this->pays = $pays;
        $this->birthdate = $birthdate;
        $this->telephone = $telephone;
        $this->age = $age;
        $this->gender = $gender;
        $this->pw = $pw;
    }
}
?>
