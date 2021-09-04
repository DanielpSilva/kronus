<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Websites extends CI_Controller {

	public function index()
	{
		$this->template->show('Websites');
	}
}
