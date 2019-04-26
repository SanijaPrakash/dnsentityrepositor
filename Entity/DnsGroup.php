<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DnsGroupRepository")
 */
class DnsGroup
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="boolean")
     */
    private $privacy;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="boolean")
     */
    private $notification;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="datetime")
     */
    private $datecreated;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="datetime")
     */
    private $datemodified;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $userid;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="smallint")
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrivacy(): ?bool
    {
        return $this->privacy;
    }

    public function setPrivacy(bool $privacy): self
    {
        $this->privacy = $privacy;

        return $this;
    }

    public function getNotification(): ?bool
    {
        return $this->notification;
    }

    public function setNotification(bool $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    public function getDatecreated(): ?\DateTimeInterface
    {
        return $this->datecreated;
    }

    public function setDatecreated(\DateTimeInterface $datecreated): self
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    public function getDatemodified(): ?\DateTimeInterface
    {
        return $this->datemodified;
    }

    public function setDatemodified(\DateTimeInterface $datemodified): self
    {
        $this->datemodified = $datemodified;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}
