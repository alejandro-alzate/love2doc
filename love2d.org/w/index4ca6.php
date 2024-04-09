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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/ClientObject">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-09T06:58:51+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3ATypes"/>
		<rdfs:label>ClientObject</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">A client object.</property:Description>
		<property:Has_query rdf:resource="&wiki;ClientObject-23_QUERY827ad5eddba2e088300654b9d5c38235"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2010-11-19T20:06:05Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2455520.3375579</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;LUBE"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-23_QUERY827ad5eddba2e088300654b9d5c38235">
		<swivt:masterPage rdf:resource="&wiki;ClientObject"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">table</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">3</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[parent::ClientObject]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject# QUERY827ad5eddba2e088300654b9d5c38235</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AInit">
		<rdfs:label>ClientObject:Init</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AInit"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AInit"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:Init</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3Aconnect">
		<rdfs:label>ClientObject:connect</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3Aconnect"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3Aconnect"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:connect</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AdisableBroadcast">
		<rdfs:label>ClientObject:disableBroadcast</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AdisableBroadcast"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AdisableBroadcast"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:disableBroadcast</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3Adisconnect">
		<rdfs:label>ClientObject:disconnect</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3Adisconnect"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3Adisconnect"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:disconnect</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AdoPing">
		<rdfs:label>ClientObject:doPing</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AdoPing"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AdoPing"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:doPing</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AenableBroadcast">
		<rdfs:label>ClientObject:enableBroadcast</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AenableBroadcast"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AenableBroadcast"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:enableBroadcast</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3Areceive">
		<rdfs:label>ClientObject:receive</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3Areceive"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3Areceive"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:receive</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3Asend">
		<rdfs:label>ClientObject:send</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3Asend"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3Asend"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:send</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AsetCallback">
		<rdfs:label>ClientObject:setCallback</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AsetCallback"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AsetCallback"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:setCallback</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AsetHandshake">
		<rdfs:label>ClientObject:setHandshake</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AsetHandshake"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AsetHandshake"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:setHandshake</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3AsetPing">
		<rdfs:label>ClientObject:setPing</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3AsetPing"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3AsetPing"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:setPing</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/ClientObject-3Aupdate">
		<rdfs:label>ClientObject:update</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/ClientObject-3Aupdate"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/ClientObject-3Aupdate"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">ClientObject:update</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;ClientObject"/>
	</swivt:Subject>
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3Aparent">
		<rdfs:label>parent</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Property-3Aparent"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Property-3Aparent"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">102</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">parent</swivt:wikiPageSortKey>
	</owl:ObjectProperty>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://love2d.org/wiki/Special:URIResolver/Category-3ATypes" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageContentLanguage" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ADescription" />
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