<?php
include("includes/header.php")
?>


<form action="updating_foto.php" enctype="multipart/form-data" method="POST">

    <input type="text" name="cedula" placeholder="cedula">
    <input type="file" name="Foto">
    <button type="submit" name="Save"> guardar</button>
    

</form>


<?php
include("includes/footer.php")
?>