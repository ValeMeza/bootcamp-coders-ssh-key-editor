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
     * @var int $profileId ;
     */
    private $profileId;
    /**
     * id of the profileEmail that posted the sshkey
     * @var int $profileEmail
     */

    private $profileEmail;

    /**  Hash on the profile
     * @var $profileHash
     */

    private $profileHash;
    /** salt on the proile
     * @var $profileSalt
     */

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
            $this->setProfileHash($newProfileHash);
            $this->setProfileSalt($newProfileSalt);
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
     * @return int|null value of profile id
     **/

    public function getProfileId()
    {
        return ($this->profileId);

    }

    /**
     * mutator method for profile id
     * @param int $newProfileId new value of profile id
     * @throws \RangeException if $newProfielId is not positive
     * @throws \TypeError if $newProfileId is not an integer
     **/
    public function setProfileId(int $newProfileId = null)
    {
        //*base case: if the profile id is null*//
        if ($newProfileId === null) {
            $this->profileId = null;
            return;
        }
        //** verify the profile id is positive */
        if ($newProfileId <= 0) {
            throw(new \RangeException("profile is not positive"));
            //**convert and store the profile id
        }
        $this->profileId = $newProfileId;
    }

    /**
     * accessor method for Email content
     * @return string value of Email content
     **/
    public function getprofileEmail()
    {
        return ($this->profileEmail);
    }

    /**
     * mutator method for email content
     * @param string $newProfileEmail
     * @throws \InvalidArgumentException if $newProfileEmail is not a string or insecure
     * @throws \TypeError if $newProfileEmail is not a string
     * @throws \RangeException if $newProfileEmail is to long
     **/
    public function setProfileEmail(string $newProfileEmail)
    {
        //** verify the email is secure */
        $newProfileEmail = filter_var($newProfileEmail, FILTER_SANITIZE_EMAIL);
        if (empty($newProfileEmail) === true) {
            throw(new \InvalidArgumentException("email content is empty or insecure"));

        }
        //** verify the email content will fit in the database **/
        if (strlen($newProfileEmail) > 128) {
            throw(new \RangeException("email to long"));
        }
        //**store the email content**/vmeza3@localhost
        $this->profileEmail = $newProfileEmail;

    }

    /**
     * accessor  method for Hash
     * @return string value of Hash content
     **/
    public function getProfileHash()
    {
        return ($this->profileHash);
    }

    /** mutator method for Hash content
     * @param string $newprofileHash new value of Hash content
     * @throws \InvalidArgumentException if $newProfileHash is insecure
     * @throws \RangeException if $newProfileHash is > 128 characters
     * @throws \TypeError if $newProfileHash is not a string
     **/
    public function setProfileHash(string $newprofileHash)
    {
        //** verify hash content is secure **/
        $newprofileHash = trim($newprofileHash);
        $newprofileHash = filter_var($newprofileHash, FILTER_SANITIZE_STRING);
        if (empty($newprofileHash) === true) {
            throw(new \InvalidArgumentException("Hash content is empty or insecure"));
        }
        //** verify the Hash content will fit in the database **/
        if (strlen($newprofileHash) > 128) {
            throw(new \RangeException("Hash content to large"));
        }
        //** store Hash content **/
        $this->profileHash = $newprofileHash;
    }

    /** accosser method for Salt
     * @return string value of Salt content
     **/
    public function getProfileSalt()
    {
        return ($this->profileSalt);

    }

    /** mutator method for Salt content
     * @param string $newProfileSalt new value for Salt
     * @throws \InvalidArgumentException if new $newProfileSalt is insecure
     * @throws \RangeException if $newProfileSalt is > 64 charecters
     * @throws \TypeError if %newProfileSalt is not a string
     **/
    public function setProfileSalt(string $newProfileSalt)
    {
        //verify Salt content is secure --not how salt or hash will be handled in Capstone
        $newProfileSalt = trim($newProfileSalt);
        $newProfileSalt = filter_var($newProfileSalt, FILTER_SANITIZE_STRING);
        if (empty($newProfileSalt) === true) {
            throw(new \InvalidArgumentException("Salt content is empty or insecure"));
        }
        //** verify salt content can fit in database **/
        if (strlen($newProfileSalt) > 64) {
            throw(new\RangeException("Salt is to large"));
        }
        //** store Salt content **/
        $this->ProfileSalt = $newProfileSalt;
    }
}