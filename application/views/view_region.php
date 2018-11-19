<?php
    foreach ($lesRegions as $uneRegion)
    {
?>
    <input type='radio' value='<?php echo $uneRegion->idRegion; ?>' name='nomRegion' onclick='VoirVilleDeLaRegion(this.value)'"><?php echo $uneRegion->nomRegion; ?> - <?php echo $uneRegion->scoreRegion; ?></input><br>
<?php
    }
?>
<br>