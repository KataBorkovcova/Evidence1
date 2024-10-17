
<?php
require_once __DIR__ . '/../models/Osoba.php';

class OsobaController {
    private $osoba;

    public function __construct($db) {
        $this->osoba = new Osoba($db);
    }

    public function vytvorOsobu($data) {
        $jmeno = $data['jmeno'];
        $prijmeni = $data['prijmeni'];
        $vek = $data['vek'];
        $telefon = $data['telefon'];
        return $this->osoba->vytvorOsobu($jmeno, $prijmeni, $vek, $telefon);
    }

    public function zobrazOsoby() {
        return $this->osoba->getOsoby();
    }
}

