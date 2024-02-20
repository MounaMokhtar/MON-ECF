<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <style>

.service {
    text-align: center;
    position: relative;
    left: 100px;
    top: 150px;
  border: 6px solid #3498db;
  display: inline-block;
  margin:0 80px;
  width: 220px;
  height: 280px;
  border-radius: 10px;
}

.service h2 {
  color: #3498db;
}

.service p {
  color: #333;
}


    </style>
</head>
<body>
    <div class="container">
        <h1 class="logo">Garage V.Parrot</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="nos.php">Nos Services</a></li>
            <li><a href="voi.php">Nos Voitures</a></li>
            <li><a href="contact.php">Contactez nous</a></li>
        </ul>
        <a class="butt1" href="connexion.php">Connexion</a>
    </div>
    <div class="service">
    <h2>Carrosseries</h2>
    <p>Peinture automobile</p>
    <p>Réparation, rénovation</p>
    <p>Remplacement </p>
    <p>Débosselage</p>
  </div>

  <div class="service">
    <h2>
Entretien</h2>
    <p>Huile </p>
    <p>Plaquettes de frein</p>
    <p>Essuie-glaces</p>
    <p>Éclairage et batterie </p>
  </div>




  <div class="service">
    <h2>  Réparation</h2>
    <p>Vidange et freinage 
</p>
    <p>Échappement</p>
    <p>Pièces de direction
</p>
    <p>Amortisseurs</p>
  </div>




  <div class="service">
    <h2>Pneus</h2>
    <p>Vente </p>
    <p>Montage</p>
  </div>





    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Your Website Name</p>
            <div class="time">
            <p id="current-time"></p>
            <p><span>Lundi </span> 9:00 AM -  6:00 PM</p>
            <p><span>Mardi </span> 9:00 AM -  6:00 PM</p>
            <p><span>Mercredi </span> 9:00 AM -  6:00 PM</p>
            <p><span>jeudi </span> 9:00 AM -  6:00 PM</p>
            <p><span>vendredi </span> 9:00 AM -  6:00 PM</p>
            <p><span>Samedi </span> 9:00 AM -  12:00 PM</p>
            <p><span>Dimanche </span>Ferme</p>
            </div>
            <div class="icons">
                <p class="hh1">trouvez nous</p>
          <a href="#"><i class="fa-brands fa-facebook"> </i></a>
          <a href="#"><i class="fa-brands fa-instagram"> </i></a>
          <a href="#"><i class="fa-brands fa-twitter"> </i></a>
          <a href="#"><i class="fa-brands fa-google-plus"> </i></a>
          <a href="#"><i class="fa-brands fa-youtube"> </i></a>
        </div>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    updateCurrentTime();
    setInterval(updateCurrentTime, 1000); 
});

function updateCurrentTime() {
    var currentTimeElement = document.getElementById('current-time');
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    
  
    hours = (hours < 10) ? '0' + hours : hours;
    minutes = (minutes < 10) ? '0' + minutes : minutes;
    seconds = (seconds < 10) ? '0' + seconds : seconds;

    var formattedTime = hours + ':' + minutes + ':' + seconds;
    currentTimeElement.textContent = 'Current Time: ' + formattedTime;
}

</script>
    <script src="script.js"></script>
</body>
</html>