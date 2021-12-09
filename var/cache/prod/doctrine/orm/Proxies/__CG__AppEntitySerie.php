<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Serie extends \App\Entity\Serie implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'nomSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'notePresseSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'dateserie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'resumeSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'adresseImageCouvertureSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'realisateurSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'sommeilSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'genre'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'nomSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'notePresseSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'dateserie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'resumeSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'adresseImageCouvertureSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'realisateurSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'sommeilSerie', '' . "\0" . 'App\\Entity\\Serie' . "\0" . 'genre'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Serie $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getGenre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', []);

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre(?string $genre): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', [$genre]);

        return parent::setGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getNomSerie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomSerie', []);

        return parent::getNomSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomSerie(string $nomSerie): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomSerie', [$nomSerie]);

        return parent::setNomSerie($nomSerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotePresseSerie(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotePresseSerie', []);

        return parent::getNotePresseSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotePresseSerie(int $notePresseSerie): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotePresseSerie', [$notePresseSerie]);

        return parent::setNotePresseSerie($notePresseSerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateserie(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateserie', []);

        return parent::getDateserie();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateserie(\DateTimeInterface $dateserie): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateserie', [$dateserie]);

        return parent::setDateserie($dateserie);
    }

    /**
     * {@inheritDoc}
     */
    public function getResumeSerie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResumeSerie', []);

        return parent::getResumeSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setResumeSerie(string $resumeSerie): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResumeSerie', [$resumeSerie]);

        return parent::setResumeSerie($resumeSerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseImageCouvertureSerie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseImageCouvertureSerie', []);

        return parent::getAdresseImageCouvertureSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseImageCouvertureSerie(string $adresseImageCouvertureSerie): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseImageCouvertureSerie', [$adresseImageCouvertureSerie]);

        return parent::setAdresseImageCouvertureSerie($adresseImageCouvertureSerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getRealisateurSerie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRealisateurSerie', []);

        return parent::getRealisateurSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setRealisateurSerie(string $realisateurSerie): \App\Entity\Serie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRealisateurSerie', [$realisateurSerie]);

        return parent::setRealisateurSerie($realisateurSerie);
    }

    /**
     * {@inheritDoc}
     */
    public function getSommeilSerie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSommeilSerie', []);

        return parent::getSommeilSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setSommeilSerie($sommeilSerie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSommeilSerie', [$sommeilSerie]);

        return parent::setSommeilSerie($sommeilSerie);
    }

}
