<html>
   <head>
      <link href="css/app.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <title>Controle de Estoque</title>
   </head>
    <body>
      <div class="container">
       <h1>Detalhes Produto</h1>
       <table class="table table-striped table-bordered table-hover">
            <tr>
               <td><b>Nome</b></td>
               <td><b>Valor</b></td>
               <td><b>Descricao</b></td>
               <td><b>Quantidade</b></td>
           </tr>
           <tr>
               <td><?= $p->nome ?></td>
               <td><?= $p->valor ?></td>
               <td><?= $p->descricao ?></td>
               <td><?= $p->quantidade ?></td>
           </tr>
       </table>
       </div>
    </body>
</html>