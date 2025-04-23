# The MegaLOD Metadata Application Profile V1.1 - MegaLOD MAP

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
| geo        | http://www.w3.org/2003/01/geo/wgs84_pos#              |
| time       | http://www.w3.org/2006/time#                          |
| ah         | https://purl.org/megalos/ms/ah/                       |
| excav      | https://purl.org/megalod/ms/excavation/               |

# MegaLOD Metadata Application Profile

| Label                                                               | Domain                                   | Range                                    | Vocabulary Term                          | Cardinality | VES                    | Note |
|---------------------------------------------------------------------|------------------------------------------|------------------------------------------|------------------------------------------|-------------|------------------------|---------|
| __Excavation__                                                      |                                          |                                          | excav:Excavation                         |             |                        |owl:equivalentClass crmarchaeo:A9_Archaeological_Excavation |
| Acronym                                                             | excav:Excavation                         | xsd:Literal                              | dcterms:identifier                       | 1-1         |                        |
| Has a location                                                      | excav:Excavation                         | excav:Location                           | dul:hasLocation                          | 0-1         |                        |
| __Location__                                                        |                                          |                                          | ex:Location owl:equivalentClass  dbo:Place                                |             |                        |
| has a District                                                      | ex:Location                              | dbo:District                             | dbo:district                             | 0-1         |                        |
| has a Parish                                                        | ex:Location                              | dbo:Parish                               | dbo:parish                               | 0-1         |                        |
| Name of the Location                                                | ex:Location                              | xsd:Literal                              | dbo:informationName                      | 0-1         |                        |
| District                                                            |                                          | xsd:uri                                  | dbo:District                             |             |                        |
| Parish                                                              |                                          | xsd:uri                                  | dbo:Parish                               |             |                        |
| Country                                                             |                                          | xsd:uri                                  | dbo:Country                              |             |                        |
| Location GPS Coordinates                                            | ex:Location                              | ex:GPSCoordinates                        | excav:hasGPSCoordinates                  | 0-1         |                        |
| __GPSCoordinates__                                                  |                                          |                                          | ex:GPSCoordinates owl:equivalentClass geo:SpatialThing                         |             |                        |
| Latitude                                                            | ex:GPSCoordinates                        | xsd:decimal                              | geo:lat                                  | 0-1         |                        |
| Longitude                                                           | ex:GPSCoordinates                        | xsd:decimal                              | geo:long                                 | 0-1         |                        |
| has a person in charge                                              | excav:Excavation                         | excav:Archaeologist                      | excav:hasPersonInCharge                  | 0-1         |                        |
| __Archaeologist__                                                   |                                          |                                          | excav:Archaeologist                      |             |                        |
| ORCID                                                               | excav:Archaeologist                      | xsd:anyURI                               | foaf:account                             | 1-1         |                        |
| Name                                                                | excav:Archaeologist                      | xsd:Literal                              | foaf:name                                | 0-1         |                        |
| Email                                                               | excav:Archaeologist                      | xsd:anyURI                               | foaf:mbox                                | 0-M         |                        |
| has context                                                         | excav:Excavation                         | excav:Context                            | excav:hasContext                         | 1-M         |                        |
| __Context__                                                         |                                          |                                          | excav:Context owl:equivalentClass  crmarchaeo:A1_Excavation_Processing_Unit |             |                        |
| ID                                                                  | excav:Context                            | xsd:Literal                              | dcterms:identifier                       | 1-1         |                        |
| has Stratigraphic Unit                                              | excav:Context                            | ex:StratigraphicVolumeUnit               | excav:hasSVU                             | 0-M         |                        |
| __StratigraphicVolumeUnit__                                         |                                          |                                          | ex:StratigraphicVolumeUnit owl:equivalentClass crmarchaeo:A2_Stratigraphic_Volume_Unit  |             |                        |
| ID                                                                  | crmarchaeo:A2_Stratigraphic_Volume_Unit  | xsd:Literal                              | dcterms:identifier                       | 1-1         |                        |
| Description                                                         | crmarchaeo:A2_Stratigraphic_Volume_Unit  | xsd:Literal                              | dcterms:description                      | 0-1         |                        |
| hasTimeLine                                                         | crmarchaeo:A2_Stratigraphic_Volume_Unit  | time:TemporalEntity                      | excav:hasTimeLine                        | 0-1         |                        |
| __Timeline__                                                        |                                          |                                          | ex:TimeLine owl:equivalentClass time:TemporalEntity                      | 0-1         |                        |
| The TimeLine has a Lower Bound (Year)                               | time:TemporalEntity                      | time:Instant                             | time:hasBeginning                        | 0-M         |                        |
| The TimeLine Upper Bound (Year)                                     | time:TemporalEntity                      | time:Instant                             | time:hasEnd                              | 0-M         |                        |
| __An instant (year BC or AC) in time__                              |                                          |                                          | ex:Instant owl:equivalentClass time:Instant                           |     0-1        |                        |
|The year that defines a bound in the TimeLIne                        | time:Instant                             | xsd:gYear                                | time:inXSDYear                           | 0-1         |                        |
| Before (True) or After (False) christ                               | time:Instant                             | xsd:boolean                              | excav:bc                                 | 0-1         |                        |
| __The encounter event__                                             |                                          |                                          | ex:EncounterEvent owl:equivalentClass  crmsci:S19_Encounter_Event               |             |                        |
| Date                                                                | ex:EncounterEvent                        | xsd:Literal                              | dcterms:date                             | 0-1         |                        |
| Depth (in meters)                                                   | ex:EncounterEvent                        | xsd:decimal                              | dbo:depth                                | 0-1         |                        |
| Finding                                                             | ex:EncounterEvent                        | crm:E24_Physical_Man-Made_Thing          | crmsci:O19_encountered_object            | 0-M         |                        |
| Item found In a StratigraphicVolumeUnit                             | ex:EncounterEvent                        | StratigraphicVolumeUnit                  | excav:foundInSVU                         | 0-1         |                        |
| Item found In a Context                                             | ex:EncounterEvent                        | crmarchaeo:A1_Excavation_Processing_Unit | excav:foundInAContext                    | 0-1         |                        |
| Item found In a Excavation                                          | ex:EncounterEvent                        | excav:Excavation                            | excav:foundInAExcavation                 | 0-1         |                        |
| __Item__                                                            |                                          |                                          | ex:item owl:equivalentClass crm:E24_Physical_Man-Made_Thing          |             |                        |                       
| InventoryID                                                         | ex:item          | xsd:xsd:Literal                          | dcterms:identifier                       | 1-1         |                        |
| Images or 3d Models of the arrowead                                 | ex:item          | xsd:anyURI                               | edm:Webresource                          | 0-M         |                        |

| __ArrowHead__                                                           |                                          |                                          | ex:ArrowHead owl:equivalentClass crm:E24_Physical_Man-Made_Thing; rdfs:Subclass ex:Item          |             |                        |
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


