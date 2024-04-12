## MyVC Portal

This repository contains the source code for the MyVC student portal, a web application built using Docker Compose.
This project was developed by Shinan Mohamed (UWE ID: 24019764) as part of the MScIT program's Digital Design and Development module. 

**Features**

* **Personalized Dashboard:** Provides students with a quick overview of their academic progress, upcoming deadlines, and important announcements. 
* **Profile:** View and update users bio data, contacts, emergency contact etc. 
* **Timetable:** Offers a unified view of classes, exams and other important dates. 
* **Learning Support:** Allows students to access study materials like journals, library resources, etc. 
* **Communication:** Enables students to discuss course material with classmates, connect with peers and lecturers through messaging. 
* **Career Resources:** Provides students with access to job postings, career guidance resources. 
* **Mobile Optimization:** Ensures a smooth user experience on mobile devices for all functionalities.

**Technology Stack**

* Docker
* Front-end: HTML, CSS (Tailwind), JavaScript (Alpine.js)
* Back-end: PHP (Laravel)
* Database: MySQL

**Prerequisites**

* Docker installed on your system (refer to [https://www.docker.com/products/docker-desktop/](https://www.docker.com/products/docker-desktop/))
* Docker Compose installed on your system (refer to [https://docs.docker.com/compose/install/](https://docs.docker.com/compose/install/))

**Setup Instructions**

1. **Clone this repository:**

   ```bash
   git clone https://github.com/shinanmhd/myvc.git
   ```

2. **Create a `.env` file (optional):**

   This file can store sensitive environment variables like database passwords. You can copy the `.env.example` file and adjust the values. Docker Compose will automatically load environment variables from this file.

3. **Start the application:**

   Navigate to the project directory and run:

   ```bash
   docker-compose up -d
   ```

   The `-d` flag tells Docker Compose to run the containers in detached mode, allowing them to run in the background.

4. **Access the application:**

   The MyVC portal will be accessible in your web browser at `http://localhost:8001`.

**Important Notes:**

* The provided `docker-compose.yml` file configures three services:
    * `app`: The PHP application container.
    * `db`: The MySQL database container.
    * `nginx`: The Nginx web server container.
* The application code is mounted as a volume (`./:/var/www`) to the `app` container, allowing for live code updates.
* The MySQL database configuration is included in the `docker-compose.yml` file for simplicity. In a production environment, consider using a dedicated secrets management solution.
* The `redis` and `mysql-data` volumes are commented out as they are not used in the provided configuration.
