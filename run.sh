# it will start the container with name "string-cli"
[ ! "$(docker ps -a | grep string-service)" ] && docker run -d -it -v $(pwd):/app --name=string-service string-cli