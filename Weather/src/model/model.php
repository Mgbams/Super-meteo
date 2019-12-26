<?php
//require(__DIR__ . "./../service/bdd.php");

class Model
{
    private $bdd;
    private $accessBdd;

    public function __construct()
    {
        $this->accessBdd = new Bdd();
        $this->bdd = $this->accessBdd->getBdd();
    }

    public function selectcountry($valu){
        try {
            $request = $this->bdd->prepare('SELECT * FROM countries WHERE code = ?');
            $request->execute(array(
                $valu
            ));
           return $result = $request->fetch();
        } catch(Exception $e){
            var_dump("Erreur". $e->getMessage()); 
        }
    }
}
