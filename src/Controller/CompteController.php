<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\TypeCompte;
use App\Entity\Compte;
use App\Entity\Entreprise;
use App\Repository\ClientRepository;
use App\Repository\CompteRepository;
use App\Repository\EntrepriseRepository;
use App\Repository\TypeCompteRepository;
use Doctrine\ORM\EntityManagerInterface;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    private $entity;
    private $typeCompte;

    public function __construct(EntityManagerInterface $test){
        $this->entity = $test;
        $this->typeCompte = $this->entity->getRepository(TypeCompte::class);
    }

    /**
     * @Route("/", name="compte")
     */
    public function index()
    {
        return $this->render('compte/index.html.twig');
    }


    /**
     * @Route("/add", name="add")
     */
    public function add(EntityManagerInterface $entity)
    {
        $clientR = new ClientRepository();
        $compteR = new CompteRepository();
        $typeR = new TypeCompteRepository();
        
        extract($_POST);
        //  var_dump($_POST);
        // die;
        if ($choix_client == "nouveau") {
            if ($choix_type_client == "physique") {
                if ($choix_compte == "simple") {
                    $client = new Client();
                    $mat = codeAleatoire(8);
                    $client-> setMatricule($mat);
                    $client->setCni($cni);
                    $client-> setNom($nom);
                    $client-> setPrenom($prenom);
                    $client-> setSexe($sexe);
                    $client-> setDatenaiss($datenaiss);
                    $client-> setTelephone($tel);
                    $client-> setAdresse($adr);
                    $client-> setEmail($email);
                    //  var_dump($client);
                    // die;
                    // $a = $this->typeCompte->findBy(["id"=>1]);
                    // var_dump($a);
                    // die;
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($client);
                    $em->flush();
                    // $cl =$clientR->addClient($client);
                    // $cli = $clientR->getClient($cl);
                   // var_dump($client);
                    //die;
                           
                    $compte = new Compte;
                    
                    $rib = cleRip(9);
                    $numero = cleRip(8);
                    $compte -> setNumero($numero);
                    $compte -> setRib($rib);
                    $compte -> setSolde(50000);
                    $compte -> setDateOuv(date('Y-m-d'));
                    $compte -> setFraisOuv(25000);
                    $compte -> setRemuneration(10000);
                    
                    // $compte -> setTypeCompte($type);

                   

                    // $compte -> setClient($cli);
                    // // $cl =$compteR->addCompte($compte);
                    $compte -> setClient($client);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($compte);
                    $em->flush();
    
                } elseif ($choix_compte == "courant") {
                    
                    $client = new Client();
                    $mat = codeAleatoire(8);
                    $client-> setMatricule($mat);
                    $client->setCni($cni);
                    $client->setNom($nom);
                    $client->setPrenom($prenom);
                    $client->setSexe($sexe);
                    $client->setDatenaiss($datenaiss);
                    $client->setTelephone($tel);
                    $client->setAdresse($adr);
                    $client->setEmail($email);
                    $client->setRaisonSociale($raison_sociale);
                    $client->setSalaire($salaire);
                    $client->setNomEmployeur($nom_employeur);
                    $client->setAdrEmployeur($adr_employeur);
        
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($client);
                    $em->flush();
                    
                    
                    $compte = new Compte();
                    $rib = cleRip(9);
                    $numero = cleRip(8);
                    $compte -> setNumero($numero);
                    $compte -> setRib($rib);
                    $compte -> setSolde(50000);
                    $compte -> setDateOuv(date('Y-m-d'));
                    $compte -> setAgios(10000);
                    // $compte -> setTypeCompte(2);
                    // $compte -> setId_Client($cli);
                    $compte -> setClient($client);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($compte);
                    $em->flush();

                } else {
                    $db = new ClientRepository();
                    $client = new Client();
                    $mat = codeAleatoire(8);
                    $client-> setMatricule($mat);
                    $client->setCni($cni);
                    $client->setNom($nom);
                    $client->setPrenom($prenom);
                    $client->setSexe($sexe);
                    $client->setDatenaiss($datenaiss);
                    $client->setTelephone($tel);
                    $client->setAdresse($adr);
                    $client->setEmail($email);
    
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($client);
                    $em->flush();
                    
                    
                    $idClient = $client->getId();
                    $compte = new Compte();
                    $rib = cleRip(9);
                    $numero = cleRip(8);
                    $compte -> setNumero($numero);
                    $compte -> setRib($rib);
                    $compte -> setSolde(50000);
                    $compte -> setFraisOuv(25000);
                    $compte -> setRemuneration(10000);
                    $compte -> setDateDebut($date_debut);
                    $compte->setDateOuv(date('Y-m-d'));
                    $compte -> setDateFin($date_fin);
                    // $type = $db->getTypeCompte(3);
                    // $compte -> setTypeCompte($type);
                     $compte -> setClient($client);
    
                    // $cl =$db->addCompte($compte);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($compte);
                    $em->flush();
                    
                }
            } 
            else {
                $db = new EntrepriseRepository();
                $entreprise = new Entreprise();
                //$entreprise-> setId($id);
                $entreprise-> setNomEntreprise($nom_entreprise);
                $entreprise-> setTelEntreprise($tel_entreprise);
                $entreprise-> setEmailEntreprise($email_entreprise);
                $entreprise-> setBudgetEntreprise($budget_entreprise);
                $entreprise-> setAdrEntreprise($adr_entreprise);
    
                //$entreprisemodel = new M_Compte();
                
                // $cl = $db-> addEntreprise($entreprise);
                // $cli = $db->getEntreprise($cl);
                $em = $this->getDoctrine()->getManager();
                $em->persist($entreprise);
                $em->flush();
    
                if ($choix_compte == "simple") {
                    $db = new CompteRepository();
                    $compte = new Compte();
                    $rib = cleRip(9);
                    $numero = cleRip(8);
                    $compte -> setNumero($numero);
                    $compte -> setRib($rib);
                    $compte -> setSolde(50000);
                    $compte -> setDateOuv(date('Y-m-d'));
                    $compte -> setFraisOuv(25000);
                    $compte -> setRemuneration(10000);
                    // $type = $db->getTypeCompte(1);
                    // $compte -> setTypeCompte($type);
                    $compte -> setEntreprise($entreprise);
    
                    // $cl =$db->addCompte($compte);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($compte);
                    $em->flush();
                } 
                else {
                    $db = new CompteRepository();
                    $compte = new Compte();
                    $rib = cleRip(9);
                    $numero = cleRip(8);
                    $compte -> setNumero($numero);
                    $compte -> setRib($rib);
                    $compte -> setSolde(50000);
                    $compte -> setFraisOuv(25000);
                    $compte -> setRemuneration(10000);
                    $compte -> setDateDebut($date_debut);
                    $compte->setDateOuv(date('Y-m-d'));
                    $compte -> setDateFin($date_fin);
                    // $type = $db->getTypeCompte(3);
                    // $compte -> setTypeCompte($type);
                    // $compte -> setIdEntreprise($cli);
    
                    // $cl =$db->addCompte($compte);
                    $compte -> setEntreprise($entreprise);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($compte);
                    $em->flush();
                }
            }
        }

        return $this->render('compte/index.html.twig');
    }

    

}

function codeAleatoire($car)
    {
        $string = "";
        $chaine = "2643789ABDCEFGHJKMNPRTUVW";
        srand((double)microtime()*1000000);
        for($i=0; $i<$car; $i++)
        {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }
 
     function cleRip($rip)
    {
        $string = "";
        $chaine = "012643789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$rip; $i++)
        {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }