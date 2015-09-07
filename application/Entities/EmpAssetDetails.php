<?php


namespace Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * EmpAssetDetails
 *
 * @Table(name="emp_asset_details")
 * @Entity
 */
class EmpAssetDetails
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text $techDetails
     *
     * @Column(name="tech_details", type="text", nullable=true)
     */
    private $techDetails;

    /**
     * @var string $assetReciept
     *
     * @Column(name="asset_reciept", type="string", nullable=true)
     */
    private $assetReciept;

    /**
     * @var string $assetHandover
     *
     * @Column(name="asset_handover", type="string", nullable=true)
     */
    private $assetHandover;

    /**
     * @var date $assetHandoverDate
     *
     * @Column(name="asset_handover_date", type="date", nullable=true)
     */
    private $assetHandoverDate;

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
     * @var date $assetRecieptDate
     *
     * @Column(name="asset_reciept_date", type="date", nullable=true)
     */
    private $assetRecieptDate;

    /**
     * @var Asset
     *
     * @ManyToOne(targetEntity="Asset")
     * @JoinColumns({
     *   @JoinColumn(name="asset_id", referencedColumnName="asset_id")
     * })
     */
    private $asset;

    /**
     * @var AssetFormDetails
     *
     * @ManyToOne(targetEntity="AssetFormDetails")
     * @JoinColumns({
     *   @JoinColumn(name="assetform_id", referencedColumnName="id")
     * })
     */
    private $assetform;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set techDetails
     *
     * @param text $techDetails
     */
    public function setTechDetails($techDetails)
    {
        $this->techDetails = $techDetails;
    }

    /**
     * Get techDetails
     *
     * @return text 
     */
    public function getTechDetails()
    {
        return $this->techDetails;
    }

    /**
     * Set assetReciept
     *
     * @param string $assetReciept
     */
    public function setAssetReciept($assetReciept)
    {
        $this->assetReciept = $assetReciept;
    }

    /**
     * Get assetReciept
     *
     * @return string 
     */
    public function getAssetReciept()
    {
        return $this->assetReciept;
    }

    /**
     * Set assetHandover
     *
     * @param string $assetHandover
     */
    public function setAssetHandover($assetHandover)
    {
        $this->assetHandover = $assetHandover;
    }

    /**
     * Get assetHandover
     *
     * @return string 
     */
    public function getAssetHandover()
    {
        return $this->assetHandover;
    }

    /**
     * Set assetHandoverDate
     *
     * @param date $assetHandoverDate
     */
    public function setAssetHandoverDate($assetHandoverDate)
    {
        $this->assetHandoverDate = $assetHandoverDate;
    }

    /**
     * Get assetHandoverDate
     *
     * @return date 
     */
    public function getAssetHandoverDate()
    {
        return $this->assetHandoverDate;
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

    /**
     * Set assetRecieptDate
     *
     * @param date $assetRecieptDate
     */
    public function setAssetRecieptDate($assetRecieptDate)
    {
        $this->assetRecieptDate = $assetRecieptDate;
    }

    /**
     * Get assetRecieptDate
     *
     * @return date 
     */
    public function getAssetRecieptDate()
    {
        return $this->assetRecieptDate;
    }

    /**
     * Set asset
     *
     * @param Asset $asset
     */
    public function setAsset(Asset $asset)
    {
        $this->asset = $asset;
    }

    /**
     * Get asset
     *
     * @return Asset 
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Set assetform
     *
     * @param AssetFormDetails $assetform
     */
    public function setAssetform(AssetFormDetails $assetform)
    {
        $this->assetform = $assetform;
    }

    /**
     * Get assetform
     *
     * @return AssetFormDetails 
     */
    public function getAssetform()
    {
        return $this->assetform;
    }
}