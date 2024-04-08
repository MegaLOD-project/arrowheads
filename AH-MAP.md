# Arrowhead Project - MAP

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

# MAP Description
| Term                            | Domain                  | Range                   | Vocabulary Term                    | Cardinality | SES             | VES                    |
| ------------------------------- | ----------------------- | ----------------------- | ---------------------------------- | ----------- | --------------- | ---------------------- |
| Excavation                      |                         |                         | crmarchaeo:A9                      |             |                 |                        |
| acronym                         | Excavation              | literal                 | dcterms:identifier                 | 1-1         |                 |                        |
| hasLocation                     | Excavation              | Location                | dul:hasLocation                    | 0-1         |                 |                        |
| Location                        |                         |                         | dbo:Place                          |             |                 |                        |
| district                        | Location                |                         |                                    | 0-1         |                 |                        |
| parish                          | Location                |                         |                                    | 0-1         |                 |                        |
| name                            | Location                |                         |                                    | 0-1         |                 |                        |
| hasGPSCoordinates               | Excavation              | GPSCoordinates          | ah:hasGPSCoordinates               | 0-1         |                 |                        |
| GPSCoordinates                  |                         |                         | geo:SpatialThing                   |             |                 |                        |
| latitude                        | GPSCoordinates          | double                  | geo:lat                            | 0-1         |                 |                        |
| lomgitude                       | GPSCoordinates          | double                  | geo:long                           | 0-1         |                 |                        |
| hasResponsible                  | Excavation              | Archaeologist           | ah:hasResponsible                  | 0-1         |                 |                        |
| Archaeologist                   |                         |                         | foaf:Person                        |             |                 |                        |
| orcid                           | Archaeologist           | anyURI                  | foaf:account                       | 1-1         |                 |                        |
| name                            | Archaeologist           | Literal                 | foaf:name                          | 0-1         |                 |                        |
| email                           | Archaeologist           | anyURI                  | foaf:mbox                          | 0-M         | mailto:         |                        |
| hasContext                      | Excavation              | Context                 | ah:hasContext                      | 1-M         |                 |                        |
| Context                         |                         |                         | crmarchaeo:A1                      |             |                 |                        |
|                                 | Context                 | Literal                 | dcterms:identifier                 | 1-1         |                 |                        |
| hasStratigraphicVolumeUnit      | Excavation              | StratigraphicVolumeUnit | ah:hasStratigraphicUnit            | 1-M         |                 |                        |
| StratigraphicVolumeUnit         |                         |                         | crmarchaeo:A2                      |             |                 |                        |
| id                              | StratigraphicVolumeUnit | Literal                 | dcterms:identifier                 | 1-1         |                 |                        |
| description                     | StratigraphicVolumeUnit | Literal                 | dcterms:description                | 0-1         |                 |                        |
| hasTimeLine                     | StratigraphicVolumeUnit | Timeline                | ah:hasTimeLine                     | 0-1         |                 |                        |
| Timeline                        |                         |                         | time:TemporalEntity                | 0-1         |                 |                        |
| hasLowerBound                   | Timeline                | Instant                 | time:hasBeginning                  | 0-M         |                 |                        |
| hasUpperBound                   | Timeline                | Instant                 | time:hasEnd                        | 0-M         |                 |                        |
| Instant                         |                         |                         | time:Instant                       |             |                 |                        |
| Year-BC-value                   | Instant                 | LIteral                 | time:inXSDYear                     | 0-1         | Integer         |                        |
| EncounterEvent                  |                         |                         | crmsci:S19                         |             |                 |                        |
| date                            | EncounterEvent          | Literal                 | dcterms:date                       | 0-1         | date            |                        |
| depth                           | EncounterEvent          | LIteral                 | dbo:Depth?                         | 0-1         | double          |                        |
| hasFinding                      | EncounterEvent          | ArrowHead               | crmsci:O19                         | 0-M         |                 |                        |
| foundInAStratigraphicVolumeUnit | EncounterEvent          | StratigraphicVolumeUnit | ah:foundInAStratigraphicVolumeUnit | 0-1         |                 |                        |
| foundInAContext                 | EncounterEvent          | Context                 | ah:foundInAContext                 | 0-1         |                 |                        |
| ArrowHead                       |                         |                         | crm:E71                            |             |                 |                        |
|                                 | ArrowHead               | Literal                 | dcterms:identifier                 | 1-1         |                 |                        |
| media                           | ArrowHead               | anyURI                  | edm:Webresource                    | 0-M         |                 |                        |
| shape                           | ArrowHead               | anyURI                  | ah:shape                           | 0-1         |                 | AH-Shape               |
| material                        | ArrowHead               | Literal                 | crm:57                             | 0-1         | Getty Vocab AAT |                        |
| observation                     | ArrowHead               | Literal                 | dbo:Annotation                     | 0-1         |                 |                        |
| conditionState                  | ArrowHead               |                         | crm:E3                             | 0-1         |                 |                        |
| type                            | ArrowHead               | anyURI                  | crm:E55                            | 0-1         |                 | AH-Type                |
| variant                         | ArrowHead               | anyURI                  | ah:variant                         | 0-1         |                 | AH-Variant             |
| arrowheadFindInGPSCoordinates   | ArrowHead               | GPSCoordinates          | ah:arrowheadFindInGPSCoordinates   | 0-1         |                 |                        |
| hasMorphology                   | ArrowHead               | Morphology              | ah:hasMorphology                   | 0-1         |                 |                        |
| Morphology                      |                         |                         | ah:Morphology                      |             |                 |                        |
| Point                           | Morphology              | anyURI                  | ah:point                           | 0-1         |                 | AH-Point               |
| Body                            | Morphology              | Literal                 | ah:body                            | 0-1         |                 |                        |
| hasBaseShapeDetails             | Morphology              | Base-ShapeDetails       | ah:hasBaseShapeDetails             | 0-1         |                 |                        |
| Base-ShapeDetails               |                         |                         | ah:BaseShapeDetails                |             |                 |                        |
|                                 | Base-ShapeDetails       | anyURI                  | ah:ShapeName                       | 0-1         |                 | AH-ShapeName           |
|                                 | Base-ShapeDetails       | LIteral                 | ah:subType                         | 0-1         | boolean         |                        |
| hasTypometry                    | Arrowhead               | Typometry               | ah:hasTypometry                    | 0-1         |                 |                        |
|                                 |                         |                         | ah:Typometry                       | 0-1         |                 |                        |
| Lenght                          | Typometry               | LIteral                 | ah:length                          | 0-1         | double          |                        |
| Width                           | Typometry               | LIteral                 | ah:Width                           | 0-1         | double          |                        |
| Thickness                       | Typometry               | LIteral                 | ah:thickness                       | 0-1         | double          |                        |
| BodyLenght                      | Typometry               | LIteral                 | ah:bodyLength                      | 0-1         | double          |                        |
| BaseLenght                      | Typometry               | LIteral                 | ah:baseLength                      | 0-1         | double          |                        |
| hasChipping                     | Arrowhead               | Chipping                | ah:hasChipping                     | 0-1         |                 |                        |
|                                 |                         |                         | ah:Chipping                        | 0-1         |                 |                        |
| Mode                            | Chipping                | anyURI                  | ah:mode                            | 0-1         |                 | AH-ChippingMode        |
| Amplitude                       | Chipping                | anyURI                  | ah:amplitude                       | 0-1         |                 | AH-ChippingAmplitude   |
| Direction                       | Chipping                | anyURI                  | ah:direction                       | 0-1         |                 | AH-ChippingDirection   |
| Orientation                     | Chipping                | anyURI                  | ah:orientation                     | 0-1         |                 | AH-ChippingOrientation |
| Delineation                     | Chipping                | anyURI                  | ah:dileneation                     | 0-1         |                 | AH-ChippingDelineation |
| Location                        | Chipping                | anyURI                  | ah:chippinglocation                | 0-1         |                 | AH-ChippingLocation    |
| Shape                           | Chipping                | anyURI                  | ah:chippingshape                   | 0-1         |                 | AH-ChippingShape       |
