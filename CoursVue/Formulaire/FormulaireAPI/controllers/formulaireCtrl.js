import { InsertUser } from '../models/formulaireModel.js'

export function CreateUser(resultat, requete) {
    const Donnee = resultat.body
    InsertUser(Donnee)
}

export function Banane () {

}


// Ici va ce trouver les différentes fonction qui vont ramener vers les différents models des requêtes de la BDD