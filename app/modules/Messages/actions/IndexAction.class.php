<?php

class Messages_IndexAction extends AlpsmicroblogMessagesBaseAction
{
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$db = $this->getContext()->getDatabaseConnection();
		$query = $db->createQuery('SELECT m, u FROM Message m JOIN m.user u ORDER BY m.creationTime DESC');
		$messages = $query->getResult();
		
		$this->setAttribute('messages', $messages);
		
		return 'Success';
	}
	
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		return 'Success';
	}
}

?>