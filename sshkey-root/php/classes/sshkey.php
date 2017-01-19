<?php
namespace edu\cnm\vmeza3\bootcamp;

require_once ("sshkey.php");

/**
 * SSHKEY Class Attempt

    This will be my first attempt at a class for SSHKEY Editor Example.

 * @author Valente Meza <vmeza3@cnm.edu>
 *   @version 3.2.0*/

class Profile implements\j {
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