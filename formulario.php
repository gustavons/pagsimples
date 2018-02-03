<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>BCC</title>
<link rel='stylesheet' type='text/css' href='css/login.css'>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/cadastro.js"></script>
<!--<script src="js/jquery-2.1.1.min.js"></script>-->
<script src="js/jquery.validate.js"></script>
<script src="js/validacaocadastro.js"></script>

<script src="js/jquery.mask.min.js"></script>
<script src="js/mask_cadastro.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>



  <h3 class="page-header">Cadastrar fornecedor </h3>
  <form  action="inserir.php" method="POST" >
      	<div class="row">
      	  <div class="form-group col-md-4">
      	  	<label for="razao_social">Razão social</label>
      	  	<input type="text" id="razao_social" class="form-control" placeholder="Razão social" name="razao_social">
                           
      	  </div>
    	  <div class="form-group col-md-4">
      	  	<label for="nome_fantasia">Nome fantasia</label>
      	   <input type="text" id="nome_fantasia" class="form-control" placeholder="Nome fantasia" name="nome_fantasia">
                            
      	  </div>
    	  <div class="form-group col-md-4">
      	  	<label for="cnpj">CNPJ</label>
      	  <input type="text" id="cnpj" class="form-control cnpj" placeholder="CNPJ" name="cnpj">
      	  </div>
    	</div>
	
    	<div class="row">
      	  <div class="form-group col-md-4">
      	  	<label for="inscricao_estadual">Inscrição estadual</label>
      	  	<input type="text" id="inscricao_estadual" class="form-control" placeholder="Inscrição estadual" name="inscricao_estadual">
                           
      	  </div>
    	  <div class="form-group col-md-4">
      	  	<label for="cep">CEP</label>
      	  	 <input type="text" id="cep" class="form-control" placeholder="CEP" name="cep" >
                            
      	  </div>
    	  <div class="form-group col-md-4">
      	  	<label for="nome_rua">Nome da Rua</label>
      	  	<input type="text" id="nome_rua" class="form-control" placeholder="Nome da Rua" name="nome_rua">
      	  </div>
    	  
    	</div>
	
    	<div class="row">
      	  <div class="form-group col-md-4">
      	  	<label for="numero">Número</label>
      	  	<input type="text" id="numero" class="form-control" placeholder="Número" name="numero">
                            
                           
      	  </div>
    	  <div class="form-group col-md-4">
      	  	<label for="complemento">Complemento</label>
      	  	<input type="text" id="complemento" class="form-control" placeholder="Complemento" name="complemento">
                           
                            
      	  </div>
    	  <div class="form-group col-md-4">
      	  	<label for="cidade">Cidade</label>
      	  	<input type="text" id="cidade" class="form-control" placeholder="Cidade" name="cidade">
      	  </div>
    	  
    	</div>
	
	
    	<div class="row">
      	  <div class="form-group col-md-4">
      	  	<label for="numero">Número</label>
      	  	<input type="text" id="estado" class="form-control" placeholder="Estado" name="estado">
                            
      	  </div>
      	  
    	  <div class="form-group col-md-4">
      	  	<label for="telefone">Telefone</label>
      	  	<input type="text" id="telefone" class="form-control" placeholder="Telefone" name="telefone">
                        
      	  </div>
      	  
    	  <div class="form-group col-md-4">
      	  	<label for="email">E-mail</label>
      	  	<input type="email" id="email" class="form-control" placeholder="E-mail" name="email">
      	  </div>
    	  
    	</div>
	
    	<div class="row">
      	  <div class="form-group col-md-6">
      	  	<label for="site_empresa">Site da empresa</label>
      	  	<input type="text" id="site_empresa" class="form-control" placeholder="Site da empresa" name="site_empresa">
                            
      	  </div>
    	 
    	</div>
    	<div class="row">
      	  
    	  <div class="form-group col-md-6">
      	  	<label for="ramo_empresa">Ramo de atividade da empresa</label>
      	  	<input type="text" id="ramo_empresa" class="form-control" placeholder="Ramo de atividade da empresa" name="ramo_empresa">
      	  </div>
    	</div>
	

	
    	<div class="row">
    	  <div class="col-md-12">
    	  	<button type="submit" class="btn btn-primary">Salvar</button>
    		<a href="template.html" class="btn btn-default">Cancelar</a>
    	  </div>
    	</div>

  </form>
  
  <div class="row"></div>
        <div class="col-md-4">
            <div class="aro-pswd_info">
                <div id="pswd_info">
                    <h4>Regras da senha</h4>
                    <ul>
                        <li id="letter" class="invalid">Pelo menos <strong>uma Letra</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>
</html>

