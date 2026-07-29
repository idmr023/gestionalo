<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Support/Testing/Fakes/BusFake.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Testing\Fakes\BusFake
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f9a9e9c675cfc2a817862041a294907ef1ad206e70647d01e8bad331799d6001-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Support/Testing/Fakes/BusFake.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
    'name' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
    'shortName' => 'BusFake',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 901,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Testing\\Fakes\\Fake',
      1 => 'Illuminate\\Contracts\\Bus\\QueueingDispatcher',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'dispatcher' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'dispatcher',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The original Bus dispatcher implementation.
 *
 * @var \\Illuminate\\Contracts\\Bus\\QueueingDispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'jobsToFake' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'jobsToFake',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 94,
            'startFilePos' => 766,
            'endTokenPos' => 95,
            'endFilePos' => 767,
          ),
        ),
        'docComment' => '/**
 * The job types that should be intercepted instead of dispatched.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'jobsToDispatch' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'jobsToDispatch',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 106,
            'startFilePos' => 909,
            'endTokenPos' => 107,
            'endFilePos' => 910,
          ),
        ),
        'docComment' => '/**
 * The job types that should be dispatched instead of faked.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'batchRepository' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'batchRepository',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The fake repository to track batched jobs.
 *
 * @var \\Illuminate\\Bus\\BatchRepository
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commands' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'commands',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 125,
            'startFilePos' => 1178,
            'endTokenPos' => 126,
            'endFilePos' => 1179,
          ),
        ),
        'docComment' => '/**
 * The commands that have been dispatched.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commandsSync' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'commandsSync',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 137,
            'startFilePos' => 1315,
            'endTokenPos' => 138,
            'endFilePos' => 1316,
          ),
        ),
        'docComment' => '/**
 * The commands that have been dispatched synchronously.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commandsAfterResponse' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'commandsAfterResponse',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 149,
            'startFilePos' => 1480,
            'endTokenPos' => 150,
            'endFilePos' => 1481,
          ),
        ),
        'docComment' => '/**
 * The commands that have been dispatched after the response has been sent.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'batches' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'batches',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 161,
            'startFilePos' => 1597,
            'endTokenPos' => 162,
            'endFilePos' => 1598,
          ),
        ),
        'docComment' => '/**
 * The batches that have been dispatched.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'serializeAndRestore' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'name' => 'serializeAndRestore',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 81,
            'endLine' => 81,
            'startTokenPos' => 175,
            'startFilePos' => 1771,
            'endTokenPos' => 175,
            'endFilePos' => 1775,
          ),
        ),
        'docComment' => '/**
 * Indicates if commands should be serialized and restored when pushed to the Bus.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 48,
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
          'dispatcher' => 
          array (
            'name' => 'dispatcher',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Bus\\QueueingDispatcher',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 33,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'jobsToFake' => 
          array (
            'name' => 'jobsToFake',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 91,
                'endLine' => 91,
                'startTokenPos' => 195,
                'startFilePos' => 2123,
                'endTokenPos' => 196,
                'endFilePos' => 2124,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'batchRepository' => 
          array (
            'name' => 'batchRepository',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 91,
                'endLine' => 91,
                'startTokenPos' => 206,
                'startFilePos' => 2163,
                'endTokenPos' => 206,
                'endFilePos' => 2166,
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
                      'name' => 'Illuminate\\Bus\\BatchRepository',
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
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 83,
            'endColumn' => 122,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new bus fake instance.
 *
 * @param  \\Illuminate\\Contracts\\Bus\\QueueingDispatcher  $dispatcher
 * @param  array|string  $jobsToFake
 * @param  \\Illuminate\\Bus\\BatchRepository|null  $batchRepository
 * @return void
 */',
        'startLine' => 91,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'except' => 
      array (
        'name' => 'except',
        'parameters' => 
        array (
          'jobsToDispatch' => 
          array (
            'name' => 'jobsToDispatch',
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
            'startColumn' => 28,
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
 * Specify the jobs that should be dispatched instead of faked.
 *
 * @param  array|string  $jobsToDispatch
 * @return $this
 */',
        'startLine' => 104,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatched' => 
      array (
        'name' => 'assertDispatched',
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
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 118,
                'endLine' => 118,
                'startTokenPos' => 309,
                'startFilePos' => 2943,
                'endTokenPos' => 309,
                'endFilePos' => 2946,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 48,
            'endColumn' => 63,
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
 * Assert if a job was dispatched based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|int|null  $callback
 * @return void
 */',
        'startLine' => 118,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedTimes' => 
      array (
        'name' => 'assertDispatchedTimes',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'times' => 
          array (
            'name' => 'times',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 143,
                'endLine' => 143,
                'startTokenPos' => 468,
                'startFilePos' => 3771,
                'endTokenPos' => 468,
                'endFilePos' => 3771,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 53,
            'endColumn' => 62,
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
 * Assert if a job was pushed a number of times.
 *
 * @param  string|\\Closure  $command
 * @param  int  $times
 * @return void
 */',
        'startLine' => 143,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNotDispatched' => 
      array (
        'name' => 'assertNotDispatched',
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
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 41,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 168,
                'endLine' => 168,
                'startTokenPos' => 614,
                'startFilePos' => 4602,
                'endTokenPos' => 614,
                'endFilePos' => 4605,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 51,
            'endColumn' => 66,
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
 * Determine if a job was dispatched based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 168,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNothingDispatched' => 
      array (
        'name' => 'assertNothingDispatched',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that no jobs were dispatched.
 *
 * @return void
 */',
        'startLine' => 187,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedSync' => 
      array (
        'name' => 'assertDispatchedSync',
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
            'startColumn' => 42,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 201,
                'endLine' => 201,
                'startTokenPos' => 796,
                'startFilePos' => 5714,
                'endTokenPos' => 796,
                'endFilePos' => 5717,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 52,
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
 * Assert if a job was explicitly dispatched synchronously based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|int|null  $callback
 * @return void
 */',
        'startLine' => 201,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedSyncTimes' => 
      array (
        'name' => 'assertDispatchedSyncTimes',
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
            'startLine' => 224,
            'endLine' => 224,
            'startColumn' => 47,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'times' => 
          array (
            'name' => 'times',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 224,
                'endLine' => 224,
                'startTokenPos' => 915,
                'startFilePos' => 6431,
                'endTokenPos' => 915,
                'endFilePos' => 6431,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 224,
            'endLine' => 224,
            'startColumn' => 57,
            'endColumn' => 66,
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
 * Assert if a job was pushed synchronously a number of times.
 *
 * @param  string|\\Closure  $command
 * @param  int  $times
 * @return void
 */',
        'startLine' => 224,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNotDispatchedSync' => 
      array (
        'name' => 'assertNotDispatchedSync',
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
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 247,
                'endLine' => 247,
                'startTokenPos' => 1029,
                'startFilePos' => 7133,
                'endTokenPos' => 1029,
                'endFilePos' => 7136,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 55,
            'endColumn' => 70,
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
 * Determine if a job was dispatched based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 247,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedAfterResponse' => 
      array (
        'name' => 'assertDispatchedAfterResponse',
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
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 266,
                'endLine' => 266,
                'startTokenPos' => 1117,
                'startFilePos' => 7772,
                'endTokenPos' => 1117,
                'endFilePos' => 7775,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 61,
            'endColumn' => 76,
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
 * Assert if a job was dispatched after the response was sent based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|int|null  $callback
 * @return void
 */',
        'startLine' => 266,
        'endLine' => 280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedAfterResponseTimes' => 
      array (
        'name' => 'assertDispatchedAfterResponseTimes',
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
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 56,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'times' => 
          array (
            'name' => 'times',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 289,
                'endLine' => 289,
                'startTokenPos' => 1236,
                'startFilePos' => 8543,
                'endTokenPos' => 1236,
                'endFilePos' => 8543,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 66,
            'endColumn' => 75,
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
 * Assert if a job was pushed after the response was sent a number of times.
 *
 * @param  string|\\Closure  $command
 * @param  int  $times
 * @return void
 */',
        'startLine' => 289,
        'endLine' => 303,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNotDispatchedAfterResponse' => 
      array (
        'name' => 'assertNotDispatchedAfterResponse',
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
            'startLine' => 312,
            'endLine' => 312,
            'startColumn' => 54,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 312,
                'endLine' => 312,
                'startTokenPos' => 1350,
                'startFilePos' => 9249,
                'endTokenPos' => 1350,
                'endFilePos' => 9252,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 312,
            'endLine' => 312,
            'startColumn' => 64,
            'endColumn' => 79,
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
 * Determine if a job was dispatched based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 312,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertChained' => 
      array (
        'name' => 'assertChained',
        'parameters' => 
        array (
          'expectedChain' => 
          array (
            'name' => 'expectedChain',
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
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 35,
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
 * Assert if a chain of jobs was dispatched.
 *
 * @param  array  $expectedChain
 * @return void
 */',
        'startLine' => 330,
        'endLine' => 362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNothingChained' => 
      array (
        'name' => 'assertNothingChained',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert no chained jobs was dispatched.
 *
 * @return void
 */',
        'startLine' => 369,
        'endLine' => 372,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'resetChainPropertiesToDefaults' => 
      array (
        'name' => 'resetChainPropertiesToDefaults',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 380,
            'endLine' => 380,
            'startColumn' => 55,
            'endColumn' => 58,
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
 * Reset the chain properties to their default values on the job.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 380,
        'endLine' => 388,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedWithoutChain' => 
      array (
        'name' => 'assertDispatchedWithoutChain',
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
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 397,
                'endLine' => 397,
                'startTokenPos' => 1785,
                'startFilePos' => 11759,
                'endTokenPos' => 1785,
                'endFilePos' => 11762,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 60,
            'endColumn' => 75,
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
 * Assert if a job was dispatched with an empty chain based on a truth-test callback.
 *
 * @param  string|\\Closure  $command
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 397,
        'endLine' => 409,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertDispatchedWithChainOfObjects' => 
      array (
        'name' => 'assertDispatchedWithChainOfObjects',
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
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 59,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expectedChain' => 
          array (
            'name' => 'expectedChain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 69,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 85,
            'endColumn' => 93,
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
 * Assert if a job was dispatched with chained jobs based on a truth-test callback.
 *
 * @param  string  $command
 * @param  array  $expectedChain
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 419,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'chainedBatch' => 
      array (
        'name' => 'chainedBatch',
        'parameters' => 
        array (
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
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 34,
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
 * Create a new assertion about a chained batch.
 *
 * @param  \\Closure  $callback
 * @return \\Illuminate\\Support\\Testing\\Fakes\\ChainedBatchTruthTest
 */',
        'startLine' => 470,
        'endLine' => 473,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertBatched' => 
      array (
        'name' => 'assertBatched',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 481,
            'endLine' => 481,
            'startColumn' => 35,
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
 * Assert if a batch was dispatched based on a truth-test callback.
 *
 * @param  callable  $callback
 * @return void
 */',
        'startLine' => 481,
        'endLine' => 487,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertBatchCount' => 
      array (
        'name' => 'assertBatchCount',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
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
            'startColumn' => 38,
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
 * Assert the number of batches that have been dispatched.
 *
 * @param  int  $count
 * @return void
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
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNothingBatched' => 
      array (
        'name' => 'assertNothingBatched',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that no batched jobs were dispatched.
 *
 * @return void
 */',
        'startLine' => 507,
        'endLine' => 515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'assertNothingPlaced' => 
      array (
        'name' => 'assertNothingPlaced',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that no jobs were dispatched, chained, or batched.
 *
 * @return void
 */',
        'startLine' => 522,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'dispatched' => 
      array (
        'name' => 'dispatched',
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
            'startLine' => 535,
            'endLine' => 535,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 535,
                'endLine' => 535,
                'startTokenPos' => 2476,
                'startFilePos' => 16271,
                'endTokenPos' => 2476,
                'endFilePos' => 16274,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 535,
            'endLine' => 535,
            'startColumn' => 42,
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
 * Get all of the jobs matching a truth-test callback.
 *
 * @param  string  $command
 * @param  callable|null  $callback
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 535,
        'endLine' => 544,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'dispatchedSync' => 
      array (
        'name' => 'dispatchedSync',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
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
            'startLine' => 553,
            'endLine' => 553,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 553,
                'endLine' => 553,
                'startTokenPos' => 2576,
                'startFilePos' => 16828,
                'endTokenPos' => 2576,
                'endFilePos' => 16831,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 553,
            'endLine' => 553,
            'startColumn' => 53,
            'endColumn' => 68,
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
 * Get all of the jobs dispatched synchronously matching a truth-test callback.
 *
 * @param  string  $command
 * @param  callable|null  $callback
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 553,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'dispatchedAfterResponse' => 
      array (
        'name' => 'dispatchedAfterResponse',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
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
            'startLine' => 571,
            'endLine' => 571,
            'startColumn' => 45,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 571,
                'endLine' => 571,
                'startTokenPos' => 2676,
                'startFilePos' => 17416,
                'endTokenPos' => 2676,
                'endFilePos' => 17419,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 571,
            'endLine' => 571,
            'startColumn' => 62,
            'endColumn' => 77,
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
 * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
 *
 * @param  string  $command
 * @param  callable|null  $callback
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 571,
        'endLine' => 580,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'batched' => 
      array (
        'name' => 'batched',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 588,
            'endLine' => 588,
            'startColumn' => 29,
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
 * Get all of the pending batches matching a truth-test callback.
 *
 * @param  callable  $callback
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 588,
        'endLine' => 595,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'hasDispatched' => 
      array (
        'name' => 'hasDispatched',
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
            'startLine' => 603,
            'endLine' => 603,
            'startColumn' => 35,
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
 * Determine if there are any stored commands for a given class.
 *
 * @param  string  $command
 * @return bool
 */',
        'startLine' => 603,
        'endLine' => 606,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'hasDispatchedSync' => 
      array (
        'name' => 'hasDispatchedSync',
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
            'startLine' => 614,
            'endLine' => 614,
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
 * Determine if there are any stored commands for a given class.
 *
 * @param  string  $command
 * @return bool
 */',
        'startLine' => 614,
        'endLine' => 617,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'hasDispatchedAfterResponse' => 
      array (
        'name' => 'hasDispatchedAfterResponse',
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
            'startLine' => 625,
            'endLine' => 625,
            'startColumn' => 48,
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
 * Determine if there are any stored commands for a given class.
 *
 * @param  string  $command
 * @return bool
 */',
        'startLine' => 625,
        'endLine' => 628,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 636,
            'endLine' => 636,
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
        'startLine' => 636,
        'endLine' => 643,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 654,
            'endLine' => 654,
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
                'startLine' => 654,
                'endLine' => 654,
                'startTokenPos' => 3039,
                'startFilePos' => 19748,
                'endTokenPos' => 3039,
                'endFilePos' => 19751,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 654,
            'endLine' => 654,
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
        'startLine' => 654,
        'endLine' => 661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 670,
            'endLine' => 670,
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
                'startLine' => 670,
                'endLine' => 670,
                'startTokenPos' => 3119,
                'startFilePos' => 20248,
                'endTokenPos' => 3119,
                'endFilePos' => 20251,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 670,
            'endLine' => 670,
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
 * Dispatch a command to its appropriate handler in the current process.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return mixed
 */',
        'startLine' => 670,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 685,
            'endLine' => 685,
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
 */',
        'startLine' => 685,
        'endLine' => 692,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 700,
            'endLine' => 700,
            'startColumn' => 43,
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
 * Dispatch a command to its appropriate handler.
 *
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 700,
        'endLine' => 707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 715,
            'endLine' => 715,
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
        'startLine' => 715,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 729,
            'endLine' => 729,
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
        'startLine' => 729,
        'endLine' => 732,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 740,
            'endLine' => 740,
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
 * @param  \\Illuminate\\Support\\Collection|array  $jobs
 * @return \\Illuminate\\Bus\\PendingBatch
 */',
        'startLine' => 740,
        'endLine' => 743,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'dispatchFakeBatch' => 
      array (
        'name' => 'dispatchFakeBatch',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 751,
                'endLine' => 751,
                'startTokenPos' => 3461,
                'startFilePos' => 22518,
                'endTokenPos' => 3461,
                'endFilePos' => 22519,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 751,
            'endLine' => 751,
            'startColumn' => 39,
            'endColumn' => 48,
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
 * Dispatch an empty job batch for testing.
 *
 * @param  string  $name
 * @return \\Illuminate\\Bus\\Batch
 */',
        'startLine' => 751,
        'endLine' => 754,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'recordPendingBatch' => 
      array (
        'name' => 'recordPendingBatch',
        'parameters' => 
        array (
          'pendingBatch' => 
          array (
            'name' => 'pendingBatch',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Bus\\PendingBatch',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 40,
            'endColumn' => 65,
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
 * Record the fake pending batch dispatch.
 *
 * @param  \\Illuminate\\Bus\\PendingBatch  $pendingBatch
 * @return \\Illuminate\\Bus\\Batch
 */',
        'startLine' => 762,
        'endLine' => 767,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'shouldFakeJob' => 
      array (
        'name' => 'shouldFakeJob',
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
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 38,
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
 * Determine if a command should be faked or actually dispatched.
 *
 * @param  mixed  $command
 * @return bool
 */',
        'startLine' => 775,
        'endLine' => 791,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'shouldDispatchCommand' => 
      array (
        'name' => 'shouldDispatchCommand',
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
            'startLine' => 799,
            'endLine' => 799,
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
 * Determine if a command should be dispatched or not.
 *
 * @param  mixed  $command
 * @return bool
 */',
        'startLine' => 799,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'serializeAndRestore' => 
      array (
        'name' => 'serializeAndRestore',
        'parameters' => 
        array (
          'serializeAndRestore' => 
          array (
            'name' => 'serializeAndRestore',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 815,
                'endLine' => 815,
                'startTokenPos' => 3742,
                'startFilePos' => 24312,
                'endTokenPos' => 3742,
                'endFilePos' => 24315,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 41,
            'endColumn' => 72,
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
 * Specify if commands should be serialized and restored when being batched.
 *
 * @param  bool  $serializeAndRestore
 * @return $this
 */',
        'startLine' => 815,
        'endLine' => 820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'serializeAndRestoreCommand' => 
      array (
        'name' => 'serializeAndRestoreCommand',
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
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 51,
            'endColumn' => 58,
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
 * Serialize and unserialize the command to simulate the queueing process.
 *
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 828,
        'endLine' => 831,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'getCommandRepresentation' => 
      array (
        'name' => 'getCommandRepresentation',
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
            'startLine' => 839,
            'endLine' => 839,
            'startColumn' => 49,
            'endColumn' => 56,
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
 * Return the command representation that should be stored.
 *
 * @param  mixed  $command
 * @return mixed
 */',
        'startLine' => 839,
        'endLine' => 842,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 850,
            'endLine' => 850,
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
 * Set the pipes commands should be piped through before dispatching.
 *
 * @param  array  $pipes
 * @return $this
 */',
        'startLine' => 850,
        'endLine' => 855,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 863,
            'endLine' => 863,
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
        'startLine' => 863,
        'endLine' => 866,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 874,
            'endLine' => 874,
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
 * @return mixed
 */',
        'startLine' => 874,
        'endLine' => 877,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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
            'startLine' => 885,
            'endLine' => 885,
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
        'startLine' => 885,
        'endLine' => 890,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'aliasName' => NULL,
      ),
      'dispatchedBatches' => 
      array (
        'name' => 'dispatchedBatches',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the batches that have been dispatched.
 *
 * @return array
 */',
        'startLine' => 897,
        'endLine' => 900,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\BusFake',
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