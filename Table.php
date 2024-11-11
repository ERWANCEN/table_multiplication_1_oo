<?php

// je crée une nouvelle classe que j'appelle 'Table'
class Table
{
    /**
     * Propriété définissant jusqu'à quelle table on veut aller
     *
     * @var string
     */
    private static int $_nombreDeTables = 10;

    /**
     * Propriété définissant jusqu'à quelle mutliplication nous voudrons aller dans chaque table
     *
     * @var string
     */
    private int $_longueurTable = 10;

    /**
     * Propriété qui accueillera la réponse à afficher
     *
     * @var string
     */
    private string $_reponse = "";

    /**
     * Constructeur qui exécutera au moment d'une instanciation la méthode 'setTables()'
     */
    public function __construct()
    {
        $this->setTables();
    }

    /**
     * Méthode setter (mutateur) que j'ai appelé 'setTables()' qui permet de vérifier les propriétés et réaliser l'exercice
     *
     * @return void
     */
    public function setTables()
    {
        $i = 0;
        while ($i <= self::$_nombreDeTables)
        {
            $this->_reponse .= "<h2>Table de " . $i . "</h2>";
            $j = 0;
            while ($j <= $this->_longueurTable)
            {
                $this->_reponse .= "<p>$i x $j = " . $i * $j . "</p>";
                $j++;
            }
            $this->_reponse .= "<hr>";
            $i++;
        }
        return $this->_reponse;
    }

    /**
     * Méthode getter (accesseur) que j'ai appelé 'getTables()' qui va me permettre d'afficher le résultat obtenu
     *
     * @return void
     */
    public function getTables()
    {
        echo $this->_reponse;
    }

}