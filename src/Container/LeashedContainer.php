<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash\Container;

use Closure;
use Illuminate\Container\Container;
use PrinsFrank\LaravelLeash\Exception\OperationNotAllowedInLeashedModeException;
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
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }
        
        return parent::when($concrete);
    }

    public function bound($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::bound($abstract);
    }

    public function has($id)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::has($id);
    }

    public function resolved($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::resolved($abstract);
    }
    
    public function isShared($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::isShared($abstract);
    }
    
    public function isAlias($name)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::isAlias($name);
    }
    
    public function bind($abstract, $concrete = null, $shared = false)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::bind($abstract, $concrete, $shared);
    }
    
    public function hasMethodBinding($method)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::hasMethodBinding($method);
    }
    
    public function bindMethod($method, $callback)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::bindMethod($method, $callback);
    }
    
    public function callMethodBinding($method, $instance)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::callMethodBinding($method, $instance);
    }
    
    public function addContextualBinding($concrete, $abstract, $implementation)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::addContextualBinding($concrete, $abstract, $implementation);
    }
    
    public function bindIf($abstract, $concrete = null, $shared = false)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::bindIf($abstract, $concrete, $shared);
    }
    
    public function singleton($abstract, $concrete = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::singleton($abstract, $concrete);
    }
    
    public function singletonIf($abstract, $concrete = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::singletonIf($abstract, $concrete);
    }
    
    public function scoped($abstract, $concrete = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::scoped($abstract, $concrete);
    }
    
    public function scopedIf($abstract, $concrete = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::scopedIf($abstract, $concrete);
    }
    
    public function extend($abstract, Closure $closure)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::extend($abstract, $closure);
    }
    
    public function instance($abstract, $instance)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::instance($abstract, $instance);
    }
    
    public function tag($abstracts, $tags)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::tag($abstracts, $tags);
    }
    
    public function tagged($tag)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::tagged($tag);
    }
    
    public function alias($abstract, $alias)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::alias($abstract, $alias);
    }
    
    public function rebinding($abstract, Closure $callback)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::rebinding($abstract, $callback);
    }
    
    public function refresh($abstract, $target, $method)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::refresh($abstract, $target, $method);
    }
    
    public function wrap(Closure $callback, array $parameters = [])
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::wrap($callback, $parameters);
    }
    
    public function call($callback, array $parameters = [], $defaultMethod = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::call($callback, $parameters, $defaultMethod);
    }
    
    public function factory($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::factory($abstract);
    }
    
    public function makeWith($abstract, array $parameters = [])
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::makeWith($abstract, $parameters);
    }
    
    public function make($abstract, array $parameters = [])
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::make($abstract, $parameters);
    }
    
    public function get($id)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::get($id);
    }
    
    public function build($concrete)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::build($concrete);
    }
    
    public function beforeResolving($abstract, Closure $callback = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::beforeResolving($abstract, $callback);
    }
    
    public function resolving($abstract, Closure $callback = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::resolving($abstract, $callback);
    }
    
    public function afterResolving($abstract, Closure $callback = null)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::afterResolving($abstract, $callback);
    }
    
    public function getBindings()
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::getBindings();
    }
    
    public function getAlias($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::getAlias($abstract);
    }
    
    public function forgetExtenders($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::forgetExtenders($abstract);
    }
    
    public function forgetInstance($abstract)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::forgetInstance($abstract);
    }
    
    public function forgetInstances()
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::forgetInstances();
    }
    
    public function forgetScopedInstances()
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::forgetScopedInstances();
    }
    
    public function flush()
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::flush();
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($key)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::offsetExists($key);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($key)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::offsetGet($key);
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($key, $value)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::offsetSet($key, $value);
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($key)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::offsetUnset($key);
    }
    
    public function __get($key)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        return parent::__get($key);
    }
    
    public function __set($key, $value)
    {
        if (LaravelLeash::isLeashed()) {
            throw new OperationNotAllowedInLeashedModeException();
        }

        parent::__set($key, $value);
    }
}
