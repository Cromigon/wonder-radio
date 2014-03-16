#!/bin/bash

mpc -h $1@localhost crop -q
mpc -h $1@localhost add "$2" -q
mpc -h $1@localhost play -q
