<?php
/*

PARTIE I)SETUP!
1)Creer un dossier myAnimals 

2) Rentrer dans ce dossier et installer altorouter comme nous l'avons deja vu

3)Creer un dossier public et dans ce dossier mettez y un fichier index.php, un fichier register.php et votre fichier .htaccess 

4) Creer un dossier app et dans ce dossier creer un dossier model ainsi que un dossier controller.

5)Creer un dossier view dans lequelle vous allez ecrire vos views. 

6) Dans le dossier model, creer trois fichiers. Un fichier Animal.php, un fichier Mammal.php et un fichier Reptile.php Reprenez le meme code que dans cours/serie1/ex6 et mettez les dans les classes respecitfes. Nous allons partir de cette base la. Toutes ces trois classes seront dans le namespace model.

7) Dans votre dossier view, 
  a)Creer les fichiers suivants:header.php, home.php,insert.php, animal_details.php et update_animal.php. Pas de namespace pour vos views

8) Dans le dossier controller. Creer un fichier que vous allez appeler BaseController.php et donnez lui le meme contenu que on vient de voir (une fonction render et redirect). Creer un fichier que vous allez appeler AnimalController.php et creez y une classe que vous allez appeler AnimalController. Mettez votre fichier BaseController.php ainsi que votre fichier AnimalController.php dans le namespace controller


PARTIE II) Consignes 


1) 
 Version FACILE:  Creer une route (/) pour pouvoir afficher tous nos animaux. Trouvez un moyen de recuperer tous nos animaux et retourner un tableau associatif qui contient tous nos animaux.Ecrivez cette logique dans la classe Animal qui se trouve dans votre dossier model. Ensuite notre classe AnimalController va recuperer le tableau associatif que on vient de creer avec la casse Animal.

 Version DIFFICILE: .Creer une route (/) pour pouvoir afficher tous nos animaux. Trouvez un moyen de recuperer tous nos animaux de type Mammal et Reptile (Un tableau qui contiendra des instances de Reptile et de Mammal). Ecrivez cette logique depuis vos classe Reptile et Mammal qui se trouve dans le dossier model Trouvez un moyen d'afficher le resultat dans un tableau html sur notre page d'accueil (home.php). Ensuite notre classe AnimalController va recuprer les deux tableaux d'instanecs que nous avons creer dans la classe Mammal ainsi que dans la classe Reptile.

2)
  Version Facile: Pour chaque animal dans votre tableau html, creer un lien (ce lien va correspondre a une route) pour pouvoir voir les details d'un animal en particulier. Creer une methode dans la classe Animal que vous allez appeler findById qui va chercher un animal dans la base de données selon son id et qui va renvoyer cette animal sous forme de tableau associatif. Nous allons ensuite recuperer ce tableau associatif depuis notre classe AnimalController et le transmettre a la vue (animal_details.php)

  Version Difficile. Meme chose que avant, mais en fonction de si l'animal que nous avons recuperé dans notre methode findById de la classe Animal est un Reptile ou un Mammal nous allons creer une instance dans la Classe enfant correspondante (Mammal ou Reptile).  Nous allons transmettre une instance de Mammal ou de Reptile a notre view a partir de notre classe AnimalController 

3) Faites en sorte de creer une route pour pouvoir nous rendre sur une view html avec un formulaire pour inserer un animal. Cette route va juste nous renvoyer a une view pour pouvoir inserer un animal en base de données.

4)Rajoutez deux liens dans votre fichier header.php Un lien qui delclenchera la route d'accueil, et un lien qui va nous pointer vers la route pour pouvoir inserer un animal (la vue de notre formulaire)



5) Apres avoir pu acceder aux formulaire pour inserer un nouveau animal, faites en sorte de generer une route (en POST) qui va pouvoir reelement inserer un animal en base de données et ensuite lors que votre animal a bien etait insere en bdd, faites une redirection vers la page d'accueil. Hint: Vous auriez besoin de rajouter du code dans vos models ainsi que votre Controller! Bonus: Apres que l'insertion ait reussi, afficher un message de feliciations

Bonus!

6)  Dans notre tableaux html,rajoutez un lien pour pouvoir modifier un animal que vous auriez choisi. Ce lien va vous pointer sur un formulaire pre-rempli. Dans le formulaire, faites en sorte de pouvoir modifier seulment les jambes et le poids de l'animal et rien d'autre.Pensez a la proprieté disabled. Dans vos models ( Reptile et Mammal) , rajoutez une methode pour mettre a jour l'animal que vous veniez de modifier. Pensiez de verifier que l'animal est domestique ou non (son poids et ses jambes aurai pu changer). Dans cette methode, vous allez devoir faire une requette pour mettre a jour l'animal avec les nouvelles valeurs pertinentes. Enfin, lors que l'animal a bien etat modifié, faites une redirection vers la page d'accueil en souhaitant un message de feliciations! Il va falloir bien sur creer les views et les routes correspondatne!


   


?>