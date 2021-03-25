<?php

// src/EventListener/ReplaceInsertTagsListener.php
namespace App\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

class SimpleInventoryTrackerInsertTag extends EventListener
{
    public function onReplaceTag (string $insertTag)
    {
        if($insertTag === 'mytag') {
            return 'replaced!';
        }
        else if($insertTag === 'simple_inventory') {
            return 'working!@!';
        }
        
        return 'triggered_atleast';
    }
}
