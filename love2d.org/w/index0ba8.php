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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/lua-2Denet">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-08T07:54:21+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/lua-2Denet">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3ALibraries"/>
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3AThirdParty"/>
		<rdfs:label>lua-enet</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/lua-2Denet"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/lua-2Denet"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Multiplayer networking module for games.</property:Description>
		<property:Keyword rdf:resource="&wiki;Networking"/>
		<property:LOVE_Version rdf:datatype="http://www.w3.org/2001/XMLSchema#string">0.9.0</property:LOVE_Version>
		<property:PrettySince rdf:resource="&wiki;0.9.0"/>
		<property:Since rdf:resource="&wiki;090"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2023-07-05T03:03:42Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2460130.6275694</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">lua-enet</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;love"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.event">
		<rdfs:label>enet.event</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.event"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.event"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.event</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host">
		<rdfs:label>enet.host</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host_create">
		<rdfs:label>enet.host create</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host_create"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host_create"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host create</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Abandwidth_limit">
		<rdfs:label>enet.host:bandwidth limit</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Abandwidth_limit"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Abandwidth_limit"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:bandwidth limit</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Abroadcast">
		<rdfs:label>enet.host:broadcast</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Abroadcast"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Abroadcast"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:broadcast</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Achannel_limit">
		<rdfs:label>enet.host:channel limit</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Achannel_limit"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Achannel_limit"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:channel limit</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Acheck_events">
		<rdfs:label>enet.host:check events</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Acheck_events"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Acheck_events"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:check events</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Acompress_with_range_coder">
		<rdfs:label>enet.host:compress with range coder</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Acompress_with_range_coder"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Acompress_with_range_coder"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:compress with range coder</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Aconnect">
		<rdfs:label>enet.host:connect</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Aconnect"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Aconnect"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:connect</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Adestroy">
		<rdfs:label>enet.host:destroy</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Adestroy"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Adestroy"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:destroy</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Aflush">
		<rdfs:label>enet.host:flush</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Aflush"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Aflush"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:flush</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Aget_peer">
		<rdfs:label>enet.host:get peer</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Aget_peer"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Aget_peer"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:get peer</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Aget_socket_address">
		<rdfs:label>enet.host:get socket address</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Aget_socket_address"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Aget_socket_address"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:get socket address</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Apeer_count">
		<rdfs:label>enet.host:peer count</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Apeer_count"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Apeer_count"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:peer count</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Aservice">
		<rdfs:label>enet.host:service</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Aservice"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Aservice"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:service</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Aservice_time">
		<rdfs:label>enet.host:service time</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Aservice_time"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Aservice_time"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:service time</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Atotal_received_data">
		<rdfs:label>enet.host:total received data</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Atotal_received_data"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Atotal_received_data"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:total received data</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.host-3Atotal_sent_data">
		<rdfs:label>enet.host:total sent data</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.host-3Atotal_sent_data"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.host-3Atotal_sent_data"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.host:total sent data</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.linked_version">
		<rdfs:label>enet.linked version</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.linked_version"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.linked_version"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.linked version</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer">
		<rdfs:label>enet.peer</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Aconnect_id">
		<rdfs:label>enet.peer:connect id</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Aconnect_id"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Aconnect_id"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:connect id</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Adisconnect">
		<rdfs:label>enet.peer:disconnect</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Adisconnect"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Adisconnect"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:disconnect</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Adisconnect_later">
		<rdfs:label>enet.peer:disconnect later</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Adisconnect_later"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Adisconnect_later"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:disconnect later</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Adisconnect_now">
		<rdfs:label>enet.peer:disconnect now</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Adisconnect_now"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Adisconnect_now"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:disconnect now</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Aindex">
		<rdfs:label>enet.peer:index</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Aindex"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Aindex"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:index</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Alast_round_trip_time">
		<rdfs:label>enet.peer:last round trip time</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Alast_round_trip_time"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Alast_round_trip_time"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:last round trip time</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Aping">
		<rdfs:label>enet.peer:ping</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Aping"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Aping"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:ping</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Aping_interval">
		<rdfs:label>enet.peer:ping interval</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Aping_interval"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Aping_interval"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:ping interval</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Areceive">
		<rdfs:label>enet.peer:receive</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Areceive"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Areceive"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:receive</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Areset">
		<rdfs:label>enet.peer:reset</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Areset"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Areset"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:reset</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Around_trip_time">
		<rdfs:label>enet.peer:round trip time</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Around_trip_time"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Around_trip_time"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:round trip time</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Asend">
		<rdfs:label>enet.peer:send</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Asend"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Asend"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:send</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Astate">
		<rdfs:label>enet.peer:state</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Astate"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Astate"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:state</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Athrottle_configure">
		<rdfs:label>enet.peer:throttle configure</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Athrottle_configure"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Athrottle_configure"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:throttle configure</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet.peer-3Atimeout">
		<rdfs:label>enet.peer:timeout</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet.peer-3Atimeout"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet.peer-3Atimeout"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet.peer:timeout</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;lua-2Denet"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/enet">
		<rdfs:label>enet</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/enet"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/enet"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:redirectsTo rdf:resource="&wiki;lua-2Denet"/>
		<owl:sameAs rdf:resource="&wiki;lua-2Denet"/>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">enet</swivt:wikiPageSortKey>
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
	<owl:Class rdf:about="http://love2d.org/wiki/Special:URIResolver/Category-3ALibraries" />
	<owl:Class rdf:about="http://love2d.org/wiki/Special:URIResolver/Category-3AThirdParty" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#page" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiNamespace" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageContentLanguage" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ADescription" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AKeyword" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ALOVE_Version" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3APrettySince" />
	<owl:ObjectProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3ASince" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageModificationDate" />
	<owl:DatatypeProperty rdf:about="http://love2d.org/wiki/Special:URIResolver/Property-3AModification_date-23aux" />
	<owl:DatatypeProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#wikiPageSortKey" />
	<owl:ObjectProperty rdf:about="http://semantic-mediawiki.org/swivt/1.0#redirectsTo" />
	<!-- Created by Semantic MediaWiki, https://www.semantic-mediawiki.org/ -->
</rdf:RDF>