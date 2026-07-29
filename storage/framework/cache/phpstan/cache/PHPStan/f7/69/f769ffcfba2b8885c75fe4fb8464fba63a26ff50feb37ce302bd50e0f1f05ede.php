<?php declare(strict_types = 1);

// odsl-C:\Users\idmr_\OneDrive\Escritorio\gestionalo\app\Livewire\Admin\Blog\PostList.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Livewire\Admin\Blog\PostList
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-62e5936c3b2bcbfcba628d7b599538b93d1a7d8e9e4cd16e075c17873773e3b8',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/app/Livewire/Admin/Blog/PostList.php',
      ),
    ),
    'namespace' => 'App\\Livewire\\Admin\\Blog',
    'name' => 'App\\Livewire\\Admin\\Blog\\PostList',
    'shortName' => 'PostList',
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
    'endLine' => 46,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Livewire\\Component',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'App\\Livewire\\Concerns\\HasSortableTable',
      1 => 'Livewire\\WithPagination',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'search' => 
      array (
        'declaringClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'implementingClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'name' => 'search',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 67,
            'startFilePos' => 334,
            'endTokenPos' => 67,
            'endFilePos' => 335,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Livewire\\Attributes\\Url',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'startLine' => 16,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sortField' => 
      array (
        'declaringClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'implementingClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'name' => 'sortField',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'published_at\'',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 19,
            'startTokenPos' => 78,
            'startFilePos' => 370,
            'endTokenPos' => 78,
            'endFilePos' => 383,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sortDirection' => 
      array (
        'declaringClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'implementingClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'name' => 'sortDirection',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'desc\'',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 89,
            'startFilePos' => 422,
            'endTokenPos' => 89,
            'endFilePos' => 427,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 42,
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
      'togglePublished' => 
      array (
        'name' => 'togglePublished',
        'parameters' => 
        array (
          'post' => 
          array (
            'name' => 'post',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\Post',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 37,
            'endColumn' => 46,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 23,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Livewire\\Admin\\Blog',
        'declaringClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'implementingClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'currentClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'post' => 
          array (
            'name' => 'post',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\Post',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 28,
            'endColumn' => 37,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 31,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Livewire\\Admin\\Blog',
        'declaringClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'implementingClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'currentClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\View\\View',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 37,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Livewire\\Admin\\Blog',
        'declaringClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'implementingClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
        'currentClassName' => 'App\\Livewire\\Admin\\Blog\\PostList',
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