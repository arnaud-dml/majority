SUDO					= sudo
PROJECT_PATH			= $(PWD)
APP_CLIENT_PATH			= $(PROJECT_PATH)/client
APP_SERVER_PATH			= $(PROJECT_PATH)/server
MYSQL_ROOT_PASSWORD		= XXXX
DOCKER_FILE				= docker-compose.yml
TARGET_DOCKER_WEB_CONTAINER = docker exec -it project.local-web

export APP_ENV				= dev
export APACHE_PORT			= 80
export MYSQL_PORT			= 3306
export APP_URL				= project.local
export WEB_URL				= 192.168.33.10
export MYSQL_ROOT_PASSWORD	= XXXX
export ADMINER_PORT			= 8080
export NODE_SERVER_PORT		= 3000

## L'utilisation de la cible ".PHONY" permet d'utiliser make comme un simple système d'alias
.PHONY: install git docker-start composer yarn

install: git docker-start composer yarn
travis: migrations tests

git:
ifdef GIT_BRANCH
	git add --all && git stash && git checkout $(GIT_BRANCH) && git fetch -p && git rebase
endif

docker-start:
	docker-compose up -d

composer: server/composer.json
ifdef TARGET_DOCKER_WEB_CONTAINER
	cd $(APP_SERVER_PATH) && $(TARGET_DOCKER_WEB_CONTAINER) composer install
endif

yarn: client/yarn.lock
ifdef TARGET_DOCKER_WEB_CONTAINER
	cd $(APP_CLIENT_PATH) && $(TARGET_DOCKER_WEB_CONTAINER) yarn install
endif

migrations: server/src/Migrations
ifdef TARGET_DOCKER_WEB_CONTAINER
	# $(TARGET_DOCKER_WEB_CONTAINER) php bin/console --no-interaction doctrine:migrations:migrate
	cd $(APP_SERVER_PATH) && $(TARGET_DOCKER_WEB_CONTAINER) php bin/console --no-interaction doctrine:migrations:migrate
endif

tests: server/tests
ifdef TARGET_DOCKER_WEB_CONTAINER
	# $(TARGET_DOCKER_WEB_CONTAINER) phpunit --coverage-clover=coverage.xml --testdox
	cd $(APP_SERVER_PATH) && $(TARGET_DOCKER_WEB_CONTAINER) phpunit --coverage-clover=coverage.xml --testdox
endif

## cd project && $(TARGET_DOCKER_WEB_CONTAINER) encore dev --watch
## cd project && sudo rm -rf var/cache/* && sudo rm -rf var/logs/* && sudo chmod -R 777 var
## cd $(APP_PATH) && $(SUDO) rm -rf var/cache/* && $(SUDO) rm -rf var/logs/* && $(SUDO) chmod -R 777 var && $(SUDO) chmod -R 777 public/uploads

## ?+ phpmetrics/phpmetrics
