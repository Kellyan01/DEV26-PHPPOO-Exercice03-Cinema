<?php
class BilletReduit extends BilletPleinTarif{
    //ATTRIBUT
    private string $justificatif;

    //CONSTRUCTEUR
    public function __construct(int $newNumero, float $newPrix, Seance $newSeance, string $newJustifcatif){
        parent::__construct($newNumero, $newPrix, $newSeance);
        $this->justificatif = $newJustifcatif;
    }

    //GETTER ET SETTER
    /**
     * Get the value of justificatif
     *
     * @return string
     */
    public function getJustificatif(): string {
        return $this->justificatif;
    }

    /**
     * Set the value of justificatif
     *
     * @param string $justificatif
     *
     * @return self
     */
    public function setJustificatif(string $justificatif): self {
        $this->justificatif = $justificatif;
        return $this;
    }

    //METHOD
    public function calculerPrix():float{
        echo("<p>Justificatif présenté : {$this->getJustificatif()}</p>");
        return $this->getPrix() * 0.3;
    }
}