<main id="main" class="main">
  <section class="section">
   
     <div class="row">
         <div class= "col-lg-12">
            
           <div class="card">
            <div class="card-body">

<form action="<?=route_to('creer.contact')?>" method="POST">
    <label>Nom</lable>
    <input type="text" name= "nom" id="nom" class="form-control" required>
    <br>
    <label>Prenom</lable>
    <input type="text" name= "prenom" id="prenom" class="form-control" required>
    <br>
    <label>Email</lable>
    <input type="text" name= "email" id="email" class="form-control" >
    <br>
    <label>Telephone</lable>
    <input type="text" name= "telephone" id="telephone" class="form-control" required>
    <br>
    <label>message</lable>
    <textarea type="text" name="message" id="message" class="form-control" > </textarea>
    <br>
    <input type="submit" name= "submit"  class="btn btn-primary btn-lg"  value="contact"/>
</form>
        
       </div>
         </div>
       
        </div>
      </div>
   
    </section>
</main>