<?php

namespace Ozoriotsn\OpenCep;

class Address
{

    public $cep;
    public $logradouro;
    public $complemento;
    public $bairro;
    public $localidade;
    public $uf;
    public $ibge;

    /**
     * Address constructor.
     *
     * @param array $attributes
     */

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * Transform address into a JSON.
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * Transform address into an array.
     *
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

}