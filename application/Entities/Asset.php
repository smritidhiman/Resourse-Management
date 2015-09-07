<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asset
 *
 * @Table(name="asset")
 * @Entity
 */
class Asset
{
    /**
     * @var integer $assetId
     *
     * @Column(name="asset_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $assetId;

    /**
     * @var text $assetName
     *
     * @Column(name="asset_name", type="text", nullable=true)
     */
    private $assetName;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var date $dateCreated
     *
     * @Column(name="date_created", type="date", nullable=true)
     */
    private $dateCreated;

    /**
     * @var date $dateUpdated
     *
     * @Column(name="date_updated", type="date", nullable=true)
     */
    private $dateUpdated;


    /**
     * Get assetId
     *
     * @return integer 
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * Set assetName
     *
     * @param text $assetName
     */
    public function setAssetName($assetName)
    {
        $this->assetName = $assetName;
    }

    /**
     * Get assetName
     *
     * @return text 
     */
    public function getAssetName()
    {
        return $this->assetName;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreated
     *
     * @param date $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Get dateCreated
     *
     * @return date 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param date $dateUpdated
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * Get dateUpdated
     *
     * @return date 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }
}