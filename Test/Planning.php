<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 09/12/2018
 * Time: 17:22
 */

class Planning
{
    private     $joursFr = Array(0=>'Dimanche', 1=> 'Lundi', 2=>'Mardi', 3=>'Mercredi', 4=>'Jeudi',5=>'Vendredi', 6=> 'Samedi');

    private $jourDebut;
    private $jourFin;
    private $heureDebut;
    private $heureFin;
    private $pas;
    private $minutesKeys;
    private $contenu;
    private $tabSemaine;

    const htmlSpace = '&nbsp;';
    const htmlEmptyCell = '<td>&nbsp;</td>';
    const htmlCellOpen='<td>';
    const htmlCellClose = '</td>';
    const htmlRowOpen = '<tr>';
    const htmlRowClose = '</tr>';
    const htmlTableOpen = '<table class = "tabPlanning">';
    const htmlTableClose = '</table>';

    const separateurHeure = 'h';

    public function __construct($jourDebut=1, $jourFin= 5,$heureDebut=540,$heureFin= 1260, $pas=60, $contenu = Array())
    {
        $this->jourDebut= $jourDebut;
        $this->jourFin = $jourFin;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
        $this->pas = $pas;
        $this-> contenu = $contenu;

        $this->initTableauSemaine($this->contenu);
        //$this->>debugPJPArrays();
        $this->insererContenus(contenus);
    }

    private function initTableauJour(){
        if ($this->pas != 0){
            $numCells = ($this->heureDebut -$this->heureFin)/ $this->pas;
        }
        else {
            echo 'pas==0!!';
        }
        $keys = $this->genererMinutesKeys();
        $tabJour = array_fill_keys($keys,self::htmlEmptyCell);
        return $tabJour;
    }

    private function initTableauSemaine(){
        $this->tabSemaine = Array();
        $tabJour = $this->initTableauSemaine();
        for ($i=$this->jourDebut; $i<=$this->jourFin; $i++) {
            $this->tabSemaine[$i] = $tabJour;
        }
    }

    private function getNumeroCellule($minutesDebut, $minutesFin){
        return ($minutesFin - $minutesDebut);
    }

    private function insererContenus($contenuPlanning){
        foreach ($contenuPlanning as $contenuCellule){
            $this->insererContenu($contenuCellule);
        }
    }

    private function insererContenu($contenuCellule){
        $duree = $this->getNumeroCellule($contenuCellule->heureDebut, $contenuCellule->heureFin);
        $contenu = $contenuCellule->contenu.'<br/>';
        $contenu .= $this->convertMinutesEnHeuresMinutes($contenuCellule->heureFin);
        $contenu .= ' - '. this->convertMinutesEnHeuresMinutes($contenuCellule->heureFin);

        $this->tabSemaine[$contenuCellule->numJour][$contenuCellule->heureDebut] =$this->genererCelluleHTMLA($contenu,$duree,'',$contenuCellule->bgColor);

        $key = $contenuCellule->heureDebut;
        for ($cpt = $duree-1; $cpt>0; $cpt--){
            $key += $this->pas;
            $this->tabSemaine[$contenuCellule->numJour][$key]='';
        }
    }

    public function debugPHPArrays(){
        echo '<pre>';
        print_r($this->tabSemaine);
        echo '</pre>';
    }

    

}