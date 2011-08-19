<?php
/**
 * @Entity @Table(name="messages")
 */
class Message
{
	/**
	 * @Id @Column(type="integer") @GeneratedValue
	 */
	public $id;
	
	/**
	 * @Column(type="string")
	 */
	public $message;
	
	/**
	 * @Column(type="datetime")
	 */
	public $creationTime;
	
	/**
	 * @ManyToOne(targetEntity="User", inversedBy="messages")
	 */
	private $user;
}

?>