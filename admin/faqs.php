<div id='bodyright'>
    <?php
    if(isset($_GET['edit_cat'])){ 
        echo edit_cat();
    } else {
    ?>
    
    
    <h3>View All FAQs</h3>
    <div id='add'>
    <details>
        <summary style="width:20%" >Add FAQs </summary>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="qsn" placeholder="Enter QSN  Hear" />
            <textarea name="ans" placeholder="Enter Answer Here"></textarea>
           <center> <button name="add_faqs">Add FAQs</button></center>


    </form>

        </details> <br/>
        <?php 
        echo view_faqs()
        ?>
            </div>
</div>
<?php 
    echo add_faqs(); }
?>