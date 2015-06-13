<?php

class Page extends \BaseController {

  public function getIndex($version, $id)
  {
    $id = ($id === 'undefined') ? 'introduction' : $id;

    if(File::exists(base_path()."/docs/$version/$id.md")) {
      $page_source = File::get(base_path()."/docs/$version/$id.md");
      $pd = new ParsedownExtra();
      $page = $pd->text($page_source);
      $index = $pd->text(File::get(base_path()."/docs/$version/documentation.md"));
    } else {
      return Redirect::to('/');
    }

    return View::make('index', compact('index', 'page', 'version'));
  }
}