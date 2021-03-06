<?php

namespace Ice\Mvc\Route\Dispatcher;


abstract class Regex implements \Ice\Mvc\Route\Dispatcher\DispatcherInterface
{

    protected $staticRouteMap;


    protected $variableRouteData;


    /**
     * @param mixed $staticRouteMap 
     */
    public function setStaticRouteMap($staticRouteMap) {}

    /**
     * @param mixed $variableRouteData 
     */
    public function setVariableRouteData($variableRouteData) {}

    /**
     * @param array $data 
     */
    public function setData(array $data = array()) {}

    /**
     * @param mixed $routeData 
     * @param mixed $uri 
     */
    protected abstract function dispatchVariableRoute($routeData, $uri);

    /**
     * @param mixed $httpMethod 
     * @param mixed $uri 
     */
    public function dispatch($httpMethod, $uri) {}

}
