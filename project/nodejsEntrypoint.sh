#!/bin/bash

npm install
if [ "$ENVIRONMENT" == "product" ];
    then
        npm run prod
    else
        npm run watch
fi