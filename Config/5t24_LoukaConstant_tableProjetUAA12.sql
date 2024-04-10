create table user (
	userID int NOT NULL auto_increment,
    nomUser varchar(30),
    prenomUser varchar(30),
    genreUser varchar(20),
    bornUser date,
    mailUser varchar(50),
    passwordUser varchar(100),
    primary key(userID)
); 

INSERT INTO user (nomUser, prenomUser, genreUser, bornUser, mailUser, passwordUser)
VALUES ('Test', 'Test', 'Masculin','2000-01-01', 'test@gmail.com', 'MYtest');
   

create table complexes (
	complexesID int NOT NULL auto_increment,
    adresseComplexe varchar(100),
    nomComplexe varchar(50),	
    villeComplexe varchar(40),	
    numPhoneComplexe varchar(40),
    descriptionComplexe varchar (16000),
    userID int,
    sportsDispoID varchar(20),
    primary key(complexesID),
    FOREIGN KEY (userID) REFERENCES user(userID),
    FOREIGN key (sportsDispoID) REFERENCES sportsdispo(sportsDispoID)
);   




  
create table rendezVous (
	rendezVousID int NOT NULL auto_increment,
    dateRendezVous date,
    heure time,
    lieuRendezVous varchar(20),
    userID int,
    primary key (rendezVousID),
    FOREIGN KEY (userID) REFERENCES user(userID)
); 

INSERT INTO rendezVous (dateRendezVous, heure, lieuRendezVous, userID)
VALUES ('2024-01-01', '15:00', 'Floreffe', '1'); 



create table sports (
	sportsID int NOT NULL auto_increment,
    nomSports varchar(20),
    primary key (sportsID)
);


create table accountUser (
	accountUserID int NOT NULL auto_increment,
    primary key (accountUserID),
    FOREIGN KEY (userID) REFERENCES user(userID)
);


create table choixUser (
	choixUserID int NOT NULL auto_increment,
    choixFaitUser varchar(20),
    sportsID int,
    userID int,
    primary key (choixUserID),
    FOREIGN KEY (sportsID) REFERENCES sports(sportsID),
    FOREIGN KEY (userID) REFERENCES user(userID)
);  

create table complexesSports (
	complexesSportsID int not null auto_increment,
    nbrePlacesDispo int,
    complexesID int,
    sportsID int,
    PRIMARY KEY (complexesSportsID),
    FOREIGN KEY (complexesID) REFERENCES complexes(complexesID),
    FOREIGN KEY (sportsID) REFERENCES sports(sportsID) 
);

CREATE TABLE inscription (
	inscriptionID int not null auto_increment,
    dateInscription date,
    PRIMARY KEY (inscriptionID),
    complexesSportsID int,
    userID int,
    FOREIGN KEY (complexesSportsID) REFERENCES complexessports(complexesSportsID),
    FOREIGN KEY (userID) REFERENCES user(userID)
);
 
 

    
    



    


    
    
    