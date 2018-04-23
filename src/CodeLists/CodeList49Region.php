<?php

namespace AragornYang\Onix\CodeLists;

class CodeList49Region extends CodeList
{
    public const KEY = 'Region';

    protected const MAPPING = [
        // 
        "AU-CT" => "Australian Capital Territory",
        // 
        "AU-NS" => "New South Wales",
        // 
        "AU-NT" => "Northern Territory",
        // 
        "AU-QL" => "Queensland",
        // 
        "AU-SA" => "South Australia",
        // 
        "AU-TS" => "Tasmania",
        // 
        "AU-VI" => "Victoria",
        // 
        "AU-WA" => "Western Australia",
        // 
        "CA-AB" => "Alberta",
        // 
        "CA-BC" => "British Columbia",
        // 
        "CA-MB" => "Manitoba",
        // 
        "CA-NB" => "New Brunswick",
        // 
        "CA-NL" => "Newfoundland and Labrador",
        // 
        "CA-NS" => "Nova Scotia",
        // 
        "CA-NT" => "Northwest Territories",
        // 
        "CA-NU" => "Nunavut",
        // 
        "CA-ON" => "Ontario",
        // 
        "CA-PE" => "Prince Edward Island",
        // 
        "CA-QC" => "Quebec",
        // 
        "CA-SK" => "Saskatchewan",
        // 
        "CA-YT" => "Yukon Territory",
        // 
        "CN-11" => "Beijing Municipality",
        // 
        "CN-12" => "Tianjin Municipality",
        // 
        "CN-13" => "Hebei Province",
        // 
        "CN-14" => "Shanxi Province",
        // 
        "CN-15" => "Inner Mongolia Autonomous Region",
        // 
        "CN-21" => "Liaoning Province",
        // 
        "CN-22" => "Jilin Province",
        // 
        "CN-23" => "Heilongjiang Province",
        // 
        "CN-31" => "Shanghai Municipality",
        // 
        "CN-32" => "Jiangsu Province",
        // 
        "CN-33" => "Zhejiang Province",
        // 
        "CN-34" => "Anhui Province",
        // 
        "CN-35" => "Fujian Province",
        // 
        "CN-36" => "Jiangxi Province",
        // 
        "CN-37" => "Shandong Province",
        // 
        "CN-41" => "Henan Province",
        // 
        "CN-42" => "Hubei Province",
        // 
        "CN-43" => "Hunan Province",
        // 
        "CN-44" => "Guangdong Province",
        // 
        "CN-45" => "Guangxi Zhuang Autonomous Region",
        // 
        "CN-46" => "Hainan Province",
        // 
        "CN-50" => "Chongqing Municipality",
        // 
        "CN-51" => "Sichuan Province",
        // 
        "CN-52" => "Guizhou Province",
        // 
        "CN-53" => "Yunnan Province",
        // 
        "CN-54" => "Tibet Autonomous Region",
        // 
        "CN-61" => "Shaanxi Province",
        // 
        "CN-62" => "Gansu Province",
        // 
        "CN-63" => "Qinghai Province",
        // 
        "CN-64" => "Ningxia Hui Autonomous Region",
        // 
        "CN-65" => "Xinjiang Uyghur Autonomous Region",
        // Prefer code TW (Taiwan, Province of China) from List 91
        "CN-71" => "Taiwan Province",
        // Prefer code HK (Hong Kong) from List 91
        "CN-91" => "Hong Kong Special Administrative Region",
        // Prefer code MO (Macao) from List 91
        "CN-92" => "Macau Special Administrative Region",
        // 
        "ES-CN" => "Canary Islands",
        // Airside outlets at UK international airports only
        "GB-AIR" => "UK airside",
        // All UK airports, including both airside and other outlets
        "GB-APS" => "UK airports",
        // DEPRECATED, replaced by country codes GG – Guernsey, and JE – Jersey
        "GB-CHA" => "Channel Islands",
        // 
        "GB-ENG" => "England",
        // UK excluding Northern Ireland
        "GB-EWS" => "England, Wales, Scotland",
        // DEPRECATED, replaced by country code IM – Isle of Man
        "GB-IOM" => "Isle of Man",
        // 
        "GB-NIR" => "Northern Ireland",
        // 
        "GB-SCT" => "Scotland",
        // 
        "GB-WLS" => "Wales",
        // Airside outlets at Irish international airports only
        "IE-AIR" => "Ireland airside",
        // 
        "IT-AG" => "Agrigento",
        // 
        "IT-AL" => "Alessandria",
        // 
        "IT-AN" => "Ancona",
        // 
        "IT-AO" => "Aosta",
        // 
        "IT-AR" => "Arezzo",
        // 
        "IT-AP" => "Ascoli Piceno",
        // 
        "IT-AT" => "Asti",
        // 
        "IT-AV" => "Avellino",
        // 
        "IT-BA" => "Bari",
        // 
        "IT-BT" => "Barletta-Andria-Trani",
        // 
        "IT-BL" => "Belluno",
        // 
        "IT-BN" => "Benevento",
        // 
        "IT-BG" => "Bergamo",
        // 
        "IT-BI" => "Biella",
        // 
        "IT-BO" => "Bologna",
        // 
        "IT-BZ" => "Bolzano",
        // 
        "IT-BS" => "Brescia",
        // 
        "IT-BR" => "Brindisi",
        // 
        "IT-CA" => "Cagliari",
        // 
        "IT-CL" => "Caltanissetta",
        // 
        "IT-CB" => "Campobasso",
        // 
        "IT-CI" => "Carbonia-Iglesias",
        // 
        "IT-CE" => "Caserta",
        // 
        "IT-CT" => "Catania",
        // 
        "IT-CZ" => "Catanzaro",
        // 
        "IT-CH" => "Chieti",
        // 
        "IT-CO" => "Como",
        // 
        "IT-CS" => "Cosenza",
        // 
        "IT-CR" => "Cremona",
        // 
        "IT-KR" => "Crotone",
        // 
        "IT-CN" => "Cuneo",
        // 
        "IT-EN" => "Enna",
        // 
        "IT-FM" => "Fermo",
        // 
        "IT-FE" => "Ferrara",
        // 
        "IT-FI" => "Firenze",
        // 
        "IT-FG" => "Foggia",
        // 
        "IT-FC" => "Forlì-Cesena",
        // 
        "IT-FR" => "Frosinone",
        // 
        "IT-GE" => "Genova",
        // 
        "IT-GO" => "Gorizia",
        // 
        "IT-GR" => "Grosseto",
        // 
        "IT-IM" => "Imperia",
        // 
        "IT-IS" => "Isernia",
        // 
        "IT-SP" => "La Spezia",
        // 
        "IT-AQ" => "L’Aquila",
        // 
        "IT-LT" => "Latina",
        // 
        "IT-LE" => "Lecce",
        // 
        "IT-LC" => "Lecco",
        // 
        "IT-LI" => "Livorno",
        // 
        "IT-LO" => "Lodi",
        // 
        "IT-LU" => "Lucca",
        // 
        "IT-MC" => "Macerata",
        // 
        "IT-MN" => "Mantova",
        // 
        "IT-MS" => "Massa-Carrara",
        // 
        "IT-MT" => "Matera",
        // 
        "IT-VS" => "Medio Campidano",
        // 
        "IT-ME" => "Messina",
        // 
        "IT-MI" => "Milano",
        // 
        "IT-MO" => "Modena",
        // 
        "IT-MB" => "Monza e Brianza",
        // 
        "IT-NA" => "Napoli",
        // 
        "IT-NO" => "Novara",
        // 
        "IT-NU" => "Nuoro",
        // 
        "IT-OG" => "Ogliastra",
        // 
        "IT-OT" => "Olbia-Tempio",
        // 
        "IT-OR" => "Oristano",
        // 
        "IT-PD" => "Padova",
        // 
        "IT-PA" => "Palermo",
        // 
        "IT-PR" => "Parma",
        // 
        "IT-PV" => "Pavia",
        // 
        "IT-PG" => "Perugia",
        // 
        "IT-PU" => "Pesaro e Urbino",
        // 
        "IT-PE" => "Pescara",
        // 
        "IT-PC" => "Piacenza",
        // 
        "IT-PI" => "Pisa",
        // 
        "IT-PT" => "Pistoia",
        // 
        "IT-PN" => "Pordenone",
        // 
        "IT-PZ" => "Potenza",
        // 
        "IT-PO" => "Prato",
        // 
        "IT-RG" => "Ragusa",
        // 
        "IT-RA" => "Ravenna",
        // 
        "IT-RC" => "Reggio Calabria",
        // 
        "IT-RE" => "Reggio Emilia",
        // 
        "IT-RI" => "Rieti",
        // 
        "IT-RN" => "Rimini",
        // 
        "IT-RM" => "Roma",
        // 
        "IT-RO" => "Rovigo",
        // 
        "IT-SA" => "Salerno",
        // 
        "IT-SS" => "Sassari",
        // 
        "IT-SV" => "Savona",
        // 
        "IT-SI" => "Siena",
        // 
        "IT-SR" => "Siracusa",
        // 
        "IT-SO" => "Sondrio",
        // 
        "IT-TA" => "Taranto",
        // 
        "IT-TE" => "Teramo",
        // 
        "IT-TR" => "Terni",
        // 
        "IT-TO" => "Torino",
        // 
        "IT-TP" => "Trapani",
        // 
        "IT-TN" => "Trento",
        // 
        "IT-TV" => "Treviso",
        // 
        "IT-TS" => "Trieste",
        // 
        "IT-UD" => "Udine",
        // 
        "IT-VA" => "Varese",
        // 
        "IT-VE" => "Venezia",
        // 
        "IT-VB" => "Verbano-Cusio-Ossola",
        // 
        "IT-VC" => "Vercelli",
        // 
        "IT-VR" => "Verona",
        // 
        "IT-VV" => "Vibo Valentia",
        // 
        "IT-VI" => "Vicenza",
        // 
        "IT-VT" => "Viterbo",
        // 
        "RS-KM" => "Kosovo-Metohija",
        // 
        "RS-VO" => "Vojvodina",
        // 
        "RU-AD" => "Republic of Adygeya",
        // 
        "RU-AL" => "Republic of Altay",
        // 
        "RU-BA" => "Republic of Bashkortostan",
        // 
        "RU-BU" => "Republic of Buryatiya",
        // 
        "RU-CE" => "Chechenskaya Republic",
        // 
        "RU-CU" => "Chuvashskaya Republic",
        // 
        "RU-DA" => "Republic of Dagestan",
        // 
        "RU-IN" => "Republic of Ingushetiya",
        // 
        "RU-KB" => "Kabardino-Balkarskaya Republic",
        // 
        "RU-KL" => "Republic of Kalmykiya",
        // 
        "RU-KC" => "Karachayevo-Cherkesskaya Republic",
        // 
        "RU-KR" => "Republic of Kareliya",
        // 
        "RU-KK" => "Republic of Khakasiya",
        // 
        "RU-KO" => "Republic of Komi",
        // 
        "RU-ME" => "Republic of Mariy El",
        // 
        "RU-MO" => "Republic of Mordoviya",
        // 
        "RU-SA" => "Republic of Sakha (Yakutiya)",
        // 
        "RU-SE" => "Republic of Severnaya Osetiya-Alaniya",
        // 
        "RU-TA" => "Republic of Tatarstan",
        // 
        "RU-TY" => "Republic of Tyva (Tuva)",
        // 
        "RU-UD" => "Udmurtskaya Republic",
        // 
        "RU-ALT" => "Altayskiy Administrative Territory",
        // 
        "RU-KAM" => "Kamchatskiy Administrative Territory",
        // 
        "RU-KHA" => "Khabarovskiy Administrative Territory",
        // 
        "RU-KDA" => "Krasnodarskiy Administrative Territory",
        // 
        "RU-KYA" => "Krasnoyarskiy Administrative Territory",
        // 
        "RU-PER" => "Permskiy Administrative Territory",
        // 
        "RU-PRI" => "Primorskiy Administrative Territory",
        // 
        "RU-STA" => "Stavropol’skiy Administrative Territory",
        // 
        "RU-ZAB" => "Zabaykal’skiy Administrative Territory",
        // 
        "RU-AMU" => "Amurskaya Administrative Region",
        // 
        "RU-ARK" => "Arkhangel’skaya Administrative Region",
        // 
        "RU-AST" => "Astrakhanskaya Administrative Region",
        // 
        "RU-BEL" => "Belgorodskaya Administrative Region",
        // 
        "RU-BRY" => "Bryanskaya Administrative Region",
        // 
        "RU-CHE" => "Chelyabinskaya Administrative Region",
        // 
        "RU-IRK" => "Irkutskaya Administrative Region",
        // 
        "RU-IVA" => "Ivanovskaya Administrative Region",
        // 
        "RU-KGD" => "Kaliningradskaya Administrative Region",
        // 
        "RU-KLU" => "Kaluzhskaya Administrative Region",
        // 
        "RU-KEM" => "Kemerovskaya Administrative Region",
        // 
        "RU-KIR" => "Kirovskaya Administrative Region",
        // 
        "RU-KOS" => "Kostromskaya Administrative Region",
        // 
        "RU-KGN" => "Kurganskaya Administrative Region",
        // 
        "RU-KRS" => "Kurskaya Administrative Region",
        // 
        "RU-LEN" => "Leningradskaya Administrative Region",
        // 
        "RU-LIP" => "Lipetskaya Administrative Region",
        // 
        "RU-MAG" => "Magadanskaya Administrative Region",
        // 
        "RU-MOS" => "Moskovskaya Administrative Region",
        // 
        "RU-MUR" => "Murmanskaya Administrative Region",
        // 
        "RU-NIZ" => "Nizhegorodskaya Administrative Region",
        // 
        "RU-NGR" => "Novgorodskaya Administrative Region",
        // 
        "RU-NVS" => "Novosibirskaya Administrative Region",
        // 
        "RU-OMS" => "Omskaya Administrative Region",
        // 
        "RU-ORE" => "Orenburgskaya Administrative Region",
        // 
        "RU-ORL" => "Orlovskaya Administrative Region",
        // 
        "RU-PNZ" => "Penzenskaya Administrative Region",
        // 
        "RU-PSK" => "Pskovskaya Administrative Region",
        // 
        "RU-ROS" => "Rostovskaya Administrative Region",
        // 
        "RU-RYA" => "Ryazanskaya Administrative Region",
        // 
        "RU-SAK" => "Sakhalinskaya Administrative Region",
        // 
        "RU-SAM" => "Samarskaya Administrative Region",
        // 
        "RU-SAR" => "Saratovskaya Administrative Region",
        // 
        "RU-SMO" => "Smolenskaya Administrative Region",
        // 
        "RU-SVE" => "Sverdlovskaya Administrative Region",
        // 
        "RU-TAM" => "Tambovskaya Administrative Region",
        // 
        "RU-TOM" => "Tomskaya Administrative Region",
        // 
        "RU-TUL" => "Tul’skaya Administrative Region",
        // 
        "RU-TVE" => "Tverskaya Administrative Region",
        // 
        "RU-TYU" => "Tyumenskaya Administrative Region",
        // 
        "RU-ULY" => "Ul’yanovskaya Administrative Region",
        // 
        "RU-VLA" => "Vladimirskaya Administrative Region",
        // 
        "RU-VGG" => "Volgogradskaya Administrative Region",
        // 
        "RU-VLG" => "Vologodskaya Administrative Region",
        // 
        "RU-VOR" => "Voronezhskaya Administrative Region",
        // 
        "RU-YAR" => "Yaroslavskaya Administrative Region",
        // 
        "RU-MOW" => "Moskva City",
        // 
        "RU-SPE" => "Sankt-Peterburg City",
        // 
        "RU-YEV" => "Yevreyskaya Autonomous Administrative Region",
        // 
        "RU-CHU" => "Chukotskiy Autonomous District",
        // 
        "RU-KHM" => "Khanty-Mansiyskiy Autonomous District",
        // 
        "RU-NEN" => "Nenetskiy Autonomous District",
        // 
        "RU-YAN" => "Yamalo-Nenetskiy Autonomous District",
        // 
        "US-AK" => "Alaska",
        // 
        "US-AL" => "Alabama",
        // 
        "US-AR" => "Arkansas",
        // 
        "US-AZ" => "Arizona",
        // 
        "US-CA" => "California",
        // 
        "US-CO" => "Colorado",
        // 
        "US-CT" => "Connecticut",
        // 
        "US-DC" => "District of Columbia",
        // 
        "US-DE" => "Delaware",
        // 
        "US-FL" => "Florida",
        // 
        "US-GA" => "Georgia",
        // 
        "US-HI" => "Hawaii",
        // 
        "US-IA" => "Iowa",
        // 
        "US-ID" => "Idaho",
        // 
        "US-IL" => "Illinois",
        // 
        "US-IN" => "Indiana",
        // 
        "US-KS" => "Kansas",
        // 
        "US-KY" => "Kentucky",
        // 
        "US-LA" => "Louisiana",
        // 
        "US-MA" => "Massachusetts",
        // 
        "US-MD" => "Maryland",
        // 
        "US-ME" => "Maine",
        // 
        "US-MI" => "Michigan",
        // 
        "US-MN" => "Minnesota",
        // 
        "US-MO" => "Missouri",
        // 
        "US-MS" => "Mississippi",
        // 
        "US-MT" => "Montana",
        // 
        "US-NC" => "North Carolina",
        // 
        "US-ND" => "North Dakota",
        // 
        "US-NE" => "Nebraska",
        // 
        "US-NH" => "New Hampshire",
        // 
        "US-NJ" => "New Jersey",
        // 
        "US-NM" => "New Mexico",
        // 
        "US-NV" => "Nevada",
        // 
        "US-NY" => "New York",
        // 
        "US-OH" => "Ohio",
        // 
        "US-OK" => "Oklahoma",
        // 
        "US-OR" => "Oregon",
        // 
        "US-PA" => "Pennsylvania",
        // 
        "US-RI" => "Rhode Island",
        // 
        "US-SC" => "South Carolina",
        // 
        "US-SD" => "South Dakota",
        // 
        "US-TN" => "Tennessee",
        // 
        "US-TX" => "Texas",
        // 
        "US-UT" => "Utah",
        // 
        "US-VA" => "Virginia",
        // 
        "US-VT" => "Vermont",
        // 
        "US-WA" => "Washington",
        // 
        "US-WI" => "Wisconsin",
        // 
        "US-WV" => "West Virginia",
        // 
        "US-WY" => "Wyoming",
        /* Countries geographically within continental Europe which use the Euro as their sole currency. At the time of writing, this
					is a synonym for ‘AT BE CY EE FI FR DE ES GR IE IT LT LU LV MT NL PT SI SK’ (the official Eurozone 19), plus ‘AD MC SM VA
					ME’ and Kosovo (other Euro-using countries in continental Europe). Note some other territories using the Euro, but outside
					continental Europe are excluded from this list, and may need to be specified separately. ONLY valid in ONIX 3, and ONLY within
					P.26 – and this use is itself DEPRECATED. Use of an explicit list of countries instead of ECZ is strongly encouraged */
        "ECZ" => "Eurozone",
        // World except as otherwise specified. NOT USED in ONIX 3
        "ROW" => "Rest of world",
        // In ONIX 3, may ONLY be used in <RegionsIncluded>
        "WORLD" => "World",
    ];
}