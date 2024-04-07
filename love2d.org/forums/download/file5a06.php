--[[
	Copyright (c) 2010 Bart van Strien

	Permission is hereby granted, free of charge, to any person
	obtaining a copy of this software and associated documentation
	files (the "Software"), to deal in the Software without
	restriction, including without limitation the rights to use,
	copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the
	Software is furnished to do so, subject to the following
	conditions:

	The above copyright notice and this permission notice shall be
	included in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
	OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
	HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
	FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
	OTHER DEALINGS IN THE SOFTWARE.

]]

local love = love
local math = math
local ipairs = ipairs
local table = table
--Make sure we have the things we are going to need
module("swingers")

--Start it all up, well, just empty the queue :P
function start(btn)
	queue = {}
	_M.btn = btn or "l"
	return true
end

--Not used (now), it was meant for problems with the lanes
function checkError()
	return false
end

--Is the queue not-empty?
function checkGesture()
	return #queue>0
end

--Get the gesture from the queue (and pop it)
function getGesture()
	return table.remove(queue, 1)[1]
end

--Same as above, but the extended directions
function getExtGesture()
	return table.remove(queue, 1)[2]
end

--do everything..
function update()
	if not gesturing and love.mouse.isDown(btn) then
		dir = 0
		lastdir = math.huge
		path = 0
		pastdirs = {}
		x, y = love.mouse.getPosition()
		ox, ox = 0, 0
		bx, by = x, y
		gesturing = true
	end
	if gesturing then
		if not love.mouse.isDown(btn) then
			local dirs = {}
			local extdirs = {}
			for i, v in ipairs(pastdirs) do
				if v >= 0.25*math.pi and v < 0.75*math.pi then
					table.insert(dirs, "u")
				elseif v >= 0.75*math.pi and v < 1.25*math.pi then
					table.insert(dirs, "r")
				elseif v >= -0.75*math.pi and v < -0.25*math.pi then
					table.insert(dirs, "d")
				elseif v >= -0.25*math.pi and v < 0.25*math.pi then
					table.insert(dirs, "l")
				end
				if v >= 0.35*math.pi and v < 0.65*math.pi then
					table.insert(extdirs, "n")
				elseif v >= 0.85*math.pi and v < 1.15*math.pi then
					table.insert(extdirs, "e")
				elseif v >= -0.65*math.pi and v < -0.35*math.pi then
					table.insert(extdirs, "s")
				elseif v >= -0.15*math.pi and v < 0.15*math.pi then
					table.insert(extdirs, "w")
				elseif v >= 0.15*math.pi and v < 0.35*math.pi then
					table.insert(extdirs, "nw")
				elseif v >= 0.65*math.pi and v < 0.85*math.pi then
					table.insert(extdirs, "ne")
				elseif v >= -0.35*math.pi and v < -0.15*math.pi then
					table.insert(extdirs, "sw")
				elseif v < -0.65*math.pi or v >= 1.15*math.pi then
					table.insert(extdirs, "se")
				end
			end
			local finalxdirs = {}
			lastdir = 0
			for i, v in ipairs(extdirs) do
				if v ~= lastdir then
					table.insert(finalxdirs, v)
				end
				lastdir = v
			end
			local finaldirs = {}
			lastdir = 0
			for i, v in ipairs(dirs) do
				if v ~= lastdir then
					table.insert(finaldirs, v)
				end
				lastdir = v
			end
			table.insert(queue, {table.concat(finaldirs), finalxdirs})
			gesturing = false
		else
			lastdir = dir
			ox, oy = x, y
			x, y = love.mouse.getPosition()
			dir = math.atan2(y-oy, x-ox)
			path = path + math.abs(y-oy) + math.abs(x-ox)
			if path > 20 then
				table.insert(pastdirs, math.atan2(by-y, bx-x))
				path = 0
				bx, by = x, y
			end
		end
	end
end
