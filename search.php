<?php

require_once ("php/header.php");

if(isset($_POST['search-text'])){
    $search = mysqli_real_escape_string($conn, $_POST['search-text']);

    $sql = "SELECT * FROM `product` WHERE `item_name` LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    echo "<h3 class='text-warning mx-4 py-2'>Searching Product: ". $_POST['search-text'] ."</h3>";
   
    if($row = mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

?>

<div class="container">
    <div class="row text-center py-5"> 
        
        <?php

            component($row['item_name'], $row['item_price'], $row['item_image'], $row['item_id']);

                }
                }else{
                echo "<h5>Item not found.</h5>";
            }
            }

        ?>

    </div>
</div>

<?php
    // include top sale
    include("Template/_top-sale.php");
    
    // include footer
    include("footer.php");
?>