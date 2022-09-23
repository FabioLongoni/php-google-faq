<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800&family=Open+Sans:wght@300;400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Google-faq</title>
  <?php 
    include 'data.php';
  ?>
</head>
<body>
  <header>
    <div class="logo">
      <img src="https://www.privacyacademy.it/wp-content/uploads/2021/03/google.png" alt="">
      <span>Privacy & termini</span>
    </div>
    <div class="nav__links">
      <a href="#">Introduzione</a>
      <a href="#">Norme sulla privacy</a>
      <a href="#">Termini di servizio</a>
      <a href="#">Tecnologie</a>
      <a href="#" class="active__link">Domande frequenti</a>
    </div>
  </header>
  <main>
    <div class="container">
      <ul>
        <?php
          foreach($faqs as $key => $value) {
            ?>
              <li class="question__element">
                <h3>
                  <?= $value['question'] ?>
                </h3>
                
                <?php foreach($value['answer'] as $answer) {
                  ?>
                  <p class="p__answer">
                    <?= 
                      $answer
                    ?>
                  </p>
                  <?php
                } ?>
                
              </li>
            <?php  
          }
        ?>  
      </ul>
    </div>
  </main>
</body>
</html>