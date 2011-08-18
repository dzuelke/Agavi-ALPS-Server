<?php

class Messages_Message_EditErrorView extends AlpsmicroblogMessagesBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Message.Edit');
	}
}

?>