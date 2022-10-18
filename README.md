<p align="center"><a href="https://www.leyeco-v.com.ph/" target="_blank"><img src="https://www.leyeco-v.com.ph/images/logo.png" width="400" alt="LEYECO V Logo"></a></p>

## About

Geographical Information System (GIS) for the LEYECO V electrical company in Leyte, Philippines

Nicknamed HELIOS after an ancient Greek god [HELIOS](https://en.wikipedia.org/wiki/Helios), the personification of the Sun.

A refactor system of the [exisiting](https://github.com/Jeppenseppiro/HELIOS) geographical information system made for an electrical company here in Leyte. One of the reasons why this was made was because during the 2013 super typhoon Yolanda, record-keeping and fetching of the properties (ex. electrical posts, transformers) was a nightmare. Automating that process was one solution to the problem.

## Requirements

Make sure you have installed [Node](https://nodejs.org/en/) and [Composer](https://getcomposer.org/)

## Installation

Run the command below install the proper dependencies needed

```
npm install
composer install
```

Run the command below to migrate the database and seed the data to populate

```
php artisan migrate:fresh --seed
```

Run the command below to migrate the database and seed the data to populate

```
npm run dev
```

## Company

We would like to extend our gratitude to [LEYECO V](https://www.leyeco-v.com.ph/) for accepting us in the development of HELIOS GIS.

## Tools

- **[Laravel](https://laravel.com/)**
- **[Vue](https://vuejs.org/)**
- **[Tailwind](https://tailwindcss.com/)**
