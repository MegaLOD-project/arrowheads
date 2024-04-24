# The Arrowhead Metadata Application Profile - Ah MAP

# NameSpaces
| Prefix     | URI                                                   |
| ---------- | ----------------------------------------------------- |
| dct        | http://purl.org/dc/terms/                             |
| dul        | http://www.ontologydesignpatterns.org/ont/dul/DUL.owl |
| foaf       | http://xmlns.com/foaf/0.1/                            |
| dbo        | http://dbpedia.org/ontology/                          |
| crm        | http://www.cidoc-crm.org/cidoc-crm/                   |
| crmsci     | https://cidoc-crm.org/extensions/crmsci/              |
| crmarchaeo | http://www.cidoc-crm.org/extensions/crmarchaeo/       |
| edm        | http://www.europeana.eu/schemas/edm                   |
| time       | http://www.w3.org/2006/time#                          |


# Metadata Application Profile

| Label                                                               | Domain                                   | Range                                    | Vocabulary Term                          | Cardinality | VES                    |
|---------------------------------------------------------------------|------------------------------------------|------------------------------------------|------------------------------------------|-------------|------------------------|
| Excavation                                                          |                                          |                                          | crmarchaeo:A9_Archaeological_Excavation  |             |                        |
| Acronym                                                             | crmarchaeo:A9_Archaeological_Excavation  | xsd:Literal                              | dcterms:identifier                       | 1-1         |                        |
| Has a location                                                      | crmarchaeo:A9_Archaeological_Excavation  | dbo:Place                                | dul:hasLocation                          | 0-1         |                        |
| Location                                                            |                                          |                                          | dbo:Place                                |             |                        |
| has a District                                                      | dbo:Place                                | dbo:District                             | dbo:district                             | 0-1         |                        |
| has a Parish                                                        | dbo:Place                                | dbo:Parish                               | dbo:parish                               | 0-1         |                        |
| Name of the Location                                                | dbo:Place                                | xsd:Literal                              | dbo:informationName                      | 0-1         |                        |
| District                                                            |                                          |                                          | dbo:District                             |             |                        |
| Parish                                                              |                                          |                                          | dbo:Parish                               |             |                        |
| Location GPS Coordinates                                            | dbo:Place                                | geo:SpatialThing                         | excav:hasGPSCoordinates                  | 0-1         |                        |
| GPSCoordinates                                                      |                                          |                                          | geo:SpatialThing                         |             |                        |
| Latitude                                                            | geo:SpatialThing                         | xsd:decimal                              | geo:lat                                  | 0-1         |                        |
| Longitude                                                           | geo:SpatialThing                         | xsd:decimal                              | geo:long                                 | 0-1         |                        |
| has a person in charge                                              | crmarchaeo:A9_Archaeological_Excavation  | excav:Archaeologist                      | excav:hasPersonInCharge                  | 0-1         |                        |
| Archaeologist                                                       |                                          |                                          | excav:Archaeologist                      |             |                        |
| ORCID                                                               | excav:Archaeologist                      | xsd:anyURI                               | foaf:account                             | 1-1         |                        |
| Name                                                                | excav:Archaeologist                      | xsd:Literal                              | foaf:name                                | 0-1         |                        |
| Email                                                               | excav:Archaeologist                      | xsd:anyURI                               | foaf:mbox                                | 0-M         |                        |
| has context                                                         | crmarchaeo:A9_Archaeological_Excavation  | crmarchaeo:A1_Excavation_Processing_Unit | excav:hasContext                         | 1-M         |                        |
| Context                                                             |                                          |                                          | crmarchaeo:A1_Excavation_Processing_Unit |             |                        |
| ID                                                                  | crmarchaeo:A1_Excavation_Processing_Unit | xsd:Literal                              | dcterms:identifier                       | 1-1         |                        |
| has Stratigraphic Unit                                              | crmarchaeo:A1_Excavation_Processing_Unit | crmarchaeo:A2_Stratigraphic_Volume_Unit  | excav:hasSVU                             | 0-M         |                        |
| StratigraphicVolumeUnit                                             |                                          |                                          | crmarchaeo:A2_Stratigraphic_Volume_Unit  |             |                        |
| ID                                                                  | crmarchaeo:A2_Stratigraphic_Volume_Unit  | xsd:Literal                              | dcterms:identifier                       | 1-1         |                        |
| Description                                                         | crmarchaeo:A2_Stratigraphic_Volume_Unit  | xsd:Literal                              | dcterms:description                      | 0-1         |                        |
| hasTimeLine                                                         | crmarchaeo:A2_Stratigraphic_Volume_Unit  | time:TemporalEntity                      | excav:hasTimeLine                        | 0-1         |                        |
| Timeline                                                            |                                          |                                          | time:TemporalEntity                      | 0-1         |                        |
| The TimeLine has a Lower Bound (Year)                               | time:TemporalEntity                      | time:Instant                             | time:hasBeginning                        | 0-M         |                        |
| The TimeLine Upper Bound (Year)                                     | time:TemporalEntity                      | time:Instant                             | time:hasEnd                              | 0-M         |                        |
| An instant (year BC or AC) in time                                  |                                          |                                          | time:Instant                             |             |                        |
| The year that defines a bound in the TimeLIne                       | time:Instant                             | xsd:gYear                                | time:inXSDYear                           | 0-1         |                        |
| Before (True) or After (False) christ                               | time:Instant                             | xsd:boolean                              | excav:bc                                 | 0-1         |                        |
| The encounter event                                                 |                                          |                                          | crmsci:S19_Encounter_Event               |             |                        |
| Date                                                                | crmsci:S19_Encounter_Event               | xsd:Literal                              | dcterms:date                             | 0-1         |                        |
| Depth (in meters)                                                   | crmsci:S19_Encounter_Event               | xsd:decimal                              | dbo:depth                                | 0-1         |                        |
| Finding                                                             | crmsci:S19_Encounter_Event               | crm:E24_Physical_Man-Made_Thing          | crmsci:O19_encountered_object            | 0-M         |                        |
| Item found In a StratigraphicVolumeUnit                             | crmsci:S19_Encounter_Event               | StratigraphicVolumeUnit                  | excav:foundInSVU                         | 0-1         |                        |
| Item found In a Context                                             | crmsci:S19_Encounter_Event               | crmarchaeo:A1_Excavation_Processing_Unit | excav:foundInAContext                    | 0-1         |                        |
| Item found In a Excavation                                          | crmsci:S19_Encounter_Event               | crmarchaeo:A9_Archaeological_Excavation  | excav:foundInAExcavation                 | 0-1         |                        |
| ArrowHead                                                           |                                          |                                          | crm:E24_Physical_Man-Made_Thing          |             |                        |
| InventoryID                                                         | crm:E24_Physical_Man-Made_Thing          | xsd:xsd:Literal                          | dcterms:identifier                       | 1-1         |                        |
| Images or 3d Models of the arrowead                                 | crm:E24_Physical_Man-Made_Thing          | xsd:anyURI                               | edm:Webresource                          | 0-M         |                        |
| Shape of the arrowhead                                              | crm:E24_Physical_Man-Made_Thing          | xsd:anyURI                               | ah:shape                                 | 0-1         | AH-Shape               |
| Arrowhead made with Material                                        | crm:E24_Physical_Man-Made_Thing          | xsd:anyURI                               | crm:E57_Material                         | 0-1         | Getty Vocab AAT        |
| Observation details of the arrowhead                                | crm:E24_Physical_Man-Made_Thing          | xsd:Literal                              | dbo:Annotation                           | 0-M         |                        |
| The Condition State of the arrowhead (Complete=True; Broken=False)  | crm:E24_Physical_Man-Made_Thing          | xsd:boolean                              | crm:E3_Condition_State                   | 0-1         |                        |
| Type of the arrowhead (Elongate=True;Short=False)                   | crm:E24_Physical_Man-Made_Thing          | xsd:boolean                              | crm:E55_Type                             | 0-1         |                        |
| Variant of the arrowhead                                            | crm:E24_Physical_Man-Made_Thing          | xsd:anyURI                               | ah:variant                               | 0-1         | AH-Variant             |
| Was found in the GPSCoordinates                                     | crm:E24_Physical_Man-Made_Thing          | geo:SpatialThing                         | ah:foundInCoordinates                    | 0-1         |                        |
| The arrowhead has a Morphology                                      | crm:E24_Physical_Man-Made_Thing          | ah:Morphology                            | ah:hasMorphology                         | 0-1         |                        |
| Morphology                                                          |                                          |                                          | ah:Morphology                            |             |                        |
| Definition of the tip of the arrowhead (Sharp=True;Fractured=False) | ah:Morphology                            | xsd:boolean                              | ah:point                                 | 0-1         |                        |
| Body symmetry (Symmetrical=True; Non-symmetrical=False)             | ah:Morphology                            | xsd:boolean                              | ah:body                                  | 0-1         |                        |
| Type of the base of the arrowhead                                   | ah:Morphology                            | xsd:anyURI                               | ah:base                                  | 0-1         | AH-Base                |
| The arrowhead has a typometry                                       | crm:E24_Physical_Man-Made_Thing          | ah:Typometry                             | ah:hasTypometry                          | 0-1         |                        |
| Typometry                                                           |                                          |                                          | ah:Typometry                             | 0-1         |                        |
| Height of the arrowhead (in mm)                                     | ah:Typometry                             | xsd:decimal                              | crm:E54_Dimension                        | 0-1         |                        |
| Width  of the arrowhead (in mm)                                     | ah:Typometry                             | xsd:decimal                              | crm:E54_Dimension                        | 0-1         |                        |
| Thickness  of the arrowhead (in mm)                                 | ah:Typometry                             | xsd:decimal                              | crm:E54_Dimension                        | 0-1         |                        |
| BodyLenght  of the arrowhead (in mm)                                | ah:Typometry                             | xsd:decimal                              | crm:E54_Dimension                        | 0-1         |                        |
| BaseLenght  of the arrowhead (in mm)                                | ah:Typometry                             | xsd:decimal                              | crm:E54_Dimension                        | 0-1         |                        |
| The arrowhead has Chipping                                          | ah:Typometry                             | ah:Chipping                              | ah:hasChipping                           | 0-1         |                        |
| Chipping                                                            |                                          |                                          | ah:Chipping                              | 0-1         |                        |
| Chipping-mode                                                       | ah:Chipping                              | xsd:anyURI                               | ah:mode                                  | 0-1         | ah-chippingMode        |
| Chipping-amplitude (Marginal=True, Deep=False)                      | ah:Chipping                              | xsd:boolean                              | ah:amplitude                             | 0-1         |                        |
| Chipping-direction                                                  | ah:Chipping                              | xsd:anyURI                               | ah:direction                             | 0-1         | ah-chippingDirection   |
| Chipping-orientation (Lateral=True, Transverse=False)               | ah:Chipping                              | xsd:xsd:boolean                          | ah:orientation                           | 0-1         |                        |
| Chipping-delineation                                                | ah:Chipping                              | xsd:anyURI                               | ah:dileneation                           | 0-1         | ah-chippingDelineation |
| Chipping-location-Lateral                                           | ah:Chipping                              | xsd:anyURI                               | ah:chippinglocation-Lateral              | 0-3         | ah-chippingLocation    |
| Chipping-Location-Transversal                                       | ah:Chipping                              | xsd:anyURI                               | ah:chippingLocation-Transveral           | 0-3         | ah-chippingLocation    |
| Chipping-Shpae                                                      | ah:Chipping                              | xsd:anyURI                               | ah:chippingShape                         | 0-1         | ah-chippingShape       |


