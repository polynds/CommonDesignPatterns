<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Observer;

interface Subject
{
    /**
     * 注册观察者.
     */
    public function registerObserver(Observer $observer);

    /**
     * 删除观察者.
     */
    public function removeObserver(Observer $observer);

    /**
     * 通知观察者更新.
     */
    public function notifyObserver();
}
