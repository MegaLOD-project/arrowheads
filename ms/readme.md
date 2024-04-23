# Arrowhead Project Metadata Schemes
These two metadata schemes were created to be used with the Arrowhead Metadatata Application Profile (see http://purl.org/ah/map/)

# Excavation Metadata Scheme
| Label                                   | Vocabulary Term         | Domain                                   | Range                                    |
|-----------------------------------------|-------------------------|------------------------------------------|------------------------------------------|
| Archaeologist                           | excav:Archaeologist     |                                          |                                          |
| has GPS Coordinates                     | excav:hasGPSCoordinates | dbo:Place                                | geo:SpatialThing                         |
| has a person in charge                  | ah:hasResponsible       | crmarchaeo:A9_Archaeological_Excavation  | excav:Archaeologist                      |
| has context                             | ah:hasContext           | crmarchaeo:A9_Archaeological_Excavation  | crmarchaeo:A1_Excavation_Processing_Unit |
| has Stratigraphic Unit                  | ah:hasSVU               | crmarchaeo:A1_Excavation_Processing_Unit | crmarchaeo:A2_Stratigraphic_Volume_Unit  |
| hasTimeLine                             | ah:hasTimeLine          | crmarchaeo:A2_Stratigraphic_Volume_Unit  | time:TemporalEntity                      |
| Item found In a StratigraphicVolumeUnit | ah:foundInSVU           | crmsci:S19_Encounter_Event               | crmarchaeo:A2_Stratigraphic_Volume_Unit  |
| Item found In a Context                 | ah:foundInAContext      | crmsci:S19_Encounter_Event               | crmarchaeo:A1_Excavation_Processing_Unit |
| Item found In a Excavation              | ah:foundInAExcavation   | crmsci:S19_Encounter_Event               | crmarchaeo:A9_Archaeological_Excavation  |


# Arroweahd Meatadata Scheme
| Label                                         | Vocabulary Term                | Domain                           | Range            | VES                    |
|-----------------------------------------------|--------------------------------|----------------------------------|------------------|------------------------|
| Morphology                                    | ah:Morphology                  |                                  |                  |                        |
| Typometry                                     | ah:Typometry                   |                                  |                  |                        |
| Chipping                                      | ah:Chipping                    |                                  |                  |                        |
| Shape                                         | ah:shape                       | crm: E24_Physical_Man-Made_Thing | anyURI           | AH-Shape               |
| Variant                                       | ah:variant                     | crm: E24_Physical_Man-Made_Thing | anyURI           | AH-Variant             |
| Point                                         | ah:point                       | ah:Morphology                    | anyURI           | AH-Point               |
| Body                                          | ah:body                        | ah:Morphology                    | anyURI           | AH-Body                |
| Base                                          | ah:base                        | ah:Morphology                    | anyURI           | AH-Base                |
| Chipping-mode                                 | ah:mode                        | ah:Chipping                      | anyURI           | AH-ChippingMode        |
| Chipping-amplitude                            | ah:amplitude                   | ah:Chipping                      | Boolean          |    |
| Chipping-direction                            | ah:direction                   | ah:Chipping                      | anyURI           | AH-ChippingDirection   |
| Chipping-orientation                          | ah:orientation                 | ah:Chipping                      | Boolean          |  |
| Chipping-delineation                          | ah:dileneation                 | ah:Chipping                      | anyURI           | AH-ChippingDelineation |
| Chipping-location-Side                        | ah:chippinglocation-Side       | ah:Chipping                      | anyURI           | AH-ChippingLocation    |
| Chipping-Location-Transversal                 | ah:chippingLocation-Transveral | ah:Chipping                      | anyURI           | AH-ChippingLocation    |
| Chipping-Shape                                | ah:chippingShape               | ah:Chipping                      | anyURI           | AH-ChippingShape       |
| The arrowhead was found in the GPSCoordinates | ah:foundInCoordinates          | crm:E24_Physical_Man-Made_Thing  | geo:SpatialThing |                        |
| The arrowhead has a Morphology                | ah:hasMorphology               | crm:E24_Physical_Man-Made_Thing  | ah:Morphology    |                        |
| The arrowhead has a typometry                 | ah:hasTypometry                | crm:E24_Physical_Man-Made_Thing  | ah:Typometry     |                        |
| The arrowhead has a Chipping                  | ah:hasChipping                 | crm:E24_Physical_Man-Made_Thing  | ah:Chipping      |

