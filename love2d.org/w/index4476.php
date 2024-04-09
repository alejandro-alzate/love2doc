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

	<owl:Ontology rdf:about="http://love2d.org/wiki/Special:ExportRDF/WheelJoint">
		<swivt:creationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2024-04-09T02:50:14+00:00</swivt:creationDate>
		<owl:imports rdf:resource="http://semantic-mediawiki.org/swivt/1.0"/>
	</owl:Ontology>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint">
		<rdf:type rdf:resource="http://love2d.org/wiki/Special:URIResolver/Category-3ATypes"/>
		<rdfs:label>WheelJoint</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Description rdf:datatype="http://www.w3.org/2001/XMLSchema#string">Restricts a point on the second body to a line on the first body.</property:Description>
		<property:Since rdf:resource="&wiki;080"/>
		<property:Has_query rdf:resource="&wiki;WheelJoint-23_QUERYab0b525885e862bffbb7d2c29b08587f"/>
		<property:Has_query rdf:resource="&wiki;WheelJoint-23_QUERY8b79ad166a13cb66cf608f8052930a95"/>
		<swivt:wikiPageModificationDate rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2016-05-28T19:26:59Z</swivt:wikiPageModificationDate>
		<property:Modification_date-23aux rdf:datatype="http://www.w3.org/2001/XMLSchema#double">2457537.3104051</property:Modification_date-23aux>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;Object"/>
		<property:parent rdf:resource="&wiki;Joint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-23_QUERYab0b525885e862bffbb7d2c29b08587f">
		<swivt:masterPage rdf:resource="&wiki;WheelJoint"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">template</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">4</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[Constructs::WheelJoint]] [[Concept:Current]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint# QUERYab0b525885e862bffbb7d2c29b08587f</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-23_QUERY8b79ad166a13cb66cf608f8052930a95">
		<swivt:masterPage rdf:resource="&wiki;WheelJoint"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<property:Query_depth rdf:datatype="http://www.w3.org/2001/XMLSchema#double">1</property:Query_depth>
		<property:Query_format rdf:datatype="http://www.w3.org/2001/XMLSchema#string">template</property:Query_format>
		<property:Query_size rdf:datatype="http://www.w3.org/2001/XMLSchema#double">5</property:Query_size>
		<property:Query_string rdf:datatype="http://www.w3.org/2001/XMLSchema#string">[[Category:Functions]] [[parent::WheelJoint||Joint]] [[Concept:Current]]</property:Query_string>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint# QUERY8b79ad166a13cb66cf608f8052930a95</swivt:wikiPageSortKey>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AenableMotor">
		<rdfs:label>WheelJoint:enableMotor</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AenableMotor"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AenableMotor"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:enableMotor</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetAxis">
		<rdfs:label>WheelJoint:getAxis</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetAxis"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetAxis"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getAxis</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetJointSpeed">
		<rdfs:label>WheelJoint:getJointSpeed</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetJointSpeed"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetJointSpeed"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getJointSpeed</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetJointTranslation">
		<rdfs:label>WheelJoint:getJointTranslation</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetJointTranslation"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetJointTranslation"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getJointTranslation</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetMaxMotorTorque">
		<rdfs:label>WheelJoint:getMaxMotorTorque</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetMaxMotorTorque"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetMaxMotorTorque"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getMaxMotorTorque</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetMotorSpeed">
		<rdfs:label>WheelJoint:getMotorSpeed</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetMotorSpeed"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetMotorSpeed"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getMotorSpeed</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetMotorTorque">
		<rdfs:label>WheelJoint:getMotorTorque</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetMotorTorque"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetMotorTorque"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getMotorTorque</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetSpringDampingRatio">
		<rdfs:label>WheelJoint:getSpringDampingRatio</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetSpringDampingRatio"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetSpringDampingRatio"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getSpringDampingRatio</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AgetSpringFrequency">
		<rdfs:label>WheelJoint:getSpringFrequency</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AgetSpringFrequency"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AgetSpringFrequency"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:getSpringFrequency</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AisMotorEnabled">
		<rdfs:label>WheelJoint:isMotorEnabled</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AisMotorEnabled"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AisMotorEnabled"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:isMotorEnabled</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AsetMaxMotorTorque">
		<rdfs:label>WheelJoint:setMaxMotorTorque</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AsetMaxMotorTorque"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AsetMaxMotorTorque"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:setMaxMotorTorque</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AsetMotorEnabled">
		<rdfs:label>WheelJoint:setMotorEnabled</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AsetMotorEnabled"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AsetMotorEnabled"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:setMotorEnabled</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AsetMotorSpeed">
		<rdfs:label>WheelJoint:setMotorSpeed</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AsetMotorSpeed"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AsetMotorSpeed"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:setMotorSpeed</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AsetSpringDampingRatio">
		<rdfs:label>WheelJoint:setSpringDampingRatio</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AsetSpringDampingRatio"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AsetSpringDampingRatio"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:setSpringDampingRatio</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/WheelJoint-3AsetSpringFrequency">
		<rdfs:label>WheelJoint:setSpringFrequency</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/WheelJoint-3AsetSpringFrequency"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/WheelJoint-3AsetSpringFrequency"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">WheelJoint:setSpringFrequency</swivt:wikiPageSortKey>
		<property:parent rdf:resource="&wiki;WheelJoint"/>
	</swivt:Subject>
	<swivt:Subject rdf:about="http://love2d.org/wiki/Special:URIResolver/love.physics.newWheelJoint">
		<rdfs:label>love.physics.newWheelJoint</rdfs:label>
		<rdfs:isDefinedBy rdf:resource="http://love2d.org/wiki/Special:ExportRDF/love.physics.newWheelJoint"/>
		<swivt:page rdf:resource="http://love2d.org/wiki/love.physics.newWheelJoint"/>
		<swivt:wikiNamespace rdf:datatype="http://www.w3.org/2001/XMLSchema#integer">0</swivt:wikiNamespace>
		<swivt:wikiPageContentLanguage rdf:datatype="http://www.w3.org/2001/XMLSchema#string">en</swivt:wikiPageContentLanguage>
		<property:Constructs rdf:resource="&wiki;WheelJoint"/>
		<swivt:wikiPageSortKey rdf:datatype="http://www.w3.org/2001/XMLSchema#string">love.physics.newWheelJoint</swivt:wikiPageSortKey>
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