<?php

namespace App\ContainerProperties;

interface PropertyInterface
{
    public function addProperty(string $propertyName, $value): void;

    public function deleteProperty(string $propertyName): void;

    public function getProperty(string $propertyName);

    public function updateProperty(string $propertyName, $value): void;

}