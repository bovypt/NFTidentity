<?php
class Mysql
{
    private $_serveur;
    private $_login;
    private $_mdp;
    private $_bdd;
    private $_cnx;

    
    public function set_serveur($s)
    {
        $this-> _serveur=$s;
    }
    public function set_login($s)
    {
        $this-> _login =$s;
    }
    public function set_mdp($s)
    {
        $this->_mdp=$s;
    }
    public function set_bdd($s)
    {
        $this->_bdd = $s;
    }
    public function get_cnx()
    {
        return $this->_cnx;
    }
    public function connexion()
    {
        print'Connexion';
        $this -> _cnx = mysqli_connect($this->_serveur,$this->_login,$this->_mdp,$this->_bdd);
        if($this->_cnx->connect_error)
        error_log("Erreur de connexion bdd : " . mysqli_connect_error()); 
    }
    public function requete($q)
    {
        print 'function requete';
        $res = query($q);
        if (!$res) exit("<pre>Erreur dans la requete [$q] : " . mysql_error() . "</pre>");
        return $res;
    }
}

    


?>