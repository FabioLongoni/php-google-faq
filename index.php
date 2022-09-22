<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Google-faq</title>
  <?php 
    include 'data.php';
  ?>
</head>
<body>
  <header>
    <div class="logo">
      Google Privacy e termini
    </div>
    <div class="nav__links">
      <a href="#">Introduzione</a>
      <a href="#">Norme sulla privacy</a>
      <a href="#">Termini di servizio</a>
      <a href="#">Tecnologie</a>
      <a href="#">Domande frequenti</a>
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