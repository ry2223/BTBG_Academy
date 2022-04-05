<?php

/*
 * (c) Robert Jenda
 *
 * Date: 23.12.2021
 * Time: 00:57
 */

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    /** @var string|null */
    private $itemColor;

    public function getItemColor(): ?string
    {
        return $this->itemColor;
    }

    public function setItemColor(?string $itemColor): void
    {
        $this->itemColor = $itemColor;
    }
}
