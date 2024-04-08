-- L3D
-- Love 3D
-- 3D Rendering Engine
-- Programmed by 10$man

-- License:
-- Free to use.
-- Please include Library name in 
-- readme packaged with distributable





--[[
Main Variables
]]--
L3D = {}
L3D.TRANSLATE = {0, 0, 0}
L3D.ROTATE = {0, 0, 0}
L3D.PERSPECTIVE = {256, 0}
L3D.DIMENSIONS = {640, 480}

L3D.CLIP = {-10, L3D.DIMENSIONS[1] + 10, -10, L3D.DIMENSIONS[2] + 10}

--[[
Global definitions
]]--
L3DAmbient = 1
L3DDiffuse = 2
L3DSpecular = 3

--[[
Main initialization
]]--
function L3DSetup(W, H, P)
	L3D.DIMENSIONS[1] = W
	L3D.DIMENSIONS[2] = H
	L3D.PERSPECTIVE[1] = P
end


--[[
Tools
]]--

--Set Screen CLippInG
function L3DSetClipping(minX, maxX, minY, maxY)
	L3D.CLIP[1] = minX
	L3D.CLIP[2] = maxX
	L3D.CLIP[3] = minY
	L3D.CLIP[4] = maxY
end

--Converts a 3Vertice to a 2Vertice
function to2d(arr)
	local x1 = arr[1]
	local y1 = arr[2]
	local z1 = arr[3]

	local ca = math.cos(L3D.ROTATE[1])
	local sa = math.sin(L3D.ROTATE[1])
	
	local y_temp = y1
	y1 = y1 * ca - z1 * sa
	z1 = y_temp * sa + z1 * ca
	
	ca = math.cos(L3D.ROTATE[2])
	sa = math.sin(L3D.ROTATE[2])
	
	local z_temp = z1
	z1 = z1 * ca - x1 * sa
	x1 = z_temp * sa + x1 * ca
	
	ca = math.cos(L3D.ROTATE[3])
	sa = math.sin(L3D.ROTATE[3])
	
	local x_temp = x1
	x1 = x1 * ca - y1 * sa
	y1 = x_temp * sa + y1 * ca

	local x = L3D.PERSPECTIVE[1] * (x1 + L3D.TRANSLATE[1]) / (L3D.PERSPECTIVE[2] + (z1 + L3D.TRANSLATE[3])) + L3D.DIMENSIONS[1] / 2
	local y = L3D.PERSPECTIVE[1] * (y1 + L3D.TRANSLATE[2]) / (L3D.PERSPECTIVE[2] + (z1 + L3D.TRANSLATE[3])) + L3D.DIMENSIONS[2] / 2
	return x, y
end

