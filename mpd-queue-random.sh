#!/bin/bash

file=`mpc -h $1@localhost listall -q | shuf -n 1`
./mpd-queue.sh $1 "$file"
echo $file
