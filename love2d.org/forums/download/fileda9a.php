<?xml version="1.0" encoding="Windows-1252" ?>
<NotepadPlus>
	<AutoComplete language="Lua">
		<Environment ignoreCase="yes" startFunc="(" stopFunc=")" paramSeparator="," terminal=";" additionalWordChar="."/>
		
		<KeyWord name="love"/>
		
		<KeyWord name="love.audio"/>
		<KeyWord name="love.audio.getNumSources" func="yes">
			<Overload retVal="number numSources"/>
        </KeyWord>
		<KeyWord name="love.audio.getOrientation" func="yes">
			<Overload retVal="floatArray vectorsForwardUpXYZ"/>
        </KeyWord>
		<KeyWord name="love.audio.getPosition" func="yes">
			<Overload retVal="floatArray vectorXYZ"/>
        </KeyWord>
		<KeyWord name="love.audio.getVelocity" func="yes">
			<Overload retVal="number x, number y, number z"/>
        </KeyWord>
		<KeyWord name="love.audio.getVolume" func="yes">
			<Overload retVal="number volume"/>
        </KeyWord>
		<KeyWord name="love.audio.newSource" func="yes">
			<Overload retVal="Source source">
				<Param name="string file"/>
				<Param name="SourceType source"/>
			</Overload>
			<Overload retVal="Source source">
				<Param name="SoundData data"/>
			</Overload>
			<Overload retVal="Source source">
				<Param name="Decoder decoder"/>
				<Param name="SourceType source"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.audio.pause" func="yes">
			<Overload retVal=""/>
			<Overload retVal="">
				<Param name="Source source"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.audio.play" func="yes">
			<Overload retVal="">
				<Param name="Source source"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.audio.resume" func="yes">
			<Overload retVal=""/>
			<Overload retVal="">
				<Param name="Source source"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.audio.rewind" func="yes">
			<Overload retVal=""/>
			<Overload retVal="">
				<Param name="Source source"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.audio.setOrientation" func="yes">
			<Overload retVal="">
				<Param name="floatArray vectorForwardUpXYZ"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.audio.setPosition" func="yes">
			<Overload retVal="">
				<Param name="floatArray vectorXYZ"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.audio.setVelocity" func="yes">
			<Overload retVal="">
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number z"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.audio.setVolume" func="yes">
			<Overload retVal="">
				<Param name="number volume"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.audio.stop" func="yes">
			<Overload retVal=""/>
			<Overload retVal="">
				<Param name="Source source"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.draw" func="yes">
			<Overload retVal=""/>
		</KeyWord>
		
		<KeyWord name="love.event"/>
        <KeyWord name="love.event.clear" func="yes">
            <Overload retVal=""/>
        </KeyWord>
		<KeyWord name="love.event.poll" func="yes">
			<Overload retVal="function iterator"/>
        </KeyWord>
		<KeyWord name="love.event.pump" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		<KeyWord name="love.event.push" func="yes">
			<Overload retVal="">
				<Param name="Event e"/>
				<Param name="mixed eventArgA (default:nil)"/>
				<Param name="mixed eventArgB (default:nil)"/>
				<Param name="mixed eventArgC (default:nil)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.event.wait" func="yes">
			<Overload retVal="Event e, mixed eventArgA, mixed eventArgB, mixed eventArgC"/>
        </KeyWord>
		
		<KeyWord name="love.filesystem"/>
		<KeyWord name="love.filesystem.enumerate" func="yes">
			<Overload retVal="table files">
				<Param name="string dir"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.exists" func="yes">
			<Overload retVal="boolean exists">
				<Param name="string filename"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.getAppdataDirectory" func="yes">
			<Overload retVal="string path" />
		</KeyWord>
        <KeyWord name="love.filesystem.getLastModified" func="yes">
            <Overload retVal="number modtime, string errormsg">
                <Param name="string filename"/>
            </Overload>
        </KeyWord>
		<KeyWord name="love.filesystem.getSaveDirectory" func="yes">
			<Overload retVal="string path" />
		</KeyWord>
		<KeyWord name="love.filesystem.getUserDirectory" func="yes">
			<Overload retVal="string path" />
		</KeyWord>
		<KeyWord name="love.filesystem.getWorkingDirectory" func="yes">
			<Overload retVal="string path" />
		</KeyWord>
		<KeyWord name="love.filesystem.init" func="yes">
			<Overload retVal=""/>
		</KeyWord>
		<KeyWord name="love.filesystem.isDirectory" func="yes">
			<Overload retVal="boolean is_dir">
				<Param name="string path"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.isFile" func="yes">
			<Overload retVal="boolean is_file">
				<Param name="string filename"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.lines" func="yes">
			<Overload retVal="function iterator">
				<Param name="string filename"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.load" func="yes">
			<Overload retVal="function chunk">
				<Param name="string filename"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.mkdir" func="yes">
			<Overload retVal="boolean ok">
				<Param name="string name"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.newFile" func="yes">
			<Overload retVal="File file">
				<Param name="string filename"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.read" func="yes">
			<Overload retVal="string contents, number size">
				<Param name="string filename"/>
				<Param name="number size (default:all)"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.remove" func="yes">
			<Overload retVal="boolean ok">
				<Param name="string filename"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.setIdentity" func="yes">
			<Overload retVal="">
				<Param name="string name"/>
			</Overload>
		</KeyWord>
		<KeyWord name="love.filesystem.setSource" func="yes">
			<Overload retVal=""/>
		</KeyWord>
		<KeyWord name="love.filesystem.write" func="yes">
			<Overload retVal="boolean success">
				<Param name="string filename"/>
				<Param name="string data"/>
				<Param name="string size (default:all)"/>
			</Overload>
		</KeyWord>

        <KeyWord name="love.focus" func="yes">
            <Overload retVal=""/>
        </KeyWord>

        <KeyWord name="love.font"/>
        <KeyWord name="love.font.newFontData" func="yes">
            <Overload retVal="FontData fontData">
                <Param name="Rasterizer rasterizer"/>
            </Overload>
        </KeyWord>
        <KeyWord name="love.font.newGlyphData" func="yes">
            <Overload retVal="GlyphData glyphData">
                <Param name="Rasterizer rasterizer"/>
                <Param name="number glyph"/>
            </Overload>
        </KeyWord>
        <KeyWord name="love.font.newRasterizer" func="yes">
            <Overload retVal="Rasterizer rasterizer">
                <Param name="ImageData imageData"/>
                <Param name="string glyphs"/>
            </Overload>
        </KeyWord>
		
		<KeyWord name="love.graphics"/>
		<KeyWord name="love.graphics.checkMode" func="yes">
			<Overload retVal="boolean supported">
				<Param name="number width"/>
				<Param name="number height"/>
				<Param name="boolean fullscreen"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.circle" func="yes">
			<Overload retVal="">
				<Param name="DrawMode mode"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number radius"/>
				<Param name="number segments (default:8)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.draw" func="yes">
			<Overload retVal="">
				<Param name="Drawable drawable"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number rotationRadians (default:0)"/>
				<Param name="number scaleX (default:1)"/>
				<Param name="number scaleY (default:scaleX)"/>
				<Param name="number offsetX (default:0)"/>
				<Param name="number offsetY (default:0)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.drawq" func="yes">
			<Overload retVal="">
				<Param name="Image image"/>
				<Param name="Quad quad"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number rotationRadians (default:0)"/>
				<Param name="number scaleX (default:1)"/>
				<Param name="number scaleY (default:scaleX)"/>
				<Param name="number offsetX (default:0)"/>
				<Param name="number offsetY (default:0)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.getBackgroundColor" func="yes">
			<Overload retVal="number red, number green, number blue"/>
        </KeyWord>
		<KeyWord name="love.graphics.getBlendMode" func="yes">
			<Overload retVal="BlendMode mode"/>
        </KeyWord>
		<KeyWord name="love.graphics.getCaption" func="yes">
			<Overload retVal="string caption"/>
        </KeyWord>
		<KeyWord name="love.graphics.getColor" func="yes">
			<Overload retVal="number red, number green, number blue, number alpha"/>
        </KeyWord>
		<KeyWord name="love.graphics.getColorMode" func="yes">
			<Overload retVal="ColorMode mode"/>
        </KeyWord>
		<KeyWord name="love.graphics.getFont" func="yes">
			<Overload retVal="Font font"/>
        </KeyWord>
		<KeyWord name="love.graphics.getHeight" func="yes">
			<Overload retVal="number height"/>
        </KeyWord>
		<KeyWord name="love.graphics.getLineStipple" func="yes">
			<Overload retVal="number pattern, number repeat"/>
        </KeyWord>
		<KeyWord name="love.graphics.getLineStyle" func="yes">
			<Overload retVal="LineStyle style"/>
        </KeyWord>
		<KeyWord name="love.graphics.getLineWidth" func="yes">
			<Overload retVal="number width"/>
        </KeyWord>
		<KeyWord name="love.graphics.getMaxPointSize" func="yes">
			<Overload retVal="number size"/>
        </KeyWord>
		<KeyWord name="love.graphics.getModes" func="yes">
			<Overload retVal="table supportedModes"/>
        </KeyWord>
		<KeyWord name="love.graphics.getPointSize" func="yes">
			<Overload retVal="number size"/>
        </KeyWord>
		<KeyWord name="love.graphics.getPointStyle" func="yes">
			<Overload retVal="PointStyle style"/>
        </KeyWord>
		<KeyWord name="love.graphics.getScissor" func="yes">
			<Overload retVal="number x, number y, number width, number height"/>
        </KeyWord>
		<KeyWord name="love.graphics.getWidth" func="yes">
			<Overload retVal="number width"/>
        </KeyWord>
		<KeyWord name="love.graphics.isCreated" func="yes">
			<Overload retVal="boolean is_created"/>
        </KeyWord>
		<KeyWord name="love.graphics.line" func="yes">
			<Overload retVal="">
				<Param name="number x1"/>
				<Param name="number y1"/>
				<Param name="number x2"/>
				<Param name="number y2"/>
				<Param name="number ..."/>
			</Overload>
			<Overload retVal="">
				<Param name="table points"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.newFont" func="yes">
			<Overload retVal="Font font">
				<Param name="string filename"/>
				<Param name="number size (default:12)"/>
			</Overload>
			<Overload retVal="Font font">
				<Param name="number size (default:12)"/>
			</Overload>
        </KeyWord>
        <KeyWord name="love.graphics.newFramebuffer" func="yes">
            <Overload retVal="Framebuffer framebuffer"/>
            <Overload retVal="Framebuffer framebuffer">
                <Param name="number width"/>
                <Param name="number height"/>
            </Overload>
        </KeyWord>
		<KeyWord name="love.graphics.newImage" func="yes">
			<Overload retVal="Image image">
				<Param name="string filename"/>
			</Overload>
			<Overload retVal="Image image">
				<Param name="File file"/>
			</Overload>
			<Overload retVal="Image image">
				<Param name="ImageData data"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.newImageFont" func="yes">
			<Overload retVal="Font font">
				<Param name="Image image"/>
				<Param name="string glyphs"/>
			</Overload>
			<Overload retVal="Font font">
				<Param name="string filename"/>
				<Param name="string glyphs"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.newParticleSystem" func="yes">
			<Overload retVal="ParticleSystem system">
				<Param name="Image image"/>
				<Param name="number bufferSize"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.newQuad" func="yes">
			<Overload retVal="Quad quad">
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number width"/>
				<Param name="number height"/>
				<Param name="number referenceWidth"/>
				<Param name="number referenceHeight"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.newScreenshot" func="yes">
			<Overload retVal="ImageData screenshot"/>
        </KeyWord>
		<KeyWord name="love.graphics.newSpriteBatch" func="yes">
			<Overload retVal="SpriteBatch batch">
				<Param name="Image image"/>
				<Param name="number size (default:1000)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.point" func="yes">
			<Overload retVal="">
				<Param name="number x"/>
				<Param name="number y"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.polygon" func="yes">
			<Overload retVal="">
				<Param name="DrawMode mode"/>
				<Param name="number x1"/>
				<Param name="number y1"/>
				<Param name="number x2"/>
				<Param name="number y2"/>
				<Param name="number ..."/>
			</Overload>
			<Overload retVal="">
				<Param name="DrawMode mode"/>
				<Param name="table vertices"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.pop" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		<KeyWord name="love.graphics.present" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		<KeyWord name="love.graphics.print" func="yes">
			<Overload retVal="">
				<Param name="string text"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number rotationRadians (default:0)"/>
				<Param name="number scaleX (default:1)"/>
				<Param name="number scaleY (default:scaleX)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.printf" func="yes">
			<Overload retVal="">
				<Param name="string text"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number limit"/>
				<Param name="AlignMode align (default:left)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.push" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		<KeyWord name="love.graphics.rectangle" func="yes">
			<Overload retVal="">
				<Param name="DrawMode mode"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number width"/>
				<Param name="number height"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.reset" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		<KeyWord name="love.graphics.rotate" func="yes">
			<Overload retVal="">
				<Param name="number angleRadians"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.scale" func="yes">
			<Overload retVal="">
				<Param name="number scaleX"/>
				<Param name="number scaleY (default:scaleX)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setBackgroundColor" func="yes">
			<Overload retVal="">
				<Param name="number red"/>
				<Param name="number green"/>
				<Param name="number blue"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setBlendMode" func="yes">
			<Overload retVal="">
				<Param name="BlendMode mode"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setCaption" func="yes">
			<Overload retVal="">
				<Param name="string caption"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setColor" func="yes">
			<Overload retVal="">
				<Param name="number red"/>
				<Param name="number green"/>
				<Param name="number blue"/>
				<Param name="number alpha (default:255)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setColorMode" func="yes">
			<Overload retVal="">
				<Param name="ColorMode mode"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setFont" func="yes">
			<Overload retVal="">
				<Param name="Font font"/>
			</Overload>
			<Overload retVal="">
				<Param name="string filename"/>
				<Param name="number size"/>
			</Overload>
			<Overload retVal="">
				<Param name="number size"/>
			</Overload>
        </KeyWord>
        <KeyWord name="love.graphics.setIcon" func="yes">
            <Overload retVal="">
                <Param name="Drawable drawable"/>
            </Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setLine" func="yes">
			<Overload retVal="">
				<Param name="number width"/>
				<Param name="LineStyle style (default:smooth)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setLineStipple" func="yes">
			<Overload retVal="">
				<Param name="number pattern"/>
				<Param name="number repeat (default:1)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setLineStyle" func="yes">
			<Overload retVal="">
				<Param name="LineStyle style"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setLineWidth" func="yes">
			<Overload retVal="">
				<Param name="number width"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setMode" func="yes">
			<Overload retVal="">
				<Param name="number width"/>
				<Param name="number height"/>
				<Param name="boolean fullscreen (default:false)"/>
				<Param name="boolean vsync (default:true)"/>
				<Param name="number fsaa (default:0)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setPoint" func="yes">
			<Overload retVal="">
				<Param name="number size"/>
				<Param name="PointStyle style"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setPointSize" func="yes">
			<Overload retVal="">
				<Param name="number size"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setPointStyle" func="yes">
			<Overload retVal="">
				<Param name="PointStyle style"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.setScissor" func="yes">
			<Overload retVal=""/>
			<Overload retVal="">
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number width"/>
				<Param name="number height"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.toggleFullscreen" func="yes">
			<Overload retVal="boolean success"/>
        </KeyWord>
		<KeyWord name="love.graphics.translate" func="yes">
			<Overload retVal="">
				<Param name="number dx"/>
				<Param name="number yx"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.graphics.triangle" func="yes">
			<Overload retVal="">
				<Param name="DrawMode mode"/>
				<Param name="number x1"/>
				<Param name="number y1"/>
				<Param name="number x2"/>
				<Param name="number y2"/>
				<Param name="number x3"/>
				<Param name="number y3"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.image"/>
		<KeyWord name="love.image.newEncodedImageData" func="yes">
			<Overload retVal="Data data">
				<Param name="ImageData imageData"/>
				<Param name="ImageFormat format"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.image.newImageData" func="yes">
			<Overload retVal="ImageData data">
				<Param name="number width"/>
				<Param name="number height"/>
			</Overload>
			<Overload retVal="ImageData data">
				<Param name="string filename"/>
			</Overload>
			<Overload retVal="ImageData data">
				<Param name="File file"/>
			</Overload>
			<Overload retVal="ImageData data">
				<Param name="Data data"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.joystick"/>
		<KeyWord name="love.joystick.close" func="yes">
			<Overload retVal="">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getAxes" func="yes">
			<Overload retVal="number axisDir1, number axisDir2, number axisDirN"/>
        </KeyWord>
		<KeyWord name="love.joystick.getAxis" func="yes">
			<Overload retVal="number direction">
				<Param name="number joystick"/>
				<Param name="number axis"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getBall" func="yes">
			<Overload retVal="number dx, number dy"/>
        </KeyWord>
		<KeyWord name="love.joystick.getHat" func="yes">
			<Overload retVal="JoystickConstant direction">
				<Param name="number joystick"/>
				<Param name="number hat"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getName" func="yes">
			<Overload retVal="string name"/>
        </KeyWord>
		<KeyWord name="love.joystick.getNumAxes" func="yes">
			<Overload retVal="number axes">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getNumBalls" func="yes">
			<Overload retVal="number balls">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getNumButtons" func="yes">
			<Overload retVal="number buttons">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getNumHats" func="yes">
			<Overload retVal="number hats">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.getNumJoysticks" func="yes">
			<Overload retVal="number joysticks"/>
        </KeyWord>
		<KeyWord name="love.joystick.isDown" func="yes">
			<Overload retVal="boolean down">
				<Param name="number joystick"/>
				<Param name="number button1"/>
			</Overload>
            <Overload retVal="boolean anyDown">
                <Param name="number joystick"/>
				<Param name="number button1"/>
				<Param name="number button2"/>
				<Param name="number buttonN"/>
            </Overload>
        </KeyWord>
		<KeyWord name="love.joystick.isOpen" func="yes">
			<Overload retVal="boolean open">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystick.open" func="yes">
			<Overload retVal="">
				<Param name="number joystick"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.joystickpressed" func="yes">
			<Overload retVal="">
				<Param name="number joystick"/>
				<Param name="number button"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.joystickreleased" func="yes">
			<Overload retVal="">
				<Param name="number joystick"/>
				<Param name="number button"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.keyboard"/>
		<KeyWord name="love.keyboard.getKeyRepeat" func="yes">
			<Overload retVal="number delay, number interval"/>
        </KeyWord>
		<KeyWord name="love.keyboard.isDown" func="yes">
			<Overload retVal="boolean down">
				<Param name="KeyConstant key"/>
			</Overload>
            <Overload retVal="boolean anydown">
				<Param name="KeyConstant key1"/>
				<Param name="KeyConstant key2"/>
				<Param name="KeyConstant keyN"/>
            </Overload>
        </KeyWord>
		<KeyWord name="love.keyboard.setKeyRepeat" func="yes">
			<Overload retVal="">
				<Param name="number delay"/>
				<Param name="number interval"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.keypressed" func="yes">
			<Overload retVal="">
				<Param name="KeyConstant key"/>
				<Param name="number unicode"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.keyreleased" func="yes">
			<Overload retVal="">
				<Param name="KeyConstant key"/>
				<Param name="number unicode"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.load" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		
		<KeyWord name="love.mouse"/>
		<KeyWord name="love.mouse.getPosition" func="yes">
			<Overload retVal="number x, number y"/>
        </KeyWord>
		<KeyWord name="love.mouse.getX" func="yes">
			<Overload retVal="number x"/>
        </KeyWord>
		<KeyWord name="love.mouse.getY" func="yes">
			<Overload retVal="number y"/>
        </KeyWord>
		<KeyWord name="love.mouse.isDown" func="yes">
			<Overload retVal="boolean down">
				<Param name="MouseConstant button"/>
			</Overload>
            <Overload retVal="boolean anyDown">
				<Param name="MouseConstant button1"/>
				<Param name="MouseConstant button2"/>
				<Param name="MouseConstant buttonN"/>
            </Overload>
        </KeyWord>
		<KeyWord name="love.mouse.isGrabbed" func="yes">
			<Overload retVal="boolean grabbed"/>
        </KeyWord>
		<KeyWord name="love.mouse.isVisible" func="yes">
			<Overload retVal="boolean visible"/>
        </KeyWord>
		<KeyWord name="love.mouse.setGrab" func="yes">
			<Overload retVal="">
				<Param name="boolean grab"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.mouse.setPosition" func="yes">
			<Overload retVal="">
				<Param name="number x"/>
				<Param name="number y"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.mouse.setVisible" func="yes">
			<Overload retVal="">
				<Param name="boolean visible"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.mousepressed" func="yes">
			<Overload retVal="">
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="MouseConstant button"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.mousereleased" func="yes">
			<Overload retVal="">
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="MouseConstant button"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.physics"/>
		<KeyWord name="love.physics.newBody" func="yes">
			<Overload retVal="Body body">
				<Param name="World world"/>
				<Param name="number x (default:0)"/>
				<Param name="number y (default:0)"/>
				<Param name="number mass (default:0)"/>
				<Param name="number rotationalInertia (default:0)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newCircleShape" func="yes">
			<Overload retVal="CircleShape shape">
				<Param name="Body body"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number radius"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newDistanceJoint" func="yes">
			<Overload retVal="Joint joint">
				<Param name="Body body1"/>
				<Param name="Body body2"/>
				<Param name="number anchorX1"/>
				<Param name="number anchorY1"/>
				<Param name="number anchorX2"/>
				<Param name="number anchorY2"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newGearJoint" func="yes">
			<Overload retVal="Joint joint">
				<Param name="Joint joint1"/>
				<Param name="Joint joint2"/>
				<Param name="number ratio"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newMouseJoint" func="yes">
			<Overload retVal="Joint joint">
				<Param name="Body body"/>
				<Param name="number x"/>
				<Param name="number y"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newPolygonShape" func="yes">
			<Overload retVal="PolygonShape shape">
				<Param name="Body body"/>
				<Param name="number x1"/>
				<Param name="number y1"/>
				<Param name="number x2"/>
				<Param name="number y2"/>
				<Param name="number ..."/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newPrismaticJoint" func="yes">
			<Overload retVal="Joint joint">
				<Param name="Body body1"/>
				<Param name="Body body2"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number axisX"/>
				<Param name="number axisY"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newPulleyJoint" func="yes">
			<Overload retVal="Joint joint">
				<Param name="Body body1"/>
				<Param name="Body body2"/>
				<Param name="number groundX1"/>
				<Param name="number groundY1"/>
				<Param name="number groundX2"/>
				<Param name="number groundY2"/>
				<Param name="number x1"/>
				<Param name="number y1"/>
				<Param name="number x2"/>
				<Param name="number y2"/>
				<Param name="number ratio"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newRectangleShape" func="yes">
			<Overload retVal="RectangleShape shape">
				<Param name="Body body"/>
				<Param name="number x"/>
				<Param name="number y"/>
				<Param name="number width"/>
				<Param name="number height"/>
				<Param name="number angleRadians (default:0)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newRevoluteJoint" func="yes">
			<Overload retVal="Joint joint">
				<Param name="Body body1"/>
				<Param name="Body body2"/>
				<Param name="number x"/>
				<Param name="number y"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.physics.newWorld" func="yes">
			<Overload retVal="World world">
				<Param name="number x1"/>
				<Param name="number y1"/>
                <Param name="number x2"/>
                <Param name="number y2"/>
			</Overload>
            <Overload retVal="World world">
				<Param name="number x1"/>
				<Param name="number y1"/>
                <Param name="number x2"/>
                <Param name="number y2"/>
                <Param name="number xg"/>
                <Param name="number yg"/>
                <Param name="boolean sleep (default:true)"/>
			</Overload>
        </KeyWord>
		
		<KeyWord name="love.run" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		
		<KeyWord name="love.sound"/>
		<KeyWord name="love.sound.newDecoder" func="yes">
			<Overload retVal="Decoder decoder">
				<Param name="File file"/>
				<Param name="number buffer (default:1024)"/>
				<Param name="number rate (default:44100)"/>
			</Overload>
			<Overload retVal="Decoder decoder">
				<Param name="string filename"/>
				<Param name="number buffer (default:1024)"/>
				<Param name="number rate (default:44100)"/>
			</Overload>
        </KeyWord>
		<KeyWord name="love.sound.newSoundData" func="yes">
			<Overload retVal="SoundData data">
				<Param name="Decoder decoder"/>
			</Overload>
			<Overload retVal="SoundData data">
				<Param name="string filename"/>
			</Overload>
			<Overload retVal="SoundData data">
				<Param name="number samples"/>
				<Param name="number rate"/>
				<Param name="number bits"/>
				<Param name="number channels"/>
			</Overload>
        </KeyWord>
		
        <KeyWord name="love.thread"/>
        <KeyWord name="love.thread.getThread" func="yes">
            <Overload retVal="Thread thread"/>
            <Overload retVal="Thread thread">
                <Param name="string name"/>
            </Overload>
        </KeyWord>
        <KeyWord name="love.thread.getThreads" func="yes">
            <Overload retVal="table threads"/>
        </KeyWord>
        <KeyWord name="love.thread.newThread" func="yes">
            <Overload retVal="Thread thread">
                <Param name="string name"/>
                <Param name="string filename"/>
            </Overload>
            <Overload retVal="Thread thread">
                <Param name="string name"/>
                <Param name="File file"/>
            </Overload>
            <Overload retVal="Thread thread">
                <Param name="string name"/>
                <Param name="Data data"/>
            </Overload>
        </KeyWord>

		<KeyWord name="love.timer"/>
		<KeyWord name="love.timer.getDelta" func="yes">
			<Overload retVal="number dt"/>
        </KeyWord>
		<KeyWord name="love.timer.getFPS" func="yes">
			<Overload retVal="number fps"/>
        </KeyWord>
		<KeyWord name="love.timer.getMicroTime" func="yes">
			<Overload retVal="number timeInSeconds"/>
        </KeyWord>
		<KeyWord name="love.timer.getTime" func="yes">
			<Overload retVal="number timeInSeconds"/>
        </KeyWord>
		<KeyWord name="love.timer.sleep" func="yes">
			<Overload retVal="number millisecondsToSleep"/>
        </KeyWord>
		<KeyWord name="love.timer.step" func="yes">
			<Overload retVal=""/>
        </KeyWord>
		
		<KeyWord name="love.update" func="yes">
			<Overload retVal="">
				<Param name="number timeInSeconds"/>
			</Overload>
        </KeyWord>

        <KeyWord name="love.quit" func="yes">
            <Overload retVal=""/>
        </KeyWord>
	</AutoComplete>
</NotepadPlus>
