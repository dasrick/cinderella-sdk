<?php

namespace ScoreYa\Cinderella\Common\Service\Builder;

use Guzzle\Service\Builder\ServiceBuilderLoader as BaseServiceBuilderLoader;

/**
 * @author Alexander Miehe <thelex@beamscore.com>
 *
 * @codeCoverageIgnore Test is not need because it is only a php notice fix.
 */
class ServiceBuilderLoader extends BaseServiceBuilderLoader
{
    /**
     * fix a php notice for mission services in $b
     *
     * @param array $a
     * @param array $b
     *
     * @return array
     */
    protected function mergeData(array $a, array $b)
    {
        if (!isset($b['services'])) {
            return $b + $a;
        }

        return parent::mergeData($a, $b);
    }
}
