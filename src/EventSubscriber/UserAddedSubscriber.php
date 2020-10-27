<?php
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use App\Entity\Product;
use App\Entity\Customer;
use App\Events\UserEvent;
use App\Events;
use Symfony\Component\HttpKernel\KernelEvents;


class UserAddedSubscriber implements EventSubscriberInterface
{
    private $name;
    private $age;

    public function __construct(String $name, Int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public static function getSubscribedEvents()
    {
        // Liste des évènements, méthodes et priorités
        return [
           UserEvent::USER_NAME => 'getName',
           UserEvent::USER_AGE => 'getAge'
        ];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}