# Docker Containers

### How to create an Image
Build the image with your DockerHub username:
`docker image build -t <YOUR_USERNAME>/pwp .`
  * `-t` allows us to give the image our own name
  * `.` refers to where you want to create the image from
#### Check for the image:
`docker image ls`
#### Create a new container from the image:
`docker container run --rm --name pwp -p 80:80 -d <YOUR_USERNAME>/pwp`
* `--rm` means to delete the container when it stops running (default is to be manually removed)
* `--name` is optional but highly reccommended. Naming a container lets you reference it in commands by name instead of container id.
* `-p 80:80` means to publish Docker's port 80 to your local machine's port 80 (port 80 is the default port for http)
* `-d` means to run in detach mode, or in other words in the background of your terminal
#### Check for the running container
`docker container ls` vs `docker ps`
    * I prefer `docker container ls` 