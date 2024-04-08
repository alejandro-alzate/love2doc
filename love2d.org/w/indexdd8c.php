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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/TLTools">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-08T04:23:14+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/TLTools">
		<rdfs:label>TLTools</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/TLTools"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/TLTools"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Author rdf:resource="&wiki;User-3ATaehl"/>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">High-quality libraries for a range of purposes</property:Description>
		<property:LOVE_Version rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Any</property:LOVE_Version>
		<property:License rdf:resource="&wiki;License"/>
		<property:Has_query rdf:resource="&wiki;TLTools-23_QUERY88598d77f06df63a6f6883699e19984c"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2013-08-02T01:43:31Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2456506.5718866</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">TLTools</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/TLTools-23_QUERY88598d77f06df63a6f6883699e19984c">
		<swivt:masterPage rdf:resource="&wiki;TLTools"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">table</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">3</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Libraries]] [[Author::User:Taehl]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">TLTools# QUERY88598d77f06df63a6f6883699e19984c</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/TSerial">
		<rdfs:label>TSerial</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/TSerial"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/TSerial"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:redirectsTo rdf:resource="&wiki;TLTools"/>
		<owl:sameAs rdf:resource="&wiki;TLTools"/>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">TSerial</swivt:wikiPageSortKey>
	</swivt:Subject>
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#creationDate" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageContentLanguage" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AAuthor" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ADescription" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ALOVE_Version" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ALicense" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AHas_query" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#masterPage" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_depth" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_format" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_size" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AQuery_string" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#redirectsTo" />
	<!-- Created by Semantic MediaWiki, https://www.semantic-mediawiki.org/ -->
</rdf:RDF>