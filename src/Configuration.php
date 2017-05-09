<?php
namespace LarsNieuwenhuizen\Trustpilot;

use LarsNieuwenhuizen\Trustpilot\Exception\TrustPilotException;
use Symfony\Component\Yaml\Yaml;

/**
 * This class manages the base configuration the client needs to communicate with Trustpilot
 *
 * Class Configuration
 */
class Configuration
{

    /**
     * @var string
     */
    protected $baseUrl = 'https://api.trustpilot.com/';

    /**
     * @var string
     */
    protected $basePath = 'v1/';

    /**
     * @var int
     */
    protected $defaultResultsPerPage = 10;

    /**
     * @var string
     */
    protected $defaultOrderBy = 'createdat.desc';

    /**
     * @var string
     */
    protected $businessUnitId;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var bool
     */
    protected $allowRedirects = false;

    /**
     * @param string|null $configurationFile
     */
    public function __construct($configurationFile = null)
    {
        $defaultConfigFile = dirname(dirname(__FILE__)) . '/config.yaml';

        if ($configurationFile === null && file_exists($defaultConfigFile)) {
            $configurationFile = $defaultConfigFile;
        }

        if (is_string($configurationFile)) {
            $this->setConfigurationFromYaml($configurationFile);
        }
    }

    /**
     * @param $file
     */
    protected function setConfigurationFromYaml($file)
    {
        try {
            $configuration = Yaml::parse(file_get_contents($file))['TrustPilot'];

            if (isset($configuration['apiKey'])) {
                $this->setApiKey($configuration['apiKey']);
            }
            if (isset($configuration['resultsPerPage'])) {
                $this->setDefaultResultsPerPage($configuration['resultsPerPage']);
            }
            if (isset($configuration['orderBy'])) {
                $this->setDefaultOrderBy($configuration['orderBy']);
            }
            if (isset($configuration['basePath'])) {
                $this->setBasePath($configuration['basePath']);
            }
            if (isset($configuration['baseUrl'])) {
                $this->setBaseUrl($configuration['baseUrl']);
            }
        } catch (\Exception $exception) {
            error_log($exception->getMessage());
        }
    }

    /**
     * @return string
     */
    public function getBusinessUnitId(): string
    {
        return $this->businessUnitId;
    }

    /**
     * @param string $businessUnitId
     * @return Configuration
     */
    public function setBusinessUnitId(string $businessUnitId): Configuration
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return Configuration
     */
    public function setBaseUrl($baseUrl): Configuration
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     * @return Configuration
     */
    public function setBasePath($basePath): Configuration
    {
        $this->basePath = $basePath;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowRedirects(): bool
    {
        return $this->allowRedirects;
    }

    /**
     * @param bool $allowRedirects
     * @return Configuration
     */
    public function setAllowRedirects(bool $allowRedirects): Configuration
    {
        $this->allowRedirects = $allowRedirects;

        return $this;
    }

    /**
     * @return string
     * @throws TrustPilotException
     */
    public function getApiKey(): string
    {
        if ($this->apiKey) {
            return $this->apiKey;
        }

        throw new TrustPilotException('TrustPilot configuration is missing the api key');
    }

    /**
     * @param string $apiKey
     * @return Configuration
     */
    public function setApiKey(string $apiKey): Configuration
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultResultsPerPage(): int
    {
        return $this->defaultResultsPerPage;
    }

    /**
     * @param int $defaultResultsPerPage
     * @return Configuration
     */
    public function setDefaultResultsPerPage(int $defaultResultsPerPage): Configuration
    {
        $this->defaultResultsPerPage = $defaultResultsPerPage;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultOrderBy(): string
    {
        return $this->defaultOrderBy;
    }

    /**
     * @param string $defaultOrderBy
     * @return Configuration
     */
    public function setDefaultOrderBy(string $defaultOrderBy): Configuration
    {
        $this->defaultOrderBy = $defaultOrderBy;

        return $this;
    }
}
