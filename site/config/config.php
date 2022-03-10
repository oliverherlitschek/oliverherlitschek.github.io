<?php

use Uniform\Form;

return [
    'debug' => true,
    'date.handler' => 'strftime',
    'locale' => 'da_DK.utf8',
    'routes' => [
        [
            'pattern' => 'callform',
            'method' => 'post',
            'action'  => function () {

                $form = new Form([
                    /*'slot' => [
                        'rules' => ['required'],
                        'message' => 'Vælg en ledig tid',
                    ],*/
                    'phonenumber' => [
                        'rules' => ['required'],
                        'message' => 'Indtast dit telefonnummer',
                    ],
                    // ],'callform');
                ]);

                $form->withoutRedirect()
                    ->honeypotGuard();

                if (!$form->success()) {
                    // Return validation errors.
                    return Response::json($form->errors(), 400);
                }

                // Stuff goes here.
                $slot = get('slot');
                $phonenumber  = get('phonenumber');
                $to = 'kontakt@avilius.dk';

                $subject = ''.$phonenumber.' vil gerne ringes op';

                $message = '<html>
            <body>
            Opkaldstidspunkt: '.$slot.'<br>
            Telefonnummer: '.$phonenumber.'
            </body>
            </html>';

                $from_name='Avilius call center';

                $from_email='kontakt@avilius.dk';

                $headers  = 'MIME-Version: 1.0' . "\r\n";

                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                $headers .= "From: $from_name <$from_email>" . "\r\n";

                @mail($to, $subject, $message, $headers) ? 1 : 0;

                // Return code 200 on success.
                return Response::json(['msg' => 'success'], 200);
            }
        ],
        [
            'pattern' => 'bookform',
            'method' => 'post',
            'action'  => function () {

                $form = new Form([
                    'bookname' => [
                        'rules' => ['required'],
                        'message' => 'Indtast dit navn',
                    ],
                    'bookage' => [
                        'rules' => ['required'],
                        'message' => 'Indtast din alder',
                    ],
                    'bookpronouns' => [
                        'message' => 'Indtast dine pronominer',
                    ],
                    'bookpostalcode' => [
                        'rules' => ['required'],
                        'message' => 'Indtast dit postnummer',
                    ],
                    'bookphonenumber' => [
                        'rules' => ['required'],
                        'message' => 'Indtast dit telefonnummer',
                    ],
                    'bookemail' => [
                        'rules' => ['required', 'email'],
                        'message' => 'Indtast din email',
                    ],
                    'bookmessage' => [
                        'rules' => ['required'],
                        'message' => 'Skriv en besked',
                    ],
                    'accept_terms' => [
                        'rules' => ['required'],
                        'message' => 'Accepter betingelserne',
                    ],
                    'bookmarketing' => [
                        'message' => 'Klik her',
                    ],
                ]);

                $form->withoutFlashing()
                    ->withoutRedirect()
                    ->honeypotGuard();

                if (!$form->success()) {
                    // Return validation errors.
                    return Response::json($form->errors(), 400);
                }
                // $request = $form->get();
                // return Response::json( $_POST, 400);

                $bookname = get('bookname');
                $bookage  = get('bookage');
                $bookpronouns  = get('bookpronouns');
                $bookpostalcode  = get('bookpostalcode');
                $bookphonenumber  = get('bookphonenumber');
                $bookemail  = get('bookemail');
                $bookmessage  = get('bookmessage');
                $bookmarketing  = get('accept_marketing');

                $to = 'kontakt@avilius.dk';
                $subject = 'Ny besked fra avilius.dk';
                $message = '<html><body>'.$bookname.', '.$bookage.' ('.$bookpronouns.') har skrevet:<br/><br/>'.$bookmessage.'<br/><br/>
                Kontakt:<br/>
                '.$bookphonenumber.'<br/>
                '.$bookemail.' <br/>
                Postnummer: '.$bookpostalcode.' <br/><br/>
                Marketing? '.$bookmarketing.' tak!
                </body>
                </html>';

                $from_name='Avilius';
                $from_email='kontakt@avilius.dk';

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= "From: $from_name <$from_email>" . "\r\n";
                @mail($to, $subject, $message, $headers) ? 1 : 0;

                $bookname = get('bookname');
                $bookemail  = get('bookemail');
                $bookmessage  = get('bookmessage');
                $bookmarketing  = get('accept_marketing');
               
                $to = ''.$bookemail.'';
                $subject = 'Tak for din henvendelse!';
                $message = 'Hej '.$bookname.'.<br><br>Tak for din besked! Vi vender tilbage til dig inden for 2-3 dage.<br><br>Vi glæder os til at se dig.<br><br>Kærlig hilsen,<br>Avilius';

                $from_name='Avilius';
                $from_email='kontakt@avilius.dk';

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= "From: $from_name <$from_email>" . "\r\n";

                @mail($to, $subject, $message, $headers) ? 1 : 0;

                // Return code 200 on success.
                return Response::json(['msg' => 'success'], 200);

            }
        ]
    ]
];
