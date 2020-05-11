<! -
   1) Saisir la longueur et la largeur d'un rectangle à partir d'un formulaire
         Longueur et Largueur doivent être numériques (entier, bobine)
         Longueur positive
         Largeur positive
         Longueur> Largeur
   2) Traitements => UC
      -Caluler le Dp
      -Calculer le P
      -Calculer la S
      -Calculer la Diagonale
      // Premire Heure
         1-Afficher les erreurs
         2-Garder les Bonnes Valeurs et effacer les Mauvaises Valeurs
         3 sessions => $ _SESSION
            // Ouvrir session_start ()
            // Fermer la Session session_destroy ()
            // $ _SESSION est un tableau Associatif
      // Deuxieme Heure
      // POO en PHP => Rectangle
         1-Classe (Béton ou Abstraite ou Interface)
            a) Attribut (instance ou classe)
            a) Méthode (Instance ou Classe)
         2-Objet
         // Nommination
           Classe => MaClasse
           méthode => maMethode
           attribut => monattribut
 ->
 <? php
require_once ( "Validator.php" );
require_once ( "Rectangle.php" );

$ errors = [];
$ resultat = [];
$ longueur = "" ;
$ largeur = "" ;
$ email = "" ;
$ tel = "" ;
$ operateur = "" ;


// Ouvrir session_start ()
   session_start ();
   if (! isset ( $ _SESSION [ 'id' ])) {
    $ _SESSION [ 'id' ] = 0 ;
   }

   /// session_destroy ();

    if ( isset ( $ _POST [ 'btn_submit' ])) {

        if ( $ _POST [ 'btn_submit' ] === "calcul" ) {

        $ validator = new  Validator (); // ça permet de créer un objet
        
        // $ nom_variable (objet) = new nom_classe ();

        $ longueur = $ _POST [ 'longueur' ];
        $ largeur = $ _POST [ 'largeur' ];
        $ email = $ _POST [ 'email' ];
        $ tel = $ _POST [ 'tel' ];
        


            
            $ validateur -> comparer ( $ longueur , $ largeur , 'longueur' , 'largeur' );
            $ validator -> is_email ( $ email , 'email' );
            $ validator -> is_telephone ( $ tel , $ operateur , 'tel' );

            if ( $ validator -> is_valid ()) { // true
                    / * 
                     $ rectangle = new Rectangle ();
                     $ rectangle-> setLongueur ($ longueur);
                     $ rectangle-> setLargeur ($ largeur);
                     * /   
                      $ rectangle = new  Rectangle ( $ longueur , $ largeur );
                      $ id = $ _SESSION [ 'id' ];
                      $ id ++;
                      $ _SESSION [ "Resultat" . $ id ] = $ rectangle ;
                    
                      $ _SESSION [ 'id' ] = $ id ;

            }

         
         $ errors = $ validator -> getErrors ();

            if ( isset ( $ errors [ 'longueur' ])) {
                $ longueur = "" ;
            }
            if ( isset ( $ errors [ 'largeur' ]))) {
                $ largeur = "" ;
            }

        var_dump ( $ erreurs );

        } else {
            session_destroy ();
        }
    }


 ?>

