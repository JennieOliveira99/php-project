<?php


ob_start();
require('../sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Lorem</title>
        <link rel="stylesheet" href="./style/app.min.css">
      
        <link rel="stylesheet" href="./style/style.css">
       
</head>
<body>


<!-- Main Content -->
<div align="center" style="padding:20px; margin-top:120px;" >
 
        <div class="col-md-10"> 
      <section class="section" >


            <!-- inicio topo menu -->
            <?php
            
            require_once('topo.php');

            ?>
      
            <!-- fim topo menu -->


           <br>
          <!-- INICIO TABELA   -->
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ativos</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Nº</th>  
                            <th>Capa</th>
                            <th>Criado</th>
                          
                            <th>Nome</th>
                            <th>Valor</th>
                           
                            <th>Editar</th>
                            <th>Excluir</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            
                          
                          <tr>
                            <td>7</td>
                            <td><img src="assets/img/sem-imagem.png" alt="" style="width:50px;"></td>
                            <td><?= date('d/m/Y') ?></td>
                            <td>Camisa</td>
                            <td>R$ 77</td>
                                                   
                            <td><a href="" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="" method="post">
                                 <input type="hidden" name="shepp-firewall" value="">
                                 <input type="hidden" name="idDelete" value="">
                                 <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
                                 </form>
                            </td>
                          </tr>
                         

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
      <!-- fim TABELA -->
      </section>
      </div>
        
       
    </div>

  <script src="./js/custom.js"></script>

 
  

</body>
</html>

<?php
ob_end_flush();
?>