# CMS Assignment

Created by Sarah Nymann Jensen – April 2026

## Overview

This project is part of a CMS development assignment where I explored and compared two CMS platforms: WordPress and Umbraco.

The purpose of this project is to explore and compare how different CMS platforms support development, customization, and developer workflows.

---

## Project Structure

Below is an overview of the project structure:

CMS-DEV/
├── Umbraco/
│ └── how-to/
│ ├── setup.md
│ └── screenshots/
├── WordPress/
│ ├── custom-theme/
│ │ └── lemonade/
│ │ ├── css/
│ │ ├── footer.php
│ │ ├── functions.php
│ │ ├── header.php
│ │ ├── index.php
│ │ ├── single.php
│ │ └── style.css
│ ├── custom-plugin/
│ │ ├── banner/
│ │ └── imagecompressor/
│ ├── docker-headless-react/
│ │ └── wp-docker-app/
│ │ ├── docker-compose.yml
│ │ └── wp-content/
│ └── headless-react/
│ └── headless-wp-react/
│ ├── public/
│ ├── src/
│ ├── .gitignore
│ ├── index.html
│ ├── package.json
│ ├── README.md
│ └── vite.config.js
├── .gitignore
└── README.md

---

## WordPress

In the WordPress part of the project, I worked with different development approaches.

This includes:

- Creating a custom theme (lemonade theme)
- Developing custom plugins (banner and image compressor)
- Working with a headless setup using React
- Running WordPress with Docker

This part of the project focuses on hands-on development, customization, and understanding how WordPress can be extended.

---

## Umbraco

In the Umbraco part, I explored the core functionality of the CMS using .NET.

This includes:

- Setting up an Umbraco project
- Defining content structure using Document Types
- Creating templates with Razor
- Managing content in the backoffice
- Implementing navigation
- Styling with CSS
- Working with media using the Media Picker

A step-by-step guide is included in:

`Umbraco/how-to/`

---

## How to Run the Project

Make sure Docker, Node.js, and .NET are installed before running the project.

---

### Umbraco

1. Navigate to the Umbraco project folder: `cd Umbraco´

2. Run the project:
   dotnet run

3. Open the URL shown in the terminal:
   https://localhost:xxxx

4. Log in to the Umbraco backoffice:
   /umbraco

---

### WordPress (Docker Setup)

1. Navigate to the Docker setup:
   cd WordPress/docker-headless-react/wp-docker-app

2. Start the containers:
   docker compose up --build

3. Open your browser and go to:
   http://localhost

4. Complete the WordPress setup if prompted.

---

### React (Headless Frontend)

1. Navigate to the React app:
   cd WordPress/headless-react/headless-wp-react

2. Install dependencies:
   npm install

3. Start the development server:
   npm run dev

4. Open the shown localhost URL:
   http://localhost:5173

5. Make sure your .env file contains the correct WordPress API URL.

---
