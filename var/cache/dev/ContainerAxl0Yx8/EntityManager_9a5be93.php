<?php

namespace ContainerAxl0Yx8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf717f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc0e0c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6135 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getConnection', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getMetadataFactory', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getExpressionBuilder', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'beginTransaction', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getCache', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'transactional', array('func' => $func), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->transactional($func);
    }

    public function commit()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'commit', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->commit();
    }

    public function rollback()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'rollback', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getClassMetadata', array('className' => $className), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'createQuery', array('dql' => $dql), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'createNamedQuery', array('name' => $name), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'createQueryBuilder', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'flush', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'clear', array('entityName' => $entityName), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->clear($entityName);
    }

    public function close()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'close', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->close();
    }

    public function persist($entity)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'persist', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'remove', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'refresh', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'detach', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'merge', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'contains', array('entity' => $entity), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getEventManager', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getConfiguration', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'isOpen', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getUnitOfWork', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getProxyFactory', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'initializeObject', array('obj' => $obj), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'getFilters', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'isFiltersStateClean', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'hasFilters', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return $this->valueHolderf717f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc0e0c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf717f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf717f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf717f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, '__get', ['name' => $name], $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        if (isset(self::$publicPropertiesb6135[$name])) {
            return $this->valueHolderf717f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf717f;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf717f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf717f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf717f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, '__isset', array('name' => $name), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf717f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf717f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, '__unset', array('name' => $name), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf717f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf717f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, '__clone', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        $this->valueHolderf717f = clone $this->valueHolderf717f;
    }

    public function __sleep()
    {
        $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, '__sleep', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;

        return array('valueHolderf717f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc0e0c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc0e0c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc0e0c && ($this->initializerc0e0c->__invoke($valueHolderf717f, $this, 'initializeProxy', array(), $this->initializerc0e0c) || 1) && $this->valueHolderf717f = $valueHolderf717f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf717f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf717f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
