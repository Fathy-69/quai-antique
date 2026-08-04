#!/bin/bash
# DB import script for Quai Antique
echo "Importation des schémas et fixtures SQL dans MariaDB..."
docker compose exec -T db mysql -u root -psecret quai_antique < sql/01_schema.sql
docker compose exec -T db mysql -u root -psecret quai_antique < sql/02_indexes.sql
docker compose exec -T db mysql -u root -psecret quai_antique < sql/03_fixtures.sql
echo "Importation terminée avec succès !"
