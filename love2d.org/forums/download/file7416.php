-- Script by: Gabrielbsales

Kuey = {}

local strbyte = string.byte
local strchar = string.char
local strgmtch = string.gmatch
local strgsub = string.gsub
	
local function getKeyLNow(key, l)
	local n = l + 1
	
	if n > #key then
		n = 1
	end
	
	return n
end

function getStringTable(key)
	local t = {}
	
	strgsub(key, ".",function(l) 
		t[#t + 1] = l
	end)
	
	return t
end

local function encodeL(l, kl, lr)
	local right = strbyte(l)
	if right ~= 0 then
		local sc = strbyte(kl)
		
		if lr == "r" then
			
				right = right + sc
				if right > 255 then
					right = right - 255
				end
		else
				right = right - sc
				
				if right < 0 then
					right = 255 + right
				end
				
				if right == 0 then
					right = 255
				end
		end
	end
	return strchar(right)
	
end

local function encode(str, key, lr)
	local outStr = {}
	local keyT = getStringTable(key)
	local keyL = 0
	local s = 0
	local t = #str
	
	for l in string.gmatch(str, ".") do
		s = s + 1
		keyL = getKeyLNow(keyT, keyL)
		outStr[#outStr + 1] = encodeL(l, keyT[keyL], lr)	
	end
	
	return outStr
end

local function encodeFile(filename, key, ed, outname)
	local fileContent = ""
	local f = io.open(filename, "rb")
	fileContent = f:read("*all")
	f:close()
	local out = encode(fileContent, key, ed == "e" and "r" or "l")
	
	if outname then
		f = io.open(outname, "wb")
		f:write(table.concat(out))
		f:close()
	end
				
	return out
end

Kuey.encodeFile = function(filename, key, outname)
	if not filename or not key then
		error("The correct mode is: Kuey.encodeFile(filename, key[, outputname])")
		return nil
	end
	return encodeFile(filename, key, "e", outname)
end

Kuey.decodeFile = function(filename, key, outname)
	if not filename or not key then
		error("The correct mode is: Kuey.decodeFile(filename, key[, outputname])")
		return nil
	end
	return encodeFile(filename, key, "d", outname)
end

Kuey.encode = function(str, key)
	if not key then
		error("Where are the key?\nUse: Kuey.encode(string, key)")
		return nil
	end
	return table.concat(encode(str, key, "r"))
end

Kuey.decode = function(str, key)
	if not key then
		error("Where are the key?\nUse: Kuey.encode(string, key)")
		return nil
	end
	return table.concat(encode(str, key, "l"))
end

return Kuey