DROP TABLE IF EXISTS sshkey;
DROP TABLE IF EXISTS profile;
CREATE TABLE profile (
  profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
  profilePasswordHash CHAR (128),
  profileSalt CHAR(64),
  UNIQUE(profileEmail),
  PRIMARY KEY(profileId)
);
CREATE TABLE sshkey (
  sshkeyId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  sshkeyProfileId INT UNSIGNED NOT NULL,
  sshkeyContent INT UNSIGNED NOT NULL,
  -- you added CHAR because all the sshkeyContent has the same byts
  sshkeyDate INT UNSIGNED NOT NULL,
  INDEX(sshkeyProfileId),
  FOREIGN KEY(sshkeyProfileId) REFERENCES profile(profileId),
  PRIMARY KEY(sshkeyId)
);
