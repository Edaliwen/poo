# POO

## Exercice 1
Créer une classe **character**. Faire trois propriétés : **name** (STRING), **health** (INT) et **strength** (INT).

## Exercice 2
Créer la méthode magique **construct** dans la classe **character** qui permet de renseigner ses trois propriétés.

## Exercice 3
Créer une classe **orc** qui hérite de la classe **character**. Ses informations par défaut :
- Health: 100
- Strength: 12

## Exercice 4
Créer une classe **hero** qui hérite de la classe **character**. Ses informations par défaut :
- Health: 150
- Strength: 10

## Exercice 5
Créer une classe **stuff**. Faire les propriétés suivants qui sont tous de type string : 
- head
- body
- weapon

Créer un constructeur pour cette classe, permettant de renseigner chaque propriété.

## Exercice 6
Ajouter dans la classe **character** un attribut **stuff** de type STUFF.

## Exercice 7
Ajouter dans la classe **character** une méthode **loseHealth**.
Cette méthode prend un argument **value**, qui indique la quantité de **health** que le personnage perd.
Si **health** passe sous 0, afficher le message "**name** a été vaincu !"

## Exercice 8
Ajouter dans la classe **character** une méthode **attack** : elle permettra à ce personnage d'attaquer un adversaire.
Cette méthode prend un argument **target**, qui indique le **character** qui est ciblé par cette attaque.
Faire en sorte que la cible de l'attaque perde autant de vie que la **strength** de l'attaquant.

## Exercice 9
Instancier deux objets : un **hero** nommé "Hawke", et un **orc** nommé "Grunt".

## Exercice 10 (bonus)
Duel à mort ! A l'aide d'une boucle, faites s'affronter l'orc et le héros jusqu'à ce que l'un des deux soit vaincu.