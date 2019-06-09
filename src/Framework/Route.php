<?php
namespace Framework;

class Route {

    /**
     * @var string
     */
    private $path;
    /**
     * @var string
     */
    private $module;
    /**
     * @var string
     */
    private $callable;
    /**
     * @var string|null
     */
    private $paramsKey;
    /**
     * @var array
     */
    private $params = [];

    public function __construct(string $path, string $module, string $callable, ?string $paramsKey = null)
    {
        $this->path = $path;
        $this->module = $module;
        $this->callable = $callable;
        $this->paramsKey = $paramsKey;
    }

    public function match($url)
    {
        $path = preg_replace('#:([\w]+)#', '([0-9]+)', $this->path);

        $regex = "#^$path$#";
        if (!preg_match($regex, $url, $matches)) {
            return false;
        }
        return $matches;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getModule(): string
    {
        return $this->module;
    }

    /**
     * @return string
     */
    public function getCallable(): string
    {
        return $this->callable;
    }

    public function hasParamsKey()
    {
        return !empty($this->paramsKey);
    }

    /**
     * @return string|null
     */
    public function getParamsKey(): ?string
    {
        return $this->paramsKey;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }
}