<! doctype html >
< html  lang = " en " >
  < tête >
    < titre > Titre </ titre >
    <! - Balises META requises ->
    < meta  charset = " utf-8 " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1, shrink-to-fit = no " >

    <! - Bootstrap CSS ->
    < Link  rel = " stylesheet " href =" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css " intégrité =" SHA384-ggOyR0iXCbMQv3Xipma34MD + dH / 1fQ784 / j6cY / iJTQUOhcWr7x9JvoRxT2MZw1T " crossorigin = " anonyme " >
  </ tête >
  < corps >

         < div  class = " container mt-5 " >

         <? php  if ( isset ( $ errors [ 'all' ]))) {
             $ largeur = "" ;
             $ longueur = "" ;

         ?>
         < div  class = " alert alert-danger col-4 " >
             < strong > Erreur </ strong >  <? php  echo  $ errors [ 'all' ]; ?>
         </ div >
        <? php
        }
        ?>
             < form  method = " post " action = "" >
                 < div  class = " form-group row " >
                     < label  for = " inputName " class = " col-sm-1-12 col-form-label " > Longueur </ label >
                     < div  class = " col-6 ml-2 " >
                         < input  type = " text " class = " form-control " name = " longueur " value = " <? = $ longueur ?> " id = " inputName " placeholder = "" >
                     </ div >
            <? php  if ( isset ( $ errors [ 'longueur' ])) {


            ?>
                     < div  class = " alert alert-danger col-4 " >
                         < strong > Erreur </ strong >  <? php  echo  $ errors [ 'longueur' ]; ?>
                     </ div >
             <? php
            }
            ?>

                 </ div >
                 < div  class = " form-group row " >
                     < label  for = " inputName " class = " col-sm-1-12 col-form-label " > Largeur </ label >
                     < div  class = " col-6 ml-3 " >
                         < input  type = " text " class = " form-control " name = " largeur " value = " <? = $ largeur ?> " id = " inputName " placeholder = "" >
                     </ div >

                     <? php  if ( isset ( $ errors [ 'largeur' ])) {

                    ?>
                    < div  class = " alert alert-danger col-4 " >
                        < strong > Erreur </ strong >  <? = $ errors [ 'largeur' ]; ?>
                    </ div >
                 <? php
                 }
                ?>
                 </ div >

                 < div  class = " form-group row " >
                     < label  for = " inputName " class = " col-sm-1-12 col-form-label " > Email </ label >
                     < div  class = " col-6 ml-3 " >
                         < input  type = " text " class = " form-control " name = " email " value = " <? = $ email ?> " id = " inputName " >
                     </ div >

                     <? php  if ( isset ( $ errors [ 'email' ]))) {

                        ?>
                        < div  class = " alert alert-danger col-4 " >
                            < strong > Erreur </ strong >  <? = $ errors [ 'email' ]; ?>
                        </ div >
                        <? php
                        }
                        ?>
                </ div >

                < div  class = " form-group row " >
                     < label  for = " inputName " class = " col-sm-1-12 col-form-label " > Téléphone </ label >
                     < div  class = " col-6 ml-3 " >
                         < input  type = " text " class = " form-control " name = " tel " value = " <? = $ tel ?> " id = " inputName " >
                     </ div >
                     <? php  if ( isset ( $ errors [ 'tel' ]))) {

                        ?>
                        < div  class = " alert alert-danger col-4 " >
                            < strong > Erreur </ strong >  <? = $ errors [ 'tel' ]; ?>
                        </ div >
                        <? php
                        }
                        ?>


                </ div >

                 < div  class = " form-group row " >
                     < div  class = " offset-sm-2 col-sm-2 " >
                         < button  type = " submit " name = " btn_submit " value = " calcul " class = " btn btn-primary " > Calculatrice </ button >
                     </ div >
                     < div  class = " col-sm-2 " >
                         < button  type = " submit " name = " btn_submit " value = " reinitialisation " class = " btn btn-secondary " > Réinitialiseur </ button >
                     </ div >
                 </ div >
             </ formulaire >
         </ div >
<? php
      if ( isset ( $ _POST [ 'btn_submit' ]) && $ _POST [ 'btn_submit' ] === "calcul" && count ( $ errors ) === 0 ) {
?>
        < table  class = " table container bordé de table " >
            < thead >
                < tr >
                    < th > Demi-Périmètre </ th >
                    < th > Preimetre </ th >
                    < th > Surface </ th >
                    < th > Diagonale </ th >
                </ tr >
            </ thead >
            < tbody >
            <? php
                foreach ( $ _SESSION  as  $ key => $ rectangle ) {
                    if ( $ key ! == "id" ) {
            ?>
                < tr >
                    < td > <? = $ rectangle -> demiPerimetre () ?> </ td >
                    < td > <? = $ rectangle -> perimetre () ?> </ td >
                    < td > <? = $ rectangle -> surface () ?> </ td >
                    < td > <? = $ rectangle -> diagonale () ?> </ td >
                </ tr >

                <? php
                }
                }
                ?>

            </ tbody >
        </ table >

    <? php
       }
 ?>

    <! - JavaScript en option ->
    <! - jQuery d'abord, puis Popper.js, puis Bootstrap JS ->
    < Scénario  src = " https://code.jquery.com/jquery-3.3.1.slim.min.js " intégrité =" SHA384-Q8i / X + 965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH + 8abtTE1Pi6jizo " crossorigin =" anonyme " > </ scénario >
    < Scénario  src = " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " intégrité =" SHA384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin =" anonyme " > </ script >
    < Scénario  src = " https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " intégrité =" SHA384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf / nJGzIxFDsf4x0xIM + B07jRM " crossorigin =" anonyme " > </ scénario >
  </ corps >
</ html >