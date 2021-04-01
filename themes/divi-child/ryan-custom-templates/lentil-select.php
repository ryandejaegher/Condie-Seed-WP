<?php
include('partials/select-variables.php');
?>

<div class="ryan-custom-select">
<div class="select-block">
        <!-- <label for="Treatment">Treatment</label> -->
        <div class="select-row">

<!--             <?php echo $lentil_treatment; ?> -->
			<?php 
			bbloomer_get_product_ids_by_tags('treatment', 'lentil', 'treatment');
			?>
            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="treatment"
                rel="nofollow">Add Treatment</a>
        </div>
    </div>

    <div class="select-block">
        <!-- <label for="Inoculant">Inoculant</label> -->
        <div class="select-row">

<!--             <?php echo $lentil_inoculant ?> -->
			<?php 
			bbloomer_get_product_ids_by_tags('innoculant', 'lentil', 'innoculant');
			?>
            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="inoculant"
                rel="nofollow">Add Inoculant</a>
        </div>
    </div>

   

    <div class="select-block">
        <!-- <label for="Primer">Primer</label> -->
        <div class="select-row">

<!--             <?php echo $lentil_primer ?> -->
			<?php 
			bbloomer_get_product_ids_by_tags('primer', 'lentil', 'primer');
			?>
            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="primer"
                rel="nofollow">Add Primer</a>
        </div>
    </div>
</div>