<! DOCTYPE html>
< html >
< tête >
    
    < titre > Document </ titre >
</ tête >
    < corps >
        < form  action = " Untitled-4a.php "  method = " post " >
        < label  for = " " > Matricule </ label >
        < Entrée de  type = " texte "  nom = " Matricule "  class = " couleur " /> < br > < br >
        < label  for = " " > Nom </ label >
        < Entrée de  type = " texte "  nom = " Nom "  class = " couleur " /> < br > < br >
    
        < label  for = " " > Prenom </ label >
        < Entrée de  type = " texte "  nom = " Prenom " /> < br > < br >
   
        < label  for = " " > Sexe </ label >
        < input  type = " radio "  name = " Sexe "  value = " Masculin " /> Masculin
        < input  type = " radio "  name = " Sexe "  value = " Feminin " /> Feminin
        < Br />
        < Br />
    
        < label  for = " " > Adresse </ label >
        < Textarea  nom = " Adresse "  id = " "  Col. = " 25 "  lignes = " 2 " > </ textarea > < br >
    
        < label  for = " " > Service </ label >
        < select  name = " Service "  class = " Service " >
        < option  value = " Choix 1 " > Choisir </ option >
        < option  value = " Choix 2 " > Choix 2 </ option >
        < option  value = " Choix 3 " > Choix 3 </ option >
        </ Sélectionnez > < br > < br >
        < label  for = " " > Fonction </ label >
        < select  name = " Fonction " >
        < option  value = " Fonction 1 " > Choisir </ option >
        < option  value = " Fonction 2 " > Fonction </ option >
        < option  value = " Fonction 3 " > Fonction </ option >
        </ Sélectionnez > < br > < br >
    
        < input  type = " submit "  value = " Valider " />
        < input  type = " submit "  value = " Reinitialiser " />
        </ formulaire >
        < style >
        étiquette {
        largeur : 80 px ;
        affichage : en ligne - bloc ;
        vertical - aligner : haut ;
        marge : 6 px ;
      }
      entrée {
            largeur : 100 px ;
            rembourrage : 2 px ;
            hauteur : auto ;
      }
        .color { background - couleur : rose ; }
        </ style >
    </ corps >
</ html >