# Project
Open Source Practice code

# 3-Tier Dynamic Web Application on Raspberry Pi Zero 2W

## 1. Project Overview
This application serves as a lightweight, centralized Group Portal and Member Directory. It is intentionally optimized for the resource-constrained environment of the Raspberry Pi Zero 2W (512MB RAM), utilizing fast, native code without bulky framework dependencies to minimize CPU and memory runtime footprints.

## 2. 3-Tier Architecture Mapping
* **Presentation Tier (UI):** Modular, independent HTML/CSS profile views located within the `/features` directory matching team member credentials.
* **Logic Tier (Controller):** Driven by `index.php` in the root folder, which acts as a centralized traffic router mapping browser URL queries to separate features securely.
* **Data Tier (Relational Database):** Backed by a local MariaDB instance running on DietPi. It abstracts persistent records utilizing a single, shared `dp.php` PDO connection layer.
