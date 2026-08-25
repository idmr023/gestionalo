<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1787629616,
	'meta' => array (
  'cacheVersion' => 'v13-packageDependencies',
  'phpstanVersion' => '2.2.5',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80508,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, level: 1, paths: [C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app, C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config, C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database, C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes], excludePaths: {analyseAndScan: [{path: C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor}, {path: C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\node_modules}, {path: C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\storage}, {path: C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\bootstrap\\cache}]}, tmpDir: C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\storage\\framework\\cache\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app',
    1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config',
    2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database',
    3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/composer.lock' => '0422750bc191919d28bb8ae80ad9015197bdaee821e4c5d515a10c6ddb70b7fb',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'barryvdh/laravel-debugbar' => 
        array (
          'pretty_version' => 'v4.4.0',
          'version' => '4.4.0.0',
          'reference' => '80ef956bda9e1a5824037d6f2cd06e73092e5634',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../barryvdh/laravel-debugbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.14.2',
          'version' => '7.14.2.0',
          'reference' => 'fa88c57803501ad0770f5cddb1e60525d49da9a1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.1',
          'version' => '2.5.1.0',
          'reference' => '9ad1e4fc607446a055b95870c7f668e93b5cff29',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.12.5',
          'version' => '2.12.5.0',
          'reference' => '9365d578a9fd1552ad6ca9c3cb530708526feb09',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.9',
          'version' => '1.0.9.0',
          'reference' => 'd7580af6d3f8384325d9cd3e99b21c3ed1848176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.55.0',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/breeze' => 
        array (
          'pretty_version' => 'v2.4.2',
          'version' => '2.4.2.0',
          'reference' => '4f20e7b2cc8d25daa85d8647241a89c8e0930305',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/breeze',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v11.55.0',
          'version' => '11.55.0.0',
          'reference' => 'dc7ec34ae95bacf4a63b96ec81482b4f3e702289',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.3',
          'version' => '1.29.3.0',
          'reference' => 'da1d1111a6aa2e082d2a388b194afe1ba0a05d14',
          'type' => 'project',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.21',
          'version' => '0.3.21.0',
          'reference' => '7753c65c281c2550c7c183f14e18062073b7d821',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.63.0',
          'version' => '1.63.0.0',
          'reference' => '51bbce3f803c1d386cabbb44e618c955a12ff5fc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sentinel' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => '972d9885d9d14312a118e9565c4e6ecc5e751ea1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/sentinel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.13',
          'version' => '2.0.13.0',
          'reference' => 'b566ee0dd251f3c4078bed003a7ce015f5ea6dce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/telescope' => 
        array (
          'pretty_version' => 'v5.21.0',
          'version' => '5.21.0.0',
          'reference' => 'f00f45a59843329b97aa238f28da594f3b7d4aa7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../laravel/telescope',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.3',
          'version' => '2.8.3.0',
          'reference' => '1902f60f984235023acbe03db6ad614a37b3c3e7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.35.2',
          'version' => '3.35.2.0',
          'reference' => 'b277b5dc3d56650b68904117124e79c851e12376',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'f5f47eff7c48ed1003069a2ca67f316fb4021c76',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v3.8.2',
          'version' => '3.8.2.0',
          'reference' => 'e77fce60d0615d68dc6b8fafe98a6739d9752a24',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maximebf/debugbar' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => 'v3.8.0',
          ),
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.13.1',
          'version' => '3.13.1.0',
          'reference' => '2937ad3d1d2c506fd2bc97d571438a95641f44e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.4',
          'version' => '4.1.4.0',
          'reference' => '7da6c396d7ebe142bc857c20479d5e70a5e1aac7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.8.0',
          'version' => '5.8.0.0',
          'reference' => '044a6a392ff8ad0d61f14370a5fbbd0a0107152f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.4',
          'version' => '8.9.4.0',
          'reference' => '716af8f95a470e9094cfca09ed897b023be191a5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-debugbar/php-debugbar' => 
        array (
          'pretty_version' => 'v3.8.0',
          'version' => '3.8.0.0',
          'reference' => '18ced90d4b882ed449b2278fea8692f8f7d1c13c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../php-debugbar/php-debugbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-debugbar/symfony-bridge' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => 'e37d2debe5d316408b00d0ab2688d9c2cf59b5ad',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../php-debugbar/symfony-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.5',
          'version' => '2.2.5.0',
          'reference' => '909c1e5fef7989ac0d0c1c5c42e32a5c4f6198a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '2f3a64888c814fc235386b7387dd5b5ed92ad903',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.56',
          'version' => '11.5.56.0',
          'reference' => '5f83edffa6967c3db468d48a695ec7bcb02e9256',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.3',
          'version' => '4.9.3.0',
          'reference' => '1df15849d00943a67d677dc9cfd80795f038c9f8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.3',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.3',
          'version' => '6.3.3.0',
          'reference' => '2c95e1e86cb8dd41beb8d502057d1081ccc8eca9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.8.2',
          'version' => '1.8.2.0',
          'reference' => '8ffe78be5ed355b5009e3dd989d183433e9a5adc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/error-solutions' => 
        array (
          'pretty_version' => '1.1.3',
          'version' => '1.1.3.0',
          'reference' => 'e495d7178ca524f2dd0fe6a1d99a1e608e1c9936',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../spatie/error-solutions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.11.1',
          'version' => '1.11.1.0',
          'reference' => '53f41b08a27cc039e1a8ed2be9a202e924f31bad',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => 'b59385bb7aa24dae81bcc15850ebecfda7b40838',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '2.12.0',
          'version' => '2.12.0.0',
          'reference' => '45b3b6e1e73fc161cba2149972698644b99594ee',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '674fa3b98e21531dd040e613479f5f6fa8f32111',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '92f58bc4bf97a92ed1b9f367f0cd44f20bde0e87',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => 'b75663ed96cf4756e28e3105476f220f92886cc4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'f3202fa1b5097b0af062dc978b32ecf63404e31d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '4e1a093b481f323e6e326451f9760c3868430673',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '51fe3d170227be8d1772214b82ae506e15ed78ff',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c7de7a00ffb67842132da02ea92988a39ccd9f4e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '13b38720174286f55d1761152b575a8d1436fc25',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '06db5ae1552177bf8572f8908839f12e3c06aed3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'e99af79b1e776646eda0e1c23b7b45c184ff99be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'f88ce03ae73e3edb5c176ce1f337709996e88495',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'a845722765c4f6b2ce88beaf4f4479975b186770',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => 'd3d318bad5e7a1bfbd026009c8bfb8d8f99ae6b6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => '796a26abb75ce49f3a84433cd81bf1009d73d5f8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'ba2ba04f3352cfa2dcbbcb90aee13ed967f505b1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'f5804be144caceb570f6747519999636b664f24c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '3a162171bb008e5e0f15dce6581373a4c0e8390d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c0a284bab1ed8aa0417e3d69250ab437739563a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '961683010db3b27ec6ebcd7308e6e1ee8fa7ffde',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'a1af4dacb24eb7ef4f1ca71b94da8ddbce572281',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'ccb206b98faccc511ebae8e5fad50f2dc0b30621',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => '2676b524340abcfe4d6151ec698463cebafee439',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '9a3a56a4a1e65a5cb4f8d13801fe8ab0a170e358',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'f8f328665ace2370d1e10645b807ba1646dc7dcc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.4',
          'version' => '5.6.4.0',
          'reference' => '416df702837983f8d5ff48c9c3fee4f5f57b980b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar://C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'fileinfo',
    14 => 'filter',
    15 => 'hash',
    16 => 'iconv',
    17 => 'json',
    18 => 'lexbor',
    19 => 'libxml',
    20 => 'mbstring',
    21 => 'mysqlnd',
    22 => 'openssl',
    23 => 'pcre',
    24 => 'pdo_pgsql',
    25 => 'pgsql',
    26 => 'random',
    27 => 'readline',
    28 => 'session',
    29 => 'standard',
    30 => 'tokenizer',
    31 => 'uri',
    32 => 'xml',
    33 => 'xmlreader',
    34 => 'xmlwriter',
    35 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '1',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.login',
      1 => 'auth.register',
      2 => 'pages.mi-cuenta',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'pages.index',
      1 => 'pages.servicios',
      2 => 'pages.proyectos',
      3 => 'pages.project',
      4 => 'pages.blog',
      5 => 'pages.blog',
      6 => 'pages.post',
      7 => 'pages.contacto',
      8 => 'pages.citas',
      9 => 'pages.terminos',
      10 => 'pages.privacidad',
      11 => 'pages.buscar',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\AppointmentList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.appointment-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryForm.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.blog.category-form',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.blog.category-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.blog.post-form',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.blog.post-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChangeHistory.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.change-history',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChatList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.chat-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ContactList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.contact-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.dashboard',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectForm.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.projects.project-form',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.projects.project-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.recycle.recycle-bin',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceForm.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.services.service-form',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.services.service-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\UserList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.admin.user-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.client.appointment-booking',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentList.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.client.appointment-list',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.client.chat',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\ProfileForm.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.client.profile-form',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'livewire.global-search',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'pages.asesoria-ia',
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\CleanAudits.php' => 
  array (
    'fileHash' => '0979ac5c818a8ac965688441787347cbc74bd8ac12e1f30a0f254786083ea174',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\MonitorSystem.php' => 
  array (
    'fileHash' => '91da9177a7f36d948aedb7f610126bc66bcce08da2b0a27ba7b91a116b8d179e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php' => 
  array (
    'fileHash' => 'c020a72dabd7bd0e30803cdf46ae5e8fce3a28a58abf04af6051fad37185a25b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Database\\NeonPostgresConnection.php' => 
  array (
    'fileHash' => '3c35390e0180e0ffb38d4054095489a741ba6d311b9489f96c4b6c409c00a51f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\DatabaseServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Database\\NeonPostgresConnector.php' => 
  array (
    'fileHash' => 'f4de8144937a9ea33e04113076143bd414ebed2247f0e8cd5b20876de055eacb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    'fileHash' => 'aacdc73dd5dc910357f3c8a10f41e243666d3878c4d60b301f207d17fb5bae17',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\AuthController.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\HealthController.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php' => 
  array (
    'fileHash' => 'c8e014dd66ceb5f8538eb5f4288455e0d7aede629d7d09eb121c9425b82b00d6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\HealthController.php' => 
  array (
    'fileHash' => '1944e6c03927b9d88100cfc8b08073f822f6f82bdf63ee507a1547cd8b8f93ee',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php' => 
  array (
    'fileHash' => 'efa8f4086693abd7fd1a2472741e926d348cf3b0e9fc6275c03a8223cdde779c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Middleware\\IsAdmin.php' => 
  array (
    'fileHash' => 'ec390789a21e5fbf47750a48a2b6d7e706382b763e1074206c2230fd5493b89d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\AppointmentList.php' => 
  array (
    'fileHash' => 'c5a01444ad75f1f06c21b10f9cda9bdc94815c8cbc67627a651add7ad697e417',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryForm.php' => 
  array (
    'fileHash' => '8a67cbce288106760b374b87cc65bcdaaa7bd93827d52540a36c4a769b3f7acb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php' => 
  array (
    'fileHash' => 'e5c59b24b00ec8a67b5ece085749f03e44d4c7fa45649133176d7d14f3af1a62',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php' => 
  array (
    'fileHash' => 'bd771f979839a2d45a303c83b93e7ce93a26daae6299a7da7827801de7c59fa5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php' => 
  array (
    'fileHash' => '62e5936c3b2bcbfcba628d7b599538b93d1a7d8e9e4cd16e075c17873773e3b8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChangeHistory.php' => 
  array (
    'fileHash' => 'de10fd58c90fae82243cdde1afc4dfe640ad95a992984a0e0f3cebbd95fd1283',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChatList.php' => 
  array (
    'fileHash' => 'b738e0bf678b1e63c619899b15a40919df0ede8a96bb08b7efe749bcff7a4b9c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ContactList.php' => 
  array (
    'fileHash' => '3061b3ace1b2c824445976edbe28650d2d6c0045389de3216ade80eb2b82ab36',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php' => 
  array (
    'fileHash' => 'c0f4725227e983327a00fd532224e96e2c93a0af88ee3fffa25d4d5195214abb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectForm.php' => 
  array (
    'fileHash' => 'a5833a2309488aba5445078902688b5256a2da6ce19088fd636d91ceee1850eb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php' => 
  array (
    'fileHash' => 'db691ba7193eecf7f0f521f00aa413df046048548d1f088506f5aa207a634150',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php' => 
  array (
    'fileHash' => '3c43b544470eec97aa6ff4f5689a89030468cffd29a0dbf781446673de30d0ea',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceForm.php' => 
  array (
    'fileHash' => '7fc76c77d992ca668eed2615ddaf2eb9beed7d02f2d8ecefbde4e4063bf24e0e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php' => 
  array (
    'fileHash' => 'd24062ec12b0b0282c0acc00a0b181d2a2ec59eef927cadc4f18249638cf19e8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\UserList.php' => 
  array (
    'fileHash' => 'fd520afd1b3306cb701b4e926456e19b781cb52fb1b65209ccb73b0fbfe7c2a4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php' => 
  array (
    'fileHash' => 'b8c2d15c4b5ef78d11de2499efa7b57ca7c9730e9078528547b0dc8134767baf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentList.php' => 
  array (
    'fileHash' => '51c74750c3028c7402d997e87f151e4bbd59ce8f5b10aa22b2115b78d75667fc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php' => 
  array (
    'fileHash' => '31cdd66b05daaa28e6985d0f7d77aa76c778d413eede2465749f3cf96d785fee',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\ProfileForm.php' => 
  array (
    'fileHash' => '8a37760a6c8df0ef16a32bb21a3cfaec7cd89195145e6394ef7f0e9235e8e256',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Concerns\\HasSortableTable.php' => 
  array (
    'fileHash' => '69e01d773e5a65d497a106fbbe413a365db45a6752924b47a1006df417569689',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php' => 
  array (
    'fileHash' => '58a08419aa737e83748fcdff0915773315291a65656355783043bc252f004f7e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Appointment.php' => 
  array (
    'fileHash' => 'a30525757edd13b4587be5aae3c19b7b3ed9d613738531c81f1b44956f9f0c00',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\AppointmentList.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentList.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\User.php',
      5 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\AppointmentPolicy.php',
      6 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Category.php' => 
  array (
    'fileHash' => '85e3448c964accf8fbe35263ffbfb56a1279eeaafbfec1b23a019785e4589529',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryForm.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatMessage.php' => 
  array (
    'fileHash' => '8e88dd057bcea50ebd0e5f3b19290f504c27702048d2f8092cd6265c85f60f58',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatSession.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatSession.php' => 
  array (
    'fileHash' => 'de6c985e8f72d3c8ace73ab52bd5bc4be9b2087332782aa1daa163d2f6f374e2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChatList.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatMessage.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\User.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Contact.php' => 
  array (
    'fileHash' => '7c4f94b5158fc2cc41b2d53f0bf2b177386819077692f133afc03bc9cfa25b3c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ContactList.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ContactPolicy.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ModelAudit.php' => 
  array (
    'fileHash' => 'cc96b42978505b5e4fe0910b28d111af69c552ee03133e606a9d50aa644e4f41',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\CleanAudits.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChangeHistory.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Project.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Service.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php' => 
  array (
    'fileHash' => 'dcd62cadc47aeb3f2bb5b7fa8b76e412b02287025ff30c5bbf1b4095961e7f54',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php',
      5 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      6 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php',
      7 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php',
      8 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Category.php',
      9 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\PostPolicy.php',
      10 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
      11 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\PostFactory.php',
      12 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\PostSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Project.php' => 
  array (
    'fileHash' => '4e3ca52f690e8ee2443f191e939f6ce353fa9b7ec1f7cd3737054954bde918ab',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectForm.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php',
      5 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php',
      6 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php',
      7 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ProjectPolicy.php',
      8 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
      9 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ProjectFactory.php',
      10 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ProjectSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Service.php' => 
  array (
    'fileHash' => '27df4d36bca45454c4c100b472d033343bd1365ccb4851b8ea7377e61f3387c7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceForm.php',
      5 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php',
      6 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php',
      7 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php',
      8 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ServicePolicy.php',
      9 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
      10 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ServiceFactory.php',
      11 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ServiceSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\User.php' => 
  array (
    'fileHash' => '8925f9c199f1018ed9c914425e98fc0e64d01b4b63fc2b39a92852845be63298',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\AuthController.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Middleware\\IsAdmin.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\UserList.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentList.php',
      5 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php',
      6 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\ProfileForm.php',
      7 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Appointment.php',
      8 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatMessage.php',
      9 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatSession.php',
      10 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ModelAudit.php',
      11 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\AppointmentPolicy.php',
      12 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ContactPolicy.php',
      13 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\PostPolicy.php',
      14 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ProjectPolicy.php',
      15 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ServicePolicy.php',
      16 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\UserPolicy.php',
      17 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
      18 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\TelescopeServiceProvider.php',
      19 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\auth.php',
      20 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\UserFactory.php',
      21 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\AdminUserSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\AppointmentPolicy.php' => 
  array (
    'fileHash' => '5f6ed4d28adc431345ff48d511d2c72837ab4ede3f404254feff04825b9fa58a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ContactPolicy.php' => 
  array (
    'fileHash' => '3302675d294c01dd921e65d7f8d5a81de0fe37cc83d921c6443b0c9aa4fb8b07',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\PostPolicy.php' => 
  array (
    'fileHash' => '3d579b19c7ec42aa45d18d661bbe7635653d8126ae275710507f26fb02a83c99',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ProjectPolicy.php' => 
  array (
    'fileHash' => '54be32d595c591495262e4dd994f4c2414b0c6aa8104925b73df1613116336a0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ServicePolicy.php' => 
  array (
    'fileHash' => '32e44982fd572109fb08bd125bb696f7a5ba1b566e6884a5396dd51f1e4bfcbe',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\UserPolicy.php' => 
  array (
    'fileHash' => '846345d97c0410ba8eae829eeacbd796b92cbf78b23e4ed3877329b0639da348',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => 'f1d2d347d81c35a0c1c730a5e02f0d9e4624a4b2ccc205210c6abffc04484872',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php' => 
  array (
    'fileHash' => '6b32966eb1eb4bb3c223fdedccd23f19ee9f33a23978b327d64a643ede2236af',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\DatabaseServiceProvider.php' => 
  array (
    'fileHash' => '99320313e3c7af0fa6bd7bb58234b95759a8ca704af70fa7a0381757cb5a4892',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\app.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\NeonDbServiceProvider.php' => 
  array (
    'fileHash' => 'cb56720f264ab68c089fde37cb194f4379df6506940373382b3c0876f1c92f12',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    'fileHash' => 'f971f43d0c4f2d12da208b2bf695b9ce527ccd8ad1e0cf57a8a359a8ccd6870f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CalendlyService.php' => 
  array (
    'fileHash' => '736e28cced51dfc9fe8ffa11d2d2ed1632951ceccc83668d5224407b21fd6103',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CircuitBreaker.php' => 
  array (
    'fileHash' => 'b41322540ce0c870c4e54d12efa8abda6c5f64afa3dea26bfe3cb7c9815c9fe7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CalendlyService.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\GeminiService.php' => 
  array (
    'fileHash' => '769cffc01e3850e0be7543d99a83c20c1a48663b5b15ac39649dfaf94c565800',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Traits\\Auditable.php' => 
  array (
    'fileHash' => 'dfdcb93e82a54ce4dea6cdd77cacf54c3cd08aff5e9712b9c953356990a429e0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php',
      3 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php',
      4 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php',
      5 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php',
      6 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectForm.php',
      7 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php',
      8 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php',
      9 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceForm.php',
      10 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php',
      11 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php',
      12 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php',
      13 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Category.php',
      14 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php',
      15 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Project.php',
      16 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Service.php',
      17 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\PostPolicy.php',
      18 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ProjectPolicy.php',
      19 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ServicePolicy.php',
      20 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php',
      21 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\PostFactory.php',
      22 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ProjectFactory.php',
      23 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ServiceFactory.php',
      24 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\PostSeeder.php',
      25 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ProjectSeeder.php',
      26 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ServiceSeeder.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php',
      1 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Project.php',
      2 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Service.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\admin-menu.php' => 
  array (
    'fileHash' => '2f39140bf4b41ca7403dd624c2f9e57f3eaaa210fb0964b97100d66231c9682f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\ai.php' => 
  array (
    'fileHash' => '3a040254a571ac0ff0c3a9f9cfe734a03473e07e7565af407262f4f6298268ef',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\app.php' => 
  array (
    'fileHash' => '48cf4b3839240c3fb56327e8607cfabbf6c17e8e99ba90e8a0aa687b21866a28',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\auth.php' => 
  array (
    'fileHash' => '74440472fc7096bb28295b7ecc260b9b23c67142206f7a972847b96c11c3d7dd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\cache.php' => 
  array (
    'fileHash' => 'c69fb85f520b146ad6af5d3018de3e04b97f2a608e50f6ada41f5c2e7d2537cb',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\database.php' => 
  array (
    'fileHash' => '1f5a65fd86435d90bdc97b5e228a76772581e7c833edb8a14db54e86742780e6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\filesystems.php' => 
  array (
    'fileHash' => 'dcd0c257a62d4d877a48c4e14d8fdb42ad5a3edb819850347c6474d56c0cc6c5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\logging.php' => 
  array (
    'fileHash' => 'f62023cdf9df5f6d2c045c63332957b2a665e99c5025aac1737c3eebf9a5cacd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\queue.php' => 
  array (
    'fileHash' => 'fcaa348d8de23aa8af37fb4edd2d249790f3e7ab9c626a7c531cc9e55bdf4030',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\session.php' => 
  array (
    'fileHash' => '297d399189f46c7c7765497f16193c66e12db011a9d08066d2787415ece8a39e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\site.php' => 
  array (
    'fileHash' => 'feb3113e23c0b812e8b1edcd387b1695be866d3a4501997dbd3792048926f4ea',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\telescope.php' => 
  array (
    'fileHash' => '67828d13854414ca2c7c4bfdabcd6d6c8cf70365cc99b7e811818c476fff46ef',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\view.php' => 
  array (
    'fileHash' => '0d3c71a936fde1c6c3658cbc382160073cd5933979d2c4fe475839dde489e911',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\PostFactory.php' => 
  array (
    'fileHash' => 'fdb24f720c494052f9836cacfce08e287011971f212c1780d8299fbee6a4454c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ProjectFactory.php' => 
  array (
    'fileHash' => '6c1113caa611b7272cebacc85f87cdd568aa5a94f7e25e142eede1b84fb54895',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ServiceFactory.php' => 
  array (
    'fileHash' => '08af07f1f041f7baa1fb6f00fd865f2994b581a467bd5a0d2d5ea9b3c53d4c90',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\UserFactory.php' => 
  array (
    'fileHash' => '565d0e4fa4a02bfc0350f341860a304701e3ec815d4f41b136c1a61710e33d7e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => 'ba35d922d726eadc692b0ece29802fc9d0fe5354699799788c1dbb597235a81e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '357694dbc63356b8312ec12afd590341ce3026f491ba6ad1a9afa234c0b17e27',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_01_01_000001_create_services_table.php' => 
  array (
    'fileHash' => '2d27465ed57d99c98815e4b519d727ec593e9db6602e6d4d961ee733fe6bd560',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_01_01_000002_create_projects_table.php' => 
  array (
    'fileHash' => '40ecdc0176239fd4f9e8ae6d7a15ce72547f189ccf8d9b90c43ed83d86883977',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_01_01_000003_create_posts_table.php' => 
  array (
    'fileHash' => 'e96f9a96048a2c476bffcab401b3d681b71aa0caf07b92f3d95a0ee03ef64ce7',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_07_15_000004_add_role_to_users_table.php' => 
  array (
    'fileHash' => '8adce911a8c78db7674c1de23ac837f3ee0bbe2fbec232f29de8090e3c7fb2c7',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_07_15_000005_add_soft_deletes_to_content_tables.php' => 
  array (
    'fileHash' => '69270ab8773eb8141cef82fc212de5cf3f4833d95afe1c9173332aa95f0a3b48',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_07_15_000006_create_model_audits_table.php' => 
  array (
    'fileHash' => 'fb640b5449db185bfe59963eb837cd96a21a49bc1ed0c9b19727b15ac50fdb5b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_093938_add_performance_indexes.php' => 
  array (
    'fileHash' => '3349ae40797532c405f265827c4bf9cadce996bcbfb5d86717d05d57e22cb793',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_100000_create_contacts_table.php' => 
  array (
    'fileHash' => '3443980f0755967df4614696b47396263815743a5d0f9fa27bab4a7fc7750f94',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_100001_create_categories_tables.php' => 
  array (
    'fileHash' => '09d77707e3dcabe1f2b121c17317e4fe0dd7b00f016899f4b27a8e09e9b72d3d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_110000_create_appointments_table.php' => 
  array (
    'fileHash' => 'c33c18f731b901fc5701192c9238b463586b09125735c04ec44b64adfeefddbd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_120000_add_worm_trigger_to_model_audits.php' => 
  array (
    'fileHash' => 'e7b1044623f8dc9be42ebe047a0bc08155df7374c3b1b6030beeaa1efde60d42',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_120001_partition_model_audits.php' => 
  array (
    'fileHash' => '4a0a17afdf99672dc686816c8963108f6b56697bacecb8757d0119285b2e5cf3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_130000_widen_encrypted_columns.php' => 
  array (
    'fileHash' => 'abbb11fe7fb1a7eddfe8ce55cb70b353c00777116edfec6585c8512c17f27c7d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_24_164256_create_telescope_entries_table.php' => 
  array (
    'fileHash' => 'afc2a0cd0aa4394578ef188cef6d5eab2ddebd18ccf07c28095ed4d1a49da475',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_30_154019_add_dni_phone_address_to_users_table.php' => 
  array (
    'fileHash' => '6f65a163e4d29e57c0dd9eb68d5ccd24862b3b316c3414783d9bda7936bfcfab',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_08_18_232411_create_chat_sessions_table.php' => 
  array (
    'fileHash' => 'f604fa0ab8a5debdc182f6dca74cc1c49c9c17a14fee4b20177ac0f548b7778e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_08_18_232415_create_chat_messages_table.php' => 
  array (
    'fileHash' => '0dbcfeaed1d1d49f18f46436bdef35cecb9e9832201f88e34fc80cc148e43bcf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\AdminUserSeeder.php' => 
  array (
    'fileHash' => 'f61defd263029fb9d8ab869907ce52370006c4ed4bfb5f863f0550559f0aeb28',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'fileHash' => '3e891c054f983078f250d1f75d4e058f06be63263b8228b08c46d66639e3456f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\PostSeeder.php' => 
  array (
    'fileHash' => '1c48347179938c0f4e7bbf421a954e0b62ce4b1c83d5aac73b49e620ce9345d6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ProjectSeeder.php' => 
  array (
    'fileHash' => '41c4c008cdfe11f27406f382167eb4665231881d3a2d8ac8a181a2885e8fd42d',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ServiceSeeder.php' => 
  array (
    'fileHash' => 'f88b4d1aa7b6dde84e7eb1c589fda4944c8bf8c1eba7e1b1e97dab2a1cdce0c8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php' => 
  array (
    'fileHash' => '7c93929f6fa86ee71ecbe7ff2604ad1f982eaba73d06029ae2a7d36a213ad26c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php' => 
  array (
    'fileHash' => '60892573fe7b23133318ba2b68838263b7fd95eeaf969a54d89a361db74e131b',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'packageDependencies' => array (
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\MonitorSystem.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
    2 => 'nesbot/carbon',
    3 => 'psr/simple-cache',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectForm.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceForm.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Concerns\\HasSortableTable.php' => 
  array (
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatSession.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CalendlyService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/log',
    2 => 'monolog/monolog',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\auth.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\database.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\site.php' => 
  array (
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ProjectFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\0001_01_01_000000_create_users_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_01_01_000001_create_services_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_01_01_000003_create_posts_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\PostSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\console.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/console',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Middleware\\IsAdmin.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\AppointmentList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\UserList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Traits\\Auditable.php' => 
  array (
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\ai.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\cache.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\queue.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_130000_widen_encrypted_columns.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_24_164256_create_telescope_entries_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_08_18_232415_create_chat_messages_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\AdminUserSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ProjectSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\web.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\CleanAudits.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryForm.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\ProfileForm.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatMessage.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Project.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'psr/simple-cache',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Service.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'psr/simple-cache',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\PostPolicy.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ProjectPolicy.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\NeonDbServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\telescope.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/telescope',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\view.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_07_15_000004_add_role_to_users_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_110000_create_appointments_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_08_18_232411_create_chat_sessions_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\routes\\admin.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Appointment.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\User.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ServicePolicy.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\UserPolicy.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\DatabaseServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\GeminiService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\UserFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_01_01_000002_create_projects_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_07_15_000006_create_model_audits_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_093938_add_performance_indexes.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_100000_create_contacts_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_120001_partition_model_audits.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_30_154019_add_dni_phone_address_to_users_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\HealthController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'symfony/http-kernel',
    3 => 'psr/container',
    4 => 'nesbot/carbon',
    5 => 'psr/simple-cache',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChangeHistory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChatList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ModelAudit.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ContactPolicy.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/container',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\admin-menu.php' => 
  array (
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\filesystems.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\logging.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\session.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ServiceFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2024_07_15_000005_add_soft_deletes_to_content_tables.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Database\\NeonPostgresConnection.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Database\\NeonPostgresConnector.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\Controller.php' => 
  array (
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ContactList.php' => 
  array (
    0 => 'livewire/livewire',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Category.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Contact.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\AppointmentPolicy.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    0 => 'laravel/telescope',
    1 => 'laravel/framework',
    2 => 'psr/container',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CircuitBreaker.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
    2 => 'psr/simple-cache',
    3 => 'psr/log',
    4 => 'monolog/monolog',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\config\\app.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'livewire/livewire',
    2 => 'symfony/http-foundation',
    3 => 'symfony/console',
    4 => 'symfony/finder',
    5 => 'symfony/mailer',
    6 => 'psr/http-message',
    7 => 'league/flysystem',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\PostFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_100001_create_categories_tables.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\migrations\\2026_07_16_120000_add_worm_trigger_to_model_audits.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ServiceSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\CleanAudits.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\CleanAudits',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\MonitorSystem.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\MonitorSystem',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Console\\Commands\\PurgeTrashed.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\PurgeTrashed',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Database\\NeonPostgresConnection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Database\\NeonPostgresConnection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\PostgresConnection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepareBindings',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bindings',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Database\\NeonPostgresConnector.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Database\\NeonPostgresConnector',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'connect',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showLogin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showRegister',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clientDashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\FrontController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\FrontController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'services',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'projects',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'project',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'blog',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'blogByCategory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'post',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'contact',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendContact',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bookAppointment',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'terms',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'privacy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\HealthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\HealthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Controllers\\SummaryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\SummaryController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Http\\Middleware\\IsAdmin.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\IsAdmin',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\AppointmentList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\AppointmentList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'status',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'confirm',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'appointment',
               'type' => 'App\\Models\\Appointment',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cancel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'appointment',
               'type' => 'App\\Models\\Appointment',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryForm.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Blog\\CategoryForm',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'category',
          ),
           'phpDoc' => NULL,
           'type' => '?App\\Models\\Category',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => '?App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\CategoryList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Blog\\CategoryList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Livewire\\Concerns\\HasSortableTable',
        1 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortField',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortDirection',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostForm.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Blog\\PostForm',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithFileUploads',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'post',
          ),
           'phpDoc' => NULL,
           'type' => '?App\\Models\\Post',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'excerpt',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'body',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'featured_image',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'featured_image_path',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'is_published',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'selectedCategories',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => '?App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Blog\\PostList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Blog\\PostList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Livewire\\Concerns\\HasSortableTable',
        1 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortField',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortDirection',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'togglePublished',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChangeHistory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\ChangeHistory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'revert',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'audit',
               'type' => 'App\\Models\\ModelAudit',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ChatList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\ChatList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'selectedSessionId',
          ),
           'phpDoc' => NULL,
           'type' => '?int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updatedSearch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'selectSession',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sessionId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'closeSessionView',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\ContactList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\ContactList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markAsRead',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contact',
               'type' => 'App\\Models\\Contact',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markAsUnread',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contact',
               'type' => 'App\\Models\\Contact',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Dashboard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Dashboard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectForm.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Projects\\ProjectForm',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithFileUploads',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'project',
          ),
           'phpDoc' => NULL,
           'type' => '?App\\Models\\Project',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'subtitle',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'logo',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'logo_path',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sort_order',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'is_featured',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'is_active',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => '?App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Projects\\ProjectList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Projects\\ProjectList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Livewire\\Concerns\\HasSortableTable',
        1 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortField',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortDirection',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggleFeatured',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Recycle\\RecycleBin.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Recycle\\RecycleBin',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tab',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelClass',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceForm.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Services\\ServiceForm',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'service',
          ),
           'phpDoc' => NULL,
           'type' => '?App\\Models\\Service',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'icon_svg',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sort_order',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'is_active',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => '?App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\Services\\ServiceList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\Services\\ServiceList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Livewire\\Concerns\\HasSortableTable',
        1 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortField',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sortDirection',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Admin\\UserList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Admin\\UserList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentBooking.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Client\\AppointmentBooking',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'service_id',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'scheduled_at',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'rules',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'submit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\AppointmentList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Client\\AppointmentList',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listeners',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cancel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'appointment',
               'type' => 'App\\Models\\Appointment',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\Chat.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Client\\Chat',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'message',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'activeSessionId',
          ),
           'phpDoc' => NULL,
           'type' => '?int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sending',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listeners',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createSession',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendMessage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'switchSession',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sessionId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteSession',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sessionId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Client\\ProfileForm.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Client\\ProfileForm',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'email',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dni',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'phone',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'address',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\Concerns\\HasSortableTable.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Livewire\\Concerns\\HasSortableTable',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sortBy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'field',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Livewire\\GlobalSearch.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\GlobalSearch',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'query',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\Url',
               'args' => 
              array (
                'as' => '\'q\'',
                'history' => 'true',
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hasResults',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updatedQuery',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Appointment.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Appointment',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Category.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Category',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'posts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatMessage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ChatMessage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'session',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ChatSession.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ChatSession',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Contact.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Contact',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\ModelAudit.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ModelAudit',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'auditable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Post.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Post',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\Auditable',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopePublished',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeRecent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'categories',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Project.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Project',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\Auditable',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeFeatured',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeOrdered',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\Service.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Service',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\Auditable',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeOrdered',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAdmin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isClient',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'appointments',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'chatSessions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\AppointmentPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\AppointmentPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'confirm',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'appointment',
               'type' => 'App\\Models\\Appointment',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ContactPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\ContactPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contact',
               'type' => 'App\\Models\\Contact',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\PostPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\PostPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'view',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ProjectPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\ProjectPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'view',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\ServicePolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\ServicePolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'view',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Models\\Service',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Policies\\UserPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\UserPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\AuthServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\DatabaseServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\DatabaseServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\NeonDbServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\NeonDbServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\TelescopeServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hideSensitiveRequestDetails',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Prevent sensitive request details from being logged by Telescope.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CalendlyService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\CalendlyService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEventTypes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\CircuitBreaker.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\CircuitBreaker',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'threshold',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'timeout',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isOpen',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isHalfOpen',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordFailure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'call',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'fn',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Services\\GeminiService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\GeminiService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'chat',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'history',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateSummary',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'text',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateHighlights',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'text',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\app\\Traits\\Auditable.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Traits\\Auditable',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bootAuditable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordAudit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'oldData',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'newData',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\PostFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\PostFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ProjectFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ProjectFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\ServiceFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\ServiceFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\AdminUserSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\AdminUserSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\PostSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\PostSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ProjectSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\ProjectSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\idmr_\\OneDrive\\Escritorio\\gestionalo\\database\\seeders\\ServiceSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\ServiceSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
