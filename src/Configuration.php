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
     */
    public function setBusinessUnitId(string $businessUnitId)
    {
        $this->businessUnitId = $businessUnitId;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
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
     */
    public function setAllowRedirects(bool $allowRedirects)
    {
        $this->allowRedirects = $allowRedirects;
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
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
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
     */
    public function setDefaultResultsPerPage(int $defaultResultsPerPage)
    {
        $this->defaultResultsPerPage = $defaultResultsPerPage;
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
     */
    public function setDefaultOrderBy(string $defaultOrderBy)
    {
        $this->defaultOrderBy = $defaultOrderBy;
    }
}
