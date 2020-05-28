<?php
$this->setPageTitle(LANG_WALLS_CONTROLLER);
$this->addBreadcrumb(LANG_WALLS_CONTROLLER);
?>


<h1><?php echo LANG_WALLS_CONTROLLER; ?></h1>
<?php if (!$walls) { ?>
<p><?php echo LANG_WALLS_NONE;  ?></p>
 

<?php return; ?>
        
<?php } ?>

<div class="walls-list">
    <?php    foreach ($walls as $onewall) { ?>
    
    
    
		<div class="item">

<!--			<div class="details">-->
<?php echo $onewall['content_html']; ?>
  
                </div><div class="item">
<?php echo $onewall['user_id'];?>
</div>

<!--			</div>-->
		
                
              

    
    
    
    
    
    <?php }?>
    
    
    
</div>