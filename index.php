  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TESTE DEV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
  </head>

  <body>
    <div class="container-fluid mt-3">
      <div class="jumbotron jumbotron-fluid bg-success text-white">
        <div class="container-fluid">
          <h2 class="display-5">Pesquisador de repositórios(Teste Dev)</h2>
          <p>Esse sistema foi desenvolvido para realizar busca de repositórios de usuarios do git e está utilizando a API disponibilizada pelo proprio Git.</p>
        </div>
      </div>
      <div>
      	<form class="row g-5">
         <div class="col-auto">
           <label for="inputPassword2" class="visually-hidden">Digite o usuário para buscar o repositório</label>
           <input type="text" class="form-control mb-3" id="searchUser" name="searchUser" placeholder="Pesquisar">
         </div>
       </form>
     </div>
     <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr class="table-success">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Acessar o repositório no git</th>
            <th scope="col">Baixe o repositório</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="row">
      <div class="col-md-7">

      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="js/principal.js"></script>

  </body>

  </html>