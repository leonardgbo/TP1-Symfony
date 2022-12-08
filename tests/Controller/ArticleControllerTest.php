<?php

namespace App\Tests\Article;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/index');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('title', 'Boutique en ligne');
    }
}