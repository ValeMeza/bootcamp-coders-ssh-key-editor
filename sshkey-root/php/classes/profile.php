<?php
namespace edu\cnm\vmeza3\bootcamp;

require_once("profile.php");

/**
 * SSHKEY Class Attempt

    This will be my first attempt at a class for SSHKEY Editor Example using the Profile class.

 * @author Valente Meza <vmeza3@cnm.edu>
 * @version 3.2.0*/

class Profile //implements |JsonSerializable
    //use ValidateDate;
    {
    /**
     * id for this Profile; this is the primary key
     * @var int $profileId;
     */
    private $profileId;
    /**
     * id of the profileEmail that posted the sshkey
     * @var int $profileEmail*/

    private $profileEmail;

    /**  Hash on the profile
    *@var $profileHash*/

    private $profileHash;
    /** salt on the proile
     *@var $profileSalt*/

    private $profileSalt;

    /**
     * constructor for this Profile
     * @param int|null $newProfileId id of this profile or null if a new profile
     * @param string $newProfileEmail email of the Profile
     * @param string $newProfileHash hash of the Profile
     * @param string $newProfileSalt salt for the Profile
     * @throws \InvalidArgumentException if data types are not valid
     * @throws \RangeException if data values are out of bounds (to long, negative integers)
     * @throws \ TypeError if data types violate type hints
     * @throws \ Exception if some other exception occurs
     **/
    public function _construct(int $newProfileId = null, string $newProfileEmail, string $newProfileHash, string $newProfileSalt) {
        try {
            $this->setProfileId($newProfileId);
            $this->setProfileEmail($newProfileEmail);
            $this->setProfileSalt($newProfileSalt);
            $this->setProfileHash($newProfileHash);
        } catch(\InvalidArgumentException $invalidArgument) {

        }
    }
}