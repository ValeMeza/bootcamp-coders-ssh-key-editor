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
    public function _construct(int $newProfileId = null, string $newProfileEmail, string $newProfileHash, string $newProfileSalt)
    {
        try {
            $this->setProfileId($newProfileId);
            $this->setProfileEmail($newProfileEmail);
            $this->setProfileSalt($newProfileSalt);
            $this->setProfileHash($newProfileHash);
        } catch (\InvalidArgumentException $invalidArgument) {
            //** rethrow the exception to the caller */
            throw(new\InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
        } catch (\RangeException $range) {
            //** rethrow the exception to the caller**//
            throw(new\RangeException($range->getMessage(), 0, $range));
        } catch (\TypeError $typeError) {
            //**rethrow the exception to the caller**//
            throw(new\TypeError($typeError->getMessage(), 0, $typeError));
        } catch (\Exception $exception) {
            throw(new\Exception($exception->getMessage(), 0, $exception));
        }
    }

    /** accessor method for profileId
     *@return int value of profile id**/
    /**
     * @return int
     */
    public function getProfileId(){
        return ($this->profileId);

    }
    /**
     * mutator ethod for profile id
     * @param int $newProfileId new value of profile id
     * @throws\RangeException if $newProfielId is not an integer
     **/
    public function setProfileId(int
    $newProfileId){
        //**verify the profile id is positive**//
        if($newProfileId <= 0) {
            throw(new\RangeException("profile id is not positive"));
        }
        //** convert and store the profile id */
        $this->profileId = $newProfileId;
    }
    /**
     * accessor method for Email content
     * @return string value of Email content
     **/
    public function getprofileEmail()
    {
        return ($this->profileEmail);
    }        /**
         * mutator method for email content
         * @param string $newProfileEmail
         * @throws \InvalidArgumentException if $newProfileEmail is not a string or insecure
         * @throws \TypeError if $newProfileEmail is not a string
         */
        public function setProfileEmail(string $newProfileEmail){
            //** verify the email is secure */
            $newProfileEmail = filter_var($newProfileEmail, FILTER_SANITIZE_EMAIL);
            if(empty($newProfileEmail) === true){
                throw(new \InvalidArgumentException("email content is empty or insecure"));

            }

        }




}