<?php
 require 'objects/bdd.php'; // sert a rien car cherche un pdo
class Manager
{
    private $bdd;
    function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }
    function getAllDestination()
    {
        $query = $this->bdd->query('SELECT*FROM destinations');
        $result = $query->fetchAll();
        return $result;
    }
}
