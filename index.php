<?php include_once("./header.php"); ?>
<div class="home-page page">
   <h1>This is <strong>Home</strong>  Page</h1>
</div>
<?php if ( $_GET["rel"]!="page") { echo "</div>"; } ?>
<?php include_once("./footer.php"); ?>