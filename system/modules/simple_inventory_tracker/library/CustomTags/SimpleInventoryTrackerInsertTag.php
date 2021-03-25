<?php

namespace CustomTags;

class SimpleInventoryTrackerInsertTag
{
    public function onReplaceTag (string $insertTag)
    {
        if (stristr($insertTag, "::") === FALSE) {
		return 'no_id';
	}
		
	$arrTag = explode("::", $insertTag);
		
        var_dump($arrTag);

        //<Model_Name>::findBy('<field_name>', 'lookup_data');
        
        
        return 'grabbed_and_returned';
    }
}
