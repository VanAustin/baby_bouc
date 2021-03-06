<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Collection extends \AppBundle\Entity\Collection implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'loanable', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowed', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowAsk', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrower', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowDate', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowComment', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'private', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'book', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'loanable', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowed', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowAsk', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrower', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowDate', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'borrowComment', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'private', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'book', '' . "\0" . 'AppBundle\\Entity\\Collection' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Collection $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoanable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoanable', []);

        return parent::getLoanable();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoanable($loanable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoanable', [$loanable]);

        return parent::setLoanable($loanable);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorrowed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorrowed', []);

        return parent::getBorrowed();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorrowed($borrowed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorrowed', [$borrowed]);

        return parent::setBorrowed($borrowed);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorrowAsk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorrowAsk', []);

        return parent::getBorrowAsk();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorrowAsk($borrowAsk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorrowAsk', [$borrowAsk]);

        return parent::setBorrowAsk($borrowAsk);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorrower()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorrower', []);

        return parent::getBorrower();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorrower($borrower)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorrower', [$borrower]);

        return parent::setBorrower($borrower);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorrowDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorrowDate', []);

        return parent::getBorrowDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorrowDate($borrowDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorrowDate', [$borrowDate]);

        return parent::setBorrowDate($borrowDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorrowComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorrowComment', []);

        return parent::getBorrowComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorrowComment($borrowComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorrowComment', [$borrowComment]);

        return parent::setBorrowComment($borrowComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivate', []);

        return parent::getPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivate($private)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivate', [$private]);

        return parent::setPrivate($private);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getBook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBook', []);

        return parent::getBook();
    }

    /**
     * {@inheritDoc}
     */
    public function setBook($book)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBook', [$book]);

        return parent::setBook($book);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}
