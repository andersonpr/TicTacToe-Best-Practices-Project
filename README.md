hacking exercise PHP Peru

la idea es sumarse al desarrollo Open Source en PHP y mejores practicas

1. sino sabes nada de github entonces help.github.com

2. la idea es hacer contribuciones con Pull Requests para sumar participacion

3. si es un approach diferente entonces creas un branch o lo pones en un directorio diferente


Problemas a evitar
------------------

Link que muestra una semi implementacion con TDD PHPUnit, pero el autor
al parecer hace un poco de *trampa* o no sigue estrictamente TDD
pros: 

 . uso de SPL interfaces
 . explicacion de phpunit testing framework

cons:

 . no sigue TDD estricto
 
http://www.dragonbe.com/2011/09/quality-assurance-on-php-projects.html


Especificacion mas refinada para TDD
------------------------------------

1. a player can take a field if not already taken
2. players take turns taking fields until the game is over
3. a game is over when all fields are taken
4. a game is over when all fields in a column are taken by a player
5. a game is over when all fields in a row are taken by a player
6. a game is over when all fields in a diagonal are taken by a player


source: http://gojko.net/2009/08/02/tdd-as-if-you-meant-it-revisited/

Improvements for the future
---------------------------
* use events for turnSwitcher
* use validatorBoard for AI insertion
* board class has non-fixed dimensions
* validatePosition
    fetch field from global sack and if it returns null it means it's owned by someone else already
* SPL reuse for adding players
* SPL reuse for polling global and player sacks