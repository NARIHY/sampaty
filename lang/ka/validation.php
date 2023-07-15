<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute უნდა იყოს მონიშნული.',
    'accepted_if'          => 'ველი :attribute უნდა იყოს მიღებული, როცა :other შეესაბამება :value.',
    'active_url'           => ':Attribute არ არის სწორი ბმული.',
    'after'                => ':Attribute უნდა იყოს თარიღი :date-ის შემდეგ.',
    'after_or_equal'       => ':Attribute უნდა იყოს თარიღი :date-ის შემდეგ ან მისი ტოლი.',
    'alpha'                => ':Attribute უნდა შეიცავდეს მხოლოდ ასოებს.',
    'alpha_dash'           => ':Attribute უნდა შეიცავდეს მხოლოდ ასოებს, რიცხვებს, ტირეებს და ქვეტირეებს.',
    'alpha_num'            => ':Attribute უნდა შეიცავდეს მხოლოდ ასოებს და რიცხვებს.',
    'array'                => ':Attribute უნდა იყოს მასივი.',
    'ascii'                => ':Attribute უნდა შეიცავდეს მხოლოდ ერთ ბაიტიან ალფაციფრულ სიმბოლოებს და სიმბოლოებს.',
    'before'               => ':Attribute უნდა იყოს თარიღი :date-მდე.',
    'before_or_equal'      => ':Attribute უნდა იყოს თარიღი :date-მდე ან მისი ტოლი.',
    'between'              => [
        'array'   => ':Attribute-ის რაოდენობა უნდა იყოს :min-დან :max-მდე.',
        'file'    => ':Attribute უნდა იყოს :min-სა და :max კილობაიტს შორის.',
        'numeric' => ':Attribute უნდა იყოს :min-სა და :max-ს შორის.',
        'string'  => ':Attribute უნდა იყოს :min-სა და :max სიმბოლოს შორის.',
    ],
    'boolean'              => ':Attribute ველი უნდა იყოს true ან false.',
    'can'                  => ':Attribute ველი შეიცავს არაავტორიზებულ მნიშვნელობას.',
    'confirmed'            => ':Attribute-ის დადასტურება არ ემთხვევა.',
    'current_password'     => 'ველი :attribute შეიცავს არასწორ პაროლს.',
    'date'                 => ':Attribute შეიცავს თარიღის არასწორ ფორმატს.',
    'date_equals'          => ':Attribute უნდა იყოს :date-ის ტოლი თარიღი.',
    'date_format'          => ':Attribute არ ემთხვევა თარიღის ფორმატს: :format.',
    'decimal'              => ':Attribute-ს უნდა ჰქონდეს :decimal ათობითი ადგილი.',
    'declined'             => ':Attribute უნდა უარი თქვას.',
    'declined_if'          => ':Attribute უნდა იყოს უარყოფილი, როდესაც :other არის :value.',
    'different'            => ':Attribute და :other არ უნდა ემთხვეოდეს ერთმანეთს.',
    'digits'               => ':Attribute უნდა შედგებოდეს :digits ციფრისგან.',
    'digits_between'       => ':Attribute უნდა შედგებოდეს :min-დან :max ციფრამდე.',
    'dimensions'           => ':Attribute შეიცავს სურათის არასწორ ზომებს.',
    'distinct'             => ':Attribute-ის ველს აქვს დუბლირებული მნიშვნელობა.',
    'doesnt_end_with'      => ':Attribute არ შეიძლება დასრულდეს ქვემოთ ჩამოთვლილიდან ერთით: :values.',
    'doesnt_start_with'    => ':Attribute არ შეიძლება დაიწყოს რომელიმე ქვემოთ ჩამოთვლილიდან: :values.',
    'email'                => ':Attribute უნდა იყოს სწორი ელ.ფოსტა.',
    'ends_with'            => ':Attribute უნდა ბოლოვდებოდეს შემდეგიდან ერთ-ერთით: :values.',
    'enum'                 => 'არჩეული :attribute არასწორია.',
    'exists'               => 'არჩეული :attribute არასწორია.',
    'file'                 => ':Attribute უნდა იყოს ფაილი.',
    'filled'               => ':Attribute აუცილებელია.',
    'gt'                   => [
        'array'   => ':Attribute უნდა შეიცავდეს :value ელემენტზე მეტს.',
        'file'    => ':Attribute უნდა იყოს :value კილობაიტზე მეტი.',
        'numeric' => ':Attribute უნდა იყოს :value-ზე მეტი.',
        'string'  => ':Attribute უნდა შეიცავდეს :value სიმბოლოზე მეტს.',
    ],
    'gte'                  => [
        'array'   => ':Attribute უნდა შეიცავდეს მინიმუმ :value ელემენტს.',
        'file'    => ':Attribute უნდა იყოს მინიმუმ :value კილობაიტი.',
        'numeric' => ':Attribute უნდა იყოს მინიმუმ :value.',
        'string'  => ':Attribute უნდა შეიცავდეს მინიმუმ :value სიმბოლოს.',
    ],
    'image'                => ':Attribute უნდა იყოს სურათი.',
    'in'                   => 'არჩეული :attribute არასწორია.',
    'in_array'             => ':Attribute ველი არ არსებობს :other-ში.',
    'integer'              => ':Attribute უნდა იყოს მთელი რიცხვი.',
    'ip'                   => ':Attribute უნდა იყოს ვალიდური IP მისამართი.',
    'ipv4'                 => ':Attribute უნდა იყოს ვალიდური IPv4 მისამართი.',
    'ipv6'                 => ':Attribute უნდა იყოს ვალიდური IPv6 მისამართი.',
    'json'                 => ':Attribute უნდა იყოს სწორი JSON ტიპის.',
    'lowercase'            => ':Attribute უნდა იყოს პატარა.',
    'lt'                   => [
        'array'   => ':Attribute უნდა შეიცავდეს :value ელემენტზე ნაკლებს.',
        'file'    => ':Attribute უნდა იყოს :value კილობაიტზე ნაკლები.',
        'numeric' => ':Attribute უნდა იყოს :value-ზე ნაკლები.',
        'string'  => ':Attribute უნდა შეიცავდეს :value სიმბოლოზე ნაკლებს.',
    ],
    'lte'                  => [
        'array'   => ':Attribute უნდა შეიცავდეს მაქსიმუმ :value ელემენტს.',
        'file'    => ':Attribute უნდა იყოს მაქსიმუმ :value კილობაიტი.',
        'numeric' => ':Attribute უნდა იყოს მაქსიმუმ :value.',
        'string'  => ':Attribute უნდა შეიცავდეს მაქსიმუმ :value სიმბოლოს.',
    ],
    'mac_address'          => ':Attribute უნდა იყოს სწორი MAC მისამართი.',
    'max'                  => [
        'array'   => ':Attribute-ს არ უნდა ჰქონდეს :max ელემენტზე მეტი.',
        'file'    => ':Attribute არ უნდა აღემატებოდეს :max კილობაიტს.',
        'numeric' => ':Attribute არ უნდა აღემატებოდეს :max-ს.',
        'string'  => ':Attribute არ უნდა აღემატებოდეს :max სიმბოლოს.',
    ],
    'max_digits'           => ':Attribute არ უნდა იყოს :max ციფრზე მეტი.',
    'mimes'                => ':Attribute უნდა იყოს შემდეგი ფაილური ტიპის: :values.',
    'mimetypes'            => ':Attribute უნდა იყოს შემდეგი ფაილური ტიპის: :values.',
    'min'                  => [
        'array'   => ':Attribute-ს უნდა ჰქონდეს მინიმუმ :min ელემენტი.',
        'file'    => ':Attribute უნდა იყოს მინიმუმ :min კილობაიტი.',
        'numeric' => ':Attribute უნდა იყოს მინიმუმ :min.',
        'string'  => ':Attribute უნდა შეიცავდეს მინიმუმ :min სიმბოლოს.',
    ],
    'min_digits'           => ':Attribute-ს უნდა ჰქონდეს მინიმუმ :min ციფრი.',
    'missing'              => ':Attribute ველი უნდა იყოს დაკარგული.',
    'missing_if'           => ':Attribute ველი უნდა გამოტოვოთ, როცა :other არის :value.',
    'missing_unless'       => ':Attribute ველი უნდა გამოტოვოთ, თუ :other არ არის :value.',
    'missing_with'         => ':Attribute ველი უნდა გამოტოვოთ, როდესაც :values არის.',
    'missing_with_all'     => ':Attribute ველი უნდა გამოტოვოთ, როდესაც :values არის.',
    'multiple_of'          => ':Attribute უნდა იყოს :value-ს ჯერადი',
    'not_in'               => 'არჩეული :attribute არასწორია.',
    'not_regex'            => ':Attribute-ის ფორმატი არასწორია.',
    'numeric'              => ':Attribute უნდა იყოს რიცხვი.',
    'password'             => [
        'letters'       => ':Attribute უნდა შეიცავდეს მინიმუმ ერთ ასოს.',
        'mixed'         => ':Attribute უნდა შეიცავდეს მინიმუმ ერთ დიდ და ერთ პატარა ასოს.',
        'numbers'       => ':Attribute უნდა შეიცავდეს მინიმუმ ერთ რიცხვს.',
        'symbols'       => ':Attribute უნდა შეიცავდეს მინიმუმ ერთ სიმბოლოს.',
        'uncompromised' => 'მოცემული :attribute გამოჩნდა მონაცემთა გაჟონვაში. გთხოვთ, აირჩიოთ სხვა :attribute.',
    ],
    'present'              => ':Attribute-ის ველი უნდა არსებობდეს, თუნდაც ცარიელი.',
    'prohibited'           => ':Attribute სფეროში აკრძალულია.',
    'prohibited_if'        => ':Attribute სფეროში აკრძალულია, როდესაც :other არის :value.',
    'prohibited_unless'    => ':Attribute სფეროში აკრძალულია თუ :other არის :values.',
    'prohibits'            => ':Attribute ველში არ შეიძლება იყოს :other.',
    'regex'                => ':Attribute-ის ფორმატი არასწორია.',
    'required'             => ':Attribute-ის ველი აუცილებელია.',
    'required_array_keys'  => ':Attribute ველი უნდა შეიცავდეს ჩანაწერებს: :values.',
    'required_if'          => ':Attribute-ის ველი აუცილებელია, თუ :other-ის მნიშვნელობა ემთხვევა :value-ს.',
    'required_if_accepted' => ':Attribute ველი აუცილებელია, როცა :other მიიღება.',
    'required_unless'      => ':Attribute-ის ველი აუცილებელია, თუ :values არ შეიცავს :other-ს.',
    'required_with'        => ':Attribute-ის ველი აუცილებელია, თუ :values მითითებულია.',
    'required_with_all'    => ':Attribute-ის ველი აუცილებელია, თუ :values მითითებულია.',
    'required_without'     => ':Attribute-ის ველი აუცილებელია, თუ :values არ არის მითითებული.',
    'required_without_all' => ':Attribute-ის ველი აუცილებელია, თუ არცერთი :values არ არის მითითებული.',
    'same'                 => ':Attribute და :other უნდა ემთხვეოდეს ერთმანეთს.',
    'size'                 => [
        'array'   => ':Attribute უნდა შეიცავდეს :size ელემენტს.',
        'file'    => ':Attribute უნდა იყოს :size კილობაიტი.',
        'numeric' => ':Attribute უნდა იყოს :size.',
        'string'  => ':Attribute უნდა შედგებოდეს :size სიმბოლოსგან.',
    ],
    'starts_with'          => ':Attribute უნდა იწყებოდეს შემდეგიდან ერთ-ერთით: :values.',
    'string'               => ':Attribute უნდა იყოს ტექსტი.',
    'timezone'             => ':Attribute უნდა იყოს სასაათო სარტყელი.',
    'ulid'                 => ':Attribute უნდა იყოს მოქმედი ULID.',
    'unique'               => 'ასეთი :attribute უკვე არსებობს.',
    'uploaded'             => ':Attribute-ის ატვირთვა ვერ მოხერხდა.',
    'uppercase'            => ':Attribute უნდა იყოს დიდი.',
    'url'                  => ':Attribute-ის ფორმატი არასწორია.',
    'uuid'                 => ':Attribute უნდა იყოს ვალიდური UUID.',
];
