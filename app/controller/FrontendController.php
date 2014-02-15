<?php

namespace Giftlist\App\Controller;

class FrontendController extends \Giftlist\Core\Controller\BaseController
{
	protected $name = "Frontend";

	/**
	 * Sample IndexAction
	 */
	public function indexAction()
	{
		$gifts =  new \WP_Query(array('post_type' => 'tscheims_giftlist'));
		$values = json_decode(get_option('gift_list_manage_list'),true);
		
		
		return $this->view->render('index',
			array(
			'gifts' => $gifts,
			'givenGifts' => $values));
	
		
	}
	public function dispatchAjaxAction()
	{
		
	}
	public function showGiftsAction()
	{
		
	}
}
?>