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

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'accepted_if' => ':attribute को स्वीकार किया जाना चाहिए जब :other :value हो।',
    'active_url' => ':attribute एक मान्य URL नहीं है।',
    'after' => ':attribute :date के बाद की तारीख होनी चाहिए।',
    'after_or_equal' => ':attribute :date के बाद या उसके बराबर की तारीख होनी चाहिए।',
    'alpha' => ':attribute में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute में केवल अक्षर, संख्या, डैश और अंडरस्कोर होने चाहिए।',
    'alpha_num' => ':attribute में केवल अक्षर और संख्याएं होनी चाहिए।',
    'array' => ':attribute एक array होना चाहिए।',
    'before' => ':attribute :date से पहले की तारीख होनी चाहिए।',
    'before_or_equal' => ':attribute :date से पहले या उसके बराबर की तारीख होनी चाहिए।',
    'between' => [
        'numeric' => ':attribute :min और :max के बीच होना चाहिए।',
        'file' => ':attribute :min और :max किलोबाइट्स के बीच होना चाहिए।',
        'string' => ':attribute :min और :max वर्णों के बीच होना चाहिए।',
        'array' => ':attribute में :min और :max आइटम्स होने चाहिए।',
    ],
    'boolean' => ':attribute फील्ड सही (true) या गलत (false) होना चाहिए।',
    'confirmed' => ':attribute पुष्टि मेल नहीं खाती।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute एक मान्य तारीख नहीं है।',
    'date_equals' => ':attribute :date के बराबर की तारीख होनी चाहिए।',
    'date_format' => ':attribute फॉर्मेट :format से मेल नहीं खाता।',
    'different' => ':attribute और :other अलग होने चाहिए।',
    'digits' => ':attribute :digits अंकों का होना चाहिए।',
    'digits_between' => ':attribute :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute में अमान्य छवि आयाम हैं।',
    'distinct' => ':attribute फील्ड में डुप्लिकेट मान है।',
    'email' => ':attribute एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute निम्नलिखित में से किसी एक के साथ समाप्त होना चाहिए: :values।',
    'exists' => 'चुना गया :attribute अमान्य है।',
    'file' => ':attribute एक फ़ाइल होनी चाहिए।',
    'filled' => ':attribute फील्ड में एक मान होना चाहिए।',
    'gt' => [
        'numeric' => ':attribute :value से बड़ा होना चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से बड़ा होना चाहिए।',
        'string' => ':attribute :value वर्णों से बड़ा होना चाहिए।',
        'array' => ':attribute में :value आइटम्स से अधिक होने चाहिए।',
    ],
    'gte' => [
        'numeric' => ':attribute :value से बड़ा या उसके बराबर होना चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से बड़ा या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value वर्णों से बड़ा या उसके बराबर होना चाहिए।',
        'array' => ':attribute में :value आइटम्स या अधिक होने चाहिए।',
    ],
    'image' => ':attribute एक छवि होनी चाहिए।',
    'in' => 'चुना गया :attribute अमान्य है।',
    'in_array' => ':attribute फील्ड :other में मौजूद नहीं है।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute एक मान्य JSON स्ट्रिंग होनी चाहिए।',
    'lt' => [
        'numeric' => ':attribute :value से कम होना चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से कम होना चाहिए।',
        'string' => ':attribute :value वर्णों से कम होना चाहिए।',
        'array' => ':attribute में :value आइटम्स से कम होने चाहिए।',
    ],
    'lte' => [
        'numeric' => ':attribute :value से कम या उसके बराबर होना चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से कम या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value वर्णों से कम या उसके बराबर होना चाहिए।',
        'array' => ':attribute में :value आइटम्स से अधिक नहीं होनी चाहिए।',
    ],
    'max' => [
        'numeric' => ':attribute :max से अधिक नहीं हो सकता।',
        'file' => ':attribute :max किलोबाइट्स से अधिक नहीं हो सकता।',
        'string' => ':attribute :max वर्णों से अधिक नहीं हो सकता।',
        'array' => ':attribute में :max आइटम्स से अधिक नहीं होनी चाहिए।',
    ],
    'mimes' => ':attribute निम्नलिखित प्रकार की फ़ाइल होनी चाहिए: :values।',
    'mimetypes' => ':attribute निम्नलिखित प्रकार की फ़ाइल होनी चाहिए: :values।',
    'min' => [
        'numeric' => ':attribute कम से कम :min होना चाहिए।',
        'file' => ':attribute कम से कम :min किलोबाइट्स होना चाहिए।',
        'string' => ':attribute कम से कम :min वर्णों का होना चाहिए।',
        'array' => ':attribute में कम से कम :min आइटम्स होने चाहिए।',
    ],
    'multiple_of' => ':attribute :value का गुणज होना चाहिए।',
    'not_in' => 'चुना गया :attribute अमान्य है।',
    'not_regex' => ':attribute फॉर्मेट अमान्य है।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'password' => 'पासवर्ड गलत है।',
    'present' => ':attribute फील्ड उपस्थित होनी चाहिए।',
    'regex' => ':attribute फॉर्मेट अमान्य है।',
    'required' => ':attribute फील्ड आवश्यक है।',
    'required_if' => ':attribute फील्ड आवश्यक है जब :other :value हो।',
    'required_unless' => ':attribute फील्ड आवश्यक है जब तक :other :values में न हो।',
    'required_with' => ':attribute फील्ड आवश्यक है जब :values उपस्थित हो।',
    'required_with_all' => ':attribute फील्ड आवश्यक है जब :values उपस्थित हों।',
    'required_without' => ':attribute फील्ड आवश्यक है जब :values उपस्थित न हो।',
    'required_without_all' => ':attribute फील्ड आवश्यक है जब :values में से कोई भी उपस्थित न हो।',
    'prohibited' => ':attribute फील्ड निषिद्ध है।',
    'prohibited_if' => ':attribute फील्ड निषिद्ध है जब :other :value हो।',
    'prohibited_unless' => ':attribute फील्ड निषिद्ध है जब तक :other :values में न हो।',
    'prohibits' => ':attribute फील्ड :other को उपस्थित होने से रोकता है।',
    'same' => ':attribute और :other समान होने चाहिए।',
    'size' => [
        'numeric' => ':attribute :size होना चाहिए।',
        'file' => ':attribute :size किलोबाइट्स का होना चाहिए।',
        'string' => ':attribute :size वर्णों का होना चाहिए।',
        'array' => ':attribute में :size आइटम्स होने चाहिए।',
    ],
    'starts_with' => ':attribute निम्नलिखित में से किसी एक से शुरू होना चाहिए: :values।',
    'string' => ':attribute एक स्ट्रिंग होनी चाहिए।',
    'timezone' => ':attribute एक मान्य समय क्षेत्र होना चाहिए।',
    'unique' => ':attribute पहले से लिया जा चुका है।',
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
