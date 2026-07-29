<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Database/Connectors/PostgresConnector.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Connectors\PostgresConnector
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6e69d658c8f334d19776fa02fcd59076873abc972df7f489f31e6da59d9f7adb-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Database/Connectors/PostgresConnector.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Connectors',
    'name' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
    'shortName' => 'PostgresConnector',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 187,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Connectors\\ConnectorInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Concerns\\ParsesSearchPath',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'options' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'name' => 'options',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\PDO::ATTR_CASE => \\PDO::CASE_NATURAL, \\PDO::ATTR_ERRMODE => \\PDO::ERRMODE_EXCEPTION, \\PDO::ATTR_ORACLE_NULLS => \\PDO::NULL_NATURAL, \\PDO::ATTR_STRINGIFY_FETCHES => false]',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 22,
            'startTokenPos' => 44,
            'startFilePos' => 321,
            'endTokenPos' => 88,
            'endFilePos' => 524,
          ),
        ),
        'docComment' => '/**
 * The default PDO connection options.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'connect' => 
      array (
        'name' => 'connect',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 29,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Establish a database connection.
 *
 * @param  array  $config
 * @return \\PDO
 */',
        'startLine' => 30,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'getDsn' => 
      array (
        'name' => 'getDsn',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a DSN string from a configuration.
 *
 * @param  array  $config
 * @return string
 */',
        'startLine' => 59,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'addSslOptions' => 
      array (
        'name' => 'addSslOptions',
        'parameters' => 
        array (
          'dsn' => 
          array (
            'name' => 'dsn',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 44,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the SSL options to the DSN.
 *
 * @param  string  $dsn
 * @param  array  $config
 * @return string
 */',
        'startLine' => 104,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'configureIsolationLevel' => 
      array (
        'name' => 'configureIsolationLevel',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 48,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 61,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the connection transaction isolation level.
 *
 * @param  \\PDO  $connection
 * @param  array  $config
 * @return void
 */',
        'startLine' => 122,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'configureTimezone' => 
      array (
        'name' => 'configureTimezone',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the timezone on the connection.
 *
 * @param  \\PDO  $connection
 * @param  array  $config
 * @return void
 */',
        'startLine' => 136,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'configureSearchPath' => 
      array (
        'name' => 'configureSearchPath',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 44,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 57,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the "search_path" on the database connection.
 *
 * @param  \\PDO  $connection
 * @param  array  $config
 * @return void
 */',
        'startLine' => 152,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'quoteSearchPath' => 
      array (
        'name' => 'quoteSearchPath',
        'parameters' => 
        array (
          'searchPath' => 
          array (
            'name' => 'searchPath',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Format the search path for the DSN.
 *
 * @param  array  $searchPath
 * @return string
 */',
        'startLine' => 169,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
      'configureSynchronousCommit' => 
      array (
        'name' => 'configureSynchronousCommit',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 51,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 64,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Configure the synchronous_commit setting.
 *
 * @param  \\PDO  $connection
 * @param  array  $config
 * @return void
 */',
        'startLine' => 181,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\PostgresConnector',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));