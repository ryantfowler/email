<?php

namespace Swissup\Email\Api\Data;

interface ServiceInterface
// extends \Magento\Framework\Mail\TransportInterface
{
    const ID       = 'id';
    const NAME     = 'name';
    const STATUS   = 'status';
    const TYPE     = 'type';
    // const EMAIL = 'email';
    const HOST     = 'host';
    const USER     = 'user';
    const PASSWORD = 'password';
    const PORT     = 'port';
    const SECURE   = 'secure';
    const AUTH     = 'auth';
    const KEY      = 'key';
    const REMOVE   = 'remove';

    /**
     * Get id
     *
     * return int
     */
    public function getId();

    /**
     * Get name
     *
     * return string
     */
    public function getName();

    /**
     * Get status
     *
     * return int
     */
    public function getStatus();

    /**
     * Get type
     *
     * return int
     */
    public function getType();

    /**
     * Get host
     *
     * return string
     */
    public function getHost();

    /**
     * Get user
     *
     * return string
     */
    public function getUser();

    /**
     * Get password
     *
     * return string
     */
    public function getPassword();

    /**
     * Get port
     *
     * return int
     */
    public function getPort();

    /**
     * Get secure
     *
     * return int
     */
    public function getSecure();

    /**
     * Get auth
     *
     * return string
     */
    public function getAuth();

    /**
     * Get key
     *
     * return string
     */
    public function getKey();

    /**
     * Get remove
     *
     * return string
     */
    public function getRemove();

    /**
     * Set id
     *
     * @param int $id
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setId($id);

    /**
     * Set name
     *
     * @param string $name
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setName($name);

    /**
     * Set status
     *
     * @param int $status
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setStatus($status);

    /**
     * Set type
     *
     * @param int $type
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setType($type);

    /**
     * Set host
     *
     * @param string $host
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setHost($host);

    /**
     * Set user
     *
     * @param string $user
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setUser($user);

    /**
     * Set password
     *
     * @param string $password
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setPassword($password);

    /**
     * Set port
     *
     * @param int $port
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setPort($port);

    /**
     * Set secure
     *
     * @param int $secure
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setSecure($secure);

    /**
     * Set auth
     *
     * @param string $auth
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setAuth($auth);

    /**
     * Set key
     *
     * @param string $key
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setKey($key);

    /**
     * Set remove
     *
     * @param string $remove
     * return \Swissup\Email\Api\Data\ServiceInterface
     */
    public function setRemove($remove);

}