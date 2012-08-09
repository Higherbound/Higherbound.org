<?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Page extends Controller_Demo {

  	public function action_index()
  	{
  		$this->template->title = __('Home');
  		$this->template->content = View::factory('page/home' );
  	}  
  	public function action_about()
  	{
  		$this->template->title = __('About Us');
  		$this->template->content = View::factory('page/about' );
  	}
  	public function action_contact()
  	{
  		$this->template->title = __('Contact Us');
  		$this->template->content = View::factory('page/contact' );
  	}
  	public function action_what()
  	{
  		$this->template->title = __('What We Do');
  		$this->template->content = View::factory('page/what_we_do' );
  	}
  	public function action_news()
  	{
  		$this->template->title = __('News &amp; Updates');
  		$this->template->content = View::factory('page/news' );
  	}
  	public function action_newsletters()
  	{
  		$this->template->title = __('Newsletter Archives');
  		$this->template->content = View::factory('page/newsletters' );
  	}
  	public function action_newsletter()
  	{
  		$this->template->title = __('Newsletter Archives');
  		$this->template->content = View::factory('page/newsletters' );
  	}
  	public function action_resources()
  	{
  		$this->template->title = __('Related Links');
  		$this->template->content = View::factory('page/resources' );
  	}
}