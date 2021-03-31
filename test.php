<?php

use Doctrine\ORM\Mapping as ORM;

trait Sortable
{
    /**
     * @ORM\Column(type="integer")
     */
    private $sort = 0;
}
