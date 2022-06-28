<?php

namespace App\Class;

use Mailjet\Client;
use Mailjet\Resources;

class Mailjet
{

    private $P_Key;
    private $S_Key; 
    const ADMINEMAIL = "aymen@aymenwlf.me";
    const SECADMINEMAIL = "contact.digitalwlf@gmail.com";

    public function __construct()
    {
        $this->P_Key = 'fef911d7eee3992d4e46a0501295bced';
        $this->S_Key = '630f5e91c26eec50fc8327f5c885d5da';
    }

    public function sendContact($name,$email,$subject,$message) : bool
    {
        $mj = new Client($this->P_Key, $this->S_Key, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => self::ADMINEMAIL,
                        'Name' => "DigitalWLF"
                    ],
                    'To' => [
                        [
                            'Email' => self::SECADMINEMAIL,
                        ]
                    ],
                    'TemplateID' => 3904443,
                    'TemplateLanguage' => true,
                    'Subject' => "Contact",
                    'Variables' => [
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'message' => $message
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        return $response->success();

    }
    
    // public function sendQuote($name,$email,$phone,$company,$transport,$incoterm,$unloading,$location,$dimension,$weight,$message) : bool
    // {
    //     $mj = new Client($this->P_Key, $this->S_Key, true, ['version' => 'v3.1']);
    //     $body = [
    //         'Messages' => [
    //             [
    //                 'From' => [
    //                     'Email' => self::ADMINEMAIL,
    //                     'Name' => "Transit"
    //                 ],
    //                 'To' => [
    //                     [
    //                         'Email' => self::SECADMINEMAIL,
    //                     ]
    //                 ],
    //                 'TemplateID' => 3651676,
    //                 'TemplateLanguage' => true,
    //                 'Subject' => "Quote",
    //                 'Variables' => [
    //                     'name' => $name,
    //                     'email' => $email,
    //                     'phone' => $phone,
    //                     'company' => $company,
    //                     'transport' => $transport,
    //                     'incoterm' => $incoterm,
    //                     'location' => $location,
    //                     'dimension' => $dimension,
    //                     'weight' => $weight,
    //                     'message' => $message,

    //                 ]
    //             ]
    //         ]
    //     ];
    //     $response = $mj->post(Resources::$Email, ['body' => $body]);
    //     return $response->success();
    // }
}