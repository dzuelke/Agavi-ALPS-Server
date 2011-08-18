<?php

class Messages_Message_DeleteSuccessView extends AlpsmicroblogMessagesBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Message.Delete');
	}
}

?>