<?php
namespace LarsNieuwenhuizen\Trustpilot;

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
    protected $baseUrl;

    /**
     * @var string
     */
    protected $basePath;

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
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
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
