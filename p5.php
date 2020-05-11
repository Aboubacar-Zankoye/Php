<! DOCTYPE html >
< html >
< tête >
    < titre > page5 </ titre >
 </ tête >
 < corps >
    < form  action = " page5.php " method = " post " >
        < label  for = " matricule " > matricule </ label >
        < input  type = " text " required  name = " matricule " id = " color " />
        < Br />
        < Br />
        < label  for = " nom " > nom </ label >
        < input  type = " text " required  name = " nom " id = " color " />
        < Br />
        < Br />
        < label  for = " prenom " > prenom </ label >
        < input  type = " text "   required  name = " prenom " />
        < Br />
        < Br />
        < label  for = " sexe " > sexe </ label > 
        < input  type = " radio " required  name = " sexe " value = " masculin " /> masculin
        < input  type = " radio " required  name = " sexe " value = " feminin " /> feminin
        < Br />
        < Br />
        < label  for = " adresse " > adresse </ label >
        < textarea  name = " adresse " id = "" cols = " 30 " rows = " 2 " >  </ textarea >
        < Br />
        < Br />
        < label  for = " service " > service </ label >
        < sélectionnez le  nom requis  = " service " class = " service " >
            < option  value = " choix " > choisir </ option >
            < option  value = " choix1 " > choix1 </ option >
            < option  value = " choix2 " > choix2 </ option >
        </ sélectionnez >
        < Br />
        < Br />
        
        < label  for = " fonction " > fonction </ label >
        < sélectionnez le  nom requis  = " fonction " >
            < option  value = " choix " > choisir </ option >
            < option  value = " choix1 " > choix1 </ option >
            < option  value = " choix2 " > choix2 </ option >
        </ sélectionnez >
        < Br />
        < Br />

        < input  type = " submit " name = " envoyer " value = " valider " />
        < input  type = " reset " value = " réinitialiser " />
    </ formulaire >

    <? php
        if ( isset ( $ _POST [ "envoyer" ])) {
    ?> 
        < table  border = " 2 " >
            < thead >
                < th > matricule </ th >
                < th > nom </ th >
                < th > prenom </ th >
                < th > sexe </ th >
                < th > adresse </ th >
                < th > service </ th >
                < th > fonction </ th >
            </ thead >

            < tbody >
                < tr >
                    < td > <? php  echo  $ _POST [ "matricule" ] ?> </ td >
                    < td > <? php  echo  $ _POST [ "nom" ] ?> </ td >
                    < td > <? php  echo  $ _POST [ "prenom" ] ?> </ td >
                    < td > <? php  echo  $ _POST [ "sexe" ] ?> </ td >
                    < td > <? php  echo  $ _POST [ "adresse" ] ?> </ td >
                    < td > <? php  echo  $ _POST [ "service" ] ?> </ td >
                    < td > <? php  echo  $ _POST [ "fonction" ] ?> </ td >
                </ tr >
            </ tbody >

        </ table >
    <? php
        }

    ?>
    < style >
        # couleur {
            couleur de fond : rose;
        }
        entrée [ «soumettre» ] {
            couleur de fond : gris foncé;

        }
        . service {
            largeur : 150 px ;
        }
    </ style >
</ corps >
</ html >