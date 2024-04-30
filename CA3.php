<?php

/*

WAP which varifies the details of a client for following parameters.
1. Length of Unique ID is valid
2. Name and co+ntact are not unset
3. Age is not < 18

You have to invlove inheritance, constructor and destructors, string operations(if you feel the need).

===========================================================================================================================================================

Write a program which senctions the request by a client for a particular service activation use points

1. Length of Unique ID is valid
2. Name and contact are not unset
3. Age is not < 18

You have to constructor to provide values to the parent class

*/


class ServiceActivation {
    public $uniqueId, $name, $contact, $age;

    public function __construct($uniqueId, $name, $contact, $age) {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->contact = $contact;
        $this->age = $age;
    }

    public function isRequestValid() {
        if (strlen($this->uniqueId) < 10) {
            return false;
        }

        if (empty($this->name) || empty($this->contact)) {
            return false;
        }

        if ($this->age < 18) {
            return false;
        }

        return true;
    }
}

class request_class extends ServiceActivation
{
    public function __construct($uniqueId, $name, $contact, $age)
    {
        parent::__construct($uniqueId, $name, $contact, $age);
    }
}


$request = new request_class('1210460558', 'Shivam', '7303618969', 2);
if ($request->isRequestValid()) {
    echo "Request is valid.";
} else {
    echo "Request is invalid.";
}

?>
