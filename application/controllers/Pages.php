<?php
/**
 * Created by PhpStorm.
 * User: jean christophe
 * Date: 16/08/2018
 * Time: 16:39
 */

class Pages extends CI_Controller
{

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}
		$data['title'] = ucfirst($page);


		$this->load->view("templates/header");
		$this->load->view("pages/".$page, $data);
		$this->load->view("templates/footer");


	}
}
