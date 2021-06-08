<?php

namespace DivideBV\Postnl;

use SoapClient;

/**
 * Internal functionality common to all clients.
 */
abstract class BaseClient extends SoapClient
{
    /**
     * The URL of the production WSDL. Actual clients must define this.
     */
    protected const PRODUCTION_WSDL = '';

    /**
     * The URL of the sandbox WSDL. Actual clients must define this.
     */
    protected const SANDBOX_WSDL = '';

    /**
     * A list of complex types for generating a SoapClient classmap.
     */
    protected array $classes = [];

    public function __construct(string $apikey, bool $sandbox = false, ?string $wsdl = null)
    {
        // If no WSDL is provided, use either the sandbox or production WSDL.
        if (!$wsdl) {
            $wsdl = $sandbox ? static::SANDBOX_WSDL : static::PRODUCTION_WSDL;
        }

        parent::__construct($wsdl, [
            'classmap' => $this->getClassmap(),
            'trace' => true,
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => "apikey: $apikey",
                ],
            ]),
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        ]);
    }

    protected function getClassmap(): array
    {
        $classmap = [];

        foreach ($this->classes as $class) {
            $classmap[$class] = "DivideBV\\Postnl\\ComplexTypes\\$class";
        }

        return $classmap;
    }
}
