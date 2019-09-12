#!/bin/bash
rsync -avz -P \
	--exclude='.git/' \
	--exclude='backend/runtime/' \
    --exclude='backend/web/assets/' \
	--exclude='console/runtime/' \
	--exclude='frontend/runtime/' \
    --exclude='frontend/web/assets/' \
	--exclude='vendor/' \
	--exclude='.env' \
    --exclude='composer.lock' \
    . \
    hi-institute-dev@192.168.0.127:/home/hi-institute-dev/AppHiInstitute;