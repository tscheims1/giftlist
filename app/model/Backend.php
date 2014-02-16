<?php

namespace Giftlist\App\Model;

class Backend extends \Giftlist\Core\Model\BaseModel
{
	public function __construct($name = "")
	{
		parent::__construct($name);
	}
	/**
	 * This Method hook the WordPress init Action
	 */
	public function init()
	{
		$this->customType = array(
				'labels' => array(
				'name' => __( 'Geschenkliste' ),
				'singular_name' => __( 'Geschenk' )
				),
				'public' => true,
				'has_archive' => true,


				'supports' => array('title','editor' ,'thumbnail'),


				'public' => true,


				'show_ui' => true,


				'show_in_menu' => true,
				'rewrite' => true,
				'show_in_nav_menus' => true,
		);
		register_post_type('tscheims_giftlist',$this->customType);


		//wp_enqueue_media();
		
	}
	/**
	 * This Method will run, when the Plugin is actived
	 */ 
	public function activate()
	{
		flush_rewrite_rules();
	}
	/**
	 * This Method will run, when the Plugin is deactived
	 */
	public function deactivate()
	{
		flush_rewrite_rules();
	}
	/**
	 * This is the Uninstall Method
	 */
	public static function uninstall()
	{
		/*
		 * The Uninstall Script for the Plugin
		 */
		if(defined('WP_UNINSTALL_PLUGIN'))
		{
	//here you should delete options, tables or anything else.

		}
	}

}
?>