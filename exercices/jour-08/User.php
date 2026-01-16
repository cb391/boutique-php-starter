<?php

class User
{
    public string $name;
    public string $email;
    public DateTime $registrationDate;


    //?DateTime signifie 👉 soit un DateTime, soit null, + c'est parametre optionnel
    public function __construct(string $name, string $email, ?DateTime $registrationDate)
    {
        $this->name = $name; // name et email → obligatoires
        $this->email = $email;
        $this ->registrationDate = $registrationDate ?? new DateTime (); // ?? = opérateur “null coalescing” (si la valeur est null, alors …) 
    }

    public function isNewMember() {
        $today = new Datetime();
        $gapDate = $this->registrationDate ->diff($today); // diff est une commande qui calcule la différence de jour entre 2 dates.
        if ($gapDate -> days < 30) {
            return true;
        }; 
    }
    };

    $User1 = new User("Charlotte","exemple@gmail.com", new DateTime ("2025-10-10"));
    $User2 = new User("Jean","exemple2@gmail.com", new DateTime ( "2026-01-10"));
    $User3 = new User("Pierre","exemple3@gmail.com", new DateTime ("2025-11-11") );

    
echo $User3->isNewMember();
echo $User2->isNewMember();
echo $User1->isNewMember();




    

