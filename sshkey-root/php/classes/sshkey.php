<?php
namespace Edu\cnm\vmeza3\bootcamp;

require_once ("autoload.php");

/**
 * sshkey class
 *
 * This will be the classe sshkey for SSHKEY Editor Example.
 *
 * @author Valente Meza <vmeza3@cnm.edu>
 * @version 3.2.0 */

class sshkey implements \JsonSerializable {
    /**
     * id for this Profile; this is the primary key
     *@var int $sshekyId
     */
    private $sshkeyId;
    /**
     *id of the Profile that posted the sshkey; this is a foreign key
     * @var int sshkeyProfileId
     **/
    private $sshkeyProfileId;
    /**
     * Algorithm for the sshkey
     */
    private $sshkeyAlgorithm;
    /**
     * Bits for the sshkey
     **/
    private $sshkeyBits;
    /**
     * Comments for the sshkey
     **/
    private $sshkeyComment;
    /**
     * Content of the sshkey
     **/
    private $sshkeyContent;
    /**
     * sshkey Date
     **/
    private $sshkeyDate;
    /**
     * Fingerprint of sshkey
     **/
    private $sshkeyFingerprint;
    /**
     * version of the sshkey
     **/
    private $sshkeyVersion;
    /**
     * constructor for this sshkey
     *
     * @param int|null $newSshkeyId id of this sshkey or null if new sshkey
     *@param int $newSshkeyProfileId id of the Profile that posted the sshkey
     *@param string $newSshkeyAlgorithm string containing actual sshkey data
     *@param string $newSshkeyBits string containing actual sshkey data
     * @param string $newSshkeyComment string containing actual sshkey data
     * @param string $newSshkeyContent string containing content of the sshkey data
     * @param \DateTime|string|null $newSshkeyDate date and time sshkey was sent or null if set to urrent date and time
     * @param string $newSshkeyFingerprint string containing actual sshkey data
     * @param string $newSshkeyVersion string containing actual sshkey data
     * @throws \InvalidArgumentException if data types are not valid
     * @throws \RangeException if data values are of bounds (e.g., strings too long, negative integers)
     **/
    public function __construct(int $newSshkeyId = null, int$newSshkeyProfileId, string $newSshkeyAlgorithm, string $newSshkeyBits, string $newSshkeyComment, string $newSshkeyContent, $newSshkeyDate = null, string $newSshkeyFingerprint, string $newSshkeyVersion){
        try{
            $this->setSshkeyId($newSshkeyId);
            $this->setSshkeyProfileId($newSshkeyProfileId);
            $this->setSshkeyAlgorithm($newSshkeyAlgorithm);
            $this->setSshkeyBits($newSshkeyBits);
            $this->setSshkeyComment($newSshkeyComment);
            $this->setSshkeyContent($newSshkeyContent);
            $this->setSshkeyDate($newSshkeyDate);
            $this->setSshkeyFingerprint($newSshkeyFingerprint);
            $this->setSshkeyVersion($newSshkeyVersion);
        } catch(\InvalidArgumentException $invalidArgument){
            // rethrow the eception to the caller
            throw(new \InvalidArgumentException($invalidArgument->getMessage(),0, $invalidArgument));
        } catch(\RangeException $range){
            // rethrow the exception to the caller
            throw(new \RangeException($range->getMessage(), 0, $range));
        } catch(\TypeError $typeError){
            throw(new \TypeError($typeError->getMessage(),0,$typeError));
        } catch(\Exception $exception){
            throw(new \Exception($exception->getMessage(), 0, $exception));
        }
    }
    /**
     * accessor method for sshkey id
     *
     * @return int|null value of sshkey id
     **/
    public function setSshkeyId(int $newSshkeyId = null) {
        // base case: if the sshkey id is null, this is a new sshkey without a mySQL assigned id (yet)
        if($newSshkeyId === null){
            $this->sshkeyid = null;
            return;
        }

        // verify the tweet id is positive
        if($newSshkeyId <= 0 ){
            throw(new \RangeException("sshkey id is not positive"));
        }

        //convert and store the sshkey id
        $this->sshkeyId = $newSshkeyId;
    }
    /**
     * accessor method for sshkey profile id
     *
     * @return int value of sshkey profile id
     **/
    public function getSshkeyProfileId(){
        return($this->sshkeyProfileId);
    }
    /**
     * mutator method for sshkey profile id
     *
     * @param int $newSshkeyProfileId
     * @throws \RangeException if $newProfileId is not positive
     * @throws \TypeError if $newSshkeyProfileId is not an integer
     **/
    public function setSshkeyProfileId(int $newSshkeyProfileId){
        // verify the profile id is positive
        if($newSshkeyProfileId <=0){
            throw(new \RangeException("sshkey profile id is not positive"));
        }
        // convert and store the profile id
        $this->sshkeyProfileId = $newSshkeyProfileId;
    }
    /**
     * accessor method for sshkey content
     *
     * @return string value of Algorithm
     */
}