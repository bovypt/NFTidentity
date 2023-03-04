<?php



class NFTidentitee{

    private $Nom;
    private $Prenom;
    private $DateDeNaissance;

    public function set_Nom ($s)
    {
        if (strlen($s) == 0) exit("Le nom est obligatoire");
        $this->Nom = $s;
    }

    public function set_Prenom ($s)
    {
        if (strlen($s) == 0) exit("Le Prenom est obligatoire");
        $this->Prenom = $s;
    }

    public function set_DateDeNaissance($s)
    {
        if (strlen($s) == 0) exit("La Date D'anniversaire est obligatoire");
        $this->DateDeNaissance = $s;
    }


    public function get_Nom()
    {
        return $this->Nom;
    }

    public function get_Prenom()
    {
        return $this->Prenom;
    }

    public function get_DateDeNaissance ()
    {
        return $this->DateDeNaissance;
    }

    public function enregistrer(Mysql $bdd)
    {
        $q = "INSERT INTO test (`Nom`, `Prenom`, `DateDeNaissance`)
        VALUES ('$this->Nom', '$this->Prenom', '$this->DateDeNaissance');";

        $bdd->get_cnx()->query($q);
        return true;
    }
}



?>