#!/bin/bash
FOLDER='legalsuccessindia.com'
RED='\033[0;31m'
GREEN='\033[0;32m'
WHITE='\033[0;37m'

error(){
	if ! $1; then
		echo -e "${RED} Error: ${GREEN} $2 ${WHITE}"
        	exit 1
	fi
}

#remove the folder
error "rm -rf ${FOLDER}/" "deleting ${FOLDER} folder failed..."

#recreate the folder
error "mkdir ${FOLDER}" "making ${FOLDER} folder failed"

#go into the folder
cd ${FOLDER}

#clone a git repo
error "git clone https://github.com/chandan332/legalsuccessindia.git ." "failed to clone the git repo"

#run deploy
chmod +x .hostinger/deploy.sh
.hostinger/deploy.sh

#exit
exit
