J'ai réalisé le test en php 7 / mysql sous Symfony 4 et tourne sous apache 


Le code principal est dans scr/controller/indexcontroller.php
l'affichage est dans templates/voyages.html.twig et dans templates/no-voyages.html.twig


Pour voir la page des voyages : 
php-santiane/public/voyages

Comme demandé dans l'énoncé : 
- Il est impossible de passer deux fois par la même ville
- Il est impossible d'avoir une étape vide
- il est possible d'ajouter des attributs supplémentaires en fonction du type d'étape


- Du fait de la contrainte de temps, le visuel est assez épuré (tout fait en backend, je n'ai pas eu le temps d'ajouter bootstrap pour faire plus propre)
- Pour la même raison, je n'ai pas eu le temps d'implémenter de test unitaire