--Converts a table of faces to indices
function toinds(face, mt)
	local temp = {}
	if mt then
		for a = 1, (#face - 1)/3 do
			temp[a] = face[1 + a * 3 - 3]
		end
		temp[#temp + 1] = {}
		temp[#temp] = face[#face]
	else
		for a = 1, #face /3 do
			temp[a] = face[1 + a * 3 - 3]
		end
	end
	return temp
end

--Loads a .obj file
function L3DLoadObj(FILE_PATH)
	
	--Load the File
	RAW_FILE = {}
	for line in love.filesystem.lines(FILE_PATH) do
		table.insert(RAW_FILE, line)
	end
	
	--Create some tables to hold data from the OBJ
	local FACES = {} --Faces
	local VERTS = {} --Vertices
	local NORMS = {} --Vertice Normals
	local TEXVS = {} --Texture Vertices
	local INDCS = {} --Indices
	local MATER = {} --Material
	local COLOR = {}
	index = 0 --Saves the current position in a table
	local currentMat = 0
	--Iterate through file and fill tables
	for a = 1, #RAW_FILE do
		--Make sure to check for mtl file
		if string.sub(RAW_FILE[a], 1, 6) == "mtllib" then
			local RAW_MTL = {}
			for line in love.filesystem.lines(string.sub(RAW_FILE[a], 8)) do
				table.insert(RAW_MTL, line)
			end
			
			--Since there was a material, let's index it
			for c = 1, #RAW_MTL do
				
				--If a new material is being declared
				if string.sub(RAW_MTL[c], 1, 6) == "newmtl" then
					MATER[#MATER+1] = {}
					MATER[#MATER].ID = string.sub(RAW_MTL[c], 8)
				
				end
				
				if string.sub(RAW_MTL[c], 1, 2) == "Ka" then
					index = 1
					MATER[#MATER].AMB = {}
					for a = 1, 3 do
						MATER[#MATER].AMB[a] = " "
					end
					
					for l = 4, string.len(RAW_MTL[c]) do
						if string.sub(RAW_MTL[c], l, l) == " " then
							index = index + 1
						else
							MATER[#MATER].AMB[index] = MATER[#MATER].AMB[index] .. string.sub(RAW_MTL[c], l, l)
						end
					end
				end
				
				if string.sub(RAW_MTL[c], 1, 2) == "Kd" then
					index = 1
					MATER[#MATER].DIF = {}
					for a = 1, 3 do
						MATER[#MATER].DIF[a] = " "
					end
					
					for l = 4, string.len(RAW_MTL[c]) do
						if string.sub(RAW_MTL[c], l, l) == " " then
							index = index + 1
						else
							MATER[#MATER].DIF[index] = MATER[#MATER].DIF[index] .. string.sub(RAW_MTL[c], l, l)
						end
					end
				end
			end
		end
		--Done indexing Materials
		
		
		--Does this line define a Material use?
		if string.sub(RAW_FILE[a], 1, 6) == "usemtl" then
			id = string.sub(RAW_FILE[a], 8)
			for a = 1, #MATER do
				if MATER[a].ID == id then
					currentMat = a
				end
			end
		end
		--Is this line a Vertice?
		if string.sub(RAW_FILE[a], 1, 2) == "v " then
			--Create a new Vertice
			VERTS[#VERTS + 1] = {}
			for a = 1, 3 do
				VERTS[#VERTS][a] = " "
			end
			
			--Set index to 0
			index = 1		
			
			--Start from after the id and loop to the end of the line
			for l = 3, string.len(RAW_FILE[a]) do
			
				--If the current position is a space
				if string.sub(RAW_FILE[a], l, l) == " " then
					index = index + 1
				else --If not, then add to our list of vertices
					VERTS[#VERTS][index] = VERTS[#VERTS][index] .. string.sub(RAW_FILE[a], l, l)
				end
			end
		end
		
		--Is this line a Texture Vertice?
		
		if string.sub(RAW_FILE[a], 1, 2) == "vt" then
			-- Create a new Vertice
			TEXVS[#TEXVS + 1] = {}
			for a = 1, 2 do
				TEXVS[#TEXVS][a] = " "
			end
			
			-- Set index to 0
			index = 1		
			
			-- Start from after the id and loop to the end of the line
			for l = 4, string.len(RAW_FILE[a]) do
			
				-- If the current position is a space
				if string.sub(RAW_FILE[a], l, l) == " " then
					index = index + 1
				else --If not, then add to our list of vertices
					TEXVS[#TEXVS][index] = TEXVS[#TEXVS][index] .. string.sub(RAW_FILE[a], l, l)
				end
			end
		end
	
		--Is this line a Vertex Normal?
		if string.sub(RAW_FILE[a], 1, 2) == "vn" then
			--Create a new Vertice
			NORMS[#NORMS + 1] = {}
			for a = 1, 3 do
				NORMS[#NORMS][a] = " "
			end
			
			--Set index to 0
			index = 1		
			
			--Start from after the id and loop to the end of the line
			for l = 4, string.len(RAW_FILE[a]) do
			
				--If the current position is a space
				if string.sub(RAW_FILE[a], l, l) == " " then
					index = index + 1
				else --If not, then add to our list of vertices
					NORMS[#NORMS][index] = NORMS[#NORMS][index] .. string.sub(RAW_FILE[a], l, l)
				end
			end
		end
		
		--Is this line a Face?
		if string.sub(RAW_FILE[a], 1, 2) == "f " then
			--Create a new face
			FACES[#FACES + 1] = {}
			
			--Set index to 0
			index = 1
			FACES[#FACES][index] = " "
			
			--Start from after the id and loop to the end of the line
			for l = 3, string.len(RAW_FILE[a]) do
			
				--If the current position is a space
				if string.sub(RAW_FILE[a], l, l) == " " or string.sub(RAW_FILE[a], l, l) == "/" then
					index = index + 1
					FACES[#FACES][index] = " "
				else --If not, then add to our list of vertices
					FACES[#FACES][index] = FACES[#FACES][index] .. string.sub(RAW_FILE[a], l, l)
				end
			end
			
			FACES[#FACES][#FACES[#FACES] + 1] = currentMat
		end
	end
	
	--Convert all to numbers
	for a = 1, #VERTS do
		for b = 1, #VERTS[a] do
			VERTS[a][b] = tonumber(VERTS[a][b])
		end
	end
	for a = 1, #FACES do
		for b = 1, #FACES[a] do
			FACES[a][b] = tonumber(FACES[a][b])
		end
	end
	
	--Finally, convert our FACES to Indices usable in our draw function
	for a = 1, #FACES do
		if #MATER > 0 then
			INDCS[a] = toinds(FACES[a], true)
		else
			INDCS[a] = toinds(FACES[a])
		end
	end
	
	return VERTS, INDCS, MATER
	
end


	
--[[
Global View functions
]]--

--Resets the pointer
function L3DLoadIdentity()
	L3D.TRANSLATE[1] = 0
	L3D.TRANSLATE[2] = 0
	L3D.TRANSLATE[3] = 0
	
	L3D.ROTATE[1] = 0
	L3D.ROTATE[2] = 0
	L3D.ROTATE[3] = 0
end

--Translates the pointer to a new point in model space
function L3DTranslate(x, y, z)
	L3D.TRANSLATE[1] = x
	L3D.TRANSLATE[2] = y
	L3D.TRANSLATE[3] = z
end

--Rotates the pointer in model space
function L3DRotate(x, y, z)
	L3D.ROTATE[1] = x
	L3D.ROTATE[2] = y
	L3D.ROTATE[3] = z
end


--[[
Draw Functions
]]--

function L3DDraw(VERTS, INDS, MAT, diforamb)
	local DRAW = {}
	local drawFlag = true
	if MAT ~= nil then
		for a = 1, #INDS do
			drawFlag = true
			DRAW[a] = {}
			for b = 1, #INDS[a] do
				x, y = to2d(VERTS[INDS[a][b]])
				DRAW[a][#DRAW[a] + 1] = x
				DRAW[a][#DRAW[a] + 1] = y
				if x < L3D.CLIP[1] or x > L3D.CLIP[2] or y < L3D.CLIP[3] or y > L3D.CLIP[4] then
					drawFlag = false
				end
			end
			if drawFlag then
				if diforamb == L3DAmbient then
					love.graphics.setColor(tonumber(MAT[INDS[a][#INDS[a]]].AMB[1]) * 255, tonumber(MAT[INDS[a][#INDS[a]]].AMB[2]) * 255, tonumber(MAT[INDS[a][#INDS[a]]].AMB[3]) * 255)
				else
					love.graphics.setColor(tonumber(MAT[INDS[a][#INDS[a]]].DIF[1]) * 255, tonumber(MAT[INDS[a][#INDS[a]]].DIF[2]) * 255, tonumber(MAT[INDS[a][#INDS[a]]].DIF[3]) * 255)
				end
				love.graphics.polygon("fill", DRAW[a])
			end
		end
	
	else
		for a = 1, #INDS do
			drawFlag = true
			DRAW[a] = {}
			for b = 1, #INDS[a] do
				x, y = to2d(VERTS[INDS[a][b]])
				DRAW[a][#DRAW[a] + 1] = x
				DRAW[a][#DRAW[a] + 1] = y
				if x < L3D.CLIP[1] or x > L3D.CLIP[2] or y < L3D.CLIP[3] or y > L3D.CLIP[4] then
					drawFlag = false
				end
			end
			if drawFlag then
				love.graphics.polygon("fill", DRAW[a])
			end
		end
	end
end