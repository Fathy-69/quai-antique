up:
	docker compose up -d

down:
	docker compose down

build:
	docker compose up -d --build

migrate:
	docker compose exec -T db mysql -u root -psecret quai_antique < sql/01_schema.sql
	docker compose exec -T db mysql -u root -psecret quai_antique < sql/02_indexes.sql
	docker compose exec -T db mysql -u root -psecret quai_antique < sql/03_fixtures.sql
