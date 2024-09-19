<?php
namespace Classes;
include_once '../DB/db_connection.php';
use DB;

class Book
{
    private $db ;
    private $conn;
    public function __construct()
    {
        $this->db = new DB\db_connection();
        $this->conn = $this->db->setConnection();
    }
    function getAllBooks(): array
    {

        $stmt = $this->conn->prepare("SELECT * FROM books");
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    function getBookById($id): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM books WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);

    }

}