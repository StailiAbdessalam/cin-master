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
        $requi = "SELECT * FROM " . $this->Table . " order by id desc;";
        $stat = $con->prepare($requi);
        $stat->execute() or die($stat->errorCode());
        $result = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function selectADmin()
    {
        $con = self::connection();
        $requi = "SELECT * FROM " . $this->Table;
        $stat = $con->prepare($requi);
        $stat->execute() or die($stat->errorCode());
        $result = $stat->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function selectByEmail($email)
    {
        $con = self::connection();
        $requi = "SELECT * FROM " . $this->Table . " WHERE Gmail = :email ";
        $stat = $con->prepare($requi);

        $stat->execute(["email" => $email]) or die($stat->errorCode());
        return $stat->fetch(PDO::FETCH_ASSOC);
    }


    public function selectt($data, $id)
    {
        $con = self::connection();
        $requi = "SELECT $data FROM " . $this->Table . " WHERE $id ";
        $stat = $con->prepare($requi);
        $stat->execute() or die($stat->errorCode());
        $result = $stat->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getByIds($ids)
    {
        $con = self::connection();
        $placeholders = implode(",", array_fill(0, count($ids), "?"));
        $requi = "SELECT * FROM " . $this->Table . " WHERE id in ($placeholders) ";
        $stmt = $con->prepare($requi);
        $stmt->execute($ids);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    public function getByColumnValues($column, $values)
    {
        $con = self::connection();
        $placeholders = implode(",", array_fill(0, count($values), "?"));
        $requi = "SELECT * FROM " . $this->Table . " WHERE $column in ($placeholders) ";
        $stmt = $con->prepare($requi);
        $stmt->execute($values);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    protected function  getPlaceholders($arr)
    {
        return implode(",", array_map(function ($key) {
            return ":$key";
        }, array_keys($arr)));
    }



    protected function  getval($arr)
    {
        return implode(",", array_map(function ($key) {
            return "$key";
        }, array_keys($arr)));
    }


    public function insert($data)
    {
        $con = self::connection();

        $requi = "INSERT INTO " . $this->Table . "(" . $this->getval($data) . ") VALUES (" . $this->getPlaceholders($data) . ") ";
        $stat = $con->prepare($requi);
        $stat->execute($data) or die($stat->errorCode());
    }





    public function delette($id)
    {
        $con = self::connection();
        $requit = "DELETE FROM " . $this->Table . " WHERE id=$id";
        $stm =  $con->prepare($requit);
        $stm->execute();
    }


    public function update($data, $idUP)
    {
        $con = self::connection();
        $requi = "UPDATE `posts` SET `photo`='".$data["photo"]."',`description`='".$data["description"]."',`title`='".$data["title"]."',`categorie`='".$data["categorie"]."' WHERE id=$idUP";
        // $requi = "UPDATE INTO" . $this->Table . "(" . $this->getval($data) . ") VALUES (" . $this->getPlaceholders($data) . ") WHERE $idUP";
        // $requi = "UPDATE  INTO  " . $this->Table . "(" . $this->getval($data) . ") VALUES (" . $this->getPlaceholders($data) . ") WHERE $idUP";
        $stat = $con->prepare($requi);
        $stat->execute() or die($stat->errorCode());
    }
}
