<?php

class Database
{
    private $dbServer = 'localhost';
    private $dbUser = 'root';
    private $dbPassword = '';
    private $dbName = 'magicpin';
    protected $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbServer}; dbname={$this->dbName}; charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword, $options);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

    }
}

class Player extends Database
{
    // table name
    protected $tableName = 'payments';
    public function searchPlayer($searchText, $start = 0, $limit = 4)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE txnid LIKE :search ORDER BY payid DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':search' => "{$searchText}%"]);
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }

        return $results;
    }
}
?>