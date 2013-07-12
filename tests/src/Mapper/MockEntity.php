<?php
namespace Aura\Sql\Mapper;

class MockEntity
{
    public $identity;
    public $firstName;
    public $sizeScale;
    public $defaultNull;
    public $defaultString;
    public $defaultNumber;
    public $defaultIgnore;
    
    public function __construct($object = null)
    {
        foreach ((array) $object as $field => $value) {
            $this->$field = $value;
        }
    }
}
