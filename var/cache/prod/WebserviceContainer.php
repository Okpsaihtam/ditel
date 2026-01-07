<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class WebserviceContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShop\\PrestaShop\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\PrestaShop\\Adapter\\LegacyContext' => 'getLegacyContextService',
            'PrestaShop\\PrestaShop\\Adapter\\Tools' => 'getToolsService',
            'PrestaShop\\PrestaShop\\Core\\Hook\\HookModuleFilter' => 'getHookModuleFilterService',
            'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository' => 'getRepositoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration2Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
        ];
        $this->aliases = [
            'PrestaShop\\PrestaShop\\Core\\Currency\\CurrencyDataProviderInterface' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'PrestaShop\\PrestaShop\\Core\\Localization\\LocaleInterface' => 'prestashop.core.localization.locale.context_locale',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.adapter.context_state_manager' => 'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager',
            'prestashop.adapter.data_provider.currency' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'prestashop.adapter.legacy.configuration' => 'PrestaShop\\PrestaShop\\Adapter\\Configuration',
            'prestashop.adapter.legacy.context' => 'PrestaShop\\PrestaShop\\Adapter\\LegacyContext',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
            'prestashop.core.localization.locale.repository' => 'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            '.service_locator.zH65KBq' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Connection $defaultConnection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\CacheAdapterFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_entity_manager.validator_loader' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'messenger.middleware.doctrine_close_connection' => true,
            'messenger.middleware.doctrine_open_transaction_logger' => true,
            'messenger.middleware.doctrine_ping_connection' => true,
            'messenger.middleware.doctrine_transaction' => true,
            'messenger.transport.doctrine.factory' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\ContextStateManager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getContextStateManagerService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop) ? (($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\LegacyContext' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getLegacyContextService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Core\Hook\HookModuleFilter' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Hook\HookModuleFilter
     */
    protected function getHookModuleFilterService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookModuleFilter'] = new \PrestaShop\PrestaShop\Core\Hook\HookModuleFilter(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Core\Localization\Locale\Repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getRepositoryService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the public 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getArrayService()
    {
        return $this->services['array'] = (new \PrestaShopBundle\DependencyInjection\CacheAdapterFactory())->getCacheAdapter('array');
    }

    /**
     * Gets the public 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'const' => ['privates', 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor', 'getRuntimeConstEnvVarProcessorService', false],
        ], [
            'const' => '?',
        ]);
    }

    /**
     * Gets the public 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the public 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => 'db5019330279.hosting-data.io', 'port' => '', 'dbname' => 'dbs15138331', 'user' => 'dbu1568332', 'password' => 'V4*9R4(7xq;enR', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = ($this->services['array'] ?? $this->getArrayService());
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = ($this->services['annotation_reader'] ?? ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader()));
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/www/public/modules/ps_accounts/src/Entity']);
        $e->addExcludePaths([0 => '/home/www/public/modules/ps_accounts/src/Entity/index.php']);

        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/www/public/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $c->addDriver($e, 'PrestaShop\\Module\\PsAccounts\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCache($b);
        $a->setQueryCache($b);
        $a->setResultCache($b);
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir('/home/www/public/var/cache/prod//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('kjefh_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false);
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_CircuitBreaker_CacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false)))->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['prestashop.core.circuit_breaker.cache'] ?? $this->getPrestashop_Core_CircuitBreaker_CacheService()));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(($this->services['prestashop.core.circuit_breaker.doctrine_cache'] ?? $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/home/www/public/var/cache/prod//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/home/www/public/var/cache/prod//localization'))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ($this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? $this->getRepositoryService())->getLocale(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     *
     * @deprecated The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        @trigger_error('The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('kjefh_');
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->privates['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the public 'prestashop.adapter.tools' alias.
     *
     * @return object The "PrestaShop\PrestaShop\Adapter\Tools" service.
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        @trigger_error('The "prestashop.adapter.tools" service alias is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->get('PrestaShop\\PrestaShop\\Adapter\\Tools');
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'database_host' => 'db5019330279.hosting-data.io',
            'database_port' => '',
            'database_name' => 'dbs15138331',
            'database_user' => 'dbu1568332',
            'database_password' => 'V4*9R4(7xq;enR',
            'database_prefix' => 'kjefh_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'dqkybkesgjYx5EcmSZvE4ngzKzJbgrQzDSwnY4iqtxbKfk3FNouqcdHV',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2019-11-29',
            'locale' => 'fr-FR',
            'use_debug_toolbar' => true,
            'cookie_key' => '3U20CHAz6IEtkc0o1jyLiCagHZf7D9vjjrHWKHPqvahSZV0P4r6ahVAR',
            'cookie_iv' => 'P8Wv7R4s',
            'new_cookie_key' => 'def000006cf1472963ea1bee3df7c2e37777caf2c29bc216f4541533a5990e840bc7ae0d5aa960a11202067a1ddd2bd08782440c5a7a07edf1d792f5954dae73e4f18e0d',
            'api_public_key' => '-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsoeABxcXlWiVpRT9nHNO'."\n".'lkcS1A+Xdr3VnykS2sMMCHAQUUc4bLusi6QfHZ1TjDF/rm5rEHSjdqoxY+3u3s1Z'."\n".'5BVUvfnUczDTt9Z9ePJiLxTQHO0j7LG5sPZHPMpNgG3CfZ3hHmLtfxjz/me+AeG4'."\n".'ZgQDRsR9pOwwAzL4gKfWuJfV+b9+A8MJgrfobrQAzG57DMfAijkVaC/tD/WqKyle'."\n".'yy/o2Q38XUCzLrui0T7FRoDtLzl7nbCmOJZbjDyHN+N9WcPhxCoXKRAkT2I1Oywj'."\n".'ZnWWJTTqNn44CFM4Mbr/Ll8aZGx3aR4L89ZN2xfkppGJMukHf1IBIjoEm4mfdosa'."\n".'EQIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'',
            'api_private_key' => '-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCyh4AHFxeVaJWl'."\n".'FP2cc06WRxLUD5d2vdWfKRLawwwIcBBRRzhsu6yLpB8dnVOMMX+ubmsQdKN2qjFj'."\n".'7e7ezVnkFVS9+dRzMNO31n148mIvFNAc7SPssbmw9kc8yk2AbcJ9neEeYu1/GPP+'."\n".'Z74B4bhmBANGxH2k7DADMviAp9a4l9X5v34DwwmCt+hutADMbnsMx8CKORVoL+0P'."\n".'9aorKV7LL+jZDfxdQLMuu6LRPsVGgO0vOXudsKY4lluMPIc3431Zw+HEKhcpECRP'."\n".'YjU7LCNmdZYlNOo2fjgIUzgxuv8uXxpkbHdpHgvz1k3bF+SmkYky6Qd/UgEiOgSb'."\n".'iZ92ixoRAgMBAAECggEANmiPPxntiQ4/lPkJtZV6nNf6SACcc4a1RPValqsczrGA'."\n".'d5TSAGlN05zoErlwzegD9qAWJwS1EKQbu023H9XLkHRjyCYMdjKqQ3ut759HBvw7'."\n".'1KT87tTXN7RGz6MD7aEFxgzIn98cbECpk54ATUiCTyzn5rhZZlrI4yC0lVkRWl4B'."\n".'DChcEd03P3YHBs1Xq1Bqe7i7IHvtL862vysPcrKal9RD2bcM8rOMTg31fSjXRziX'."\n".'rbsjpio5gUe+YTFZiQfhHvewhiQb6MoJea7cyRa64twnf+uQTb8uf6XPdqho0M9I'."\n".'Cdj0ldXOEsIA5RD6Zs0Wp6GFGyXH+jHSlf0r7jxXQQKBgQDoE5Nlr4LaVm0FwuuK'."\n".'eAhjgo7o8zVLNPV5oPVjMLHAh9NXkaBGUl2qSTy3KWDEngMrGxyQtBUCAEyEKTEk'."\n".'yTSaPOKMoV/Pe5VkHQSIebdpTiCW8LQujKsZoNChfJ2fQe2BHzCgyqX/Ld7ubcag'."\n".'Sg2dkeze4C+KAn+cpbCqSg6lyQKBgQDE7tTe0KOUvdEQQ60ao5vP1pJsmeKcLTSZ'."\n".'X9PvLtaNYI+sl8tYh9llZCcqkwjsD1oM5t7GQ5MBwQu+8fKzrSY9bO07yRLgZaoy'."\n".'cOJnofHF2pCeTimMATGrOvC9OvRkR1fCz0azroYmbSQzBuiotfyToPuV1E1gRWAI'."\n".'uu3wz4gWCQKBgQC4lSFN5juAJu9NfsvSdUfOxb+enhnMOFHprFCf1NH73MwGQSgl'."\n".'5krjLp7g20NA/qBsf4LHwMNYtR4mm5CfvnxdFIHn8k3++z9FwiKh3ZU4Z1BaXRYi'."\n".'U/WeS57EYhYH3ermIQWPTb6baEOAhcVOJbgQlEi+t7Z34SbYU5xgxMhDqQKBgEe0'."\n".'BgHSyZzAuDxJx99pLrQwFkRAi4f91ab6gzoVPb1gKS/YXQuw+vC11KTlwFvjAxCr'."\n".'hvV9aSs8VMCDa7EMHF5FKOOZxKu7mIqhG25MQrGdcQaSwwHc9W65GSptKsrQRx4B'."\n".'Rmbp5qJbHtENdOzoxjwiYzgcgsfIuryzAyupBI2xAoGBAKCDKWcXW92gbSqZ665c'."\n".'xoF3fbRHpgh3UeNAo8iBmmMRE5SopunqjLorCIybOAFMlz6iS4g2xPEIjp1OJNmV'."\n".'by+kQ+vVa/quIcjZnw8F9n0B5VvFm1p0hw5Dapwxlp/kXxvmcBZsJTsveqpLLLGQ'."\n".'/A5oq5zzlStv3dYffTGkoloh'."\n".'-----END PRIVATE KEY-----'."\n".'',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/home/www/public/app',
            'kernel.project_dir' => '/home/www/public',
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.environment' => 'prod',
            'kernel.cache_dir' => '/home/www/public/var/cache/prod/',
            'kernel.active_modules' => [
                0 => 'contactform',
                1 => 'dashactivity',
                2 => 'dashtrends',
                3 => 'dashgoals',
                4 => 'dashproducts',
                5 => 'graphnvd3',
                6 => 'gridhtml',
                7 => 'gsitemap',
                8 => 'ps_banner',
                9 => 'ps_categorytree',
                10 => 'ps_checkpayment',
                11 => 'ps_contactinfo',
                12 => 'ps_currencyselector',
                13 => 'ps_customeraccountlinks',
                14 => 'ps_customersignin',
                15 => 'ps_customtext',
                16 => 'ps_emailsubscription',
                17 => 'ps_faviconnotificationbo',
                18 => 'ps_featuredproducts',
                19 => 'ps_imageslider',
                20 => 'ps_languageselector',
                21 => 'ps_linklist',
                22 => 'ps_mainmenu',
                23 => 'ps_searchbar',
                24 => 'ps_shoppingcart',
                25 => 'ps_socialfollow',
                26 => 'ps_themecusto',
                27 => 'ps_wirepayment',
                28 => 'pagesnotfound',
                29 => 'statsbestcategories',
                30 => 'statsbestcustomers',
                31 => 'statsbestproducts',
                32 => 'statsbestsuppliers',
                33 => 'statsbestvouchers',
                34 => 'statscarrier',
                35 => 'statscatalog',
                36 => 'statscheckup',
                37 => 'statsdata',
                38 => 'statsforecast',
                39 => 'statsnewsletter',
                40 => 'statspersonalinfos',
                41 => 'statsproduct',
                42 => 'statsregistrations',
                43 => 'statssales',
                44 => 'statssearch',
                45 => 'statsstock',
                46 => 'psgdpr',
                47 => 'ps_mbo',
                48 => 'blockreassurance',
                49 => 'ps_facetedsearch',
                50 => 'ets_megamenu',
                51 => 'ptm_multiblocks',
                52 => 'ybc_blog',
                53 => 'ps_emailalerts',
                54 => 'rc_pganalytics',
                55 => 'autoupgrade',
                56 => 'ps_distributionapiclient',
                57 => 'ps_accounts',
                58 => 'ps_eventbus',
                59 => 'stripe_official',
            ],
            'ps_cache_dir' => '/home/www/public/var/cache/prod/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/home/www/public/var/cache/prod//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}
