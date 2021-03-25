<?php

namespace CustomTags;

class SimpleInventoryTrackerInsertTag
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
