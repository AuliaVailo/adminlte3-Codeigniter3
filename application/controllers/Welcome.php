<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->template->admin('contents/dashboard_v1');
	}

	public function dashboard2()
	{
		$this->template->admin('contents/dashboard_v2');
	}

	public function dashboard3()
	{
		$this->template->admin('contents/dashboard_v3');
	}

	public function widgets()
	{
		$this->template->admin('contents/widgets');
	}

	public function layoutOption($page = 'topnav')
	{
		if ( ! file_exists(APPPATH.'contents/layout/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                // show_404();
		}

		if($page == 'topnav') {
			$this->template->topnavbar('contents/layout/'.$page);
		} elseif($page == '') {
			
		}
	}


}
