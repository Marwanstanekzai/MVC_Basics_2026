-- Step: 01
-- ************************************************************
-- Doel : Maak een nieuwe database aan met de naam MVC_Basics_2509AB
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         10-02-2026   Marwan            Smartphones
-- ************************************************************

-- Verwijder database MVC_Basics_2509AB
DROP DATABASE IF EXISTS `MVC_Basics_2509AB`;

-- Maak een nieuwe database aan MVC_Basics_2509AB
CREATE DATABASE `MVC_Basics_2509AB`;

-- Gebruik database MVC_Basics_2509AB
USE `MVC_Basics_2509AB`;

-- Step: 02
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         10-02-2026   Marwan            Tabel Smartphones
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem,
-- Schermgrootte, Releasedatum, MegaPixels
-- ************************************************************

CREATE TABLE Smartphones
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Merk VARCHAR(50) NOT NULL
   ,Model VARCHAR(50) NOT NULL
   ,Prijs DECIMAL(6,2) NOT NULL
   ,Geheugen DECIMAL(4,0) NOT NULL
   ,Besturingssysteem VARCHAR(25) NOT NULL
   ,Schermgrootte DECIMAL(3,2) NOT NULL
   ,Releasedatum DATE NOT NULL
   ,MegaPixels DECIMAL(3,0) NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Smartphones_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;

-- Step: 03
-- ************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         10-02-2026   Marwan            Vulling Smartphones
-- ************************************************************

INSERT INTO Smartphones
(
     Merk
    ,Model
    ,Prijs
    ,Geheugen
    ,Besturingssysteem
    ,Schermgrootte
    ,Releasedatum
    ,MegaPixels
)
VALUES
('Apple', 'iPhone 16 Pro', 1256.56, 64, 'iOS 18', 6.7, '2025-01-19', 50),
('Samsung', 'Galaxy S25 Ultra', 1539, 128, 'Android 15', 6.1, '2025-02-01', 200),
('Google', 'Pixel 9 Pro', 890, 1024, 'Android 15', 6.3, '2024-12-20', 100);

-- Voeg nog minimaal 5 extra smartphones toe
INSERT INTO Smartphones
(
     Merk
    ,Model
    ,Prijs
    ,Geheugen
    ,Besturingssysteem
    ,Schermgrootte
    ,Releasedatum
    ,MegaPixels
)
VALUES
('OnePlus', 'OnePlus 12 Pro', 999.99, 256, 'Android 15', 6.7, '2025-03-15', 48),
('Xiaomi', 'Mi 13 Pro', 799.99, 512, 'Android 15', 6.9, '2025-04-10', 108),
('Sony', 'Xperia Z5 Premium', 899.99, 128, 'Android 15', 5.5, '2025-05-20', 23),
('Huawei', 'P60 Pro', 1099.99, 256, 'HarmonyOS', 6.8, '2025-06-01', 50),
('Motorola', 'Edge Plus (2024)', 699.99, 128, 'Android 15', 6.7, '2025-07-01', 108);

-- Step: 04
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         10-02-2026   Marwan   Tabel Sneakers
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
-- ************************************************************

CREATE TABLE Sneakers
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Merk VARCHAR(50) NOT NULL
   ,Model VARCHAR(50) NOT NULL
   ,Type VARCHAR(25) NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Sneakers_Id PRIMARY KEY (Id)   -- ✅ FOUT HERSTELD
) ENGINE=InnoDB;

-- Step: 05
-- ************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         10-02-2026   Marwan          Vulling Sneakers
-- ************************************************************

INSERT INTO Sneakers
(
     Merk
    ,Model
    ,Type
)
VALUES
('Nike', 'Air Jordan 1', 'Hardloop'),
('Adidas', 'Yeezy Boost 350', 'Basketbal'),
('New Balance', 'Pixel 9 Pro', 'Casual'),
('Trico', 'New Age', 'Casual'),
('Overlord', 'Tristar 6', 'Hardloop');

-- Voeg nog minimaal 3 extra records toe
INSERT INTO Sneakers
(
     Merk
    ,Model
    ,Type
)
VALUES
('Puma', 'RS-X3', 'Hardloop'),
('Reebok', 'Club C 85', 'Casual'),
('Asics', 'Gel-Kayano 27', 'Hardloop');

-- Step: 06
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Horloges
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         11-02-2026   Marwan   Tabel Horloges
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Horloges
-- Materiaal (Goud, Diamant, RVS), Gewicht, Releasedatum, Waterdichtheid(m), Type (Analoog, Digitaal),
-- Uniek kenmerk
-- ************************************************************

CREATE TABLE Horloges
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Merk VARCHAR(50) NOT NULL
   ,Model VARCHAR(50) NOT NULL
   ,Prijs DECIMAL(6,0) NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Horloges_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;

-- Step: 07
-- ************************************************************
-- Doel : Vul de tabel Horloges met gegevens
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         11-02-2026   Marwan   Vulling Horloges
-- ************************************************************

INSERT INTO Horloges
(
     Merk
    ,Model
    ,Prijs
)
VALUES
('Rolex', 'Daytona 126500LN', 19800),
('Omega', 'Speedmaster Moonwatch Professional', 8500),
('Vacheron Constantin', 'Overseas Perpetual Calendar Ultra-Thin', 98000),
('Jaeger-LeCoultre', 'Reverso Tribute Duoface', 17000);

-- Step: 08
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Speakers
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         11-02-2026   Marwan   Tabel Speakers
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Speakers
-- Vermogen, Type, Gewicht
-- ************************************************************

CREATE TABLE Speakers
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Merk VARCHAR(50) NOT NULL
   ,Model VARCHAR(50) NOT NULL
   ,Vermogen DECIMAL(5,0) NOT NULL
   ,Type VARCHAR(25) NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Speakers_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;


-- Step: 09
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Torens
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         11-02-2026   Marwan   Tabel Torens
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Torens
-- Hoogte, Land, Bouwjaar
-- ************************************************************

CREATE TABLE Torens
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Naam VARCHAR(50) NOT NULL
   ,Hoogte DECIMAL(6,2) NOT NULL
   ,Land VARCHAR(50) NOT NULL
   ,Bouwjaar YEAR NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Torens_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;


-- Step: 10
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Vulkaan
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         11-02-2026   Marwan   Tabel Vulkaan
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Vulkaan
-- Hoogte, Locatie, LaatsteUitbarsting
-- ************************************************************

CREATE TABLE Vulkaan
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Naam VARCHAR(50) NOT NULL
   ,Hoogte DECIMAL(6,2) NOT NULL
   ,Locatie VARCHAR(50) NOT NULL
   ,LaatsteUitbarsting DATE NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Vulkaan_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;


-- Step: 11
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Zangeres
-- ************************************************************
-- Versie     Datum        Auteur            Omschrijving
-- ******     *****        ******            ************
-- 01         11-02-2026   Marwan   Tabel Zangeres
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Zangeres
-- Genre, Geboortedatum, Nationaliteit
-- ************************************************************

CREATE TABLE Zangeres
(
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
   ,Naam VARCHAR(50) NOT NULL
   ,Genre VARCHAR(50) NOT NULL
   ,Geboortedatum DATE NOT NULL
   ,Nationaliteit VARCHAR(50) NOT NULL
   ,IsActief BIT NOT NULL DEFAULT 1
   ,Opmerking VARCHAR(255) NULL DEFAULT NULL
   ,DatumAangemaakt DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd DATETIME(6) NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT PK_Zangeres_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;
