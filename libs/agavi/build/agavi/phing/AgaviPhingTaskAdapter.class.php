<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Agavi package.                                   |
// | Copyright (c) 2005-2011 the Agavi Project.                                |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.agavi.org/LICENSE.txt                   |
// |   vi: set noexpandtab:                                                    |
// |   Local Variables:                                                        |
// |   indent-tabs-mode: t                                                     |
// |   End:                                                                    |
// +---------------------------------------------------------------------------+

/**
 * Implements a default adapter for listening for task events.
 *
 * @package    agavi
 * @subpackage build
 *
 * @author     Noah Fontes <noah.fontes@bitextender.com>
 * @copyright  Authors
 * @copyright  The Agavi Project
 *
 * @since      1.0.0
 *
 * @version    $Id: AgaviPhingTaskAdapter.class.php 4669 2011-05-25 20:53:42Z david $
 */
class AgaviPhingTaskAdapter implements AgaviIPhingTaskListener
{
	/**
	 * Invoked when a task is entered.
	 *
	 * @param      AgaviPhingTaskEvent The raised event.
	 *
	 * @author     Noah Fontes <noah.fontes@bitextender.com>
	 * @since      1.0.0
	 */
	public function taskEntered(AgaviPhingTaskEvent $event)
	{
		
	}
	
	/**
	 * Invoked when a task is left.
	 *
	 * @param      AgaviPhingTaskEvent The raised event.
	 *
	 * @author     Noah Fontes <noah.fontes@bitextender.com>
	 * @since      1.0.0
	 */
	public function taskLeft(AgaviPhingTaskEvent $event)
	{
		
	}
}

?>