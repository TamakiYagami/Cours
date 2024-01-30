// Recréer le fichier PieceAuto.json en objet js  

function Piece(id, nom, prix, categorie, image, description, disponible) {
    this.id = id;
    this.nom = nom;
    this.prix = prix;
    this.categorie = categorie;
    this.image = image;
    this.description = description;
    this.disponible = disponible;
}