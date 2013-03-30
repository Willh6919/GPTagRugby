<?php 
include 'head.php';
?>

<div class="container">
  <article class="row">
    <?php 
    include 'fragments/home-gallery.php';
    ?>
    <aside class="one fifth left-three padded border-right">
      <h1>Recent Posts</h1>
      <?php
      include 'fragments/blog-feed.php';
      ?>
      <hr>
      
    </aside>
    <aside class="one fifth padded border-left">
      <h1>Login </h1>
      <?php 
      include 'fragments/login.php'; 
      include 'fragments/lead-results.php';
      ?>
      
      
    </aside>
  </article>
  <article class="row">
  <?php 
    include 'fragments/teacher.php';
      include 'fragments/student.php';
       include 'fragments/organizer.php';
  ?>
   
   
  </article>
<?php 
include 'footer.php';
?>