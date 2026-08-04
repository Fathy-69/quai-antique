#!/bin/bash
# Setup WSL script for Quai Antique
echo "Initialisation de l'environnement WSL..."
chmod +x scripts/*.sh
mkdir -p storage/cache storage/logs storage/uploads
chmod -R 777 storage
echo "Permissions et répertoires WSL prêts !"
