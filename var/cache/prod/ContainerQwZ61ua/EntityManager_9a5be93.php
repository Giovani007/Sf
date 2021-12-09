<?php

namespace ContainerQwZ61ua;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8f2cc = null;
    private $initializerc4114 = null;
    private static $publicProperties9d1cb = [
        
    ];
    public function getConnection()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getConnection', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getMetadataFactory', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getExpressionBuilder', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'beginTransaction', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getCache', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'transactional', array('func' => $func), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->transactional($func);
    }
    public function commit()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'commit', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->commit();
    }
    public function rollback()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'rollback', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'createQuery', array('dql' => $dql), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'createQueryBuilder', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'flush', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'clear', array('entityName' => $entityName), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->clear($entityName);
    }
    public function close()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'close', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->close();
    }
    public function persist($entity)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'persist', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'remove', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'refresh', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'detach', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'merge', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'contains', array('entity' => $entity), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getEventManager', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getConfiguration', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'isOpen', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getUnitOfWork', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getProxyFactory', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'getFilters', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'isFiltersStateClean', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'hasFilters', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return $this->valueHolder8f2cc->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc4114 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8f2cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8f2cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8f2cc->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, '__get', ['name' => $name], $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        if (isset(self::$publicProperties9d1cb[$name])) {
            return $this->valueHolder8f2cc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f2cc;
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
        $targetObject = $this->valueHolder8f2cc;
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
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f2cc;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8f2cc;
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
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, '__isset', array('name' => $name), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f2cc;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8f2cc;
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
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, '__unset', array('name' => $name), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f2cc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8f2cc;
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
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, '__clone', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        $this->valueHolder8f2cc = clone $this->valueHolder8f2cc;
    }
    public function __sleep()
    {
        $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, '__sleep', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
        return array('valueHolder8f2cc');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4114 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4114;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc4114 && ($this->initializerc4114->__invoke($valueHolder8f2cc, $this, 'initializeProxy', array(), $this->initializerc4114) || 1) && $this->valueHolder8f2cc = $valueHolder8f2cc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f2cc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f2cc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
