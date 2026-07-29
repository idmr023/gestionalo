<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Database/Connectors/Connector.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Connectors\Connector
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ce4daaf2b28220a6446e9d336acddab2438c24b28ffc745d6b07b22ead5887bb-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Connectors\\Connector',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Database/Connectors/Connector.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Connectors',
    'name' => 'Illuminate\\Database\\Connectors\\Connector',
    'shortName' => 'Connector',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 124,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\DetectsLostConnections',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'options' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'name' => 'options',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\PDO::ATTR_CASE => \\PDO::CASE_NATURAL, \\PDO::ATTR_ERRMODE => \\PDO::ERRMODE_EXCEPTION, \\PDO::ATTR_ORACLE_NULLS => \\PDO::NULL_NATURAL, \\PDO::ATTR_STRINGIFY_FETCHES => false, \\PDO::ATTR_EMULATE_PREPARES => false]',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 25,
            'startTokenPos' => 46,
            'startFilePos' => 298,
            'endTokenPos' => 99,
            'endFilePos' => 546,
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
        'startLine' => 19,
        'endLine' => 25,
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
      'createConnection' => 
      array (
        'name' => 'createConnection',
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
            'startLine' => 37,
            'endLine' => 37,
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 44,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 59,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new PDO connection.
 *
 * @param  string  $dsn
 * @param  array  $config
 * @param  array  $options
 * @return \\PDO
 *
 * @throws \\Exception
 */',
        'startLine' => 37,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'aliasName' => NULL,
      ),
      'createPdoConnection' => 
      array (
        'name' => 'createPdoConnection',
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 44,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'username' => 
          array (
            'name' => 'username',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 50,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'password' => 
          array (
            'name' => 'password',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 61,
            'endColumn' => 92,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 95,
            'endColumn' => 102,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new PDO connection instance.
 *
 * @param  string  $dsn
 * @param  string  $username
 * @param  string  $password
 * @param  array  $options
 * @return \\PDO
 */',
        'startLine' => 63,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'aliasName' => NULL,
      ),
      'tryAgainIfCausedByLostConnection' => 
      array (
        'name' => 'tryAgainIfCausedByLostConnection',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 57,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 71,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'username' => 
          array (
            'name' => 'username',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 77,
            'endColumn' => 85,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'password' => 
          array (
            'name' => 'password',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 88,
            'endColumn' => 119,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 122,
            'endColumn' => 129,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle an exception that occurred during connect execution.
 *
 * @param  \\Throwable  $e
 * @param  string  $dsn
 * @param  string  $username
 * @param  string  $password
 * @param  array  $options
 * @return \\PDO
 *
 * @throws \\Throwable
 */',
        'startLine' => 82,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'aliasName' => NULL,
      ),
      'getOptions' => 
      array (
        'name' => 'getOptions',
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 32,
            'endColumn' => 44,
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
 * Get the PDO options based on the configuration.
 *
 * @param  array  $config
 * @return array
 */',
        'startLine' => 97,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'aliasName' => NULL,
      ),
      'getDefaultOptions' => 
      array (
        'name' => 'getDefaultOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default PDO connection options.
 *
 * @return array
 */',
        'startLine' => 109,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'aliasName' => NULL,
      ),
      'setDefaultOptions' => 
      array (
        'name' => 'setDefaultOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 39,
            'endColumn' => 52,
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
 * Set the default PDO connection options.
 *
 * @param  array  $options
 * @return void
 */',
        'startLine' => 120,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Connectors',
        'declaringClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'implementingClassName' => 'Illuminate\\Database\\Connectors\\Connector',
        'currentClassName' => 'Illuminate\\Database\\Connectors\\Connector',
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