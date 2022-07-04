<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
<?php include "includes/carousel.php"; ?>

 <!-- Section présentation -->
<div class="container my-5">
     <div class="row">
          <?php include "includes/presentation.php"; ?>
     </div>
</div>

<!-- Section services -->
<?php include "includes/services.php"; ?>
<div class="container">
<script>
     router.push('/');
     router.push('/formations');
     router.push('/services');
     router.push('/contact');
</div>
<?php include "includes/footer.php"; ?>