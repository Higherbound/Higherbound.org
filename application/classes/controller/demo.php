<?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Demo extends Controller_Template 
  {
  	
  	public $template = 'demo/template';
  	
      /**
       * The before() method is called before your controller action.
       * In our template controller we override this method so that we can
       * set up default values. These variables are then available to our
       * controllers if they need to be modified.
       */
      public function before()
      {
          parent::before();
  
  	    if ($this->auto_render)
  	    {
  	    	// Initialize empty values
  	    	$this->template->title   = '';
  	    	$this->template->content = '';
  			
  		$this->template->styles = array();
  		$this->template->scripts = array();
          			
          }
      }
        	
      /**
       * The after() method is called after your controller action.
       * In our template controller we override this method so that we can
       * make any last minute modifications to the template before anything
       * is rendered.
       */
      public function after()
      {
	if ($this->auto_render)
	{
		$styles = array(
			/*'media/css/reset.css' => 'screen, projection',
			'media/css/style.css' => 'screen',
                        'media/css/superfish.css' => 'screen',*/
                        'min/b=media/css&f=reset.css,style.css,superfish.css' => 'screen',
		);
  
		$scripts = array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
			/*'media/js/jquery.pngFix.pack.js',
                        'media/js/hoverIntent.js',
                        'media/js/superfish.js',
                        'media/js/easySlider1.5.js',
                        'media/js/cufon-yui.js',
                        'media/js/Bebas_400.font.js',
                        'media/js/popup.js',
                        'media/js/custom.js',*/
                        'min/b=media/js&f=jquery.pngFix.pack.js,hoverIntent.js,superfish.js,easySlider1.5.js,cufon-yui.js,Bebas_400.font.js,popup.js,custom.js',
		);
		
		$this->template->styles = array_merge( $this->template->styles, $styles );
		$this->template->scripts = array_merge( $this->template->scripts, $scripts );
	}
	parent::after();
      }
  }