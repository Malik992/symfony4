<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Typebien;
use App\Entity\Bien;
use App\Entity\BienPro;
use App\Entity\Proprietaire;
use App\Entity\Localite;
use App\Entity\Client;
use App\Entity\Image;
use App\Entity\Imagepro;
use App\Entity\Reserve_pro;
use App\Entity\Reservation;
use App\Form\ClientType;
use App\Form\ProprietaireType;
use App\Form\BienProType;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{


    /**
     * @Route("/index")
     * @Method({"GET"})
     */
    public function index(Request $request)
    {
        $repository = $this->getDoctrine();

                    // $bien=new Bien();
                    $listbien = $repository->getRepository(Bien::class)->findBy(['etat'=>0]);
                    $bien=$this->get('knp_paginator')->paginate($listbien,$request->query->get('page',1),6);
                    $listType = $repository ->getRepository(Typebien::class)->findAll();
                    $listLocalite = $repository ->getRepository(Localite::class)->findAll();

                        if ($request->isMethod('POST')) {
                        if ($_POST['localite'] != '' && $_POST['typebien'] != '' && $_POST['prix_loc'] != ''  ) {
                            $listbien = $repository ->getRepository(Bien::class)->findBienByValues($_POST['localite'], $_POST['typebien'],$_POST['prix_loc']);
                        }

                    }


        return $this->render('Front/index.html.twig',
        array('biens' => $bien, 'types' => $listType, 'localites' => $listLocalite,
        )
        );
    }


    public function SavePro(Request $request){
        $em =$this->getDoctrine()->getManager();
        $listType = $em->getRepository(Typebien::class)->findAll();
        $listLocalite = $em->getRepository(Localite::class)->findAll();
        if($request->isMethod('POST')){
        if (isset($_POST['submit']))
                    {
                        extract($_POST);
                        $tbien=new Typebien();
                        $tbien->setLibelletype($_POST['typebien']);
                        $em->persist($tbien);
                       $em->flush();

                   $local=new Localite();
                   $local->setLibelleloca($_POST['localite']);
                   $em->persist($local);
                    $em->flush();


                   $pro = new Proprietaire();
                   $pro->setNumpiece($numpiece);
                   $pro->setNomcomplet($nomcomplet);
                   $pro->setAdressepro($adressepro);
                   $pro->setTelPro($telpro);
                   $pro->setEmailPro($emailpro);
                   $pro->setCodebanque($codebanque);
                   $em->persist($pro);
                   $em->flush();

                   $img= new Imagepro();
                   $img->setImage($image);
                   $img->setBienPro($bien);
                   $em->persist($img);
                   $em->flush();


                   $bien=new BienPro();
                   $bien->setNom($nom);
                   $bien->setDescription($description);
                   $bien->setMontantvoulu($montantvoulu);
                   $bien->setEtat(0);
                   $bien->setIdparent($idparent);
                   $bien->setLocalite($local);
                   $bien->setTypebien($tbien);
                   $bien->setProprietaire($pro);
                   $em->persist($bien);
                   $em->flush();

                   $reserv= new Reserve_pro();
                   $reserv->setDateReservation(new \DateTime());
                   $reserv->setEtat(0);
                   $reserv->setProprietaire($pro);
                   $reserv->setBienPro($bien);
                   $em->persist($reserv);
                   $em->flush();


                    }

                }

         return $this->render('Front/proprietaire.html.twig',
        array('types' => $listType, 'localites' => $listLocalite,));



    }
      //lister les biens de almadie
      public function Almadie(){
        $em = $this->getDoctrine()->getManager();
        $listbien = $em->getRepository(Bien::class)->findBy(['localite'=>3]);
        $listType = $em->getRepository(Typebien::class)->findAll();
        $listLocalite = $em->getRepository(Localite::class)->findAll();

        return $this->render('Front/almadie.html.twig', array(  'biens' => $listbien,
        'types' => $listType, 'localites' => $listLocalite,
        ));
}

//lister les biens de mariste
public function mariste(){
    $em = $this->getDoctrine()->getManager();
    $listbien = $em->getRepository(Bien::class)->findBy(['localite'=>1]);
    $listType = $em->getRepository(Typebien::class)->findAll();
    $listLocalite = $em->getRepository(Localite::class)->findAll();

    return $this->render('Front/almadie.html.twig', array(  'biens' => $listbien,
    'types' => $listType, 'localites' => $listLocalite,
    ));
}

public function reservation(){
    $em = $this->getDoctrine()->getManager();

    $listType = $em->getRepository(Typebien::class)->findAll();
    $listLocalite = $em->getRepository(Localite::class)->findAll();
    $listbien = $em->getRepository(Bien::class)->findAll();
    return $this->render('Front/reservation.html.twig', array(  'biens' => $listbien,
    'types' => $listType, 'localites' => $listLocalite,
    ));

}

/**
     * @Route("front/bien/reserver")
     */
    public function reserverBien(Request $request,$id )
    {


      $em = $this->getDoctrine()->getManager();
      $listbien = $em->getRepository(Bien::class)->find($id);
      $listimage = $em->getRepository(Image::class)->find($id);
      $listType = $em->getRepository(Typebien::class)->findAll();
      $listLocalite = $em->getRepository(Localite::class)->findAll();

      $client = new Client();
      $form = $this->createForm(ClientType::class, $client);

      if ($request->isMethod('POST'))
      {
          if (isset($_POST['submit']))
           {
              $user = $em->getRepository(Client::class)
              ->findBy(['email' => $_POST['emailclient'], 'motdepasse' => $_POST['password']]);
              if ($user) {
                  $reserve = new Reservation();
                  $reserve->setDateReservation(new \DateTime());
                  $reserve->setEtat(0);
                  $reserve->setClient($user);
                  $reserve->setBien($listbien);
                  $em->persist($reserve);
                  $em->flush();
               //  echo'votre reservation a été prise en compte';
                  return $this->render('Front/:reserver.html.twig');
              }
          }

          else
           {
              $form->HandleRequest($request);
              if ($form->isSubmitted() && $form->isValid())
              {
                  $em->persist($client);

                  $reserv = new Reservation();
                  $reserv->setDateReservation(new \DateTime());
                  $reserv->setEtat(0);
                  $reserv->setClient($client);
                  $reserv->setBien($listbien);
                  $em->persist($reserv);
                  $em->flush();

              }

              return $this->render('Front/:reserver.html.twig');
          }
       }
          return $this->render('Front/:reservationn.html.twig', array("bien"=>$listbien,"images"=> $listimage,"users"=>$client,
          'types' => $listType, 'localites' => $listLocalite,   "form"=>$form->createView()));

       }


}
