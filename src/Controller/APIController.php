<?php
namespace App\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Bien;
use App\Entity\Localite;
use App\Entity\Typebien;
use App\Entity\Client;
use App\Entity\Image;
use App\Entity\Reservation;

/**
 * Brand controller.
 *
 * @Route("/")
 */
class APIController extends Controller
{
    /**
     * Lists all Bien.
     * @FOSRest\Get("/bien")
     *
     * @return array
     */
    public function allBienAction()
    {
        $repository = $this->getDoctrine()->getRepository(Bien::class);
                $biens = $repository->findBy(['etat'=>0]);
                foreach ($biens as $key => $values) {
                foreach($values->getImages() as $key1=>$images)
                    {
                        $images->setImage(base64_encode(stream_get_contents($images->getImage())));
                    }
                }
          if(!count($biens)){
                $response =array(
                    "code"=>false,
                    "msg"=>"error",
                    "error"=>null,
                    "data"=>null,
                   
                );
                return new JsonResponse($response ,Response::HTTP_BAD_REQUEST);
            }  

           
               
            $data = $this->get('jms_serializer')->serialize($biens, 'json'); 

                $response =array(
                    "code"=>true,
                    "msg"=>"success",
                    "error"=>null,
                    "data"=>json_decode($data)
                );
                return new JsonResponse($response,Response::HTTP_OK  );
            
     
    }

    /**
     * list client
     * @FOSRest\Post("/list")
     */


     public function listeClientAction(){
    $repository = $this->getDoctrine()->getRepository(Client::class);
    $client = $repository->findAll();

    if(empty($client)){
        $response =array(
            "code"=>false,
            "msg"=>"error",
            "error"=>null,
            "data"=>null,
           
        );
        return new JsonResponse($response ,Response::HTTP_BAD_REQUEST);
    }  

   
       
    $data = $this->get('jms_serializer')->serialize($client, 'json'); 

        $response =array(
            "code"=>true,
            "msg"=>"success",
            "error"=>null,
            "data"=>json_decode($data)
        );
        return new JsonResponse($response,Response::HTTP_OK  );
    
    }

    /**
     * Add client
     * @FOSRest\Post("/add")
     */
      public  function  addAction(Request $request)
       {
        $client = $request->getContent();
        $data = $this->get('jms_serializer')->deserialize($client,"App\Entity\Client", 'json'); 
        if(empty($data)){
            return new JsonResponse($response , Response::HTTP_BAD_REQUEST);

        }


        $em  = $this->getDoctrine()->getManager();
        $em -> persist ( $data );
        $em -> flush ();

        $client = $em->
        getRepository(Client::class)->find($data->getId());
        $data=$this->get('jms_serializer')->serialize($client, 'json');

        $response =array(
            "code"=>1,
            "msg"=>"success",
            "error"=>null,
            'type' => json_decode($data)   

        );
    
        return  new JsonResponse($response, Response  :: HTTP_CREATED , []);
        
       }
// ******


    /**
     * Connect Client.
     * @FOSRest\Post("/connexionclient")
     *
     * @return array
     */

    public function connexionClientAction(Request $request)
    {
        $emailclient = $request->get('emailclient');
        $password = $request->get('password');

        $em = $this->getDoctrine()->getManager();

        $client = $em->getRepository(Client::class)->findBy(array('emailclient' => $emailclient, 'password' => $password));

        if(empty($client))
        {
            $response = array(
                'code' => 0,
                'Message' => 'Votre reservation n a pas etait pris en compte',
                'error' => null,
                'type' => null,
            );
            return new JsonResponse($response, 200);
        }

        $response = array(
            'code' => 1,
            'Message' => 'success',
            'error' => null,
            'type' => json_decode($this->get('jms_serializer')->serialize($client, 'json'))   
        );
    
        return new JsonResponse($response, Response::HTTP_CREATED);
    }

       /**
     * Create Reservation.
     * @FOSRest\Post("/addreservation")
     *
     * @return array
     */

