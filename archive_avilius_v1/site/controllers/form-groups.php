<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'group'  => get('group'),
            'name' => get('name'),
            'email'  => get('email'),
            'age'  => get('age'),
            'accept_terms' => get('accept_terms'),
            'accept_marketing' => get('accept_marketing')
        ];

        $rules = [
            'group'  => ['in' => [['karlighed','prastationspres','kulturclash']]],
            'name'  => ['required'],
            'email' => ['required', 'email'],
            'age'  => ['required'],
            'accept_terms' => ['required']
        ];

        $messages = [
            'name'  => 'Indtast venligst dit fulde navn',
            'email' => 'Indtast venligst din email',
            'age'  => 'Indtast venligst din alder'
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'email-groups',
                    'from'     => 'grupper@avilius.dk',
                    'replyTo'  => $data['email'],
                    'to'       => 'kontakt@avilius.dk',
                    'subject'  => esc($data['name']) . ' ønsker at deltage i ' . esc($data['group']),
                    'data'     => [
                        'age'   => esc($data['age']),
                        'group'   => esc($data['group']),
                        'email'   => esc($data['email']),
                        'name' => esc($data['name']),
                        'group' => esc($data['group']),
                        'accept_marketing' => esc($data['accept_marketing']),
                    ]
                ]);

            } catch (Exception $error) {
                $alert['error'] = "The form could not be sent";
            }

            // no exception occured, let's send an email to the recipient
            if (empty($alert) === true) {
                $success = kirby()->email([
                    'from'     => 'kontakt@avilius.dk',
                    'replyTo'  => 'kontakt@avilius.dk',
                    'to'       => $data['email'],
                    'subject'  => esc($data['name']) . ', tak for din interesse i vores gruppeforløb!',
                    'body'     => 'Du er nu tilmeldt forløbet ' . esc($data['group']) . '!

Hvis der er ledige pladser på holdet, vil du blive kontaktet af din nye gruppeleder i løbet af de næste par dage. Tilmelder du dig et fyldt hold, vil du blive kontaktet i tilfælde af afbud eller ny holdstart.

Vi glæder os til at se dig.

Kærlig hilsen,
Avilius',
                    'data'     => $values,
				])->isSent();
            }
            header('Location: thanks-' . get('group'));
            
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};