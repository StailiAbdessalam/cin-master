<?php
class DataName
{
    protected $id;
    protected $Table;
    function __construct($A)
    {
        $this->Table = $A;
    }
    static function connection()
    {
        $dbn = "mysql:dbname=cene master;local=localhost";
        $user = "root";
        $password = "";
        $con = new PDO($dbn, $user, $password);
        return $con;
    }



    public function selectAll()
    {
        $con = self::connection();
        $requi = "SELECT * FROM " . $this->Table . ";";
        $stat = $con->prepare($requi);
        $stat->execute() or die($stat->errorCode());
        $result = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function  getPlaceholders($arr)
    {
        return implode(",", array_map(function ($key) {
            return ":$key";
        }, array_keys($arr)));
    }


    public function insert($data)
    {
        $con = self::connection();
        $requi = "INSERT INTO " . $this->Table . "(P_prophile,prenom,nom,Gmail,password) VALUES (" . $this->getPlaceholders($data) . ")";
        $stat = $con->prepare($requi);
        $stat->execute($data) or die($stat->errorCode());
    }
}
