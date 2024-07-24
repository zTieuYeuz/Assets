<?php

return array(

    'does_not_exist' => 'Locatia nu exista.',
    'assoc_users'    => 'This location is not currently deletable because it is the location of record for at least one asset or user, has assets assigned to it, or is the parent location of another location. Please update your models to no longer reference this company and try again. ',
    'assoc_assets'	 => 'Această locație este în prezent asociată cu cel puțin un material și nu poate fi ștearsă. Actualizați-vă activele astfel încât acestea să nu mai fie menționate și să încercați din nou.',
    'assoc_child_loc'	 => 'Această locație este în prezent părinte pentru cel puțin o locație copil și nu poate fi ștearsă. Actualizați locațiile dvs. pentru a nu mai referi această locație și încercați din nou.',
    'assigned_assets' => 'Atribuire Active',
    'current_location' => 'Locația curentă',


    'create' => array(
        'error'   => 'Locatia nu a fost creata, va rugam incercati iar.',
        'success' => 'Locatia a fost creata.'
    ),

    'update' => array(
        'error'   => 'Locatia nu a fost actualizata, va rugam incercati iar',
        'success' => 'Locatia a fost actualizata.'
    ),

    'delete' => array(
        'confirm'   	=> 'Sunteti sigur ca vreti sa stergeti aceasta locatie?',
        'error'   => 'A aparut o problema la stergerea locatiei. Va rugam incercati iar.',
        'success' => 'Locatia a fost stearsa.'
    )

);
