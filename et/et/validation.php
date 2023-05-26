<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute tuleb aktsepteerida.',
    'accepted_if'          => ':Attribute tuleb aktsepteerida, kui :other on :value.',
    'active_url'           => ':Attribute ei ole kehtiv URL.',
    'after'                => ':Attribute peab olema kuupäev pärast :date.',
    'after_or_equal'       => ':Attribute peab olema kuupäev pärast või samastuma :date.',
    'alpha'                => ':Attribute võib sisaldada vaid tähemärke.',
    'alpha_dash'           => ':Attribute võib sisaldada vaid tähti, numbreid ja kriipse.',
    'alpha_num'            => ':Attribute võib sisaldada vaid tähti ja numbreid.',
    'array'                => ':Attribute peab olema massiiv.',
    'ascii'                => ':Attribute peab sisaldama ainult ühebaidiseid tähtnumbrilisi märke ja sümboleid.',
    'before'               => ':Attribute peab olema kuupäev enne :date.',
    'before_or_equal'      => ':Attribute peab olema kuupäev enne või samastuma :date.',
    'between'              => [
        'array'   => ':Attribute peab olema :min ja :max kirje vahel.',
        'file'    => ':Attribute peab olema :min ja :max kilobaidi vahel.',
        'numeric' => ':Attribute peab olema :min ja :max vahel.',
        'string'  => ':Attribute peab olema :min ja :max tähemärgi vahel.',
    ],
    'boolean'              => ':Attribute väli peab olema tõene või väär.',
    'confirmed'            => ':Attribute kinnitus ei vasta.',
    'current_password'     => 'Parool on vale.',
    'date'                 => ':Attribute pole kehtiv kuupäev.',
    'date_equals'          => ':Attribute peab olema kuupäev väärtusega :date',
    'date_format'          => ':Attribute ei vasta formaadile :format.',
    'decimal'              => ':Attribute-s peab olema :decimal kohta pärast koma.',
    'declined'             => ':Attribute tuleb tagasi lükata.',
    'declined_if'          => ':Attribute tuleb tagasi lükata, kui :other on :value.',
    'different'            => ':Attribute ja :other peavad olema erinevad.',
    'digits'               => ':Attribute peab olema :digits numbrit.',
    'digits_between'       => ':Attribute peab olema :min ja :max numbri vahel.',
    'dimensions'           => ':Attribute on valed pildi suurused.',
    'distinct'             => ':Attribute väljal on topeltväärtus.',
    'doesnt_end_with'      => ':Attribute ei tohi lõppeda ühega järgmistest: :values.',
    'doesnt_start_with'    => ':Attribute ei pruugi alata ühega järgmistest: :values.',
    'email'                => ':Attribute peab olema kehtiv e-posti aadress.',
    'ends_with'            => ':Attribute peab lõppema ühega järgmistest: :values.',
    'enum'                 => 'Valitud :attribute on kehtetu.',
    'exists'               => 'Valitud :attribute on vigane.',
    'file'                 => ':Attribute peab olema fail.',
    'filled'               => ':Attribute väli on nõutav.',
    'gt'                   => [
        'array'   => ':Attribute peab sisaldama rohkem kui :value üksust',
        'file'    => ':Attribute peab olema suurem kui :value kilobaiti',
        'numeric' => ':Attribute peab olema suurem kui :value',
        'string'  => ':Attribute peab sisaldama rohkem kui :value tähemärki',
    ],
    'gte'                  => [
        'array'   => ':Attribute peab sisaldama vähemalt :value üksust',
        'file'    => ':Attribute peab olema suurem kui :value kilobaiti või sama palju',
        'numeric' => ':Attribute peab olema suurem kui :value või samasugune',
        'string'  => ':Attribute peab sisaldama rohkem kui :value tähemärki või sama palju',
    ],
    'image'                => ':Attribute peab olema pilt.',
    'in'                   => 'Valitud :attribute on vigane.',
    'in_array'             => ':Attribute väli ei eksisteeri :other sees.',
    'integer'              => ':Attribute peab olema täisarv.',
    'ip'                   => ':Attribute peab olema kehtiv IP aadress.',
    'ipv4'                 => ':Attribute peab olema kehtiv IPv4 aadress.',
    'ipv6'                 => ':Attribute peab olema kehtiv IPv6 aadress.',
    'json'                 => ':Attribute peab olema kehtiv JSON string.',
    'lowercase'            => ':Attribute peab olema väiketäht.',
    'lt'                   => [
        'array'   => ':Attribute peab sisaldama vähem kui :value üksust',
        'file'    => ':Attribute peab olema väiksem kui :value kilobaiti',
        'numeric' => ':Attribute peab olema väiksem kui :value',
        'string'  => ':Attribute ei tohi ületada :value tähemärki',
    ],
    'lte'                  => [
        'array'   => ':Attribute ei tohi sisaldada rohkem kui :value üksust',
        'file'    => ':Attribute peab olema väiksem kui :value kilobaiti või sama palju',
        'numeric' => ':Attribute peab olema väiksem kui :value või samasugune',
        'string'  => ':Attribute peab sisaldama vähem või sama palju :value tähemärke',
    ],
    'mac_address'          => ':Attribute peab olema kehtiv MAC-aadress.',
    'max'                  => [
        'array'   => ':Attribute ei tohi sisaldada rohkem kui :max kirjet.',
        'file'    => ':Attribute ei tohi olla suurem kui :max kilobaiti.',
        'numeric' => ':Attribute ei tohi olla suurem kui :max.',
        'string'  => ':Attribute ei tohi olla suurem kui :max tähemärki.',
    ],
    'max_digits'           => ':Attribute ei tohi sisaldada rohkem kui :max numbrit.',
    'mimes'                => ':Attribute peab olema :values tüüpi.',
    'mimetypes'            => ':Attribute peab olema :values tüüpi.',
    'min'                  => [
        'array'   => ':Attribute peab olema vähemalt :min kirjet.',
        'file'    => ':Attribute peab olema vähemalt :min kilobaiti.',
        'numeric' => ':Attribute peab olema vähemalt :min.',
        'string'  => ':Attribute peab olema vähemalt :min tähemärki.',
    ],
    'min_digits'           => ':Attribute peab sisaldama vähemalt :min numbrit.',
    'missing'              => 'Väli :attribute peab olema puudu.',
    'missing_if'           => 'Väli :attribute peab puuduma, kui :other on :value.',
    'missing_unless'       => 'Välja :attribute peab puuduma, välja arvatud juhul, kui :other on :value.',
    'missing_with'         => 'Väli :attribute peab puuduma, kui :values on olemas.',
    'missing_with_all'     => 'Väli :attribute peab puuduma, kui :values on olemas.',
    'multiple_of'          => ':Attribute peab olema :value Kordne',
    'not_in'               => 'Valitud :attribute on vigane.',
    'not_regex'            => ':Attribute vorming on vale',
    'numeric'              => ':Attribute peab olema number.',
    'password'             => [
        'letters'       => ':Attribute peab sisaldama vähemalt ühte tähte.',
        'mixed'         => ':Attribute peab sisaldama vähemalt ühte suur- ja ühte väiketähte.',
        'numbers'       => ':Attribute peab sisaldama vähemalt ühte numbrit.',
        'symbols'       => ':Attribute peab sisaldama vähemalt ühte sümbolit.',
        'uncompromised' => 'Antud :attribute on ilmunud andmelekkesse. Valige mõni muu :attribute.',
    ],
    'present'              => ':Attribute väli peab olema esindatud.',
    'prohibited'           => ':Attribute väli on keelatud.',
    'prohibited_if'        => ':Attribute väli on keelatud, kui :other on :value.',
    'prohibited_unless'    => ':Attribute väli on keelatud, välja arvatud juhul, kui :other on :values.',
    'prohibits'            => 'Väli :attribute keelab :other kohaloleku.',
    'regex'                => ':Attribute vorming on vigane.',
    'required'             => ':Attribute väli on nõutud.',
    'required_array_keys'  => 'Väljal :attribute peavad olema kirjed: :values.',
    'required_if'          => ':Attribute väli on nõutud, kui :other on :value.',
    'required_if_accepted' => 'Väli :attribute on kohustuslik, kui aktsepteeritakse :other.',
    'required_unless'      => ':Attribute väli on nõutud, välja arvatud, kui :other on :values.',
    'required_with'        => ':Attribute väli on nõutud, kui :values on esindatud.',
    'required_with_all'    => ':Attribute väli on nõutud, kui :values on esindatud.',
    'required_without'     => ':Attribute väli on nõutud, kui :values ei ole esindatud.',
    'required_without_all' => ':Attribute väli on nõutud, kui ükski :values pole esindatud.',
    'same'                 => ':Attribute ja :other peavad sobima.',
    'size'                 => [
        'array'   => ':Attribute peab sisaldama :size kirjet.',
        'file'    => ':Attribute peab olema :size kilobaiti.',
        'numeric' => ':Attribute peab olema :size.',
        'string'  => ':Attribute peab olema :size tähemärki.',
    ],
    'starts_with'          => ':Attribute peab algama ühega järgmistest: :values',
    'string'               => ':Attribute peab olema string.',
    'timezone'             => ':Attribute peab olema kehtiv tsoon.',
    'ulid'                 => ':Attribute peab olema kehtiv ULID.',
    'unique'               => ':Attribute on juba hõivatud.',
    'uploaded'             => ':Attribute ei õnnestunud laadida.',
    'uppercase'            => ':Attribute peab olema suurtäht.',
    'url'                  => ':Attribute vorming on vigane.',
    'uuid'                 => ':Attribute peab olema õige UUID',
    'attributes'           => [
        'address'                  => 'aadress',
        'age'                      => 'vanus',
        'amount'                   => 'summa',
        'area'                     => 'ala',
        'available'                => 'saadaval',
        'birthday'                 => 'sünnipäev',
        'body'                     => 'keha',
        'city'                     => 'linn',
        'content'                  => 'sisu',
        'country'                  => 'riik',
        'created_at'               => 'loodud kl',
        'creator'                  => 'looja',
        'current_password'         => 'Praegune salasõna',
        'date'                     => 'kuupäeva',
        'date_of_birth'            => 'sünnikuupäev',
        'day'                      => 'päeval',
        'deleted_at'               => 'kustutatud kell',
        'description'              => 'kirjeldus',
        'district'                 => 'ringkond',
        'duration'                 => 'kestus',
        'email'                    => 'meili',
        'excerpt'                  => 'väljavõte',
        'filter'                   => 'filter',
        'first_name'               => 'eesnimi',
        'gender'                   => 'sugu',
        'group'                    => 'Grupp',
        'hour'                     => 'tund',
        'image'                    => 'pilt',
        'last_name'                => 'perekonnanimi',
        'lesson'                   => 'õppetund',
        'line_address_1'           => 'liini aadress 1',
        'line_address_2'           => 'liini aadress 2',
        'message'                  => 'sõnum',
        'middle_name'              => 'keskmine nimi',
        'minute'                   => 'minut',
        'mobile'                   => 'mobiilne',
        'month'                    => 'kuu',
        'name'                     => 'nimi',
        'national_code'            => 'riiklik kood',
        'number'                   => 'number',
        'password'                 => 'parool',
        'password_confirmation'    => 'Salasõna kinnitamine',
        'phone'                    => 'telefon',
        'photo'                    => 'foto',
        'postal_code'              => 'Postiindeks',
        'price'                    => 'hind',
        'province'                 => 'provints',
        'recaptcha_response_field' => 'recaptcha vastuse väli',
        'remember'                 => 'mäleta',
        'restored_at'              => 'taastatud kl',
        'result_text_under_image'  => 'tulemuse tekst pildi all',
        'role'                     => 'rolli',
        'second'                   => 'teiseks',
        'sex'                      => 'seks',
        'short_text'               => 'lühitekst',
        'size'                     => 'suurus',
        'state'                    => 'olek',
        'street'                   => 'tänav',
        'student'                  => 'õpilane',
        'subject'                  => 'teema',
        'teacher'                  => 'õpetaja',
        'terms'                    => 'tingimustele',
        'test_description'         => 'testi kirjeldus',
        'test_locale'              => 'keel',
        'test_name'                => 'testi nimi',
        'text'                     => 'tekst',
        'time'                     => 'aega',
        'title'                    => 'pealkiri',
        'updated_at'               => 'uuendatud kell',
        'username'                 => 'kasutajanimi',
        'year'                     => 'aastal',
    ],
];
