<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Broadcasting/BroadcastManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Broadcasting\BroadcastManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-185c91f104505911433d199ccb32dccb8393cfc48d317832c67ba963fac05c00-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Broadcasting/BroadcastManager.php',
      ),
    ),
    'namespace' => 'Illuminate\\Broadcasting',
    'name' => 'Illuminate\\Broadcasting\\BroadcastManager',
    'shortName' => 'BroadcastManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 525,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Broadcasting\\Factory',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'app' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'name' => 'app',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The application instance.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'drivers' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'name' => 'drivers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 140,
            'startFilePos' => 1224,
            'endTokenPos' => 141,
            'endFilePos' => 1225,
          ),
        ),
        'docComment' => '/**
 * The array of resolved broadcast drivers.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'customCreators' => 
      array (
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'name' => 'customCreators',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 152,
            'startFilePos' => 1348,
            'endTokenPos' => 153,
            'endFilePos' => 1349,
          ),
        ),
        'docComment' => '/**
 * The registered custom driver creators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 35,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 33,
            'endColumn' => 36,
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
 * Create a new manager instance.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $app
 * @return void
 */',
        'startLine' => 56,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'routes' => 
      array (
        'name' => 'routes',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 67,
                'endLine' => 67,
                'startTokenPos' => 195,
                'startFilePos' => 1791,
                'endTokenPos' => 195,
                'endFilePos' => 1794,
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
                      'name' => 'array',
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
            'startLine' => 67,
            'endLine' => 67,
            'startColumn' => 28,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the routes for handling broadcast channel authentication and sockets.
 *
 * @param  array|null  $attributes
 * @return void
 */',
        'startLine' => 67,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'userRoutes' => 
      array (
        'name' => 'userRoutes',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 89,
                'endLine' => 89,
                'startTokenPos' => 326,
                'startFilePos' => 2522,
                'endTokenPos' => 326,
                'endFilePos' => 2525,
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
                      'name' => 'array',
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
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 32,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the routes for handling broadcast user authentication.
 *
 * @param  array|null  $attributes
 * @return void
 */',
        'startLine' => 89,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'channelRoutes' => 
      array (
        'name' => 'channelRoutes',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 457,
                'startFilePos' => 3312,
                'endTokenPos' => 457,
                'endFilePos' => 3315,
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
                      'name' => 'array',
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 35,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the routes for handling broadcast authentication and sockets.
 *
 * Alias of "routes" method.
 *
 * @param  array|null  $attributes
 * @return void
 */',
        'startLine' => 113,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'socket' => 
      array (
        'name' => 'socket',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 124,
                'endLine' => 124,
                'startTokenPos' => 484,
                'startFilePos' => 3558,
                'endTokenPos' => 484,
                'endFilePos' => 3561,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 28,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the socket ID for the given request.
 *
 * @param  \\Illuminate\\Http\\Request|null  $request
 * @return string|null
 */',
        'startLine' => 124,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'on' => 
      array (
        'name' => 'on',
        'parameters' => 
        array (
          'channels' => 
          array (
            'name' => 'channels',
            'default' => NULL,
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
                      'name' => 'Illuminate\\Broadcasting\\Channel',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 24,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Broadcasting\\AnonymousEvent',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Begin sending an anonymous broadcast to the given channels.
 */',
        'startLine' => 138,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'private' => 
      array (
        'name' => 'private',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 146,
            'endLine' => 146,
            'startColumn' => 29,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Broadcasting\\AnonymousEvent',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Begin sending an anonymous broadcast to the given private channels.
 */',
        'startLine' => 146,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'presence' => 
      array (
        'name' => 'presence',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 30,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Broadcasting\\AnonymousEvent',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Begin sending an anonymous broadcast to the given presence channels.
 */',
        'startLine' => 154,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'event' => 
      array (
        'name' => 'event',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 165,
                'endLine' => 165,
                'startTokenPos' => 662,
                'startFilePos' => 4614,
                'endTokenPos' => 662,
                'endFilePos' => 4617,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 27,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Begin broadcasting an event.
 *
 * @param  mixed|null  $event
 * @return \\Illuminate\\Broadcasting\\PendingBroadcast
 */',
        'startLine' => 165,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'queue' => 
      array (
        'name' => 'queue',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Queue the given event for broadcast.
 *
 * @param  mixed  $event
 * @return void
 */',
        'startLine' => 176,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'mustBeUniqueAndCannotAcquireLock' => 
      array (
        'name' => 'mustBeUniqueAndCannotAcquireLock',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 57,
            'endColumn' => 62,
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
 * Determine if the broadcastable event must be unique and determine if we can acquire the necessary lock.
 *
 * @param  mixed  $event
 * @return bool
 */',
        'startLine' => 216,
        'endLine' => 223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'connection' => 
      array (
        'name' => 'connection',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 231,
                'endLine' => 231,
                'startTokenPos' => 1019,
                'startFilePos' => 6544,
                'endTokenPos' => 1019,
                'endFilePos' => 6547,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 231,
            'endLine' => 231,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a driver instance.
 *
 * @param  string|null  $driver
 * @return mixed
 */',
        'startLine' => 231,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'driver' => 
      array (
        'name' => 'driver',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 242,
                'endLine' => 242,
                'startTokenPos' => 1048,
                'startFilePos' => 6745,
                'endTokenPos' => 1048,
                'endFilePos' => 6748,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a driver instance.
 *
 * @param  string|null  $name
 * @return mixed
 */',
        'startLine' => 242,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 255,
            'endLine' => 255,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * Attempt to get the connection from the local cache.
 *
 * @param  string  $name
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 255,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 32,
            'endColumn' => 36,
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
 * Resolve the given broadcaster.
 *
 * @param  string  $name
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 268,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'callCustomCreator' => 
      array (
        'name' => 'callCustomCreator',
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
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Call a custom driver creator.
 *
 * @param  array  $config
 * @return mixed
 */',
        'startLine' => 295,
        'endLine' => 298,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'createReverbDriver' => 
      array (
        'name' => 'createReverbDriver',
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 43,
            'endColumn' => 55,
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
 * Create an instance of the driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 306,
        'endLine' => 309,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'createPusherDriver' => 
      array (
        'name' => 'createPusherDriver',
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
            'startLine' => 317,
            'endLine' => 317,
            'startColumn' => 43,
            'endColumn' => 55,
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
 * Create an instance of the driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 317,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'pusher' => 
      array (
        'name' => 'pusher',
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
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 28,
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
 * Get a Pusher instance for the given configuration.
 *
 * @param  array  $config
 * @return \\Pusher\\Pusher
 */',
        'startLine' => 328,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'createAblyDriver' => 
      array (
        'name' => 'createAblyDriver',
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
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Create an instance of the driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 362,
        'endLine' => 365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'ably' => 
      array (
        'name' => 'ably',
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
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 26,
            'endColumn' => 38,
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
 * Get an Ably instance for the given configuration.
 *
 * @param  array  $config
 * @return \\Ably\\AblyRest
 */',
        'startLine' => 373,
        'endLine' => 376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'createRedisDriver' => 
      array (
        'name' => 'createRedisDriver',
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
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Create an instance of the driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 384,
        'endLine' => 390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'createLogDriver' => 
      array (
        'name' => 'createLogDriver',
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
            'startLine' => 398,
            'endLine' => 398,
            'startColumn' => 40,
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
 * Create an instance of the driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 398,
        'endLine' => 403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'createNullDriver' => 
      array (
        'name' => 'createNullDriver',
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
            'startLine' => 411,
            'endLine' => 411,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Create an instance of the driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Contracts\\Broadcasting\\Broadcaster
 */',
        'startLine' => 411,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'getConfig' => 
      array (
        'name' => 'getConfig',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 34,
            'endColumn' => 38,
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
 * Get the connection configuration.
 *
 * @param  string  $name
 * @return array
 */',
        'startLine' => 422,
        'endLine' => 429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'getDefaultDriver' => 
      array (
        'name' => 'getDefaultDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default driver name.
 *
 * @return string
 */',
        'startLine' => 436,
        'endLine' => 439,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'setDefaultDriver' => 
      array (
        'name' => 'setDefaultDriver',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 38,
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
 * Set the default driver name.
 *
 * @param  string  $name
 * @return void
 */',
        'startLine' => 447,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'purge' => 
      array (
        'name' => 'purge',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 458,
                'endLine' => 458,
                'startTokenPos' => 1848,
                'startFilePos' => 12156,
                'endTokenPos' => 1848,
                'endFilePos' => 12159,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 27,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disconnect the given disk and remove from local cache.
 *
 * @param  string|null  $name
 * @return void
 */',
        'startLine' => 458,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'extend' => 
      array (
        'name' => 'extend',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 37,
            'endColumn' => 53,
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
 * Register a custom driver creator Closure.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 * @return $this
 */',
        'startLine' => 472,
        'endLine' => 477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'getApplication' => 
      array (
        'name' => 'getApplication',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the application instance used by the manager.
 *
 * @return \\Illuminate\\Contracts\\Foundation\\Application
 */',
        'startLine' => 484,
        'endLine' => 487,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'setApplication' => 
      array (
        'name' => 'setApplication',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 495,
            'endLine' => 495,
            'startColumn' => 36,
            'endColumn' => 39,
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
 * Set the application instance used by the manager.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return $this
 */',
        'startLine' => 495,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      'forgetDrivers' => 
      array (
        'name' => 'forgetDrivers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Forget all of the resolved driver instances.
 *
 * @return $this
 */',
        'startLine' => 507,
        'endLine' => 512,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 521,
            'endLine' => 521,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 521,
            'endLine' => 521,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 521,
        'endLine' => 524,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Broadcasting',
        'declaringClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'implementingClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
        'currentClassName' => 'Illuminate\\Broadcasting\\BroadcastManager',
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