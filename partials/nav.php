<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.php"><?= WEB_SITE_NAME ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav">
         <li class="nav-item  <?php //echo set_active('index') ?>">
        <a class="nav-link" href="listuser.php"><?php //echo $menu['accueil'][$_SESSION['locale']] ?> Liste des utilisateurs</a>
      </li>

    </ul>

    
    <ul class="navbar-nav ml-auto mr-5">
      <!-- <li class="nav-item  <?php //echo set_active('index') ?>">
        <a class="nav-link" href="index.php"><?php //echo $menu['accueil'][$_SESSION['locale']] ?> <span class="sr-only">(current)</span></a>
      </li> -->

       <?php if(is_auth()) : ?>

        

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?= get_avatar(get_session('email')) ?>" alt="image de profil de <?= e(get_session('pseudo')) ?>" class="rounted avata-nav" >

          </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              

              <a class="dropdown-item <?= set_active('edituser') ?>" href="<?= 'edituser.php?id='.get_session('user_id') ?>"><?=  $menu['edit_user'][$_SESSION['locale']] ?> </a> 
              <a class="dropdown-item <?= set_active('profil') ?>" href="<?= 'profil.php?id='.get_session('user_id') ?>"><?=  $menu['mon_profil'][$_SESSION['locale']] ?></a> 
            
             
              <a class="dropdown-item <?= set_active('share') ?>" href="share.php"><?=  $menu['share'][$_SESSION['locale']] ?></a> 
              

              <div class="dropdown-ite divider" href="#"></div>
              <a class="dropdown-item" href="logout.php"><?=  $menu['deconnexion'][$_SESSION['locale']] ?></a> 
            </div>
          </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="logout.php">Deconnexion</a> 
        </li> -->
      <?php else: ?>

          <li class="nav-item <?= set_active('login') ?>">
            <a class="nav-link" href="login.php"><?=  $menu['connexion'][$_SESSION['locale']] ?></a>  
          </li>
          <li class="nav-item <?= set_active('register') ?>">
            <a class="nav-link " href="register.php"><?=  $menu['inscription'][$_SESSION['locale']] ?></a>
          </li>
      <?php endif; ?>
    </ul>
  
  </div>
</nav>