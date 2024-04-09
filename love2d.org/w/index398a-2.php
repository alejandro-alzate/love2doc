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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/Thread-3Apeek">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-09T03:02:09+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/Thread-3Apeek">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3AFunctions"/>
		<rdfs:label>Thread:peek</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/Thread-3Apeek"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/Thread-3Apeek"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Receive a message from a thread, but leave it in the message box.</property:Description>
		<property:PrettyRemoved rdf:resource="&wiki;0.9.0"/>
		<property:PrettySince rdf:resource="&wiki;0.7.0"/>
		<property:Removed rdf:datatype="http://www.w3.org/2001/XMLSchema#double">90</property:Removed>
		<property:Since rdf:resource="&wiki;070"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-12-27T22:32:12Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457384.4390278</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Thread:peek</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Thread"/>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://love2d.org/wiki/Special:URIResolver/Category-3AFunctions" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageContentLanguage" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ADescription" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3APrettyRemoved" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3APrettySince" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ARemoved" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ASince" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3Aparent" />
	<!-- Created by Semantic MediaWiki, https://www.semantic-mediawiki.org/ -->
</rdf:RDF>