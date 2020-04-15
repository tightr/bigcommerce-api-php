<?php

namespace Bigcommerce\Api\Resources;

use Bigcommerce\Api\Resource;

class CustomerGroup extends Resource
{
    protected $ignoreOnCreate = array(
        'id',
    );

    protected $ignoreOnUpdate = array(
        'id',
    );
}