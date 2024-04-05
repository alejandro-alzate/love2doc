# This code constanly pushes the progress
# of httrack to the repository
# since automation in the repository itself is capped at 6hr max
# this avoids corruption on power losses and such but also another
# reason this script exist is quite petty, so my commit history gets
# inflated more than i'll ever be able to do legitimate.

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