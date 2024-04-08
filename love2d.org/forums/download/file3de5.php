Nodes = {}
NodesIndex = {}
Edges = {}
StartNode = nil

push = table.insert
insert = table.insert

local function NewNode(name)
	node = {}
	node.name = name
	node.Pre = nil
	node.Dist = -1
	node.vis = false
	push(Nodes,node)
	NodesIndex[name] = #Nodes
end

local function NewEdge(Node1,Node2,EdgeVal)
	edge = {}
	edge.N1 = Node1
	edge.N2 = Node2
	edge.Dist = EdgeVal
	push(Edges,edge)
end

local function SetStartNode(name)
	Nodes[NodesIndex[name]].Dist = 0
	StartNode = name
end

local function EdgeConnectsNodes(E,N1,N2)
	return E.N1 == N1 and E.N2 == N2 or E.N1 == N2 and E.N2 == N1
end

local function GetDistance(N1,N2)
	for i=1,#Edges,1 do
		if EdgeConnectsNodes(Edges[i],N1,N2) then
			return Edges[i].Dist
		end
	end
	return -1
end

local function GetNumOfUnVisNodes()
	local NOUVN = 0
	for i=1,#Nodes,1 do
		if not Nodes[i].vis then
			NOUVN = NOUVN + 1
		end
	end
	return NOUVN
end

local function GetAllAdjcentNodes(N,AdjNodes)
	for i=1,#Edges,1 do
		if Edges[i].N1 == N and not Nodes[NodesIndex[Edges[i].N2]].vis then
			push(AdjNodes,Edges[i].N2)
		elseif Edges[i].N2 == N and not Nodes[NodesIndex[Edges[i].N1]].vis then
			push(AdjNodes,Edges[i].N1)
		end
	end
end

local function VisitClosestNode()
	local index=0
	local Dist=0
	for i=1,#Nodes,1 do
		if not Nodes[i].vis and Nodes[i].Dist >= 0 then
			Dist = Nodes[i].Dist
			index=i
			break
		end
	end
	for i=1,#Nodes,1 do
		if Nodes[i].Dist < Dist and not Nodes[i].vis and Nodes[i].Dist >= 0 then
			Dist = Nodes[i].Dist
			index = i
		end
	end
	Nodes[index].vis = true
	return index
end

local function Dijkstras()
	while GetNumOfUnVisNodes()>0 do
		local ClosetsNode = Nodes[VisitClosestNode()]
		local MyAdjNodes = {}
		GetAllAdjcentNodes(ClosetsNode.name,MyAdjNodes)
		for i=1,#MyAdjNodes,1  do
			local Distance = ClosetsNode.Dist + GetDistance(ClosetsNode.name,MyAdjNodes[i])
			local AdjNode = Nodes[NodesIndex[MyAdjNodes[i]]]
			if AdjNode.Dist >= 0 then
				if Distance < AdjNode.Dist then
					AdjNode.Dist = Distance
					AdjNode.Pre = ClosetsNode.name
				end
			else
				AdjNode.Dist = Distance
				AdjNode.Pre = ClosetsNode.name
			end
		end
	end
end

local function GetPathTo(N,Path)
	local CN = N
	while CN~=StartNode do
		local Temp = CN
		insert(Path,1,Temp)
		CN = Nodes[NodesIndex[CN]].Pre
	end
	insert(Path,1,StartNode)
end

NewNode("a")
NewNode("b")
NewNode("c")
NewNode("d")
NewNode("e")
NewNode("f")
NewNode("g")

NewEdge("a","c",10)
NewEdge("a","d",19)
NewEdge("b","c",4)
NewEdge("c","d",4)
NewEdge("b","f",41)
NewEdge("c","e",20)
NewEdge("e","f",17)
NewEdge("d","g",30)
NewEdge("g","f",4)

SetStartNode("a")

Dijkstras()

local MyPath = {}
GetPathTo("f",MyPath)
local size=#MyPath
for i=1,size,1 do
	print(MyPath[i])
end

os.execute("pause>nul")--this is here if you are using windows, switch to fit you needs
