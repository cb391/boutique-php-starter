<?php

class BankAccount
{
    private float $balance; // Accessible uniquement dans la classe

    public function __construct($balance)
    {
        $this->setBalance($balance); // le setter va pouvoir vérifier ainsi les conditions pour créer un compte
    }

    public function getBalance()// recupère la valeur privée $balance
    {
        return $this->balance;
    }
    public function setBalance($newBalance)// setter verifie que le compte reste positif.
    {
        if ($newBalance < 0) {
            throw new InvalidArgumentException("Le montant du compte est négatif, on ne peut pas le créer");
        } else {
            $this->balance = $newBalance;
        }
    }

    public function deposit($amount): void
    {
        $this->setBalance ($this->getBalance() + $amount); 
        // (getBalance() +$amount) devient le contenu du paramètre $newBalance
        echo $this->getBalance(); // ligne necessaire, car les fonctions void ne retournent rien, il n'y a que getBalance qui peut afficher qqch
    }

    public function withdraw($amount)   
    {
        // je vérifie que la soustraction ne mette pas le compte en négatif
        $this->setBalance($this->getBalance() - $amount);
        echo $this->getBalance(); 
    }
      
}

$account = new BankAccount(1000); // initialisation
$account->deposit(200);
$account->withdraw(2000);


?>