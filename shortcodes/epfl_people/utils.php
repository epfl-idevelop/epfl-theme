<?php 

/**
 * Get person photo
 */
function epfl_people_get_photo($person) {
    $photo_url = "";
    if ("1" == $person->people->photo_show) {
        $photo_url = "https://people.epfl.ch/private/common/photos/links/" . $person->sciper;
    }
    return $photo_url;
}

/**
 * Get person phones number
 */
function epfl_people_get_phones($person) {
 
    $phones = [];
    foreach($person->unites as $current_unit) {
        foreach($current_unit->phones as $phone) {
            $phones[] = $phone;      
        }
    }
    return $phones;
}

/**
 * Get person function
 */
function epfl_people_get_function($person, $unit) {

    $function = "";
    foreach($person->unites as $current_unit) {
        if ($current_unit->sigle === strtoupper($unit)) {
            $function = $current_unit->fonction;
            break;
        }
    }
    return $function;
}

/**
 * Get room function
 */
function epfl_people_get_room($person, $unit) {

    $room = "";
    foreach($person->unites as $current_unit) {
        if ($current_unit->sigle === strtoupper($unit)) {
            $room = $current_unit->rooms[0];
            break;
        }
    }
    return $room;
}

/**
 * Get URL room function
 */
function epfl_people_get_room_url($room) {

    return "https://plan.epfl.ch/?room=" . $room; 
}

/**
 * Get URL people
 */
function epfl_people_get_people_url($person) {

    $slug = "";
    if ($person->mail_id) {
        $slug = $person->mail_id;
    } else {
        $slug = $person->sciper;
    }
    return "https://people.epfl.ch/" . $slug;
}

?>