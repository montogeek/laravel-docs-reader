<?php

class Page extends \BaseController {
	
	/**
	 * Muestra una página de documentación
	 *
	 * @param  string  $pagina Página de documentación
	 * @return Response
	 */
	public function show($pagina)
	{
		$pagina = ($pagina === 'undefined') ? 'introduction' : $pagina;
		$md = File::get(base_path()."/docs/$pagina.md");
		$pd = new Parsedown();
		$page = $pd->text($md);
		if(Request::ajax()) {
			return $page;
		}
		$documentation = File::get(base_path()."/docs/documentation.md");
		$documentation = $pd->text($documentation);
		return View::make('index', compact('documentation'));
	}
}
