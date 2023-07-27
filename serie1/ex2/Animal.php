<?php
class Animal{
    public string $name;
    public int $legs;
    public int $weight;
    public string $type;
    public bool $isDomestic;

    public function __construct($name,$type,$weight,$legs){
        
        $this->name=$name;
        $this->type=$type;
        $this->weight=$weight;
        $this->legs=$legs;

        

        if($this->legs>=2 &&$this->legs<=4 && $this->weight<=100){
            $this->isDomestic=true;
        }

        else{
            $this->isDomestic=false;
        }

    }

    public function getIsDomestic(){
        if($this->isDomestic){
            echo "Ca sera mon petit chouchou!";
        }

        else{
            echo "Attention, il va vous manger!";
        }
    }

    
}
/*
$domesticAnimal=new Animal("Goldie","Mammal",60,4);

$domesticAnimal->getIsDomestic();

echo '<br/>';
$wildAnimal=new Animal("Hulk","Monster",300,2);

$wildAnimal->getIsDomestic();
*/


/*
1)Creer une classe Animal. Donnez lui quatre proprietés $name qui doit etre une chaine de caracteres,$legs qui doit etre un int,$weight qui doit aussi etre un int  et $type qui doit etre une chaine de caracteres et qui va correspondre a mammal, reptile etc. Enfin, donnez a cette animal une 5eme proprieté que vous allez appeler $isDomestic et qui sera un boolean (bool) et qui va determiner si un animal est domestique ou non. Creer un constructeur pour pouvoir definir le $name,$type,$weight,et $legs.Aussi dans le constructeur, faites en sorte de determiner si un animal est adoptable ($isDomestic) ou non. Si un animal est adoptable ($isDomestic),il doit avoir entre deux et quatre jambes et il doit peser moins de 100 kilos. Sinon, l'animal ne sera pas adoptable

2) Creer une methode  dans votre classe qui va calculer si un animal est adoptable ou non. Si l'animal est adoptable, affichez le message "Ca sera mon petit chouchou". Sinon, affichez le message "attention, il va nous manger"! 

3) Creer des instances (objets) de votre classe Animal. Faites appel a la methode que vous venez de creer et en fonction de si l'animal (l'instance) est adoptable ou non, vous devez voir le message correspondant s'afficher

BONUS! 
Dans votre constructuer, faites en sorte que un animal ne peux pas avoir plus de 10 jambes ni peser plus de 500 kilos. Faites cette controle avec un getter. Rechercher ce que c'est un getter. Si un animal a plus de 10 jambes, lancez une erreur (Exception)


*/

?>