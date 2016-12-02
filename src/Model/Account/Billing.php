<?php

/*
 * Copyright 2016 SCTR Services
 *
 * Distribution and reproduction are prohibited.
 *
 * @package     itsup-api-client
 * @copyright   SCTR Services LLC 2016
 * @license     No License (Proprietary)
 */

namespace Itsup\Api\Model\Account;

use Itsup\Api\Annotation\Transform;
use Itsup\Api\Model\AbstractModel;

/**
 * @author Cyril LEGRAND <cyril@sctr.net>
 *
 * @method \DateTime getDate()
 * @method int getImpressions()
 * @method int getClicks()
 * @method int getEvents()
 * @method float getPrice()
 */
class Billing extends AbstractModel
{
    /**
     * @var \DateTime
     * @Transform("date")
     */
    public $date;

    /**
     * @var int
     * @Transform("int")
     */
    public $impressions;

    /**
     * @var int
     * @Transform("int")
     */
    public $clicks;

    /**
     * @var int
     * @Transform("int")
     */
    public $events;

    /**
     * @var float
     * @Transform("float")
     */
    public $price;
}