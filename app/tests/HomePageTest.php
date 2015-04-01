<?php

class HomePageTest extends TestCase {

	/**
	 * Test Home Page Redirects
	 *
	 */
	public function testHomePageRedirects()
	{
		$page = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isRedirect());
	}

	/**
	 * Test Introduction Page loads correctly
	 *
     */
	public function testIntroductionPage()
	{
		$page = $this->client->request('GET', '4.1/introduction/');

		$this->assertCount(1, $page->filter('h1:contains("Introducción")'));
	}

	/**
	 * Test redirect on file not found
	 *
	 */
	public function testRedirectOnFileNotFound()
	{
		$page = $this->client->request('GET', '6.0/exit');

		$this->assertTrue($this->client->getResponse()->isRedirect());
	}
}
