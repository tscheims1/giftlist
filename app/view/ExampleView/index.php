<div class="example-wrapper">

	
	<?php while($this->products->have_posts()) : $this->products->the_post(); ?>
		
		<a href="<?php echo $this->products->post->guid;?>"><strong><?php echo $this->products->post->post_title;?></strong><br /></a>
		
	<?php endwhile;?>
	<?php 
	
	echo __("next", 'mvc-base-plugin');?>
</div>
