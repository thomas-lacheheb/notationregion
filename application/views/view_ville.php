<?php
    foreach ($lesVilles as $uneVille)
    {
?>
    <input type='radio' value='<?php echo $uneVille->idVille; ?>' name='nomVille'><?php echo $uneVille->nomVille; ?> - <?php echo $uneVille->scoreVille; ?></input><br>
<?php
    }
?>

<input type='button' value='+ 5 points' onclick='ajouterScore()'>
<br>