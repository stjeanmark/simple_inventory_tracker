<?php

// src/EventListener/ReplaceInsertTagsListener.php
namespace App\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

class SimpleInventoryTrackerInsertTag
{
    public function onReplaceTag (string $insertTag)
    {
        if($insertTag === 'replaceme') {
            return 'replaced!';
        }
        
        return 'triggered_atleast';
    }
}
