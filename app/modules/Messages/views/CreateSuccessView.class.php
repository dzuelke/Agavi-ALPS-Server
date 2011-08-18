<?php

class Messages_CreateSuccessView extends AlpsmicroblogMessagesBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Create');
	}
}

?>