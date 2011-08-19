<?php
/**
 * @Entity @Table(name="users")
 */
class User
{
	/**
	 * @Id @Column(type="string")
	 */
	public $id;
	
	/**
	 * @Column(type="string")
	 */
	public $email;
	
	/**
	 * @Column(type="string")
	 */
	public $password;
	
	/**
	 * @OneToMany(targetEntity="Message", mappedBy="user")
	 * @var Message[]
	 */
	private $messages;
}

?>