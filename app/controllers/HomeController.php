<?php
class HomeController extends BaseController {

  const VERSION = '5.1';

	public function getIndex()
	{
		return Redirect::action('Page@getIndex', [self::VERSION]);
	}
}