<?php

return array(

    'does_not_exist' => 'Platsen finns inte.',
    'assoc_users'    => 'This location is not currently deletable because it is the location of record for at least one asset or user, has assets assigned to it, or is the parent location of another location. Please update your models to no longer reference this company and try again. ',
    'assoc_assets'	 => 'Platsen är associerad med minst en tillgång och kan inte tas bort. Vänligen uppdatera dina tillgångar så dom inte refererar till denna plats och försök igen. ',
    'assoc_child_loc'	 => 'Denna plats är för närvarande överliggande för minst en annan plats och kan inte tas bort. Vänligen uppdatera dina platser så dom inte längre refererar till denna och försök igen.',
    'assigned_assets' => 'Tilldelade tillgångar',
    'current_location' => 'Nuvarande plats',


    'create' => array(
        'error'   => 'Platsen kunde inte skapas. Vänligen försök igen.',
        'success' => 'Platsen skapades.'
    ),

    'update' => array(
        'error'   => 'Platsen kunde inte uppdateras. Vänligen försök igen',
        'success' => 'Platsen uppdaterades.'
    ),

    'delete' => array(
        'confirm'   	=> 'Är du säker du vill ta bort denna plats?',
        'error'   => 'Ett fel inträffade när denna plats skulle tas bort. Vänligen försök igen.',
        'success' => 'Platsen har tagits bort.'
    )

);
