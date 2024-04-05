# This code constantly pushes the progress
# of httrack to the repository
# since automation in the repository itself is capped at 6 hour max
# this avoids corruption on power losses and such but also another
# reason this script exist is quite petty, so my commit history gets
# inflated more than I'll ever be able to do legitimately.

MSG="Automatic partial update"
COOLDOWN="30"

function upload() {
	git push
}

function commit() {
	git commit -m "$MSG At: $(date)"
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