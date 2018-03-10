<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;


/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
   /**
    * @ORM\Column(type="integer", name="playerid")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * @ORM\Column(type="string", length=255)
    */
   private $name;

   /**
    * @ORM\ManyToOne(targetEntity="Draft", inversedBy="players")
    * @ORM\JoinColumn(name="draftid", referencedColumnName="draftid")
    */
   private $draft;

   /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="players", cascade={"persist"})
    * @ORM\JoinColumn(name="userid", referencedColumnName="userid")
    */
   private $user;

   /**
    * @ORM\OneToOne(targetEntity="Pool", cascade={"persist"})
    * @ORM\JoinColumn(name="picksid", referencedColumnName="poolid")
    */
   private $picks;

   /**
    * @ORM\OneToOne(targetEntity="Pool", cascade={"persist"})
    * @ORM\JoinColumn(name="packid", referencedColumnName="poolid")
    */
   private $pack;

   /**
    * @ORM\OneToOne(targetEntity="Pool", cascade={"persist"})
    * @ORM\JoinColumn(name="passid", referencedColumnName="poolid")
    */
   private $pass;

   public function __construct() {
      $this->picks = new Pool();
      $this->pass = new Pool();
      $this->pack = new Pool();
   }

   public function getId() {
      return $this->id;
   }

   public function getName() {
      return $this->name;
   }

   public function setName($name) {
      $this->name = $name;
   }

   public function getPicks() {
      return $this->picks;
   }

   public function getPack() {
      return $this->pack;
   }

   public function generatePack() {

   }

   public function getPass() {
      return $this->pass;
   }

   public function draftArt($art) {
      $this->picks->addArt($art);
   }

   public function getUser() {
      return $user;
   }

   public function setUser($user) {
      $this->user = $user;
   }

   public function getDraft() {
      return $this->draft;
   }

   public function setDraft($draft) {
      $this->draft = $draft;
   }

   public function draftPick($pick) {
      $this->picks->addPick($pick);
      // add the rest of the pack to the pass list.
      $this->pass->addPool($this->pack);
   }
}
