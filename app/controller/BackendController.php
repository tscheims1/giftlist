<?php

namespace Giftlist\App\Controller;

class BackendController extends \Giftlist\Core\Controller\BaseController
{
	protected $name = "Backend";

	/**
	 * Sample IndexAction
	 */
	public function indexAction()
	{
		
	
		$this->view->render('index',array('sample' => 'Sample Text'));
	}
}
?>