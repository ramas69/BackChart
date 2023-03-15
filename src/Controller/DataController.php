<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\DataRepository;

#[Route('/api/data')]
class DataController extends AbstractController
{
    private DataRepository $repo;
  
    public function __construct(DataRepository $reponse) {
    	$this->repo = $repo;
    }
    /**
     * On indique ici que cette route n'est accessible que via une méthode GET, pas la peine de
     * répéter l'url grâce à la route globale du contrôleur
     */
    #[Route(methods: 'OPTIONS')]
    public function all() {
        
        $datas = $this->repo->findOneBy();
        return $this->$datas;
    }

    #[Route(methods:'POST')]
    public function add( Request $request, SerializerInterface $serializer, EntityManagerInterface $em) {

        //pour l'instant, ça marche pas avec une station dedans
        $datas = $serializer->deserialize($request->getContent(), Data::class, 'json');

        $this->repo->push($datas, true);

        

        return $this->json($lol, Response::HTTP_CREATED);
    }





}
