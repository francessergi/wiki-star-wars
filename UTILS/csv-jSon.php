<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // php function to convert csv to json format

    // open csv file
    if (!($fp = fopen('starwars.csv', 'r'))) {
        die("Can't open file...");
    }

    // parse csv rows into array
    $json = array();
    while ($row = fgetcsv($fp, "1024", ",")) {
        $json[] =  explode(";", $row[0]);
    }

    // release file handle
    fclose($fp);

    // Mostrem per pantalla l'STRING jSon, el podem copiar i ficar a JS directament:
    $varJs = json_encode($json);
    echo $varJs;

    ?>
    <script>
        // Passam directament la variable a Javascript
        <?php echo "var dades =" . $varJs . ";\n"; ?>
        console.log(dades);


        //exemple:
        var exemple = [
            ["Luke Skywalker", "172", "77", "blond", "fair", "blue", "19", "male", "Tatooine", "Human"],
            ["C-3PO", "167", "75", "NA", "gold", "yellow", "112", "NA", "Tatooine", "Droid"],
            ["R2-D2", "96", "32", "NA", "white"],
            ["Darth Vader", "202", "136", "none", "white", "yellow", "41.9", "male", "Tatooine", "Human"],
            ["Leia Organa", "150", "49", "brown", "light", "brown", "19", "female", "Alderaan", "Human"],
            ["Owen Lars", "178", "120", "brown"],
            ["Beru Whitesun lars", "165", "75", "brown", "light", "blue", "47", "female", "Tatooine", "Human"],
            ["R5-D4", "97", "32", "NA", "white"],
            ["Biggs Darklighter", "183", "84", "black", "light", "brown", "24", "male", "Tatooine", "Human"],
            ["Obi-Wan Kenobi", "182", "77", "auburn"],
            ["Anakin Skywalker", "188", "84", "blond", "fair", "blue", "41.9", "male", "Tatooine", "Human"],
            ["Wilhuff Tarkin", "180", "NA", "auburn"],
            ["Chewbacca", "228", "112", "brown", "unknown", "blue", "200", "male", "Kashyyyk", "Wookiee"],
            ["Han Solo", "180", "80", "brown", "fair", "brown", "29", "male", "Corellia", "Human"],
            ["Greedo", "173", "74", "NA", "green", "black", "44", "male", "Rodia", "Rodian"],
            ["Jabba Desilijic Tiure", "175", "1358", "NA", "green-tan"],
            ["Wedge Antilles", "170", "77", "brown", "fair", "hazel", "21", "male", "Corellia", "Human"],
            ["Jek Tono Porkins", "180", "110", "brown", "fair", "blue", "NA", "male", "Bestine IV", "Human"],
            ["Yoda", "66", "17", "white", "green", "brown", "896", "male", "NA", "Yoda's species"],
            ["Palpatine", "170", "75", "grey", "pale", "yellow", "82", "male", "Naboo", "Human"],
            ["Boba Fett", "183", "78.2", "black", "fair", "brown", "31.5", "male", "Kamino", "Human"],
            ["IG-88", "200", "140", "none", "metal", "red", "15", "none", "NA", "Droid"],
            ["Bossk", "190", "113", "none", "green", "red", "53", "male", "Trandosha", "Trandoshan"],
            ["Lando Calrissian", "177", "79", "black", "dark", "brown", "31", "male", "Socorro", "Human"],
            ["Lobot", "175", "79", "none", "light", "blue", "37", "male", "Bespin", "Human"],
            ["Ackbar", "180", "83", "none", "brown mottle", "orange", "41", "male", "Mon Cala", "Mon Calamari"],
            ["Mon Mothma", "150", "NA", "auburn", "fair", "blue", "48", "female", "Chandrila", "Human"],
            ["Arvel Crynyd", "NA", "NA", "brown", "fair", "brown", "NA", "male", "NA", "Human"],
            ["Wicket Systri Warrick", "88", "20", "brown", "brown", "brown", "8", "male", "Endor", "Ewok"],
            ["Nien Nunb", "160", "68", "none", "grey", "black", "NA", "male", "Sullust", "Sullustan"],
            ["Qui-Gon Jinn", "193", "89", "brown", "fair", "blue", "92", "male", "NA", "Human"],
            ["Nute Gunray", "191", "90", "none", "mottled green", "red", "NA", "male", "Cato Neimoidia", "Neimodian"],
            ["Finis Valorum", "170", "NA", "blond", "fair", "blue", "91", "male", "Coruscant", "Human"],
            ["Jar Jar Binks", "196", "66", "none", "orange", "orange", "52", "male", "Naboo", "Gungan"],
            ["Roos Tarpals", "224", "82", "none", "grey", "orange", "NA", "male", "Naboo", "Gungan"],
            ["Rugor Nass", "206", "NA", "none", "green", "orange", "NA", "male", "Naboo", "Gungan"],
            ["Ric Oli\u00e9", "183", "NA", "brown", "fair", "blue", "NA", "male", "Naboo", "NA"],
            ["Watto", "137", "NA", "black", "blue"],
            ["Sebulba", "112", "40", "none", "grey"],
            ["Quarsh Panaka", "183", "NA", "black", "dark", "brown", "62", "male", "Naboo", "NA"],
            ["Shmi Skywalker", "163", "NA", "black", "fair", "brown", "72", "female", "Tatooine", "Human"],
            ["Darth Maul", "175", "80", "none", "red", "yellow", "54", "male", "Dathomir", "Zabrak"],
            ["Bib Fortuna", "180", "NA", "none", "pale", "pink", "NA", "male", "Ryloth", "Twi'lek"],
            ["Ayla Secura", "178", "55", "none", "blue", "hazel", "48", "female", "Ryloth", "Twi'lek"],
            ["Dud Bolt", "94", "45", "none", "blue"],
            ["Gasgano", "122", "NA", "none", "white"],
            ["Ben Quadinaros", "163", "65", "none", "grey"],
            ["Mace Windu", "188", "84", "none", "dark", "brown", "72", "male", "Haruun Kal", "Human"],
            ["Ki-Adi-Mundi", "198", "82", "white", "pale", "yellow", "92", "male", "Cerea", "Cerean"],
            ["Kit Fisto", "196", "87", "none", "green", "black", "NA", "male", "Glee Anselm", "Nautolan"],
            ["Eeth Koth", "171", "NA", "black", "brown", "brown", "NA", "male", "Iridonia", "Zabrak"],
            ["Adi Gallia", "184", "50", "none", "dark", "blue", "NA", "female", "Coruscant", "Tholothian"],
            ["Saesee Tiin", "188", "NA", "none", "pale", "orange", "NA", "male", "Iktotch", "Iktotchi"],
            ["Yarael Poof", "264", "NA", "none", "white", "yellow", "NA", "male", "Quermia", "Quermian"],
            ["Plo Koon", "188", "80", "none", "orange", "black", "22", "male", "Dorin", "Kel Dor"],
            ["Mas Amedda", "196", "NA", "none", "blue", "blue", "NA", "male", "Champala", "Chagrian"],
            ["Gregar Typho", "185", "85", "black", "dark", "brown", "NA", "male", "Naboo", "Human"],
            ["Cord\u00e9", "157", "NA", "brown", "light", "brown", "NA", "female", "Naboo", "Human"],
            ["Cliegg Lars", "183", "NA", "brown", "fair", "blue", "82", "male", "Tatooine", "Human"],
            ["Poggle the Lesser", "183", "80", "none", "green", "yellow", "NA", "male", "Geonosis", "Geonosian"],
            ["Luminara Unduli", "170", "56.2", "black", "yellow", "blue", "58", "female", "Mirial", "Mirialan"],
            ["Barriss Offee", "166", "50", "black", "yellow", "blue", "40", "female", "Mirial", "Mirialan"],
            ["Dorm\u00e9", "165", "NA", "brown", "light", "brown", "NA", "female", "Naboo", "Human"],
            ["Dooku", "193", "80", "white", "fair", "brown", "102", "male", "Serenno", "Human"],
            ["Bail Prestor Organa", "191", "NA", "black", "tan", "brown", "67", "male", "Alderaan", "Human"],
            ["Jango Fett", "183", "79", "black", "tan", "brown", "66", "male", "Concord Dawn", "Human"],
            ["Zam Wesell", "168", "55", "blonde", "fair"],
            ["Dexter Jettster", "198", "102", "none", "brown", "yellow", "NA", "male", "Ojom", "Besalisk"],
            ["Lama Su", "229", "88", "none", "grey", "black", "NA", "male", "Kamino", "Kaminoan"],
            ["Taun We", "213", "NA", "none", "grey", "black", "NA", "female", "Kamino", "Kaminoan"],
            ["Jocasta Nu", "167", "NA", "white", "fair", "blue", "NA", "female", "Coruscant", "Human"],
            ["Ratts Tyerell", "79", "15", "none", "grey"],
            ["R4-P17", "96", "NA", "none", "silver"],
            ["Wat Tambor", "193", "48", "none", "green"],
            ["San Hill", "191", "NA", "none", "grey", "gold", "NA", "male", "Muunilinst", "Muun"],
            ["Shaak Ti", "178", "57", "none", "red"],
            ["Grievous", "216", "159", "none", "brown"],
            ["Tarfful", "234", "136", "brown", "brown", "blue", "NA", "male", "Kashyyyk", "Wookiee"],
            ["Raymus Antilles", "188", "79", "brown", "light", "brown", "NA", "male", "Alderaan", "Human"],
            ["Sly Moore", "178", "48", "none", "pale", "white", "NA", "female", "Umbara", "NA"],
            ["Tion Medon", "206", "80", "none", "grey", "black", "NA", "male", "Utapau", "Pau'an"],
            ["Finn", "NA", "NA", "black", "dark", "dark", "NA", "male", "NA", "Human"],
            ["Rey", "NA", "NA", "brown", "light", "hazel", "NA", "female", "NA", "Human"],
            ["Poe Dameron", "NA", "NA", "brown", "light", "brown", "NA", "male", "NA", "Human"],
            ["BB8", "NA", "NA", "none", "none", "black", "NA", "none", "NA", "Droid"],
            ["Captain Phasma", "NA", "NA", "unknown", "unknown", "unknown", "NA", "female", "NA", "NA"],
            ["Padm\u00e9 Amidala", "165", "45", "brown", "light", "brown", "46", "female", "Naboo", "Human"]
        ];
    </script>
</body>

</html>