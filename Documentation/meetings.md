# Meeting #7
Date: 27 Feb 2023 | 16h00 PT

Local: CEOS.PP

People: Mariana Curado Malta, Maria Luisa Diez-Platas

Reporter: Mariana Curado Malta
Mariana presented the data model as it is now after the discussion with Américo. Maria Luisa said we needed to use a technique standard to present the model. She will decide that. The conceptual model will be done later.


**TO DO**
2. Maria Luisa will draw the physical model having as basis the model that already exists. After that we will decide how to draw the concepuatl model (technique to decide: e.g. E-R diagram)

----------------------------------
# Meeting #6
Date: 27 Feb 2023 | 9h30 PT

Local: CEOS.PP

People: Marco Oliveira, Maria Luisa Diez-Platas

Reporter: Marco Oliveira



**TO DO**

          
---------------------------------------
# Meeting #5

Date: 17 Feb 2023 | 10h PT

Local: Gabinete 334

People: Marco Oliveira, Rui Humberto

Reporter: Marco Oliveira

In this meeting, it was discussed the current state of the development of the project. We came to the conclusion that the way that MArcoo was showing the results of XQuery was sub optimal since the html formating was being done and written within the database. 

The right thing to do is to ask and query the database, retrieving an XML file formating it on te fly. The formating should probably be done with PHP.

**TO DO**
1. Marco: Change the code in order to fulfil the goals discussed in the meeting.
          MArco studies XQuery language.


--------------------------------
# Meeting #4

Date: 15 Feb 2023 | 10h PT

Local: Zoom

People: Marco Oliveira, Mariana Malta, Américo

Reporter: Marco Oliveira

After developing an initial schema and dataset, it was neeeded to consult with Américo (the archeologyst), to male sure that our schema had all the information required to describe the arrowheads. In this meeting, it was explained to him what had already been done to know if we were going in the right direction. It was discussed the multiple ways that we could aproach the situation and describe it. We ended up concluding that there was a lot of information yet to be described, in terms of elements in the schema and the specific types of data that was going to be inserted into the dataset.

**TO DO**
1. Marco: Make an Excel to send to Américo so that he can fill out the missing information about the elements, update the schema, update the data dictionary and update the meetings file.



--------------------------------
# Meeting #3

Date: 14 Feb 2023 | 14h PT

Local: CEOS.PP 

People: Marco Oliveira, Mariana Malta

Reporter: Marco Oliveira

In order to explore all the options available to make the project interoperable with the most amount of systems possible, we explored the CIDOC CRM, more specificaly the CRMarcheo model, that focuses on an Excavation Model. The goal was to study this model and make sure our schema and dataset was using the correct labels in order to make the project the most accessible it could be. It was discussed during this meeting those possibilities and ways to implement the specific labels.

**TO DO**
1. Marco: Study the model and try to match their classes and properties with the already existing dataset.



--------------------------------
# Meeting #2

Date: 30 Jan 2023 | 14h PT

Local: CEOS.PP 

People: Marco Oliveira, Mariana Malta

Reporter: Marco Oliveira

In this meeting, we discussed the multiple ways to identify the arrowheads in a unique way, coming to the conclusion that a reaserch on arrowheads was needed in order to reach a better understanding.
Up to this point, there has been developed 2 XML files containing demonstrative information on arrowheads and an XSD file that defines the structure of the XML files mentioned before. The database eXist has also been installed, already containing the files mentioned before. This was necessary in order to begin testing and trying out various XPath functions.

**TO DO:**
  1. Marco: Find out if xml schemas about arrowheads already exist online and understand how they describe them.  

----------------------

# Meeting #1

Date: 16 Jan 2023 | 15h PT

Local: CEOS.PP

People: Mariana Malta, Marco Oliveira, Maria Luisa Diez

Reporter: Marco Oliveira (Revised by Mariana Malta)

It was defined that we will use XML technology  for the development of the project so that we can provide interoperability.
We also defined that a website will be developed, containing a form, that will allow the quering of the database and than wil provide sorting and visualization of the data. We wil use ExistDB as database technology.
The programming languages to be used to manipulate the database are XML, XSD, XSLT and XQuery. THe Website will be developed in PHP.

**To DO:**
  1. Marco: installs EXISTDB in a local laptop, studies EXISTSDB
  2. Mariana: studies the possibilities of Webhosting
  3. Maria Luisa: provides Marco with a set of php files examples
