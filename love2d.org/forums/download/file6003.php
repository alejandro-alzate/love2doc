-- class Dithering{

Dithering = Object.extend(Object)

function Dithering:new(file)
	file:open("r")
	local fileData = file:read("data")
	file:close()
	self.data = love.image.newImageData(fileData)
	self.width, self.height = self.data:getDimensions()
	self.blank = function() return love.image.newImageData(self.width, self.height, "rgba8") end
	self:init()
	return self
end

-- isset (PHP) : test 2D table
local function _isset(a,x,y)
	return type(a[x]) == "table" and type(a[x][y]) == "number"
end

-- Convert color of a pixel to grayscale
local function _grayscale(r,g,b,a)
	local c = r
	if r ~= g or g ~= b then
		c = 0.3*r + 0.59 * g + 0.11 * b
	end
	if type(a) == "number" then
		c = c * a
	end
	return c
end
	
function Dithering:init()
	self.arr = {}
	self.hist = {}
	self.img  = love.graphics.newImage(self.data)
	-- Convert to grayscale
	-- Parse image (can be combined with dither stage, but combining them is slower.)
	local x,y
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local r,g,b,a = self.data:getPixel( x, y )
			local c = _grayscale(r,g,b,a)
			if type(self.arr[x]) ~= "table" then
				self.arr[x] = {}
			end
			self.arr[x][y] = c
			self.hist[c] = self.hist[c] and self.hist[c] +1 or 1
		end
	end
end

--[[
function histogram()
	$this->_img = $this->_blank;
	krsort($this->_hist);
	$x = 0;
	$y = 0;
	foreach($this->_hist as $color => $count){
		$line = $this->_width - $x;
		$count2 = $count;
		while($count2 > 0){
			$len = min($line, $count2);
			imagefilledrectangle(
				$this->_img,
				$x,
				$y,
				$x + $len,
				$y,
				$color
			);
			$count2 -= $len;
			if($x + $len >= $this->_width){
				$line = $this->_width;
				$x = 0;
				$y++;
			}
			else{
				$x += $len;
			}
		}
	}
end
--]]

-- Convert picture to grayscale (8bits)
function Dithering:grayScale()
	self.img = self.blank()
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			self.img:setPixel(x, y, self.arr[x][y], self.arr[x][y], self.arr[x][y], 1)
		end
	end
	self.img  = love.graphics.newImage(self.img)
end

-- Atkinson Error Diffusion Kernel:
-- 1/8 is 1/8 * quantization error.
-- +-------+-------+-------+-------+
-- |       | Curr. |  1/8  |  1/8  |
-- +-------|-------|-------|-------|
-- |  1/8  |  1/8  |  1/8  |       |
-- +-------|-------|-------|-------|
-- |       |  1/8  |       |       |
-- +-------+-------+-------+-------+
function Dithering:atkinson(threshold)
	threshold = threshold == nil and 0.5 or threshold
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  1 * threshold then -- 1*.5; This is the b/w threshold. Currently @ halfway between white and black.
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			
			local quant_error = old - new
			--I can do this because this dither uses 1 value for the applied error diffusion.
			local error_diffusion = 1/8 * quant_error 
			
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + error_diffusion end
			if _isset(arr, x+2, y  ) then arr[x+2][y  ] = arr[x+2][y  ] + error_diffusion end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + error_diffusion end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + error_diffusion end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + error_diffusion end
			if _isset(arr, x  , y+2) then arr[x  ][y+2] = arr[x  ][y+2] + error_diffusion end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Floyd-Steinberg Error Diffusion Kernel:
-- x/16 is x/16 * quantization error.
-- +-------+-------+-------+
-- |       | Curr. |  7/16 |
-- +-------|-------|-------|
-- |  3/16 |  5/16 |  1/16 |
-- +-------|-------|-------|
function Dithering:floydSteinberg()
	local d1 = 1/16
	local d3 = 3/16
	local d5 = 5/16
	local d7 = 7/16
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old > 0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			quant_error = old - new
			
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + d7 * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + d3 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + d5 * quant_error end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + d1 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Jarvis, Judice, and Ninke Dithering Error Diffusion Kernel:
-- x/48 is x/48 * quantization error.
-- +-------+-------+-------+-------+-------+
-- |       |       | Curr. |  7/48 |  5/48 | 
-- +-------+-------+-------+-------+-------+
-- |  3/48 |  5/48 |  7/48 |  5/48 |  3/48 |
-- +-------+-------+-------+-------+-------+
-- |  1/48 |  3/48 |  5/48 |  3/48 |  1/48 |
-- +-------+-------+-------+-------+-------+
function Dithering:jarvisJudiceNinke()
	local d1 = 1/48
	local d3 = 3/48
	local d5 = 5/48
	local d7 = 7/48
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			local quant_error = old - new
			
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + d7 * quant_error end
			if _isset(arr, x+2, y  ) then arr[x+2][y  ] = arr[x+2][y  ] + d5 * quant_error end
			if _isset(arr, x-2, y+1) then arr[x-2][y+1] = arr[x-2][y+1] + d3 * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + d5 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + d7 * quant_error end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + d5 * quant_error end
			if _isset(arr, x+2, y+1) then arr[x+2][y+1] = arr[x+2][y+1] + d3 * quant_error end
			if _isset(arr, x-2, y+2) then arr[x-2][y+2] = arr[x-2][y+2] + d1 * quant_error end
			if _isset(arr, x-1, y+2) then arr[x-1][y+2] = arr[x-1][y+2] + d3 * quant_error end
			if _isset(arr, x  , y+2) then arr[x  ][y+2] = arr[x  ][y+2] + d5 * quant_error end
			if _isset(arr, x+1, y+2) then arr[x+1][y+2] = arr[x+1][y+2] + d3 * quant_error end
			if _isset(arr, x+2, y+2) then arr[x+2][y+2] = arr[x+2][y+2] + d1 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Stucki Error Diffusion Kernel:
-- x/42 is x/42 * quantization error.
-- +-------+-------+-------+-------+-------+
-- |       |       | Curr. |  8/42 |  4/42 | 
-- +-------+-------+-------+-------+-------+
-- |  2/42 |  4/42 |  8/42 |  4/42 |  2/42 |
-- +-------+-------+-------+-------+-------+
-- |  1/42 |  2/42 |  4/42 |  2/42 |  1/42 |
-- +-------+-------+-------+-------+-------+
function Dithering:stucki()
	local d1 = 1/42
	local d2 = 2/42
	local d4 = 4/42
	local d8 = 8/42
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			local quant_error = old - new
		
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + d8 * quant_error end
			if _isset(arr, x+2, y  ) then arr[x+2][y  ] = arr[x+2][y  ] + d4 * quant_error end
			if _isset(arr, x-2, y+1) then arr[x-2][y+1] = arr[x-2][y+1] + d2 * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + d4 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + d8 * quant_error end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + d4 * quant_error end
			if _isset(arr, x+2, y+1) then arr[x+2][y+1] = arr[x+2][y+1] + d2 * quant_error end
			if _isset(arr, x-2, y+2) then arr[x-2][y+2] = arr[x-2][y+2] + d1 * quant_error end
			if _isset(arr, x-1, y+2) then arr[x-1][y+2] = arr[x-1][y+2] + d2 * quant_error end
			if _isset(arr, x  , y+2) then arr[x  ][y+2] = arr[x  ][y+2] + d4 * quant_error end
			if _isset(arr, x+1, y+2) then arr[x+1][y+2] = arr[x+1][y+2] + d2 * quant_error end
			if _isset(arr, x+2, y+2) then arr[x+2][y+2] = arr[x+2][y+2] + d1 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Burkes Error Diffusion Kernel:
-- x/32 is x/32 * quantization error.
-- +-------+-------+-------+-------+-------+
-- |       |       | Curr. |  8/32 |  4/32 | 
-- +-------+-------+-------+-------+-------+
-- |  2/32 |  4/32 |  8/32 |  4/32 |  2/32 |
-- +-------+-------+-------+-------+-------+
function Dithering:burkes()
	local d1 = 1/32
	local d2 = 2/32
	local d4 = 4/32
	local d8 = 8/32
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			local quant_error = old - new
		
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + d8 * quant_error end
			if _isset(arr, x+2, y  ) then arr[x+2][y  ] = arr[x+2][y  ] + d4 * quant_error end
			if _isset(arr, x-2, y+1) then arr[x-2][y+1] = arr[x-2][y+1] + d2 * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + d4 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + d8 * quant_error end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + d4 * quant_error end
			if _isset(arr, x+2, y+1) then arr[x+2][y+1] = arr[x+2][y+1] + d2 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Sierra Error Diffusion Kernel:
-- x/32 is x/32 * quantization error.
-- +-------+-------+-------+-------+-------+
-- |       |       | Curr. |  5/32 |  3/32 | 
-- +-------+-------+-------+-------+-------+
-- |  2/32 |  4/32 |  5/32 |  4/32 |  2/32 |
-- +-------+-------+-------+-------+-------+
-- |       |  2/32 |  3/32 |  2/32 |       |
-- +-------+-------+-------+-------+-------+
function Dithering:sierra()
	local d2 = 2/32
	local d3 = 3/32
	local d4 = 4/32
	local d5 = 5/32
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			local quant_error = old - new
		
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + d5 * quant_error end
			if _isset(arr, x+2, y  ) then arr[x+2][y  ] = arr[x+2][y  ] + d3 * quant_error end
			if _isset(arr, x-2, y+1) then arr[x-2][y+1] = arr[x-2][y+1] + d2 * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + d4 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + d5 * quant_error end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + d4 * quant_error end
			if _isset(arr, x+2, y+1) then arr[x+2][y+1] = arr[x+2][y+1] + d2 * quant_error end
			if _isset(arr, x-1, y+2) then arr[x-1][y+2] = arr[x-1][y+2] + d2 * quant_error end
			if _isset(arr, x  , y+2) then arr[x  ][y+2] = arr[x  ][y+2] + d3 * quant_error end
			if _isset(arr, x+1, y+2) then arr[x+1][y+2] = arr[x+1][y+2] + d2 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Sierra 2 rows Error Diffusion Kernel:
-- x/16 is x/16 * quantization error.
-- +-------+-------+-------+-------+-------+
-- |       |       | Curr. |  4/16 |  3/16 | 
-- +-------+-------+-------+-------+-------+
-- |  1/16 |  2/16 |  3/16 |  2/16 |  1/16 |
-- +-------+-------+-------+-------+-------+
function Dithering:sierra2row()
	local d1 = 1/16
	local d2 = 2/16
	local d3 = 3/16
	local d4 = 4/16
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			local quant_error = old - new
		
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + d4 * quant_error end
			if _isset(arr, x+2, y  ) then arr[x+2][y  ] = arr[x+2][y  ] + d3 * quant_error end
			if _isset(arr, x-2, y+1) then arr[x-2][y+1] = arr[x-2][y+1] + d1 * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + d2 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + d3 * quant_error end
			if _isset(arr, x+1, y+1) then arr[x+1][y+1] = arr[x+1][y+1] + d2 * quant_error end
			if _isset(arr, x+2, y+1) then arr[x+2][y+1] = arr[x+2][y+1] + d1 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
-- Sierra Lite Error Diffusion Kernel:
-- x/4 is x/4 * quantization error.
-- +-------+-------+-------+
-- |       | Curr. |  2/4  | 
-- +-------+-------+-------+
-- |  1/4  |  1/4  |       |
-- +-------+-------+-------+
function Dithering:sierraLite()
	local arr = self.arr
	self.img = self.blank()
	
	for y = 0, self.height-1, 1 do
		for x = 0, self.width-1, 1 do
			local old, new = arr[x][y], 0
			if old >  0.5 then
				new = 1
				-- Only setting white pixels, because the image is already black.
				self.img:setPixel(x, y, 1, 1, 1, 1) 
			end
			local quant_error = old - new
		
			--dithering here.
			if _isset(arr, x+1, y  ) then arr[x+1][y  ] = arr[x+1][y  ] + 0.5  * quant_error end
			if _isset(arr, x-1, y+1) then arr[x-1][y+1] = arr[x-1][y+1] + 0.25 * quant_error end
			if _isset(arr, x  , y+1) then arr[x  ][y+1] = arr[x  ][y+1] + 0.25 * quant_error end
		end
	end
	self.img  = love.graphics.newImage(self.img)
end
	
	-- Sobel filter:
	-- https://youtu.be/jlKNOirh66E
	-- vertical
	-- +-----+-----+-----+
    -- |  1  |  0  | -1  |
	-- +-----+-----+-----+
    -- |  2  |  0  | -2  |
	-- +-----+-----+-----+
    -- |  1  |  0  | -1  |
	-- +-----+-----+-----+
	-- 
	-- horizontal
	-- +-----+-----+-----+
    -- |  1  |  2  |  1  |
	-- +-----+-----+-----+
    -- |  0  |  0  |  0  |
	-- +-----+-----+-----+
    -- | -1  | -2  | -1  |
	-- +-----+-----+-----+
	
	
--[[ 
https://en.wikipedia.org/wiki/Sobel_operator#MATLAB_implementation
clc
clear all
close all

test_img = imread('gantrycrane.png');
gray_img = rgb2gray(test_img);
sobel_img = sobel(gray_img);

figure
imshow(test_img)

figure
imshow(gray_img)

figure
imshow(sobel_img)

function output_image = sobel(A)
Gx = [-1 0 1; -2 0 2; -1 0 1]
Gy = [-1 -2 -1; 0 0 0; 1 2 1]

rows = size(A, 1)
columns = size(A, 2)
mag = zeros(size(A));

A = double(A);

for i=1:rows-2
    for j=1:columns-2
	    S1 = sum(sum(Gx.*A(i:i+2, j:j+2)));
	    S2 = sum(sum(Gy.*A(i:i+2, j:j+2)));

	    mag(i + 1, j + 1) = sqrt(S1.^2 + S2.^2);
    end
end

threshold = 70 % varies for application [0–255]
output_image = max(mag, threshold);
output_image(output_image == round(threshold)) = 0;
end
 --------------- 
 --------------- 
img = ChunkyPNG::Image.from_file('engine.png')

sobel_x = [ [-1,0,1],
            [-2,0,2],
            [-1,0,1] ]

sobel_y = [ [-1,-2,-1],
            [0,0,0],
            [1,2,1] ]

edge = ChunkyPNG::Image.new(img.width, img.height, ChunkyPNG::Color::TRANSPARENT)

for x in 1..img.width-2
  for y in 1..img.height-2
    pixel_x = (sobel_x[0][0] * img.at(x-1,y-1)) + (sobel_x[0][1] * img.at(x,y-1)) + (sobel_x[0][2] * img.at(x+1,y-1)) +
              (sobel_x[1][0] * img.at(x-1,y))   + (sobel_x[1][1] * img.at(x,y))   + (sobel_x[1][2] * img.at(x+1,y)) +
              (sobel_x[2][0] * img.at(x-1,y+1)) + (sobel_x[2][1] * img.at(x,y+1)) + (sobel_x[2][2] * img.at(x+1,y+1))

    pixel_y = (sobel_y[0][0] * img.at(x-1,y-1)) + (sobel_y[0][1] * img.at(x,y-1)) + (sobel_y[0][2] * img.at(x+1,y-1)) +
              (sobel_y[1][0] * img.at(x-1,y))   + (sobel_y[1][1] * img.at(x,y))   + (sobel_y[1][2] * img.at(x+1,y)) +
              (sobel_y[2][0] * img.at(x-1,y+1)) + (sobel_y[2][1] * img.at(x,y+1)) + (sobel_y[2][2] * img.at(x+1,y+1))

    val = Math.sqrt((pixel_x * pixel_x) + (pixel_y * pixel_y)).ceil
    edge[x,y] = ChunkyPNG::Color.grayscale(val)
  end
end
--]]
	
function savePng(filename)
	--return imagepng($this->_img, $filename, $quality, $filters);
end