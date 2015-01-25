<?php

class Page extends \BaseController {

  public function getIndex($version = '4.1', $id)
  {
    $id = ($id === 'undefined') ? 'introduction' : $id;
    $md = File::get(base_path()."/docs/$version/$id.md");
    $pd = new Parsedown();

    $page = $pd->text($md);
    $index = $pd->text(File::get(base_path()."/docs/$version/documentation.md"));

    return View::make('index', compact('index', 'page'));
  }
}