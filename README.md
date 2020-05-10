# Project Specs

The dataset represents 10 years (1999 - 2008) of clinical care at 130 US hospitals and integrated delivery networks. It includes over 50 features representing patient and hospital outcomes. Information was extracted from the database for encounters that satisfied the following criteria.

1. It is an inpatient encounter (a hospital admission)

2. It is a diabetic encounter, that is, one during which any kind of diabetes was entered to the system as a diagnosis

3. The length of stay was at least 1 day and at most 14 days

4. Laboratory tests were performed during the encounter

5. Medications were administered during the encounter

The data contains such attributes such as patient number, race, gender, age, admission type, time in hospital, medical specialty of admitting physician, number of lab test performed, HbA1c test result, diagnosis, number of medication, diabetic medications, number of outpatient, inpatient, and emergency visits in the year before the hospitalization, etc. The dataset contains 50 columns.

Create a web based application that will do an exploratory data analysis of the given dataset

Describe the following: (Tables with Graphs and Explanations)

1. Frequency of Readmission

2. Readmissions per Race

3. Readmissions in less than 30 days by Race

4. Readmissions by Age Group

5. Readmissions by Total Number of Days Confined

#### Data Set
https://archive.ics.uci.edu/ml/datasets/diabetes+130-us+hospitals+for+years+1999-2008

#### Installation Instructions

- Download as zip
- Extract contents to HTDOCS folder
- Create database with name diabetic_db (in localhost/phpmyadmin)
- Import "/mysql-dump/diabetic_db.sql" into the database
- Rename data to readmission (in localhost/phpmyadmin/diabetic_db sql database)

#### System Requirements

- XAMPP

#### Run Instructions

- Open XAMPP
- Start APACHE and MYSQL
- Access site with localhost in browser

#### Other Technologies Used

1. largeCSV2mySQL (https://github.com/sanathp/largeCSV2mySQL)
- For uploading large csv data to database

2. HeidiSQL (https://www.heidisql.com/download.php)
- For uploading large sql file into database

#### Screenshots
Homepage: 

![alt text][homepage]

Frequency of Readmissions:

![alt text][frequency]

Readmissions per Race:

![alt text][race]

Readmissions in less than 30 days by Race:

![alt text][30days]

Readmissions by Age Group:

![alt text][age]

Readmissions by Total Number of Days Confined:

![alt text][confined]


[homepage] : https://github.com/30pewpew/HI191MP/tree/master/screenshots/Homepage.PNG
[frequency] : https://github.com/30pewpew/HI191MP/tree/master/screenshots/Frequency of Readmission.PNG
[race] : https://github.com/30pewpew/HI191MP/tree/master/screenshots/Readmissions per Race.PNG
[30days] : https://github.com/30pewpew/HI191MP/tree/master/screenshots/Readmissions in less than 30 days by Race.PNG
[age] : https://github.com/30pewpew/HI191MP/tree/master/screenshots/Readmissions by Age Group.PNG
[confined] : https://github.com/30pewpew/HI191MP/tree/master/screenshots/Readmissions by Total Number of Days Confined.PNG
