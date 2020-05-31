<p>Here is a list of all DJELATNIKs:</p>
<a href="./views/djelatnici/insert.php">Unos novog djelatnika</a>
<?php foreach($djelatnici as $djelatnik) { ?>
  <p>
    <?php echo $djelatnik->IME ." ".$djelatnik->PREZIME  ?>
    <a href='?controller=djelatnici&action=show&id=<?php echo $djelatnik->ID_DJELATNIKA; ?>'>Vidi detalje</a>
      <a href='?controller=djelatnici&action=deletedjelatnik&id=<?php echo $djelatnik->ID_DJELATNIKA; ?>'>Briisi djelatnika</a>
  </p>
<?php } ?>