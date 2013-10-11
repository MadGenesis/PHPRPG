<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <H1>  test  til  develop  a  character class</H1>
        <!-- g� nu v�k! -->
        <?php
       include('character.php');
       $fail= "mage";
      $figur = new character();
      
     
        
      $figur->valg($fail);

        $figur->stats();
     var_dump($figur);
        
        ?>
    </body>
</html>
