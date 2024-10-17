<?php
class Osoba {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function vytvorOsobu($jmeno, $prijmeni, $vek, $telefon) {
        $stmt = $this->db->prepare("INSERT INTO pojisteni_osoby (jmeno, prijmeni, vek, telefon) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$jmeno, $prijmeni, $vek, $telefon]);
    }

    public function getOsoby() {
        $stmt = $this->db->query("SELECT * FROM pojisteni_osoby");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
