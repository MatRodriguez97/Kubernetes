FROM php:apache

RUN <<EOF
apt-get update
apt-get install -y --no-install-recommends git
useradd -s /bin/bash -m vscode
groupadd docker
usermod -aG docker vscode
EOF
# install Docker tools (cli, buildx, compose)
COPY --from=gloursdocker/docker / /

CMD ["apache2-foreground"]
