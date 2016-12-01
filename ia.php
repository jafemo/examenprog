
<?php
//////INICIAMOS LA CLASE//////
class ia{

//////ATRIBUTOS//////
	private $mapaCol="4";
	private $mapaFil="4";
	private $numNaves="1";
	private $tipo="nave";
	private $tipoNaveIAdefecto="";
//////ARRAYS//////



//////NAVES HUMANAS//////
	public $navesHumano=[];

//////NAVE ARTIFICIAL//////
public $navesIA=[
	0=>["tipo"=>"nave","col"=>0,"fil"=>3],
	1=>["tipo"=>"nave","col"=>2,"fil"=>3],
	2=>["tipo"=>"nave","col"=>1,"fil"=>3],
];


//////GETTERS//////
    public function getColumna(){
        return $this->mapaCol;
    }
		public function getFila(){
        return $this->mapaFil;
    }
		public function getNave(){
 			 return $this->numNaves;
		}

	  public function getNavesHumano(){
		   return $this->navesHumano;
	  }

	  public function getNavesIA(){
		   return $this->navesIA;
	  }

		public function getTipoNaveIAdefecto(){
			return $this->tipoNaveIAdefecto;
		}
	 //////SETRTERS//////


	 public function setTipoNaveIaedfecto($tipo){
		 if ($tipoNaveIAdefecto=="") {
		 	echo strelen($navesIA);
		 }
		 return $this->tipoNaveIAdefecto;
	 }

	 public function imprimirNavesIA(){
		 for ($i=0; $i < sizeof($navesIA); $i++) {
		 	echo "Nave 1 " . $tipo . ", columna: " . $mapaCol . ", fila: " . $mapaFil;
		 }
	 }


    public function setMapaCol($mapaCol){
        if ($mapaCol>3) {
        	$this->mapaCol = 3;
        }elseif ($mapaCol<0) {
        	$this->mapaCol =0;
        }else {
        	$this->mapaCol =$mapaCol;
        }
    }

    public function setMapaFil($mapaFil){
			if ($mapaFil>3) {
				$this->mapaFil= 3;
			}elseif ($mapaFil<0) {
				$this->mapaFil = 0;
			}else {
				$this->mapaFil =$mapaFil;
			}
    }

    public function setNaveHumana($tipoNaveIAdefecto, $col, $fil){
        $this->navesHumano[]=[
					"tipoNaveIAdefecto"=>$tipoNaveIAdefecto,
					"col"=>$col,
					"fil"=>$fil,
				];
    }

		public function setNaveIA($navesIA){
			$this->naveIA=$navesIA;
		}

	 //////FUNCION RANDOM//////
		public function randompos(){
			$this->columna=rand(0,3);
			$this->fila=rand(0,3);
		}
	}

?>
