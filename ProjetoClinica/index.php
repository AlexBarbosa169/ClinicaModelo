<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include_once 'bootstrap.php';
//      Inserindo Paciente         
         $paciente = new \App\Model\Paciente;         
         $paciente->setCodPaciente(2);
         $paciente->setNome("Alex");
         $paciente->setCPF(1234567890);
         $paciente->setConvenio("Amil");
         $paciente->setDataNasc('1985-12-12');
         $paciente->setTelefone(1234567896);
         $paciente->setTipoSanguineo("O+");
//      Inserindo Medico
         $medico = new \App\Model\Medico;
         $medico->setCrm(123456);
         $medico->setEspecialidade("Especialidade");
         $medico->setNome("Nome");
         $medico->setTelefone(123435678);
         $medico->setDataNasc('1987-10-10');

//      Procurando paciente para inserir na consulta
        try {
            $query = $entityManager->createQuery("SELECT p FROM App\Model\Paciente p WHERE p.cpf = 1234567890");
            $user = $query->getResult();    
        } catch (Exception $e) {
            $e->getMessage();
        }        
        
        //      Procurando Medico para inserir na consulta
        try {
            $query = $entityManager->createQuery("SELECT m FROM App\Model\Medico m WHERE m.crm = 123456");
            $medic = $query->getResult();    
        } catch (Exception $e) {
            $e->getMessage();
        }
        
//      Inserindo Consulta

/*         $consulta = new \App\Model\Consulta;
         $consulta->setConsulta(3);
         $consulta->setPaciente($paciente);
         $consulta->setPaciente($user[0]);
         $consulta->setMedico($medic[0]);
         $consulta->setDescricao("Diarreia");
         $consulta->setDataConsulta("2017-10-23");*/

//      Inserindo Exame
         $exame = new \App\Model\Exame;
         $exame->setTipoExame(1234);
         $exame->setDescricao("Fezes");

//      Inserindo Medicamento
         $medicamento = new \App\Model\Medicamento;
         $medicamento->setCodMedicamento(1234);
         $medicamento->setDescricao("paracetamol");
         $medicamento->setNome("Tylenol");

        try {
            $query1 = $entityManager->createQuery("SELECT c FROM App\Model\Consulta c WHERE c.codConsulta = 3");
            $cons = $query1->getResult();                    
            $query2 = $entityManager->createQuery("SELECT e FROM App\Model\Exame e WHERE e.tipoExame = 1234");
            $exam = $query2->getResult();                    
            $query3 = $entityManager->createQuery("SELECT m FROM App\Model\Medicamento m WHERE m.codMedicamento = 1234");
            $medicament = $query3->getResult();    
        } catch (Exception $e) {
            $e->getMessage();
        }

//      Inserindo Prescricao
        $prescricao = new \App\Model\Prescricao();
        $prescricao->setPrescricao(1);
        $prescricao->setConsulta($cons[0]);
        $prescricao->setExame($exam[0]);
        $prescricao->setMedicamento($medicament[0]);  
        $prescricao->setComentario("É para dor de barriga!");

;         try{
//            $entityManager->persist($paciente);
//            $entityManager->persist($medico);
//            $entityManager->persist($consulta);                       
//            $entityManager->persist($exame);
//            $entityManager->persist($medicamento);
             $entityManager->persist($prescricao);    
            $entityManager->flush();
//            echo "Inserido" ;

        
//      Consulta de Paciente

//        $query = $entityManager->createQuery("SELECT p FROM App\Model\Paciente p WHERE p.nome = 'Alex'");
        $query = $entityManager->createQuery("SELECT p FROM App\Model\Paciente p WHERE p.cpf = 1234567890");
        $users = $query->getResult();
        
        foreach ($users as $key => $value) {
                echo $users[$key]->getNome();
        }
        
        echo "Deu certo";
         }catch(Exception $e){
             echo $e->getMessage();
         }
        ?>
    </body>
</html>
