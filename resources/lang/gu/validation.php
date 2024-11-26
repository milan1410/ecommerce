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

    'accepted' => ':attribute ને સ્વીકારવું જોઈએ.',
    'accepted_if' => ':attribute ને સ્વીકારવું જોઈએ જ્યારે :other એ :value હોય.',
    'active_url' => ':attribute માન્ય URL નથી.',
    'after' => ':attribute એ :date પછીની તારીખ હોવી જોઈએ.',
    'after_or_equal' => ':attribute એ :date પછી અથવા સમાન તારીખ હોવી જોઈએ.',
    'alpha' => ':attribute માં ફક્ત અક્ષર હોવા જોઈએ.',
    'alpha_dash' => ':attribute માં ફક્ત અક્ષર, આંકડા, ડેશ અને અન્ડરસ્કોર હોવા જોઈએ.',
    'alpha_num' => ':attribute માં ફક્ત અક્ષર અને આંકડા હોવા જોઈએ.',
    'array' => ':attribute એ એરે હોવું જોઈએ.',
    'before' => ':attribute એ :date થી પૂર્વની તારીખ હોવી જોઈએ.',
    'before_or_equal' => ':attribute એ :date થી પૂર્વ અથવા સમાન તારીખ હોવી જોઈએ.',
    'between' => [
        'numeric' => ':attribute એ :min અને :max વચ્ચે હોવું જોઈએ.',
        'file' => ':attribute એ :min અને :max કિલોબાઇટ્સ વચ્ચે હોવું જોઈએ.',
        'string' => ':attribute એ :min અને :max અક્ષરો વચ્ચે હોવું જોઈએ.',
        'array' => ':attribute એ :min અને :max આઇટમ્સ વચ્ચે હોવું જોઈએ.',
    ],
    'boolean' => ':attribute ફીલ્ડ સત્ય અથવા ખોટું હોવું જોઈએ.',
    'confirmed' => ':attribute પુષ્ટિ મળતી નથી.',
    'current_password' => 'પાસવર્ડ ખોટો છે.',
    'date' => ':attribute માન્ય તારીખ નથી.',
    'date_equals' => ':attribute એ :date સમાન તારીખ હોવું જોઈએ.',
    'date_format' => ':attribute :format ફોર્મેટ સાથે મેળ ખાતા નથી.',
    'different' => ':attribute અને :other જુદા હોવા જોઈએ.',
    'digits' => ':attribute એ :digits આંકડા હોવા જોઈએ.',
    'digits_between' => ':attribute એ :min અને :max આંકડા વચ્ચે હોવું જોઈએ.',
    'dimensions' => ':attribute ના છબીના પરિમાણો ખોટા છે.',
    'distinct' => ':attribute ફીલ્ડમાં ડુપ્લિકેટ મૂલ્ય છે.',
    'email' => ':attribute એ માન્ય ઈમેલ સરનામું હોવું જોઈએ.',
    'ends_with' => ':attribute એ નીચેના પૈકીના એક સાથે સમાપ્ત થવું જોઈએ: :values.',
    'exists' => 'પસંદ કરેલું :attribute ખોટું છે.',
    'file' => ':attribute એ ફાઈલ હોવું જોઈએ.',
    'filled' => ':attribute ફીલ્ડમાં મૂલ્ય હોવું જોઈએ.',
    'gt' => [
        'numeric' => ':attribute એ :value કરતાં મોટું હોવું જોઈએ.',
        'file' => ':attribute એ :value કિલોબાઇટ્સ કરતાં મોટું હોવું જોઈએ.',
        'string' => ':attribute એ :value અક્ષરો કરતાં મોટું હોવું જોઈએ.',
        'array' => ':attribute એ :value આઇટમ્સ કરતાં વધુ હોવું જોઈએ.',
    ],
    'gte' => [
        'numeric' => ':attribute એ :value કરતાં મોટું અથવા સમાન હોવું જોઈએ.',
        'file' => ':attribute એ :value કિલોબાઇટ્સ કરતાં મોટું અથવા સમાન હોવું જોઈએ.',
        'string' => ':attribute એ :value અક્ષરો કરતાં મોટું અથવા સમાન હોવું જોઈએ.',
        'array' => ':attribute એ :value આઇટમ્સ અથવા વધુ હોવું જોઈએ.',
    ],
    'image' => ':attribute એ છબી હોવી જોઈએ.',
    'in' => 'પસંદ કરેલું :attribute ખોટું છે.',
    'in_array' => ':attribute ફીલ્ડ :other માં不存在 નથી.',
    'integer' => ':attribute એ પૂર્ણાંક હોવું જોઈએ.',
    'ip' => ':attribute એ માન્ય IP સરનામું હોવું જોઈએ.',
    'ipv4' => ':attribute એ માન્ય IPv4 સરનામું હોવું જોઈએ.',
    'ipv6' => ':attribute એ માન્ય IPv6 સરનામું હોવું જોઈએ.',
    'json' => ':attribute એ માન્ય JSON સ્ટ્રિંગ હોવું જોઈએ.',
    'lt' => [
        'numeric' => ':attribute એ :value કરતાં નાનું હોવું જોઈએ.',
        'file' => ':attribute એ :value કિલોબાઇટ્સ કરતાં નાનું હોવું જોઈએ.',
        'string' => ':attribute એ :value અક્ષરો કરતાં નાનું હોવું જોઈએ.',
        'array' => ':attribute એ :value આઇટમ્સ કરતાં ઓછી હોવું જોઈએ.',
    ],
    'lte' => [
        'numeric' => ':attribute એ :value કરતાં નાનું અથવા સમાન હોવું જોઈએ.',
        'file' => ':attribute એ :value કિલોબાઇટ્સ કરતાં નાનું અથવા સમાન હોવું જોઈએ.',
        'string' => ':attribute એ :value અક્ષરો કરતાં નાનું અથવા સમાન હોવું જોઈએ.',
        'array' => ':attribute એ :value આઇટમ્સ કરતાં વધુ હોવું જોઈએ.',
    ],
    'max' => [
        'numeric' => ':attribute એ :max કરતાં વધુ ન હોવું જોઈએ.',
        'file' => ':attribute એ :max કિલોબાઇટ્સ કરતાં વધુ ન હોવું જોઈએ.',
        'string' => ':attribute એ :max અક્ષરો કરતાં વધુ ન હોવું જોઈએ.',
        'array' => ':attribute એ :max આઇટમ્સ કરતાં વધુ ન હોવું જોઈએ.',
    ],
    'mimes' => ':attribute એ આ પ્રકારની ફાઈલ હોવી જોઈએ: :values.',
    'mimetypes' => ':attribute એ આ પ્રકારની ફાઈલ હોવી જોઈએ: :values.',
    'min' => [
        'numeric' => ':attribute એ ઓછામાં ઓછું :min હોવું જોઈએ.',
        'file' => ':attribute એ ઓછામાં ઓછું :min કિલોબાઇટ્સ હોવું જોઈએ.',
        'string' => ':attribute એ ઓછામાં ઓછું :min અક્ષરો હોવું જોઈએ.',
        'array' => ':attribute એ ઓછામાં ઓછું :min આઇટમ્સ હોવું જોઈએ.',
    ],
    'multiple_of' => ':attribute એ :value નો ગુણાકાર હોવું જોઈએ.',
    'not_in' => 'પસંદ કરેલું :attribute ખોટું છે.',
    'not_regex' => ':attribute ફોર્મેટ ખોટું છે.',
    'numeric' => ':attribute એ સંખ્યા હોવી જોઈએ.',
    'password' => 'પાસવર્ડ ખોટો છે.',
    'present' => ':attribute ફીલ્ડ હાજર હોવું જોઈએ.',
    'regex' => ':attribute ફોર્મેટ ખોટું છે.',
    'required' => ':attribute ફીલ્ડ જરૂરી છે.',
    'required_if' => ':attribute ફીલ્ડ ત્યારે જરૂરી છે જ્યારે :other એ :value હોય.',
    'required_unless' => ':attribute ફીલ્ડ ત્યારે જરૂરી છે, જો :other :values માંથી ન હોય.',
    'required_with' => ':attribute ફીલ્ડ ત્યારે જરૂરી છે જ્યારે :values હાજર હોય.',
    'required_with_all' => ':attribute ફીલ્ડ ત્યારે જરૂરી છે જ્યારે :values હાજર હોય.',
    'required_without' => ':attribute ફીલ્ડ ત્યારે જરૂરી છે જ્યારે :values હાજર ન હોય.',
    'required_without_all' => ':attribute ફીલ્ડ ત્યારે જરૂરી છે, જ્યારે :values માંથી કોઈ પણ હાજર ન હોય.',
    'prohibited' => ':attribute ફીલ્ડ પર પ્રતિબંધ છે.',
    'prohibited_if' => ':attribute ફીલ્ડ પર પ્રતિબંધ છે જ્યારે :other એ :value હોય.',
    'prohibited_unless' => ':attribute ફીલ્ડ પર પ્રતિબંધ છે જો સુધી :other :values માં ન હોય.',
    'prohibits' => ':attribute ફીલ્ડ :other ને હાજર થવા માટે પ્રતિબંધિત કરે છે.',
    'same' => ':attribute અને :other સમાન હોવું જોઈએ.',
    'size' => [
        'numeric' => ':attribute એ :size હોવું જોઈએ.',
        'file' => ':attribute એ :size કિલોબાઇટ્સ હોવું જોઈએ.',
        'string' => ':attribute એ :size અક્ષરો હોવું જોઈએ.',
        'array' => ':attribute એ :size આઇટમ્સ ધરાવવું જોઈએ.',
    ],
    'starts_with' => ':attribute એ નીચેના પૈકીના એકથી શરૂ થવું જોઈએ: :values.',
    'string' => ':attribute એ એક સ્ટ્રિંગ હોવું જોઈએ.',
    'timezone' => ':attribute એ માન્ય ટાઈમઝોન હોવું જોઈએ.',
    'unique' => ':attribute પહેલેથી લેવાઈ ચૂક્યું છે.',
    'uploaded' => ':attribute અપલોડ કરવામાં નિષ્ફળ ગયો.',
    'url' => ':attribute એ માન્ય URL હોવું જોઈએ.',
    'uuid' => ':attribute એ માન્ય UUID હોવું જોઈએ.',

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
