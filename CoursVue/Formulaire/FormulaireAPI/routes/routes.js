import express from "express"

// import BDD from "../controllers/formulaireCtrl.js";
import { Banane, CreateUser } from "../controllers/formulaireCtrl.js";

const router = express.Router();

// router.post('/createuser', BDD.CreateUser)
router.post('/createuser', CreateUser)
// La route qui ce nomme /createuser va ramener

router.post('/bananesplit', Banane)

export default router
// Les routes servent à rediriger notre application Vue vers les différents controlers