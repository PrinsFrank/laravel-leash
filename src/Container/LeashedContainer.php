<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash\Container;

use Closure;
use Illuminate\Container\Container;
use PrinsFrank\LaravelLeash\LaravelLeash;

class LeashedContainer extends Container
{
    protected static ?LeashedContainer $leashedInstance = null;

    public static function getLeashedInstance(): LeashedContainer
    {
        if (is_null(static::$leashedInstance)) {
            static::$leashedInstance = new static;
        }

        return static::$leashedInstance;
    }

    public static function getInstance(): Container
    {
        if (LaravelLeash::isLeashed()) {
            static::getLeashedInstance();
        }

        return parent::getInstance();
    }

    public function when($concrete)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::when($concrete);
    }

    public function bound($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::bound($abstract);
    }

    public function has($id)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::has($id);
    }

    public function resolved($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::resolved($abstract);
    }
    
    public function isShared($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::isShared($abstract);
    }
    
    public function isAlias($name)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::isAlias($name);
    }
    
    public function bind($abstract, $concrete = null, $shared = false)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::bind($abstract, $concrete, $shared);
    }
    
    public function hasMethodBinding($method)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::hasMethodBinding($method);
    }
    
    public function bindMethod($method, $callback)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::bindMethod($method, $callback);
    }
    
    public function callMethodBinding($method, $instance)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::callMethodBinding($method, $instance);
    }
    
    public function addContextualBinding($concrete, $abstract, $implementation)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::addContextualBinding($concrete, $abstract, $implementation);
    }
    
    public function bindIf($abstract, $concrete = null, $shared = false)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::bindIf($abstract, $concrete, $shared);
    }
    
    public function singleton($abstract, $concrete = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::singleton($abstract, $concrete);
    }
    
    public function singletonIf($abstract, $concrete = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::singletonIf($abstract, $concrete);
    }
    
    public function scoped($abstract, $concrete = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::scoped($abstract, $concrete);
    }
    
    public function scopedIf($abstract, $concrete = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::scopedIf($abstract, $concrete);
    }
    
    public function extend($abstract, Closure $closure)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::extend($abstract, $closure);
    }
    
    public function instance($abstract, $instance)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::instance($abstract, $instance);
    }
    
    public function tag($abstracts, $tags)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::tag($abstracts, $tags);
    }
    
    public function tagged($tag)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::tagged($tag);
    }
    
    public function alias($abstract, $alias)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::alias($abstract, $alias);
    }
    
    public function rebinding($abstract, Closure $callback)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::rebinding($abstract, $callback);
    }
    
    public function refresh($abstract, $target, $method)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::refresh($abstract, $target, $method);
    }
    
    public function wrap(Closure $callback, array $parameters = [])
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::wrap($callback, $parameters);
    }
    
    public function call($callback, array $parameters = [], $defaultMethod = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::call($callback, $parameters, $defaultMethod);
    }
    
    public function factory($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::factory($abstract);
    }
    
    public function makeWith($abstract, array $parameters = [])
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::makeWith($abstract, $parameters);
    }
    
    public function make($abstract, array $parameters = [])
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::make($abstract, $parameters);
    }
    
    public function get($id)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::get($id);
    }
    
    public function build($concrete)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::build($concrete);
    }
    
    public function beforeResolving($abstract, Closure $callback = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::beforeResolving($abstract, $callback);
    }
    
    public function resolving($abstract, Closure $callback = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::resolving($abstract, $callback);
    }
    
    public function afterResolving($abstract, Closure $callback = null)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::afterResolving($abstract, $callback);
    }
    
    public function getBindings()
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::getBindings();
    }
    
    public function getAlias($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::getAlias($abstract);
    }
    
    public function forgetExtenders($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::forgetExtenders($abstract);
    }
    
    public function forgetInstance($abstract)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::forgetInstance($abstract);
    }
    
    public function forgetInstances()
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::forgetInstances();
    }
    
    public function forgetScopedInstances()
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::forgetScopedInstances();
    }
    
    public function flush()
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::flush();
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($key)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::offsetExists($key);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($key)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::offsetGet($key);
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($key, $value)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::offsetSet($key, $value);
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($key)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::offsetUnset($key);
    }
    
    public function __get($key)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        return parent::__get($key);
    }
    
    public function __set($key, $value)
    {
        LaravelLeash::onContainerCall(__FUNCTION__, func_get_args());

        parent::__set($key, $value);
    }
}
