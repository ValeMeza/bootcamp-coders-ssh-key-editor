DROP TABLE IF EXISTS sshkey;
DROP TABLE IF EXISTS profile;
CREATE TABLE profile (
  profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
  profileHash CHAR (128) NOT NULL,
  profileSalt CHAR(64) NOT NULL,
  UNIQUE(profileEmail),
  PRIMARY KEY(profileId)
);
CREATE TABLE sshkey (
  sshkeyId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  sshkeyProfileId INT UNSIGNED NOT NULL,
  sshkeyAlgorithm CHAR(64),
  sshkeyBits CHAR(4),
  sshkeyComment CHAR(22),
  sshkeyContent CHAR(44),
  -- ask about CHAR!!
  sshkeyDate TIMESTAMP,
  sshkeyFingerprint VARCHAR(44),
  sshkeyVersion INT UNSIGNED NOT NULL,
  INDEX(sshkeyProfileId, sshkeyBits, sshkeyComment, sshkeyContent, sshkeyFingerprint),
  FOREIGN KEY(sshkeyProfileId) REFERENCES profile(profileId),
  PRIMARY KEY(sshkeyId)
);
