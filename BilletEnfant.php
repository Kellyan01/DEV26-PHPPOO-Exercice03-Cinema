<?php
class BilletEnfant extends BilletPleinTarif{
    //ATTRIBUT
    private int $age;

    //CONSTRUCTEUR
    public function __construct(int $newNumero, float $newPrix, Seance $newSeance, int $newAge){
        parent::__construct($newNumero, $newPrix, $newSeance);
        $this->age = $newAge;
    }

    //GETTER ET SETTER
    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self {
        $this->age = $age;
        return $this;
    }

    //METHOD
    public function calculerPrix():float{
        echo("<p>Age de l'enfant : {$this->getAge()}</p>");
        return parent::calculerPrix();
    }
}