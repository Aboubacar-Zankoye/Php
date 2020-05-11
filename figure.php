<? php

  classe  abstraite Figure {
    // Instances d'attributs
      privé  $ longueur ;
    // Attributs classe ou Attributs static
      privé  statique  $ unir ;


       // Getters methodes instances concretes
        fonction  publique getLongueur () {
        return  $ this -> longueur ;
       }
  
   // setters methodes instances concrets
  
     fonction  publique setLongueur ( $ longueur ) {
       $ this -> longueur = $ longueur ;
     }
    // Méthodes Getters Setters pour les bétons statiques
    publique  statique  fonction  getUnite () {
         return  self :: $ unite ;
    }
    publique  statique  fonction  setUnite ( $ s'unir ) {
         self :: $ unite = $ unite ;
    }

   // metiers => UC
    publique  abstraite  fonction  demiPerimetre ();
    publique  abstraite  fonction  périmètre ();
     surface de fonction abstraite  publique (); 
    publique  abstraite  fonction  Diagonale ();
}
    // $ fig = new Figure (); // Impossible car Figure est une classe Abstraite
?>