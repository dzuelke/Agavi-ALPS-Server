<?php

class Messages_Message_EditSuccessView extends AlpsmicroblogMessagesBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Message.Edit');
	}
}

?>