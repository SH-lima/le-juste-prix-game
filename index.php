
<?php
    require 'views/header.php';
?> 

<?php
$prix = 30000;
// echo $_POST["guess"];
if(isset($_POST["guess"])){
  if($_POST["guess"] < $prix){
    $reponse = "le chiffre ".$_POST["guess"] ." est trés petit";
  }elseif($_POST["guess"] > $prix){
    $reponse = "le chiffre ". $_POST["guess"] ." est trés grand";
  }else{
    $reponse = "Bravo! Vous avez deviné le prix : ".$_POST["guess"] ;
  }
}
?>

<img src="/bentley-bacalarredimensionner.jpg" alt="une belle montre de luxe" width="800px" height="400px"/>
<!-- > action="/index.php " method="GET"-->
  <form action="" method="post">
      <div class="input-group">
          <label for="price">C'est combien ?</label>
          <span>$</span><input id="price" name="guess" />
      </div>
      <button type="submit">Valider</button>
      <p><?php echo $reponse ?></p>

<?php
    require 'views/footer.php';
?>