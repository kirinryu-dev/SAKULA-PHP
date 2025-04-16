<?php 

?>

<div>
    <!-- the header   -->
    <?php include_once 'includes/header.php' ;  ?>

</div>

<main>
    <!-- the main content    -->
    <?php include_once 'includes/navbar.php' ?>
    <div>
        <!-- this is where the OPS will happen   -->
        <h2>SAKULA Form</h2>
        <div class="form_container">
            <form action="php/traitement.php" method="POST">
                
            </form>

            <h2>
                <!-- Tasks display    -->
                 <span>
                    Tasks Display  
                 </span> 
            </h2>
            <div class="tasks_display-container">

            </div>
        </div>
    </div>
</main>

<div>
    <!-- the footer   -->
   <?php  include_once 'includes/footer.php'; ?>

</div>