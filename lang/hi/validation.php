<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute को स्वीकार करना आवश्यक है।',
    'accepted_if' => ':attribute को स्वीकार करना आवश्यक है जब :other :value हो।',
    'active_url' => ':attribute एक मान्य URL नहीं है।',
    'after' => ':attribute को :date के बाद की तारीख होनी चाहिए।',
    'after_or_equal' => ':attribute को :date के बाद या उसके बराबर की तारीख होनी चाहिए।',
    'alpha' => ':attribute में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute में केवल अक्षर, संख्या, डैश और अंडरस्कोर हो सकते हैं।',
    'alpha_num' => ':attribute में केवल अक्षर और संख्या हो सकते हैं।',
    'array' => ':attribute एक सरणी होनी चाहिए।',
    'before' => ':attribute को :date से पहले की तारीख होनी चाहिए।',
    'before_or_equal' => ':attribute को :date से पहले या उसके बराबर की तारीख होनी चाहिए।',
    'between' => [
        'array' => ':attribute में :min और :max वस्तुओं के बीच होनी चाहिए।',
        'file' => ':attribute :min और :max किलोबाइट्स के बीच होनी चाहिए।',
        'numeric' => ':attribute :min और :max के बीच होनी चाहिए।',
        'string' => ':attribute :min और :max अक्षरों के बीच होनी चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड सत्य या असत्य होनी चाहिए।',
    'confirmed' => ':attribute पुष्टिकरण मेल नहीं खाती।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute एक मान्य तिथि नहीं है।',
    'date_equals' => ':attribute को :date के बराबर की तिथि होनी चाहिए।',
    'date_format' => ':attribute का प्रारूप :format से मेल नहीं खाता।',
    'declined' => ':attribute को अस्वीकार करना आवश्यक है।',
    'declined_if' => ':attribute को अस्वीकार करना आवश्यक है जब :other :value हो।',
    'different' => ':attribute और :other अलग होना चाहिए।',
    'digits' => ':attribute :digits अंकों का होना चाहिए।',
    'digits_between' => ':attribute :min और :max अंकों के बीच होनी चाहिए।',
    'dimensions' => ':attribute में अमान्य छवि आयाम हैं।',
    'distinct' => ':attribute फ़ील्ड में एक डुप्लीकेट मान है।',
    'email' => ':attribute एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute को निम्न में से किसी एक से समाप्त होना चाहिए: :values।',
    'enum' => 'चयनित :attribute अमान्य है।',
    'exists' => 'चयनित :attribute अमान्य है।',
    'file' => ':attribute एक फ़ाइल होनी चाहिए।',
    'filled' => ':attribute फ़ील्ड में मान होना चाहिए।',
    'gt' => [
        'array' => ':attribute में :value वस्तुओं से अधिक होनी चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से अधिक होनी चाहिए।',
        'numeric' => ':attribute :value से अधिक होनी चाहिए।',
        'string' => ':attribute :value अक्षरों से अधिक होनी चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute में :value या अधिक वस्तुएं होनी चाहिए।',
        'file' => ':attribute :value किलोबाइट्स या अधिक होनी चाहिए।',
        'numeric' => ':attribute :value या उससे अधिक होनी चाहिए।',
        'string' => ':attribute :value अक्षरों या उससे अधिक होनी चाहिए।',
    ],
    'image' => ':attribute एक छवि होनी चाहिए।',
    'in' => 'चयनित :attribute अमान्य है।',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद नहीं है।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute एक मान्य JSON स्ट्रिंग होनी चाहिए।',
    'lt' => [
        'array' => ':attribute में :value वस्तुओं से कम होनी चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से कम होनी चाहिए।',
        'numeric' => ':attribute :value से कम होनी चाहिए।',
        'string' => ':attribute :value अक्षरों से कम होनी चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute में :value से अधिक वस्तुएं नहीं होनी चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से अधिक नहीं होनी चाहिए।',
        'numeric' => ':attribute :value या उससे कम होनी चाहिए।',
        'string' => ':attribute :value अक्षरों या उससे कम होनी चाहिए।',
    ],
    'mac_address' => ':attribute एक मान्य MAC पता होना चाहिए।',
    'max' => [
        'array' => ':attribute में :max वस्तुओं से अधिक नहीं होनी चाहिए।',
        'file' => ':attribute :max किलोबाइट्स से अधिक नहीं होनी चाहिए।',
        'numeric' => ':attribute :max से अधिक नहीं होनी चाहिए।',
        'string' => ':attribute :max अक्षरों से अधिक नहीं होनी चाहिए।',
    ],
    'mimes' => ':attribute निम्न प्रकार की फ़ाइल होनी चाहिए: :values।',
    'mimetypes' => ':attribute निम्न प्रकार की फ़ाइल होनी चाहिए: :values।',
    'min' => [
        'array' => ':attribute में कम से कम :min वस्तुएं होनी चाहिए।',
        'file' => ':attribute कम से कम :min किलोबाइट्स होनी चाहिए।',
        'numeric' => ':attribute कम से कम :min होनी चाहिए।',
        'string' => ':attribute कम से कम :min अक्षर होना चाहिए।',
    ],
    'multiple_of' => ':attribute :value का गुणज होना चाहिए।',
    'not_in' => 'चयनित :attribute अमान्य है।',
    'not_regex' => ':attribute प्रारूप अमान्य है।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'password' => [
        'letters' => ':attribute में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute में कम से कम एक बड़ा और एक छोटा अक्षर होना चाहिए।',
        'numbers' => ':attribute में कम से कम एक संख्या होनी चाहिए।',
        'symbols' => ':attribute में कम से कम एक प्रतीक होना चाहिए।',
        'uncompromised' => 'दिया गया :attribute एक डेटा लीक में पाया गया है। कृपया एक अलग :attribute चुनें।',
    ],
    'present' => ':attribute फ़ील्ड मौजूद होनी चाहिए।',
    'prohibited' => ':attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if' => ':attribute फ़ील्ड तब निषिद्ध है जब :other :value हो।',
    'prohibited_unless' => ':attribute फ़ील्ड तब तक निषिद्ध है जब तक :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को मौजूद होने से रोकता है।',
    'regex' => ':attribute प्रारूप अमान्य है।',
    'required' => ':attribute फ़ील्ड आवश्यक है।',
    'required_array_keys' => ':attribute फ़ील्ड में निम्न प्रविष्टियां होनी चाहिए: :values।',
    'required_if' => ':attribute फ़ील्ड आवश्यक है जब :other :value हो।',
    'required_unless' => ':attribute फ़ील्ड आवश्यक है जब तक :other :values में न हो।',
    'required_with' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद हो।',
    'required_with_all' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद हों।',
    'required_without' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद न हो।',
    'required_without_all' => ':attribute फ़ील्ड आवश्यक है जब :values में से कोई भी मौजूद न हो।',
    'same' => ':attribute और :other मेल खाने चाहिए।',
    'size' => [
        'array' => ':attribute में :size वस्तुएं होनी चाहिए।',
        'file' => ':attribute :size किलोबाइट्स होनी चाहिए।',
        'numeric' => ':attribute :size होनी चाहिए।',
        'string' => ':attribute :size अक्षर होना चाहिए।',
    ],
    'starts_with' => ':attribute को निम्न में से किसी एक से शुरू होना चाहिए: :values।',
    'string' => ':attribute एक स्ट्रिंग होनी चाहिए।',
    'timezone' => ':attribute एक मान्य समय क्षेत्र होना चाहिए।',
    'unique' => ':attribute पहले ही लिया जा चुका है।',
    'uploaded' => ':attribute अपलोड करने में विफल रहा।',
    'url' => ':attribute एक मान्य URL होना चाहिए।',
    'uuid' => ':attribute एक मान्य UUID होना चाहिए।',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
