<?php
/*
 1)Creer un dossier ex4. Creez un fichier Animal.php qui contiendra votre classe Animal que vous avez creé en ex2 SANS LES INSTANCES . Creer aussi un fichier Shelter.php qui contiendra votre classe Shelter dans l'exercise precedante que vous avez crée en ex3 SANS LES INSTANCES

 2) passez toutes les proprietés de la classe Animal en private ainsi que dans la classe Shelter

 3) Dans votre classe Animal, creer des getters et des setters pour $legs et $weight,et dans votre setter pour $weight faites en sorte que un animal ne peux pas peser plus de 500 (kg) Dans votre setter pour $legs, faites en sorte que un animal ne peux pas avoir plus de 10 jambes.Utilisez la classe Exception. 
 
 4)Utilisez vos setters pour $weight et $legs dans le constructeur de votre classe pour securisez votre constructeur et empechez de mettre n'importe quoi. Remplacez votre methode getIsDomestic dans votre classe Animal par un simple getter qui va nous retourner la proprieté $isDomestic de l'instance. Rajoutez egalement un setter pour $isDomestic. Enfin,rajoutez des getters pour $name et pour $type dans la classe Animal. Pas de setters car le $name et le $type ne sont pas censéz changer!

 5) Dans votre classe Shelter, passez toutes vos proprietés en privé (si ce n'est pas deja fait) et rajoutez des getters et des setters pour $maximum, $acceptsWild, et $animals.

 6) Instancier des animaux en vous assurant que les controles ($weight,$legs) fonctionnent. Mettez en commentaire votre code erroné pour ne pas rester coincé sur des erreurs 

 7) Instancier 5 nouveaux animaux (trois domestique et deux sauvages).

 8) Dans votre classe Shelter, si ce n'est pas deja fait, ajoutez un getter pour la proprieté $animals 

 9) Creer une instance de Shelter  avec une capacité de 10 animaux. Apres l'instanciation ,rajoutez une ligne pour faire en sorte que votre Shelter puisse acceptez des animaux sauvages (pensez au setters). Rajoutez vos 5 nouveaux instances de Animal dans l'instance de Shelter

 10) accedez au $animals dans la classe Shelter avec votre getter, stockez le resultat dans une variable. Affichez le $name,$type,$weight et $legs de chaque instance d'Animal dans votre tableau avec une phrase du genre: "l'animal s'apelle $name,il est de type $type, il pese $weight kilos et il a $legs jambes". Il va fallour trouvez un moyen d'acceder aux informations de vos animaux etant donné que les proprietés dans la classe Animal sont maintenant en private!

 */


?>