<?php
namespace Ozoriotsn\tests\Address;

use Exception;
use Ozoriotsn\OpenCep\OpenCep;
use Ozoriotsn\OpenCep\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    /**
     * @covers Ozoriotsn\OpenCep\OpenCep::findByCep
     * @covers Ozoriotsn\OpenCep\Validation
     * @covers Ozoriotsn\OpenCep\Api 
     * @covers Ozoriotsn\OpenCep\Address
     * @return void
     */
    public function testFindByCepSuccess()
    {
        // Arrange
        $cep = '01001-000';
        $address = openCep::findByCep($cep, 'json');

        // Assert
        $this->assertInstanceOf(Address::class, $address);
        $this->assertEquals($cep, $address->cep);
        $this->assertEquals('Praça da Sé', $address->logradouro);
        $this->assertEquals('lado ímpar', $address->complemento);
        $this->assertEquals('Sé', $address->bairro);
        $this->assertEquals('São Paulo', $address->localidade);
        $this->assertEquals('SP', $address->uf);
        $this->assertEquals('3550308', $address->ibge);
    }


    /**
     * @covers Ozoriotsn\OpenCep\Validation::validateCep
     * @covers Ozoriotsn\OpenCep\OpenCep::findByCep
     * @return mixed
     */
    public function testFindByCepThrowsExceptionForInvalidCep()
    {
    
        // Assert
        $this->expectException(Exception::class);

        // Act
        openCep::findByCep('123', 'json');


    }

}
