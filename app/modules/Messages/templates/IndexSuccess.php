<ul>
<?php foreach($t['messages'] as $message): ?>
	<li class="message">
		<span class="user-text">
			<a rel="user" href="<?php echo $ro->gen('users.user.show', array('id' => $message->getId())); ?>"><?php echo htmlspecialchars($message->getId()); ?></a>
		</span>
		@<span class="date-time"><?php echo gmdate('c', $message->getTimestamp()); ?>: 
		<span class="message-text">
			<a rel="message" href="<?php echo $ro->gen('messages.message.show', array('id' => $message->getId())); ?>"><?php echo htmlspecialchars($message->getId()); ?></a>
		</span>
	</li>
<?php endforeach; ?>
</ul>