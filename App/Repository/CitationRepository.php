<?php
include_once 'IRepository.php';

class CitationRepository implements ICitationRepository {

    public string $citation;
    public string $auteur;

    public function __construct($value1, $value2) {
        $this->citation = $value1;
        $this->auteur = $value2;
    }

    public function add()
    {
        $request = $this->connection->prepare("INSERT INTO Citation (citation, auteur) VALUES (:value1,:value2)");
        $request->execute(array(
            'value1' => $this->citation,
            'value2' => $this->auteur
        ));
    }


    public function findAll()
    {
        $request = $this->connection->prepare("SELECT * FROM Citation");
        $response = $db->query($request);
        $result = $response->fetchAll(PDO::FETCH_ASSOC);
    }


    /*
    public function remove()
    {
        $request = $this->connection->prepare("DELETE FROM TableName WHERE quelquechose = :quelquechose");
        $request->bindParam(':quelquechose', $this->QuelqueChose);
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
    */
}
