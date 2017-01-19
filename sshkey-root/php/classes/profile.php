<?php
namespace edu\cnm\vmeza3\bootcamp;

require_once("profile.php");

/**
 * SSHKEY Class Attempt

    This will be my first attempt at a class for SSHKEY Editor Example using the Profile class.

 * @author Valente Meza <vmeza3@cnm.edu>
 * @version 3.2.0*/

class Profile implements\JsonSerializable {
    use ValidateDate;
    /**
     * id for this Profile; this is the primary key
     * @var int $profileId;
     */
    private $profileId;
    /**
     * id of the ProfileEmail that posted the sshkey
     @var int $profileEmail*/
    private $profileEmail;
    /**  */

}