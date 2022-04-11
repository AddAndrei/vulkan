<?php

namespace App\ContainerProperties;

class PropertyContainer implements PropertyInterface
{

    private array $propertyContainer = [];

    public function addProperty(string $propertyName, $value): void
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    public function deleteProperty(string $propertyName): void
    {
        unset($this->propertyContainer[$propertyName]);
    }

    public function getProperty(string $propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    public function updateProperty(string $propertyName, $value): void
    {
        if( !isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }
        $this->propertyContainer[$propertyName] = $value;
    }


}
















