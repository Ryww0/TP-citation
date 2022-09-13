<?php
include_once 'IRepository.php';

class Repository implements IRepository {

    public $QuelqueChose;
    public $DeuximeQuelqueChose;

    public function __construct($value1, $value2) {
        $this->QuelqueChose = $value1;
        $this->DeuximeQuelqueChose = $value2;
    }

    public function add()
    {
        $request = $this->connection->prepare("INSERT INTO TableName (1erValue, 2emeValue) VALUES (:value1,:value2)");
        $request->execute(array(
            'valuer1' => $this->QuelqueChose,
            'valuer2' => $this->DeuximeQuelqueChose
        ));
    }

    public function remove()
    {
        $request = $this->connection->prepare("DELETE FROM TableName WHERE quelquechose = :quelquechose");
        $request->bindParam(':quelquechose', $this->QuelqueChose);
        $request->execute();
    }

    public function find()
    {
        $request = $this->connection->prepare("SELECT FROM TableName WHERE quelquechose=:quelquechose");
        $request->bindParam('quelquechose', $this->QuelqueChose);
        $request->execute();
    }

    public function update()
    {
        $request = $this->connection->prepare("UPDATE TableName SET quelquechose = :quelquechose WHERE quelquechoseID = :quelquechoseID");
        $request->execute(array(
            'quelquechose' => $this->QuelqueChose,
            'quelquechoseID' => $this->DeuximeQuelqueChose
        ));
    }
}
