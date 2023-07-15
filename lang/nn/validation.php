<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute må aksepterast.',
    'accepted_if'          => 'De :attribute må godtas når :other er :value.',
    'active_url'           => ':Attribute er ikkje ein gyldig URL.',
    'after'                => ':Attribute må vere ein dato etter :date.',
    'after_or_equal'       => ':Attribute må vere ein dato etter eller lik :date.',
    'alpha'                => ':Attribute må berre vere av bokstavar.',
    'alpha_dash'           => ':Attribute må berre vere av bokstavar, tal og bindestrekar.',
    'alpha_num'            => ':Attribute må berre vere av bokstavar og tal.',
    'array'                => ':Attribute må vere ei matrise.',
    'ascii'                => ':Attribute må bare inneholde enkeltbyte alfanumeriske tegn og symboler.',
    'before'               => ':Attribute må vere ein dato før :date.',
    'before_or_equal'      => ':Attribute må vere ein dato før eller lik :date.',
    'between'              => [
        'array'   => ':Attribute må ha mellom :min - :max element.',
        'file'    => ':Attribute skal vere mellom :min - :max kilobytes.',
        'numeric' => ':Attribute skal vere mellom :min - :max.',
        'string'  => ':Attribute skal vere mellom :min - :max teikn.',
    ],
    'boolean'              => ':Attribute må vere sann eller usann.',
    'can'                  => ':Attribute-feltet inneholder en uautorisert verdi.',
    'confirmed'            => ':Attribute er ikkje likt feltet for stadfesting.',
    'current_password'     => 'Passordet er feil.',
    'date'                 => ':Attribute er ikkje ein gyldig dato.',
    'date_equals'          => ':Attribute må vere ein dato lik :date.',
    'date_format'          => ':Attribute er ikkje likt formatet :format.',
    'decimal'              => 'De :attribute må ha :decimal desimaler.',
    'declined'             => 'De :attribute må avvises.',
    'declined_if'          => 'De :attribute må avvises når :other er :value.',
    'different'            => ':Attribute og :other skal vere ulike.',
    'digits'               => ':Attribute skal ha :digits siffer.',
    'digits_between'       => ':Attribute skal vere mellom :min og :max siffer.',
    'dimensions'           => ':Attribute har ikkje gyldige bildedimensjonar.',
    'distinct'             => ':Attribute har ein duplikatverdi.',
    'doesnt_end_with'      => 'De :attribute slutter kanskje ikke med ett av følgende: :values.',
    'doesnt_start_with'    => 'De :attribute starter kanskje ikke med ett av følgende: :values.',
    'email'                => ':Attribute format er ugyldig.',
    'ends_with'            => ':Attribute må slutte på ein av følgande: :values',
    'enum'                 => 'Den valgte :attribute er ugyldig.',
    'exists'               => 'Det valde :attribute er ugyldig.',
    'file'                 => ':Attribute må vere ei fil.',
    'filled'               => ':Attribute må fyllast ut.',
    'gt'                   => [
        'array'   => ':Attribute må vere minst :value element.',
        'file'    => ':Attribute må vere større enn :value kilobyte.',
        'numeric' => ':Attribute må vere større enn :value.',
        'string'  => ':Attribute må vere lengre enn :value teikn.',
    ],
    'gte'                  => [
        'array'   => ':Attribute må ha :value element eller meir.',
        'file'    => ':Attribute må vere større enn eller lik :value kilobyte.',
        'numeric' => ':Attribute må vere større enn eller lik :value.',
        'string'  => ':Attribute må vere lengre enn eller lik :value teikn.',
    ],
    'image'                => ':Attribute skal vere eit bilete.',
    'in'                   => 'Det valde :attribute er ugyldig.',
    'in_array'             => ':Attribute eksisterer ikkje i :other.',
    'integer'              => ':Attribute skal vere eit heiltal.',
    'ip'                   => ':Attribute skal vere ei gyldig IP-adresse.',
    'ipv4'                 => ':Attribute skal vere ei gyldig IPv4-adresse.',
    'ipv6'                 => ':Attribute skal vere ei gyldig IPv6-adresse.',
    'json'                 => ':Attribute må vere på JSON-format.',
    'lowercase'            => ':Attribute må være små bokstaver.',
    'lt'                   => [
        'array'   => ':Attribute må ha færre enn :value element.',
        'file'    => ':Attribute må vere mindre enn :value kilobyte.',
        'numeric' => ':Attribute må vere mindre enn :value.',
        'string'  => ':Attribute må vere kortare enn :value teikn.',
    ],
    'lte'                  => [
        'array'   => ':Attribute må ikkje ha fleire enn :value element.',
        'file'    => ':Attribute må vere mindre enn eller lik :value kilobyte.',
        'numeric' => ':Attribute må vere mindre enn eller lik :value.',
        'string'  => ':Attribute må vere kortare enn eller lik :value teikn.',
    ],
    'mac_address'          => ':Attribute må være en gyldig MAC-adresse.',
    'max'                  => [
        'array'   => ':Attribute skal ikkje ha fleire enn :max element.',
        'file'    => ':Attribute skal vere mindre enn :max kilobytes.',
        'numeric' => ':Attribute skal vere mindre enn :max.',
        'string'  => ':Attribute skal vere kortare enn :max teikn.',
    ],
    'max_digits'           => 'De :attribute må ikke ha mer enn :max sifre.',
    'mimes'                => ':Attribute skal vere ei fil av typen: :values.',
    'mimetypes'            => ':Attribute skal vere ei fil av typen: :values.',
    'min'                  => [
        'array'   => ':Attribute må vere minst :min element.',
        'file'    => ':Attribute skal vere større enn :min kilobyte.',
        'numeric' => ':Attribute skal vere større enn :min.',
        'string'  => ':Attribute skal vere lengre enn :min teikn.',
    ],
    'min_digits'           => 'De :attribute må ha minst :min sifre.',
    'missing'              => ':Attribute-feltet må mangle.',
    'missing_if'           => ':Attribute-feltet må mangle når :other er :value.',
    'missing_unless'       => ':Attribute-feltet må mangle med mindre :other er :value.',
    'missing_with'         => ':Attribute-feltet må mangle når :values er tilstede.',
    'missing_with_all'     => ':Attribute-feltet må mangle når :values er tilstede.',
    'multiple_of'          => ':Attribute må være et multiplum av :value.',
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'not_regex'            => 'Formatet på :attribute er ugyldig.',
    'numeric'              => ':Attribute skal vere eit tal.',
    'password'             => [
        'letters'       => 'De :attribute må inneholde minst én bokstav.',
        'mixed'         => ':Attribute må inneholde minst én stor og én liten bokstav.',
        'numbers'       => 'De :attribute må inneholde minst ett tall.',
        'symbols'       => 'De :attribute må inneholde minst ett symbol.',
        'uncompromised' => 'De oppgitte :attribute har dukket opp i en datalekkasje. Velg en annen :attribute.',
    ],
    'present'              => ':Attribute må vere til stades.',
    'prohibited'           => ':Attribute-feltet er forbudt.',
    'prohibited_if'        => ':Attribute-feltet er forbudt når :other er :value.',
    'prohibited_unless'    => ':Attribute-feltet er forbudt med mindre :other er i :values.',
    'prohibits'            => ':Attribute-feltet forbyr :other å være tilstede.',
    'regex'                => 'Formatet på :attribute er ugyldig.',
    'required'             => ':Attribute må fyllast ut.',
    'required_array_keys'  => ':Attribute-feltet må inneholde oppføringer for: :values.',
    'required_if'          => ':Attribute må fyllast ut når :other er :value.',
    'required_if_accepted' => ':Attribute-feltet er obligatorisk når :other er akseptert.',
    'required_unless'      => ':Attribute må vere til stades viss ikkje :other finnas hjå verdiene :values.',
    'required_with'        => ':Attribute må fyllast ut når :values er fylt ut.',
    'required_with_all'    => ':Attribute må vere til stades når :values er oppgjeve.',
    'required_without'     => ':Attribute må fyllast ut når :values ikkje er fylt ut.',
    'required_without_all' => ':Attribute må vere til stades når inga av :values er oppgjeve.',
    'same'                 => ':Attribute og :other må vere like.',
    'size'                 => [
        'array'   => ':Attribute må innehalde :size element.',
        'file'    => ':Attribute må vere :size kilobytes.',
        'numeric' => ':Attribute må vere :size.',
        'string'  => ':Attribute må vere :size teikn lang.',
    ],
    'starts_with'          => ':Attribute må starte med ein av følgande: :values',
    'string'               => ':Attribute må vere ein tekststreng.',
    'timezone'             => ':Attribute må vere ei gyldig tidssone.',
    'ulid'                 => ':Attribute må være en gyldig ULID.',
    'unique'               => ':Attribute er allereie i bruk.',
    'uploaded'             => ':Attribute kunne ikkje lastast opp.',
    'uppercase'            => ':Attribute må være store bokstaver.',
    'url'                  => 'Formatet på :attribute er ugyldig.',
    'uuid'                 => ':Attribute må vere ein gyldig UUID.',
];