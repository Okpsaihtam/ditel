<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5d636 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3930d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc0e13 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'getList', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'getInstalledModules', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'getMustBeConfiguredModules', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'getUpgradableModules', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'setActionUrls', array('collection' => $collection), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return $this->valueHolder5d636->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer3930d = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder5d636) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder5d636 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder5d636->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, '__get', ['name' => $name], $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        if (isset(self::$publicPropertiesc0e13[$name])) {
            return $this->valueHolder5d636->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d636;

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

        $targetObject = $this->valueHolder5d636;
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
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d636;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5d636;
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
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, '__isset', array('name' => $name), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d636;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5d636;
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
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, '__unset', array('name' => $name), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d636;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5d636;
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
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, '__clone', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        $this->valueHolder5d636 = clone $this->valueHolder5d636;
    }

    public function __sleep()
    {
        $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, '__sleep', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;

        return array('valueHolder5d636');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3930d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3930d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3930d && ($this->initializer3930d->__invoke($valueHolder5d636, $this, 'initializeProxy', array(), $this->initializer3930d) || 1) && $this->valueHolder5d636 = $valueHolder5d636;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5d636;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d636;
    }
}
