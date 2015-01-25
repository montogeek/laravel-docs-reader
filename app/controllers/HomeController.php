<?php
class HomeController extends BaseController {

	public function showWelcome($version = '4.1')
	{
		return Redirect::action('Page@show', [$version, 'introduction']);
	}
}