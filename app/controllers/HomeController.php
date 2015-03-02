<?php
class HomeController extends BaseController {

	public function getIndex($version = '5.0')
	{
		return Redirect::action('Page@getIndex', [$version, 'introduction']);
	}
}