<?php

namespace Inspheric\Replicant;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inspheric\Replicant\Skeleton\SkeletonClass
 */
class ReplicantFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'replicant';
    }
}
