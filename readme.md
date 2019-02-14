docker run -it --name db --hostname db -v $(pwd):/app --workdir /app -p 21112:3306 ubuntu:18.04 bin/bash

mysql 