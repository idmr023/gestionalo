<?php declare(strict_types = 1);

// osfsl-C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Support/Facades/Date.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Facades\Date
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f4ac439d16814f4bb512cf6688fa23784dfc11b4e4bfac95e161b1f12790287c-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Facades\\Date',
        'filename' => 'C:/Users/idmr_/OneDrive/Escritorio/gestionalo/vendor/composer/../laravel/framework/src/Illuminate/Support/Facades/Date.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support\\Facades',
    'name' => 'Illuminate\\Support\\Facades\\Date',
    'shortName' => 'Date',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @see https://carbon.nesbot.com/docs/
 * @see https://github.com/briannesbitt/Carbon/blob/master/src/Carbon/Factory.php
 *
 * @method static mixed use(mixed $handler)
 * @method static void useDefault()
 * @method static void useCallable(callable $callable)
 * @method static void useClass(string $dateClass)
 * @method static void useFactory(object $factory)
 * @method static \\Illuminate\\Support\\Carbon create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon createFromDate($year = null, $month = null, $day = null, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon|false createFromFormat($format, $time, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon createFromTimeString($time, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon createFromTimestamp($timestamp, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon createFromTimestampMs($timestamp, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon createFromTimestampUTC($timestamp)
 * @method static \\Illuminate\\Support\\Carbon createMidnightDate($year = null, $month = null, $day = null, $tz = null)
 * @method static \\Illuminate\\Support\\Carbon|false createSafe($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null)
 * @method static void disableHumanDiffOption($humanDiffOption)
 * @method static void enableHumanDiffOption($humanDiffOption)
 * @method static mixed executeWithLocale($locale, $func)
 * @method static \\Illuminate\\Support\\Carbon fromSerialized($value)
 * @method static array getAvailableLocales()
 * @method static array getDays()
 * @method static int getHumanDiffOptions()
 * @method static array getIsoUnits()
 * @method static array getLastErrors()
 * @method static string getLocale()
 * @method static int getMidDayAt()
 * @method static \\Illuminate\\Support\\Carbon|null getTestNow()
 * @method static \\Symfony\\Component\\Translation\\TranslatorInterface getTranslator()
 * @method static int getWeekEndsAt()
 * @method static int getWeekStartsAt()
 * @method static array getWeekendDays()
 * @method static bool hasFormat($date, $format)
 * @method static bool hasMacro($name)
 * @method static bool hasRelativeKeywords($time)
 * @method static bool hasTestNow()
 * @method static \\Illuminate\\Support\\Carbon instance($date)
 * @method static bool isImmutable()
 * @method static bool isModifiableUnit($unit)
 * @method static bool isMutable()
 * @method static bool isStrictModeEnabled()
 * @method static bool localeHasDiffOneDayWords($locale)
 * @method static bool localeHasDiffSyntax($locale)
 * @method static bool localeHasDiffTwoDayWords($locale)
 * @method static bool localeHasPeriodSyntax($locale)
 * @method static bool localeHasShortUnits($locale)
 * @method static void macro($name, $macro)
 * @method static \\Illuminate\\Support\\Carbon|null make($var)
 * @method static \\Illuminate\\Support\\Carbon maxValue()
 * @method static \\Illuminate\\Support\\Carbon minValue()
 * @method static void mixin($mixin)
 * @method static \\Illuminate\\Support\\Carbon now($tz = null)
 * @method static \\Illuminate\\Support\\Carbon parse($time = null, $tz = null)
 * @method static string pluralUnit(string $unit)
 * @method static void resetMonthsOverflow()
 * @method static void resetToStringFormat()
 * @method static void resetYearsOverflow()
 * @method static void serializeUsing($callback)
 * @method static void setHumanDiffOptions($humanDiffOptions)
 * @method static bool setLocale($locale)
 * @method static void setMidDayAt($hour)
 * @method static void setTestNow($testNow = null)
 * @method static void setToStringFormat($format)
 * @method static void setTranslator(\\Symfony\\Component\\Translation\\TranslatorInterface $translator)
 * @method static void setUtf8($utf8)
 * @method static void setWeekEndsAt($day)
 * @method static void setWeekStartsAt($day)
 * @method static void setWeekendDays($days)
 * @method static bool shouldOverflowMonths()
 * @method static bool shouldOverflowYears()
 * @method static string singularUnit(string $unit)
 * @method static \\Illuminate\\Support\\Carbon today($tz = null)
 * @method static \\Illuminate\\Support\\Carbon tomorrow($tz = null)
 * @method static void useMonthsOverflow($monthsOverflow = true)
 * @method static void useStrictMode($strictModeEnabled = true)
 * @method static void useYearsOverflow($yearsOverflow = true)
 * @method static \\Illuminate\\Support\\Carbon yesterday($tz = null)
 *
 * @see \\Illuminate\\Support\\DateFactory
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 90,
    'endLine' => 122,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Facades\\Facade',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'DEFAULT_FACADE' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Date',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Date',
        'name' => 'DEFAULT_FACADE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Illuminate\\Support\\DateFactory::class',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 30,
            'startFilePos' => 4770,
            'endTokenPos' => 32,
            'endFilePos' => 4787,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 46,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getFacadeAccessor' => 
      array (
        'name' => 'getFacadeAccessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the registered name of the component.
 *
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 101,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Support\\Facades',
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Date',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Date',
        'currentClassName' => 'Illuminate\\Support\\Facades\\Date',
        'aliasName' => NULL,
      ),
      'resolveFacadeInstance' => 
      array (
        'name' => 'resolveFacadeInstance',
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
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 53,
            'endColumn' => 57,
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
 * Resolve the facade root instance from the container.
 *
 * @param  string  $name
 * @return mixed
 */',
        'startLine' => 112,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Support\\Facades',
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Date',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Date',
        'currentClassName' => 'Illuminate\\Support\\Facades\\Date',
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