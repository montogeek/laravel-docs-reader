<?php
class HomeController extends BaseController {

	public function getIndex($version = '4.1')
	{
		return Redirect::action('Page@getIndex', [$version, 'introduction']);
	}
}