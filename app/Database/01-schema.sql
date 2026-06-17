-- PRAGMA foreign_keys = ON;

CREATE TABLE produit (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    designation TEXT NOT NULL,
    quantite_stock INTEGER NOT NULL,
    prix_unitaire REAL
);


CREATE TABLE caisse (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    numero TEXT NOT NULL
);

CREATE TABLE achat (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    id_user INTEGER NOT NULL,
    id_caisse INTEGER NOT NULL,
    montant_total REAL DEFAULT 0,

    FOREIGN KEY (id_caisse) REFERENCES caisse(id)
    FOREIGN KEY (id_user) REFERENCES user(id)
);


CREATE TABLE achat_detail (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    id_achat INTEGER NOT NULL,
    id_produit INTEGER NOT NULL,
    quantite INTEGER NOT NULL,
    montant REAL,

    FOREIGN KEY (id_achat) REFERENCES achat(id),
    FOREIGN KEY (id_produit) REFERENCES produit(id)
);

INSERT INTO produit (designation, quantite_stock, prix_unitaire) VALUES
('Coca Cola', 100, 15000),
('Fanta', 50, 25000),
('Jack Daniels', 200, 80000),
('Red Label', 75, 42000),
('Black Label', 30, 10000);


INSERT INTO caisse (numero) VALUES
('Caisse 01'),
('Caisse 02');


CREATE TABLE user (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(100) NOT NULL,
    mot_de_passe VARCHAR(300) NOT NULL
);

INSERT INTO user (email, mot_de_passe)
VALUES ('caissier@supermache.mg', 'caissier123');