DROP DATABASE IF EXISTS `yiishop`;

CREATE DATABASE `yiishop` CHARACTER SET utf8 COLLATE utf8_bin;

USE yiishop;

CREATE TABLE authority 
(
    Id          INT UNSIGNED    NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name        CHAR(50)        NOT NULL,
    Description CHAR(200)       DEFAULT NULL,
    Rank        TINYINT(1)      DEFAULT 1,
	Status		TINYINT(1) 		DEFAULT 1
);

CREATE TABLE user
(
    Id          INT UNSIGNED    NOT NULL AUTO_INCREMENT PRIMARY KEY,
    AuthId      INT UNSIGNED    NOT NULL,
    UserName    CHAR(50)        NOT NULL,
	Phone		CHAR(20)		DEFAULT NULL,
    Password    CHAR(200)       NOT NULL,
	FullName	CHAR(100)		NOT NULL,
	Address 	CHAR(200)		DEFAULT NULL,
	CitizenId	CHAR(100)		NOT NULL,
	Email		CHAR(100)		DEFAULT NULL,
	SocialNet	CHAR(100)		DEFAULT NULL,
	Images		CHAR(150)		DEFAULT NULL,
	Notes		CHAR(100)		DEFAULT NULL,
	Rank		TINYINT(1)		DEFAULT NULL,
    Status      TINYINT(1)      DEFAULT 1,
    Date        TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (AuthId) REFERENCES authority (Id)
);

CREATE TABLE category 
(
    Id          INT UNSIGNED    NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name        CHAR(50)        NOT NULL,
	Price		INT UNSIGNED	NOT NULL,
    Description CHAR(150)       DEFAULT NULL,
    Date        TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,
    Status      TINYINT(1)
);

CREATE TABLE category_history
(
	Id 			INT UNSIGNED 	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	CategoryId	INT UNSIGNED 	NOT NULL,
	Price 		INT UNSIGNED 	NOT NULL,
	Date 		TIMESTAMP 		NOT NULL DEFAULT CURRENT_TIMESTAMP,
	UserId		INT UNSIGNED 	NOT NULL,
	Notes		CHAR(50)		DEFAULT NULL,
	FOREIGN KEY (CategoryId) REFERENCES category (Id),
	FOREIGN KEY (UserId)	REFERENCES user (Id)
);

CREATE TABLE product_group
(
	Id 			INT UNSIGNED	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name		CHAR(80)		NOT NULL,
	Note		CHAR(250)		NOT NULL,
	Rank 		TINYINT			DEFAULT 1,
	Status		TINYINT			DEFAULT 1
);

CREATE TABLE product
(
    Id          INT UNSIGNED    NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Name        CHAR(150)       NOT NULL,
    CategoryId  INT UNSIGNED    NOT NULL,
    Price       INT UNSIGNED    DEFAULT NULL,
    Discount    INT UNSIGNED    DEFAULT NULL,
    PriceExtra  INT UNSIGNED    DEFAULT NULL,
    Images      CHAR(100)       DEFAULT NULL,
	GroupId		INT UNSIGNED	NOT NULL,
    Date        TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,
    DateUpdate  TIMESTAMP       NULL DEFAULT NULL,
    Rank        TINYINT      	DEFAULT 0,
    UserId      INT UNSIGNED    NOT NULL,
	Description	VARCHAR(500)	DEFAULT NULL,
    Status      TINYINT(1)      DEFAULT 0,
    FOREIGN KEY (CategoryId) REFERENCES category (Id) ON DELETE CASCADE,
	FOREIGN KEY (GroupId) REFERENCES product_group (Id) ON DELETE CASCADE,
    INDEX (UserId,CategoryId)
);

CREATE TABLE pictures
(
	Id 			INT UNSIGNED 	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ProductId	INT UNSIGNED	DEFAULT 0,
	Image 		CHAR(100)		NOT NULL,
	Date		TIMESTAMP 		NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (ProductId) REFERENCES product (Id)
);

CREATE TABLE cart
(
	Id 			INT UNSIGNED 	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	UserId		INT UNSIGNED 	NOT NULL,
	Date 		TIMESTAMP 		NOT NULL DEFAULT CURRENT_TIMESTAMP,
	Price 		INT UNSIGNED	NOT NULL,
	Discount	INT UNSIGNED	DEFAULT NULL,
	Price_plus	INT	UNSIGNED	DEFAULT NULL,
	Status		TINYINT(1)		DEFAULT 1,
	Notes		VARCHAR(200)	DEFAULT NULL,
	FOREIGN KEY (UserId) REFERENCES user (Id) ON DELETE CASCADE,
	INDEX (UserId)
);

CREATE TABLE saving
(
	Id 			INT UNSIGNED 	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Code		VARCHAR(50)		NOT NULL UNIQUE,
	UserId		INT UNSIGNED 	NOT NULL,
	NotaryId	INT UNSIGNED 	NOT NULL,
	Phone		VARCHAR(15)		NOT NULL,
	Images 		CHAR(100)		DEFAULT NULL,
	Contract 	TEXT			NOT NULL,
	Description VARCHAR(200)	DEFAULT NULL,
	Date 		TIMESTAMP 		NOT NULL DEFAULT CURRENT_TIMESTAMP,
	DateUpdate 	TIMESTAMP 		NULL DEFAULT NULL,
	Quantity 	FLOAT 			NOT NULL,
	Earning		FLOAT 			NOT NULL,
	Notes		TEXT			DEFAULT NULL,
	Interaction	INT UNSIGNED	DEFAULT 0,
	Status		TINYINT(1)		DEFAULT 0,
	FOREIGN KEY (UserId) REFERENCES user (Id),
	FOREIGN KEY (NotaryId) REFERENCES user (Id),
	INDEX (Code)
);

CREATE TABLE saving_interactions
(
	Id 			INT UNSIGNED 	NOT NULL AUTO_INCREMENT PRIMARY KEY,
	SavingId	INT UNSIGNED 	NOT NULL,
	UserId		INT UNSIGNED	NOT NULL,
	Comment 	VARCHAR(100)	DEFAULT NULL,
	Date 		TIMESTAMP		NOT NULL DEFAULT CURRENT_TIMESTAMP,
	Status 		TINYINT(1) 		DEFAULT 0,
	FOREIGN KEY (UserId) REFERENCES user (Id),
	FOREIGN KEY (SavingId) REFERENCES saving (Id)
);

CREATE TABLE ledger 
(
    Id          INT UNSIGNED    NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ProductId	INT UNSIGNED 	DEFAULT NULL,
	CartId		INT	UNSIGNED 	DEFAULT NULL,
    UserId      INT UNSIGNED    NOT NULL,
	Date        TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,
	Actions		CHAR(50)		DEFAULT NULL,
    Content     TEXT            NOT NULL,
    Content2    CHAR(150)       DEFAULT NULL,
    Status      TINYINT(1)      DEFAULT 0,
    FOREIGN KEY (UserId) REFERENCES user (Id) ON DELETE CASCADE,
    INDEX (UserId)
);