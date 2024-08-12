CREATE TABLE IF NOT EXISTS b_faq (
                                     ID int(11) NOT NULL AUTO_INCREMENT,
    QUESTION varchar(255) NOT NULL,
    ANSWER text NOT NULL,
    DATE_CREATE datetime NOT NULL,
    PRIMARY KEY (ID)
    );
