MSG="Automatic partial update"
COOLDOWN="1m"

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