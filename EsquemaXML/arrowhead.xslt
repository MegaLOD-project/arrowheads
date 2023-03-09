<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Arrowheads</h2>
  
    <xsl:for-each select="A9-ArchaeologicalExcavation/E53-Place/A2-StratigraphicVolumeUnit/S19-EncounterEvent/E24-PhysicalManThing[Variant = 'Espessa']">

    <p><xsl:value-of select="@Inventory_number"/></p>

    </xsl:for-each>

</body>
</html>
</xsl:template>
</xsl:stylesheet>