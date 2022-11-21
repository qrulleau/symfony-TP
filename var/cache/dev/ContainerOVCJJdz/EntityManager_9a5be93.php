<?php

namespace ContainerOVCJJdz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54fc6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer022e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties97eb5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getConnection', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getMetadataFactory', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getExpressionBuilder', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'beginTransaction', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getCache', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'transactional', array('func' => $func), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'commit', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->commit();
    }

    public function rollback()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'rollback', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getClassMetadata', array('className' => $className), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'createQuery', array('dql' => $dql), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'createNamedQuery', array('name' => $name), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'createQueryBuilder', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'flush', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'clear', array('entityName' => $entityName), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->clear($entityName);
    }

    public function close()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'close', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->close();
    }

    public function persist($entity)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'persist', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'remove', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'refresh', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'detach', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'merge', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'contains', array('entity' => $entity), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getEventManager', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getConfiguration', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'isOpen', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getUnitOfWork', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getProxyFactory', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'initializeObject', array('obj' => $obj), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'getFilters', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'isFiltersStateClean', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'hasFilters', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return $this->valueHolder54fc6->hasFilters();
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

        $instance->initializer022e4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder54fc6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54fc6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54fc6->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, '__get', ['name' => $name], $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        if (isset(self::$publicProperties97eb5[$name])) {
            return $this->valueHolder54fc6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54fc6;

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

        $targetObject = $this->valueHolder54fc6;
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
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54fc6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54fc6;
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
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, '__isset', array('name' => $name), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54fc6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54fc6;
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
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, '__unset', array('name' => $name), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54fc6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54fc6;
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
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, '__clone', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        $this->valueHolder54fc6 = clone $this->valueHolder54fc6;
    }

    public function __sleep()
    {
        $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, '__sleep', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;

        return array('valueHolder54fc6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer022e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer022e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer022e4 && ($this->initializer022e4->__invoke($valueHolder54fc6, $this, 'initializeProxy', array(), $this->initializer022e4) || 1) && $this->valueHolder54fc6 = $valueHolder54fc6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54fc6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54fc6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
