<?php
// src/AppBundle/Controller/DraftController.php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\Art;
use AppBundle\Entity\Player;

class DraftController extends FOSRestController
{
   
    public function getDraftAction($draftURI)
    {
       $response = "hello";

       return $response;
    }


    /**
     * list of drafts a user is participating or invited to.
     **/
    public function getDraftsAction() {

    }

    /**
     * When a user creates a new draft.
     */
    public function postDraftAction() {

    }


    /*
    public function getPlayerAction($playerid) {
       $player = $this->getDoctrine()
          ->getRepository(Player::class)
          ->find($playerid);

       $picks = $player->getPool()->getPicks();

       $pickIds = array();
       foreach ($picks as $pick) {
          $pickIds[] = $pick->getArt()->getMultiverseid();
       }

       $ret[] = array(
          'player' => $playerid,
          'picks' => $pickIds
       );

       $response = new JsonResponse($ret);

       $response->headers->set('Access-Control-Allow-Origin', '*');

       return $response;
    }
     */
}