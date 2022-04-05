<?php

/*
 * (c) Robert Jenda
 *
 * Date: 23.12.2021
 * Time: 23:33
 */

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType as BaseProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;

final class ProductTypeExtension extends AbstractTypeExtension implements FormTypeInterface
{
    public const COLOR_RED = 'red';

    public const COLOR_GREEN = 'green';

    public const COLOR_BLUE = 'blue';

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('itemColor', ChoiceType::class, [
                'choices' => [
                    'Red' => self::COLOR_RED,
                    'Green' => self::COLOR_GREEN,
                    'Blue' => self::COLOR_BLUE,
                ],
                'required' => false,
                'label' => 'sylius.form.product.item_color',
                'placeholder' => 'Choose item color',
            ])
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [BaseProductType::class];
    }

    public function getBlockPrefix(): ?string
    {
        return 'item_color';
    }

    public function getParent(): ?string
    {
        return BaseProductType::class;
    }
}
