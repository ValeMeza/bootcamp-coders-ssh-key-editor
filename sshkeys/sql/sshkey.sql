DROP TABLE IF EXISTS `sshkeys`;
DROP TABLE IF EXISTS sshkey;
DROP TABLE IF EXISTS profile;
CREATE TABLE profile (
  profileID INT UNSIGNED AUTO_INCREMENT NOT NULL,
  profileAtHandle VARCHAR(32) NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
UNIQUE(profileEmail),
Unique(profileAtHandle),
PRIMARY KEY(profileID)
);
CREATE TABLE sshkey (
  sshkeyId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  sshkeyProfileId INT UNSIGNED NOT NULL,
  sshkeyContent VARCHAR(5000) NOT NULL,
  sshkeyDate DATETIME NOT NULL,
  INDEX(sshkeyProfileId),
  FOREIGN KEY(sshkeyProfileId) REFERENCES profile(profileId),
  PRIMARY KEY(sshkeyId)
);
CREATE TABLE `sshkeys` (
  sshkeysProfileId INT UNSIGNED NOT NULL,
  sshkeysFingerprintId INT UNSIGNED NOT NULL,
  INDEX(sshkeysProfileId),
  INDEX(sshkeysFingerprintID),
  FOREIGN KEY(sshkeysProfileID) REFERENCES profile(profileId),
  PRIMARY KEY(sshkeysProfileId, sshkeysFingerprintId)
);