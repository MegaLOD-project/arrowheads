# MegaLOD Project Metadata Schemes
These two metadata schemes were created to be used in the context of the MegaLOD Metadata Application Profile (see https://purl.org/megalod/map/)

# Excavation Metadata Scheme
URI: https//purl.org/megalod/ms/excav/

## Classes

| Label                                   | Vocabulary Term         | Note                                                   |
|-----------------------------------------|-------------------------|--------------------------------------------------------|
| Excavation                              | Excavation              | rdfs:subClassOf crmarchaeo:A9_Archaeological_Excavation|                                 
| Archaeologist                           | Archaeologist           | rdfs:subClassOf foaf:Person; owl:equivalentClass crm:E21_Person; |                               
| Location                                | Location                | rdfs:subClassOf dbo:Place|                           
| GPS Coordinates                         | GPSCoordinates          | rdfs:subClassOfgeo:SpatialThing |                     
| Encounter Event                         | EncounterEvent          | rdfs:subClassOf crmsci:S19_Encounter_Event    |                                   
| Stratigraphic Volume Unit               | StratigraphicVolumeUnit | rdfs:subClassOf crmarchaeo:A2_Stratigraphic_Volume_Unit|                                       
| Context                                 | Context                 | rdfs:subClassOf crmarchaeo:A1_Excavation_Processing_Unit|
| TimeLine                                | TimeLine                | rdfs:subClassOf time:TemporalEntity|
| Instant                                 | Instant                 | rdfs:subClassOf time:Instant|
| Item                                    | Item                    | rdfs:subClassOf crm:E24_Physical_Man-Made_Thing|   



## Terms
| Label                                   | Vocabulary Term         | Domain                             |Range |
|-----------------------------------------|-------------------------|------------------------------------|------|
| has GPS Coordinates                     | hasGPSCoordinates       | excav:Location                     | excav:GPSCoordinates                       |
| has a person in charge                  | hasPersonInCharge       | excav:Excavation                   | excav:Archaeologist                      |
| has context                             | hasContext              | excav:Excavation                   | excav:Context |
| has Stratigraphic Unit                  | hasSVU                  | excav:Context                      | excav:StratigraphicVolumeUnit  |
| hasTimeLine                             | hasTimeLine             | excav:StratigraphicVolumeUnit      | excav:TimeLine                      |
| Item found In a StratigraphicVolumeUnit | foundInSVU              | excav:EncounterEvent               | excav:StratigraphicVolumeUnit  |
| Item found In a Context                 | foundInAContext         | excav:EncounterEvent               | excav:Context|
| Item found In a Excavation              | foundInAExcavation      | excav:EncounterEvent               | excav:Excavation  |
| Before (True) or After (False) christ   | bc                      | excav:bc                           | xsd:boolean                              |


# Arroweahd Metadata Scheme
URI: https//purl.org/megalod/ms/ah/

## Classes
| Label                                   | Vocabulary Term         | Note |
|-----------------------------------------|-------------------------|------|
| Arrowhead                               | Arrowhead               | rdfs:subClassOf excav:Item |
| Morphology                              | Morphology              |     |  
| Typometry                               | Typometry                   |  |    
| Chipping                                | Chipping                    |   |  




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
