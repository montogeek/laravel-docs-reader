<?php

class Page extends \BaseController {

  public function getIndex($version, $id = 'installation')
  {
    $supportedVersions = $this->getSupportedVersions();

    if(File::exists(base_path()."/docs/$version/$id.md")) {
      $page_source = File::get(base_path()."/docs/$version/$id.md");
      $pd = new ParsedownExtra();
      $page = $this->replaceVersionPlaceholder($version, $pd->text($page_source));
      $index = $this->replaceVersionPlaceholder($version, $pd->text(File::get(base_path()."/docs/$version/documentation.md")));
    } else {
      return Redirect::secure('/');
    }

    return View::make('index', compact('index', 'page', 'version', 'supportedVersions'));
  }

  private function replaceVersionPlaceholder($version, $content)
  {
    return str_replace('{{version}}', $version, $content);
  }

  private function getSupportedVersions()
  {
    return [
      '5.1' => '5.1',
      '5.0' => '5.0',
      '4.1' => '4.1'
    ];
  }
}