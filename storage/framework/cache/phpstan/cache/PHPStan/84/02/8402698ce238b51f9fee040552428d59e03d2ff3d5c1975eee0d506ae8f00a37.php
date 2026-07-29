<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Database/PostgresConnection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\PostgresConnection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3b7f8c967b67660a69f30d11e458319d6019db7e765a5e1f1adcbfb13c204c7b-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\PostgresConnection',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Database/PostgresConnection.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database',
    'name' => 'Illuminate\\Database\\PostgresConnection',
    'shortName' => 'PostgresConnection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 117,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Connection',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getDriverTitle' => 
      array (
        'name' => 'getDriverTitle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 18,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'escapeBinary' => 
      array (
        'name' => 'escapeBinary',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 37,
            'endColumn' => 42,
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
 * Escape a binary value for safe SQL embedding.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 29,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'escapeBool' => 
      array (
        'name' => 'escapeBool',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 35,
            'endColumn' => 40,
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
 * Escape a bool value for safe SQL embedding.
 *
 * @param  bool  $value
 * @return string
 */',
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'isUniqueConstraintError' => 
      array (
        'name' => 'isUniqueConstraintError',
        'parameters' => 
        array (
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 48,
            'endColumn' => 67,
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
 * Determine if the given database exception was caused by a unique constraint violation.
 *
 * @param  \\Exception  $exception
 * @return bool
 */',
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'getDefaultQueryGrammar' => 
      array (
        'name' => 'getDefaultQueryGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default query grammar instance.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\PostgresGrammar
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
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'getSchemaBuilder' => 
      array (
        'name' => 'getSchemaBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a schema builder instance for the connection.
 *
 * @return \\Illuminate\\Database\\Schema\\PostgresBuilder
 */',
        'startLine' => 75,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'getDefaultSchemaGrammar' => 
      array (
        'name' => 'getDefaultSchemaGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default schema grammar instance.
 *
 * @return \\Illuminate\\Database\\Schema\\Grammars\\PostgresGrammar
 */',
        'startLine' => 89,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'getSchemaState' => 
      array (
        'name' => 'getSchemaState',
        'parameters' => 
        array (
          'files' => 
          array (
            'name' => 'files',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 103,
                'endLine' => 103,
                'startTokenPos' => 314,
                'startFilePos' => 2599,
                'endTokenPos' => 314,
                'endFilePos' => 2602,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Illuminate\\Filesystem\\Filesystem',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 36,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'processFactory' => 
          array (
            'name' => 'processFactory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 103,
                'endLine' => 103,
                'startTokenPos' => 324,
                'startFilePos' => 2633,
                'endTokenPos' => 324,
                'endFilePos' => 2636,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 63,
            'endColumn' => 94,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the schema state for the connection.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem|null  $files
 * @param  callable|null  $processFactory
 * @return \\Illuminate\\Database\\Schema\\PostgresSchemaState
 */',
        'startLine' => 103,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
        'aliasName' => NULL,
      ),
      'getDefaultPostProcessor' => 
      array (
        'name' => 'getDefaultPostProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default post processor instance.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\PostgresProcessor
 */',
        'startLine' => 113,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database',
        'declaringClassName' => 'Illuminate\\Database\\PostgresConnection',
        'implementingClassName' => 'Illuminate\\Database\\PostgresConnection',
        'currentClassName' => 'Illuminate\\Database\\PostgresConnection',
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