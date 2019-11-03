<?php
declare(strict_types=1);

namespace ExtendsFramework\Identity;

class Identity implements IdentityInterface
{
    /**
     * Identity identifier.
     *
     * @var string
     */
    private $identifier;

    /**
     * Identity constructor.
     *
     * @param string $identifier
     */
    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @inheritDoc
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
}
