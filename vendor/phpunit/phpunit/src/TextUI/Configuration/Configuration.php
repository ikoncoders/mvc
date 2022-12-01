<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Configuration
{
    public const COLOR_NEVER = 'never';

    public const COLOR_AUTO = 'auto';

    public const COLOR_ALWAYS = 'always';

    public const COLOR_DEFAULT = self::COLOR_NEVER;
    private readonly ?string $configurationFile;
    private readonly ?string $bootstrap;
    private readonly bool $cacheResult;
    private readonly ?string $cacheDirectory;
    private readonly ?string $coverageCacheDirectory;
    private readonly bool $pathCoverage;
    private readonly ?string $coverageClover;
    private readonly ?string $coverageCobertura;
    private readonly ?string $coverageCrap4j;
    private readonly int $coverageCrap4jThreshold;
    private readonly ?string $coverageHtml;
    private readonly int $coverageHtmlLowUpperBound;
    private readonly int $coverageHtmlHighLowerBound;
    private readonly string $coverageHtmlColorSuccessLow;
    private readonly string $coverageHtmlColorSuccessMedium;
    private readonly string $coverageHtmlColorSuccessHigh;
    private readonly string $coverageHtmlColorWarning;
    private readonly string $coverageHtmlColorDanger;
    private readonly ?string $coverageHtmlCustomCssFile;
    private readonly ?string $coveragePhp;
    private readonly ?string $coverageText;
    private readonly bool $coverageTextShowUncoveredFiles;
    private readonly bool $coverageTextShowOnlySummary;
    private readonly ?string $coverageXml;
    private readonly string $testResultCacheFile;
    private readonly bool $ignoreDeprecatedCodeUnitsFromCodeCoverage;
    private readonly bool $disableCodeCoverageIgnore;
    private readonly bool $failOnEmptyTestSuite;
    private readonly bool $failOnIncomplete;
    private readonly bool $failOnRisky;
    private readonly bool $failOnSkipped;
    private readonly bool $failOnWarning;
    private readonly bool $outputToStandardErrorStream;
    private readonly int $columns;
    private readonly bool $tooFewColumnsRequested;
    private readonly bool $loadPharExtensions;
    private readonly ?string $pharExtensionDirectory;

    /**
     * @psalm-var list<array{className: class-string, parameters: array<string, string>}>
     */
    private readonly array $extensionBootstrappers;
    private readonly bool $backupGlobals;
    private readonly bool $backupStaticProperties;
    private readonly bool $beStrictAboutChangesToGlobalState;
    private readonly bool $colors;
    private readonly bool $processIsolation;
    private readonly bool $stopOnDefect;
    private readonly bool $stopOnError;
    private readonly bool $stopOnFailure;
    private readonly bool $stopOnWarning;
    private readonly bool $stopOnIncomplete;
    private readonly bool $stopOnRisky;
    private readonly bool $stopOnSkipped;
    private readonly bool $enforceTimeLimit;
    private readonly int $defaultTimeLimit;
    private readonly int $timeoutForSmallTests;
    private readonly int $timeoutForMediumTests;
    private readonly int $timeoutForLargeTests;
    private readonly bool $reportUselessTests;
    private readonly bool $strictCoverage;
    private readonly bool $disallowTestOutput;
    private readonly bool $displayDetailsOnIncompleteTests;
    private readonly bool $displayDetailsOnSkippedTests;
    private readonly bool $displayDetailsOnTestsThatTriggerDeprecations;
    private readonly bool $displayDetailsOnTestsThatTriggerErrors;
    private readonly bool $displayDetailsOnTestsThatTriggerNotices;
    private readonly bool $displayDetailsOnTestsThatTriggerWarnings;
    private readonly bool $reverseDefectList;
    private readonly bool $requireCoverageMetadata;
    private readonly bool $registerMockObjectsFromTestArgumentsRecursively;
    private readonly bool $noProgress;
    private readonly bool $noResults;
    private readonly bool $noOutput;
    private readonly int $executionOrder;
    private readonly int $executionOrderDefects;
    private readonly bool $resolveDependencies;
    private readonly ?string $logfileText;
    private readonly ?string $logfileTeamcity;
    private readonly ?string $logfileJunit;
    private readonly ?string $logfileTestdoxHtml;
    private readonly ?string $logfileTestdoxText;
    private readonly ?string $logfileTestdoxXml;
    private readonly ?string $logEventsText;
    private readonly ?string $logEventsVerboseText;
    private readonly ?array $testsCovering;
    private readonly ?array $testsUsing;
    private readonly bool $teamCityOutput;
    private readonly bool $testDoxOutput;
    private readonly int $repeat;
    private readonly ?string $filter;
    private readonly ?array $groups;
    private readonly ?array $excludeGroups;
    private readonly ?string $includePath;
    private readonly int $randomOrderSeed;
    private readonly ?string $xmlValidationErrors;
    private readonly bool $includeUncoveredFiles;
    private readonly ?string $testSuite;

    /**
     * @psalm-param list<array{className: class-string, parameters: array<string, string>}> $extensionBootstrappers
     */
    public function __construct(?string $configurationFile, ?string $bootstrap, bool $cacheResult, ?string $cacheDirectory, ?string $coverageCacheDirectory, string $testResultCacheFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4j, int $coverageCrap4jThreshold, ?string $coverageHtml, int $coverageHtmlLowUpperBound, int $coverageHtmlHighLowerBound, string $coverageHtmlColorSuccessLow, string $coverageHtmlColorSuccessMedium, string $coverageHtmlColorSuccessHigh, string $coverageHtmlColorWarning, string $coverageHtmlColorDanger, ?string $coverageHtmlCustomCssFile, ?string $coveragePhp, ?string $coverageText, bool $coverageTextShowUncoveredFiles, bool $coverageTextShowOnlySummary, ?string $coverageXml, bool $pathCoverage, bool $ignoreDeprecatedCodeUnitsFromCodeCoverage, bool $disableCodeCoverageIgnore, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $outputToStandardErrorStream, int|string $columns, bool $tooFewColumnsRequested, bool $loadPharExtensions, ?string $pharExtensionDirectory, array $extensionBootstrappers, bool $backupGlobals, bool $backupStaticProperties, bool $beStrictAboutChangesToGlobalState, bool $colors, bool $processIsolation, bool $stopOnDefect, bool $stopOnError, bool $stopOnFailure, bool $stopOnWarning, bool $stopOnIncomplete, bool $stopOnRisky, bool $stopOnSkipped, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, bool $reportUselessTests, bool $strictCoverage, bool $disallowTestOutput, bool $displayDetailsOnIncompleteTests, bool $displayDetailsOnSkippedTests, bool $displayDetailsOnTestsThatTriggerDeprecations, bool $displayDetailsOnTestsThatTriggerErrors, bool $displayDetailsOnTestsThatTriggerNotices, bool $displayDetailsOnTestsThatTriggerWarnings, bool $reverseDefectList, bool $requireCoverageMetadata, bool $registerMockObjectsFromTestArgumentsRecursively, bool $noProgress, bool $noResults, bool $noOutput, int $executionOrder, int $executionOrderDefects, bool $resolveDependencies, ?string $logfileText, ?string $logfileTeamcity, ?string $logfileJunit, ?string $logfileTestdoxHtml, ?string $logfileTestdoxText, ?string $logfileTestdoxXml, ?string $logEventsText, ?string $logEventsVerboseText, bool $teamCityOutput, bool $testDoxOutput, int $repeat, ?array $testsCovering, ?array $testsUsing, ?string $filter, ?array $groups, ?array $excludeGroups, ?string $includePath, int $randomOrderSeed, bool $includeUncoveredFiles, ?string $testSuite, ?string $xmlValidationErrors)
    {
        $this->configurationFile                               = $configurationFile;
        $this->bootstrap                                       = $bootstrap;
        $this->cacheResult                                     = $cacheResult;
        $this->cacheDirectory                                  = $cacheDirectory;
        $this->coverageCacheDirectory                          = $coverageCacheDirectory;
        $this->testResultCacheFile                             = $testResultCacheFile;
        $this->coverageClover                                  = $coverageClover;
        $this->coverageCobertura                               = $coverageCobertura;
        $this->coverageCrap4j                                  = $coverageCrap4j;
        $this->coverageCrap4jThreshold                         = $coverageCrap4jThreshold;
        $this->coverageHtml                                    = $coverageHtml;
        $this->coverageHtmlLowUpperBound                       = $coverageHtmlLowUpperBound;
        $this->coverageHtmlHighLowerBound                      = $coverageHtmlHighLowerBound;
        $this->coverageHtmlColorSuccessLow                     = $coverageHtmlColorSuccessLow;
        $this->coverageHtmlColorSuccessMedium                  = $coverageHtmlColorSuccessMedium;
        $this->coverageHtmlColorSuccessHigh                    = $coverageHtmlColorSuccessHigh;
        $this->coverageHtmlColorWarning                        = $coverageHtmlColorWarning;
        $this->coverageHtmlColorDanger                         = $coverageHtmlColorDanger;
        $this->coverageHtmlCustomCssFile                       = $coverageHtmlCustomCssFile;
        $this->coveragePhp                                     = $coveragePhp;
        $this->coverageText                                    = $coverageText;
        $this->coverageTextShowUncoveredFiles                  = $coverageTextShowUncoveredFiles;
        $this->coverageTextShowOnlySummary                     = $coverageTextShowOnlySummary;
        $this->coverageXml                                     = $coverageXml;
        $this->pathCoverage                                    = $pathCoverage;
        $this->ignoreDeprecatedCodeUnitsFromCodeCoverage       = $ignoreDeprecatedCodeUnitsFromCodeCoverage;
        $this->disableCodeCoverageIgnore                       = $disableCodeCoverageIgnore;
        $this->failOnEmptyTestSuite                            = $failOnEmptyTestSuite;
        $this->failOnIncomplete                                = $failOnIncomplete;
        $this->failOnRisky                                     = $failOnRisky;
        $this->failOnSkipped                                   = $failOnSkipped;
        $this->failOnWarning                                   = $failOnWarning;
        $this->outputToStandardErrorStream                     = $outputToStandardErrorStream;
        $this->columns                                         = $columns;
        $this->tooFewColumnsRequested                          = $tooFewColumnsRequested;
        $this->loadPharExtensions                              = $loadPharExtensions;
        $this->pharExtensionDirectory                          = $pharExtensionDirectory;
        $this->extensionBootstrappers                          = $extensionBootstrappers;
        $this->backupGlobals                                   = $backupGlobals;
        $this->backupStaticProperties                          = $backupStaticProperties;
        $this->beStrictAboutChangesToGlobalState               = $beStrictAboutChangesToGlobalState;
        $this->colors                                          = $colors;
        $this->processIsolation                                = $processIsolation;
        $this->stopOnDefect                                    = $stopOnDefect;
        $this->stopOnError                                     = $stopOnError;
        $this->stopOnFailure                                   = $stopOnFailure;
        $this->stopOnWarning                                   = $stopOnWarning;
        $this->stopOnIncomplete                                = $stopOnIncomplete;
        $this->stopOnRisky                                     = $stopOnRisky;
        $this->stopOnSkipped                                   = $stopOnSkipped;
        $this->enforceTimeLimit                                = $enforceTimeLimit;
        $this->defaultTimeLimit                                = $defaultTimeLimit;
        $this->timeoutForSmallTests                            = $timeoutForSmallTests;
        $this->timeoutForMediumTests                           = $timeoutForMediumTests;
        $this->timeoutForLargeTests                            = $timeoutForLargeTests;
        $this->reportUselessTests                              = $reportUselessTests;
        $this->strictCoverage                                  = $strictCoverage;
        $this->disallowTestOutput                              = $disallowTestOutput;
        $this->displayDetailsOnIncompleteTests                 = $displayDetailsOnIncompleteTests;
        $this->displayDetailsOnSkippedTests                    = $displayDetailsOnSkippedTests;
        $this->displayDetailsOnTestsThatTriggerDeprecations    = $displayDetailsOnTestsThatTriggerDeprecations;
        $this->displayDetailsOnTestsThatTriggerErrors          = $displayDetailsOnTestsThatTriggerErrors;
        $this->displayDetailsOnTestsThatTriggerNotices         = $displayDetailsOnTestsThatTriggerNotices;
        $this->displayDetailsOnTestsThatTriggerWarnings        = $displayDetailsOnTestsThatTriggerWarnings;
        $this->reverseDefectList                               = $reverseDefectList;
        $this->requireCoverageMetadata                         = $requireCoverageMetadata;
        $this->registerMockObjectsFromTestArgumentsRecursively = $registerMockObjectsFromTestArgumentsRecursively;
        $this->noProgress                                      = $noProgress;
        $this->noResults                                       = $noResults;
        $this->noOutput                                        = $noOutput;
        $this->executionOrder                                  = $executionOrder;
        $this->executionOrderDefects                           = $executionOrderDefects;
        $this->resolveDependencies                             = $resolveDependencies;
        $this->logfileText                                     = $logfileText;
        $this->logfileTeamcity                                 = $logfileTeamcity;
        $this->logfileJunit                                    = $logfileJunit;
        $this->logfileTestdoxHtml                              = $logfileTestdoxHtml;
        $this->logfileTestdoxText                              = $logfileTestdoxText;
        $this->logfileTestdoxXml                               = $logfileTestdoxXml;
        $this->logEventsText                                   = $logEventsText;
        $this->logEventsVerboseText                            = $logEventsVerboseText;
        $this->teamCityOutput                                  = $teamCityOutput;
        $this->testDoxOutput                                   = $testDoxOutput;
        $this->repeat                                          = $repeat;
        $this->testsCovering                                   = $testsCovering;
        $this->testsUsing                                      = $testsUsing;
        $this->filter                                          = $filter;
        $this->groups                                          = $groups;
        $this->excludeGroups                                   = $excludeGroups;
        $this->includePath                                     = $includePath;
        $this->randomOrderSeed                                 = $randomOrderSeed;
        $this->includeUncoveredFiles                           = $includeUncoveredFiles;
        $this->testSuite                                       = $testSuite;
        $this->xmlValidationErrors                             = $xmlValidationErrors;
    }

    /**
     * @psalm-assert-if-true !null $this->configurationFile
     */
    public function hasConfigurationFile(): bool
    {
        return $this->configurationFile !== null;
    }

    /**
     * @throws NoConfigurationFileException
     */
    public function configurationFile(): string
    {
        if (!$this->hasConfigurationFile()) {
            throw new NoConfigurationFileException;
        }

        return $this->configurationFile;
    }

    /**
     * @psalm-assert-if-true !null $this->bootstrap
     */
    public function hasBootstrap(): bool
    {
        return $this->bootstrap !== null;
    }

    /**
     * @throws NoBootstrapException
     */
    public function bootstrap(): string
    {
        if (!$this->hasBootstrap()) {
            throw new NoBootstrapException;
        }

        return $this->bootstrap;
    }

    public function cacheResult(): bool
    {
        return $this->cacheResult;
    }

    /**
     * @psalm-assert-if-true !null $this->cacheDirectory
     */
    public function hasCacheDirectory(): bool
    {
        return $this->cacheDirectory !== null;
    }

    /**
     * @throws NoCacheDirectoryException
     */
    public function cacheDirectory(): string
    {
        if (!$this->hasCacheDirectory()) {
            throw new NoCacheDirectoryException;
        }

        return $this->cacheDirectory;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageCacheDirectory
     */
    public function hasCoverageCacheDirectory(): bool
    {
        return $this->coverageCacheDirectory !== null;
    }

    /**
     * @throws NoCoverageCacheDirectoryException
     */
    public function coverageCacheDirectory(): string
    {
        if (!$this->hasCoverageCacheDirectory()) {
            throw new NoCoverageCacheDirectoryException;
        }

        return $this->coverageCacheDirectory;
    }

    public function testResultCacheFile(): string
    {
        return $this->testResultCacheFile;
    }

    public function ignoreDeprecatedCodeUnitsFromCodeCoverage(): bool
    {
        return $this->ignoreDeprecatedCodeUnitsFromCodeCoverage;
    }

    public function disableCodeCoverageIgnore(): bool
    {
        return $this->disableCodeCoverageIgnore;
    }

    public function pathCoverage(): bool
    {
        return $this->pathCoverage;
    }

    public function hasCoverageReport(): bool
    {
        return $this->hasCoverageClover() ||
               $this->hasCoverageCobertura() ||
               $this->hasCoverageCrap4j() ||
               $this->hasCoverageHtml() ||
               $this->hasCoveragePhp() ||
               $this->hasCoverageText() ||
               $this->hasCoverageXml();
    }

    /**
     * @psalm-assert-if-true !null $this->coverageClover
     */
    public function hasCoverageClover(): bool
    {
        return $this->coverageClover !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageClover(): string
    {
        if (!$this->hasCoverageClover()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageClover;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageCobertura
     */
    public function hasCoverageCobertura(): bool
    {
        return $this->coverageCobertura !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageCobertura(): string
    {
        if (!$this->hasCoverageCobertura()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageCobertura;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageCrap4j
     */
    public function hasCoverageCrap4j(): bool
    {
        return $this->coverageCrap4j !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageCrap4j(): string
    {
        if (!$this->hasCoverageCrap4j()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageCrap4j;
    }

    public function coverageCrap4jThreshold(): int
    {
        return $this->coverageCrap4jThreshold;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageHtml
     */
    public function hasCoverageHtml(): bool
    {
        return $this->coverageHtml !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageHtml(): string
    {
        if (!$this->hasCoverageHtml()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageHtml;
    }

    public function coverageHtmlLowUpperBound(): int
    {
        return $this->coverageHtmlLowUpperBound;
    }

    public function coverageHtmlHighLowerBound(): int
    {
        return $this->coverageHtmlHighLowerBound;
    }

    public function coverageHtmlColorSuccessLow(): string
    {
        return $this->coverageHtmlColorSuccessLow;
    }

    public function coverageHtmlColorSuccessMedium(): string
    {
        return $this->coverageHtmlColorSuccessMedium;
    }

    public function coverageHtmlColorSuccessHigh(): string
    {
        return $this->coverageHtmlColorSuccessHigh;
    }

    public function coverageHtmlColorWarning(): string
    {
        return $this->coverageHtmlColorWarning;
    }

    public function coverageHtmlColorDanger(): string
    {
        return $this->coverageHtmlColorDanger;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageHtmlCustomCssFile
     */
    public function hasCoverageHtmlCustomCssFile(): bool
    {
        return $this->coverageHtmlCustomCssFile !== null;
    }

    /**
     * @throws NoCustomCssFileException
     */
    public function coverageHtmlCustomCssFile(): string
    {
        if (!$this->hasCoverageHtmlCustomCssFile()) {
            throw new NoCustomCssFileException;
        }

        return $this->coverageHtmlCustomCssFile;
    }

    /**
     * @psalm-assert-if-true !null $this->coveragePhp
     */
    public function hasCoveragePhp(): bool
    {
        return $this->coveragePhp !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coveragePhp(): string
    {
        if (!$this->hasCoveragePhp()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coveragePhp;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageText
     */
    public function hasCoverageText(): bool
    {
        return $this->coverageText !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageText(): string
    {
        if (!$this->hasCoverageText()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageText;
    }

    public function coverageTextShowUncoveredFiles(): bool
    {
        return $this->coverageTextShowUncoveredFiles;
    }

    public function coverageTextShowOnlySummary(): bool
    {
        return $this->coverageTextShowOnlySummary;
    }

    /**
     * @psalm-assert-if-true !null $this->coverageXml
     */
    public function hasCoverageXml(): bool
    {
        return $this->coverageXml !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageXml(): string
    {
        if (!$this->hasCoverageXml()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageXml;
    }

    public function failOnEmptyTestSuite(): bool
    {
        return $this->failOnEmptyTestSuite;
    }

    public function failOnIncomplete(): bool
    {
        return $this->failOnIncomplete;
    }

    public function failOnRisky(): bool
    {
        return $this->failOnRisky;
    }

    public function failOnSkipped(): bool
    {
        return $this->failOnSkipped;
    }

    public function failOnWarning(): bool
    {
        return $this->failOnWarning;
    }

    public function outputToStandardErrorStream(): bool
    {
        return $this->outputToStandardErrorStream;
    }

    public function columns(): int
    {
        return $this->columns;
    }

    public function tooFewColumnsRequested(): bool
    {
        return $this->tooFewColumnsRequested;
    }

    public function loadPharExtensions(): bool
    {
        return $this->loadPharExtensions;
    }

    /**
     * @psalm-assert-if-true !null $this->pharExtensionDirectory
     */
    public function hasPharExtensionDirectory(): bool
    {
        return $this->pharExtensionDirectory !== null;
    }

    /**
     * @throws NoPharExtensionDirectoryException
     */
    public function pharExtensionDirectory(): string
    {
        if (!$this->hasPharExtensionDirectory()) {
            throw new NoPharExtensionDirectoryException;
        }

        return $this->pharExtensionDirectory;
    }

    /**
     * @psalm-return list<array{className: class-string, parameters: array<string, string>}>
     */
    public function extensionBootstrappers(): array
    {
        return $this->extensionBootstrappers;
    }

    public function backupGlobals(): bool
    {
        return $this->backupGlobals;
    }

    public function backupStaticProperties(): bool
    {
        return $this->backupStaticProperties;
    }

    public function beStrictAboutChangesToGlobalState(): bool
    {
        return $this->beStrictAboutChangesToGlobalState;
    }

    public function colors(): bool
    {
        return $this->colors;
    }

    public function processIsolation(): bool
    {
        return $this->processIsolation;
    }

    public function stopOnDefect(): bool
    {
        return $this->stopOnDefect;
    }

    public function stopOnError(): bool
    {
        return $this->stopOnError;
    }

    public function stopOnFailure(): bool
    {
        return $this->stopOnFailure;
    }

    public function stopOnWarning(): bool
    {
        return $this->stopOnWarning;
    }

    public function stopOnIncomplete(): bool
    {
        return $this->stopOnIncomplete;
    }

    public function stopOnRisky(): bool
    {
        return $this->stopOnRisky;
    }

    public function stopOnSkipped(): bool
    {
        return $this->stopOnSkipped;
    }

    public function enforceTimeLimit(): bool
    {
        return $this->enforceTimeLimit;
    }

    public function defaultTimeLimit(): int
    {
        return $this->defaultTimeLimit;
    }

    public function timeoutForSmallTests(): int
    {
        return $this->timeoutForSmallTests;
    }

    public function timeoutForMediumTests(): int
    {
        return $this->timeoutForMediumTests;
    }

    public function timeoutForLargeTests(): int
    {
        return $this->timeoutForLargeTests;
    }

    public function reportUselessTests(): bool
    {
        return $this->reportUselessTests;
    }

    public function strictCoverage(): bool
    {
        return $this->strictCoverage;
    }

    public function disallowTestOutput(): bool
    {
        return $this->disallowTestOutput;
    }

    public function displayDetailsOnIncompleteTests(): bool
    {
        return $this->displayDetailsOnIncompleteTests;
    }

    public function displayDetailsOnSkippedTests(): bool
    {
        return $this->displayDetailsOnSkippedTests;
    }

    public function displayDetailsOnTestsThatTriggerDeprecations(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerDeprecations;
    }

    public function displayDetailsOnTestsThatTriggerErrors(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerErrors;
    }

    public function displayDetailsOnTestsThatTriggerNotices(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerNotices;
    }

    public function displayDetailsOnTestsThatTriggerWarnings(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerWarnings;
    }

    public function reverseDefectList(): bool
    {
        return $this->reverseDefectList;
    }

    public function requireCoverageMetadata(): bool
    {
        return $this->requireCoverageMetadata;
    }

    public function registerMockObjectsFromTestArgumentsRecursively(): bool
    {
        return $this->registerMockObjectsFromTestArgumentsRecursively;
    }

    public function noProgress(): bool
    {
        return $this->noProgress;
    }

    public function noResults(): bool
    {
        return $this->noResults;
    }

    public function noOutput(): bool
    {
        return $this->noOutput;
    }

    public function executionOrder(): int
    {
        return $this->executionOrder;
    }

    public function executionOrderDefects(): int
    {
        return $this->executionOrderDefects;
    }

    public function resolveDependencies(): bool
    {
        return $this->resolveDependencies;
    }

    /**
     * @psalm-assert-if-true !null $this->logfileText
     */
    public function hasLogfileText(): bool
    {
        return $this->logfileText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileText(): string
    {
        if (!$this->hasLogfileText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileText;
    }

    /**
     * @psalm-assert-if-true !null $this->logfileTeamcity
     */
    public function hasLogfileTeamcity(): bool
    {
        return $this->logfileTeamcity !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTeamcity(): string
    {
        if (!$this->hasLogfileTeamcity()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTeamcity;
    }

    /**
     * @psalm-assert-if-true !null $this->logfileJunit
     */
    public function hasLogfileJunit(): bool
    {
        return $this->logfileJunit !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileJunit(): string
    {
        if (!$this->hasLogfileJunit()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileJunit;
    }

    /**
     * @psalm-assert-if-true !null $this->logfileTestdoxHtml
     */
    public function hasLogfileTestdoxHtml(): bool
    {
        return $this->logfileTestdoxHtml !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxHtml(): string
    {
        if (!$this->hasLogfileTestdoxHtml()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTestdoxHtml;
    }

    /**
     * @psalm-assert-if-true !null $this->logfileTestdoxText
     */
    public function hasLogfileTestdoxText(): bool
    {
        return $this->logfileTestdoxText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxText(): string
    {
        if (!$this->hasLogfileTestdoxText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTestdoxText;
    }

    /**
     * @psalm-assert-if-true !null $this->logfileTestdoxXml
     */
    public function hasLogfileTestdoxXml(): bool
    {
        return $this->logfileTestdoxXml !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxXml(): string
    {
        if (!$this->hasLogfileTestdoxXml()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTestdoxXml;
    }

    /**
     * @psalm-assert-if-true !null $this->logEventsText
     */
    public function hasLogEventsText(): bool
    {
        return $this->logEventsText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logEventsText(): string
    {
        if (!$this->hasLogEventsText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logEventsText;
    }

    /**
     * @psalm-assert-if-true !null $this->logEventsVerboseText
     */
    public function hasLogEventsVerboseText(): bool
    {
        return $this->logEventsVerboseText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logEventsVerboseText(): string
    {
        if (!$this->hasLogEventsVerboseText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logEventsVerboseText;
    }

    public function outputIsTeamCity(): bool
    {
        return $this->teamCityOutput;
    }

    public function outputIsTestDox(): bool
    {
        return $this->testDoxOutput;
    }

    public function hasRepeat(): bool
    {
        return $this->repeat > 0;
    }

    public function repeat(): int
    {
        return $this->repeat;
    }

    /**
     * @psalm-assert-if-true !null $this->testsCovering
     */
    public function hasTestsCovering(): bool
    {
        return $this->testsCovering !== null && !empty($this->testsCovering);
    }

    /**
     * @psalm-return list<string>
     *
     * @throws FilterNotConfiguredException
     */
    public function testsCovering(): array
    {
        if (!$this->hasTestsCovering()) {
            throw new FilterNotConfiguredException;
        }

        return $this->testsCovering;
    }

    /**
     * @psalm-assert-if-true !null $this->testsUsing
     */
    public function hasTestsUsing(): bool
    {
        return $this->testsUsing !== null && !empty($this->testsUsing);
    }

    /**
     * @psalm-return list<string>
     *
     * @throws FilterNotConfiguredException
     */
    public function testsUsing(): array
    {
        if (!$this->hasTestsUsing()) {
            throw new FilterNotConfiguredException;
        }

        return $this->testsUsing;
    }

    /**
     * @psalm-assert-if-true !null $this->filter
     */
    public function hasFilter(): bool
    {
        return $this->filter !== null;
    }

    /**
     * @throws FilterNotConfiguredException
     */
    public function filter(): string
    {
        if (!$this->hasFilter()) {
            throw new FilterNotConfiguredException;
        }

        return $this->filter;
    }

    /**
     * @psalm-assert-if-true !null $this->groups
     */
    public function hasGroups(): bool
    {
        return $this->groups !== null && !empty($this->groups);
    }

    /**
     * @throws FilterNotConfiguredException
     */
    public function groups(): array
    {
        if (!$this->hasGroups()) {
            throw new FilterNotConfiguredException;
        }

        return $this->groups;
    }

    /**
     * @psalm-assert-if-true !null $this->excludeGroups
     */
    public function hasExcludeGroups(): bool
    {
        return $this->excludeGroups !== null && !empty($this->excludeGroups);
    }

    /**
     * @throws FilterNotConfiguredException
     */
    public function excludeGroups(): array
    {
        if (!$this->hasExcludeGroups()) {
            throw new FilterNotConfiguredException;
        }

        return $this->excludeGroups;
    }

    /**
     * @psalm-assert-if-true !null $this->includePath
     */
    public function hasIncludePath(): bool
    {
        return $this->includePath !== null;
    }

    /**
     * @throws IncludePathNotConfiguredException
     */
    public function includePath(): string
    {
        if (!$this->hasIncludePath()) {
            throw new IncludePathNotConfiguredException;
        }

        return $this->includePath;
    }

    public function randomOrderSeed(): int
    {
        return $this->randomOrderSeed;
    }

    public function includeUncoveredFiles(): bool
    {
        return $this->includeUncoveredFiles;
    }

    /**
     * @psalm-assert-if-true !null $this->testSuite
     */
    public function hasTestSuite(): bool
    {
        return $this->testSuite !== null;
    }

    /**
     * @throws TestSuiteNotSelectedException
     */
    public function testSuite(): string
    {
        if (!$this->hasTestSuite()) {
            throw new TestSuiteNotSelectedException;
        }

        return $this->testSuite;
    }

    /**
     * @psalm-assert-if-true !null $this->xmlValidationErrors
     */
    public function hasXmlValidationErrors(): bool
    {
        return $this->xmlValidationErrors !== null;
    }

    /**
     * @throws NoValidationErrorsException
     */
    public function xmlValidationErrors(): string
    {
        if (!$this->hasXmlValidationErrors()) {
            throw new NoValidationErrorsException;
        }

        return $this->xmlValidationErrors;
    }
}
