<?php
/*
1) Creer un dossier que vous allez appeler ex2 
2) Rentrer dans ce dossier et faites un composer require de votre altorouter: https://packagist.org/packages/altorouter/altorouter
3) Creer un dossier que vous allez appeler public. Dans ce dossier mettez vos dossiers index.php,.htaccess ainsi que register.php (qui va se charger de faire appel a la fonction spl_autoload_register)
4)A la racine de ex2. Creer un dossier que vous allez appeler app. Dans le dossier app, creer un dossier que vous allez appeler controller ainsi que un dossier que vous allez appeler model.

5) Dans le dossier model, ecrivez un fichier que vous allez appeler Animal.php et ecrivez y une classe que vous allez appeler  Animal. Cette classe aura deux methodes, une pour recuprer tous nos animaux dans la bdd et les retourner ainsi que une pour recuprer un animal en particulier selon son id et le retourner. Cette classe sera dans le namespace model. Pour le moment contentez vous d'utiliser des tableaux associatifs

6)Dans le dossier controller, ecrivez un fichier que vous allez appeler AnimalController.php. Cette classe sera dans le namespace controller Dans ce fichier ecrivez une classe que vous allez appeler AnimalController. Cette classe va devoir utiliser notre classe Animal dans le dossier model (n'oubliez pas le use!). Ensuite, ecrivez une methode dans votre AnimalController que vous allez appeler getAllAnimals qui nous affichera ou nous retournera tous les animaux (en utilisant votre model!). Ensuite creer une autre fonction que vous allez appeler findAnimal qui va nous trouver un animal en particulier selon son id (n'oubliez pas d'utiliser votre model!)  Affichez ou retourner cette animal

7) Creer un router dans votre fichier index.php et mapper vos routes. Vos routes vont devoir declencher une methode dans notre AnimalController. Vous devriez avoir une route pour recuperer tous vos animaux et une deuxieme route pour voir un animal en particulier N'oubliez pas d'utiliser le nom complet de la classe dans la fonction map de altorouter! Pour le moment generer vos routes a la main!

*/

?>