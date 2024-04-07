#!/usr/bin/env bash
loc=${1%.love}
if [[ -d $loc ]]; then
	if ! zenity --question --text 'Folder already exists. Overwrite?' ; then
		exit;
	fi
fi
unzip -qqo $1 -d $loc
cd $loc
echo 'do
	local nwimage = love.graphics.newImage
	function love.graphics.newImage(source)
		if type(source) == "string" then
			source = love.image.newImageData(source)
		end
		local w, h = source:getWidth(), source:getHeight()
		local wp = math.pow(2, math.ceil(math.log(w)/math.log(2)))
		local hp = math.pow(2, math.ceil(math.log(h)/math.log(2)))
		if wp ~= w or hp ~= h then
			local padded = love.image.newImageData(wp, hp)
			padded:paste(source, 0, 0)
			return nwimage(padded)
		end
		return nwimage(source)
	end
end' >padding.lua
sed '1 i require "padding"' <main.lua >.~main~
mv .~main~ main.lua
