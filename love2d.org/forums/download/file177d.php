
function love.load()
	Object = require "classic"
	require "dithering"
	width, height = love.graphics.getDimensions( )
end

function love.update(dt)
	--
end

function pathinfo(str)
	return string.match(str, "(.-)([^\\]-([^%.]+))$")
end

-- Format Name  | Common Extension | Can Decode | Can Encode
--  JPEG        | .jpg, .jpeg      | Yes        |
--  PNG         | .png             | Yes        | Yes  
--  BMP         | .bmp             | Yes        |
--  TGA / TARGA | .tga             | Yes        | Yes  
--  HDR / RGBE  | .hdr, .pic       | Yes        |
--  OpenEXR     | .exr             | Yes        |
accept = {
	jpg = 1, jpeg = 1,
	png = 1,
	bmp = 1,
	tga = 1,
	hdr = 1, pic = 1,
	exr = 1
}

function love.filedropped(file)
	local path, filename, ext = pathinfo(file:getFilename())
	print("File: " .. filename)

	if type(accept[ext:lower()]) == "number" and accept[ext:lower()] == 1 then
		text = filename
		droppedImg = Dithering:new(file)
	else
		text = "The "..ext:lower().." format is not supported"
		print(text)
	end
end

text = "Drop your file here"
function love.draw()
	-- Text
	love.graphics.setColor(1, 1, 1)
    love.graphics.print(text, 10, 5)
	
	if(droppedImg and droppedImg.img) then
		love.graphics.draw(droppedImg.img, 10, 20)
	end
end

local keyMap = {
	kp0 = { i = 0, name = "Gray scale",                          func = function(o) o:grayScale() end         },
	kp1 = { i = 1, name = "Atkinson",                            func = function(o) o:atkinson() end          },
	kp2 = { i = 2, name = "Floyd-Steinberg",                     func = function(o) o:floydSteinberg() end    },
	kp3 = { i = 3, name = "Jarvis, Judice, and Ninke Dithering", func = function(o) o:jarvisJudiceNinke() end },
	kp4 = {	i = 4, name = "Stucki",                              func = function(o) o:stucki() end            },
	kp5 = { i = 5, name = "Burkes",                              func = function(o) o:burkes() end            },
	kp6 = { i = 6, name = "Sierra",                              func = function(o) o:sierra() end            },
	kp7 = { i = 7, name = "Sierra 2 rows",                       func = function(o) o:sierra2row() end        },
	kp8 = { i = 8, name = "Sierra Lite",                         func = function(o) o:sierraLite() end        },
	kp9 = { i = 9, name = "none",                                func = function(o) print("none") end         }
}

function love.keypressed(key)
	if droppedImg and keyMap[key] then
		print(keyMap[key].i..": "..keyMap[key].name)
		text = keyMap[key].name
		droppedImg:init()
		keyMap[key].func(droppedImg)
    end
end