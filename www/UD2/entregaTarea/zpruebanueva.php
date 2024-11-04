<div class="container-fluid">
            <h1>Nueva Formularios</h1>
            <br />
                    
            
            <?php

                
                    include ('utils.php');
              
               
            $x=" http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E ";
            echo strlen($x).$x."<br/>";




            $x=prueba($x);
            echo strlen($x).$x."<br/>";
            $x=test_input($x);   
            echo strlen($x).$x."<br/>";
            for ($i=0; $i<strlen($x); $i++) {
                echo $x[$i]." ";
            }
            
            ?>
            
            <a href="nuevaForm.php" class="btn btn-info">Volver</a>

        </div>  