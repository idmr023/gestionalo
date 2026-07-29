<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Bus/Dispatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Bus\Dispatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bcdeda4024a478424c1469e4bdbc14e71371170b23c3ad0e83b14db5d07d7982-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Bus\\Dispatcher',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Bus/Dispatcher.php',
      ),
    ),
    'namespace' => 'Illuminate\\Bus',
    'name' => 'Illuminate\\Bus\\Dispatcher',
    'shortName' => 'Dispatcher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 286,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Bus\\QueueingDispatcher',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The container implementation.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pipeline' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'pipeline',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The pipeline instance for the bus.
 *
 * @var \\Illuminate\\Pipeline\\Pipeline
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pipes' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'pipes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 94,
            'startFilePos' => 885,
            'endTokenPos' => 95,
            'endFilePos' => 886,
          ),
        ),
        'docComment' => '/**
 * The pipes to send commands through before dispatching.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'handlers' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'handlers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 106,
            'startFilePos' => 1025,
            'endTokenPos' => 107,
            'endFilePos' => 1026,
          ),
        ),
        'docComment' => '/**
 * The command to handler mapping for non-self-handling events.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queueResolver' => 
      array (
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'name' => 'queueResolver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The queue resolver callback.
 *
 * @var \\Closure|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 29,
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
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 61,
            'endLine' => 61,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queueResolver' => 
          array (
            'name' => 'queueResolver',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 61,
                'endLine' => 61,
                'startTokenPos' => 137,
                'startFilePos' => 1432,
                'endTokenPos' => 137,
                'endFilePos' => 1435,
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
                      'name' => 'Closure',
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
            'startLine' => 61,
            'endLine' => 61,
            'startColumn' => 55,
            'endColumn' => 84,
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
 * Create a new command dispatcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @param  \\Closure|null  $queueResolver
 * @return void
 */',
        'startLine' => 61,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatch' => 
      array (
        'name' => 'dispatch',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 30,
            'endColumn' => 37,
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
 * Dispatch a command to its appropriate handler.
 *
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 74,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchSync' => 
      array (
        'name' => 'dispatchSync',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 240,
                'startFilePos' => 2269,
                'endTokenPos' => 240,
                'endFilePos' => 2272,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 44,
            'endColumn' => 58,
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
 * Dispatch a command to its appropriate handler in the current process.
 *
 * Queueable jobs will be dispatched to the "sync" queue.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return mixed
 */',
        'startLine' => 90,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchNow' => 
      array (
        'name' => 'dispatchNow',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 108,
                'endLine' => 108,
                'startTokenPos' => 321,
                'startFilePos' => 2846,
                'endTokenPos' => 321,
                'endFilePos' => 2849,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 43,
            'endColumn' => 57,
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
 * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return mixed
 */',
        'startLine' => 108,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'findBatch' => 
      array (
        'name' => 'findBatch',
        'parameters' => 
        array (
          'batchId' => 
          array (
            'name' => 'batchId',
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
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 31,
            'endColumn' => 45,
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
 * Attempt to find the batch with the given ID.
 *
 * @param  string  $batchId
 * @return \\Illuminate\\Bus\\Batch|null
 */',
        'startLine' => 139,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'batch' => 
      array (
        'name' => 'batch',
        'parameters' => 
        array (
          'jobs' => 
          array (
            'name' => 'jobs',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Create a new batch of queueable jobs.
 *
 * @param  \\Illuminate\\Support\\Collection|array|mixed  $jobs
 * @return \\Illuminate\\Bus\\PendingBatch
 */',
        'startLine' => 150,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'chain' => 
      array (
        'name' => 'chain',
        'parameters' => 
        array (
          'jobs' => 
          array (
            'name' => 'jobs',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Create a new chain of queueable jobs.
 *
 * @param  \\Illuminate\\Support\\Collection|array  $jobs
 * @return \\Illuminate\\Foundation\\Bus\\PendingChain
 */',
        'startLine' => 161,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'hasCommandHandler' => 
      array (
        'name' => 'hasCommandHandler',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 39,
            'endColumn' => 46,
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
 * Determine if the given command has a handler.
 *
 * @param  mixed  $command
 * @return bool
 */',
        'startLine' => 175,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'getCommandHandler' => 
      array (
        'name' => 'getCommandHandler',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 186,
            'endLine' => 186,
            'startColumn' => 39,
            'endColumn' => 46,
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
 * Retrieve the handler for a command.
 *
 * @param  mixed  $command
 * @return bool|mixed
 */',
        'startLine' => 186,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'commandShouldBeQueued' => 
      array (
        'name' => 'commandShouldBeQueued',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 46,
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
 * Determine if the given command should be queued.
 *
 * @param  mixed  $command
 * @return bool
 */',
        'startLine' => 201,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchToQueue' => 
      array (
        'name' => 'dispatchToQueue',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 214,
            'endLine' => 214,
            'startColumn' => 37,
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
 * Dispatch a command to its appropriate handler behind a queue.
 *
 * @param  mixed  $command
 * @return mixed
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 214,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'pushCommandToQueue' => 
      array (
        'name' => 'pushCommandToQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 238,
            'endLine' => 238,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 238,
            'endLine' => 238,
            'startColumn' => 51,
            'endColumn' => 58,
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
 * Push the command onto the given queue instance.
 *
 * @param  \\Illuminate\\Contracts\\Queue\\Queue  $queue
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 238,
        'endLine' => 245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatchAfterResponse' => 
      array (
        'name' => 'dispatchAfterResponse',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 254,
                'endLine' => 254,
                'startTokenPos' => 1008,
                'startFilePos' => 6968,
                'endTokenPos' => 1008,
                'endFilePos' => 6971,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 53,
            'endColumn' => 67,
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
 * Dispatch a command to its appropriate handler after the current process.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return void
 */',
        'startLine' => 254,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'pipeThrough' => 
      array (
        'name' => 'pipeThrough',
        'parameters' => 
        array (
          'pipes' => 
          array (
            'name' => 'pipes',
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
            'startLine' => 267,
            'endLine' => 267,
            'startColumn' => 33,
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
 * Set the pipes through which commands should be piped before dispatching.
 *
 * @param  array  $pipes
 * @return $this
 */',
        'startLine' => 267,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
        'aliasName' => NULL,
      ),
      'map' => 
      array (
        'name' => 'map',
        'parameters' => 
        array (
          'map' => 
          array (
            'name' => 'map',
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
            'startLine' => 280,
            'endLine' => 280,
            'startColumn' => 25,
            'endColumn' => 34,
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
 * Map a command to a handler.
 *
 * @param  array  $map
 * @return $this
 */',
        'startLine' => 280,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Bus',
        'declaringClassName' => 'Illuminate\\Bus\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Bus\\Dispatcher',
        'currentClassName' => 'Illuminate\\Bus\\Dispatcher',
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