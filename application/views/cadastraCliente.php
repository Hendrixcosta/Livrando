<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
 //pd($data);
?>


<!-- div main onde vai todo o conteúdo central-->
<div role="main" class="container col-sm-9 col-sm-push-3">
        
        <?php
        
        //pd($data);
        echo "<div class=\"alert alert-error\">";   
        if (isset($data)){
            echo $data['mensagem'];
        }
        echo "</div>";
        function print_form($fname, $lname, $email, $street, $city, $state, $zip) {
            ?>
            <div class="row" >
                <div id="titulo" class="col-sm-12">
                    <h3>Por favor, entre com seus dados</h3>
                </div>
                <form id="formulario" method="POST" action = "<?php echo base_url("Valida")?>" class="form-group col-sm-10 push-sm-2 formulario" role="form">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="fname">First Name:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="lname">Last Name:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname; ?>" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="email">Email:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="email@dominio.com">
                            </div>
                        </div>                
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="street">Street:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="street" id="street" value="<?php echo $street; ?>"  placeholder="Street">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="city">City:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="city" id="city" value="<?php echo $city; ?>"  placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="state">State:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="state" id="state" value="<?php echo $state; ?>"  placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="zip">Zip:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="zip" id="zip" value="<?php echo $zip; ?>"  placeholder="Zip">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group"> 
                            <div class="col-sm-2 text-left">
                                <button type="submit" class="btn btn-success"  name="submit" value="Submit">Cadastrar</button>
                            </div>
                            <div class=" col-sm-2 text-right">
                                <button type="reset" class="btn btn-danger" onclick="location.href = 'index.php'">Voltar </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php
        }

//** fim da função "print_form"

        function check_form($fname, $lname, $email, $street, $city, $state, $zip) {
            if (empty(trim($fname))) {
                echo "<h3> O campo First Name deve ser preenchido!</h3>";
                print_form($fname, $lname, $email, $street, $city, $state, $zip);
            } elseif (empty(trim($fname))) {
                echo "<h3> O campo nome deve ser preenchido!</h3>";
                print_form($fname, $lname, $email, $street, $city, $state, $zip);
            } elseif (empty(trim($email)) || substr_count($email, '@') <= 0) {
                echo "<h3>Email deve ser preenchido e conter @ !</h3>";
                print_form($fname, $lname, $email, $street, $city, $state, $zip);
            } else {
                confirm_form($fname, $lname, $email, $street, $city, $state, $zip);
            }
        }

//** fim da função "check_form"


        function confirm_form($fname, $lname, $email, $street, $city, $state, $zip) {
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
                ?>
                <div class="col-sm-7 col-sm-offset-1" >
                    <div id="titulo" class="col-sm-12 text-center">
                        <h2>Obrigado!</h2>
                        <h3>Senrhor(a) <?php echo $fname?> <?php echo $lname?> seu cadastro foi realizado com sucesso!</h3>
                    </div>
                    <div class="row text-center">
                        <a class="btn btn-danger " href="index.php">Volatar para index</a>
                    </div>
                </div>
                <?php
            }
        }
        //** fim da função "confirm_form"
        
        
        
        /* Main Program */
        
        if (!isset($email)){
            $email="";
        }
        
        if (empty($_POST["submit"]) || $_POST['submit'] == 'cadastrar' || isset($email)) {
            print_form("", "", $email, "", "", "", "");
        } else {
            //check_form($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["street"], $_POST["city"], $_POST["state"], $_POST["zip"]);
            
        }
        ?>
</div>