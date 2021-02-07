<?php
class Monster {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllMonsters() {
        $this->db->query('SELECT * FROM monsters');
        $results = $this->db->resultSet();
        return $results;
    }
}
?>