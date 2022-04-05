<?php

/*
 * (c) Robert Jenda
 *
 * Date: 03.01.2022
 * Time: 12:58
 */

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\ProductInterface as BaseInterface;

interface ProductInterface extends BaseInterface
{
    public function getItemColor(): ?string;

    public function setItemColor(?string $itemColor): void;
}
