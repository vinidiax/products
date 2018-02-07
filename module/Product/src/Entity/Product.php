<?php

namespace Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_title", type="string", length=128, nullable=false)
     */
    private $productTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="string", length=400, nullable=false)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="product_image", type="string", length=128, nullable=false)
     */
    private $productImage;

    /**
     * @var int
     *
     * @ORM\Column(name="product_stock", type="integer", nullable=false)
     */
    private $productStock;


}
