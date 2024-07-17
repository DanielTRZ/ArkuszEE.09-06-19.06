
  <?php

  $numer = $_POST['numer'];
  $nrdysp = $_POST['nrdysp'];
$adres = $_POST['adres'];

$baza=mysqli_connect('localhost','root','','ratownictwo');
      if(mysqli_connect_errno())
      {echo"wystąpił bląd połączenia z baza";}
      $wynik=mysqli_query($baza, "INSERT INTO `zgloszenia` VALUES (NULL,'$numer','$nrdysp','$adres',0,NOW())");
          
      
      echo "<center><h1> Zgłoszenie zostało dodane</h1> </center>";
 
       
      mysqli_close($baza);
      ?>
