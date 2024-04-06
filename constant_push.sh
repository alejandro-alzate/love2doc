# This code constantly pushes the progress
# of httrack to the repository
# since automation in the repository itself is capped at 6 hour max
# this avoids corruption on power losses and such but also another
# reason this script exist is quite petty, so my commit history gets
# inflated more than I'll ever be able to do legitimately.

# Disclaimer: this DOES NOT PULL FROM love2d.org/
# This is the command to do so,
# make sure to execute this at the root of the folder:
# httrack love2d.org/wiki -p7

MSG="Automatic partial update at: "
COOLDOWN="1h"

function upload() {
	git push
}

function commit() {
	git commit -m "$MSG $(date)"
}

function add() {
	git add *
}

function loop() {
	add
	commit
	upload
	sleep $COOLDOWN
	loop
}

loop