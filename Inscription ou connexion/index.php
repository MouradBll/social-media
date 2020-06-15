<!DOCTYPE html>
<html>
   <head>
      <title>Bienvenue!!!</title>
      <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
   </head>
   <div class="container">
      <div class="jumbotron text-justify mt-2" style="box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
         <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarColor02">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">CONNEXION <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="inscription.html">INSCRIPTION</a>
                     </li>
                  </ul>
               </div>
            </nav>
            <form method="POST" action="connexion.php" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="mail">Adresse Email</label>
                  <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">Nous garderons votre email secret !!!.</small>
               </div>
               <div class="form-group">
                  <label for="mdp">Mot de Passe</label>
                  <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
               </div>
               <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Rester Connecté(e) ?</label>
               </div>
               <button type="submit" class="btn btn-primary" name="soumettre">Submit</button>
            </form>
         </body>
      </div>
   </div>
</html>