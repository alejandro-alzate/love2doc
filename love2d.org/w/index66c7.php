<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE rdf:RDF[
	<!ENTITY rdf 'http://www.w3.org/1999/02/22-rdf-syntax-ns#'>
	<!ENTITY rdfs 'http://www.w3.org/2000/01/rdf-schema#'>
	<!ENTITY owl 'http://www.w3.org/2002/07/owl#'>
	<!ENTITY swivt 'http://semantic-mediawiki.org/swivt/1.0#'>
	<!ENTITY wiki 'http://love2d.org/wiki/Special:URIResolver/'>
	<!ENTITY category 'http://love2d.org/wiki/Special:URIResolver/Category-3A'>
	<!ENTITY property 'http://love2d.org/wiki/Special:URIResolver/Property-3A'>
	<!ENTITY wikiurl 'http://love2d.org/wiki/'>
]>

<rdf:RDF
	xmlns:rdf="&rdf;"
	xmlns:rdfs="&rdfs;"
	xmlns:owl ="&owl;"
	xmlns:swivt="&swivt;"
	xmlns:wiki="&wiki;"
	xmlns:category="&category;"
	xmlns:property="&property;">

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/Font">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-11T02:24:15+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3ATypes"/>
		<rdfs:label>Font</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Defines the shape of characters than can be drawn onto the screen.</property:Description>
		<property:Since rdf:resource="&wiki;000"/>
		<property:Has_query rdf:resource="&wiki;Font-23_QUERYc9ccf4500d7ea1bf63333128c59e6f98"/>
		<property:Has_query rdf:resource="&wiki;Font-23_QUERY3990c7bd8df1f1e727a249c102659e85"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2022-03-21T11:47:34Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2459659.9913657</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;love.graphics"/>
		<property:parent rdf:resource="&wiki;Object"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-23_QUERYc9ccf4500d7ea1bf63333128c59e6f98">
		<swivt:masterPage rdf:resource="&wiki;Font"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">template</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">4</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[Constructs::Font]] [[Concept:Current]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font# QUERYc9ccf4500d7ea1bf63333128c59e6f98</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-23_QUERY3990c7bd8df1f1e727a249c102659e85">
		<swivt:masterPage rdf:resource="&wiki;Font"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">template</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[parent::Font||Object]] [[Concept:Current]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font# QUERY3990c7bd8df1f1e727a249c102659e85</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetAscent">
		<rdfs:label>Font:getAscent</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetAscent"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetAscent"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getAscent</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetBaseline">
		<rdfs:label>Font:getBaseline</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetBaseline"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetBaseline"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getBaseline</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetDPIScale">
		<rdfs:label>Font:getDPIScale</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetDPIScale"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetDPIScale"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getDPIScale</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetDescent">
		<rdfs:label>Font:getDescent</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetDescent"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetDescent"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getDescent</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetFilter">
		<rdfs:label>Font:getFilter</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetFilter"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetFilter"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getFilter</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetHeight">
		<rdfs:label>Font:getHeight</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetHeight"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetHeight"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getHeight</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetKerning">
		<rdfs:label>Font:getKerning</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetKerning"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetKerning"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getKerning</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetLineHeight">
		<rdfs:label>Font:getLineHeight</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetLineHeight"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetLineHeight"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getLineHeight</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetWidth">
		<rdfs:label>Font:getWidth</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetWidth"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetWidth"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getWidth</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AgetWrap">
		<rdfs:label>Font:getWrap</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AgetWrap"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AgetWrap"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:getWrap</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AhasGlyphs">
		<rdfs:label>Font:hasGlyphs</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AhasGlyphs"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AhasGlyphs"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:hasGlyphs</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AsetFallbacks">
		<rdfs:label>Font:setFallbacks</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AsetFallbacks"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AsetFallbacks"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:setFallbacks</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AsetFilter">
		<rdfs:label>Font:setFilter</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AsetFilter"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AsetFilter"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:setFilter</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Font-3AsetLineHeight">
		<rdfs:label>Font:setLineHeight</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Font-3AsetLineHeight"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Font-3AsetLineHeight"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Font:setLineHeight</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/love.font">
		<rdfs:label>love.font</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/love.font"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/love.font"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">love.font</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Font"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/love.graphics.newFont">
		<rdfs:label>love.graphics.newFont</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/love.graphics.newFont"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/love.graphics.newFont"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Constructs rdf:resource="&wiki;Font"/>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">love.graphics.newFont</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/love.graphics.newImageFont">
		<rdfs:label>love.graphics.newImageFont</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/love.graphics.newImageFont"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/love.graphics.newImageFont"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Constructs rdf:resource="&wiki;Font"/>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">love.graphics.newImageFont</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3Aparent">
		<rdfs:label>parent</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Property-3Aparent"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Property-3Aparent"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">102</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">parent</swivt:wikiPageSortKey>
	</owl:ObjectProperty>
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AConstructs">
		<rdfs:label>Constructs</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Property-3AConstructs"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Property-3AConstructs"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">102</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Constructs</swivt:wikiPageSortKey>
	</owl:ObjectProperty>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://love2d.org/wiki/Special:URIResolver/Category-3ATypes" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageContentLanguage" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ADescription" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ASince" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AHas_query" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#masterPage" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_depth" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_format" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_size" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_string" />
	<!-- Created by Semantic MediaWiki, https://www.semantic-mediawiki.org/ -->
</rdf:RDF>