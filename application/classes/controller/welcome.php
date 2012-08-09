<?php defined('SYSPATH') or die('No direct script access.');
  class Controller_Welcome extends Controller_Demo {
  	public function action_index()
  	{
  		$this->template->title = __('Home');
  		$this->template->content = View::factory('page/home' );
  	}
}