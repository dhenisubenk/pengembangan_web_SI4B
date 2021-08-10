<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><strong>STIKOM</strong>AMBON</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php  
            if ($level == "Admin") 
            {
                echo '<a class="nav-link" aria-current="page" href="index.php">Home</a>
                      <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                      <a class="nav-link" href="user.php">User</a>
                      <a class="nav-link" href="logout.php">Logout</a>';
            }
            else
            {
               echo '<a class="nav-link" aria-current="page" href="index.php">Home</a>
                      <a class="nav-link" href="logout.php">Logout</a>';
            }
          ?>
        </div>
      </div>
    </div>
</nav>