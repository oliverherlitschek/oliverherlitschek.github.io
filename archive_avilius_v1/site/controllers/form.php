<?php
return function($kirby, $pages, $page) {

    $alert = null;
    $request = $kirby->request();


    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'name'          => get('name'),
            'email'           => get('email'),
            'age'   => get('age'),
            'phonenumber'   => get('phonenumber'),
            'postalcode'   => get('postalcode'),
            'message'   => get('message'),
            'therapist' => get('therapist'),
            'accept_terms' => get('accept_terms'),
            'accept_marketing' => get('accept_marketing'),
            'contact_email' => get('contact_email'),
            'contact_sms' => get('contact_sms'),
        ];

        $rules = [
            'name'  => ['required'],
            'email' => ['required', 'email'],
            'age'   => ['required'],
            'phonenumber'   => ['required'],
            'postalcode'   => ['required'],
            'message'   => ['required'],
            'therapist' => ['required'],
            'accept_terms' => ['required'],
        ];

        $messages = [
            'name'  => 'Indtast venligst dit navn',
            'email' => 'Indtast venligst din email',
            'age'  => 'Indtast venligst din alder',
            'phonenumber'  => 'Indtast dit telefonnummer',
            'postalcode'  => 'Indtast dit postnummer',
            'message'  => 'Skriv en besked til os'
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {

            // the data is fine, let's send the email
        } else {
            try {
                $therapists = implode(", ", $data['therapist']);

                $values = [
                  'name'   => esc($data['name']),
                  'email' => esc($data['email']),
                  'age' => esc($data['age']),
                  'phonenumber' => esc($data['phonenumber']),
                  'postalcode' => esc($data['postalcode']),
                  'therapist' => $therapists,
                  'message' => esc($data['message']),
                  'contact_sms' => $data['contact_sms'],
                  'contact_email' => $data['contact_email'],
                  'terms' => $data['accept_terms'],
                  'marketing' => $data['accept_marketing'],
                ];
             
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'formular@avilius.dk',
                    'replyTo'  => $data['email'],
                    'to'       => 'kontakt@avilius.dk',
                    'subject'  => esc($data['name']) . ' har sendt en besked via avilius.dk',
                    'data'     => $values,
                ]);

            } catch (Exception $error) {
                $alert['error'] = "The form could not be sent";
            }

            // no exception occured, let's send an email to the recipient
            if (empty($alert) === true) {
                $success = kirby()->email([
                    'template' => 'email-recipient',
                    'from'     => 'kontakt@avilius.dk',
                    'replyTo'  => 'kontakt@avilius.dk',
                    'to'       => $data['email'],
                    'subject'  => esc($data['name']) . ', vi glæder os til at se dig!',
                    'data'     => $values,
                ])->isSent();
                $data = [];
            }
            header('Location: thanks.html');
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};