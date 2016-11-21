<?php

namespace WowApps\ProxyBonanzaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(
 *     name="proxybonanza_plan",
 *     options={"collate"="utf8_unicode_ci", "charset"="utf8", "engine"="InnoDB"},
 *     indexes={
 *      @ORM\Index(name="ix_proxybonanza_plan_1", columns={"plan_id"}),
 *     }
 * )
 * @ORM\Entity(repositoryClass="Op\CompetitorsBundle\Repository\ProxyBonanzaPlanRepository")
 */
class ProxyBonanzaPlan
{
    const TABLE_NAME = 'proxybonanza_plan';

    /**
     * @var integer
     * @ORM\Column(name="plan_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $planId;

    /**
     * @var string
     * @ORM\Column(name="plan_login", type="string", nullable=false)
     */
    private $planLogin;

    /**
     * @var string
     * @ORM\Column(name="plan_password", type="string", nullable=false)
     */
    private $planPassword;

    /**
     * @var \DateTime
     * @ORM\Column(name="plan_expires", type="datetime", nullable=true)
     */
    private $planExpires;

    /**
     * @var int
     * @ORM\Column(name="plan_bandwidth", type="integer", nullable=true)
     */
    private $planBandwidth;

    /**
     * @var \DateTime
     * @ORM\Column(name="plan_last_ip_change", type="datetime", nullable=true)
     */
    private $planLastIpChange;

    /**
     * @var string
     * @ORM\Column(name="plan_package_name", type="string", nullable=true)
     */
    private $planPackageName;

    /**
     * @var string
     * @ORM\Column(name="plan_package_bandwidth", type="string", nullable=true)
     */
    private $planPackageBandwidth;

    /**
     * @var float
     * @ORM\Column(name="plan_package_price", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $planPackagePrice;

    /**
     * @var int
     * @ORM\Column(name="plan_package_howmany_ips", type="integer", nullable=true)
     */
    private $planPackageHowmanyIps;

    /**
     * @var int
     * @ORM\Column(name="plan_package_price_per_gig", type="integer", nullable=true)
     */
    private $planPackagePricePerGig;

    /**
     * @var string
     * @ORM\Column(name="plan_package_type", type="string", nullable=true)
     */
    private $planPackageType;

    /**
     * @return int
     */
    public function getPlanId(): int
    {
        return $this->planId;
    }

    /**
     * @param int $planId
     */
    public function setPlanId(int $planId)
    {
        $this->planId = $planId;
    }

    /**
     * @return string
     */
    public function getPlanLogin(): string
    {
        return $this->planLogin;
    }

    /**
     * @param string $planLogin
     */
    public function setPlanLogin(string $planLogin)
    {
        $this->planLogin = $planLogin;
    }

    /**
     * @return string
     */
    public function getPlanPassword(): string
    {
        return $this->planPassword;
    }

    /**
     * @param string $planPassword
     */
    public function setPlanPassword(string $planPassword)
    {
        $this->planPassword = $planPassword;
    }

    /**
     * @return DateTime
     */
    public function getPlanExpires(): DateTime
    {
        return $this->planExpires;
    }

    /**
     * @param DateTime $planExpires
     */
    public function setPlanExpires(DateTime $planExpires)
    {
        $this->planExpires = $planExpires;
    }

    /**
     * @return int
     */
    public function getPlanBandwidth(): int
    {
        return $this->planBandwidth;
    }

    /**
     * @param int $planBandwidth
     */
    public function setPlanBandwidth(int $planBandwidth)
    {
        $this->planBandwidth = $planBandwidth;
    }

    /**
     * @return \DateTime
     */
    public function getPlanLastIpChange(): \DateTime
    {
        return $this->planLastIpChange;
    }

    /**
     * @param \DateTime $planLastIpChange
     */
    public function setPlanLastIpChange(\DateTime $planLastIpChange)
    {
        $this->planLastIpChange = $planLastIpChange;
    }

    /**
     * @return string
     */
    public function getPlanPackageName(): string
    {
        return $this->planPackageName;
    }

    /**
     * @param string $planPackageName
     */
    public function setPlanPackageName(string $planPackageName)
    {
        $this->planPackageName = $planPackageName;
    }

    /**
     * @return string
     */
    public function getPlanPackageBandwidth(): string
    {
        return $this->planPackageBandwidth;
    }

    /**
     * @param string $planPackageBandwidth
     */
    public function setPlanPackageBandwidth(string $planPackageBandwidth)
    {
        $this->planPackageBandwidth = $planPackageBandwidth;
    }

    /**
     * @return float
     */
    public function getPlanPackagePrice(): float
    {
        return $this->planPackagePrice;
    }

    /**
     * @param float $planPackagePrice
     */
    public function setPlanPackagePrice(float $planPackagePrice)
    {
        $this->planPackagePrice = $planPackagePrice;
    }

    /**
     * @return int
     */
    public function getPlanPackageHowmanyIps(): int
    {
        return $this->planPackageHowmanyIps;
    }

    /**
     * @param int $planPackageHowmanyIps
     */
    public function setPlanPackageHowmanyIps(int $planPackageHowmanyIps)
    {
        $this->planPackageHowmanyIps = $planPackageHowmanyIps;
    }

    /**
     * @return int
     */
    public function getPlanPackagePricePerGig(): int
    {
        return $this->planPackagePricePerGig;
    }

    /**
     * @param int $planPackagePricePerGig
     */
    public function setPlanPackagePricePerGig(int $planPackagePricePerGig)
    {
        $this->planPackagePricePerGig = $planPackagePricePerGig;
    }

    /**
     * @return string
     */
    public function getPlanPackageType(): string
    {
        return $this->planPackageType;
    }

    /**
     * @param string $planPackageType
     */
    public function setPlanPackageType(string $planPackageType)
    {
        $this->planPackageType = $planPackageType;
    }
}
