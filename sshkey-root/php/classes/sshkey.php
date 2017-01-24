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
     */
}