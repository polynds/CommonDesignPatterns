<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Proxy\DynamicProxy;

class Proxy
{
    /**
     * @var array[string]
     */
    protected array $target;

    public function __construct(string $targetClass)
    {
        $this->target[] = new $targetClass();
    }

    /**
     * @param mixed $name
     * @param mixed $arguments
     * @throws \ReflectionException
     */
    public function __call($name, $arguments)
    {
        foreach ($this->target as $class) {
            $ref = new \ReflectionClass($class);
            if ($method = $ref->getMethod($name)) {
                if ($method->isPublic() && ! $method->isAbstract()) {
                    var_dump('开始处理');
                    $method->invoke($class, $arguments);
                    var_dump('处理完成后');
                }
            }
        }
    }
}
