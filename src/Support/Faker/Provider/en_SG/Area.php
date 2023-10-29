<?php

namespace LaraUtil\Foundation\Support\Faker\Provider\en_SG;

use Faker\Provider\Base;

class Area extends Base
{
    protected static $region = [
        'Central', 'East', 'North', 'North-East', 'West'
    ];

    protected static $townCouncil = [
        "Aljunied-Hougang",
        "Ang Mo Kio",
        "Bishan-Toa Payoh",
        "Chua Chu Kang",
        "East Coast",
        "Holland-Bukit Panjang",
        "Jalan Besar",
        "Jurong-Clementi",
        "Marine Parade",
        "Marsiling-Yew Tee",
        "Nee Soon",
        "Pasir Ris-Punggol",
        "Sembawang",
        "Sengkang",
        "Tampines",
        "Tanjong Pagar",
        "West Coast",
    ];

    protected static $grc =  [
        "Aljunied GRC",
        "Hougang SMC",
        "Ang Mo Kio GRC",
        "Kebun Baru SMC",
        "Yio Chu Kang SMC",
        "Bishan-Toa Payoh GRC",
        "Marymount SMC",
        "Chua Chu Kang GRC",
        "Hong Kah North SMC",
        "East Coast GRC",
        "Holland-Bukit Timah GRC",
        "Bukit Panjang SMC",
        "Jalan Besar GRC",
        "Potong Pasir SMC",
        "Jurong GRC",
        "Bukit Batok SMC",
        "Yuhua SMC",
        "Marine Parade GRC",
        "MacPherson SMC",
        "Mountbatten SMC",
        "Marsiling-Yew Tee GRC",
        "Nee Soon GRC",
        "Pasir Ris-Punggol GRC",
        "Punggol West SMC",
        "Sembawang GRC",
        "Sengkang GRC",
        "Tampines GRC",
        "Tanjong Pagar GRC",
        "Radin Mas SMC",
        "West Coast GRC",
        "Pioneer SMC",
    ];

    protected static $division = [
        "Bedok Reservoir-Punggol",
        "Eunos",
        "Kaki Bukit",
        "Paya Lebar",
        "Serangoon",
        "Hougang",
        "Ang Mo Kio-Hougang",
        "Cheng San-Seletar",
        "Jalan Kayu",
        "Fernvale",
        "Teck Ghee",
        "Kebun Baru",
        "Yio Chu Kang",
        "Bishan East",
        "Toa Payoh West",
        "Toa Payoh Central",
        "Toa Payoh East",
        "Marymount",
        "Brickland",
        "Chua Chu Kang",
        "Bukit Gombak",
        "Keat Hong",
        "Hong Kah",
        "Bedok",
        "Changi-Simei",
        "Fengshan",
        "Kampong Chai Chee",
        "Siglap",
        "Bukit Timah",
        "Cashew",
        "Ulu Pandan",
        "Zhenghua",
        "Bukit Panjang",
        "Kampong Glam",
        "Kolam Ayer",
        "Kreta Ayer - Kim Seng",
        "Whampoa",
        "Potong Pasir",
        "Bukit Batok East",
        "Clementi",
        "Jurong Central",
        "Jurong Spring",
        "Taman Jurong",
        "Bukit Batok",
        "Yuhua",
        "Braddell Heights",
        "Geylang Serai",
        "Joo Chiat",
        "Kembangan - Chai Chee",
        "Marine Parade",
        "MacPherson",
        "Mountbatten",
        "Yew Tee",
        "Woodgrove",
        "Marsiling",
        "Limbang",
        "Chong Pang",
        "Nee Soon Link",
        "Nee Soon South",
        "Nee Soon East",
        "Nee Soon Central",
        "Pasir Ris East",
        "Pasir Ris Central",
        "Pasir Ris West",
        "Punggol Shore",
        "Punggol Coast",
        "Punggol West",
        "Admiralty",
        "Canberra",
        "Sembawang Central",
        "Sembawang West",
        "Woodlands",
        "Buangkok",
        "Anchorvale",
        "Compassvale",
        "Rivervale",
        "Tampines North",
        "Tampines East",
        "Tampines West",
        "Tampines Central",
        "Tampines Changkat",
        "Buona Vista",
        "Henderson-Dawson",
        "Moulmein-Cairnhill",
        "Queenstown",
        "Tanjong Pagar-Tiong Bahru",
        "Radin Mas",
        "Ayer Rajah-Gek Poh",
        "Boon Lay",
        "Nanyang",
        "Telok Blangah",
        "West Coast",
        "Pioneer",
    ];

    public function region()
    {
        return static::randomElement(static::$region);
    }

    public function townCouncil()
    {
        return static::randomElement(static::$townCouncil);
    }

    public function grc()
    {
        return static::randomElement(static::$grc);
    }

    public function division()
    {
        return static::randomElement(static::$division);
    }
}
