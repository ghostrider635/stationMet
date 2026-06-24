station-meteo/

│
├── app/
│   │
│   ├── controllers/
│   │   ├── HomeController.php
│   │   ├── MesureController.php
│   │   ├── AlerteController.php
│   │   └── ApiController.php
│   │
│   ├── models/
│   │   ├── Mesure.php
│   │   ├── Station.php
│   │   ├── Capteur.php
│   │   └── Alerte.php
│   │
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   │
│   │   ├── home/
│   │   │   └── index.php
│   │   │
│   │   ├── mesures/
│   │   │   ├── index.php
│   │   │   ├── details.php
│   │   │   └── historique.php
│   │   │
│   │   └── alertes/
│   │       └── index.php
│   │
│   └── core/
│       ├── Controller.php
│       ├── Model.php
│       ├── Database.php
│       └── Router.php
│
├── config/
│   ├── database.php
│   └── config.php
│
├── public/
│   │
│   ├── index.php
│   │
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css
│   │   │
│   │   ├── js/
│   │   │   └── app.js
│   │   │
│   │   └── images/
│   │
│   └── uploads/
│
├── routes/
│   └── web.php
│
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── station_meteo.sql
│
├── logs/
│
├── vendor/
│
├── .env
│
└── README.mds