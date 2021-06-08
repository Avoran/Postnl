<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfContact extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Contact';

    protected array $Contact;

    public function __construct(array $Contact)
    {
        $this->setContact($Contact);
    }

    public function getContact(): array
    {
        return $this->Contact;
    }

    public function setContact(array $Contact): static
    {
        $this->Contact = $Contact;

        return $this;
    }
}
