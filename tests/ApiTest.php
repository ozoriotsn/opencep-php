<?php
namespace Ozoriotsn\tests\ApiTest;

use GuzzleHttp\Client;
use Ozoriotsn\OpenCep\Api;
use PHPUnit\Framework\TestCase;


class ApiTest extends TestCase
{
    /**
     * @covers Ozoriotsn\OpenCep\Api::OpenCep
     */
    public function testOpenCepReturnsInstanceOfClient()
    {
        $client = Api::openCep();

        $this->assertInstanceOf(Client::class, $client);
    }


}
