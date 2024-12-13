<?php

// Function for Quiz

echo "Contact Management  \n";

$contacts = [];

// Function for Add a Contact

function addContact(array & $contacts, string $name, string $email, string $phone): void {
    $contacts[] = ['name' =>  $name, 'email' => $email, 'phone' => $phone];
}

// Function for Display all Contacts 

function displayContacts(array $contacts):void{
    if (empty($contacts)){
        echo "No Contacts Available. \n";
    }else {
        foreach($contacts as $contact){
            echo "Name: {$contact['name']} \n Email: {$contact['email']} \n Phone: {$contact['phone']} \n";
        }
    }
}



while (true){

    echo "Contact Management Menu: \n";
    echo "1. Add Contact Info \n 2. View Contacts \n 3. Exit \n";

    $choice = (int)readline("Choose an Option:  ");

    if ($choice === 1) {
        $name = readline("Enter name: ");
        $email = readline("Enter Email: ");
        $phone = readline("Enter Phone: ");
        addContact($contacts, $name , $email, $phone);
        echo "$name addes to contacts. \n";
    }elseif ($choice === 2){
        displayContacts($contacts);
    }elseif ($choice === 3){
        echo "Exiting..... \n";
        break;
    }else {
        echo "Invalid Choice. Please try again. \n";
    }
}