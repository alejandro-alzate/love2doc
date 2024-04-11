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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/Framebuffer">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-11T02:28:49+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3ATypes"/>
		<rdfs:label>Framebuffer</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Framebuffer"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Framebuffer"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Off-screen render target.</property:Description>
		<property:PrettyRemoved rdf:resource="&wiki;0.8.0"/>
		<property:PrettySince rdf:resource="&wiki;0.7.0"/>
		<property:Removed rdf:datatype="http://www.w3.org/2001/XMLSchema#double">80</property:Removed>
		<property:Since rdf:resource="&wiki;070"/>
		<property:Has_query rdf:resource="&wiki;Framebuffer-23_QUERYbaadb60509c9f103d68d8947de92d71f"/>
		<property:Has_query rdf:resource="&wiki;Framebuffer-23_QUERY1bd503babc9b23160f0190a5331ba16e"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-12-27T16:06:26Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457384.1711343</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;love.graphics"/>
		<property:parent rdf:resource="&wiki;Object"/>
		<property:parent rdf:resource="&wiki;Drawable"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer-23_QUERYbaadb60509c9f103d68d8947de92d71f">
		<swivt:masterPage rdf:resource="&wiki;Framebuffer"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">template</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">3</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[Constructs::Framebuffer]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer# QUERYbaadb60509c9f103d68d8947de92d71f</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer-23_QUERY1bd503babc9b23160f0190a5331ba16e">
		<swivt:masterPage rdf:resource="&wiki;Framebuffer"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">template</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[parent::Framebuffer||Drawable||Object]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer# QUERY1bd503babc9b23160f0190a5331ba16e</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer-3AgetImageData">
		<rdfs:label>Framebuffer:getImageData</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Framebuffer-3AgetImageData"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Framebuffer-3AgetImageData"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer:getImageData</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Framebuffer"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer-3AgetWrap">
		<rdfs:label>Framebuffer:getWrap</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Framebuffer-3AgetWrap"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Framebuffer-3AgetWrap"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer:getWrap</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Framebuffer"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer-3ArenderTo">
		<rdfs:label>Framebuffer:renderTo</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Framebuffer-3ArenderTo"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Framebuffer-3ArenderTo"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer:renderTo</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Framebuffer"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Framebuffer-3AsetWrap">
		<rdfs:label>Framebuffer:setWrap</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Framebuffer-3AsetWrap"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Framebuffer-3AsetWrap"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Framebuffer:setWrap</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Framebuffer"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/love.graphics.newFramebuffer">
		<rdfs:label>love.graphics.newFramebuffer</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/love.graphics.newFramebuffer"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/love.graphics.newFramebuffer"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Constructs rdf:resource="&wiki;Framebuffer"/>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">love.graphics.newFramebuffer</swivt:wikiPageSortKey>
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
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3APrettyRemoved" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3APrettySince" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ARemoved" />
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