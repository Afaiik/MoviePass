<link rel="stylesheet" href="<?= CSS_PATH ?>/nav.css">

<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <!-- Titulo con logo -->
        <a class="navbar-brand " href="<?= FRONT_ROOT ?>">
          <img src="<?= IMG_PATH ?>/logo.PNG" width="50" height="50">
            <span class="navbarTitle">MoviePass</span>
        </a>

        <!-- Opciones NavBar -->
        <?php 
        if(isset($_SESSION['isAdmin'])){
          echo '<ul class="navbar-nav mt-2 mt-lg-0 ml-auto mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="';echo FRONT_ROOT. 'Movies"><i class="fas fa-film"></i>&nbspCartelera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="';echo FRONT_ROOT. 'Cinema" tabindex="-1" aria-disabled="true"><i class="fas fa-id-card"></i>&nbspCines</a>
            </li>
          </ul>';

        } else {
          echo '<ul class="navbar-nav mt-2 mt-lg-0 ml-auto mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="';echo FRONT_ROOT. 'Movies/ShowMovies"><i class="fas fa-film"></i>&nbspPeliculas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="';echo FRONT_ROOT. 'ApiMovie" tabindex="-1" aria-disabled="true"><i class="fas fa-id-card"></i>&nbspAgregar Pelicula</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="';echo FRONT_ROOT. 'Cinema" tabindex="-1" aria-disabled="true"><i class="fas fa-id-card"></i>&nbspCines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="';echo FRONT_ROOT. 'Compras" tabindex="-1" aria-disabled="true"><i class="fas fa-id-card"></i>&nbspCompras</a>
            </li>
          </ul>';
        }
        ?>


        <!--Opcion Perfil -->
        <?php 

            if(isset($_SESSION['userId'])){  

              echo '<ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">';echo $_SESSION['username'] . '</a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="';echo FRONT_ROOT. 'Profile"><i class="fas fa-user-alt"></i>&nbspMi Perfil</a>
                        <a class="dropdown-item" href="';echo FRONT_ROOT. 'Tickets"><i class="fas fa-ticket-alt"></i>&nbspMis Tickets</a>
                        <a class="dropdown-item" href="';echo FRONT_ROOT. 'Compras">><i class="fas fa-ticket-alt"></i>Compras Previas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="';echo FRONT_ROOT. 'Login"><i class="fas fa-sign-out-alt"></i>&nbspCerrar Sesión</a>
                      </div>
                    </li>                     
                  </ul>';   
             
            } else {
              echo '<ul class="nav navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="';echo FRONT_ROOT. 'Login"><i class="fas fa-sign-in-alt"></i></i>&nbspIniciar sesión</a>
                      </li>
                    </ul>';    
            }  
        ?>
      </div>
    </nav>