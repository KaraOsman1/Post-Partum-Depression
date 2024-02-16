-- Create ADMIN table
CREATE TABLE ppd_admin (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

-- Create THERAPIST table
CREATE TABLE THERAPIST (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

-- Create VICTIMS table
CREATE TABLE VICTIMS (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

-- Create THERAPIST PROFILE table
CREATE TABLE THERAPIST_PROFILE (
    Therapist_Id INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Phone VARCHAR(20),
    Level_of_education VARCHAR(255),
    Years_of_experience INT,
    FOREIGN KEY (Therapist_Id) REFERENCES THERAPIST(Id)
);

-- Create VICTIMS PROFILE table
CREATE TABLE VICTIMS_PROFILE (
    Victims_Id INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Age INT,
    Email VARCHAR(255) NOT NULL,
    Phone VARCHAR(20),
    Chief_Complain VARCHAR(255),
    FOREIGN KEY (Victims_Id) REFERENCES VICTIMS(Id)
);

-- Create APPOINTMENTS table
CREATE TABLE APPOINTMENTS (
    Victims_Id INT,
    Therapist_Id INT,
    Chief_Complain VARCHAR(255),
    Appointment_Date DATE,
    PRIMARY KEY (Victims_Id, Therapist_Id),
    FOREIGN KEY (Victims_Id) REFERENCES VICTIMS(Id),
    FOREIGN KEY (Therapist_Id) REFERENCES THERAPIST(Id)
);

-- Create BROADCAST table
CREATE TABLE BROADCAST (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Message TEXT,
    Date DATE
);

-- Create PROGRESS table
CREATE TABLE PROGRESS (
    Victims_Id INT PRIMARY KEY AUTO_INCREMENT,
    Admission_date DATE,
    Duration INT,
    Next_appointment DATE,
    Attendance VARCHAR(50),
    Remarks TEXT,
    FOREIGN KEY (Victims_Id) REFERENCES VICTIMS(Id)
);

-- Create WORK PLAN table
CREATE TABLE WORK_PLAN (
    Victims_Id INT PRIMARY KEY AUTO_INCREMENT,
    Diet TEXT,
    Exercise TEXT,
    Prescriptions TEXT,
    Next_Appointment DATE,
    FOREIGN KEY (Victims_Id) REFERENCES VICTIMS(Id)
);

-- Create FEEDBACK table
CREATE TABLE FEEDBACK (
    Victims_Id INT PRIMARY KEY AUTO_INCREMENT,
    Feedback TEXT,
    Rating INT,
    FOREIGN KEY (Victims_Id) REFERENCES VICTIMS(Id)
);

-- Create CHATS table
CREATE TABLE CHATS (
    Victims_Id INT,
    Therapist_Id INT,
    Message TEXT,
    PRIMARY KEY (Victims_Id, Therapist_Id),
    FOREIGN KEY (Victims_Id) REFERENCES VICTIMS(Id),
    FOREIGN KEY (Therapist_Id) REFERENCES THERAPIST(Id)
);
