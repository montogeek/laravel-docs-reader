<?php

class Page extends \BaseController {

  public function show($id)
  {
    $id = ($id === 'undefined') ? 'introduction' : $id;
    $md = File::get(base_path()."/docs/$id.md");
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