<?php 

// App/Events.php
namespace App\Events;

/**
 * This class defines the names of all the events dispatched in
 * our project. It's not mandatory to create a
 * class like this, but it's considered a good practice.
 *
 */
final class UserEvent
{
    /**
     * @Event("Symfony\Component\EventDispatcher\GenericEvent")
     *
     * @var string
     */
    const USER_NAME = 'user.cocot';
    const USER_AGE = 'user.23';
}

