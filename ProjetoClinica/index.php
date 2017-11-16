<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include_once 'bootstrap.php';
         $curso = new \App\Model\Curso;
         $curso->setId(0);
         $curso->setNome("TSI");
         try{
            $entityManager->persist($curso);
            $entityManager->flush();
            echo "Inserido";
         }catch(Exception $e){
             echo $e->getMessage();
         }
        ?>
    </body>
</html>
