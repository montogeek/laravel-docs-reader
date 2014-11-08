<?php
class HomeController extends BaseController {

	public function showWelcome()
	{
		$md = File::get(base_path()."/docs/documentation.md");
		$pd = new Parsedown();
		$documentation = $pd->text($md);
		return View::make('index', compact('documentation'));
	}
}