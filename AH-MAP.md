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


# Metadata Application Profile

| Label                                                       | Domain                  | Range                   | Vocabulary Term        | Cardinality | VES                    |
| ----------------------------------------------------------- | ----------------------- | ----------------------- | ---------------------- | ----------- | ---------------------- |
| Excavation                                                  |                         |                         | crmarchaeo:A9          |             |                        |
| Acronym                                                     | Excavation              | literal                 | dcterms:identifier     | 1-1         |                        |
| Has a location                                              | Excavation              | Location                | dul:hasLocation        | 0-1         |                        |
| Location                                                    |                         |                         | dbo:Place              |             |                        |
| has a District                                              | Location                | District                |                        |             |                        |
| has a Parish                                                | Location                | Parish                  |                        |             |                        |
| Name of the Location                                        | Location                | Literal                 | dbo:informationName    | 0-1         |                        |
| District                                                    |                         |                         | dbo:District           |             |                        |
| Parish                                                      |                         |                         | dbo:Parish             |             |                        |
| Location GPS Coordinates                                    | Location                | GPSCoordinates          | ah:hasGPSCoordinates   | 0-1         |                        |
| GPSCoordinates                                              |                         |                         | geo:SpatialThing       |             |                        |
| Latitude                                                    | GPSCoordinates          | double                  | geo:lat                | 0-1         |                        |
| Longitude                                                   | GPSCoordinates          | double                  | geo:long               | 0-1         |                        |
| has a person in charge                                      | Excavation              | Archaeologist           | ah:hasResponsible      | 0-1         |                        |
| Archaeologist                                               |                         |                         | foaf:Person            |             |                        |
| ORCID                                                       | Archaeologist           | anyURI                  | foaf:account           | 1-1         |                        |
| Name                                                        | Archaeologist           | Literal                 | foaf:name              | 0-1         |                        |
| Email                                                       | Archaeologist           | anyURI                  | foaf:mbox              | 0-M         |                        |
| has context                                                 | Excavation              | Context                 | ah:hasContext          | 1-M         |                        |
| Context                                                     |                         |                         | crmarchaeo:A1          |             |                        |
| ID                                                          | Context                 | Literal                 | dcterms:identifier     | 1-1         |                        |
| has Stratigraphic Unit                                      | Context                 | StratigraphicVolumeUnit | ah:hasSVU              | 1-M         |                        |
| StratigraphicVolumeUnit                                     |                         |                         | crmarchaeo:A2          |             |                        |
| ID                                                          | StratigraphicVolumeUnit | Literal                 | dcterms:identifier     | 1-1         |                        |
| Description                                                 | StratigraphicVolumeUnit | Literal                 | dcterms:description    | 0-1         |                        |
| hasTimeLine                                                 | StratigraphicVolumeUnit | Timeline                | ah:hasTimeLine         | 0-1         |                        |
| Timeline                                                    |                         |                         | time:TemporalEntity    | 0-1         |                        |
| The TinmeLine has a Lower Bound (Year)                      | Timeline                | Instant                 | time:hasBeginning      | 0-M         |                        |
| the TimeLine Upper Bound (Year)                             | Timeline                | Instant                 | time:hasEnd            | 0-M         |                        |
| An instant (year BC) in time                                |                         |                         | time:Instant           |             |                        |
| The year before christ that defines a bound in the TimeLIne | Instant                 | LIteral                 | time:inXSDYear         | 0-1         |                        |
| The encounter event                                         |                         |                         | crmsci:S19             |             |                        |
| Date                                                        | EncounterEvent          | Literal                 | dcterms:date           | 0-1         |                        |
| Depth                                                       | EncounterEvent          | double                  | dbo:depth              | 0-1         |                        |
| Finding                                                     | EncounterEvent          | ArrowHead               | crmsci:O19             | 0-M         |                        |
| Arrowhead found In a StratigraphicVolumeUnit                | EncounterEvent          | StratigraphicVolumeUnit | ah:foundInSVU          | 0-1         |                        |
| Arrowhead found In a Context                                | EncounterEvent          | Context                 | ah:foundInAContext     | 0-1         |                        |
| ArrowHead                                                   |                         |                         | crm:E24                |             |                        |
| InventoryID                                                 | ArrowHead               | Literal                 | dcterms:identifier     | 1-1         |                        |
| Images or 3d Models of the arrowead                         | ArrowHead               | anyURI                  | edm:Webresource        | 0-M         |                        |
| Shape of the arrowhead                                      | ArrowHead               | anyURI                  | ah:shape               | 0-1         | AH-Shape               |
| Arrowhead made with Material                                | ArrowHead               | anyURI                  | crm:57                 | 0-1         | Getty Vocab AAT        |
| Observation details of the arrowhead                        | ArrowHead               | Literal                 | dbo:Annotation         | 0-1         |                        |
| The Condition State of the arrowhead                        | ArrowHead               |                         | crm:E3                 | 0-1         |                        |
| Type of the arrowhead                                       | ArrowHead               | anyURI                  | crm:E55                | 0-1         | AH-Type                |
| Variant of the arrowhead                                    | ArrowHead               | anyURI                  | ah:variant             | 0-1         | AH-Variant             |
| Was found in the GPSCoordinates                             | ArrowHead               | GPSCoordinates          | ah:foundInCoordinates  | 0-1         |                        |
| has a Morphology                                            | ArrowHead               | Morphology              | ah:hasMorphology       | 0-1         |                        |
| Morphology                                                  |                         |                         | ah:Morphology          |             |                        |
| Point                                                       | Morphology              | anyURI                  | ah:point               | 0-1         | AH-Point               |
| Body                                                        | Morphology              | Literal                 | ah:body                | 0-1         |                        |
| The base  of the arrow has shape details                    | Morphology              | Base-ShapeDetails       | ah:hasBaseShapeDetails | 0-1         |                        |
| Base-ShapeDetails                                           |                         |                         | ah:BaseShapeDetails    |             |                        |
| ShapeName                                                   | Base-ShapeDetails       | anyURI                  | ah:ShapeName           | 0-1         | AH-ShapeName           |
| SubType                                                     | Base-ShapeDetails       | boolean                 | ah:subType             | 0-1         |                        |
| The arrowhead has a typometry                               | Arrowhead               | Typometry               | ah:hasTypometry        | 0-1         |                        |
| Typometry                                                   |                         |                         | ah:Typometry           | 0-1         |                        |
| Lenght of the arrowhead (in mm)                             | Typometry               | double                  | ah:length              | 0-1         |                        |
| Width  of the arrowhead (in mm)                             | Typometry               | double                  | ah:Width               | 0-1         |                        |
| Thickness  of the arrowhead (in mm)                         | Typometry               | double                  | ah:thickness           | 0-1         |                        |
| BodyLenght  of the arrowhead (in mm)                        | Typometry               | double                  | ah:bodyLength          | 0-1         |                        |
| BaseLenght  of the arrowhead (in mm)                        | Typometry               | double                  | ah:baseLength          | 0-1         |                        |
| hasChipping                                                 | Arrowhead               | Chipping                | ah:hasChipping         | 0-1         |                        |
| Chipping                                                    |                         |                         | ah:Chipping            | 0-1         |                        |
| The chipping of the arrowhead has a mode                    | Chipping                | anyURI                  | ah:mode                | 0-1         | AH-ChippingMode        |
| The chipping of the arrowhead has na amplitude              | Chipping                | anyURI                  | ah:amplitude           | 0-1         | AH-ChippingAmplitude   |
| The chipping of the arrowhead has a direction               | Chipping                | anyURI                  | ah:direction           | 0-1         | AH-ChippingDirection   |
| The chipping of the arrowhead has na orientation            | Chipping                | anyURI                  | ah:orientation         | 0-1         | AH-ChippingOrientation |
| The chipping of the arrowhead has a delineation             | Chipping                | anyURI                  | ah:dileneation         | 0-1         | AH-ChippingDelineation |
| The chipping of the arrowhead has a location                | Chipping                | anyURI                  | ah:chippinglocation    | 0-1         | AH-ChippingLocation    |
| The chipping of the arrowhead has a shape                   | Chipping                | anyURI                  | ah:chippingShape       | 0-1         | AH-ChippingShape       |
