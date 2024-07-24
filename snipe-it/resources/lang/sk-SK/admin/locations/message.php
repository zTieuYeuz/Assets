<?php

return array(

    'does_not_exist' => 'Lokalita neexistuje.',
    'assoc_users'    => 'This location is not currently deletable because it is the location of record for at least one asset or user, has assets assigned to it, or is the parent location of another location. Please update your models to no longer reference this company and try again. ',
    'assoc_assets'	 => 'Táto lokalita je priradená minimálne jednému majetku, preto nemôže byť odstránená. Prosím odstráňte referenciu na túto lokalitu z príslušného majetku a skúste znovu. ',
    'assoc_child_loc'	 => 'Táto lokalita je nadradenou minimálne jednej podradenej lokalite, preto nemôže byť odstránená. Prosím odstráňte referenciu s príslušnej lokality a skúste znovu. ',
    'assigned_assets' => 'Assigned Assets',
    'current_location' => 'Current Location',


    'create' => array(
        'error'   => 'Lokalita nebola vytvorená, skúste prosím znovu.',
        'success' => 'Lokalita bola úspešne vytovrená.'
    ),

    'update' => array(
        'error'   => 'Lokalita nebola aktualizovaná, skúste prosím znovu',
        'success' => 'Lokalita bola úspešne upravená.'
    ),

    'delete' => array(
        'confirm'   	=> 'Ste si istý, že chcete odstrániť túto lokalitu?',
        'error'   => 'Pri odstraňovaní lokality nastala chyba. Skúste prosím znovu.',
        'success' => 'Lokalita bola úspešne odstránená.'
    )

);
