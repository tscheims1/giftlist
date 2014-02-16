<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".give-gift").click(function()
		{
			var val = jQuery(this).attr('value');
			
			var data = {};
			data.action = 'giftlist';
			data.value = val;
			data.method = 'manageGift';
			
			jQuery.post('<?php echo get_admin_url();?>admin-ajax.php', data,function(data) {
				console.log(data);
				location.reload()
			},'json');
		});
		
		jQuery(".ungive-gift").click(function()
		{
			var val = jQuery(this).attr('value');
			
			var data = {};
			data.action = 'giftlist';
			data.value = val;
			data.method = 'deleteGift';
			
			jQuery.post('<?php echo get_admin_url();?>admin-ajax.php', data,function(data) {
				console.log(data);
				location.reload()
			},'json');
		});
	});
</script>
<div>
<div class="gift-wrapper">

		<?php while($this->gifts->have_posts()) : $this->gifts->the_post();?>
		<div class="col-sm-6">
		<div class="gift-title"><strong><?php echo $this->gifts->post->post_title;?></strong></div>
		<div class="gift-image">
			<?php if ( has_post_thumbnail() ) 
			{
				echo the_post_thumbnail(
				array(300,300));
			}?>	
		</div>
		<div class="gift-content"><?php echo the_content('');?></div>
		<?php if(!isset($this->givenGifts[$this->gifts->post->ID])):?>
			<div class="give-gift" value="<?php echo $this->gifts->post->ID;?>">Schenken</div>
		<?php endif;?>
		<?php if(isset($this->givenGifts[$this->gifts->post->ID]) 
			&& $this->givenGifts[$this->gifts->post->ID]['user_id'] == get_current_user_id()):?>
			<div class="ungive-gift" value="<?php echo $this->gifts->post->ID;?>">Nicht mehr schenken</div>
		<?php endif;?>
		<?php if(isset($this->givenGifts[$this->gifts->post->ID]) && 
			$this->givenGifts[$this->gifts->post->ID]['user_id'] != get_current_user_id()):?>
			<div class="alreay-given" value="<?php echo $this->gifts->post->ID;?>">verschenkt</div>
		</div>
		<?php endif;?>
	</div>
	<?php endwhile;?>
	<div style="clear:both;"></div>
</div>