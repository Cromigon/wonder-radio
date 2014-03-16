#!/bin/bash

mpc -h $1@localhost clear -q
#mpc -h $1@:: current -f "%file%@@%title%@@%artist%" -q

while : ; do
	mpc -h $1@localhost current --wait -f "%file%@@%title%@@%artist%" -q
done
