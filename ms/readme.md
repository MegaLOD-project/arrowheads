# MegaLOD Project Metadata Schemes
These two metadata schemes were created to be used with the MegaLOD Metadata Application Profile (see https://purl.org/megalod/map/)

# Excavation Metadata Scheme
URI: https//purl.org/megalod/ms/excav/

## Classes

| Label                                   | Vocabulary Term         | 
|-----------------------------------------|-------------------------|
| Excavation                              | Excavation              |                                        
| Archaeologist                           | Archaeologist           |                                
| Location                                | Location                |                              
| GPS Coordinates                         | GPSCoordinates          |                      
| Encounter Event                         | EncounterEvent          |                                        
| Stratigraphic Volume Unit               | StratigraphicVolumeUnit |                                       
| Context                                 | Context                 |                                       
| TimeLine                                | TimeLine                |
| Item                                    | Item                    |    



## Terms
| Label                                   | Vocabulary Term         | Domain                             |Range |
|-----------------------------------------|-------------------------|------------------------------------|------|
| Before (True) or After (False) christ   | bc                | time:Instant                             | xsd:boolean                              |
| has GPS Coordinates                     | hasGPSCoordinates | dbo:Place                                | geo:SpatialThing                         |
| has a person in charge                  | hasResponsible       | crmarchaeo:A9_Archaeological_Excavation  | excav:Archaeologist                      |
| has context                             | hasContext           | crmarchaeo:A9_Archaeological_Excavation  | crmarchaeo:A1_Excavation_Processing_Unit |
| has Stratigraphic Unit                  | hasSVU               | crmarchaeo:A1_Excavation_Processing_Unit | crmarchaeo:A2_Stratigraphic_Volume_Unit  |
| hasTimeLine                             | hasTimeLine          | crmarchaeo:A2_Stratigraphic_Volume_Unit  | time:TemporalEntity                      |
| Item found In a StratigraphicVolumeUnit | foundInSVU           | crmsci:S19_Encounter_Event               | crmarchaeo:A2_Stratigraphic_Volume_Unit  |
| Item found In a Context                 | foundInAContext      | crmsci:S19_Encounter_Event               | crmarchaeo:A1_Excavation_Processing_Unit |
| Item found In a Excavation              | foundInAExcavation   | crmsci:S19_Encounter_Event               | crmarchaeo:A9_Archaeological_Excavation  |


# Arroweahd Metadata Scheme
URI: https//purl.org/megalod/ms/ah/

## Classes
| Label                                   | Vocabulary Term         | 
|-----------------------------------------|-------------------------|
| Arrowhead                                | Arrowhead              |
| Morphology                                           | Morphology                  |       
| Typometry                                            | Typometry                   |      
| Chipping                                             | Chipping                    |     




## Terms
| Label                                                | Vocabulary Term                | Domain                           | Range            | VES                    |
|------------------------------------------------------|--------------------------------|----------------------------------|------------------|------------------------|

| Shape                                                | ah:shape                       | crm: E24_Physical_Man-Made_Thing | xsd:anyURI       | ah-shape               |
| Variant                                              | ah:variant                     | crm: E24_Physical_Man-Made_Thing | xsd:anyURI       | ah-variant             |
| Point (Sharp=True;Fractured=False)                                               | ah:point                       | ah:Morphology                    | xsd:boolean      |                        |
| Body (Symmetrical=True; Non-symmetrical=False)                                                | ah:body                        | ah:Morphology                    | xsd:boolean      |                        |
| Base                                                 | ah:base                        | ah:Morphology                    | xsd:anyURI       | ah-base                |
| Chipping-mode                                        | ah:mode                        | ah:Chipping                      | xsd:anyURI       | ah-chippingMode        |
| Chipping-amplitude (Marginal=True;Deep=False)        | ah:amplitude                   | ah:Chipping                      | xsd:boolean      |                        |
| Chipping-direction                                   | ah:direction                   | ah:Chipping                      | xsd:anyURI       | ah-chippingDirection   |
| Chipping-orientation (Lateral=True;Transverse=False) | ah:orientation                 | ah:Chipping                      | xsd:boolean      |                       |
| Chipping-delineation                                 | ah:dileneation                 | ah:Chipping                      | xsd:anyURI       | ah-chippingDelineation |
| Chipping-location-Side                               | ah:chippinglocation-Side       | ah:Chipping                      | xsd:anyURI       | ah-chippingLocation    |
| Chipping-Location-Transversal                        | ah:chippingLocation-Transveral | ah:Chipping                      | xsd:anyURI       | ah-chippingLocation    |
| Chipping-Shape                                       | ah:chippingShape               | ah:Chipping                      | xsd:anyURI       | ah-chippingShape       |
| The arrowhead was found in the GPSCoordinates        | ah:foundInCoordinates          | crm:E24_Physical_Man-Made_Thing  | geo:SpatialThing |                        |
| The arrowhead has a Morphology                       | ah:hasMorphology               | crm:E24_Physical_Man-Made_Thing  | ah:Morphology    |                        |
| The arrowhead has a typometry                        | ah:hasTypometry                | crm:E24_Physical_Man-Made_Thing  | ah:Typometry     |                        |
| The arrowhead has a Chipping                         | ah:hasChipping                 | crm:E24_Physical_Man-Made_Thing  | ah:Chipping      | |

# Axes Metadata Scheme
URI: https//purl.org/megalod/ms/ax/

## Classes

## Terms
| Label                                                | Vocabulary Term                | Domain                           | Range            | VES                    |
|------------------------------------------------------|--------------------------------|----------------------------------|------------------|------------------------|
| Morphology                                           | ah:Morphology                  |                                  |                  |                        |
| Typometry                                            | ah:Typometry                   |                                  |                  |                        |
| Chipping                                             | ah:Chipping                    |                                  |                  |                        |
| Shape                                                | ah:shape                       | crm: E24_Physical_Man-Made_Thing | xsd:anyURI       | ah-shape               |
| Variant                                              | ah:variant                     | crm: E24_Physical_Man-Made_Thing | xsd:anyURI       | ah-variant             |
| Point (Sharp=True;Fractured=False)                                               | ah:point                       | ah:Morphology                    | xsd:boolean      |                        |
| Body (Symmetrical=True; Non-symmetrical=False)                                                | ah:body                        | ah:Morphology                    | xsd:boolean      |                        |
| Base                                                 | ah:base                        | ah:Morphology                    | xsd:anyURI       | ah-base                |
| Chipping-mode                                        | ah:mode                        | ah:Chipping                      | xsd:anyURI       | ah-chippingMode        |
| Chipping-amplitude (Marginal=True;Deep=False)        | ah:amplitude                   | ah:Chipping                      | xsd:boolean      |                        |
| Chipping-direction                                   | ah:direction                   | ah:Chipping                      | xsd:anyURI       | ah-chippingDirection   |
| Chipping-orientation (Lateral=True;Transverse=False) | ah:orientation                 | ah:Chipping                      | xsd:boolean      |                       |
| Chipping-delineation                                 | ah:dileneation                 | ah:Chipping                      | xsd:anyURI       | ah-chippingDelineation |
| Chipping-location-Side                               | ah:chippinglocation-Side       | ah:Chipping                      | xsd:anyURI       | ah-chippingLocation    |
| Chipping-Location-Transversal                        | ah:chippingLocation-Transveral | ah:Chipping                      | xsd:anyURI       | ah-chippingLocation    |
| Chipping-Shape                                       | ah:chippingShape               | ah:Chipping                      | xsd:anyURI       | ah-chippingShape       |
| The arrowhead was found in the GPSCoordinates        | ah:foundInCoordinates          | crm:E24_Physical_Man-Made_Thing  | geo:SpatialThing |                        |
| The arrowhead has a Morphology                       | ah:hasMorphology               | crm:E24_Physical_Man-Made_Thing  | ah:Morphology    |                        |
| The arrowhead has a typometry                        | ah:hasTypometry                | crm:E24_Physical_Man-Made_Thing  | ah:Typometry     |                        |
| The arrowhead has a Chipping                         | ah:hasChipping                 | crm:E24_Physical_Man-Made_Thing  | ah:Chipping      | |
