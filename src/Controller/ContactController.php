<?php

namespace App\Controller;

use DateTime;
use App\Service\MailJet;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/contact', name: 'contact')]
class ContactController extends AbstractController
{
    #[Route('/', name: 'contact.sendEmail',methods:['POST'])]
    public function sendEmail(Request $request): Response
    {
        // $data = file_get_contents('php://input');
        $data = json_decode($request->getContent(), true);
        
        if($data)
        {
            $mailer = new Mailjet();
            
            if($mailer->sendContact($data['name'],$data['email'],$data['subject'],$data['message']))
            {
                return $this->json($data, Response::HTTP_OK, []);
            }
            
        }else
        {
            return $this->json("failed", Response::HTTP_BAD_REQUEST, []);
        }
    }
}
