<?php
class MySecondClass{
    public string $name="default value";
  
    public array $arr=["first","second","third"];

    public function getArrInfo(){
        foreach($this->arr as $value){
            echo $value."<br/>";
        }
        echo count($this->arr)."<br/>";
    }

    public function pushArrValue($value){
        $this->arr[]=$value;
    }

    public function getStringInfo(){
        echo "La proprieté s'apelle"." ".$this->name." "."et elle comporte"." ".strlen($this->name)." "."caracteres";
    }
}

$instance1=new MySecondClass();


/*
$instance1->pushArrValue("another value");
echo "AFTER CALLING PUSH METHOD <br/>";
$instance1->getArrInfo();
*/


/*
$instance1->getStringInfo();
*/
/*
echo "<br/>";

$instance2=new MySecondClass();
$instance2->name=20;

echo "CALL METHOD ON INSTANVE 2 <br/>";

$instance2->getArrInfo();
$instance2->pushArrValue("la valeur pour instance2");
echo "CALL METHOD ON INSTANCE 2 AFTER PUSH! <br/>";
$instance2->getArrInfo();
*/




/*
 PARTIE 2)
 1)Creer une classe MySecondClass et donnez lui une proprieté $name. Cette proprieté $name aura une valeur par defaut que vous allez choisir mais faites en sorte que ca soit une chaine de caractere. Ecrivez une methode que vous allez appeler getStringInfo qui va nous afficher la phrase suivante: la propriete s'apelle {valeur de ma properité} et elle comporte {nombre_de_caracteres dans la proprieté}.
    a) Creer une instance de votre classe (un objet) sans changer la proprieté $name par defaut que vous avez donnez et ensuite faites appel a la methode getStringInfo
    b) Creer une deuxieme instance de votre classe et cette fois si, faites en sorte de modifier la properité $name SANS TOUCHER au code a l'interieur de la classe. Verifiez que cette proprieté $name a bien etait modifiez en faisant appel a la methode getStringInfo de cette deuxieme instance
 
 2) Rajoutez une proprieté $arr a votre class et donnez lui un tableau avec 3 valeurs par defaut 
    a) Creer une methode que vous allez appeler getArrInfo. Cette methode nous affichera chaque valeur de notre proprieté $arr et va aussi nous afficher la longeur de $arr 
    
    b) Creer une autre methode que vous allez appeler pushArrValues. Dans cette methode, faites en sorte de rajouter un element a votre proprieté $arr. BONUS. Faites en sorte de mettre un parametre a la methode pushArrValues pour pouvoir ajouter une valeur differente a chaque appel de la fonction 

    c) Creer encore une instance (un objet) de votre classe. Faites appel a la methode getArrInfo. Ensuite faites appel a la methode pushArrValues. De nouveau faites appel a la methode getArrInfo et constater que la nouvelle valeur a bien etait rajouté dans votre tableau


    BONUS. Faites en sorte de forcer le type de votre proprieté $name pour etre une chaine de caractere et le type de votre proprieté $arr pour etre un tableau!

    */

   



?>