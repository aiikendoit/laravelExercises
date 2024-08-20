<?php

namespace App\Models;

interface FilamentUser
{
    // Define the methods that must be implemented by any class that uses this interface.
    public function canAccessFilament(): bool;
}
