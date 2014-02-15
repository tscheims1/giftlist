<?php

namespace App\Controller;

class ExampleController extends \Core\Controller\BaseController
{
	protected $name = "Example";

	/**
	 * Sample IndexAction
	 */
	public function indexAction()
	{
		$wp = new \WP_Query(array('post_type' => 'product'));
		
		$object = \Core\Lib\ImportHelper::import("\App\Helper\Helper\TestHelper");
		print_r($object);
		return $this->view->render('index',array('products' => $wp));
	}
	public function templateRender()
	{
		
		$this->currentTemplate = "isSingle";
		$this->templateCondtions = array
		(
			'is_single' => array('condition' => true)	
		);
		add_action('template_include',array($this,'registerTemplate'));
	}
}