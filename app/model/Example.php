<?php

namespace App\Model;

class Example extends \Core\Model\BaseModel
{
	public function __construct($name = "")
	{
		parent::__construct($name);
		
		$this->customType = array(
							'labels' => array(
								'name' => __( 'Products' ),
								'singular_name' => __( 'Product' )
							),
						'public' => true,
						'has_archive' => true,
						
						'supports' => array('title', 'editor'),

				       'public' => true,
				
				       'show_ui' => true,
				
				       'show_in_menu' => true,
				
				       'show_in_nav_menus' => true,
						);
	}
	public function init()
	{
		register_post_type('product',$this->customType);
	}
	public function activate()
	{

	}
	public function deactivate()
	{
		
	}
	public static function uninstall()
	{
		/**
		 * The Uninstall Script for the Plugin
		 */
		if(defined('WP_UNINSTALL_PLUGIN'))
		{
			
			//here you should delete options, tables or anything else.
			
			
		}
		
	}

}
?>
