# IedereenHelpt API

## Running locally with Docker & Docker Compose
Setup `.env` file
```
cp .env.example .env
```

Install dependencies
```
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp \
  composer install --ignore-platform-reqs --no-scripts
```

Start project
```
docker-compose up
```

Visit `127.0.0.1:8080` in your browser. The project should be up.
