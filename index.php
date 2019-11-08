<?php

    $title = 'Prism Typography - Fluid Scales for Designers';

    $description = '';

    include('src/dochead.php');
    
  ?>

<body>

<style id="prism-mqs" type="text/css">
  /* */
</style>

<main class="o-grid">

  <?php include('components/views.php'); ?>
  
  <?php include('components/canvas.php'); ?>

  <?php include('components/charts.php'); ?>
  
</main>

<?php include('components/moustache-templates.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.2/mustache.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/dist/js/index.js"></script>

</body>
</html>
