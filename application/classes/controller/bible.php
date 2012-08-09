<?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Bible extends Controller_Demo {
  
  	public function action_index()
  	{
  		$this->request->redirect('http://youversion.com/mobile');
  	}
 }