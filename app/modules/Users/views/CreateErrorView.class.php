<?php

class Users_CreateErrorView extends AlpsmicroblogUsersBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Create');
	}
}

?>