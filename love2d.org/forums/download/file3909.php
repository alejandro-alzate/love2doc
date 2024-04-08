local lovelyMoon = {event = {}}
local _slotState = {states = {}}

------------------------------------------------------------------------------------------------------------------------------------------

function lovelyMoon.event.update(dt)
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

function lovelyMoon.event.draw()
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.draw then
			state:draw()
		end
	end
end

function lovelyMoon.event.keypressed(key, unicode)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.keypressed then
			state:keypressed(key, unicode)
		end
	end
end

function lovelyMoon.event.keyreleased(key, unicode)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.keyreleased then
			state:keyreleased(key, unicode)
		end
	end
end

function lovelyMoon.event.mousepressed(x, y, button)
	for index, state in pairs(_slotState.states) do
		if state and state._enabled and state.mousepressed then
			state:mousepressed(x,y,button)
		end
	end
end

function lovelyMoon.event.mousereleased(x, y, button)
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

return lovelyMoon