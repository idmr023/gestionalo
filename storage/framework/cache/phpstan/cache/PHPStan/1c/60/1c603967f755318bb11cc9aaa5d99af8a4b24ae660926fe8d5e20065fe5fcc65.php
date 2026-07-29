<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Support/Js.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Js
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d106a8a62d9dac17625b8d64716c4a8a1d99116f21485bb721125f9d7ee97bb8-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Js',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Support/Js.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support',
    'name' => 'Illuminate\\Support\\Js',
    'shortName' => 'Js',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 151,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Support\\Htmlable',
      1 => 'Stringable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'REQUIRED_FLAGS' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'name' => 'REQUIRED_FLAGS',
        'modifiers' => 2,
        'type' => NULL,
        'value' => 
        array (
          'code' => 'JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT | JSON_THROW_ON_ERROR',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 67,
            'startFilePos' => 488,
            'endTokenPos' => 83,
            'endFilePos' => 568,
          ),
        ),
        'docComment' => '/**
 * Flags that should be used when encoding to JSON.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 119,
      ),
    ),
    'immediateProperties' => 
    array (
      'js' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'name' => 'js',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The JavaScript string.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 18,
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 101,
                'startFilePos' => 823,
                'endTokenPos' => 101,
                'endFilePos' => 823,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 40,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => '512',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 108,
                'startFilePos' => 835,
                'endTokenPos' => 108,
                'endFilePos' => 837,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 52,
            'endColumn' => 63,
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
 * Create a new class instance.
 *
 * @param  mixed  $data
 * @param  int|null  $flags
 * @param  int  $depth
 * @return void
 *
 * @throws \\JsonException
 */',
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
        'parameters' => 
        array (
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 53,
                'endLine' => 53,
                'startTokenPos' => 152,
                'startFilePos' => 1209,
                'endTokenPos' => 152,
                'endFilePos' => 1209,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 40,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => '512',
              'attributes' => 
              array (
                'startLine' => 53,
                'endLine' => 53,
                'startTokenPos' => 159,
                'startFilePos' => 1221,
                'endTokenPos' => 159,
                'endFilePos' => 1223,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 52,
            'endColumn' => 63,
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
 * Create a new JavaScript string from the given data.
 *
 * @param  mixed  $data
 * @param  int  $flags
 * @param  int  $depth
 * @return static
 *
 * @throws \\JsonException
 */',
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
        'aliasName' => NULL,
      ),
      'convertDataToJavaScriptExpression' => 
      array (
        'name' => 'convertDataToJavaScriptExpression',
        'parameters' => 
        array (
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
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 58,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 68,
                'endLine' => 68,
                'startTokenPos' => 197,
                'startFilePos' => 1584,
                'endTokenPos' => 197,
                'endFilePos' => 1584,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 65,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => '512',
              'attributes' => 
              array (
                'startLine' => 68,
                'endLine' => 68,
                'startTokenPos' => 204,
                'startFilePos' => 1596,
                'endTokenPos' => 204,
                'endFilePos' => 1598,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 77,
            'endColumn' => 88,
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
 * Convert the given data to a JavaScript expression.
 *
 * @param  mixed  $data
 * @param  int  $flags
 * @param  int  $depth
 * @return string
 *
 * @throws \\JsonException
 */',
        'startLine' => 68,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
        'aliasName' => NULL,
      ),
      'encode' => 
      array (
        'name' => 'encode',
        'parameters' => 
        array (
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 35,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 338,
                'startFilePos' => 2261,
                'endTokenPos' => 338,
                'endFilePos' => 2261,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => '512',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 345,
                'startFilePos' => 2273,
                'endTokenPos' => 345,
                'endFilePos' => 2275,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 54,
            'endColumn' => 65,
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
 * Encode the given data as JSON.
 *
 * @param  mixed  $data
 * @param  int  $flags
 * @param  int  $depth
 * @return string
 *
 * @throws \\JsonException
 */',
        'startLine' => 97,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
        'aliasName' => NULL,
      ),
      'convertJsonToJavaScriptExpression' => 
      array (
        'name' => 'convertJsonToJavaScriptExpression',
        'parameters' => 
        array (
          'json' => 
          array (
            'name' => 'json',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 58,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 119,
                'endLine' => 119,
                'startTokenPos' => 454,
                'startFilePos' => 2887,
                'endTokenPos' => 454,
                'endFilePos' => 2887,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 65,
            'endColumn' => 74,
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
 * Convert the given JSON to a JavaScript expression.
 *
 * @param  string  $json
 * @param  int  $flags
 * @return string
 *
 * @throws \\JsonException
 */',
        'startLine' => 119,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
        'aliasName' => NULL,
      ),
      'toHtml' => 
      array (
        'name' => 'toHtml',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the string representation of the data for use in HTML.
 *
 * @return string
 */',
        'startLine' => 137,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the string representation of the data for use in HTML.
 *
 * @return string
 */',
        'startLine' => 147,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Js',
        'implementingClassName' => 'Illuminate\\Support\\Js',
        'currentClassName' => 'Illuminate\\Support\\Js',
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