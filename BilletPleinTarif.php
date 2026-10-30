<?php
class BilletPleinTarif {
    //ATTRIBUT
    private int $numero;
    private float $prix;
    private Seance $seance;

    //CONSTRUCTEUR
    public function __construct(int $newNumero, float $newPrix, Seance $newSeance){
        $this->numero = $newNumero;
        $this->prix = $newPrix;
        $this->seance = $newSeance;
    }

    //GETTER ET SETTER
    /**
     * Get the value of numero
     *
     * @return int
     */
    public function getNumero(): int {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @param int $numero
     *
     * @return self
     */
    public function setNumero(int $numero): self {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Get the value of prix
     *
     * @return float
     */
    public function getPrix(): float {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @param float $prix
     *
     * @return self
     */
    public function setPrix(float $prix): self {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Get the value of seance
     *
     * @return Seance
     */
    public function getSeance(): Seance {
        return $this->seance;
    }

    /**
     * Set the value of seance
     *
     * @param Seance $seance
     *
     * @return self
     */
    public function setSeance(Seance $seance): self {
        $this->seance = $seance;
        return $this;
    }

    //METHODS
    public function calculerPrix():float{
        return $this->getPrix();
    }

    public function imprimerDetail():void{
        echo("<ul>
            <li>Film : {$this->getSeance()->getFilm()}</li>
            <li>Date et Heure : {$this->getSeance()->getDate()} - {$this->getSeance()->getHeure()}</li>
            <li>Numero : {$this->getNumero()}</li>
        </ul>");
    }
}