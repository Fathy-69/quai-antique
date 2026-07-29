---
type: projet
projet: Quai Antique
statut: Valide
tags:
  - projet/quai-antique
  - statut/Valide
---

# Compte-Rendu & Choix Méthodologiques (Agile / Scrum)

> [!NOTE]
> Ce document synthétise la démarche de gestion de projet adoptée pour la réalisation de l'application Web **Quai Antique**, basée sur la méthodologie **Agile Scrum** avec découpage en User Stories et suivi visuel dynamique par tableau **Kanban intégré dans Obsidian** (via le fichier [[Kanban.md]]).

## Suivi de Rédaction
- **Auteur** : Étudiant / Antigravity
- **Date de création** : 2026-07-10
- **Dernière mise à jour** : 2026-07-29

---

## 🎯 1. Démarche Méthodologique retenue

Pour répondre au besoin du Chef Arnaud Michant dans les délais impartis de l'évaluation ECF (70 heures) :
1. **Approche par User Stories (US1 à US7)** : Chaque exigence du client (Chef Michant) a été traduite en User Story avec ses critères d'acceptation précis (ex: règle de la dernière heure, tranches de 15 min, auto-remplissage des allergies).
2. **Organisation par Sprints** :
   - **Sprint 1 (Conception & Infrastructure)** : Cahier des charges, Wireframes UI/UX, MCD/MLD SQL, Docker & WSL setup.
   - **Sprint 2 (Socle Back-end & Base de Données)** : Scripts SQL manuels (`schema.sql`, `fixtures.sql`), PDO Singleton, Framework MVC, Authentification (US1 & US7).
   - **Sprint 3 (Fonctionnalités Métier Front & Back)** : Carte & Menus (US3 & US4), Galerie photos (US2), Horaires dynamiques (US5).
   - **Sprint 4 (Module Critique Réservation & Finalisation)** : Module de réservation AJAX temps réel (US6), tests automatisés, livrables PDF et recette.
3. **Tableau Kanban dans Obsidian** : Suivi visuel des tâches en colonnes (*À faire*, *En cours*, *En révision / Test*, *Terminé*) géré nativement via le plugin **Obsidian Kanban** dans le fichier [[Kanban.md]].

---

## 🛠️ 2. Arbitrages Techniques et Justifications

* **Pourquoi PHP 8.1 MVC natif plutôt qu'un Framework lourd ?**
  - Permet d'avoir un contrôle total sur l'architecture, de comprendre le fonctionnement interne du Front Controller et d'alléger le temps de build Docker sans surcouche inutile pour ce projet vitrine/réservation.
* **Pourquoi du Vanilla JavaScript (Fetch API) pour l'AJAX ?**
  - Aucune dépendance tierce à charger pour la vérification dynamique des créneaux de réservation. Exécution instantanée sur le navigateur.
* **Pourquoi MySQL 8.0 avec scripts manuels ?**
  - Respect strict des exigences du Titre Pro DWWM (maîtrise du langage DDL/DML SQL).
* **Pourquoi l'adoption du logo calligraphique authentique transparent (`logo_authentic.png`) ?**
  - Assure une fidélité visuelle 100% conforme au tablier du Chef Arnaud Michant.
  - Contourne les limitations CORS des balises SVG `<img>` sur le chargement des polices web sous Windows, éliminant tout risque de rendu indésirable (Comic Sans MS).





