# Patient Appointment Scheduling System Using Queues

## Project Description

The Patient Appointment Scheduling System is a web-based application developed to simplify the process of booking and managing patient appointments. The system uses a Queue Data Structure (FIFO - First In First Out) to assign queue numbers automatically and maintain the order of appointments.

## Features

* User Registration and Login
* Book Doctor Appointments
* Automatic Queue Number Generation
* View Patient Queue
* Appointment Confirmation Page
* Search Patient Records
* Cancel Appointments
* Admin Dashboard
* Dockerized Deployment

## Technologies Used

* HTML
* CSS
* PHP
* MySQL
* Docker
* Apache Server

## Modules

1. User Authentication Module
2. Appointment Booking Module
3. Queue Management Module
4. Appointment Cancellation Module
5. Search Module
6. Admin Dashboard Module

## Database Tables

### Users

* id
* fullname
* email
* password

### Appointments

* appointment_id
* patient_name
* phone
* department
* appointment_date
* symptoms
* queue_number
* status

## Project Workflow

1. User registers and logs in.
2. User books an appointment.
3. System assigns a queue number automatically.
4. Appointment details are stored in MySQL.
5. User can view appointment status and queue.
6. Admin can search and cancel appointments.

## How to Run

### Using Docker

```bash
docker-compose up --build
```

Open:

http://localhost:8080

## Project Outcome

The system successfully manages patient appointments using queue-based scheduling, reducing manual effort and improving appointment organization.

## Developed By

* MUPPANENI CHARITHA SREE
* BOLLI HARSHITHA
* ARJA SAISREE

### Academic Project

Department of Computer Science and Engineering

Sridevi Women's Engineering College

Academic Year: 2025-26
