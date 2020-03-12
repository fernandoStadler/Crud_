<!doctype html>

<?php
  include("api/conect.php");
  include("api/serch.php");
?>
   


<html lang="pt-br">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Fernando Stadler">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS Sistema-->
    <link rel="stylesheet" href="assets/Style.css">
  
</head>
  <body>     
<!--Modal Adicionar-->
<form method="POST" action="api/insert.php" >
<div class="modal fade" id="AdicionarDados" tabindex="-1" role="dialog" aria-labelledby="AdicionarDados" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Adicionar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Marca:</span>
                                </div>
                                <input id="marca" name="marca" type="text" class="form-control" placeholder="Digite a Marca do produto" aria-label="Marca" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Valor:</span>
                                </div>
                                <input class="dinheiro" id="valor" name="valor" type="text" class="form-control" placeholder="Digite o valor" aria-label="Valor" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Data:</span>
                                </div>
                                <input type="date" name="data" id="data" placeholder="Data da Compra:" aria-label="Data"> 
                          </div>
                                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit"  class="btn btn-primary" >Salvar</button>
                        </div>
            </div>
        </div>
 </div>
 </form>
<!--Fim do Modal -->

<!--Modal Editar-->
<form method="POST" action="" >
<div class="modal fade" id="EditarDados" tabindex="-1" role="dialog" aria-labelledby="EditarDados" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Marca:</span>
                                </div>
                                <input id="marca" name="marca" type="text" class="form-control" placeholder="Digite a Marca do produto" aria-label="Marca" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Valor:</span>
                                </div>
                                <input class="dinheiro" id="valor" name="valor" type="text" class="form-control" placeholder="Digite o valor" aria-label="Valor" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Data:</span>
                                </div>
                                <input type="date" name="data" id="data" placeholder="Data da Compra:" aria-label="Data"> 
                          </div>
                                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit"  href="api/update.php?id=<?php echo$row['id'];?>" class="btn btn-primary" >Salvar</button>
                        </div>
            </div>
        </div>
 </div>
 </form>
<!--Fim do Modal -->



<!--Barra superior-->
    <div class="card">
        <div class="card-header header">
            Fernando Stadler
        </div>
        <!--Fim Barra superior-->
        <div class="card-body content">
            <!--Grid-->
            <div class="container">
                <form class="form-inline" method="POST" action="api/serch_id.php">
                    <input class="form-control mr-sm-2 pesquisar" name="pesquisar" id="pesquisar" type="Search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar por ID</button>
                  </form>
                    <a name="" id="" class="btn btn-success add" href="#" role="button" data-toggle="modal" data-target="#AdicionarDados">Adicionar</a>
                    <table class="table">
                        <thead>
                          <tr class="top-table">
                                  <th>ID:</th>
                                  <th>Marca:</th>
                                  <th>Valor:</th>
                                  <th>Data:</th>
                                  <th>#</th>
                            </tr>
                        </thead>
                            <?php while ($row = $con->fetch_array()) { ?>
                              <tr class="top-line">
                                  <td><?php echo $row["id"]; ?></td>
                                  <td><?php echo $row["marca"]; ?></td>
                                  <td class="dinheiro"><?php echo $row["valor"]; ?></td>
                                  <td class=""><?php echo $row["data"]; ?></td>
                                  <td><a name="" id="" class="btn btn-warning"role="button" data-toggle="modal" data-target="#EditarDados">Editar</a>
                             
                                      <a name="" type="button" id="" class="btn btn-danger" href="api/delete.php?id=<?php echo$row['id'];?>"role="button">Deletar</a>
                                    
                                
                                  </td>
                              </tr>
                                

                            <?php }?>                    
                    </table>
            </div>
        </div>
              <!--Fim Grid-->



        <div class="card-footer footer">
            Copyright © 2020 Fernando Stadler - Todos os direitos reservados Política de Privacidade
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>   
    <script src="assets/mask.js"></script>    
 
</body>
</html>