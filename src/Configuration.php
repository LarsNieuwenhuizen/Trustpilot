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
    protected $businessUserOauthToken;

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
     * @return int
     */
    public function getBusinessUserOauthToken()
    {
        return $this->businessUserOauthToken;
    }

    /**
     * @param int $businessUserOauthToken
     */
    public function setBusinessUserOauthToken($businessUserOauthToken)
    {
        $this->businessUserOauthToken = $businessUserOauthToken;
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
}
