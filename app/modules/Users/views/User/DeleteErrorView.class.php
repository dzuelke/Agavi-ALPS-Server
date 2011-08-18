<?php

class Users_User_DeleteErrorView extends AlpsmicroblogUsersBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'User.Delete');
	}
}

?>