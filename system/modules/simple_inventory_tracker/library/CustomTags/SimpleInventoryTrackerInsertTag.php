<?php

namespace CustomTags;

class SimpleInventoryTrackerInsertTag
{
    public function onReplaceTag (string $insertTag)
    {
        if (stristr($strTag, "::") === FALSE) {
		return false;
	}
		
	$arrTag = explode("::", $strTag);
		
        var_dump($arrTag);

        //<Model_Name>::findBy('<field_name>', 'lookup_data');
        
        
        return 'grabbed_and_returned';
    }
}
