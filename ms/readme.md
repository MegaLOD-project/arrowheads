# Arrowhead Project Metadata Schemes
These two metadata schemes were created to be used with the Arrowhead Metadata Application Profile (see https://purl.org/ah/map/)

# Excavation Metadata Scheme
URI: https//purl.org/ah/ms/exacavation/ 

| Label                                   | Vocabulary Term         | Domain                                   | Range                                    |
|-----------------------------------------|-------------------------|------------------------------------------|------------------------------------------|
| Archaeologist                           | excav:Archaeologist     |                                          |                                          |
| Before (True) or After (False) christ   | excav:bc                | time:Instant                             | xsd:boolean                              |
| has GPS Coordinates                     | excav:hasGPSCoordinates | dbo:Place                                | geo:SpatialThing                         |
| has a person in charge                  | ah:hasResponsible       | crmarchaeo:A9_Archaeological_Excavation  | excav:Archaeologist                      |
| has context                             | ah:hasContext           | crmarchaeo:A9_Archaeological_Excavation  | crmarchaeo:A1_Excavation_Processing_Unit |
| has Stratigraphic Unit                  | ah:hasSVU               | crmarchaeo:A1_Excavation_Processing_Unit | crmarchaeo:A2_Stratigraphic_Volume_Unit  |
| hasTimeLine                             | ah:hasTimeLine          | crmarchaeo:A2_Stratigraphic_Volume_Unit  | time:TemporalEntity                      |
| Item found In a StratigraphicVolumeUnit | ah:foundInSVU           | crmsci:S19_Encounter_Event               | crmarchaeo:A2_Stratigraphic_Volume_Unit  |
| Item found In a Context                 | ah:foundInAContext      | crmsci:S19_Encounter_Event               | crmarchaeo:A1_Excavation_Processing_Unit |
| Item found In a Excavation              | ah:foundInAExcavation   | crmsci:S19_Encounter_Event               | crmarchaeo:A9_Archaeological_Excavation  |


# Arroweahd Metadata Scheme
URI: https//purl.org/ah/ms/ah/

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


