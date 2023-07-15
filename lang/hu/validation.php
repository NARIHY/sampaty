<?php

declare(strict_types=1);

return [
    'accepted'             => 'A(z) :attribute el kell legyen fogadva!',
    'accepted_if'          => 'A :attribute-at el kell fogadni, amikor a :other az :value.',
    'active_url'           => 'A(z) :attribute nem érvényes url!',
    'after'                => 'A(z) :attribute :date utáni dátum kell, hogy legyen!',
    'after_or_equal'       => 'A(z) :attribute nem lehet korábbi dátum, mint :date!',
    'alpha'                => 'A(z) :attribute kizárólag betűket tartalmazhat!',
    'alpha_dash'           => 'A(z) :attribute kizárólag betűket, számokat és kötőjeleket tartalmazhat!',
    'alpha_num'            => 'A(z) :attribute kizárólag betűket és számokat tartalmazhat!',
    'array'                => 'A(z) :attribute egy tömb kell, hogy legyen!',
    'ascii'                => 'A :attribute csak egybájtos alfanumerikus karaktereket és szimbólumokat tartalmazhat.',
    'before'               => 'A(z) :attribute :date előtti dátum kell, hogy legyen!',
    'before_or_equal'      => 'A(z) :attribute nem lehet későbbi dátum, mint :date!',
    'between'              => [
        'array'   => 'A(z) :attribute :min - :max közötti elemet kell, hogy tartalmazzon!',
        'file'    => 'A(z) :attribute mérete :min és :max kilobájt között kell, hogy legyen!',
        'numeric' => 'A(z) :attribute :min és :max közötti szám kell, hogy legyen!',
        'string'  => 'A(z) :attribute hossza :min és :max karakter között kell, hogy legyen!',
    ],
    'boolean'              => 'A(z) :attribute mező csak true vagy false értéket kaphat!',
    'can'                  => 'A :attribute-es mező nem engedélyezett értéket tartalmaz.',
    'confirmed'            => 'A(z) :attribute nem egyezik a megerősítéssel.',
    'current_password'     => 'A jelszó helytelen.',
    'date'                 => 'A(z) :attribute nem érvényes dátum.',
    'date_equals'          => ':Attribute meg kell egyezzen a következővel: :date.',
    'date_format'          => 'A(z) :attribute nem egyezik az alábbi dátum formátummal :format!',
    'decimal'              => 'A :attribute-nak :decimal tizedesjegynek kell lennie.',
    'declined'             => 'A :attribute-at el kell utasítani.',
    'declined_if'          => 'A :attribute-at el kell utasítani, ha a :other az :value.',
    'different'            => 'A(z) :attribute és :other értékei különbözőek kell, hogy legyenek!',
    'digits'               => 'A(z) :attribute :digits számjegyű kell, hogy legyen!',
    'digits_between'       => 'A(z) :attribute értéke :min és :max közötti számjegy lehet!',
    'dimensions'           => 'A(z) :attribute felbontása nem megfelelő.',
    'distinct'             => 'A(z) :attribute értékének egyedinek kell lennie!',
    'doesnt_end_with'      => 'A :attribute nem végződhet a következők egyikével: :values.',
    'doesnt_start_with'    => 'A :attribute nem kezdődhet a következők egyikével: :values.',
    'email'                => 'A(z) :attribute nem érvényes email formátum.',
    'ends_with'            => 'A(z) :attribute a következővel kell végződjön: :values',
    'enum'                 => 'A kiválasztott :attribute érvénytelen.',
    'exists'               => 'A kiválasztott :attribute érvénytelen.',
    'file'                 => 'A(z) :attribute fájl kell, hogy legyen!',
    'filled'               => 'A(z) :attribute megadása kötelező!',
    'gt'                   => [
        'array'   => 'A(z) :attribute több, mint :value elemet kell, hogy tartalmazzon.',
        'file'    => 'A(z) :attribute mérete nagyobb kell, hogy legyen, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute nagyobb kell, hogy legyen, mint :value!',
        'string'  => 'A(z) :attribute hosszabb kell, hogy legyen, mint :value karakter.',
    ],
    'gte'                  => [
        'array'   => 'A(z) :attribute legalább :value elemet kell, hogy tartalmazzon.',
        'file'    => 'A(z) :attribute mérete nem lehet kevesebb, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute nagyobb vagy egyenlő kell, hogy legyen, mint :value!',
        'string'  => 'A(z) :attribute hossza nem lehet kevesebb, mint :value karakter.',
    ],
    'image'                => 'A(z) :attribute képfájl kell, hogy legyen!',
    'in'                   => 'A kiválasztott :attribute érvénytelen.',
    'in_array'             => 'A(z) :attribute értéke nem található a(z) :other értékek között.',
    'integer'              => 'A(z) :attribute értéke szám kell, hogy legyen!',
    'ip'                   => 'A(z) :attribute érvényes IP cím kell, hogy legyen!',
    'ipv4'                 => 'A(z) :attribute érvényes IPv4 cím kell, hogy legyen!',
    'ipv6'                 => 'A(z) :attribute érvényes IPv6 cím kell, hogy legyen!',
    'json'                 => 'A(z) :attribute érvényes JSON szöveg kell, hogy legyen!',
    'lowercase'            => 'A :attribute-nak kisbetűnek kell lennie.',
    'lt'                   => [
        'array'   => 'A(z) :attribute kevesebb, mint :value elemet kell, hogy tartalmazzon.',
        'file'    => 'A(z) :attribute mérete kisebb kell, hogy legyen, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute kisebb kell, hogy legyen, mint :value!',
        'string'  => 'A(z) :attribute rövidebb kell, hogy legyen, mint :value karakter.',
    ],
    'lte'                  => [
        'array'   => 'A(z) :attribute legfeljebb :value elemet kell, hogy tartalmazzon.',
        'file'    => 'A(z) :attribute mérete nem lehet több, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute kisebb vagy egyenlő kell, hogy legyen, mint :value!',
        'string'  => 'A(z) :attribute hossza nem lehet több, mint :value karakter.',
    ],
    'mac_address'          => 'A :attribute-nak érvényes MAC-címnek kell lennie.',
    'max'                  => [
        'array'   => 'A(z) :attribute legfeljebb :max elemet kell, hogy tartalmazzon.',
        'file'    => 'A(z) :attribute mérete nem lehet több, mint :max kilobájt.',
        'numeric' => 'A(z) :attribute értéke nem lehet nagyobb, mint :max!',
        'string'  => 'A(z) :attribute hossza nem lehet több, mint :max karakter.',
    ],
    'max_digits'           => 'A :attribute nem lehet több :max számjegynél.',
    'mimes'                => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'mimetypes'            => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'min'                  => [
        'array'   => 'A(z) :attribute legalább :min elemet kell, hogy tartalmazzon.',
        'file'    => 'A(z) :attribute mérete nem lehet kevesebb, mint :min kilobájt.',
        'numeric' => 'A(z) :attribute értéke nem lehet kisebb, mint :min!',
        'string'  => 'A(z) :attribute hossza nem lehet kevesebb, mint :min karakter.',
    ],
    'min_digits'           => 'A :attribute-nak legalább :min számjegyből kell állnia.',
    'missing'              => 'A :attribute-as mezőnek hiányoznia kell.',
    'missing_if'           => 'A :attribute-as mezőnek hiányoznia kell, ha a :other az :value.',
    'missing_unless'       => 'A :attribute-as mezőnek hiányoznia kell, hacsak a :other nem :value.',
    'missing_with'         => 'A :attribute-as mezőnek hiányoznia kell, ha a :values szerepel.',
    'missing_with_all'     => 'A :attribute mezőnek hiányoznia kell, ha :values van jelen.',
    'multiple_of'          => 'A :attribute :value többszörösének kell lennie',
    'not_in'               => 'A(z) :attribute értéke érvénytelen.',
    'not_regex'            => 'A(z) :attribute formátuma érvénytelen.',
    'numeric'              => 'A(z) :attribute szám kell, hogy legyen!',
    'password'             => [
        'letters'       => 'A :attribute-nak legalább egy betűt kell tartalmaznia.',
        'mixed'         => 'A :attribute-nak legalább egy nagybetűt és egy kisbetűt kell tartalmaznia.',
        'numbers'       => 'A :attribute-nak legalább egy számot kell tartalmaznia.',
        'symbols'       => 'A :attribute-nak legalább egy szimbólumot kell tartalmaznia.',
        'uncompromised' => 'Adatszivárgásban jelent meg az adott :attribute. Kérjük, válasszon másik :attribute-at.',
    ],
    'present'              => 'A(z) :attribute mező nem található!',
    'prohibited'           => 'A :attribute mező tilos.',
    'prohibited_if'        => 'A :attribute mező tilos, ha :other :value.',
    'prohibited_unless'    => 'A :attribute mező tilos, kivéve, ha :other a :values.',
    'prohibits'            => 'A :attribute mező tiltja, hogy :other jelen legyen.',
    'regex'                => 'A(z) :attribute formátuma érvénytelen.',
    'required'             => 'A(z) :attribute megadása kötelező!',
    'required_array_keys'  => 'A :attribute-as mezőnek a következő bejegyzéseket kell tartalmaznia: :values.',
    'required_if'          => 'A(z) :attribute megadása kötelező, ha a(z) :other értéke :value!',
    'required_if_accepted' => 'A :attribute-as mező kitöltése kötelező, ha elfogadja a :other-at.',
    'required_unless'      => 'A(z) :attribute megadása kötelező, ha a(z) :other értéke nem :values!',
    'required_with'        => 'A(z) :attribute megadása kötelező, ha a(z) :values érték létezik.',
    'required_with_all'    => 'A(z) :attribute megadása kötelező, ha a(z) :values értékek léteznek.',
    'required_without'     => 'A(z) :attribute megadása kötelező, ha a(z) :values érték nem létezik.',
    'required_without_all' => 'A(z) :attribute megadása kötelező, ha egyik :values érték sem létezik.',
    'same'                 => 'A(z) :attribute és :other mezőknek egyezniük kell!',
    'size'                 => [
        'array'   => 'A(z) :attribute :size elemet kell tartalmazzon!',
        'file'    => 'A(z) :attribute mérete :size kilobájt kell, hogy legyen!',
        'numeric' => 'A(z) :attribute értéke :size kell, hogy legyen!',
        'string'  => 'A(z) :attribute hossza :size karakter kell, hogy legyen!',
    ],
    'starts_with'          => ':Attribute a következővel kell kezdődjön: :values',
    'string'               => 'A(z) :attribute szöveg kell, hogy legyen.',
    'timezone'             => 'A(z) :attribute nem létező időzona.',
    'ulid'                 => 'A :attribute-nak érvényes ULID-nek kell lennie.',
    'unique'               => 'A(z) :attribute már foglalt.',
    'uploaded'             => 'A(z) :attribute feltöltése sikertelen.',
    'uppercase'            => 'A :attribute-nak nagybetűnek kell lennie.',
    'url'                  => 'A(z) :attribute érvénytelen link.',
    'uuid'                 => ':Attribute érvényes UUID-val kell rendelkezzen.',
];
