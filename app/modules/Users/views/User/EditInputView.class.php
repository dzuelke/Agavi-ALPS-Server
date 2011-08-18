<?php

class Users_User_EditInputView extends AlpsmicroblogUsersBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'User.Edit');
	}
}

?>