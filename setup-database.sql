CREATE TABLE timezones (
USERID varchar(12) PRIMARY KEY,
TZFROM varchar(4) NOT NULL,
TZTO varchar(4) NOT NULL
);

INSERT INTO timezones (USERID, TZFROM, TZTO) VALUES
       ('tvarsanyi', 'NZT', 'PST');
