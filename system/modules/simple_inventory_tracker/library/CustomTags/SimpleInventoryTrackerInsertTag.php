<?php

	namespace CustomTags;

	class SimpleInventoryTrackerInsertTag
	{
		public function onReplaceTag (string $insertTag)
		{
			// if this tag doesnt contain :: it doesn't have an id, so we can stop right here
			if (stristr($insertTag, "::") === FALSE) {
				return 'no_id';
			}

			// break our tag into an array
			$arrTag = explode("::", $insertTag);

			// lets make decisions based on the beginning of the tag
			switch($arrTag[0]) {
				// if the tag is what we want, {{simple_inventory::id}}, then lets go
				case 'simple_inventory':
					// take our id, $arrTag[1], and pull our data out and return it
					$ourInfo = SimpleInventoryTracker::findOneBy('id', $arrTag[1]);
					// for now, lets just return our ID to show we can get here
					return $ourInfo;
				break;

				// if we want to have other tags do other things they would go here
			}

			// this is an example from Andy for how I can pull that data out
			// <Model_Name>::findBy('<field_name>', 'lookup_data');

			// something has gone horribly wrong, let the user know and hope for brighter lights ahead
			return 'something_went_wrong';
		}
	}
