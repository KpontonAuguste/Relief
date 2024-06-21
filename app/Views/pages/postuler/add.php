
<form action="<?=route_to('creer.postule')?>" method="POST">
    <label>Fichier</lable>
    <input type="file" name= "postuler_file" id="postuler_file" class="form-control" >
    <br>
    <label>Nom</lable>
    <input type="text" name= "nom" id="nom" class="form-control" required>
    <br>
    <label>Prenom</lable>
    <input type="text" name= "prenom" id="prenom" class="form-control" required>
    <br>
    <label>Adresse</lable>
    <input type="text" name= "adresse" id="adresse" class="form-control" required>
    <br>
    <label>Email</lable>
    <input type="text" name= "email" id="email" class="form-control" >
    <br>
    <label>Date de naissance</lable>
    <input type="text" name= "date_naissance" id="date_naissance" class="form-control" required>
    <br>
    <label>Telephone</lable>
    <input type="text" name= "telephone" id="telephone" class="form-control" required>
    <br>
    <label>diplome</lable>
    <input type="text" name="diplome" id="diplome" class="form-control" >
    <br>
    <input type="submit" name= "submit"  class="btn btn-primary btn-lg"  value="postuler"/>
</form>
         