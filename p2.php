< form  method = " post " action = "" >
< p >
    Entrez votre âge: < input  type = " int " name = " age " />
    < input  type = " submit " value = " ENVOYER " />
</ p >
<? php 
if ( isset ( $ _POST [ 'ENVOYER' ]))
{
echo  $ _POST [ 'age' ];
}
sinon {
    $ message = '' ;
}
?>
</ formulaire >