<header>
      <a class="name" href="../MAIN/movies.php">КиноМир</a>
      <nav>
        <ul class="center">
          <li><a href="../MAIN/main.php">Главная</a></li>
          <li><a  href="../MAIN/movies.php">Фильмы</a></li>
        </ul>
      </nav>
      <div class="photo">
        <img class="image-main" src="../../IMAGES/oxfam_176585.png" alt="" />
        <?php
        if (isset($_COOKIE['login']))
        echo ('<li><a class="signin" href="../MAIN/account.php">Мой Кабинет</a></li>');
      
      else
        echo ('<li><a class="signin" href="../MAIN/signin.php">Вход</a></li>');
        ?>
      </div>
    </header>