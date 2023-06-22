<?php
$servername = "localhost";
$database = "shoppingpanier";
$username = "root";
$password = "";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $sql = "CREATE TABLE IF NOT EXISTS `produits` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`nom` varchar(200) NOT NULL,
	`description` text NOT NULL,
	`prix` decimal(7,2) NOT NULL,
	`prix_Réel` decimal(7,2) NOT NULL DEFAULT '0.00',
	`quantité` int(11) NOT NULL,
	`img` text NOT NULL,
	`date_ajou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
	INSERT INTO `produits` (`id`, `nom`, `description`, `prix`, `prix_Réel`, `quantité`, `img`, `date_ajou`) VALUES
	(1, 'Écouteur Bluetooth', '<p>Écouteur Bluetooth sans fil casque ecouteurs F9 écouteur stéréo HIFI sport casque Support iOS/Android téléphones HD appel.</p>\r\n<h3>Détails</h3>\r\n<ul>\r\n<li>Nom:
	Casque Bluetooth F9</li><li>Couleur: noir</li><li>Matériel: ABS</li><li>Version bluetooth: V5.0</li><li>Affichage de la batterie: prise en charge d\'Android, IOS</li><li>Distance de
	travail: 10 mètres</li><li>Sensibilité: 108 ± 2db</li><li>Impédance: 16 ± 5% Ω</li><li>Batterie: Casque 60mah</li><li>Batterie de chargement: 1200MAH</li><li>Utilisation continue du casque: 3-5 heures</li><li>Taille du bac de chargement: 8 * 5,5 ** 3CM</li>\r\n</ul>', '29.99', '0.00', 14.99, 'ecouteurBluetooth.png', '2021-10-13 17:55:22'),
	(2, 'Support-Telephone', '<h3>Détails</h3>\r\n<ul>\r\n<li>Support pour votre smartphone! Flexible, il vous permet de tordre la tige afin de trouver la hauteur idéale et l’emplacement parfait où placer votre téléphone.<br>Support flexible universel pour Smartphones, téléphones portables et liseuses - 60 cm de hauteur </li><li>Installation on ne peut plus simple , il suffit de :\r\n<ol>\r\n <li>– Insérer la boule de la tige à l’arrière du support téléphone</li><li>– visser la molette pour bloquer l’angle de vue choisi</li><li>- clipper la pince sur la surface choisie (bord de table ou autre)</li><li>– placer le téléphone dans le support en pinçant pour ouvrir, et refermer doucement autour du téléphone</li>\r\n</ol>\r\n</li>\r\n</ul>', '14.99', '19.99', 34, 'Support-Telephone.jpg', '2021-10-13 18:52:49'),
	(3, 'Headphones', '', '19.99', '0.00', 23, 'headphones.jpg', '2021-10-13 18:47:56'),
	(4, 'Chargeur Rapide', '<div><h3>Détails Chargeur Rapide Haute Qualité Turbo Charger 18W avec Cable type-c.</h3>\r\nVous pouvez charger vos téléphones plus rapidement avec ce chargeur.<br> Vous pouvez vérifier les valeurs de sortie du produit nommé ...... dans la section des spécifications du produit. Ce chargeur peut être utilisé sur tous les modèles Type-c USB-C Input.<br>Permet une charge rapide des téléphones ou des appareils mobiles avec prise en charge de
	la charge rapide. Vous pouvez également charger en toute sécurité d\'autres appareils.<br>Le chargeur peut fournir une puissance de charge différente pour différents appareils Android et iOS.</div>', '11.99', '0.00', 7, 'ChargeurRapide.jpg', '2021-10-13 17:42:04')";


    $db->exec($sql);
    echo 'La table "produits" est bien créée !';
}

catch (PDOException $e) {
    echo "erreur de connexion:" . $e->getMessage();
};    
    ?>