<?php
/*
1)Creer une classe Shelter. Cette classe aura une proprieté $name qui sera son nom, une proprieté $animals qui sera un tableau vide par defaut, une proprieté $city qui sera une chaine de caracteres et une proprieté $maximum qui sera un integer. Enfin, nous allons aussi avoir une proprieté $acceptsWild qui sera un boolean et par defaut sera false. Dans votre constructuer, definissez $name, $city et $maximum, ne touchez pas a $animals ou a $acceptsWild dans votre constructeur


2)creer une methode addAnimal qui prend un parametre. Ce parametre DOIT correspondre a une instance de la classe Animal que vous aviez creé precedement. 
 a) Si $acceptsWild est a false, assurez vous que l'animal que vous allez rajouter est domestiqué. Si il n'est pas domestiqué et que $acceptsWild est a false, lancez une erreur en utilisant la classe Exception 
 b)Assurez vous aussi que il y a suffisament de place pour un nouveau animal dans le Shelter Pensez a la proprieté $maximum. Si il n'y a pas suffisament de place, lancez encore une erreur avec la classe Exception
 Si vos controles passent, ajoutez l'instance de l'animal a votre proprieté $animals (notre tableau)


 3) Creer cinq instances de la classe Animal, trois qui seront domestiques et  deux qui seront sauvages 

 4) Creer une instance de Shelter avec un maximum de deux places et qui n'accepte pas les animaux sauvage. Essayez de rajouter un animal (avec la fonction addAnimal) sauvage et assurez vous que ca ne marche pas (l'animal en question ne doit pas etre rajouté au tableaux $animals et nous devons voir une erreur apparaitre). Enfin, essayer de rajouter plus de deux animaux domestique et rassurez vous que ca ne marche pas. Mettez en commentaire vos lignes de code pour ne pas toujours avoir des erreurs! 

 6) Modifiez votre instance de shelter en permettant les animaux sauvages et en lui donnant une capacité de 10 animaux. Rajouter tous vos animaux et assurez vous que ca fonctionne.

 7) Creez une methode dans la classe Shelter qui va afficher le nom, poids et type de chacun de nos animaux dans le tableau $animals. (En Bonus, trouvez un moyen d'afficher si l'animal et domestique ou pas)

 BONUS

 1)Ajouter un getter et setter pour $acceptsWild,et $maximum pour votre classe Shelter. Ajoutez egalement un getter pour $animals. Rechercez ce que sont les getters et setters sur internet
 2) Creer une 2eme instance de Shelter avec une capacité de seulment un Animal
 3) Creer encore 2 animaux sauvages et deux animaux domestiques
 4) Assurez vous que un animal sauvage ne peux pas etre rajouté a notre instance de Shelter 
 5) Faites en sorte que votre Shelter puisse accepter des animaux sauvage et donne lui une capacité de 5 animaux. Faites ces modifications avec les setters que vous venez de creer



?>