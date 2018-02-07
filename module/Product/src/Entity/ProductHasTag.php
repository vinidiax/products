<?php

namespace Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductHasTag
 *
 * @ORM\Table(name="product_has_tag", indexes={@ORM\Index(name="product_has_tag_product_id_idx", columns={"product_id"}), @ORM\Index(name="product_has_tag_tag_id_idx", columns={"tag_id"})})
 * @ORM\Entity
 */
class ProductHasTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="pht_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $phtId;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="product_id")
     * })
     */
    private $product;

    /**
     * @var \Tag
     *
     * @ORM\ManyToOne(targetEntity="Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_id", referencedColumnName="tag_id")
     * })
     */
    private $tag;


}
