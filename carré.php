<? php
  classe  Carre {
     
            privé  $ longueur ;

            privé  statique  $ unir ;
          

                fonction  publique __construct ( $ longueur = null ) {
                        if ( $ longueur ! = null ) {
                          $ this -> longueur = $ longueur ;
                        }
                       
              }
               
               fonction  publique getLongueur () {
                  return  $ this -> longueur ;
              }
            
            
               fonction  publique setLongueur ( $ longueur ) {
                 $ this -> longueur = $ longueur ;
              }
              publique  statique  fonction  getUnite () {
                   return  self :: $ unite ;
             }
              publique  statique  fonction  setUnite ( $ s'unir ) {
                   self :: $ unite = $ unite ;
             }


              // metiers => UC
                 fonction  publique demiPerimetre () {
                     return  $ this -> longueur * 2 ;
                }
                 fonction  publique périmètre () {
                  return  $ this -> demiPerimetre () * 2 ;

                }
                 surface de fonction  publique () {
                  return  $ this -> longueur * $ this -> longueur ;
                }
                 fonction  publique diagonale () {
                  return  sqrt ( pow ( $ this -> longueur , 2 ) + pow ( $ this -> longueur , 2 ));
                }
              
  }
/ *
  // Classe d'accès ::
Rectangle :: setUnite ("m");
  
  $ rect1 = new Rectangle ();
  
  $ rect1-> setLongueur (1200000);
  $ rect1-> setLargeur (120000);
  
écho "Longueur". $ rect1-> getLongueur (). "". $ rect1-> getUnite (). "<br>";
echo "Largeur". $ rect1-> getLargeur (). "". $ rect1-> getUnite (). "<br>";
  $ rect2 = new Rectangle ();
 
 $ rect2-> setLongueur (1200002);
 $ rect2-> setLargeur (120002);
 
écho "Longueur". $ rect2-> getLongueur (). "". $ rect2-> getUnite (). "<br>";
echo "Largeur". $ rect2-> getLargeur (). "". $ rect2-> getUnite (). "<br>";
* /

?>