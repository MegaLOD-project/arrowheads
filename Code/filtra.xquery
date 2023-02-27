xquery version "3.0";
declare option exist:serialize "method=xhtml media-type=text/html indent=yes";


<html>

   {
         let $rut := '/db/Bieses'         
         let $ruta :=fn:concat($rut,'/documentos?select=*.xml;recurse=yes')
         let $fi:= request:get-parameter("filtro", ".//state/@subtype='carmelita'")
        let $f:=fn:replace($fi,',',' and ')
        let $cond:= $f
        let $scope := collection($ruta)
        let $search-string := concat('$scope', '[', $cond, ']')
        let $hits := util:eval($search-string)
for  $term at $n in $hits
            let $titulo:=$term//titleStmt/title[@type='short']/text()
            let $codtit:= data($term//titleStmt/title[@type='main']/@xml:id)
            let $autora:=$term//titleStmt/author[@key]
            let $item:=$term/TEI/teiHeader/fileDesc/titleStmt/author/@id
            let $tit:=$term/TEI/teiHeader/fileDesc/titleStmt/title/@id

            let $anio:=fn:substring($term//sourceDesc/biblFull/publicationStmt/date/text(),1,4)
            let $f:=$term/TEI//text/front/figure[1]
            let $figura:=$f/figDesc/ptr/@target
            let $imagen:=fn:concat('http://linhd.es:8888/exist/rest/db/Bieses/imagenes/',$figura)
            return 
                
                <div class="row fila-obras-filtra">
                    <div class="col-md-1 celda-obras celda-obras-imagen"><a href="http://www.bieses.net/ver_titulo_autora.php?item={$item}&amp;anio={$tit}" target="new"><img src="{$imagen}" align="left"   height="75"/></a></div>
                    <div class="col-md-5 celda-obras celda-obras-texto"><a target="_blank" href="http://www.bieses.net/ver_titulo_autora.php?item={$item}&amp;anio={$tit}" > {$titulo}</a></div>
                    <div class="col-md-3 celda-obras celda-obras-texto"> {$autora}  <br /></div>
                    <div class="col-md-2 celda-obras celda-obras-texto"> {$anio}</div>
                    <div class="md-1" ></div>
                </div>
                    
   }                     

   

    
</html>