<?php

namespace StudentAffairsUwm\Shibboleth;

use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class Entitlement
{
    /**
     * Creates an instance of Entitlement from a server string.
     *
     * @param  string $entitlement
     * @return Entitlement
     */
    public function __construct($entitlement)
    {
        if (!is_string($entitlement)) {
            $class = get_class($entitlement);
            throw new InvalidArgumentException(
                "Entitlement requires instance of string, $class given."
            );
        }
    }

    /**
     * Applies entitlements to a user.
     *
     * @param  Model $user
     */
    public function applyTo(Model $user)
    {
        
    }
}