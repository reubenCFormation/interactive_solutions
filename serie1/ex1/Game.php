<?php
/*
PARTIE 1)
    1) Creer une classe Game. Cette classe aura une proprieté $level qui sera par defaut mis a zero.

    2) Creer une methode qui va detrminer si le jeu est gagné ou pas. Si $level est superieur ou egal a 5, le jeu est gagné, sinon le jeu n'est pas gagné. Cette methode va nous retouner un boolean.  

    3) Creer une instance de Game et faites en sorte de gagner le jeu en incrementer la proprieté $level. Pour savoir si le jeu est gagné, faites appel a la methode qui determinera si le jeu est gagné ou pas. Si le jeu est gagné, affichez un message de feliciations

*/

class Game{
    public $level=0;

    public function isGameWon(){
        if($this->level>5){
            return true;
        }

        else{
            return false;
        }
    }

}

$game1=new Game();
$game1->level+=2;


$game2=new Game();



?>