<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Queue/Queue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Queue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4618af6e3e9cc6e1133c3dbb47e72329c4597e3d678d6bdd24ec22c444beda57-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Queue\\Queue',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Queue/Queue.php',
      ),
    ),
    'namespace' => 'Illuminate\\Queue',
    'name' => 'Illuminate\\Queue\\Queue',
    'shortName' => 'Queue',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 442,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\InteractsWithTime',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The IoC container instance.
 *
 * @var \\Illuminate\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectionName' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'connectionName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The connection name for the queue.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dispatchAfterCommit' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'dispatchAfterCommit',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates that jobs should be dispatched after all database transactions have committed.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'createPayloadCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'createPayloadCallbacks',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 106,
            'startFilePos' => 1045,
            'endTokenPos' => 107,
            'endFilePos' => 1046,
          ),
        ),
        'docComment' => '/**
 * The create payload callbacks.
 *
 * @var callable[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 50,
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
      'pushOn' => 
      array (
        'name' => 'pushOn',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 128,
                'startFilePos' => 1267,
                'endTokenPos' => 128,
                'endFilePos' => 1268,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 42,
            'endColumn' => 51,
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
 * Push a new job onto the queue.
 *
 * @param  string  $queue
 * @param  string  $job
 * @param  mixed  $data
 * @return mixed
 */',
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'laterOn' => 
      array (
        'name' => 'laterOn',
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
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 45,
            'endColumn' => 48,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 71,
                'endLine' => 71,
                'startTokenPos' => 172,
                'startFilePos' => 1644,
                'endTokenPos' => 172,
                'endFilePos' => 1645,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push a new job onto a specific queue after (n) seconds.
 *
 * @param  string  $queue
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @param  string  $job
 * @param  mixed  $data
 * @return mixed
 */',
        'startLine' => 71,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'bulk' => 
      array (
        'name' => 'bulk',
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 26,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 213,
                'startFilePos' => 1938,
                'endTokenPos' => 213,
                'endFilePos' => 1939,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 220,
                'startFilePos' => 1951,
                'endTokenPos' => 220,
                'endFilePos' => 1954,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 45,
            'endColumn' => 57,
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
 * Push an array of jobs onto the queue.
 *
 * @param  array  $jobs
 * @param  mixed  $data
 * @param  string|null  $queue
 * @return void
 */',
        'startLine' => 84,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createPayload' => 
      array (
        'name' => 'createPayload',
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
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 101,
                'endLine' => 101,
                'startTokenPos' => 275,
                'startFilePos' => 2398,
                'endTokenPos' => 275,
                'endFilePos' => 2399,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 52,
            'endColumn' => 61,
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
 * Create a payload string from the given job and data.
 *
 * @param  \\Closure|string|object  $job
 * @param  string  $queue
 * @param  mixed  $data
 * @return string
 *
 * @throws \\Illuminate\\Queue\\InvalidPayloadException
 */',
        'startLine' => 101,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createPayloadArray' => 
      array (
        'name' => 'createPayloadArray',
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 43,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 126,
                'endLine' => 126,
                'startTokenPos' => 400,
                'startFilePos' => 3154,
                'endTokenPos' => 400,
                'endFilePos' => 3155,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 57,
            'endColumn' => 66,
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
 * Create a payload array from the given job and data.
 *
 * @param  string|object  $job
 * @param  string  $queue
 * @param  mixed  $data
 * @return array
 */',
        'startLine' => 126,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createObjectPayload' => 
      array (
        'name' => 'createObjectPayload',
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 44,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Create a payload for an object-based queue handler.
 *
 * @param  object  $job
 * @param  string  $queue
 * @return array
 */',
        'startLine' => 140,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getDisplayName' => 
      array (
        'name' => 'getDisplayName',
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
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 39,
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
 * Get the display name for the given job.
 *
 * @param  object  $job
 * @return string
 */',
        'startLine' => 176,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getJobTries' => 
      array (
        'name' => 'getJobTries',
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
            'startLine' => 188,
            'endLine' => 188,
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
 * Get the maximum number of attempts for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 188,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getJobBackoff' => 
      array (
        'name' => 'getJobBackoff',
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
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 35,
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
 * Get the backoff for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 207,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getJobExpiration' => 
      array (
        'name' => 'getJobExpiration',
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
            'startLine' => 228,
            'endLine' => 228,
            'startColumn' => 38,
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
 * Get the expiration timestamp for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 228,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'jobShouldBeEncrypted' => 
      array (
        'name' => 'jobShouldBeEncrypted',
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
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 45,
            'endColumn' => 48,
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
 * Determine if the job should be encrypted.
 *
 * @param  object  $job
 * @return bool
 */',
        'startLine' => 246,
        'endLine' => 253,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createStringPayload' => 
      array (
        'name' => 'createStringPayload',
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
            'startLine' => 263,
            'endLine' => 263,
            'startColumn' => 44,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 263,
            'endLine' => 263,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 263,
            'endLine' => 263,
            'startColumn' => 58,
            'endColumn' => 62,
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
 * Create a typical, string based queue payload array.
 *
 * @param  string  $job
 * @param  string  $queue
 * @param  mixed  $data
 * @return array
 */',
        'startLine' => 263,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createPayloadUsing' => 
      array (
        'name' => 'createPayloadUsing',
        'parameters' => 
        array (
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
            'startLine' => 284,
            'endLine' => 284,
            'startColumn' => 47,
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
 * Register a callback to be executed when creating job payloads.
 *
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 284,
        'endLine' => 291,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'withCreatePayloadHooks' => 
      array (
        'name' => 'withCreatePayloadHooks',
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
            'startLine' => 300,
            'endLine' => 300,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
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
            'startLine' => 300,
            'endLine' => 300,
            'startColumn' => 55,
            'endColumn' => 68,
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
 * Create the given payload using any registered payload hooks.
 *
 * @param  string  $queue
 * @param  array  $payload
 * @return array
 */',
        'startLine' => 300,
        'endLine' => 309,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'enqueueUsing' => 
      array (
        'name' => 'enqueueUsing',
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
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 61,
            'endColumn' => 66,
            'parameterIndex' => 3,
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
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 69,
            'endColumn' => 77,
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
 * Enqueue a job using the given callback.
 *
 * @param  \\Closure|string|object  $job
 * @param  string  $payload
 * @param  string|null  $queue
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @param  callable  $callback
 * @return mixed
 */',
        'startLine' => 321,
        'endLine' => 341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'shouldDispatchAfterCommit' => 
      array (
        'name' => 'shouldDispatchAfterCommit',
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
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 50,
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
 * Determine if the job should be dispatched after all database transactions have committed.
 *
 * @param  \\Closure|string|object  $job
 * @return bool
 */',
        'startLine' => 349,
        'endLine' => 360,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'raiseJobQueueingEvent' => 
      array (
        'name' => 'raiseJobQueueingEvent',
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
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 54,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 60,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 70,
            'endColumn' => 75,
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
 * Raise the job queueing event.
 *
 * @param  string  $queue
 * @param  \\Closure|string|object  $job
 * @param  string  $payload
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return void
 */',
        'startLine' => 371,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'raiseJobQueuedEvent' => 
      array (
        'name' => 'raiseJobQueuedEvent',
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
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'jobId' => 
          array (
            'name' => 'jobId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 60,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 66,
            'endColumn' => 73,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 76,
            'endColumn' => 81,
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
 * Raise the job queued event.
 *
 * @param  string|null  $queue
 * @param  string|int|null  $jobId
 * @param  \\Closure|string|object  $job
 * @param  string  $payload
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return void
 */',
        'startLine' => 390,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getConnectionName' => 
      array (
        'name' => 'getConnectionName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the connection name for the queue.
 *
 * @return string
 */',
        'startLine' => 404,
        'endLine' => 407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'setConnectionName' => 
      array (
        'name' => 'setConnectionName',
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
            'startLine' => 415,
            'endLine' => 415,
            'startColumn' => 39,
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
 * Set the connection name for the queue.
 *
 * @param  string  $name
 * @return $this
 */',
        'startLine' => 415,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getContainer' => 
      array (
        'name' => 'getContainer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the container instance being used by the connection.
 *
 * @return \\Illuminate\\Container\\Container
 */',
        'startLine' => 427,
        'endLine' => 430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'setContainer' => 
      array (
        'name' => 'setContainer',
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
                'name' => 'Illuminate\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 438,
            'endLine' => 438,
            'startColumn' => 34,
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
 * Set the IoC container instance.
 *
 * @param  \\Illuminate\\Container\\Container  $container
 * @return void
 */',
        'startLine' => 438,
        'endLine' => 441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
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