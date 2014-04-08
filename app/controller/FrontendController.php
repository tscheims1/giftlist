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
		$gifts =  new \WP_Query(array('post_type' => 'tscheims_giftlist', 'posts_per_page' => -1));
		$values = json_decode(get_option($this->model->getOptionName()),true);
		
		
		return $this->view->render('index',
			array(
			'gifts' => $gifts,
			'givenGifts' => $values));
	
		
	}
	public function dispatchAjaxAction()
	{
		$this->action = $_POST['method'];
		
		$this->callAction();
	}
	public function manageGiftAction()
	{
		$values = json_decode(get_option($this->model->getOptionName()),true);
		
		/* 
		 * Nur hinzufügen, wenn noch nicht eingetragen
		 */ 
		if(isset($values[(int)$_POST['value']]))
		{
			return false;
		}
		
		
		$values[(int)$_POST['value']] = array(
			'user_id' => get_current_user_id());
		update_option($this->model->getOptionName(),json_encode($values));
		return true;
		 
	}
	public function deleteGiftAction()
	{
		$values = json_decode(get_option($this->model->getOptionName()),true);
		
		if(isset($values[(int)$_POST['value']]))
		{
			if($values[(int)$_POST['value']]['user_id'] == get_current_user_id())
			{
				unset($values[(int)$_POST['value']]);
				update_option($this->model->getOptionName(),json_encode($values));
			}
			
		}
	}
}
?>