    public function addreserverAction(Request $request)
    {
        $idbien = $request->get('bien');
        $idclient = $request->get('client');

        $em = $this->getDoctrine()->getManager();

        $bien = $em->getRepository(Bien::class)->find($idbien);
        $client = $em->getRepository(Client::class)->find($idclient);

        $reserve = new Reservation();
        $reserve->setDatereservation(new \DateTime());
        $reserve->setEtat(0);
        $reserve->setClient($client);
        $reserve->setBien($bien);
        $em->persist($reserve);
        $em->flush();

        $response = array(
            'code' => 1,
            'Message' => 'success',
            'error' => null,
            'result' => null,
        );
    
        return new JsonResponse($response, Response::HTTP_CREATED);
    }

// ******

         /**
         * detail.
         * @FOSRest\Post("/detail")
         *
         * @return array
         */


        public function detailAction(Request $request)
            {
                $repository = $this->getDoctrine()->getRepository(Bien::class);
                $biens = $repository->find($request->get('id'));
                foreach ($biens->getImages() as $key => $values) {
                        $values->setImage(base64_encode(stream_get_contents($values->getImage())));
                }
                 if(empty($biens)){
                 $response =array(
                    "code"=>false,
                    "msg"=>"error",
                    "error"=>null,
                    "data"=>null,
                   
                );
                return new JsonResponse($response ,Response::HTTP_BAD_REQUEST);
            }  

           
               
            $data = $this->get('jms_serializer')->serialize($biens, 'json'); 

                $response =array(
                    "code"=>1,
                    "msg"=>"success",
                    "error"=>null,
                    "data"=>json_decode($data)
                );
                return new JsonResponse($response,Response::HTTP_OK  );
            
     
    }


     /**
     * liste localite.
     * @FOSRest\Get("/localite")
     *
     * @return array
     */
    public function localiteAction()
    {
        $repository = $this->getDoctrine()->getRepository(Localite::class);
        $localite = $repository->findAll();
    
        if(empty($localite)){
            $response =array(
                "code"=>false,
                "msg"=>"error",
                "error"=>null,
                "data"=>null,
               
            );
            return new JsonResponse($response ,Response::HTTP_BAD_REQUEST);
        }  
    
       
           
        $data = $this->get('jms_serializer')->serialize($localite, 'json'); 
    
            $response =array(
                "code"=>1,
                "msg"=>"success",
                "error"=>null,
                "data"=>json_decode($data)
            );
            return new JsonResponse($response,Response::HTTP_OK  );
        
    }

    /**
     * liste type.
     * @FOSRest\Get("/type")
     *
     * @return array
     */
    public function typebienAction()
    {
        $repository = $this->getDoctrine()->getRepository(Typebien::class);
        $type = $repository->findAll();
    
        if(empty($type)){
            $response =array(
                "code"=>false,
                "msg"=>"error",
                "error"=>null,
                "data"=>null,
               
            );
            return new JsonResponse($response ,Response::HTTP_BAD_REQUEST);
        }  
    
       
           
        $data = $this->get('jms_serializer')->serialize($type, 'json'); 
    
            $response =array(
                "code"=>true,
                "msg"=>"success",
                "error"=>null,
                "data"=>json_decode($data)
            );
            return new JsonResponse($response,Response::HTTP_OK  );
        
    }


    /**
     * recherche.
     * @FOSRest\Get("/recherche")
     *
     * @return array
     */
    public function rechercheAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Bien::class);
        $libelleloca = $this->getDoctrine()->getRepository(Localite::class);
        $libelletype = $this->getDoctrine()->getRepository(Typebien::class);

                $recherche = $repository->chercherBien($libelleloca,$libelletype);
            
          if(!count($recherche)){
                $response =array(
                    "code"=>false,
                    "msg"=>"error",
                    "error"=>null,
                    "data"=>null,
                   
                );
                return new JsonResponse($response ,Response::HTTP_BAD_REQUEST);
            }  

           
               
            $data = $this->get('jms_serializer')->serialize($recherche, 'json'); 

                $response =array(
                    "code"=>true,
                    "msg"=>"success",
                    "error"=>null,
                    "data"=>json_decode($data)
                );
                return new JsonResponse($response,Response::HTTP_OK  );
            
     
    }



   

}