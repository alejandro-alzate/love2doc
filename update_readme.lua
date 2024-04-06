local function readAll(file)
	local f = assert(io.open(file, "rb"))
	local content = f:read("*all")
	f:close()
	--print(file, content)
	return content
end

local title = "# LÖVE2DOC"
local localbadge = "[![LOVE](https://img.shields.io/badge/Local_L%%C3%%96VE-%s-EA316E.svg?style=flat-square)](http://love2d.org/)"
local remotbadge = "[![LOVE](https://img.shields.io/badge/Remote_L%%C3%%96VE-%s-EA316E.svg?style=flat-square)](http://love2d.org/)"
local updatebadge = "[![UPTODATE](https://img.shields.io/badge/Up_to_date-%s.svg?style=flat-square)](http://love2d.org/)"
local updatestring = "WAIT%%20WHAT-yellow"
local content = [[Yeah intensional typo is a word game of LÖVE2D and Documentation now getting serious,
Here you can find a copy of LÖVE2D wiki easy for clone.
Feel free to clone it to your machine.

To do so, use the following command:
```bash
git clone git@github.com:alejandro-alzate/love2doc.git
```
Or just click that juicy green button named "Code" then in the underwhelming grey "Download ZIP" button.

When contributing do **not** bother in editing README.md directly because is created dinamically by the `update_readme.lua` script
Being run monthly
]]

--The workflow installs it so don't even bother.
--os.execute("sudo apt-get update\nsudo apt-get install -y curl grep")

local query = [[curl -s https://love2d.org/ | grep -oP '<h2>Download LÖVE \K[0-9]+\.[0-9]+' | tr -d '\n' > remote-version.txt]]
os.execute(query)

local localversion = readAll("latest-version.txt") or "0.0"
local remotversion = readAll("remote-version.txt")
print("local:", localversion, "remote:", remotversion)

--os.execute(string.format("echo '%s' > remote-version.txt", remotversion:gsub("\n", "")))

if tonumber(localversion) < tonumber(remotversion) then
	updatestring = "NO-red"
elseif tonumber(localversion) == tonumber(remotversion) then
	updatestring = "YES-brightgreen"
end

local readmestring = ""
	.. title .. "\n"
	.. string.format(localbadge, localversion:gsub("\n", ""))
	.. "\n"
	.. string.format(remotbadge, remotversion:gsub("\n", ""))
	.. "\n"
	.. string.format(updatebadge, updatestring:gsub("\n", ""))
	.. "\n"
	.. "\n"
	.. content


local lines = {}
local line = ""
for i = 1, readmestring:len() do
	if readmestring:sub(i,i) ~= "\n" then
		line = line .. readmestring:sub(i,i)
	else
		table.insert(lines, line)
		--print(line)
		line = ""
	end
end

os.execute("echo > README.md")
for i, line in ipairs(lines) do
	local cmd = string.format("echo '%s' >> README.md", line)
	--print(cmd)
    os.execute(cmd)
end

print("done.")
os.exit(0)