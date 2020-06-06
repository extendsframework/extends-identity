<?php
declare(strict_types=1);

namespace ExtendsFramework\Identity;

class Identity implements IdentityInterface
{
    /**
     * Identity identifier.
     *
     * @var mixed
     */
    private $identifier;

    /**
     * Identity constructor.
     *
     * @param mixed $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @inheritDoc
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
}
