<?php

namespace App\MklEinvoice\Model;

class MSICSubCategoryCodes
{
    public $jsonData;
    function __construct()
    {
        $jsonString = '[
  {
    "Code": "00000",
    "Description": "NOT APPLICABLE",
    "MSIC Category Reference": ""
  },
  {
    "Code": "01111",
    "Description": "Growing of maize",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01112",
    "Description": "Growing of leguminous crops",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01113",
    "Description": "Growing of oil seeds",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01119",
    "Description": "Growing of other cereals n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01120",
    "Description": "Growing of paddy",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01131",
    "Description": "Growing of leafy or stem vegetables",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01132",
    "Description": "Growing of fruits bearing vegetables",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01133",
    "Description": "Growing of melons",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01134",
    "Description": "Growing of mushrooms and truffles",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01135",
    "Description": "Growing of vegetables seeds, except beet seeds",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01136",
    "Description": "Growing of other vegetables",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01137",
    "Description": "Growing of sugar beet",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01138",
    "Description": "Growing of roots, tubers, bulb or tuberous vegetables",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01140",
    "Description": "Growing of sugar cane",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01150",
    "Description": "Growing of tobacco",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01160",
    "Description": "Growing of fibre crops",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01191",
    "Description": "Growing of flowers",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01192",
    "Description": "Growing of flower seeds",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01193",
    "Description": "Growing of sago (rumbia)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01199",
    "Description": "Growing of other non-perennial crops n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01210",
    "Description": "Growing of grapes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01221",
    "Description": "Growing of banana",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01222",
    "Description": "Growing of mango",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01223",
    "Description": "Growing of durian",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01224",
    "Description": "Growing of rambutan",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01225",
    "Description": "Growing of star fruit",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01226",
    "Description": "Growing of papaya",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01227",
    "Description": "Growing of pineapple",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01228",
    "Description": "Growing of pitaya (dragon fruit)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01229",
    "Description": "Growing of other tropical and subtropical fruits n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01231",
    "Description": "Growing of pomelo",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01232",
    "Description": "Growing of lemon and limes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01233",
    "Description": "Growing of tangerines and mandarin",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01239",
    "Description": "Growing of other citrus fruits n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01241",
    "Description": "Growing of guava",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01249",
    "Description": "Growing of other pome fruits and stones fruits n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01251",
    "Description": "Growing of berries",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01252",
    "Description": "Growing of fruit seeds",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01253",
    "Description": "Growing of edible nuts",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01259",
    "Description": "Growing of other tree and bush fruits",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01261",
    "Description": "Growing of oil palm (estate)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01262",
    "Description": "Growing of oil palm (smallholdings)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01263",
    "Description": "Growing of coconut (estate and smallholdings)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01269",
    "Description": "Growing of other oleaginous fruits n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01271",
    "Description": "Growing of coffee",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01272",
    "Description": "Growing of tea",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01273",
    "Description": "Growing of cocoa",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01279",
    "Description": "Growing of other beverage crops n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01281",
    "Description": "Growing of pepper (piper nigrum)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01282",
    "Description": "Growing of chilies and pepper (capsicum spp.)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01283",
    "Description": "Growing of nutmeg",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01284",
    "Description": "Growing of ginger",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01285",
    "Description": "Growing of plants used primarily in perfumery, in pharmacy or for insecticidal, fungicidal or similar purposes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01289",
    "Description": "Growing of other spices and aromatic crops n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01291",
    "Description": "Growing  of rubber trees (estate)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01292",
    "Description": "Growing of rubber trees (smallholdings)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01293",
    "Description": "Growing of trees for extraction of sap",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01294",
    "Description": "Growing of nipa palm",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01295",
    "Description": "Growing of areca",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01296",
    "Description": "Growing of roselle",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01299",
    "Description": "Growing of other perennial crops n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01301",
    "Description": "Growing of plants for planting",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01302",
    "Description": "Growing of plants for ornamental purposes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01303",
    "Description": "Growing of live plants for bulbs, tubers and roots; cuttings and slips; mushroom spawn",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01304",
    "Description": "Operation of tree nurseries",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01411",
    "Description": "Raising, breeding and production of cattle or buffaloes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01412",
    "Description": "Production of raw milk from cows or buffaloes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01413",
    "Description": "Production of bovine semen",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01420",
    "Description": "Raising and breeding of horses, asses, mules or hinnes",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01430",
    "Description": "Raising and breeding of camels (dromedary) and camelids",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01441",
    "Description": "Raising, breeding and production of sheep and goats",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01442",
    "Description": "Production of raw sheep or goat’s milk",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01443",
    "Description": "Production of raw wool",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01450",
    "Description": "Raising, breeding and production of swine/pigs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01461",
    "Description": "Raising, breeding and production of chicken, broiler",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01462",
    "Description": "Raising, breeding and production of ducks",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01463",
    "Description": "Raising, breeding and production of geese",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01464",
    "Description": "Raising, breeding and production of quails",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01465",
    "Description": "Raising and breeding of other poultry n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01466",
    "Description": "Production of chicken eggs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01467",
    "Description": "Production of duck eggs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01468",
    "Description": "Production of other poultry eggs n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01469",
    "Description": "Operation of poultry hatcheries",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01491",
    "Description": "Raising, breeding and production of semi-domesticated",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01492",
    "Description": "Production of fur skins, reptile or bird’s skin from ranching operation",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01493",
    "Description": "Operation of worm farms, land mollusc farms, snail farms",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01494",
    "Description": "Raising of silk worms and production of silk worm cocoons",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01495",
    "Description": "Bee keeping and production of honey and beeswax",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01496",
    "Description": "Raising and breeding of pet animals",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01497",
    "Description": "Raising and breeding of swiflet",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01499",
    "Description": "Raising of diverse/other animals n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01500",
    "Description": "Mixed Farming",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01610",
    "Description": "Agricultural activities for crops production on a fee or contract basis",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01620",
    "Description": "Agricultural activities for animal production on a fee or contract basis",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01631",
    "Description": "Preparation of crops for primary markets",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01632",
    "Description": "Preparation of tobacco leaves",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01633",
    "Description": "Preparation of cocoa beans",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01634",
    "Description": "Sun-drying of fruits and vegetables",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01640",
    "Description": "Seed processing for propagation",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01701",
    "Description": "Hunting and trapping on a commercial basis",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "01702",
    "Description": "Taking of animals (dead or alive)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02101",
    "Description": "Planting, replanting, transplanting, thinning and conserving of forests and timber tracts",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02102",
    "Description": "Growing of coppice, pulpwood and fire wood",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02103",
    "Description": "Operation of forest tree nurseries",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02104",
    "Description": "Collection and raising of wildings (peat swamp forest tree species)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02105",
    "Description": "Forest plantation",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02201",
    "Description": "Production of round wood for forest-based manufacturing industries",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02202",
    "Description": "Production of round wood used in an unprocessed form",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02203",
    "Description": "Production of charcoal in the forest (using traditional methods)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02204",
    "Description": "Rubber wood logging",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02301",
    "Description": "Collection of rattan, bamboo",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02302",
    "Description": "Bird’s nest collection",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02303",
    "Description": "Wild sago palm collection",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02309",
    "Description": "Gathering of non-wood forest products n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02401",
    "Description": "Carrying out part of the forestry and forest plantation operation on a fee or contract basis for forestry service activities",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "02402",
    "Description": "Carrying out part of the forestry operation on a fee or contract basis for logging service activities",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03111",
    "Description": "Fishing on a commercial basis in ocean and coastal waters",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03112",
    "Description": "Collection of marine crustaceans and molluscs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03113",
    "Description": "Taking of aquatic animals: sea squirts, tunicates, sea urchins",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03114",
    "Description": "Activities of vessels engaged both in fishing and in processing and preserving of fish",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03115",
    "Description": "Gathering of other marine organisms and materials (natural pearls, sponges, coral and algae)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03119",
    "Description": "Marine fishing n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03121",
    "Description": "Fishing on a commercial basis in inland waters",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03122",
    "Description": "Taking of freshwater crustaceans and molluscs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03123",
    "Description": "Taking of freshwater aquatic animals",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03124",
    "Description": "Gathering of freshwater flora and fauna",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03129",
    "Description": "Freshwater fishing n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03211",
    "Description": "Fish farming in sea water",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03212",
    "Description": "Production of bivalve spat (oyster, mussel), lobster lings, shrimp post-larvae, fish fry and fingerlings",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03213",
    "Description": "Growing of laver and other edible seaweeds",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03214",
    "Description": "Culture of crustaceans, bivalves, other molluscs and other aquatic animals in sea water",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03215",
    "Description": "Aquaculture activities in brackish water",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03216",
    "Description": "Aquaculture activities in salt water filled tanks or reservoirs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03217",
    "Description": "Operation of  hatcheries (marine)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03218",
    "Description": "Operation of marine worm farms for fish feed",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03219",
    "Description": "Marine aquaculture n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03221",
    "Description": "Fish farming in freshwater",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03222",
    "Description": "Shrimp farming in freshwater",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03223",
    "Description": "Culture of freshwater crustaceans, bivalves, other molluscs and other aquatic animals",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03224",
    "Description": "Operation of hatcheries (freshwater)",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03225",
    "Description": "Farming of frogs",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "03229",
    "Description": "Freshwater aquaculture n.e.c.",
    "MSIC Category Reference": "A"
  },
  {
    "Code": "05100",
    "Description": "Mining of hard coal",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "05200",
    "Description": "Mining of lignite (brown coal)",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06101",
    "Description": "Extraction of crude petroleum oils",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06102",
    "Description": "Extraction of bituminous or oil shale and tar sand",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06103",
    "Description": "Production of crude petroleum from bituminous shale and sand",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06104",
    "Description": "Processes to obtain crude oils",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06201",
    "Description": "Production of crude gaseous hydrocarbon (natural gas)",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06202",
    "Description": "Extraction of condensates",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06203",
    "Description": "Draining and separation of liquid hydrocarbon fractions",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06204",
    "Description": "Gas desulphurization",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "06205",
    "Description": "Mining of hydrocarbon liquids, obtain through liquefaction or pyrolysis",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07101",
    "Description": "Mining of ores valued chiefly for iron content",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07102",
    "Description": "Beneficiation and agglomeration of iron ores",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07210",
    "Description": "Mining of uranium and thorium ores",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07291",
    "Description": "Mining of tin ores",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07292",
    "Description": "Mining of copper",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07293",
    "Description": "Mining of bauxite (aluminium)",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07294",
    "Description": "Mining of ilmenite",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07295",
    "Description": "Mining of gold",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07296",
    "Description": "Mining of silver",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07297",
    "Description": "Mining of platinum",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07298",
    "Description": "Amang retreatment",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "07299",
    "Description": "Mining of other non-ferrous metal ores n.e.c.",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08101",
    "Description": "Quarrying, rough trimming and sawing of monumental and building stone such as marble, granite (dimension stone), sandstone",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08102",
    "Description": "Quarrying, crushing and breaking of limestone",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08103",
    "Description": "Mining of gypsum and anhydrite",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08104",
    "Description": "Mining of chalk and uncalcined dolomite",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08105",
    "Description": "Extraction and dredging of industrial sand, sand for construction and gravel",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08106",
    "Description": "Breaking and crushing of stone and gravel",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08107",
    "Description": "Quarrying of sand",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08108",
    "Description": "Mining of clays, refractory clays and kaolin",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08109",
    "Description": "Quarrying, crushing and breaking of granite",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08911",
    "Description": "Mining of natural phosphates",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08912",
    "Description": "Mining of natural potassium salts",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08913",
    "Description": "Mining of native sulphur",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08914",
    "Description": "Extraction and preparation of pyrites and pyrrhotite, except roasting",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08915",
    "Description": "Mining of natural barium sulphate and carbonate (barytes and witherite)",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08916",
    "Description": "Mining of natural borates, natural magnesium sulphates (kieserite)",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08917",
    "Description": "Mining of earth colours, fluorspar and other minerals valued chiefly as a source of chemicals",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08918",
    "Description": "Guano mining",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08921",
    "Description": "Peat digging",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08922",
    "Description": "Peat agglomeration",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08923",
    "Description": "Preparation of peat to improve quality or facilitate transport or storage",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08931",
    "Description": "Extraction of salt from underground",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08932",
    "Description": "Salt production by evaporation of sea water or other saline waters",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08933",
    "Description": "Crushing, purification and refining of salt by the producer",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08991",
    "Description": "Mining and quarrying of abrasive materials",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08992",
    "Description": "Mining and quarrying of asbestos",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08993",
    "Description": "Mining and quarrying of siliceous fossil meals",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08994",
    "Description": "Mining and quarrying of natural graphite",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08995",
    "Description": "Mining and quarrying of steatite (talc)",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08996",
    "Description": "Mining and quarrying of gemstones",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "08999",
    "Description": "Other mining and quarrying n.e.c.",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "09101",
    "Description": "Oil and gas extraction service activities provided on a fee or contract basis",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "09102",
    "Description": "Oil and gas field fire fighting services",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "09900",
    "Description": "Support activities for other mining and quarrying",
    "MSIC Category Reference": "B"
  },
  {
    "Code": "10101",
    "Description": "Processing and preserving of meat and production of meat products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10102",
    "Description": "Processing and preserving of poultry and poultry products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10103",
    "Description": "Production of hides and skins originating from slaughterhouses",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10104",
    "Description": "Operation of slaughterhouses engaged in killing, houses dressing or packing meat",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10109",
    "Description": "Processing and preserving of meat n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10201",
    "Description": "Canning of fish, crustaceans and mollusks",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10202",
    "Description": "Processing, curing and preserving of fish, crustacean and molluscs",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10203",
    "Description": "Production of fish meals for human consumption or animal feed",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10204",
    "Description": "Production of keropok including keropok lekor",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10205",
    "Description": "Processing of seaweed",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10301",
    "Description": "Manufacture of fruits and vegetable food products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10302",
    "Description": "Manufacture of fruit and vegetable juices",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10303",
    "Description": "Pineapple canning",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10304",
    "Description": "Manufacture of jams, marmalades and table jellies",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10305",
    "Description": "Manufacture of nuts and nut products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10306",
    "Description": "Manufacture of bean curd products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10401",
    "Description": "Manufacture of crude palm oil",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10402",
    "Description": "Manufacture of refined palm oil",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10403",
    "Description": "Manufacture of palm kernel oil",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10404",
    "Description": "Manufacture of crude and refined vegetable oil",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10405",
    "Description": "Manufacture of coconut oil",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10406",
    "Description": "Manufacture of compound cooking fats",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10407",
    "Description": "Manufacture of animal oils and fats",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10501",
    "Description": "Manufacture of ice cream and other edible ice such as sorbet",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10502",
    "Description": "Manufacture of condensed, powdered and evaporated milk",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10509",
    "Description": "Manufacture of other dairy products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10611",
    "Description": "Rice milling",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10612",
    "Description": "Provision of milling services",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10613",
    "Description": "Flour milling",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10619",
    "Description": "Manufacture of grain mill products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10621",
    "Description": "Manufacture of starches and starch products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10622",
    "Description": "Manufacture of glucose, glucose syrup, maltose, inulin",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10623",
    "Description": "Manufacture of sago and tapioca flour/products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10711",
    "Description": "Manufacture of biscuits and cookies",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10712",
    "Description": "Manufacture of bread, cakes and other bakery products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10713",
    "Description": "Manufacture of snack products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10714",
    "Description": "Manufacture of frozen bakery products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10721",
    "Description": "Manufacture of sugar",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10722",
    "Description": "Manufacture of sugar products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10731",
    "Description": "Manufacture of cocoa products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10732",
    "Description": "Manufacture of chocolate and chocolate products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10733",
    "Description": "Manufacture of sugar confectionery",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10741",
    "Description": "Manufacture of meehoon, noodles and other related products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10742",
    "Description": "Manufacture of pastas",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10750",
    "Description": "Manufacture of prepared meals and dishes",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10791",
    "Description": "Manufacture of coffee",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10792",
    "Description": "Manufacture of tea",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10793",
    "Description": "Manufacture of sauces and condiments",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10794",
    "Description": "Manufacture of spices and curry powder",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10795",
    "Description": "Manufacture of egg products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10799",
    "Description": "Manufacture of other food products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "10800",
    "Description": "Manufacture of prepared animal feeds",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "11010",
    "Description": "Distilling, rectifying and blending of spirits",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "11020",
    "Description": "Manufacture of wines",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "11030",
    "Description": "Manufacture of malt liquors and malt",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "11041",
    "Description": "Manufacture of soft drinks",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "11042",
    "Description": "Production of natural mineral water and other bottled water",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "12000",
    "Description": "MANUFACTURE OF TOBACCO PRODUCTS",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13110",
    "Description": "Preparation and spinning of textile fibres",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13120",
    "Description": "Weaving of textiles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13131",
    "Description": "Batik making",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13132",
    "Description": "Dyeing, bleaching, printing and finishing of yarns and fabrics",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13139",
    "Description": "Other finishing textiles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13910",
    "Description": "Manufacture of knitted and crocheted fabrics",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13921",
    "Description": "Manufacture of made-up articles of any textile materials, including of knitted or crocheted fabrics",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13922",
    "Description": "Manufacture of made-up furnishing articles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13930",
    "Description": "Manufacture of carpets and rugs",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13940",
    "Description": "Manufacture of cordage, rope, twine and netting",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "13990",
    "Description": "Manufacture of other textiles n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "14101",
    "Description": "Manufacture of specific wearing apparel",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "14102",
    "Description": "Manufacture of clothings",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "14103",
    "Description": "Custom tailoring",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "14109",
    "Description": "Manufacture of other clothing accessories",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "14200",
    "Description": "Manufacture of articles made of fur skins",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "14300",
    "Description": "Manufacture of knitted and crocheted apparel",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "15110",
    "Description": "Tanning and dressing of leather; dressing and dyeing of fur",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "15120",
    "Description": "Manufacture of luggage, handbags and the like, saddlery and harness",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "15201",
    "Description": "Manufacture of leather footwear",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "15202",
    "Description": "Manufacture of plastic footwear",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "15203",
    "Description": "Manufacture of rubber footwear",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "15209",
    "Description": "Manufacture of other footwear n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "16211",
    "Description": "Manufacture of veneer sheets and plywood",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "16221",
    "Description": "Manufacture of builders\' carpentry",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "16222",
    "Description": "Manufacture of joinery wood products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "16230",
    "Description": "Manufacture of wooden containers",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "16291",
    "Description": "Manufacture of wood charcoal",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "16292",
    "Description": "Manufacture of other products of wood, cane, articles of cork, straw and plaiting materials",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17010",
    "Description": "Manufacture of pulp, paper and paperboard",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17020",
    "Description": "Manufacture of corrugated paper and paperboard and of containers of paper and paperboard",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17091",
    "Description": "Manufacture of envelopes and letter-card",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17092",
    "Description": "Manufacture of household and personal hygiene paper",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17093",
    "Description": "Manufacture of gummed or adhesive paper in strips or rolls and labels and wall paper",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17094",
    "Description": "Manufacture of effigies, funeral paper goods, joss paper",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "17099",
    "Description": "Manufacture of other articles of paper and paperboard n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "18110",
    "Description": "Printing",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "18120",
    "Description": "Service activities related to printing",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "18200",
    "Description": "Reproduction of recorded media",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "19100",
    "Description": "Manufacture of coke oven products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "19201",
    "Description": "Manufacture of refined petroleum products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "19202",
    "Description": "Manufacture of bio-diesel products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20111",
    "Description": "Manufacture of liquefied or compressed inorganic industrial or medical gases",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20112",
    "Description": "Manufacture of basic organic chemicals",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20113",
    "Description": "Manufacture of inorganic compounds",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20119",
    "Description": "Manufacture of other basic chemicals n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20121",
    "Description": "Manufacture of fertilizers",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20129",
    "Description": "Manufacture of associated nitrogen products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20131",
    "Description": "Manufacture of plastic in primary forms",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20132",
    "Description": "Manufacture of synthetic rubber in primary forms: synthetic rubber, factice",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20133",
    "Description": "Manufacture of mixtures of synthetic rubber and natural rubber or rubber - like gums",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20210",
    "Description": "Manufacture of pesticides and other agrochemical products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20221",
    "Description": "Manufacture of paints, varnishes and similar coatings ink and mastics",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20222",
    "Description": "Manufacture of printing ink",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20231",
    "Description": "Manufacture of soap and detergents, cleaning and polishing preparations",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20232",
    "Description": "Manufacture of perfumes and toilet preparations",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20291",
    "Description": "Manufacture of photographic plates, films, sensitized paper and other sensitized unexposed materials",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20292",
    "Description": "Manufacture of writing and drawing ink",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20299",
    "Description": "Manufacture of other chemical products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "20300",
    "Description": "Manufacture of man-made fibres",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21001",
    "Description": "Manufacture of medicinal active substances to be used for their pharmacological properties in the manufacture of medicaments",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21002",
    "Description": "Processing of blood",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21003",
    "Description": "Manufacture of medicaments",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21004",
    "Description": "Manufacture of chemical contraceptive products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21005",
    "Description": "Manufacture of medical diagnostic preparation",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21006",
    "Description": "Manufacture of radioactive in-vivo diagnostic substances",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21007",
    "Description": "Manufacture of biotech pharmaceuticals",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "21009",
    "Description": "Manufacture of other pharmaceuticals, medicinal chemical and botanical products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22111",
    "Description": "Manufacture of rubber tyres for vehicles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22112",
    "Description": "Manufacture of interchangeable tyre treads and retreading rubber tyres",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22191",
    "Description": "Manufacture of other products of natural or synthetic rubber, unvulcanized, vulcanized or hardened",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22192",
    "Description": "Manufacture of rubber gloves",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22193",
    "Description": "Rubber remilling and latex processing",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22199",
    "Description": "Manufacture of other rubber products n.e.c",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22201",
    "Description": "Manufacture of semi-manufactures of plastic products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22202",
    "Description": "Manufacture of finished plastic products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22203",
    "Description": "Manufacture of plastic articles for the packing of goods",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22204",
    "Description": "Manufacture of builders\' plastics ware",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22205",
    "Description": "Manufacture of plastic tableware, kitchenware and toilet articles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "22209",
    "Description": "Manufacture of diverse plastic products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23101",
    "Description": "Manufacture of flat glass, including wired, coloured or tinted flat glass",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23102",
    "Description": "Manufacture of laboratory, hygienic or pharmaceutical glassware",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23109",
    "Description": "Manufacture of other glass products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "",
    "Description": "Manufacture of non-metallic mineral products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23911",
    "Description": "Manufacture of refractory mortars and concretes",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23912",
    "Description": "Manufacture of refractory ceramic goods",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23921",
    "Description": "Manufacture of non-refractory ceramic",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23929",
    "Description": "Manufacture of other clay building materials",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23930",
    "Description": "Manufacture of other porcelain and ceramic products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23941",
    "Description": "Manufacture of hydraulic cement",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23942",
    "Description": "Manufacture of lime and plaster",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23951",
    "Description": "Manufacture of ready-mix and dry-mix concrete and mortars",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23952",
    "Description": "Manufacture of precast concrete, cement or artificial stone articles for use in construction",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23953",
    "Description": "Manufacture of prefabricated structural components for building or civil engineering of cement, concrete or artificial stone",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23959",
    "Description": "Manufacture of other articles of concrete, cement and plaster n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23960",
    "Description": "Cutting, shaping and finishing of stone",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "23990",
    "Description": "Manufacture of other non-metallic mineral products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24101",
    "Description": "Production of pig iron and spiegeleisen in pigs, blocks or other primary forms",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24102",
    "Description": "Production of bars and rods of stainless steel or other alloy steel",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24103",
    "Description": "Manufacture of seamless tubes, by hot rolling, hot extrusion or hot drawing, or by cold drawing or cold rolling",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24104",
    "Description": "Manufacture of steel tube fittings",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24109",
    "Description": "Manufacture of other basic iron and steel products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24201",
    "Description": "Tin smelting",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24202",
    "Description": "Production of aluminium from alumina",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24209",
    "Description": "Manufacture of other basic precious and other non-ferrous metals n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24311",
    "Description": "Casting of iron",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24312",
    "Description": "Casting of steel",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "24320",
    "Description": "Casting of non-ferrous metals",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25111",
    "Description": "Manufacture of industrial frameworks in metal",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25112",
    "Description": "Manufacture of prefabricated buildings mainly of metal",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25113",
    "Description": "Manufacture of metal doors, windows and their frames, shutters and gates",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25119",
    "Description": "Manufacture of other structural metal products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25120",
    "Description": "Manufacture of tanks, reservoirs and containers of metal",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25130",
    "Description": "Manufacture of steam generators, except central heating hot water boilers",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25200",
    "Description": "Manufacture of weapons and ammunition",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25910",
    "Description": "Forging, pressing, stamping and roll-forming of metal; powder metallurgy",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25920",
    "Description": "Treatment and coating of metals; machining",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25930",
    "Description": "Manufacture of cutlery, hand tools and general hardware",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25991",
    "Description": "Manufacture of tins and cans for food products, collapsible tubes and boxes",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25992",
    "Description": "Manufacture of metal cable, plaited bands and similar articles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25993",
    "Description": "Manufacture of bolts, screws, nuts and similar threaded products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25994",
    "Description": "Manufacture of metal household articles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "25999",
    "Description": "Manufacture of any other fabricated metal products n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26101",
    "Description": "Manufacture of diodes, transistors and similar semiconductor devices",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26102",
    "Description": "Manufacture electronic integrated circuits micro assemblies",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26103",
    "Description": "Manufacture of electrical capacitors and resistors",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26104",
    "Description": "Manufacture of printed circuit boards",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26105",
    "Description": "Manufacture of display components",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26109",
    "Description": "Manufacture of other components for electronic applications",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26201",
    "Description": "Manufacture of computers",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26202",
    "Description": "Manufacture of peripheral equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26300",
    "Description": "Manufacture of communication equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26400",
    "Description": "Manufacture of consumer electronics",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26511",
    "Description": "Manufacture of measuring, testing, navigating and control equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26512",
    "Description": "Manufacture of industrial process control equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26520",
    "Description": "Manufacture of watches and clocks and parts",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26600",
    "Description": "Manufacture of irradiation, electro medical and electrotherapeutic equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26701",
    "Description": "Manufacture of optical instruments and equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26702",
    "Description": "Manufacture of photographic equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "26800",
    "Description": "Manufacture of magnetic and optical recording media",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27101",
    "Description": "Manufacture of electric motors, generators and transformers",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27102",
    "Description": "Manufacture of electricity distribution and control apparatus",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27200",
    "Description": "Manufacture of batteries and accumulators",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27310",
    "Description": "Manufacture of fibre optic cables",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27320",
    "Description": "Manufacture of other electronic and electric wires and cables",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27330",
    "Description": "Manufacture of current-carrying and non current-carrying wiring devices for electrical circuits regardless of material",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27400",
    "Description": "Manufacture of electric lighting equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27500",
    "Description": "Manufacture of domestic appliances",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "27900",
    "Description": "Manufacture of miscellaneous electrical equipment other than motors, generators and transformers, batteries and accumulators, wires and wiring devices, lighting equipment or domestic appliances",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28110",
    "Description": "Manufacture of engines and turbines, except aircraft, vehicle and cycle engines",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28120",
    "Description": "Manufacture of fluid power equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28130",
    "Description": "Manufacture of other pumps, compressors, taps and valves",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28140",
    "Description": "Manufacture of bearings, gears, gearing and driving elements",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28150",
    "Description": "Manufacture of ovens, furnaces and furnace burners",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28160",
    "Description": "Manufacture of lifting and handling equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28170",
    "Description": "Manufacture of office machinery and equipment (except computers and peripheral equipment)",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28180",
    "Description": "Manufacture of power-driven hand tools with self-contained electric or non-electric motor or pneumatic drives",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28191",
    "Description": "Manufacture of refrigerating or freezing industrial equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28192",
    "Description": "Manufacture of air-conditioning machines, including for motor vehicles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28199",
    "Description": "Manufacture of other general-purpose machinery n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28210",
    "Description": "Manufacture of agricultural and forestry machinery",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28220",
    "Description": "Manufacture of metal-forming machinery and machine tools",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28230",
    "Description": "Manufacture of machinery for metallurgy",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28240",
    "Description": "Manufacture of machinery for mining, quarrying and construction",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28250",
    "Description": "Manufacture of machinery for food, beverage and tobacco processing",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28260",
    "Description": "Manufacture of machinery for textile, apparel and leather production",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "28290",
    "Description": "Manufacture of other special-purpose machinery n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "29101",
    "Description": "Manufacture of passenger cars",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "29102",
    "Description": "Manufacture of commercial vehicles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "29200",
    "Description": "Manufacture of bodies (coachwork) for motor vehicles; manufacture of trailers and semi- trailers",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "29300",
    "Description": "Manufacture of parts and accessories for motor vehicles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30110",
    "Description": "Building of ships and floating structures",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30120",
    "Description": "Building of pleasure and sporting boats",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30200",
    "Description": "Manufacture of railway locomotives and rolling stock",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30300",
    "Description": "Manufacture of air and spacecraft and related machinery",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30400",
    "Description": "Manufacture of military fighting vehicles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30910",
    "Description": "Manufacture of motorcycles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30920",
    "Description": "Manufacture of bicycles and invalid carriages",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "30990",
    "Description": "Manufacture of other transport equipments n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "31001",
    "Description": "Manufacture of wooden and cane furniture",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "31002",
    "Description": "Manufacture of metal furniture",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "31003",
    "Description": "Manufacture of mattress",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "31009",
    "Description": "Manufacture of other furniture, except of stone, concrete or ceramic",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32110",
    "Description": "Manufacture of jewellery and related articles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32120",
    "Description": "Manufacture of imitation jewellery and related articles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32200",
    "Description": "Manufacture of musical instruments",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32300",
    "Description": "Manufacture of sports goods",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32400",
    "Description": "Manufacture of games and toys",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32500",
    "Description": "Manufacture of medical and dental instrument and supplies",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32901",
    "Description": "Manufacture of stationery",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "32909",
    "Description": "Other manufacturing n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33110",
    "Description": "Repair of fabricated metal products",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33120",
    "Description": "Repair and maintenance of industrial machinery and equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33131",
    "Description": "Repair and maintenance of the measuring, testing, navigating and control equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33132",
    "Description": "Repair and maintenance of irradiation, electro medical and electrotherapeutic equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33133",
    "Description": "Repair of optical instruments and photographic equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33140",
    "Description": "Repair and maintenance of electrical equipment except domestic appliances",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33150",
    "Description": "Repair and maintenance of transport equipment except motorcycles and bicycles",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33190",
    "Description": "Repair and maintenance of other equipment n.e.c.",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "33200",
    "Description": "Installation of industrial machinery and equipment",
    "MSIC Category Reference": "C"
  },
  {
    "Code": "35101",
    "Description": "Operation of generation facilities that produce electric energy",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35102",
    "Description": "Operation of transmission, distribution and sales of electricity",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35201",
    "Description": "Manufacture of gaseous fuels with a specified calorific value, by purification, blending and other processes from gases of various types including natural gas",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35202",
    "Description": "Transportation, distribution and supply of gaseous fuels of all kinds through a system of mains",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35203",
    "Description": "Sale of gas to the user through mains",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35301",
    "Description": "Production, collection and distribution of steam and hot water for heating, power and other purposes",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35302",
    "Description": "Production and distribution of cooled air, chilled water for cooling purposes",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "35303",
    "Description": "Production of ice, including ice for food and non-food (e.g. cooling) purposes",
    "MSIC Category Reference": "D"
  },
  {
    "Code": "36001",
    "Description": "Purification and distribution of water for water supply purposes",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "36002",
    "Description": "Desalting of sea or ground water to produce water as the principal product of interest",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "37000",
    "Description": "Sewerage and similar activities",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38111",
    "Description": "Collection of non-hazardous solid waste (i.e. garbage) within a local area",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38112",
    "Description": "Collection of recyclable materials",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38113",
    "Description": "Collection of refuse in litter-bins in public places",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38114",
    "Description": "Collection of construction and demolition waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38115",
    "Description": "Operation of waste transfer stations for non-hazardous waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38121",
    "Description": "Collection of hazardous waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38122",
    "Description": "Operation of waste transfer stations for hazardous waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38210",
    "Description": "Treatment and disposal of non-hazardous waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38220",
    "Description": "Treatment and disposal of hazardous waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38301",
    "Description": "Mechanical crushing of metal waste",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38302",
    "Description": "Dismantling of automobiles, computers, televisions and other equipment for material recover",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38303",
    "Description": "Reclaiming of rubber such as used tires to produce secondary raw material",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38304",
    "Description": "Reuse of rubber products",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "38309",
    "Description": "Materials recovery n.e.c.",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "39000",
    "Description": "Remediation activities and other waste management services",
    "MSIC Category Reference": "E"
  },
  {
    "Code": "41001",
    "Description": "Residential buildings",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "41002",
    "Description": "Non-residential buildings",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "41003",
    "Description": "Assembly and erection of prefabricated constructions on the site",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "41009",
    "Description": "Construction of buildings n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42101",
    "Description": "Construction of motorways, streets, roads, other vehicular and pedestrian ways",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42102",
    "Description": "Surface work on streets, roads, highways, bridges or tunnels",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42103",
    "Description": "Construction of bridges, including those for elevated highways",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42104",
    "Description": "Construction of tunnels",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42105",
    "Description": "Construction of railways and subways",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42106",
    "Description": "Construction of airfield/airports runways",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42109",
    "Description": "Construction of roads and railways n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42201",
    "Description": "Long-distance pipelines, communication and power lines",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42202",
    "Description": "Urban pipelines, urban communication and power lines; ancillary urban works",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42203",
    "Description": "Water main and line construction",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42204",
    "Description": "Reservoirs",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42205",
    "Description": "Construction of irrigation systems (canals)",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42206",
    "Description": "Construction of sewer systems (including repair) and sewage disposal plants",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42207",
    "Description": "Construction of power plants",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42209",
    "Description": "Construction of utility projects n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42901",
    "Description": "Construction of refineries",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42902",
    "Description": "Construction of waterways, harbour and river works, pleasure ports (marinas), locks",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42903",
    "Description": "Construction of dams and dykes",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42904",
    "Description": "Dredging of waterways",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42905",
    "Description": "Outdoor sports facilities",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42906",
    "Description": "Land subdivision with land improvement",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "42909",
    "Description": "Construction of other engineering projects n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43110",
    "Description": "Demolition or wrecking of buildings and other structures",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43121",
    "Description": "Clearing of building sites",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43122",
    "Description": "Earth moving",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43123",
    "Description": "Drilling, boring and core sampling for construction, geophysical, geological or similar purposes",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43124",
    "Description": "Site preparation for mining",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43125",
    "Description": "Drainage of agricultural or forestry land",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43126",
    "Description": "Land reclamation work",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43129",
    "Description": "Other site preparation activities n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43211",
    "Description": "Electrical wiring and fittings",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43212",
    "Description": "Telecommunications wiring",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43213",
    "Description": "Computer network and cable television wiring",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43214",
    "Description": "Satellite dishes",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43215",
    "Description": "Lighting systems",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43216",
    "Description": "Security systems",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43219",
    "Description": "Electrical installation n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43221",
    "Description": "Installation of heating systems (electric, gas and oil)",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43222",
    "Description": "Installation of furnaces, cooling towers",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43223",
    "Description": "Installation of non-electric solar energy collectors",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43224",
    "Description": "Installation of plumbing and sanitary equipment",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43225",
    "Description": "Installation of ventilation, refrigeration or air-conditioning equipment and ducts",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43226",
    "Description": "Installation of gas fittings",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43227",
    "Description": "Installation of fire and lawn sprinkler systems",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43228",
    "Description": "Steam piping",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43229",
    "Description": "Plumbing, heat and air-conditioning installation n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43291",
    "Description": "Installation of elevators, escalators in buildings or other construction projects",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43292",
    "Description": "Installation of automated and revolving doors in buildings or other construction projects",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43293",
    "Description": "Installation of lighting conductors in buildings or other construction projects",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43294",
    "Description": "Installation vacuum cleaning systems in buildings or other construction projects",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43295",
    "Description": "Installation thermal, sound or vibration insulation in buildings or other construction projects",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43299",
    "Description": "Other construction installation n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43301",
    "Description": "Installation of doors, windows, door and window frames of wood or other materials, fitted kitchens, staircases, shop fittings and furniture",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43302",
    "Description": "Laying, tiling, hanging or fitting in buildings or other construction projects of various types of materials",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43303",
    "Description": "Interior and exterior painting of buildings",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43304",
    "Description": "Painting of civil engineering structures",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43305",
    "Description": "Installation of glass, mirrors",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43306",
    "Description": "Interior completion",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43307",
    "Description": "Cleaning of new buildings after construction",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43309",
    "Description": "Other building completion and finishing work n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43901",
    "Description": "Construction of foundations, including pile driving",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43902",
    "Description": "Erection of non-self-manufactured steel elements",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43903",
    "Description": "Scaffolds and work platform erecting and dismantling",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43904",
    "Description": "Bricklaying and stone setting",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43905",
    "Description": "Construction of outdoor swimming pools",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43906",
    "Description": "Steam cleaning, sand blasting and similar activities for building exteriors",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43907",
    "Description": "Renting of construction machinery and equipment with operator (e.g. cranes)",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "43909",
    "Description": "Other specialized construction activities, n.e.c.",
    "MSIC Category Reference": "F"
  },
  {
    "Code": "45101",
    "Description": "Wholesale and retail of new motor vehicles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45102",
    "Description": "Wholesale and retail of used motor vehicles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45103",
    "Description": "Sale of industrial, commercial and agriculture vehicles – new",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45104",
    "Description": "Sale of industrial, commercial and agriculture vehicles – used",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45105",
    "Description": "Sale by commission agents",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45106",
    "Description": "Car auctions",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45109",
    "Description": "Sale of other motor vehicles n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45201",
    "Description": "Maintenance and repair of motor vehicles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45202",
    "Description": "Spraying and painting",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45203",
    "Description": "Washing and polishing (car wash)",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45204",
    "Description": "Repair of motor vehicle seats",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45205",
    "Description": "Installation of parts and accessories not as part of the manufacturing process",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45300",
    "Description": "Wholesale and retail sale of all kinds of parts, components, supplies, tools and accessories for motor vehicles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45401",
    "Description": "Wholesale and retail sale of motorcycles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45402",
    "Description": "Wholesale and retail sale of parts and accessories for motorcycles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "45403",
    "Description": "Repair and maintenance of motorcycles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46100",
    "Description": "Wholesale on a fee or contract basis",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46201",
    "Description": "Wholesale of rubber",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46202",
    "Description": "Wholesale of palm oil",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46203",
    "Description": "Wholesale of lumber and timber",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46204",
    "Description": "Wholesale of flowers and plants",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46205",
    "Description": "Wholesale of livestock",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46209",
    "Description": "Wholesale of agricultural raw material and live animal n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46311",
    "Description": "Wholesale of meat, poultry and eggs",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46312",
    "Description": "Wholesale of fish and other seafood",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46313",
    "Description": "Wholesale of fruits",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46314",
    "Description": "Wholesale of vegetables",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46319",
    "Description": "Wholesale of meat, fish, fruits and vegetables n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46321",
    "Description": "Wholesale of rice, other grains, flour and sugars",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46322",
    "Description": "Wholesale of dairy products",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46323",
    "Description": "Wholesale of confectionary",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46324",
    "Description": "Wholesale of  biscuits, cakes, breads and other bakery products",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46325",
    "Description": "Wholesale of coffee, tea, cocoa and other beverages",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46326",
    "Description": "Wholesale of beer, wine and spirits",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46327",
    "Description": "Wholesale of tobacco, cigar, cigarettes",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46329",
    "Description": "Wholesale of other foodstuffs",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46411",
    "Description": "Wholesale of yarn and fabrics",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46412",
    "Description": "Wholesale of household linen, towels, blankets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46413",
    "Description": "Wholesale of clothing",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46414",
    "Description": "Wholesale of clothing accessories",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46415",
    "Description": "Wholesale of fur articles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46416",
    "Description": "Wholesale of footwear",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46417",
    "Description": "Wholesale of haberdashery",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46419",
    "Description": "Wholesale of textiles, clothing n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46421",
    "Description": "Wholesale of pharmaceutical and medical goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46422",
    "Description": "Wholesale of perfumeries, cosmetics, soap and toiletries",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46431",
    "Description": "Wholesale of bicycles and their parts and accessories",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46432",
    "Description": "Wholesale of photographic and optical goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46433",
    "Description": "Wholesale of leather goods and travel accessories",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46434",
    "Description": "Wholesale of musical instruments, games and toys, sports goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46441",
    "Description": "Wholesale of handicrafts and artificial flowers",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46442",
    "Description": "Wholesale of cut flowers and plants",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46443",
    "Description": "Wholesale of watches and clocks",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46444",
    "Description": "Wholesale of jewellery",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46491",
    "Description": "Wholesale of household furniture",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46492",
    "Description": "Wholesale of household appliances",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46493",
    "Description": "Wholesale of lighting equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46494",
    "Description": "Wholesale of household utensils and cutlery, crockery, glassware, chinaware and pottery",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46495",
    "Description": "Wholesale of woodenware, wickerwork and corkware",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46496",
    "Description": "Wholesale of electrical and electronic goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46497",
    "Description": "Wholesale of stationery, books, magazines and newspapers",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46499",
    "Description": "Wholesale of other household goods n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46510",
    "Description": "Wholesale of computer hardware, software and peripherals",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46521",
    "Description": "Wholesale of telephone and telecommunications equipment, cell phones, pagers",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46522",
    "Description": "Wholesale of electronic components and wiring accessories",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46531",
    "Description": "Wholesale of agricultural machinery, equipment and supplies",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46532",
    "Description": "Wholesale of lawn mowers however operated",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46591",
    "Description": "Wholesale of office machinery and business equipment, except computers and computer peripheral equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46592",
    "Description": "Wholesale of office furniture",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46593",
    "Description": "Wholesale of computer-controlled machines tools",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46594",
    "Description": "Wholesale of industrial machinery, equipment and supplies",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46595",
    "Description": "Wholesale of construction and civil engineering machinery and equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46596",
    "Description": "Wholesale of lift escalators, air-conditioning, security and fire fighting equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46599",
    "Description": "Wholesale of other machinery for use in industry, trade and navigation and other services n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46611",
    "Description": "Wholesale of petrol, diesel, lubricants",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46612",
    "Description": "Wholesale of liquefied petroleum gas",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46619",
    "Description": "Wholesale of other solid, liquid and gaseous fuels and related products n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46621",
    "Description": "Wholesale of ferrous and non-ferrous metal ores and metals",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46622",
    "Description": "Wholesale of ferrous and non-ferrous semi-finished metal ores and products n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46631",
    "Description": "Wholesale of logs, sawn timber, plywood, veneer and related products",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46632",
    "Description": "Wholesale of paints and varnish",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46633",
    "Description": "Wholesale of construction materials",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46634",
    "Description": "Wholesale of fittings and fixtures",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46635",
    "Description": "Wholesale of hot water heaters",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46636",
    "Description": "Wholesale of sanitary installation and equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46637",
    "Description": "Wholesale of tools",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46639",
    "Description": "Wholesale of other construction materials, hardware, plumbing and heating equipment and supplies n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46691",
    "Description": "Wholesale of industrial chemicals",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46692",
    "Description": "Wholesale of fertilizers and agrochemical products",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46693",
    "Description": "Wholesale of plastic materials in primary forms",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46694",
    "Description": "Wholesale of rubber scrap",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46695",
    "Description": "Wholesale of textile fibres",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46696",
    "Description": "Wholesale of paper in bulk, packaging materials",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46697",
    "Description": "Wholesale of precious stones",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46698",
    "Description": "Wholesale of metal and non-metal waste and scrap and materials for recycling",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46699",
    "Description": "Dismantling of automobiles, computer, televisions and other equipment to obtain and re-sell usable parts",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46901",
    "Description": "Wholesale of aquarium fishes, pet birds and animals",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46902",
    "Description": "Wholesale of animal/pet food",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "46909",
    "Description": "Wholesale of a variety of goods without any particular specialization n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47111",
    "Description": "Provision stores",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47112",
    "Description": "Supermarket",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47113",
    "Description": "Mini market",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47114",
    "Description": "Convenience stores",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47191",
    "Description": "Department stores",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47192",
    "Description": "Department stores and supermarket",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47193",
    "Description": "Hypermarket",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47194",
    "Description": "News agent and miscellaneous goods store",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47199",
    "Description": "Other retail sale in non-specialized stores n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47211",
    "Description": "Retail sale of rice, flour, other grains and sugars",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47212",
    "Description": "Retail sale of fresh or preserved vegetables and fruits",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47213",
    "Description": "Retail sale of dairy products and eggs",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47214",
    "Description": "Retail sale of meat and meat products (including poultry)",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47215",
    "Description": "Retail sale of fish, other seafood and products thereof",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47216",
    "Description": "Retail sale of bakery products and sugar confectionery",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47217",
    "Description": "Retail sale of mee, kuey teow, mee hoon, wantan skins and other food products made from flour or soya",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47219",
    "Description": "Retail sale of other food products n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47221",
    "Description": "Retail sale of beer, wine and spirits",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47222",
    "Description": "Retail sale of tea, coffee, soft drinks, mineral water and other beverages",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47230",
    "Description": "Retail sale of tobacco products in specialized store",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47300",
    "Description": "Retail sale of automotive fuel in specialized stores",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47412",
    "Description": "Retail sale of video game consoles and non-customized software",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47413",
    "Description": "Retail sale of telecommunication equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47420",
    "Description": "Retail sale of audio and video equipment in specialized store",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47510",
    "Description": "Retail sale of textiles in specialized stores",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47531",
    "Description": "Retail sale of carpets and rugs",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47532",
    "Description": "Retail sale of curtains and net curtains",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47533",
    "Description": "Retail sale of wallpaper and floor coverings",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47591",
    "Description": "Retail sale of household furniture",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47592",
    "Description": "Retail sale of articles for lighting",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47593",
    "Description": "Retail sale of household utensils and cutlery, crockery, glassware, chinaware and pottery",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47594",
    "Description": "Retail sale of wood, cork goods and wickerwork goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47595",
    "Description": "Retail sale of household appliances",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47596",
    "Description": "Retail sale of musical instruments and scores",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47597",
    "Description": "Retail sale of security systems",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47598",
    "Description": "Retail sale of household articles and equipment n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47611",
    "Description": "Retail sale of office supplies and equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47612",
    "Description": "Retail sale of books, newspapers and stationary",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47631",
    "Description": "Retail sale of sports goods and equipments",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47632",
    "Description": "Retail sale of fishing equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47633",
    "Description": "Retail sale of camping goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47634",
    "Description": "Retail sale of boats and equipments",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47635",
    "Description": "Retail sale of bicycles and related parts and accessories",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47640",
    "Description": "Retail sale of games and toys, made of all materials",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47711",
    "Description": "Retail sale of articles of clothing, articles of fur and clothing accessories",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47712",
    "Description": "Retail sale of footwear",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47713",
    "Description": "Retail sale of leather goods, accessories of leather and leather substitutes",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47721",
    "Description": "Stores specialized in retail sale of pharmaceuticals, medical and orthopaedic goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47722",
    "Description": "Stores specialized in retail sale of perfumery, cosmetic and toilet articles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47731",
    "Description": "Retail sale of photographic and precision equipment",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47732",
    "Description": "Retail sale of watches and clocks",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47733",
    "Description": "Retail sale of jewellery",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47734",
    "Description": "Retail sale of flowers, plants, seeds, fertilizers",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47735",
    "Description": "Retail sale of souvenirs, craftwork and religious articles",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47736",
    "Description": "Retail sale of household fuel oil, cooking gas, coal and fuel wood",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47737",
    "Description": "Retail sale of spectacles and other optical goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47738",
    "Description": "Retail sale of aquarium fishes, pet animals and pet food",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47739",
    "Description": "Other retail sale of new goods in specialized stores n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47741",
    "Description": "Retail sale of second-hand books",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47742",
    "Description": "Retail sale of second-hand electrical and electronic goods",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47743",
    "Description": "Retail sale of antiques",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47744",
    "Description": "Activities of auctioning houses (retail)",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47749",
    "Description": "Retail sale of second-hand goods n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47810",
    "Description": "Retail sale of food, beverages and tobacco products via stalls or markets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47820",
    "Description": "Retail sale of textiles, clothing and footwear via stalls or markets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47891",
    "Description": "Retail sale of carpets and rugs via stalls or markets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47893",
    "Description": "Retail sale of games and toys via stalls or markets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47894",
    "Description": "Retail sale of household appliances and consumer electronics via stall or markets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47895",
    "Description": "Retail sale of music and video recordings via stall or markets",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47911",
    "Description": "Retail sale of any kind of product by mail order",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47912",
    "Description": "Retail sale of any kind of product over the Internet",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47913",
    "Description": "Direct sale via television, radio and telephone",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47914",
    "Description": "Internet retail auctions",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47992",
    "Description": "Retail sale of any kind of product through vending machines",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "47999",
    "Description": "Other retail sale not in stores, stalls or markets n.e.c.",
    "MSIC Category Reference": "G"
  },
  {
    "Code": "49110",
    "Description": "Passenger transport by inter-urban railways",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49120",
    "Description": "Freight transport by inter-urban, suburban and urban railways",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49211",
    "Description": "City bus services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49212",
    "Description": "Urban and suburban railway passenger transport service",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49221",
    "Description": "Express bus services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49222",
    "Description": "Employees bus services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49223",
    "Description": "School bus services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49224",
    "Description": "Taxi operation and limousine services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49225",
    "Description": "Rental of cars with driver",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49229",
    "Description": "Other passenger land transport n.e.c.",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49230",
    "Description": "Freight transport by road",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "49300",
    "Description": "Transport via pipeline",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50111",
    "Description": "Operation of excursion, cruise or sightseeing boats",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50112",
    "Description": "Operation of ferries, water taxis",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50113",
    "Description": "Rental of pleasure boats with crew for sea and coastal water transport",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50121",
    "Description": "Transport of freight overseas and coastal waters, whether scheduled or not",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50122",
    "Description": "Transport by towing or pushing of barges, oil rigs",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50211",
    "Description": "Transport of passenger via rivers, canals, lakes and other inland waterways",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50212",
    "Description": "Rental of pleasure boats with crew for inland water transport",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "50220",
    "Description": "Transport of freight via rivers, canals, lakes and other inland waterways",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "51101",
    "Description": "Transport of passengers by air over regular routes and on regular schedules",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "51102",
    "Description": "Non-scheduled transport of passenger by air",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "51103",
    "Description": "Renting of air-transport equipment with operator for the purpose of passenger transportation",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "51201",
    "Description": "Transport freight by air over regular routes and on regular schedules",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "51202",
    "Description": "Non-scheduled transport of freight by air",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "51203",
    "Description": "Renting of air-transport equipment with operator for the purpose of freight transportation",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52100",
    "Description": "Warehousing and storage services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52211",
    "Description": "Operation of terminal facilities",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52212",
    "Description": "Towing and road side assistance",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52213",
    "Description": "Operation of parking facilities for motor vehicles (parking lots)",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52214",
    "Description": "Highway, bridge and tunnel operation services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52219",
    "Description": "Other service activities incidental to land transportation n.e.c.",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52221",
    "Description": "Port, harbours and piers operation services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52222",
    "Description": "Vessel salvage and refloating services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52229",
    "Description": "Other service activities incidental to water transportation n.e.c.",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52231",
    "Description": "Operation of terminal facilities",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52232",
    "Description": "Airport and air-traffic-control activities",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52233",
    "Description": "Ground service activities on airfields",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52234",
    "Description": "Fire fighting and fire-prevention services at airports",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52239",
    "Description": "Other service activities incidental to air transportation n.e.c.",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52241",
    "Description": "Stevedoring services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52249",
    "Description": "Other cargo handling activities n.e.c.",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52291",
    "Description": "Forwarding of freight",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52292",
    "Description": "Brokerage for ship and aircraft space",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "52299",
    "Description": "Other transportation support activities n.e.c.",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "53100",
    "Description": "National postal services",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "53200",
    "Description": "Courier activities other than national post activities",
    "MSIC Category Reference": "H"
  },
  {
    "Code": "55101",
    "Description": "Hotels and resort hotels",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55102",
    "Description": "Motels",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55103",
    "Description": "Apartment hotels",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55104",
    "Description": "Chalets",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55105",
    "Description": "Rest house/guest house",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55106",
    "Description": "Bed and breakfast units",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55107",
    "Description": "Hostels",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55108",
    "Description": "Home stay",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55109",
    "Description": "Other short term accommodation activities n.e.c.",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55200",
    "Description": "Camping grounds, recreational vehicle parks and trailer parks",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "55900",
    "Description": "Other accommodation",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56103",
    "Description": "Fast-food restaurants",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56104",
    "Description": "Ice cream truck vendors and parlours",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56105",
    "Description": "Mobile food carts",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56106",
    "Description": "Food stalls/hawkers",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56107",
    "Description": "Food or beverage, food and beverage preparation in market stalls/hawkers",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56210",
    "Description": "Event/food caterers",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56290",
    "Description": "Other food service activities",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56301",
    "Description": "Pubs, bars, discotheques, coffee houses, cocktail lounges and karaoke",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56302",
    "Description": "Coffee shops",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56303",
    "Description": "Drink stalls/hawkers",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56304",
    "Description": "Mobile beverage",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "56309",
    "Description": "Others drinking places n.e.c.",
    "MSIC Category Reference": "I"
  },
  {
    "Code": "58110",
    "Description": "Publishing of books, brochures and other publications",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "58120",
    "Description": "Publishing of mailing lists, telephone book, other directories",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "58130",
    "Description": "Publishing of newspapers, journals, magazines and periodicals in print or electronic form",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "58190",
    "Description": "Publishing of catalogues, photos, engraving and postcards, greeting cards, forms, posters, reproduction of works of art, advertising material and other printed matter n.e.c.",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "58201",
    "Description": "Business and other applications",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "58202",
    "Description": "Computer games for all platforms",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "58203",
    "Description": "Operating systems",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "59110",
    "Description": "Motion picture, video and television programme production activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "59120",
    "Description": "Motion picture, video and television programme post-production activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "59130",
    "Description": "Motion picture, video and television programme distribution activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "59140",
    "Description": "Motion picture projection activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "59200",
    "Description": "Sound recording and music publishing activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "60100",
    "Description": "Radio broadcasting",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "60200",
    "Description": "Television programming and broadcasting activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61101",
    "Description": "Wired telecommunications services",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61102",
    "Description": "Internet access providers by the operator of the wired infrastructure",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61201",
    "Description": "Wireless telecommunications services",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61202",
    "Description": "Internet access providers by the operator of the wireless infrastructure",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61300",
    "Description": "Satellite telecommunications services",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61901",
    "Description": "Provision of Internet access over networks between the client and the ISP not owned or controlled by the ISP",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61902",
    "Description": "Provision of telecommunications services over existing telecom connection",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61903",
    "Description": "Telecommunications resellers",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61904",
    "Description": "Provision of telecommunications services over existing telecom connections VOIP (Voice Over Internet Protocol) provision",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61905",
    "Description": "Provision of specialized telecommunications applications",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "61909",
    "Description": "Other telecommunications activities n.e.c.",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "62010",
    "Description": "Computer programming activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "62021",
    "Description": "Computer consultancy",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "62022",
    "Description": "Computer facilities management activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "62091",
    "Description": "Information Communication Technology (ICT) system security",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "62099",
    "Description": "Other information technology service activities n.e.c.",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "63111",
    "Description": "Activities of providing infrastructure for hosting, data processing services and related activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "63112",
    "Description": "Data processing activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "63120",
    "Description": "Web portals",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "63910",
    "Description": "News syndicate and news agency activities",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "63990",
    "Description": "Other information service activities n.e.c.",
    "MSIC Category Reference": "J"
  },
  {
    "Code": "64110",
    "Description": "Central banking",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64191",
    "Description": "Commercial Banks",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64192",
    "Description": "Islamic Banks",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64193",
    "Description": "Offshore Banks",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64194",
    "Description": "Investment Banks",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64195",
    "Description": "Development financial institutions (with deposit taking functions)",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64199",
    "Description": "Other monetary intermediation (with deposit taking functions) n.e.c.",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64200",
    "Description": "Activities of holding companies",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64301",
    "Description": "Venture capital companies",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64302",
    "Description": "Unit trust fund excludes REITs",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64303",
    "Description": "Property unit trust (REITs)",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64304",
    "Description": "Other administration of trusts accounts",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64309",
    "Description": "Trusts, funds and similar financial entities n.e.c.",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64910",
    "Description": "Financial leasing activities",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64921",
    "Description": "Development financial institutions (without deposit taking functions)",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64922",
    "Description": "Credit card services",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64923",
    "Description": "Licensed money lending activities",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64924",
    "Description": "Pawnshops and pawnbrokers includes Ar-Rahnu",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64925",
    "Description": "Co-operative with credits functions",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64929",
    "Description": "Other credit granting n.e.c.",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64991",
    "Description": "Factoring companies",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64992",
    "Description": "Representative office of foreign banks",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64993",
    "Description": "Nominee companies",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "64999",
    "Description": "Other financial service activities, except insurance/takaful and pension funding n.e.c.",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65111",
    "Description": "Life insurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65112",
    "Description": "Family takaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65121",
    "Description": "General insurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65122",
    "Description": "General takaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65123",
    "Description": "Composite insurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65124",
    "Description": "Offshore insurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65125",
    "Description": "Offshore takaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65201",
    "Description": "Life reinsurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65202",
    "Description": "Family retakaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65203",
    "Description": "General reinsurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65204",
    "Description": "General retakaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65205",
    "Description": "Composite retakaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65206",
    "Description": "Offshore reinsurance",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65207",
    "Description": "Offshore retakaful",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65301",
    "Description": "Pension funding",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "65302",
    "Description": "Provident funding",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66111",
    "Description": "Stock exchanges",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66112",
    "Description": "Exchanges for commodity contracts",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66113",
    "Description": "Securities exchange",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66114",
    "Description": "Exchanges for commodity futures contracts",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66119",
    "Description": "Administration of financial markets n.e.c.",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66121",
    "Description": "Stock, share and bond brokers",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66122",
    "Description": "Commodity brokers and dealers",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66123",
    "Description": "Gold bullion dealers",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66124",
    "Description": "Foreign exchange broker and dealers (Bureaux de change)",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66125",
    "Description": "Money-changing services",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66129",
    "Description": "Other financial and commodity futures brokers and dealers",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66191",
    "Description": "Investment advisory services",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66192",
    "Description": "Financial consultancy services",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66199",
    "Description": "Activities auxiliary to finance n.e.c.",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66211",
    "Description": "Insurance adjusting service",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66212",
    "Description": "Takaful adjusting service",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66221",
    "Description": "Insurance agents",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66222",
    "Description": "Takaful agents",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66223",
    "Description": "Insurance brokers",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66224",
    "Description": "Takaful brokers",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66290",
    "Description": "Other activities auxiliary to insurance, takaful and pension funding",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66301",
    "Description": "Management of pension funds",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66302",
    "Description": "Assets/portfolio management",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "66303",
    "Description": "Unit trust management companies",
    "MSIC Category Reference": "K"
  },
  {
    "Code": "68101",
    "Description": "Buying, selling, renting and operating of self-owned or leased real estate – residential buildings",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68102",
    "Description": "Buying, selling, renting and operating of self-owned or leased real estate – non-residential buildings",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68103",
    "Description": "Buying, selling, renting and operating of self-owned or leased real estate – land",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68104",
    "Description": "Development of building projects for own operation, i.e. for renting of space in these buildings",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68109",
    "Description": "Real estate activities with own or leased property n.e.c.",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68201",
    "Description": "Activities of real estate agents and brokers for buying, selling and renting of real estate",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68202",
    "Description": "Management of real estate on a fee or contract basis",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68203",
    "Description": "Appraisal services for real estate",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "68209",
    "Description": "Real estate activities on a fee or contract basis n.e.c.",
    "MSIC Category Reference": "L"
  },
  {
    "Code": "69100",
    "Description": "Legal activities",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "69200",
    "Description": "Accounting, bookkeeping and auditing activities; tax consultancy",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "70100",
    "Description": "Activities of head offices",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "70201",
    "Description": "Business management consultancy services",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "70202",
    "Description": "Human resource consultancy services",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "70203",
    "Description": "Consultancy services in public relation and communications",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "70209",
    "Description": "Other management consultancy activities n.e.c",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "71101",
    "Description": "Architectural services",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "71102",
    "Description": "Engineering services",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "71103",
    "Description": "Land surveying services",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "71109",
    "Description": "Other architectural and engineering activities and related technical consultancy n.e.c.",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "71200",
    "Description": "Technical testing and analysis",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72101",
    "Description": "Research and development on natural sciences",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72102",
    "Description": "Research and development on engineering and technology",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72103",
    "Description": "Research and development on medical sciences",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72104",
    "Description": "Research and development on biotechnology",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72105",
    "Description": "Research and development on agricultural sciences",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72106",
    "Description": "Research and development on Information Communication Technology (ICT)",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72109",
    "Description": "Research and development on other natural science and engineering n.e.c.",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72201",
    "Description": "Research and development on social sciences",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72202",
    "Description": "Research and development on humanities",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "72209",
    "Description": "Research and development of other social sciences and humanities n.e.c.",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "73100",
    "Description": "Advertising",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "73200",
    "Description": "Market research and public opinion polling",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74101",
    "Description": "Activities of interior decorators",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74102",
    "Description": "Services of graphic designers",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74103",
    "Description": "Fashion design services",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74109",
    "Description": "Specialized design activities n.e.c.",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74200",
    "Description": "Photographic activities",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74901",
    "Description": "Translation and interpretation activities",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74902",
    "Description": "Business brokerage activities",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74903",
    "Description": "Security consulting",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74904",
    "Description": "Activities of quantity surveyors",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74905",
    "Description": "Activities of consultants other than architecture, engineering and management consultants",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "74909",
    "Description": "Any other professional, scientific and technical activities n.e.c.",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "75000",
    "Description": "VETERINARY ACTIVITIES",
    "MSIC Category Reference": "M"
  },
  {
    "Code": "77101",
    "Description": "Renting and operational leasing of passenger cars (without driver)",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77102",
    "Description": "Renting and operational leasing of trucks, utility trailers and recreational vehicles",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77211",
    "Description": "Renting and leasing of pleasure boats, canoes, sailboats",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77212",
    "Description": "Renting and leasing of bicycles",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77213",
    "Description": "Renting and leasing of beach chairs and umbrellas",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77219",
    "Description": "Renting and leasing of other sports equipment n.e.c.",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77220",
    "Description": "Renting of video tapes, records, CDs, DVDs",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77291",
    "Description": "Renting and leasing of textiles, wearing apparel and footwear",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77292",
    "Description": "Renting and leasing of furniture, pottery and glass, kitchen and tableware, electrical appliances and house wares",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77293",
    "Description": "Renting and leasing of jewellery, musical instruments, scenery and costumes",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77294",
    "Description": "Renting and leasing of books, journals and magazines",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77295",
    "Description": "Renting and leasing of machinery and equipment used by amateurs or as a hobby",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77296",
    "Description": "Renting of flowers and plants",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77297",
    "Description": "Renting and leasing of electronic equipment for household use",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77299",
    "Description": "Renting and leasing of other personal and household goods n.e.c.",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77301",
    "Description": "Renting and operational leasing, without operator, of other machinery and equipment that are generally used as capital goods by industries",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77302",
    "Description": "Renting and operational leasing of land-transport equipment (other than motor vehicles) without drivers",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77303",
    "Description": "Renting and operational leasing of water-transport equipment without operator",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77304",
    "Description": "Renting and operational leasing of air transport equipment without operator",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77305",
    "Description": "Renting and operational leasing of agricultural and forestry machinery and equipment without operator",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77306",
    "Description": "Renting and operational leasing of construction and civil-engineering machinery and equipment without operator",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77307",
    "Description": "Rental and operational leasing of office machinery and equipment without operator",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77309",
    "Description": "Renting and leasing of other machinery, equipment and tangible goods n.e.c.",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "77400",
    "Description": "Leasing of intellectual property and similar products, except copyrighted works",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "78100",
    "Description": "Activities of employment placement agencies",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "78200",
    "Description": "Temporary employment agency activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "78300",
    "Description": "Provision of human resources for client businesses",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "79110",
    "Description": "Travel agency activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "79120",
    "Description": "Tour operator activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "79900",
    "Description": "Other reservation service and related activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "80100",
    "Description": "Private security activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "80200",
    "Description": "Security systems service activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "80300",
    "Description": "Investigation and detective activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81100",
    "Description": "Combined facilities support activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81210",
    "Description": "General cleaning of buildings",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81291",
    "Description": "Cleaning of buildings of all types",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81292",
    "Description": "Swimming pool cleaning and maintenance services",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81293",
    "Description": "Cleaning of industrial machinery",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81294",
    "Description": "Cleaning of trains, buses, planes",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81295",
    "Description": "Cleaning of pest control services not in connection with agriculture",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81296",
    "Description": "Disinfecting and exterminating activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81297",
    "Description": "Cleaning of sea tankers",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81299",
    "Description": "Other building and industrial cleaning activities, n.e.c.",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "81300",
    "Description": "Landscape care and maintenance service activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82110",
    "Description": "Combined office administrative service activities",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82191",
    "Description": "Document preparation, editing and/or proofreading",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82192",
    "Description": "Typing, word processing or desktop publishing",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82193",
    "Description": "Secretarial support services",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82194",
    "Description": "Transcription of documents and other secretarial services",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82195",
    "Description": "Provision of mailbox rental and other postal and mailing services",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82196",
    "Description": "Photocopying, duplicating, blueprinting",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82199",
    "Description": "Photocopying, document preparation and other specialized office support activities n.e.c.",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82200",
    "Description": "Activities of call centres",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82301",
    "Description": "Organization, promotions and/or management of event",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82302",
    "Description": "Meeting, incentive, convention, exhibition (MICE)",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82910",
    "Description": "Activities of collection agencies and credit bureaus",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82920",
    "Description": "Packaging activities on a fee or contract basis, whether or not these involve an automated process",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "82990",
    "Description": "Other business support service activities n.e.c.",
    "MSIC Category Reference": "N"
  },
  {
    "Code": "84111",
    "Description": "General (overall) public administration activities",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84112",
    "Description": "Ancillary service activities for the government as a whole",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84121",
    "Description": "Administrative educational services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84122",
    "Description": "Administrative health care services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84123",
    "Description": "Administrative housing and local government services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84124",
    "Description": "Administrative recreational, cultural, arts and sports services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84125",
    "Description": "Administrative religious affairs services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84126",
    "Description": "Administrative welfare services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84129",
    "Description": "Other community and social affairs services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84131",
    "Description": "Domestic and international trade affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84132",
    "Description": "Agriculture and rural development affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84133",
    "Description": "Primary industries affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84134",
    "Description": "Public works affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84135",
    "Description": "Transport affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84136",
    "Description": "Energy, telecommunication and postal affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84137",
    "Description": "Tourism affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84138",
    "Description": "Human resource affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84139",
    "Description": "Other regulation of and contribution to more efficient operation of businesses n.e.c.",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84210",
    "Description": "Foreign affairs",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84220",
    "Description": "Military and civil defence services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84231",
    "Description": "Police service",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84232",
    "Description": "Prison service",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84233",
    "Description": "Immigration service",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84234",
    "Description": "National registration service",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84235",
    "Description": "Judiciary and legal service",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84236",
    "Description": "Firefighting and fire prevention",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84239",
    "Description": "Other public order and safety affairs related services",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "84300",
    "Description": "Compulsory social security activities e.g. SOCSO",
    "MSIC Category Reference": "O"
  },
  {
    "Code": "85101",
    "Description": "Pre-primary education (Public)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85102",
    "Description": "Pre-primary education (Private)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85103",
    "Description": "Primary education (Public)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85104",
    "Description": "Primary education (Private)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85211",
    "Description": "General school secondary education (Public)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85212",
    "Description": "General school secondary education (Private)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85221",
    "Description": "Technical and vocational education below the level of higher education (Public)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85222",
    "Description": "Technical and vocational education below the level of higher education (Private)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85301",
    "Description": "College and university education (Public)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85302",
    "Description": "College and university education (Private)",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85411",
    "Description": "Sports instruction",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85412",
    "Description": "Martial arts instruction",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85419",
    "Description": "Any other sports and recreation education n.e.c",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85421",
    "Description": "Music and dancing school",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85429",
    "Description": "Any other cultural education n.e.c.",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85491",
    "Description": "Tuition centre",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85492",
    "Description": "Driving school",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85493",
    "Description": "Religious instruction",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85494",
    "Description": "Computer training",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85499",
    "Description": "Others education n.e.c",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "85500",
    "Description": "Educational support services for provision of non-instructional services",
    "MSIC Category Reference": "P"
  },
  {
    "Code": "86101",
    "Description": "Hospital activities",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86102",
    "Description": "Maternity home services (outside hospital)",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86201",
    "Description": "General medical services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86202",
    "Description": "Specialized medical services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86203",
    "Description": "Dental services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86901",
    "Description": "Dialysis Centres",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86902",
    "Description": "Medical laboratories",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86903",
    "Description": "Physiotherapy and occupational therapy service",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86904",
    "Description": "Acupuncture services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86905",
    "Description": "Herbalist and homeopathy services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86906",
    "Description": "Ambulance services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "86909",
    "Description": "Other human health services n.e.c.",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87101",
    "Description": "Homes for the elderly with nursing care",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87102",
    "Description": "Nursing homes",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87103",
    "Description": "Palliative or hospices",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87201",
    "Description": "Drug rehabilitation centres",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87209",
    "Description": "Other residential care activities for mental retardation n.e.c.",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87300",
    "Description": "Residential care activities for the elderly and disabled",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87901",
    "Description": "Orphanages",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87902",
    "Description": "Welfare homes services",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "87909",
    "Description": "Other residential care activities n.e.c.",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "88101",
    "Description": "Day-care activities for the elderly or for handicapped adults",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "88109",
    "Description": "Others social work activities without accommodation for the elderly and disabled",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "88901",
    "Description": "Counselling service",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "88902",
    "Description": "Child day-care activities",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "88909",
    "Description": "Other social work activities without accommodation n.e.c.",
    "MSIC Category Reference": "Q"
  },
  {
    "Code": "90001",
    "Description": "Theatrical producer, singer group band and orchestra entertainment services",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90002",
    "Description": "Operation of concert and theatre halls and other arts facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90003",
    "Description": "Activities of sculptors, painters, cartoonists, engravers, etchers",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90004",
    "Description": "Activities of individual writers, for all subjects",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90005",
    "Description": "Activities of independent journalists",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90006",
    "Description": "Restoring of works of art such as painting",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90007",
    "Description": "Activities of producers or entrepreneurs of arts live events, with or without facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "90009",
    "Description": "Creative, arts and entertainment activities n.e.c.",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "91011",
    "Description": "Documentation and information activities of libraries of all kinds",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "91012",
    "Description": "Stock photo libraries and services",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "91021",
    "Description": "Operation of museums of all kinds",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "91022",
    "Description": "Operation of historical sites and buildings",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "91031",
    "Description": "Operation of botanical and zoological gardens",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "91032",
    "Description": "Operation of nature reserves, including wildlife preservation",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "92000",
    "Description": "GAMBLING AND BETTING ACTIVITIES",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93111",
    "Description": "Football, hockey, cricket, baseball, badminton, futsal, paintball",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93112",
    "Description": "Racetracks for auto",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93113",
    "Description": "Equestrian clubs",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93114",
    "Description": "Swimming pools and stadiums, ice-skating arenas",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93115",
    "Description": "Track and field stadium",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93116",
    "Description": "Golf courses",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93117",
    "Description": "Bowling centre",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93118",
    "Description": "Fitness centres",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93119",
    "Description": "Organization and operation of outdoor or indoor sports events for professionals or amateurs by organizations with own facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93120",
    "Description": "The operation of sports clubs such as football club, bowling club, swimming club",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93191",
    "Description": "Activities of producers or promoters of sports events, with or without facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93192",
    "Description": "Activities of sports leagues and regulating bodies",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93193",
    "Description": "Activities of related to promotion of sporting events",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93199",
    "Description": "Other sports activities n.e.c.",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93210",
    "Description": "Activities of amusement parks and theme parks",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93291",
    "Description": "Activities of recreation parks and beaches",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93292",
    "Description": "Operation of recreational transport facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93293",
    "Description": "Renting of leisure and pleasure equipment as an integral part of recreational facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93294",
    "Description": "Operation of fairs and shows of a recreational nature",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93295",
    "Description": "Operation of discotheques and dance floors",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93296",
    "Description": "Activities of producers or entrepreneurs of live events other than arts or sports events, with or without facilities",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93297",
    "Description": "Cyber Café/Internet Centre",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "93299",
    "Description": "Any other amusement and recreation activities n.e.c.",
    "MSIC Category Reference": "R"
  },
  {
    "Code": "94110",
    "Description": "Activities of business and employers membership organizations",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "94120",
    "Description": "Activities of professional membership organizations",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "94200",
    "Description": "Activities of trade unions",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "94910",
    "Description": "Activities of religious organizations",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "94920",
    "Description": "Activities of political organizations",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "94990",
    "Description": "Activities of other membership organizations n.e.c.",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95111",
    "Description": "Repair of electronic equipment",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95112",
    "Description": "Repair and maintenance of computer terminals",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95113",
    "Description": "Repair and maintenance of hand-held computers (PDA\'s)",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95121",
    "Description": "Repair and maintenance of cordless telephones",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95122",
    "Description": "Repair and maintenance of cellular phones",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95123",
    "Description": "Repair and maintenance of carrier equipment modems",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95124",
    "Description": "Repair and maintenance of fax machines",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95125",
    "Description": "Repair and maintenance of communications transmission equipment",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95126",
    "Description": "Repair and maintenance of two-way radios",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95127",
    "Description": "Repair and maintenance of commercial TV and video cameras",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95211",
    "Description": "Repair and maintenance of television, radio receivers",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95212",
    "Description": "Repair and maintenance of VCR/DVD/VCD",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95213",
    "Description": "Repair and maintenance of CD players",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95214",
    "Description": "Repair and maintenance of household-type video cameras",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95221",
    "Description": "Repair and servicing of household appliances",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95222",
    "Description": "Repair and servicing of home and garden equipment",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95230",
    "Description": "Repair of footwear and leather goods",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95240",
    "Description": "Repair of furniture and home furnishings",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95291",
    "Description": "Repair of bicycles",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95292",
    "Description": "Repair and alteration of clothing",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95293",
    "Description": "Repair and alteration of jewellery",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95294",
    "Description": "Repair of watches, clocks and their parts",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95295",
    "Description": "Repair of sporting goods",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95296",
    "Description": "Repair of musical instruments",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "95299",
    "Description": "Repair of other personal and household goods n.e.c.",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96011",
    "Description": "Laundering and dry-cleaning, pressing",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96012",
    "Description": "Carpet and rug shampooing, and drapery and curtain cleaning, whether on clients\' premises or not",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96013",
    "Description": "Provision of linens, work uniforms and related items by laundries",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96014",
    "Description": "Diaper supply services",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96020",
    "Description": "Hairdressing and other beauty treatment",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96031",
    "Description": "Preparing the dead for burial or cremation and embalming and morticians\' services",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96032",
    "Description": "Providing burial or cremation services",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96033",
    "Description": "Rental of equipped space in funeral parlours",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96034",
    "Description": "Rental or sale of graves",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96035",
    "Description": "Maintenance of graves and mausoleums",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96091",
    "Description": "Activities of sauna, steam baths, massage salons",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96092",
    "Description": "Astrological and spiritualists\' activities",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96093",
    "Description": "Social activities such as escort services, dating services, services of marriage bureaux",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96094",
    "Description": "Pet care services",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96095",
    "Description": "Genealogical organizations",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96096",
    "Description": "Shoe shiners, porters, valet car parkers",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96097",
    "Description": "Concession operation of coin-operated personal service machines",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "96099",
    "Description": "Other service activities n.e.c.",
    "MSIC Category Reference": "S"
  },
  {
    "Code": "97000",
    "Description": "Activities of households as employers of domestic personnel",
    "MSIC Category Reference": "T"
  },
  {
    "Code": "98100",
    "Description": "Undifferentiated goods-producing activities of private households for own use",
    "MSIC Category Reference": "T"
  },
  {
    "Code": "98200",
    "Description": "Undifferentiated service-producing activities of private households for own use",
    "MSIC Category Reference": "T"
  },
  {
    "Code": "99000",
    "Description": "Activities of extraterritorial organization and bodies",
    "MSIC Category Reference": "U"
  }
]';
        $this->jsonData = json_decode($jsonString, true);
    }

    function getByCode($code){
        $code = TRIM($code);

        for($i=0; $i<sizeof($this->jsonData);$i++){
            $data = $this->jsonData[$i];
            if($data["Code"] == $code){
                return $data;
            }
        }
        return null;
    }


}
