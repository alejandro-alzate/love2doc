PK     \9�I               lib/PK
     �@�I��y�  �     lib/lovelyMoon.lualocal lovelyMoon = {events = {}}
local _slotState = {states = {}}

------------------------------------------------------------------------------------------------------------------------------------------

function lovelyMoon.events.update(dt)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.update then
			local newState = state:update(dt)
			if newState then
				if state.close then
					state:close()
				end

				state = newState

				if state.load then
					state:load()
				end
			end
		end
	end
end

function lovelyMoon.events.draw()
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.draw then
			state:draw()
		end
	end
end

function lovelyMoon.events.keypressed(key, unicode)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.keypressed then
			state:keypressed(key, unicode)
		end
	end
end

function lovelyMoon.events.keyreleased(key, unicode)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.keyreleased then
			state:keyreleased(key, unicode)
		end
	end
end

function lovelyMoon.events.mousepressed(x, y, button)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.mousepressed then
			state:mousepressed(x,y,button)
		end
	end
end

function lovelyMoon.events.mousereleased(x, y, button)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.mousereleased then
			state:mousereleased(x,y,button)
		end
	end
end

------------------------------------------------------------------------------------------------------------------------------------------
function lovelyMoon.new(s)
	local gs = {}

	gs = setmetatable(gs, s)
	s.__index = s
	_gs = gs
	
	return gs
end

function lovelyMoon.addState(req, id)
	local class = require(req)
	class._enabled = false
	class._id = id
	class:load()
	table.insert(_slotState.states, class)
	return class, state
end

function lovelyMoon.isStateEnabled(id)
	for index, state in pairs (_slotState.states) do
		if state._id == id then
			return state._enabled
		end	
	end
end

function lovelyMoon.getState(id)
	for index, state in pairs (_slotState.states) do
		if state._id == id then
			return state
		end
	end
end

function lovelyMoon.enableState(id)
	for index, state in pairs (_slotState.states) do
		if state._id == id then
			state:enable()
			state._enabled = true
		end
	end
end

function lovelyMoon.disableState(id)
	for index, state in pairs (_slotState.states) do
		if state._id == id then
			state:disable()
			state._enabled = false
		end
	end
end

function lovelyMoon.switchState(currentID, nextID)
	lovelyMoon.disableState(currentID)
	lovelyMoon.enableState(nextID)
end

function lovelyMoon.toggleState(id)
	for index, state in pairs (_slotState.states) do
		if state._id == id then
			state._enabled = not state._enabled
			if state._enabled then
				state:enable()
			else
				state:disable()
			end
		end
	end
end

function lovelyMoon.destroyState(id)
	for index, state in pairs (_slotState.states) do
		if state._id == id then
			state:close()
			table.remove(_slotState.states, index)
		end
	end
end

------------------------------------------------------------------------------------------------------------------------------------------

return lovelyMoonPK
     �A�IBo�>  >     main.lua--Libraries
lovelyMoon = require("lib.lovelyMoon")
--GameStates
states = {
	
}

function love.load()
	--Add Gamestates Here
	states.menu = lovelyMoon.addState("states.menu", "menu")
	states.game = lovelyMoon.addState("states.game", "game")
	
	--Remember to Enable your Gamestates!
	lovelyMoon.enableState("menu")
end

function love.update(dt)
	lovelyMoon.events.update(dt)
end

function love.draw()
	lovelyMoon.events.draw()
end

function love.keypressed(key, unicode)
	lovelyMoon.events.keypressed(key, unicode)
end

function love.keyreleased(key, unicode)
	lovelyMoon.events.keyreleased(key, unicode)
end

function love.mousepressed(x, y, button)
	lovelyMoon.events.mousepressed(x, y, button)
end

function love.mousereleased(x, y, button)
	lovelyMoon.events.mousereleased(x, y, button)
endPK     �5�I               states/PK
     �@�I����x  x     states/game.lua--Example of a state file

--Table
local state = {}

--New
function state:new()
	return lovelyMoon.new(self)
end

--Load
function state:load()
	
end

--Close
function state:close()
	
end

--Enable
function state:enable()
	love.window.setTitle("LovelyState - Game State")
end

--Disable
function state:disable()
	
end

--Update
function state:update(dt)
	
end

--Draw
function state:draw()
	love.graphics.print("It's that easy to switch states!\nPress [M] to return to the main menu.", 64, 64)
end

--KeyPressed
function state:keypressed(key, unicode)
	if key == "m" then
		lovelyMoon.switchState("game", "menu")
	end
end

--KeyReleased
function state:keyreleased(key, unicode)
	
end

--MousePressed
function state:mousepressed(x, y, button)
	
end

--MouseReleased
function state:mousereleased(x, y, button)
	
end

return statePK
     �@�I�G�W  W     states/menu.lua--Example of a GameState file

--Table
local state = {}

--New
function state:new()
	return lovelyMoon.new(self)
end

--Load
function state:load()
	
end

--Close
function state:close()
	
end

--Enable
function state:enable()
	love.window.setTitle("LovelyState - Main Menu State")
end

--Disable
function state:disable()
	
end

--Update
function state:update(dt)
	
end

--Draw
function state:draw()
	love.graphics.print("HI, press [G] to go to the Game!", 64, 64)
end

--KeyPressed
function state:keypressed(key, unicode)
	if key == "g" then
	lovelyMoon.switchState("menu", "game")
	end
end

--KeyRelease
function state:keyrelease(key, unicode)
	
end

--MousePressed
function state:mousepressed(x, y, button)
	
end

--MouseReleased
function state:mousereleased(x, y, button)
	
end

return statePK
     �4�Ia(�  �     states/template.lualocal state = {}

function state:new()
	return lovelyMoon.new(self)
end

function state:load()
	
end

function state:close()
	
end

function state:enable()
	
end

function state:disable()
	
end

function state:update(dt)
	
end

function state:draw()
	
end

function state:keypressed(key, unicode)
	
end

function state:keyreleased(key, unicode)
	
end

function state:mousepressed(x, y, button)
	
end

function state:mousereleased(x, y, button)
	
end

return statePK?      \9�I             $              lib/
         ���qL\����qL\���rzI\�PK? 
     �@�I��y�  �   $           "   lib/lovelyMoon.lua
          ���S\���Q�C\�F9��C\�PK? 
     �A�IBo�>  >   $           �  main.lua
         ���	U\�W`��C\�W`��C\�PK?      �5�I             $          a  states/
         �A`�H\��A`�H\�g���C\�PK? 
     �@�I����x  x   $           �  states/game.lua
         ���T\�x���C\�x���C\�PK? 
     �@�I�G�W  W   $           +  states/menu.lua
         ��T\��պ�C\��պ�C\�PK? 
     �4�Ia(�  �   $           �  states/template.lua
         Y\fH\��F��G\��F��G\�PK      �  �    