
<?php require 'partials/header.php'; ?>

<main role="main" class="container">
<?php include 'partials/errors.php' ?>

<h1>page de profil</h1> 

<div class="row">
    
    <div class="col-md-6">

        <div class="card">
            <div class="card-header h4"><strong>Profil  de <?= $user->pseudo ?></strong> </div>
            <div class="card-body">Content
       

        <div class="row"><!--debut de la ligne  -->
            <div class="col-md-5">
                <img src="<?= get_avatar($user->email) ?>" alt="image de profil de <?= e($user->pseudo) ?>" class="rounded" >

            </div>

           
        </div><!--fin de la ligne  -->


        <div class="row"> <!--debut de la ligne  -->
            <div class="col-md-6">
                <strong><?= e($user->pseudo) ?></strong><br>
               <a href="mailto:<?= e($user->email) ?>"><strong><?= e($user->email) ?></strong></a> 
            </div>
        </div><!--fin de la ligne  -->
              
            </div>
            
        </div>
    </div>


    <div class="col-md-6">
        
        <div class="card">
            <div class="card-header h4"><strong>Completer mon profil</strong></div>
            <div class="card-body">

            <form action="" method="POST" data-parsley-validate class="card card-body bg-light" >

                <div class="row"> <!-- debut de la ligne  -->
                    <div class="col-md-6"><!-- debut de la  premiere colone  -->

                        <div class="form-group">
                            <label for="inputName">Nom</label>
                            <input type="text" data-parsley-trigger="change" class="form-control" required name="nom" value="<?=get_input_data('nom') ?>" id="inputName"  placeholder="Enter Nom">
                            
                        </div>

                        <div class="form-group">
                            <label for="inputCity">ville</label>
                            <input type="text" data-parsley-trigger="change" class="form-control" required name="city" value="<?=get_input_data('city') ?>" id="inputcity"  placeholder="Enter ville">
                            
                        </div>

                        <div class="form-group">
                            <label for="inputTwitter">twitter</label>
                            <input type="text" data-parsley-trigger="change" class="form-control" required name="twitter" value="<?=get_input_data('twitter') ?>" id="inputTwitter" >
                            
                        </div>

                    </div><!-- fin de la premiere colone  -->



                    <div class="col-md-6"><!-- debut de la deuxième colone -->
                         <div class="form-group">
                            <label for="inputCountry">Pays</label>
                            <input type="text" data-parsley-trigger="change" class="form-control" required name="country" value="<?=get_input_data('country') ?>" id="inputName"  placeholder="Enter votre pays">
                         
                        </div>
                        <div class="form-group">
                            <label for="inputsexe">Sexe</label>
                            <select name="sexe" id="inputsexe" class="form-control" required name="country">
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                    
                        </div>
                        <div class="form-group">
                            <label for="inputgit">Github</label>
                            <input type="text" data-parsley-trigger="change" class="form-control" required name="github" value="<?=get_input_data('github') ?>" id="inputgit"  >
                            
                        </div>
                    </div><!-- fin de la deuxième colone -->

                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="inputboulot">
                                <input type="checkbox"  name="boulot" id="inputboulot" >
                                Disponible pour emploi?</label>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Biographie</label>
                            <textarea class="form-control rounded-0" name="biogra" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>


                    </div>

                </div><!-- fin de la ligne  -->
                <input type="submit" value="Mettre à jour" name="update" class="btn btn-primary"/>
            </form>

            </div>
        </div>
    </div>
    

</div>

</main>



<?php require 'partials/footer.php'; ?>