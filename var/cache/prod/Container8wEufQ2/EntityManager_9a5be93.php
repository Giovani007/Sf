<?php

namespace Container8wEufQ2;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere205f = null;
    private $initializer552e8 = null;
    private static $publicProperties4e3b7 = [
        
    ];
    public function getConnection()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getConnection', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getMetadataFactory', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getExpressionBuilder', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'beginTransaction', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getCache', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'transactional', array('func' => $func), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->transactional($func);
    }
    public function commit()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'commit', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->commit();
    }
    public function rollback()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'rollback', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getClassMetadata', array('className' => $className), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'createQuery', array('dql' => $dql), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'createNamedQuery', array('name' => $name), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'createQueryBuilder', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'flush', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'clear', array('entityName' => $entityName), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->clear($entityName);
    }
    public function close()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'close', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->close();
    }
    public function persist($entity)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'persist', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'remove', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'refresh', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'detach', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'merge', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'contains', array('entity' => $entity), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getEventManager', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getConfiguration', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'isOpen', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getUnitOfWork', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getProxyFactory', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'initializeObject', array('obj' => $obj), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'getFilters', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'isFiltersStateClean', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'hasFilters', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return $this->valueHoldere205f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer552e8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere205f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere205f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere205f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, '__get', ['name' => $name], $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        if (isset(self::$publicProperties4e3b7[$name])) {
            return $this->valueHoldere205f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere205f;
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
        $targetObject = $this->valueHoldere205f;
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
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere205f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere205f;
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
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, '__isset', array('name' => $name), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere205f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere205f;
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
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, '__unset', array('name' => $name), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere205f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere205f;
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
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, '__clone', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        $this->valueHoldere205f = clone $this->valueHoldere205f;
    }
    public function __sleep()
    {
        $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, '__sleep', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
        return array('valueHoldere205f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer552e8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer552e8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer552e8 && ($this->initializer552e8->__invoke($valueHoldere205f, $this, 'initializeProxy', array(), $this->initializer552e8) || 1) && $this->valueHoldere205f = $valueHoldere205f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere205f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere205f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
