<?php

namespace Marcelovani\Behat\Notifier\Email;

/**
 * This class sends notification via email.
 */
class EmailNotifier
{

    /**
     * Stores extension params.
     */
    private $params;

    /**
     * Constructor for Email notifier.
     */
    public function __construct($params)
    {
        $this->params = $params;
    }

    /**
     * @param array $details
     *   The event details.
     */
    public function notify($details)
    {
        // @todo Implement email notification. For inspiration, see https://github.com/marcelovani/behat-teams-notifier/blob/master/src/Marcelovani/Behat/Notifier/Teams/TeamsNotifier.php#L127
    }
}
