<? php


  classe  Rectangle {
     
           // Instances d'attributs
            privé  $ largeur ;
            privé  $ longueur ;
          // Attributs classe ou Attributs static
            privé  statique  $ unir ;
          

            // Constructeur => méthode concrète d'instance
                fonction  publique __construct ( $ longueur = null , $ largeur = null ) {
                        if ( $ longueur ! = null ) {
                          $ this -> longueur = $ longueur ;
                        }
                        if ( $ largeur ! = null ) {
                          $ this -> largeur = $ largeur ;
                        }
              }
               
              // Getters methodes instances concretes
               fonction  publique getLongueur () {
                  return  $ this -> longueur ;
              }
               fonction  publique getLargeur () {
                return  $ this -> largeur ;
             }
             // setters methodes instances concrets
               fonction  publique setLargeur ( $ largeur ) {
                 $ this -> largeur = $ largeur ;
              }
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
                 fonction  publique demiPerimetre () {
                     return  $ this -> longueur + $ this -> largeur ;
                }
                 fonction  publique périmètre () {
                  return  $ this -> demiPerimetre ( $ this -> longueur , $ this -> largeur ) * 2 ;

                }
                 surface de fonction  publique () {
                  return  $ this -> longueur * $ this -> largeur ;
                }
                 fonction  publique diagonale () {
                  return  sqrt ( pow ( $ this -> longueur , 2 ) + pow ( $ this -> largeur , 2 ));
                }
              
  }
/ *
  // Classe d'accès ::
  // Objet ->
Rectangle :: setUnite ("m");
  // Objets
  $ rect1 = new Rectangle ();
  //$rect1.longueur => encapsulation d'erreur
  // Setters
  $ rect1-> setLongueur (1200000);
  $ rect1-> setLargeur (120000);
  // Getters
écho "Longueur". $ rect1-> getLongueur (). "". $ rect1-> getUnite (). "<br>";
echo "Largeur". $ rect1-> getLargeur (). "". $ rect1-> getUnite (). "<br>";
  $ rect2 = new Rectangle ();
 // Setters
 $ rect2-> setLongueur (1200002);
 $ rect2-> setLargeur (120002);
 // Getters
écho "Longueur". $ rect2-> getLongueur (). "". $ rect2-> getUnite (). "<br>";
echo "Largeur". $ rect2-> getLargeur (). "". $ rect2-> getUnite (). "<br>";
* /

?>