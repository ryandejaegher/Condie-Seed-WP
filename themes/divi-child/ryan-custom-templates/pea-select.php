<?php
include('partials/select-variables.php');
?>

<div class="ryan-custom-select">
<div class="select-block">
        <!-- <label for="Treatment">Treatment</label> -->
        <div class="select-row">

<!--             <?php echo $pea_treatment; ?> -->
			<?php 
			bbloomer_get_product_ids_by_tags('treatment', 'pea', 'treatment');
			?>
            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="treatment"
                rel="nofollow">Add Treatment</a>
        </div>
    </div>

    <div class="select-block">
        <!-- <label for="Inoculant">Inoculant</label> -->
        <div class="select-row">

<!--             <?php echo $pea_inoculant ?> -->
			<?php 
			bbloomer_get_product_ids_by_tags('innoculant', 'pea', 'innoculant');
			?>
            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="inoculant"
                rel="nofollow">Add Inoculant</a>
        </div>
    </div>

   

    <div class="select-block">
        <!-- <label for="Primer">Primer</label> -->
        <div class="select-row">

<!--             <?php echo $pea_primer ?> -->
			<?php 
			bbloomer_get_product_ids_by_tags('primer', 'pea', 'primer');
			?>
            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" id="primer"
                rel="nofollow">Add Primer</a>
        </div>
    </div>
</div>