# Final Year Project CareSeeker
## Introduction
![](https://github.com/AliBilal-1/Project-Care-Seeker/blob/main/Project%20Screenshot/Home%20Page%20-%20Guest.jpeg)

A services-oriented website that offers a community platform to find support workers for elders, sick people, baby care, cooking, personal care, animal care, gym instruction, and domestic assistance. Care seekers can post jobs or search through an online community of support workers. Support workers will register on this website so care seekers can find them according to their desired needs. Support workers will charge hourly. Once a care seeker posts a job, support workers can respond through a messaging service. After finalizing the terms, the support worker will accept the job.

## Tools and Technology
- Fullstack Framework: Laravel 
- CSS Framework: Tailwind CSS
- Database: MySQL
- Packages: Chatify, alpine.

## Features

### User Registration and Profiles

1. **Support Worker Registration**:
   - Detailed bio data submission
   - Profile picture upload
   - Hourly rate input
   - Experience details
   - Submission of two references

2. **Care Seeker Registration**:
   - Basic information submission
   - Profile management

### Job Posting and Search

3. **Job Posting by Care Seekers**:
   - Service requirement description
   - Detailed service information
   - Service address
   - Estimated hourly budget
   - Service time

4. **Job Search for Support Workers**:
   - Search by service category
   - Filter jobs by location, hourly rate, and other criteria

### Communication and Hiring

5. **Messaging System**:
   - Direct messaging between care seekers and support workers
   - Notification system for new messages and job updates

6. **Job Application and Acceptance**:
   - Support workers can apply for jobs
   - Care seekers can review applications and finalize terms
   - Job acceptance by support workers

### Profile and Job Management

7. **Profile Management**:
   - Support workers can update their profiles, including experience, hourly rate, and references
   - Care seekers can update their profiles and manage their posted jobs

8. **Job Management**:
   - Care seekers can view, edit, or delete their job postings
   - Support workers can view the status of their applications and accepted jobs
## Demo
![](https://github.com/AliBilal-1/Project-Care-Seeker/blob/main/Project%20Screenshot/CareSeeker%20Demo.gif)

## Getting Started

To get started with the Care Seeker project, follow these steps:

1. Clone the repository: 
   ```bash
   git clone https://github.com/AliBilal-1/Project-Care-Seeker.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Project-Care-Seeker
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Set up the PostgreSQL database and update the database configuration in the `.env` file.
5. Run the migrations:
   ```bash
   php artisan migrate
   ```
6. Start the development server:
   ```bash
   php artisan serve
