<?php

namespace Ozoriotsn\OpenCep;

interface CepInterface
{

    public static function findByCep($cep,$type);

    public static function validateCep($cep);

    public static function validTypes($type);
}
