<?php 
class Database
{
    private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $db = "newarnet";
    private $conn;
    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function read($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        if ($stmt) {
            if (!empty($params)) {
                $types = str_repeat("s", count($params));
                $stmt->bind_param($types, ...$params);
            }
            $stmt->execute();
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            $stmt->close();
            return $data;
        } else {
            return false;
        }
    }

    function save($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        if ($stmt) {
            if (!empty($params)) {
                $types = str_repeat("s", count($params));
                $stmt->bind_param($types, ...$params);
            }
            if ($stmt->execute()) {
                $stmt->close();
                return true;
            } else {
                $stmt->close();
                return false;
            }
        } else {
            return false;
        }
    }

    function __destruct()
    {
        $this->conn->close();
    }   
}
?>