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
}