<?php

namespace ScoreYa\Cinderella\Common\Service;

/**
 * @author Alexander Miehe <thelex@beamscore.com>
 */
interface ApiKeyClientInterface
{
    /**
     * set an api key as request parameter
     *
     * @param string $apiKey
     */
    public function setApiKey($apiKey);
}