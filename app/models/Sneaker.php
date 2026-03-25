<?php

class Sneaker
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSneakers()
    {
        $sql = "SELECT *
                FROM Sneakers
                ORDER BY Merk";

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function create($data)
    {
        $sql = "INSERT INTO Sneakers
                (Merk, Model, Type)
                VALUES
                (:merk, :model, :type)";

        $this->db->query($sql);

        $this->db->bind(':merk', $data['merk'], PDO::PARAM_STR);
        $this->db->bind(':model', $data['model'], PDO::PARAM_STR);
        $this->db->bind(':type', $data['type'], PDO::PARAM_STR);

        return $this->db->execute();
    }
}