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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/TEsound">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-07T00:20:29+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/TEsound">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3ALibraries"/>
		<rdfs:label>TEsound</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/TEsound"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/TEsound"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Author rdf:resource="&wiki;User-3ATaehl"/>
		<property:Author rdf:resource="&wiki;User-3AEnsayia"/>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">A sound manager that makes it easy to use sound and music</property:Description>
		<property:Keyword rdf:resource="&wiki;Sound"/>
		<property:LOVE_Version rdf:datatype="http://www.w3.org/2001/XMLSchema#string">0.7.0</property:LOVE_Version>
		<property:License rdf:resource="&wiki;License"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2019-12-15T06:14:10Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2458832.759838</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">TEsound</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:Class rdf:about="http://love2d.org/wiki/Special:URIResolver/Category-3ALibraries" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageContentLanguage" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AAuthor" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ADescription" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AKeyword" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ALOVE_Version" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ALicense" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<!-- Created by Semantic MediaWiki, https://www.semantic-mediawiki.org/ -->
</rdf:RDF>