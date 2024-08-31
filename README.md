# Final Year Project: CareSeeker
![Project CareSeeker: Mockup](https://raw.githubusercontent.com/MrAliBilal/Project-Care-Seeker/main/Project%20Screenshot/Project-CareSeeker-Mockup.png "Project CareSeeker: Mockup")
## Introduction
A services-oriented website that offers a community platform to find support workers for elders, sick people, baby care, cooking, personal care, animal care, gym instruction, and domestic assistance. Care seekers can post jobs or search through an online community of support workers. Support workers will register on this website so care seekers can find them according to their desired needs. Support workers will charge hourly. Once a care seeker posts a job, support workers can respond through a messaging service. After finalizing the terms, the support worker will accept the job.

## Tools and Technology
**Language**: HTML, CSS, JavaScript, PHP<br>
**Fullstack Framework**: Laravel, blade<br>
**CSS Framework**: Tailwind CSS<br>
**Database**: MySQL<br>
**Package**s: Chatify, Alpine, Awesome Font<br>

## Features

<details>
   <summary title=" 📜 𝘾𝙡𝙞𝙘𝙠 𝙩𝙤 𝙚𝙭𝙥𝙖𝙣𝙙 𝙤𝙧 𝙘𝙤𝙡𝙡𝙖𝙥𝙨𝙚 " > <h3> User Registration and Profiles </h3> </summary>

   1. **Support Worker Registration:**
      - Detailed bio data submission
      - Profile picture upload
      - Hourly rate input
      - Experience details
      - Submission of two references

   2. **Care Seeker Registration:**
      - Basic iformation submission
      - Profile management
</details>
<details>
   <summary title=" 📜 𝘾𝙡𝙞𝙘𝙠 𝙩𝙤 𝙚𝙭𝙥𝙖𝙣𝙙 𝙤𝙧 𝙘𝙤𝙡𝙡𝙖𝙥𝙨𝙚 " > <h3> Job Posting and Search </h3> </summary>

   3. **Job Posting by Care Seekers**:
      - Service requirement description
      - Detailed service information
      - Service address
      - Estimated hourly budget
      - Service time

   4. **Job Search for Support Workers**:
      - Search by service category
      - Filter jobs by location, hourly rate, and other criteria
</details>
<details>
   <summary title=" 📜 𝘾𝙡𝙞𝙘𝙠 𝙩𝙤 𝙚𝙭𝙥𝙖𝙣𝙙 𝙤𝙧 𝙘𝙤𝙡𝙡𝙖𝙥𝙨𝙚 " > <h3> Communication and Hiring </h3> </summary>

   5. **Messaging System**:
      - Direct messaging between care seekers and support workers
      - Notification system for new messages and job updates

   6. **Job Application and Acceptance**:
      - Support workers can apply for jobs
      - Care seekers can review applications and finalize terms
      - Job acceptance by support workers
</details>
<details>
   <summary title=" 📜 𝘾𝙡𝙞𝙘𝙠 𝙩𝙤 𝙚𝙭𝙥𝙖𝙣𝙙 𝙤𝙧 𝙘𝙤𝙡𝙡𝙖𝙥𝙨𝙚 " > <h3> Profile and Job Management </h3> </summary>

   7. **Profile Management**:
      - Support workers can update their profiles, including experience, hourly rate, and references
      - Care seekers can update their profiles and manage their posted jobs

   8. **Job Management**:
      - Care seekers can view, edit, or delete their job postings
      - Support workers can view the status of their applications and accepted jobs
</details>

<details>
   <summary > <h1 title=" 📜 𝘾𝙡𝙞𝙘𝙠 𝙩𝙤 𝙚𝙭𝙥𝙖𝙣𝙙 𝙤𝙧 𝙘𝙤𝙡𝙡𝙖𝙥𝙨𝙚 " > Project CareSeeker: Demo 🎥 </h1> </summary>

   ![ Project CareSeeker Demo](https://raw.githubusercontent.com/MrAliBilal/Project-Care-Seeker/main/Project%20Screenshot/CareSeeker%20Demo%20normal%20speed%20compress.gif " Project CareSeeker Demo ")
</details>

## Design Document PDF files of CareSeeker

[ ⬇️ **Download Design Document PDF** ](https://raw.githubusercontent.com/MrAliBilal/Project-Care-Seeker/main/Desgin%20Documents/Final%20Deliverable%20-%20Care%20Seeker/Final%20Year%20Project%20-%20Care%20Seeker%20-.pdf
 " 𝐃𝐨𝐰𝐧𝐥𝐨𝐚𝐝 ⬇️ : CareSeeker Design Document 📄 ")

<details>
<summary > <h3 title=" 📜 𝘾𝙡𝙞𝙘𝙠 𝙩𝙤 𝙚𝙭𝙥𝙖𝙣𝙙 𝙤𝙧 𝙘𝙤𝙡𝙡𝙖𝙥𝙨𝙚 " > Table of Contents of Design Document PDF </h3> </summary>

- Gathering & Analyzing Info
  - Introduction
  - Purpose
  - Project Scope
  - Definitions, Acronyms, and Abbreviations
  - Project Requirements
    - Functional Requirements
    - Non-Functional Requirements
  - Use Cases and Usage Scenarios
    - Use Case Diagrams
    - Usage Scenarios
  - Development Methodology
    - Chosen Methodology
    - Reasons for Chosen Methodology
    - Work Plan (Gantt Chart)
    - Project Schedule (Submission Calendar)
- Designing the Project
  - Introduction
  - Purpose
  - Scope
  - Definitions, Acronyms, and Abbreviations
  - Dynamic Model: Sequence Diagrams
  - Object Model/Logical Model: Class Diagram
  - Database Model (Database Diagram)
  - Graphical User Interfaces
- Development
  - Development Plan (Architecture Diagram)
</details>

## Getting Started

To get started with the Care Seeker project, follow these steps:

1. Clone the repository: 
   ```bash
   git clone https://github.com/MrAliBilal/Project-Care-Seeker.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Project-Care-Seeker
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Set up the MySQL database and update the database configuration in the `.env` file.
5. Run the migrations:
   ```bash
   php artisan migrate
   ```
6. Start the development server:
   ```bash
   php artisan serve
