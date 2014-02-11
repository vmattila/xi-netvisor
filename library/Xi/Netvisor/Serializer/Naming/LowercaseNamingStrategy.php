<?php

namespace Xi\Netvisor\Serializer\Naming;

use JMS\Serializer\Naming\PropertyNamingStrategyInterface;
use JMS\Serializer\Metadata\PropertyMetadata;

class LowercaseNamingStrategy implements PropertyNamingStrategyInterface
{
    public function translateName(PropertyMetadata $property)
    {
        return strtolower($property->name);
    }
}
