<?php
return [
    "accepted" => ":attribute måste accepteras.",
    "active_url" => ":attribute är inte en korrekt URL.",
    "after" => ":attribute måste vara ett datum efter :date.",
    "after_or_equal" => ":attribute måste vara ett datum efter eller på :date.",
    "alpha" => ":attribute kan bara innehålla bokstäver.",
    "alpha_dash" => ":attribute kan endast innehålla bokstäver, siffror och bindestreck.",
    "alpha_num" => ":attribute kan endast innehålla bokstäver och siffror.",
    "array" => ":attribute måste vara en lista.",
    "attributes" => [
        "email" => "e-postadress",
        "name" => "name",
        "password" => "lösenord",
        "password_confirmation" => "Lösenordsbekräftelse",
        "remember" => "Zom ihåg inloggningsdata"
    ],
    "before" => ":attribute måste vara ett datum före :date.",
    "before_or_equal" => ":attribute måste vara ett datum före eller på :date.",
    "between" => [
        "array" => ":attribute måste ha mellan :min och :max anteckningar.",
        "file" => ":attribute måste vara mellan :min och :max Kilobytes.",
        "numeric" => ":attribute måste vara mellan :min und :max.",
        "string" => ":attribute måste vara mellan :min och :max tecken."
    ],
    "boolean" => ":attribute måste vara sant eller falskt.",
    "confirmed" => ":attribute-bekräftelsen stämmer inte överens.",
    "custom" => ["attribute-name" => ["rule-name" => "custom-message"]],
    "date" => ":attribute är inte ett giltigt datum.",
    "date_equals" => "Attributet :attribute måste vara en datum som motsvarar datumet :date.",
    "date_format" => ":attribute motsvarar inte formatet: :format.",
    "different" => ":attribute och :other måste vara olika.",
    "digits" => ":attribute måste vara :digits långa.",
    "digits_between" => ":attribute måste vara mellan :min och :max siffror långa.",
    "dimensions" => ":attribute har felaktiga bilddimensioner.",
    "distinct" => ":attribute har ett dubbelt värde.",
    "email" => ":attribute måste vara en korrekt e-postadress.",
    "ends_with" => "Attributet :attribute måste sluta med ett av följande värden: :values",
    "exists" => "Valt: :attribute är felaktigt.",
    "file" => ":attribute måste vara en fil..",
    "filled" => ":attribute måste fyllas i..",
    "gt" => [
        "array" => ":attribute måste ha mer än :value element.",
        "file" => ":attribute måste vara större än :value Kilobytes.",
        "numeric" => ":attribute måste vara större än :value.",
        "string" => ":attribute måste vara mer än :value bokstäver."
    ],
    "gte" => [
        "array" => ":attribute måste ha minst :value element.",
        "file" => ":attribute måste vara minst :value Kilobytes i storlek.",
        "numeric" => ":attribute måste vara större än eller lika :value.",
        "string" => ":attribute måste vara minst :value bokstäver långa."
    ]
    "image" => ":attribute måste vara en bild.",
    "in" => "Valt :attribute är felaktigt.",
    "in_array" => ":attribute finns inte i :other.",
    "integer" => ":attribute måste vara en heltal.",
    "ip" => ":attribute måste vara en IP-adress.",
    "ipv4" => ":attribute måste vara en korrekt IPv4-adress.",
    "ipv6" => ":attribute måste vara en korrekt IPv6-adress.",
    "json" => ":attribute måste vara en korrekt JSON-sträng..",
    "lt" => [
        "array" => ":attribute måste ha mindre än :value element.",
        "file" => ":attribute måste vara mindre än :value Kilobytes.",
        "numeric" => ":attribute måste vara mindre än :value",
        "string" => ":attribute måste vara kortare än :value bokstäver."
    ],
    "lte" => [
        "array" => ":attribute kan ha högst :value element.",
        "file" => ":attribute kan vara högst :value Kilobytes.",
        "numeric" => ":attribute måste vara mindre än eller lika med :value.",
        "string" => ":attribute kan vara högst :value bokstäver."
    ],
    "max" => [
        "array" => ":attribute kan inte innehåller mer än :max anteckningar.",
        "file" => ":attribute kan inte vara större än :max Kilobytes.",
        "numeric" => ":attribute kan inte vara större än :max.",
        "string" => ":attribute kan inte vara längre än :max tecken."
    ],
    "mimes" => ":attribute måste vara en fil i följande format: :values.",
    "mimetypes" => ":attribute måste vara en fil i följande format: :values.",
    "min" => [
        "array" => ":attribute måste ha minst :min anteckningar.",
        "file" => ":attribute måste vara minst :min Kilobytes i storlek.",
        "numeric" => ":attribute måste vara minst :min.",
        "string" => ":attribute måste vara minst :min tecken i storlek."
    ],
    "not_in" => "Valt :attribute är felaktigt.",
    "not_regex" => ":attribute är felaktigt.",
    "numeric" => ":attribute måste vara ett nummer.",
    "present" => ":attribute måste existerar.",
    "regex" => ":attribute formatet är felaktigt.",
    "required" => ":attribute fältet behövs.",
    "required_if" => ":attribute fält krävs om :other har ett värde på :value.",
    "required_unless" => ":attribute fält krävs förutom :other finns i värdena :values.",
    "required_with" => ":attribute fält krävs om :values existerar.",
    "required_with_all" => ":attribute fält krävs om :values existerar.",
    "required_without" => ":attribute fält krävs om :values existerar inte.",
    "required_without_all" => ":attribute fält krävs om ingen av värdena :values existerar.",
    "same" => ":attribute och :other måste vara lika.",
    "size" => [
        "array" => ":attribute måste innehåller :size anteckningar.",
        "file" => ":attribute måste vaara :size Kilobytes stor.",
        "numeric" => ":attribute måste vara :size stor.",
        "string" => ":attribute måste vara :size tecken långa."
    ],
    "starts_with" => ":attribute kan inte börja med en av denna värdena: :values",
    "string" => ":attribute måste vara text.",
    "timezone" => ":attribute måste vara en korrekt tidszon.",
    "unique" => ":attribute hat redan använts.",
    "uploaded" => "Uppladdningen av :attribute misslyckades.",
    "url" => ":attribute formatet är felaktigt.",
    "uuid" => ":attribute måste vara en giltig UUID.."
];
