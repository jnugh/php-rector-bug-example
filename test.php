<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait Sortable
{
    /**
     * @ORM\Column(type="integer")
     */
    private $sort = 0;

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }
}
