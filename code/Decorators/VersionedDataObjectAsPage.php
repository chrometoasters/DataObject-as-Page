<?php

class VersionedDataObjectAsPage extends DataExtension{

    private static $db = array(
        'Status' => 'Varchar'
    );

    private static $summary_fields = array(
		'Status' => 'Status'
	);	

	private static $versioning = array(
		"Stage",  "Live"
	);

    public function onBeforeVersionedPublish()
    {
        $this->owner->setField('Status','Published');
        $this->owner->write();
    }
}
