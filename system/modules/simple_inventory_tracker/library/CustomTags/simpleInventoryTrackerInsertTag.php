<?php

// src/EventListener/ActivateAccountListener.php
namespace App\EventListener;

use Contao\MemberModel;
use Contao\ModuleRegistration;

class ActivateAccountListener
{
    public function onAccountActivation(MemberModel $member, ModuleRegistration $module): void
    {
        // Custom logic
    }
}