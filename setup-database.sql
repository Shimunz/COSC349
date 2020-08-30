CREATE TABLE timezones (
UserID varchar(20) PRIMARY KEY,
Timezone varchar(6) NOT NULL
);

INSERT INTO timezones (UserID, Timezone) VALUES
       ('tvarsanyi', 'AU'),
       ('checkthis', 'GB');
