<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Valida extends CI_Controller  {

    public function index() {

        $data = array();
        
        //pegando os parametros
           if (isset($_POST["fname"])){$fname = $_POST["fname"];}
           if (isset($_POST["lname"])){$lname = $_POST["lname"];}
           if (isset($_POST["email"])){$email = $_POST["email"];}
           if (isset($_POST["street"])){$street = $_POST["street"];}
           if (isset($_POST["city"])){$city = $_POST["city"];}
           if (isset($_POST["state"])){$state = $_POST["state"];}
           if (isset($_POST["zip"])){$zip = $_POST["zip"];}
           
           
           //validacoee
          if (empty($_POST['fname'])){ $data[]= "O campo do primeiro nome é obrigatório" ;}
           if (empty($_POST['lname'])){ $data[]= "O campo do ultimo nome é obrigatório" ;}
           if (empty($_POST['email'])){ $data[]= "O campo do email deve ser válido" ;}
           //validacaodo email
           if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
               $data['mensagem']= "O campo do email  deve conter @ obrigatório" ;
           }
           
           
           //se passar em todas as validacoes 
           if (empty($data)){
                       
                                    $hostname = 'localhost';
                                    $username = 'root';
                                    $password = '';
                                    $database = 'bookauthors';

                                    try {
                                        $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
                                    } catch (PDOException $e) {
                                        echo "Falha: " . $e->getMessage();
                                        exit();
                                    }

                                    $stmt = $connection->prepare("INSERT INTO bookcustomers (fname, lname, email, street, city, state, zip) VALUES(?, ?, ?, ?, ?, ?, ?)");
                                    $stmt->bindParam(1, $fname);
                                    $stmt->bindParam(2, $lname);
                                    $stmt->bindParam(3, $email);
                                    $stmt->bindParam(4, $street);
                                    $stmt->bindParam(5, $city);
                                    $stmt->bindParam(6, $state);
                                    $stmt->bindParam(7, $zip);
                                    $stmt->execute();

                                    if ($stmt->errorCode() != "00000") {
                                        echo 'Codigo do erro: ' . $stmt->errorCode() . '<br />';
                                        echo 'Informação do erro: ' . implode(", ", $stmt->errorInfo());
                                    } else {
                                        
                                        
                                    $data['mensagem']="O senhor ".$fname ." foi cadastrado com sucesso!";
                                    $data['categorias'] =  $this->livrofactory->getCategorias();
                                    $this->load->view('header', $data);
                                    $this->load->view('bemvindo', $data);
                                    $this->load->view('footer');
                                        
                                        
                                    }
                                        
            }else {
                
                
                $data['categorias'] =  $this->livrofactory->getCategorias();
                $this->load->view('header', $data);
                //pd($data);
                $this->load->view('cadastra2', $data);
                $this->load->view('footer');
               
           }
           
           
           
        }
}

