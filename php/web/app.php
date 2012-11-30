<?php
	function generateRandomPerson () {
        $names = array("joe", "tom", "marko", "robert", "viktor", "jimmy", "rikard", "josipovic", "alan ford", "hrvoje", "ivan");
        $name = $names[array_rand ($names)];

        $dan = rand (1, 28);
        $mjesec = rand (1, 12);
        $godina = rand (1970, 2000);

        $datumRodjenja = $godina . "-" . $mjesec . "-" . $dan;

        $person = new person (array (
            "ime" => $name,
            "datumRodjenja" => $datumRodjenja
        ));

        $person->persist();

        return $this->redirect ("/person");
	}	
