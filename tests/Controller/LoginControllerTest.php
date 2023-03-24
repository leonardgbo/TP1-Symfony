<?php

namespace App\Tests\Article;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    //public function testIndex()
   // {
    //    $client = static::createClient();
    //    $client->request('GET', '/login');

    //    $this->assertResponseIsSuccessful();
   //     $this->assertSelectorTextContains('title', 'OFF-BLACK');
   // }



public function testLogin()
    {
        $client = static::createClient();
        $client->request('GET', '/login');
        $client->submitForm('submit1', [
            'email' => 'sio@gmail.com',
            'password' => 'sio2022',
        ]);
        $this->assertResponseRedirects();
        $client->followRedirect();
        $this->assertSelectorExists('title', 'OFF-BLACK');
    }
 }