<?php
include_once ("header.php");
?>



<div class="container">
        <p>Izberi kriterij odhodkov</p>
    <form class= "form-inline" action="<?= BASE_URL . "obcina/poraba" ?>" method="get">
		<input type="text"  name="query" required/>
        <button type="submit" class="btn btn-primary" style="background-color:#373737;">išči</button>
        
    </form>
    </div>

<?php include_once "footer.php" ?>
